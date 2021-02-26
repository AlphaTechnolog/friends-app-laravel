<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;

class FriendController extends Controller
{
    public function __invoke()
    {
        $friends = Friend::select(['name', 'lastname', 'marital_statuses.value as marital_status', 'sexes.value as sex'])
                        ->join('marital_statuses', 'marital_statuses.id', '=', 'friends.marital_status_id')
                        ->join('sexes', 'sexes.id', '=', 'friends.sex_id')
                        ->get();
        
        return view('home', [
            'friends' => json_encode($friends)
        ]);
    }
}
