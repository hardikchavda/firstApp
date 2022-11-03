<?php

namespace App\Http\Controllers;

use App\Models\userInfo;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index()
    {
        return view('admin.main');
    }
    function addUserInfo()
    {
        $data = userInfo::all();
        return view('admin.addUserInfo', ['data' => $data]);
    }
    function saveUserInfo(Request $req)
    {
        // dd($req);
        $user = new userInfo();
        $user->name = $req->v_name;
        $user->address = $req->v_address;
        $user->age = $req->v_age;
        $user->save(); //id generate timestamps
        return redirect()->back()->with('success', 'Record Inserted Successfully');
    }
    function editUserInfo($id)
    {
        $data = userInfo::find($id);
        return view('admin.editUserInfo', ['data' => $data]);
    }
    function updateUserInfo(Request $req, $id)
    {
        // dd($req);
        $user = userInfo::find($id);
        $user->name = $req->v_name;
        $user->address = $req->v_address;
        $user->age = $req->v_age;
        $user->update(); //id generate timestamps
        return redirect()->route('addUserInfo')->with('success', 'Record Update Successfully');
    }
    function delUserInfo($id)
    {
        // dd($req);
        $user = userInfo::find($id);
        $user->delete(); //id generate timestamps
        return redirect()->route('addUserInfo')->with('danger', 'Record Deleted Successfully');
    }
}