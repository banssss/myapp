@extends('layouts.app')

@section('content')
  <form action="{{ route('sessions.store') }}" method="POST" role="form" class="form__auth">
    @csrf

    @if ($return = request('return'))
      <input type="hidden" name="return" value="{{ $return }}">
    @endif

    <div class="page-header">
      <h4>
        {{ trans('auth.sessions.title') }}
      </h4>
      <p class="text-muted">
        {{ trans('auth.sessions.description') }}
      </p>
    </div>

    <div class="form-group">
      <a class="btn btn-default btn-lg btn-block" href="">
        <strong>
          <i class="fa fa-github"></i>
          
        </strong>
      </a>
    </div>

    <div class="login-or">
      <hr class="hr-or">
      <span class="span-or">or</span>
    </div>

    <div class="form-group @error('email') is-invalid @enderror">
      <input type="email" name="email" class="form-control" 
      placeholder="{{ trans('auth.form.email') }}" value="{{ old('email') }}" autofocus/>
      @error('email')<span class="text-danger">{{ $message }}@enderror
    </div>

    <div class="form-group @error('password') is-invalid @enderror">
      <input type="password" name="password" class="form-control" 
      placeholder="{{ trans('auth.form.password') }}">
      @error('password')<span class="text-danger">{{ $message }}@enderror
    </div>

    <div class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember" value="{{ old('remember', 1) }}" checked>
          로그인 기억하기
          <span class="text-danger">
            (공용 컴퓨터에서는 사용하지 마세요!)
          </span>
        </label>
      </div>
    </div>

    <div class="form-group">
      <button class="btn btn-primary btn-lg btn-block" type="submit">
        {{ trans('auth.sessions.title') }}
      </button>
    </div>

    <div>
      <p class="text-center">회원이 아니라면?
        <a href="{{ route('users.create') }}">가입하세요.</a>
      </p>
      <p class="text-center">
        <a href="{{ route('remind.create') }}">비밀번호를 잊으셨나요?</a>
      </p>
      <p class="text-center">
        <small class="help-block">
          {{  trans('auth.sessions.caveat_for_social') }}
        </small>
      </p>
    </div>
  </form>
@stop