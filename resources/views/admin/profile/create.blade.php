@extends('layouts.profile')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィール作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{ action('admin\profilecontroller@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                     <div class="form-group row">
                         <ladel class="col-md-2">氏名</ladel>
                         <div class="col-md-10">
                              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                         </div>
                     </div>
                     <div class="form-group row">
                          <ladel class="col-md-2">性別</ladel>
                          <div class="col-md-10">
                               <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                          </div>
                     </div>
                     <div class="form-group row">
                          <ladel class="col-md-2">趣味</ladel>
                          <div class="col-md-10">
                              <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                          </div>
                     </div>
                     <div class="form-group row">
                         <ladel class="col-md-2">自己紹介欄1</ladel>
                         <div class="col-md-10">
                              <input type="text" class="form-control" name="introduction" value="{{ old('introduction') }}">
                         </div>
                     </div>
                     {{ csrf_field() }}
                     <input type="submit" class="btn btn-primary" value="送信">
                </form>
            </div>
        </div>
    </div>

@endsection
