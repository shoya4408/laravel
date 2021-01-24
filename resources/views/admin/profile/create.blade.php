@extends('layouts.profile')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{ action('admin\profilecontroller@create') }}" method="post" enctype="multipart/form-data">
                     <div class="form-group row">
                         <ladel class="col-md-2">氏名</ladel>
                         <div class="col-md-10">
                              <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                         </div>
                     </div>
                     <div class="form-group row">
                          <ladel class="col-md-2">性別</ladel>
                          <div class="col-md-10">
                               <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                          </div>
                     </div>
                     <div class="form-group row">
                          <ladel class="col-md-2">趣味</ladel>
                          <div class="col-md-10">
                              <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                          </div>
                     </div>
                     <div class="form-group row">
                         <ladel class="col-md-2">自己紹介欄</ladel>
                         <div class="col-md-10">
                              <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                         </div>
                     </div>
                     {{ csrf_field() }}
<input type="submit" class="btn btn-primary" value="送信">
                </form>
            </div>
        </div>
    </div>

@endsection
