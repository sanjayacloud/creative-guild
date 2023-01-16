<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photographer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Route;

class PhotographerController extends Controller
{
    public function index(): Response
    {
        $photographer = Photographer::where('user_id', Auth::user()->id)->first();
        $albums = Album::where('photographer_id', $photographer->id)->where('default', false)->get();
        return Inertia::render('Dashboard', [
            'photographer' => $photographer,
            'albums' => $albums,
        ]);
    }
}
