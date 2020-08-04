<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $customers = User::count();
        $revenue = Transaction::sum('total_price');
        $transaction = Transaction::count();

        return view('pages.admin.dashboard', [
            'customer' => $customers,
            'revenue' => $revenue,
            'transaction' => $transaction
        ]);
    }
}
