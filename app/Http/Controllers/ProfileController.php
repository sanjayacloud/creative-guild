<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Photographer;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): Response
    {
        $photographer = Photographer::where('user_id', Auth::user()->id)->first();
        return Inertia::render('Profile/Edit', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'photographer' => $photographer,
            'status' => session('status'),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        Photographer::where('user_id',  $request->user()->id)->update([
            'first_name' => $request->name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'bio' => $request->bio,
        ]);

        return Redirect::route('profile.edit');
    }

    public function updateProfilePicture(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:600'
        ],
        [
            'image.required' => 'This image is required',
            'image.max' => 'This image size can not be greater that 600Kb ',
        ]);

        $file_name = Str::slug(Auth::user()->name, '-').'-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/img/uploads/profile'), $file_name);

        Photographer::where('user_id', Auth::user()->id)
            ->firstOrFail()
            ->update([
                'profile_picture' => 'assets/img/uploads/profile/'.$file_name,
            ]);
        return Redirect::route('profile.edit');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
