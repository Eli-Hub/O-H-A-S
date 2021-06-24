
<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Login</h4>
          </div>
          <div class="modal-body">
              <div class="box">
                   <div class="content">
                      {{-- <div class="error"></div> --}}
                      <div class="form loginBox">
                          <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8">
                             @csrf

                          <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> <br/>

                           @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                          <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                           @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                           @enderror
                          <br/>
                          <input class="btn btn-default btn-login"  value="Login"  type = "submit">
                          </form>
                      </div>
                   </div>
              </div>

          </div>
          <div class="modal-footer">

                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>

                     @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif


              <div class="forgot login-footer">
                  <span>New User?
                       <a href=" {{ route('register') }}">create an account</a>
                  </span>
              </div>

          </div>
        </div>
    </div>
</div>
</div>
