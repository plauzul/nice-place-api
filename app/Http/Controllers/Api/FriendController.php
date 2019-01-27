<?php

namespace App\Http\Controllers\Api;

use App\Friend;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller {

    public function __construct() {
        $this->middleware('cors');
        // $this->middleware('jwt.auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Friend::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = $request->all();

        Friend::create($data);

        $data['id_user'] = $request->id_friend;
        $data['id_friend'] = $request->id_user;

        Friend::create($data);

        return response()->json(['status' => 'ok']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return DB::table('friends')
                    ->where('id_user', $id)
                    ->join('users', 'users.id', '=', 'friends.id_friend')
                    ->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Friend $friend) {
        foreach ($request->all() as $key => $value) {
            $friend->$key = $value;
        }

        $friend->save();

        return response()->json(['status' => 'ok']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Friend::destroy($id);

        return response()->json(['status' => 'ok']);
    }
}
