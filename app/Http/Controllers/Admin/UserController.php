<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Cache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user-management.user-m')->with('users',User::all());
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
        if(Auth::user()->id == $id) {

            return redirect()->route('admin.users.index');
        }

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
        if(Auth::user()->id == $id) {

            return redirect()->route('admin.users.index');
        }

        $user = User::find($id);
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->id == $id) {

            return redirect()->route('admin.users.index')->with('warning','You are not allowed to delete youself.');
        }

        User::destroy($id);

        return redirect()->route('admin.users.index')->with('success', 'User has been deleted.');

    }

    /**
     * Show user online status
     *
    */

    public function userOnlineStatus() {

        $users = DB::table('users')->get();

        foreach ($users as $user) {

            if(Cache::has('user-is-online' . $user->id)) {

                echo "User" . $user->name . "is online.";

            } else {

                echo "user" . $user->name . "is offline.";

            }

        }

    }
}
