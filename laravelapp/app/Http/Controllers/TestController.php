<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {

        // Elopuent(エロクアント）
        $values = Test::all();

        $count = test::count();

        $first=Test::findOrFail(1);

        $whereBBB = Test::where('text','=','bbb')->get();

        //クエリビルダ
        $queryBuillder = DB::table('tests')->where('text','=','bbb')
        ->select('id','text')
        ->get();

        dd($values,$count,$first,$whereBBB, $queryBuillder);

        return view('tests.test',compact('values'));
    }
    //
   
}
