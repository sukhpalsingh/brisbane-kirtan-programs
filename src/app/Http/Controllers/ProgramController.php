<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('programs.list', ['tab' => 'programs', 'programs' => $programs]);
    }

    public function create()
    {
        return view('programs.form', ['tab' => 'programs']);
    }

    public function store(Request $request)
    {
        Program::create($request->all());
        return $this->index();
    }
}
