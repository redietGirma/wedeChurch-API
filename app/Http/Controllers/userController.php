<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
class userController extends Controller

{
    Public function store(Request $request)
    {


        $user = User::create($request->all());
        return response()->json($user, 201);
    }
    public function index()
    {
        $user= User::all();
        $response=[
            'users' =>$user
        ];
        return response()->json($response, 200);
    }
    public function show($id)
    {
        $user= User::find($id);
        return $user;
    }
    Public function update(Request $request, $id)
    {
        $user = user::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 201);
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user -> delete();

        return 'Deleted!';
    }
}
