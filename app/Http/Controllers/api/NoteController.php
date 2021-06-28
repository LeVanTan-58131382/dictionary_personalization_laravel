<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    //
    public function save(Request $request)
    {
        $newNote = new Note;

        $newNote->id_user = $request->id_user;
        $newNote->subject = $request->subject;
        $newNote->content = $request->content;
        
        

        $newNote->save();

        $data = $request->id_user;

        return response()->json(["message" => "Đang thêm", "request" => $data ]);
    }
}
