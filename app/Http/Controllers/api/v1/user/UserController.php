<?php

namespace App\Http\Controllers\api\v1\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//     public $successStatus = 200;
// /** 
//      * login api 
//      * 
//      * @return \Illuminate\Http\Response 
//      */ 
//     public function login(){ 
//         if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
//             $user = Auth::user(); 
//             $success['token'] =  $user->createToken('MyApp')-> accessToken; 
//             return response()->json(['success' => $success], $this-> successStatus); 
//         } 
//         else{ 
//             return response()->json(['error'=>'Unauthorised'], 401); 
//         } 
//     }
// /** 
//      * Register api 
//      * 
//      * @return \Illuminate\Http\Response 
//      */ 
//     public function register(Request $request) 
//     { 
//         $validator = Validator::make($request->all(), [ 
//             'name' => 'required', 
//             'email' => 'required|email', 
//             'password' => 'required', 
//             'c_password' => 'required|same:password', 
//         ]);
// if ($validator->fails()) { 
//             return response()->json(['error'=>$validator->errors()], 401);            
//         }
// $input = $request->all(); 
//         $input['password'] = bcrypt($input['password']); 
//         $user = User::create($input); 
//         $success['token'] =  $user->createToken('MyApp')-> accessToken; 
//         $success['name'] =  $user->name;
// return response()->json(['success'=>$success], $this-> successStatus); 
//     }
// /** 
//      * details api 
//      * 
//      * @return \Illuminate\Http\Response 
//      */ 
//     public function details() 
//     { 
//         $user = Auth::user(); 
//         return response()->json(['success' => $user], $this-> successStatus); 
//     } 
}
