
<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Confirm Password</h4>
          </div>
          <div class="modal-body">
          {{ __('Please confirm your password before continuing.') }}
              <div class="box">
                   <div class="content">
                      {{-- <div class="error"></div> --}}
                    
                        <form method="POST" action="{{ route('password.confirm') }}" accept-charset="UTF-8">
                             @csrf

                          <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password"> <br/>
                           
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                          <br/>

                          <input class="btn btn-default btn-login"  value="Confirm Password"  type = "submit">

                                @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                @endif
                            </form>

                      </div>
                   </div>
              </div>

          </div>
         
    </div>
</div>
</div>