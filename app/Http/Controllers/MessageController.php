<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class MessageController extends Controller
{
    public function index(){
        $messages = Messages::paginate(5);
        return view('welcome', compact('messages'));
    }

    public function create(){
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'body' => 'required',
            'content' => 'required'
        ]);

        $message = new Messages;
        $message->subject = $request->subject;
        $message->body = $request->body;
        $message->content = $request->content;
        $message->sent_at = date('Y-m-d m:i:s');
        $message->save();

        return redirect(route('home'))->with('successMsg', 'Message Successfully Added.');
    }

    public function view($id){
        $message = Messages::find($id);
        if(!$message->read_at){
            $message->read_at = date('Y-m-d m:i:s');
            $message->save();
        }

        return view('view', compact('message'));
    }
}
