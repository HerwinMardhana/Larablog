<!DOCTYPE html>
<html lang="en">
@include('partial._head')
  
  <body>

@include('partial._nav')
    
    <div class="container">

    	@include('partial._messages')

        @yield('content')
      
    </div><!--end of container class-->
	@include('partial._javascript')

	@yield('script')
    
  </body>
</html>