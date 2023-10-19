<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardLeaderController extends Controller
{
    public function index()
    {
        $data['users'] = User::all();
        return view('dashboard-leader', $data);
    }
}
