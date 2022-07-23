<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{ public function add()
    {
        return view('admin.profile.create');
    }
    

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update(Request $request)
    {
        return redirect('admin/profile/edit');
    }
    /// 以下を追記
  public function create(Request $request)
  {
      // admin/news/createにリダイレクトする
      return redirect('admin/profile/create');
  } 

}
