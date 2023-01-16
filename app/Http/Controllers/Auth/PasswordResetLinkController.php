<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordNotification;
use App\Models\PasswordResets;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Notification;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/ForgotPassword', [
            'status' => session('status'),
            'error' => session('error'),
            'canLogin' => Route::has('login'),
        ]);
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);


        $check24_hours = PasswordResets::where('email', $request->email)
            ->where('created_at', '<',Carbon::parse('-24 hours'))
            ->first();

        $token = Str::random(60);

        if ($check24_hours !=null){
            PasswordResets::where('email', $check24_hours->email)->delete();
            $data =  PasswordResets::create([
                'email' => $request->email,
                'token' => Hash::make($token),
                'code' => Str::random(6),
                'created_at' => Carbon::now(),
            ]);
            $code = $data->code;
            $url = config('app.url').'reset-password/'.$token.'?email='.$data->email .'&code='.$code;
            Mail::to($request->email)->send(new ResetPasswordNotification($url, $code));

            return back()->with('status', 'Reset link has been sent to your mail box');
        }

        $check = PasswordResets::where('email', $request->email)->first();

        if ($check == null){

            $data =  PasswordResets::create([
                'email' => $request->email,
                'token' => Hash::make($token),
                'code' => Str::random(6),
                'created_at' => Carbon::now(),
            ]);
            $code = $data->code;
            $url = config('app.url').'reset-password/'.$token.'?email='.$data->email .'&code='.$code;
            Mail::to($request->email)->send(new ResetPasswordNotification($url, $code));

            return back()->with('status', ('Reset link has been sent to your mail box'));

        } else{
            return back()->with('error', 'Please wait before trying');

        }
    }


}
