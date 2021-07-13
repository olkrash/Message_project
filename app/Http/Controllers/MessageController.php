<?php

namespace App\Http\Controllers;

use App\models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the methods.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $messages = Message::all();
        return view('message')->with("messages", $messages);
    }

    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|max:255',
            'message' => 'required|min:3',
        ]);

        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }

        $message = Message::create([
            'name' => strip_tags($request->get("name")),
            'email' => strip_tags($request->get("email")),
            'message' => strip_tags($request->get("message")),
        ]);

        $message->save();

        return redirect()->action([self::class, 'index']);
    }
}
