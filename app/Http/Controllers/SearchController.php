<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){

        if ($request->data != null) {
            $data = User::where(['first_name'=>$request->data, 'last_name'=>$request->data,'email'=>$request->data])
            ->orWhere('first_name','like','%'.$request->data.'%')
            ->orWhere('last_name','like','%'.$request->data.'%')
            ->orWhere('email','like','%'.$request->data.'%')
            ->get(['id','first_name', 'last_name', 'email', 'profile_photo']);

            return Inertia::render('home/index', [
                'data' => $data
            ]);
        }
    }
}
