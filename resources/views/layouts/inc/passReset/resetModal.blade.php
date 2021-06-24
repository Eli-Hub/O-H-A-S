
<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"> Reset Password </h4>
            </div>
          <div class="modal-body">
              <div class="box">
                   <div class="content">
                      {{-- <div class="error"></div> --}}
                      <div class="form loginBox">
                          <form method="POST" action="{{ route('password.update') }}" accept-charset="UTF-8">
                             @csrf

                          <input type = "hidden" name = "token"  value = "{{$token}}">

                          <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> <br/>
                           
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror

                                <br/>

                            <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password"  required autocomplete="new-password"> <br/>
                           
                                @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            

                            <input class="btn btn-default btn-login"  value="Reset Password"  type = "submit">
                          </form>
                      </div>
                   </div>
              </div>

          </div>
         
    </div>
</div>
</div>