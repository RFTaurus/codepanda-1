<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Message;

class MessageController extends Controller
{
    public function create(Request $request){
        $input = $request->all();
        $input['phone'] = '0'.$input['phone'];
        // dd($input);
        $msg = Message::create($input);
        return redirect('thanks');
    }
}
