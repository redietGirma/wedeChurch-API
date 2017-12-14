<?php

namespace App\Http\Controllers;
use App\Church;
use Illuminate\Http\Request;
use JWTAuth;
class churchController extends Controller
{
    Public function store(Request $request)
    {
//        $user= JWTAuth::parseToken()->toUser();
        $church = Church::create($request->all());
        return response()->json(['church' => $church, 'user' => $user], 201);
    }
    public function index()
    {
        $church= Church::all();
        $response=[
            'churches' =>$church
        ];
        return response()->json($response, 200);
    }
    public function show($id)
    {
        $church= Church::find($id);
        return $church;
    }
    Public function update(Request $request, $id)
    {
        $church = Church::findOrFail($id);
        $church->update($request->all());
        return response()->json($church, 201);
    }
    public function delete($id)
    {
        $church = Church::find($id);
        $church -> delete();

        return 'Deleted!';
    }
}
