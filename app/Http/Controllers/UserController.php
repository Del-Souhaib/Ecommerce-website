<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Home(){
        return view('welcome');
    }
    public function messagepage()
    {
        return view('user.message');
    }

    public function sendmessage(Request $req)
    {

       $message= Message::create([
            'subject' => $req->Sujet,
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->tele,
            'message' => $req->message,
            'file'=>'',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        if($req->file('file')!=null){
            $file=$req->file('file');
            $imagename=$message->id.'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/messafefiles/',$imagename);
            Message::where('id',$message->id)->update(['file'=>$imagename]);
        }
        return redirect('/message')->with('statut','added');
    }
}
