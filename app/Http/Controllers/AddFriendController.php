<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddFriendController extends Controller
{
    public function __invoke()
    {
        return view('addFriend');
    }
}
