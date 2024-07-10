<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Exemplary;


use Illuminate\Http\Request;

class ExemplaryUserController extends Controller
{
    public function asociar()
    {
        $users = User::all();
        $exemplaries = Exemplary::all();
        return view('exemplary_user.asociar', compact('users', 'exemplaries'));
    }

    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $user->exemplaries()->attach($request->exemplary_id);
        $user->save();
        return $request;
    }
}
