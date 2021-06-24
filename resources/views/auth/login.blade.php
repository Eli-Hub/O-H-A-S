
@include('layouts.inc.loginModal')


@include('layouts.inc.authHeader')

{{-- @if (Auth::User()->is_admin=='1'){ --}}

@include('layouts.inc.authHome')



{{-- @endif --}}



@include('layouts.inc.authFooter')

  <!-- Modal Call -->
  <script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
</script>

</body>
</html>
