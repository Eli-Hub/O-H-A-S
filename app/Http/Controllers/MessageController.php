<?php

namespace App\Http\Controllers;

use App\Models\AgentMessage;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create(Request $request)
    {
        $a = new AgentMessage();
        $a ->name =$request-> name;
        $a ->email =$request-> email;
        $a ->message =$request-> message;

        $a ->save();
        return redirect()->back();


    }
}
