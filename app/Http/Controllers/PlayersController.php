<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;
use DataTables;

class PlayersController extends Controller
{
    public function create()
    {
        return view('players.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'category' => 'required|string|max:255',
            'optional_round' => 'boolean',
        ]);

        // Save the data to the database
        Players::create($validatedData);

        return redirect()->route('players.create')->with('success', 'Application submitted successfully!');
    }

    public function index()
    {
        return view('admin.players.index');
    }
    public function getPlayers()
    {
        $players = Players::all();

        return Datatables::of($players)->make(true);
    }

    public function exportCsv()
    {
        // Implement CSV export logic here
    }
}
