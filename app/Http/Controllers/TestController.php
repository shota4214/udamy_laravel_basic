<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        dd('test');
        
        // Eloquent(エロクアント)
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $where = Test::where('text', '=', 'abcde')->get();

        // クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=', 'abcde')
        ->select('id', 'text')
        ->get();

        dd($values, $count, $first, $where, $queryBuilder);

        return view('tests.test', compact('values'));
    }
}
