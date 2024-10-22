<?php

namespace App\Http\Controllers\Web;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $messages = Message::where('user_id', Auth::guard('web')->user()->id)->orWhere('to', Auth::guard('web')->user()->id)->get();
        return view('pages.web.message.main', compact('messages'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required',
        ]);

        $messages = Message::where('user_id', Auth::guard('web')->user()->id)->orWhere('to', Auth::guard('web')->user()->id)->first();
        if ($messages) {
            $message = new Message;
            $message->user_id = Auth::guard('web')->user()->id;
            $message->parent_id = $messages->id;
            $message->to = 1;
            $message->message = $request->message;
            $message->save();
        } else {
            $message = new Message;
            $message->user_id = Auth::guard('web')->user()->id;
            $message->parent_id = null;
            $message->to = 1;
            $message->message = $request->message;
            $message->save();
        }

        return redirect()->back()->with('success', 'Message sent successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
