@extends('layouts.app')

@section('content')
<form action="{{ route('users.store') }}" method="POST" class="form__auth">
    @csrf
    <div class="form-group @error('name') is-invalid @enderror">
        <input type="text" name="name" class="form-control" 
        placeholder="이름" value="{{ old('name') }}" autofocus>
        @error('name'){!! <span class="form-error"> :message </span> !!}@enderror
    </div>
    <div class="form-group @error('email') is-invalid @enderror">
        <input type="email" name="email" class="form-control" 
        placeholder="메일" value="{{ old('email') }}">
        @error('email'){!! <span class="form-error"> :message </span> !!}@enderror
    </div>
  
    <div class="form-group @error('password') is-invalid @enderror">
        <input type="password" name="password" class="form-control" 
        placeholder="비밀번호"/>
        @error('password'){!! <span class="form-error"> :message </span> !!}@enderror
    </div>
  
    <div class="form-group @error('password_confirmation') is-invalid @enderror">
        <input type="password" name="password_confirmation" class="form-control"
         placeholder="비밀번호 확인" />
         @error('password_confirmation'){!! <span class="form-error"> :message </span> !!}@enderror
    </div>
  
    <div class="form-group">
        <button class="btn btn-primary btn-lg btn-block" type="submit">
          가입하기
        </button>
    </div>
</form>
@stop