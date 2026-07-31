<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
       
        return view('pages.users.index');
    }
 
    public function create()
    {
        return view('pages.users.create_user');
    }

    public function store(Request $request)
    {

    
       // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8|confirmed',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image upload
        ]);

        // $validatedData['password'] = Hash::make($validatedData['password']); // Hash the password

        // Handle the image upload if provided
        if ($request->hasFile('profile')) {
            $imagePath = $request->file('profile')->store('images', 'public');
            $validatedData['profile'] = $imagePath;
        }

        // Store the validated data in the database (assuming you have a Guest model)
        try {
            User::create($validatedData);
        } catch (\Exception $e) {
            // Handle the exception (e.g., log it, return an error response, etc.)
            dd($e->getMessage());

        }
       

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User created successfully!');
    }
}
