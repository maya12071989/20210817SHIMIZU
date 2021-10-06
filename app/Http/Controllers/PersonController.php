<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
      public function index()
    {
        $items = DB::table('people')->get();
        return view('index', ['items' => $items]);
    }
         public function create(Request $request)
    {
          $validate_rule = [
            'content' => 'required|max:20',
                   ];
        $this->validate($request, $validate_rule);
        $param = [
           'content' => $request->content,
       ];
            DB::table('people')->insert($param);
        return redirect('/');
}
 public function update(Request $request)
    {
        $param = [
             'content' => $request->content,
        ];
        DB::table('people')->where('id', $request->id)->update($param);
        return redirect('/');
    }
     public function delete(Request $request)
    {
        $param = ['id' => $request->id];
        DB::table('people')->where('id', $request->id)->delete();
        return redirect('/');
    }
}