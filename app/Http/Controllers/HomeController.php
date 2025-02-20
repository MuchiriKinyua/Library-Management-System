<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;
use App\Models\Member;
use App\Models\Waiting;
use App\Models\Borrowing;
use App\Models\Reservation;
use App\Models\Notification;
use App\Models\Record;
use Illuminate\Http\Request;

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
    public function index()
    {
        $user = Auth::user();

        $totalUsers = User::count();
        $totalBooks  = Book::count();
        $totalMembers  = Member::count();
        $totalBorrowings = Borrowing::count();
        $totalReservations = Reservation::count();
        $totalWaiting = Waiting::count();
        $totalNotifications = Notification::count();
        $totalRecords = Record::count();

        if ($user->usertype == 'admin') {
            return view('home', compact('totalUsers', 'totalBooks', 'totalMembers', 'totalBorrowings', 'totalReservations', 'totalWaiting', 'totalNotifications', 'totalRecords'));
        } else {
            return redirect()->route('welcome');
        }
    }
}
