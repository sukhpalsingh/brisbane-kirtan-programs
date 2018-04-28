<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'manager', 'admin']);

        $program = Program::where('start_date', '>=', (new Carbon())->format('Y-m-d'))
            ->orderBy('start_date')
            ->first();

        return view('home', ['tab' => 'home', 'program' => $program]);
    }
}
