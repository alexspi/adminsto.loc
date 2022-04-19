@extends('layouts.authentication.master')
@section('title', 'Login-two')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{asset('assets/images/login/3.jpg')}}" alt="looginpage"></div>
         <div class="col-xl-7 p-0">
            <div class="login-card">
               <div>
                  <div><a class="logo text-start" href=""><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="looginpage"></a></div>
                  <div class="login-main">
                     <form method="POST" class="theme-form" action="{{ route('login') }}">
                        @csrf
                        <h4>Вход в аккаунт</h4>
                        <p>Введите ваш email и пароль</p>
                        <div class="form-group">
                           <label class="col-form-label">Email </label>
                           <input id="email" name="email" class="form-control @error('email') is-invalid @enderror" type="email" required="" placeholder="Test@gmail.com">
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Пароль</label>
                           <input id="password" name="password" class="form-control @error('password') is-invalid @enderror" type="password" name="login[password]" required="" placeholder="*********" >
                           <div class="show-hide"><span class="show"></span></div>

                           @error('password')
                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                           @enderror
                        </div>
                        <div class="form-group mb-0">
                           <div class="checkbox p-0">
                              <input id="remember" name="remember"  type="checkbox">
                              <label class="text-muted" for="remember">Запомнить пароль</label>
                           </div>
                         <button class="btn btn-primary btn-block" type="submit">Войти</button>
                        </div>
{{--                        <h6 class="text-muted mt-4 or">Or Sign in with</h6>--}}
{{--                        <div class="social mt-4">--}}
{{--                           <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>--}}
{{--                        </div>--}}
{{--                        <p class="mt-4 mb-0">Don't have account?<a class="ms-2" href="{{ route('sign-up') }}">Create Account</a></p>--}}
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection

@section('script')
@endsection