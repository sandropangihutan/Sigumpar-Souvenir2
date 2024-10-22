<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $messages = Message::where('to', $user->id)->orWhere('user_id', $user->id)->get();
        return view('pages.admin.message.main', compact('user', 'messages'));
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

        $message = new Message;
        $message->user_id = auth()->user()->id;
        $message->parent_id = null;
        $message->to = $request->to;
        $message->message = $request->message;
        $message->save();

        return redirect()->back()->with('success', 'Message sent successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $message = Message::find($id);
        return view('pages.admin.message.main', compact('message'));
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
