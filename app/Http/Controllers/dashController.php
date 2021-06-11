<?php

namespace App\Http\Controllers;
use App\Models\psikolog;
use Illuminate\Http\Request;

class dashController extends Controller
{
    $psikolog = psikolog::find(auth()->id());
    return view('psikolog', compact('psikolog'));
}
