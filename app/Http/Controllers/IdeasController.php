<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeasController extends Controller
{
    public function store()
    {
        //    dd($_POST['idea']);
        // $idea = new Idea(['contents' => request()->get('idea')]);
        // $idea->save();
        /*
        valitation for share idea box
        */
       request()->validate([
        'idea' => 'required|min:5|max:240'
       ]);

        $idea = Idea::create([
            'contents' => request()->get('idea'),

        ]);
        return redirect()->route('dashboard')->with('success','Bingo !!!');
    }
}
