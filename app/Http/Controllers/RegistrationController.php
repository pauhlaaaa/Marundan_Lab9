<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Store data in session for success page
        Session::flash('data', $validated);

        return redirect()->route('register.success');
    }

    public function successPage()
    {
        $data = Session::get('data', []);

        return view('success', compact('data'));
    }
}
