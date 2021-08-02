<?php

namespace App\Http\Controllers;

use App\Models\AgentMessage;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
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


    public function destroy(Request $request)
    {
        $a =AgentMessage::find($request->id);
        $a->delete();
        return redirect()->back();
    }
}
