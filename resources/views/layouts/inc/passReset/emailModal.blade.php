
<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Reset Password</h4>
          </div>
          <div class="modal-body">
              <div class="box">
                   <div class="content">
                      {{-- <div class="error"></div> --}}
                        
                      <div class="form loginBox">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                          <form method="POST" action="{{ route('password.email') }}" accept-charset="UTF-8">
                             @csrf

                          <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Enter Account Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> <br/>
                           
                                @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror

                         
                          <br/>
                          <input class="btn btn-default btn-login"  value="Send Password Reset Link"  type = "submit">
                          </form>
                      </div>
                   </div>
              </div>

          </div>
         
    </div>
</div>
</div>