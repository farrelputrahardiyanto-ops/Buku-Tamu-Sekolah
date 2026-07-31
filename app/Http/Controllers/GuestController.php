<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guests;

class GuestController extends Controller
{
      public function guest_book()
    {
        return view('pages.guest.guest_book');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'comment' => 'nullable|string|max:1000',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image upload
        ]);

        if($request->hasFile('img'))
            {
            $imagePath = $request->file('img')->store('images', 'public');
            $validatedData['img'] = $imagePath;
            }

        try {
            Guests::create($validatedData);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
