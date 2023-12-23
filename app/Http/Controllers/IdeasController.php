<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeasController extends Controller
{

    public function show(Idea $idea)
    {
        return view('shared.show', compact('idea'));
    }
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
        return redirect()->route('dashboard')->with('success', 'Bingo !!!');
    }

    public function edit(Idea $idea)
    {
        return view('shared.show', compact('idea'));
    }

    public function destroy(Idea $idea)
    {
        /*
        solve by model binding instand of below 
        Idea::where('id',$id)->firstOrFail()->delete();
        */
        $idea->delete();

        return redirect()->route('dashboard')->with('success', 'Successfully Deleted');
    }
}
