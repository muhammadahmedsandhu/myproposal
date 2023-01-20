<?php

namespace App\Http\Controllers;

use App\Models\proposalmod;
use Illuminate\Http\Request;

class proposalcont extends Controller
{
    public function insertview()
    {
        return view('insert');
    }

    public function inserted(Request $req)
    {

        $data = new proposalmod;
        $data->title = $req->title;
        $data->description = $req->description;
        $data->save();
        return redirect(route('/'))->with('message', 'IT WORKS!');

    }

    public function homepage(Request $req)
    {
        $data = proposalmod::paginate(15);
        return view('homepage',compact('data'));
    }
}

