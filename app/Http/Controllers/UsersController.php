<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    function getData(UsersRequest $request)
    {
        // $request->validate([
        //     'name'=>'required | min:2 | max: 25',
        //     'email'=>'required',
        //     'message'=>'required | min:10'
        // ]);
        return $request->input();
    }

    function index()
    {
        return DB::select("select * from contacts");
    }
}
