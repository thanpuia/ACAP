@extends('layouts.app')

@section('content')

                       <img class="" style=" display: block;margin-left: auto;margin-right: auto;width: 100%;" 
                            src="/images/acap.svg" width="200" height="70" alt="">
          
    <p class="" style="text-align:center;">An official Govt. Aizawl College <br>Administrative Portal</p>
    <form class="form-horizontal mT-60 p-40" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email" required autofocus>

            @if ($errors->has('email'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('email') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
             <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
                <span class="form-text text-danger">
                    <small>{{ $errors->first('password') }}</small>
                </span>
            @endif
        </div>

        <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
                <!-- <div class="peer">
                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                        <input type="checkbox" id="remember" name="remember" class="peer" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class=" peers peer-greed js-sb ai-c">
                            <span class="peer peer-greed">Remember Me</span>
                        </label>
                    </div>
                </div> -->
                
            </div>
            <br>
            <div class="peer">
                    <button class="btn btn-block " style="background-color:#ffc117;"><b>Login</b></button>
                </div>
        </div>
        <!-- <div class="peers ai-c jc-sb fxw-nw">
            <div class="peer">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
            </div>
            <div class="peer">
                <a href="/register" class="btn btn-link">Create new account</a>
            </div>
        </div> -->
    </form>

@endsection
