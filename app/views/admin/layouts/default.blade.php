<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>
		@section('title')
			Administration
		@show
	</title>

	<meta name="keywords" content="@yield('keywords')" />
	<meta name="author" content="@yield('author')" />
	<meta name="description" content="@yield('description')" />
	<meta name="google-site-verification" content="">
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="@yield('description')">
	<meta name="DC.creator" content="@yield('author')">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">	
	<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">

	<!-- CSS -->
     <link href="{{{ asset('css/metro-bootstrap.css') }}}" rel="stylesheet">
    <link href="{{{ asset('css/metro-bootstrap-responsive.css') }}}" rel="stylesheet">
    <link href="{{{ asset('css/iconFont.css') }}}" rel="stylesheet">
    <link href="{{{ asset('css/docs.css') }}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/colorbox.css')}}">
   
 
	
</head>
<body class="metro">
<nav class="navigation-bar dark">
    <nav class="navigation-bar-content">
        <div class="element">
            <a href="{{{ URL::to('admin') }}}"><span class="icon-dashboard"></span> Home</a>
            
        </div>
 
        <span class="element-divider"></span>
        <a class="element brand" href="{{{ URL::to('admin/blogs') }}}">Blog</a>
        <a class="element brand" href="{{{ URL::to('admin/comments') }}}">Comments</a>
        <div class="element">
         <a class="dropdown-toggle" href="#">User</a>
            <ul class="dropdown-menu" data-role="dropdown">
                <li><a href="{{{ URL::to('admin/users') }}}"> <span class="icon-user"></span> User</a></li>
                <li><a href="{{{ URL::to('admin/roles') }}}"> <span class="icon-cog"></span> Roles</a></li>
                
            </ul>
            
        </div>
        
            
             
        <span class="element-divider"></span>
 
        
 
        <div class="element place-right">
            <a class="dropdown-toggle" href="#">
                <span class="icon-cog"></span>
            </a>
            <ul class="dropdown-menu place-right" data-role="dropdown">
                <li><a href="{{{ URL::to('user/settings') }}}"><span class="icon-cog"></span> Settings</a></li>
                <li><a href="{{{ URL::to('user/logout') }}}"> <span class="icon-exit"></span> Log Out</a></li>
                
            </ul>
        </div>
        <span class="element-divider place-right"></span>
        
        <button class="element place-right">{{{ Auth::user()->username }}}  <span class="icon-user"></span>
        </button>
    </nav>
</nav>

		

	
		<!-- ./ navbar -->

		<!-- Notifications -->
		@include('notifications')
		<!-- ./ notifications -->

		<!-- Content -->
		@yield('content')
		<!-- ./ content -->

		<!-- Footer -->
		<footer class="clearfix">
			@yield('footer')
		</footer>
		<!-- ./ Footer -->


	
	<!-- Javascripts -->
    <script src="{{{ asset('js/jquery/jquery.min.js') }}}"></script>
    <script src="{{{ asset('js/jquery/jquery.widget.min.js') }}}"></script>
    <script src="{{{ asset('js/jquery/jquery.mousewheel.js') }}}"></script>
     <script src="{{asset('js/prettify.js')}}"></script>
     <script src="{{asset('assets/js/jquery.colorbox.js')}}"></script>
      <script src="{{asset('datatables/media/js/jquery.datatables.min.js')}}"></script>
     <script>
$(function(){
    if ((document.location.host.indexOf('.dev') > -1) || (document.location.host.indexOf('modernui') > -1) ) {
        $("<script/>").attr('src', '{{ URL::to('js/metro/metro-loader.js') }}').appendTo($('head'));
    } else {
        $("<script/>").attr('src', '{{ URL::to('js/metro.min.js') }}').appendTo($('head'));
    }
})
     </script>

    
   
    
    
   

    

    @yield('scripts')

</body>

</html>
