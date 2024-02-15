<?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Players;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('home');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        $players_count = Players::all()->count();
        // Get the current date and time
        $currentDate = Carbon::now();
        $currentDateString = $currentDate->toDateString();
        // Calculate the date of 7 days ago
        $previousSevenDaysDate = $currentDate->subDays(7);
        $previousSevenDaysDateString = $previousSevenDaysDate->toDateString();
        // Use a raw SQL query to get the player count for the previous 7 days
        $previousSevenDaysPlayersCount = DB::table('players')
            ->whereRaw("DATE(created_at) >= ? AND DATE(created_at) <= ?", [$previousSevenDaysDateString, $currentDateString])
            ->count();
        return view('admin/adminHome', compact('players_count', 'previousSevenDaysPlayersCount'));
    }
    
}