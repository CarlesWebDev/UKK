<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ShowLoginStudent()
    {
        if(auth()->guard('student')->check()) {
            return redirect()->route('student.dashboard');
        }
        return view('auth.studentLogin');
    }

    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'nis' => 'required|string|min:10',
            'password' => 'required|string|min:8',
        ]);
        if (auth()->guard('student')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('student.dashboard');
        }
        return back()->withErrors([
            'nis' => 'The provided credentials do not match our records.',
        ])->onlyInput('nis');

    }

    public function dashboard()
    {
        return view('student.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }

    public function logout(Request $request)
    {
        auth()->guard('student')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
