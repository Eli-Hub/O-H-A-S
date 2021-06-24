
<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Verify Your Email Address</h4>
          </div>
          <div class="modal-body">
              <div class="box">
                   <div class="content">
                      {{-- <div class="error"></div> --}}
                        
                      <div class="form loginBox">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                  {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                          <form class="d-inline" method="POST" action="{{ route('verification.resend') }}" accept-charset="UTF-8">
                             @csrf
                          <br/>
                          <input class="btn btn-default btn-login"  value="Click here to request another"  type = "submit">
                          </form>
                      </div>
                   </div>
              </div>

          </div>
         
    </div>
</div>
</div>