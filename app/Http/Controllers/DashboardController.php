<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostLiked;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function __construct() {
       $this->middleware(['auth']);
    }
    public function Index()
    {
        return view('dashboard');
    }
}
