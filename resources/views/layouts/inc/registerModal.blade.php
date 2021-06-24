
<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Register</h4>
            </div>
        <div class="modal-body">
          <div class="box">
                  <div class="content">
                   <div class="form registerBox">
                      <form method="POST" action="{{ route('register') }}" accept-charset="UTF-8">
                        @csrf

                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        

                      <input id="email" class="form-control @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email"> 
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      

                      <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                       

                      <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                        <br/>
                        
                      <input class="btn btn-default btn-register" type="submit" value="Create account"> 
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
                
    
              <div class="forgot register-footer">
                   <span>Already have an account?
                   <a href="{{ route('login') }}">Login</a>
                   </span>
              </div>
          </div>
        </div>
        </div>
    </div>
</div>
      