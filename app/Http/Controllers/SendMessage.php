<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SendMessage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $name = strip_tags($request->input('name'));
        $email = strip_tags($request->input('email'));
        $phone = strip_tags($request->input('phone'));
        $subject = strip_tags($request->input('subject'));
        $message = strip_tags($request->input('message'));
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        DB::table('messages')->insert(
            ['name' => $name, 'email' => $email, 'phone' => $phone, 'subject' => $subject, 'message' => $message]
        );

    }
}
