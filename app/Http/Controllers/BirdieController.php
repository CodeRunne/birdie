<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Birdie;

class BirdieController extends Controller
{
    public function store(Request $request) {
        $attribute = $request->validate(["body" => 'required|max:255']);
        
        Birdie::create([
            'user_id' => auth()->user()->id,
            'body' => $attribute['body']
        ]);

        return redirect()->route('home');
    }
}
