<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $program = Program::where('start_date', '>=', (new Carbon())->format('Y-m-d'))
            ->orderBy('start_date')
            ->first();

        return view('home', ['tab' => 'home', 'program' => $program]);
    }
}
