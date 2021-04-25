<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\profile;
use App\profilehistories;

use Carbon\Carbon;

class profilecontroller extends Controller
{
    //action
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create(Request $request)
    {
      $this->validate($request, profile::$rules);
      $profile = new Profile;
      $form = $request->all();
      
      $profile->fill($form);
      $profile->save();
      
        return view('admin.profile.create');
    }
    public function index(Request $request)
  {
    $cond_title = $request->cond_title;
    if($cond_title != ''){
      //検索されたら検索結果を取得する
      $posts =Profile::where(title,$cond_title)->get();
    }else{
      //それ以外はすべてのニュースを取得する
      $posts = Profile::all();
    }
    return view('admin.profile.index',['posts' => $posts,
    'cond_title' => $cond_title]);
  }
    public function edit(Request $request)
    {
      // profile Modelからデータを取得する
      $profile = profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['news_form' => $profile]);
    }
    public function update(Request $request)
    {
      // Validationをかける
      $this->validate($request, Profile::$rules);
      // profile Modelからデータを取得する
      $profile = Profile::find($request->id);
      // 送信されてきたフォームデータを格納する
      $profile_form = $request->all();
      
      // 該当するデータを上書きして保存する
      $profile->fill($profile_form)->save();
      
      $history = new profilehistories;
      $history->profile_id = $profile->id;
      $history->edited_at =Carbon::now();
      $history->save();

      return redirect('admin/profile/');
  }
  public function delete(Request $request)
  {
    //該当するnews modelを取得
    $profile = profile::find($request->id);
    //削除する
    $profile->delete();
    return redirect('admin/profile/');
  }
}

