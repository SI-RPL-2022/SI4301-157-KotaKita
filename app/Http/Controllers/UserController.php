<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $q = request('q');
        if($q)
        {
            $users = User::where('name','like', '%' . $q . '%')->get();
        }else{
            $users = User::orderBy('name','ASC')->get();
        }
        return view('pages.user.index',compact('users'));
    }

    public function update()
    {
        $userid = request('userid');
        $role = request('role');
        $user = User::find($userid);
        $user->syncRoles($role);
        return response()->json(['success' => 'Role berhasil diudate.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('manajemen-users.index')->with('success','User berhasil dihapus.');
    }
}
