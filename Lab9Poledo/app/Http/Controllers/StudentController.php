<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function showForm()
    {
        return view('registration');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        return redirect('/success')->with('userData', $validated);
    }

    public function success()
    {
        $userData = session('userData');
        return view('success', compact('userData'));
    }
}
