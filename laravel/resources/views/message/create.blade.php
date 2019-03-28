@extends('layouts.app')

@section('content')
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">h</h1>

            </div>
            <h3>欢迎使用 hAdmin</h3>

            <form class="m-t" role="form" action="{{URL('/login')}}" method="post">
                @if(count($errors)>0)
                    @if(is_object($errors))
                        @foreach($errors->all() as $error)
                            <p style="color:red">{{$error}}</p>
                        @endforeach
                    @else
                        <p style="color:red">{{$errors}}</p>
                    @endif
                @endif
                @if(session('msg'))
                    <p style="color:red">{{session('msg')}}</p>
                @endif
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="用户名" required="" name="email">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="" name="pwd">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>


                <p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="{{URL('/register')}}">注册一个新账号</a>
                </p>

            </form>
        </div>
    </div>


@stop