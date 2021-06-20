<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::all();
        return view('chats.chat',compact('chats'));
    }

    public function createRoom()
    {
        $chats = DB::table('chats')
            ->select('categories.name')
            ->rightJoin('categories','categories.id','=','chats.category_id')
            ->get();
        return view('chats.create',compact('chats'));
    }

    public function create(Request $request)
    {
//        $dataStaff = $this->staffService->create($request->all());
        $staff = new Chat();
        $staff->category = $request->category;
        $staff->name = $request->name;
        $staff->password = $request->password;
        $staff->save();
        return redirect()->route('chats.index');
    }
}
