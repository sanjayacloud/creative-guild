<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Photographer;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'phone' => 'required|string|digits:10',
            'bio' => 'required|string|min:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ],
        [
         'name.required' => 'First name is required.'  ,
         'last_name.required' => 'Last name is required.' ,
         'phone.required' => 'Phone number is required.' ,
         'phone.digits' => 'Phone number should have 10 number.' ,
         'bio.min' => 'Bio should have at least 255 characters.' ,
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $phone = substr($request->phone, -10, -7) . "-" . substr($request->phone, -7, -4) . "-" . substr($request->phone, -4);
        Photographer::create([
            'user_id' => $user->id,
            'first_name' => $request->name,
            'last_name' => $request->last_name,
            'phone' => $phone,
            'email' => $request->email,
            'bio' => $request->bio,
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
