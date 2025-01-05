<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Show the login form for companies.
     * 
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        // Returns the view for company login
        return view('company.login');
    }

    /**
     * Show the registration form for companies.
     * 
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        // Returns the view for company registration
        return view('company.register');
    }

    /**
     * Handle company login requests.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate the incoming login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the company with provided credentials
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to the company dashboard if login is successful
            return redirect()->route('company.dashboard')->with('success', 'Logged in successfully.');
        }

        // Redirect back with an error message if login fails
        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    /**
     * Handle company registration requests.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validate the incoming registration request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Create a new company user
        $user = new \App\Models\User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'company', // Assuming 'role' is used to differentiate user types
        ]);

        $user->save();

        // Log the company in after successful registration
        Auth::login($user);

        // Redirect to the company dashboard
        return redirect()->route('company.dashboard')->with('success', 'Registration successful.');
    }

    /**
     * Show the company dashboard.
     * 
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        // Returns the view for the company dashboard
        return view('company.dashboard');
    }

    /**
     * Handle company logout.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        // Log out the authenticated user
        Auth::logout();

        // Redirect to the landing page
        return redirect()->route('landing')->with('success', 'Logged out successfully.');
    }
}
