<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use Auth;
use Redirect;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('programs.list', ['tab' => 'programs', 'programs' => $programs]);
    }

    public function create()
    {
        if (Auth::guest()) {
            return Redirect::guest('login');
        }

        return view('programs.form', ['tab' => 'programs']);
    }

    public function store(Request $request)
    {
        if (Auth::guest()) {
            return Redirect::guest('login');
        }

        Program::create($request->all());
        return $this->index();
    }
}
