<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;
use Illuminate\View\View;

class FrontendController extends Controller
{
    /**
     * Show the Player form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function playerForm(): View
    {
        return view('draftform');
    }

    public function playerSubmit(Request $request)
    {
        // Validate the form data including the profile photo
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'category' => 'required|string|max:255',
            'optional_round' => 'boolean',
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file type and size as needed
        ]);

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            $imagePath = $request->file('profile_photo')->store('profile_photos', 'public'); // Fixed storage path
            $validatedData['profile_photo'] = $imagePath;
        }

        // Save the data to the database
        Players::create($validatedData);

        return redirect()->route('players.form')->with('success', 'Application submitted successfully!');
    }
}
