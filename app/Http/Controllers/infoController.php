<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class infoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
    )
    {
        $this->middleware('auth');
    }

    /**
     * 画面の初期表示
     *
     */
    public function index()
    {
        $test = Cache::store('redis')->get("kotake");

        if ($test) {
            var_dump("キャッシュあっったーよ！");
            var_dump($test);
            return;
        }

        var_dump("ないやんけ！");
        var_dump("SQL投げて結果取得するで");
        var_dump("SQLで結果取得できたらキャッシュに保存するで！");
        Cache::store('redis')->put('kotake', 'shunki', 1);
        
    }
}
