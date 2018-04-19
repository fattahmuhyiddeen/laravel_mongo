<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class ActivityController extends Controller
{
    function save_activity(Request $r){
        $a = new Activity;
        $a->user_id = $r->user_id;
        $a->activity = $r->activity;
        $a->save();
        return ['code'=>200];
    }

    function get_activity(Request $r){
        $a = Activity::all();
        return [
            'code'=>200,
            'data'=>$a
        ];
    }
}
