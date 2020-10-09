<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index(){

        // $subscribers = Subscriber::all();
        $clients = Client::all();
        return view('home');
    }

    public function subscriber(){

        $subscribers = Subscriber::all();
        return view('admin.subscribers',compact('subscribers'));
    }

    public function clients(){

        $clients = Client::all();
        return view('admin.clients',compact('clients'));
    }

}
