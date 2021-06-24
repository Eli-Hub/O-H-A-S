
@include('layouts.inc.userloginModal')


@include('layouts.inc.authHeader')

{{-- @if (Auth::User()->is_admin=='1'){ --}}

@include('layouts.inc.authuserHome')



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
