<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function list(){
        $member = new Member;
        $data = $member->all();
        return view('list', ['members' => $data]);
    }

    function delete($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }
}
