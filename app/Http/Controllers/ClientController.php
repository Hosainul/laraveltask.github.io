<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Subscriber;
use Brian2694\Toastr\Facades\Toastr;


class ClientController extends Controller
{
    public function addclient(Request $request){

        $this->validate($request,[
            'email' => 'email',
        ]);

        if ($request->has('name')){

            $clients = new Client;
            $clients->name = $request->name;
            $clients->email = $request->email;
            $clients->subject = $request->subject;
            $clients->message = $request->message;
            $clients->save();
    
            Toastr::success('Message Sent Successfull','Success');
            return view('welcome'); 

        }

        if($request->has('email')){

            $subscribers = new Subscriber;
            $subscribers->email = $request->email;
            $subscribers->save();

            Toastr::success('Subscribe Successfull','Success');
            return view('welcome');
        }

    }
}
