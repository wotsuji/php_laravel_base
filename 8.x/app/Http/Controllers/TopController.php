<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    //
    public function top()
    {
        $dates = [
            'test_1' => ['111' => 'testdate1'],
            'test_2' => 'testdate2',
        ];
        return view('top', $dates);
    }

    //
    public function input()
    {
        $dates = [
            'test_1' => ['111' => 'testdate1'],
            'msg' => 'お名前を入力してください',
        ];
        return view('input', $dates);
    }

    //
    public function inputed(Request $request)
    {
        var_dump($request->all());
        $dates = [
            'test_1' => ['111' => 'testdate1'],
            'test_2' => 'testdate2',
        ];
        return view('inputed', $dates);
    }
}
