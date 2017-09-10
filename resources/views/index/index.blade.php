@extends('layouts.app')
@section('title')
    首页
@endsection

@section('content')
    @if(Auth::check())
    <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary panel_index">
            <div class="panel-heading">
                <h3 class="panel-title">欢迎来到SampleApp</h3>
            </div>
            <div class="panel-body">
                如果你还没有账号，请点击<a href="{{route('register')}}">注册</a>
            </div>
        </div>
    </div>
    @else
        @include('users.show')
    @endif
@endsection
