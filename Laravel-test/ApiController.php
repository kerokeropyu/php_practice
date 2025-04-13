<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // 画面表示用メソッド
    public function showPage()
    {
        $data = [
            'title' => '都市一覧',
            'cities' => [
                ['id' => 1, 'name' => '東京'],
                ['id' => 2, 'name' => '大阪']
            ]
        ];
        return view('cities', compact('data'));
    }

    
    public function getData(Request $request)
    {
        return [
            'status' => 'success',
            'params' => $request->all(),
            'data' => [
                ['id' => 1, 'name' => '東京'],
                ['id' => 2, 'name' => '大阪']
            ]
        ];
    }
}
