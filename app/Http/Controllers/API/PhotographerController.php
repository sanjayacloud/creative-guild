<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PhotographerResource;
use App\Models\Photographer;
use App\Models\User;
use Illuminate\Http\Request;

class PhotographerController extends Controller
{
    /**
     * @return false|string
     */
    public function generateToken()
    {
        $user = User::firstOrFail();
        $token = $user->createToken('example_token');

        return json_encode([
            'token' => $token->plainTextToken,
        ], JSON_PRETTY_PRINT, JSON_THROW_ON_ERROR);
    }

    public function photographer()
    {
        return new PhotographerResource(Photographer::with('album')->first());
    }
}
