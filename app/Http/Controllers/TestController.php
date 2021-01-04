<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Modelsフォルダの中のTestファイルをとってくる
use App\Models\Test;

class TestController extends Controller
{
    //
    public function index()
    {
        $values = Test::all();

        // ddは変数の中身を確認できる
        dd($values);
        return view('tests.test');
    }
}