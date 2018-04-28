<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use Auth;
use Redirect;
use Carbon\Carbon;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'manager', 'admin']);

        $programs = Program::where('start_date', '>=', (new Carbon())->format('Y-m-d'))
            ->orderBy('start_date')
            ->get();

        $previousPrograms = Program::where('start_date', '<', (new Carbon())->format('Y-m-d'))
            ->count();

        return view(
            'programs.list',
            [
                'tab' => 'programs',
                'programs' => $programs,
                'previousPrograms' => $previousPrograms > 0 ? true : false
            ]
        );
    }

    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['manager', 'admin']);

        if (Auth::guest()) {
            return Redirect::guest('login');
        }

        return view('programs.form', ['tab' => 'programs']);
    }

    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['manager', 'admin']);

        if (Auth::guest()) {
            return Redirect::guest('login');
        }

        Program::create($request->all());
        return $this->index();
    }

    public function previousPrograms(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'manager', 'admin']);

        $programs = Program::where('start_date', '<', (new Carbon())->format('Y-m-d'))
            ->orderBy('start_date')
            ->get();

        return view(
            'programs.list',
            [
                'tab' => 'programs',
                'programs' => $programs,
                'currentPrograms' => true
            ]
        );
    }
}
