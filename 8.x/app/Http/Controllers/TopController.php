<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    //
    public function top(){
        $dates = [
            'test_1'=>['111'=>'testdate1'],
            'test_2'=>'testdate2',
        ];
#        $time = "time2";
#        $name = '太郎';
#        $age = 21;
#        return view('top', compact('name', 'age'));        
        return view('top', $dates);
#        return view('top')->with($user);
#        return view('top',['test_1'=>"test111"]);
#        return view('top',['name' => 'Samantha']);
    }
}
