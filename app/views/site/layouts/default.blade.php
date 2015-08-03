<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="utf-8" />
		<title>	@section('title') | Metro Laravel @show </title>
		@section('meta_keywords')
		<meta name="keywords" content="your, awesome, keywords, here" />
		@show
		@section('meta_author')
		<meta name="author" content="Jon Doe" />
		@show
		@section('meta_description')
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />
                @show
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		
        <link href="{{{ asset('css/metro-bootstrap.css') }}}" rel="stylesheet">
    <link href="{{{ asset('css/metro-bootstrap-responsive.css') }}}" rel="stylesheet">
    <link href="{{{ asset('css/iconFont.css') }}}" rel="stylesheet">
    <link href="{{{ asset('css/docs.css') }}}" rel="stylesheet">
    <link href="{{{ asset('js/prettify/prettify.css') }}}" rel="stylesheet">

   
   
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>

	<body class="metro">
	<header class="bg-dark">
	<div class="navigation-bar dark">
    <div class="navigation-bar-content container">
        <a href="{{{ URL::to('/') }}}" class="element"><span class="icon-grid-view"></span> METRO Laravel</a>
        <span class="element-divider"></span>

        <a class="element1 pull-menu" href="#"></a>
        <ul class="element-menu">
            <li>
                <a class="dropdown-toggle" href="#">Base CSS</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><a href="requirements">Requirements</a></li>
                    <li>
                        <a href="#" class="dropdown-toggle">General CSS</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="global">Global styles</a></li>
                            <li><a href="grid">Grid system</a></li>
                            <div class="divider"></div>
                            <li><a href="typography">Typography</a></li>
                            <li><a href="tables">Tables</a></li>
                            <li><a href="forms">Forms</a></li>
                            <li><a href="buttons">Buttons</a></li>
                            <li><a href="images">Images</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li><a href="responsive">Responsive</a></li>
                    <li class="disabled"><a href="layouts">Layouts and templates</a></li>
                    <li class="divider"></li>
                    <li><a href="icons">Icons</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle"  href="#">Components</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><a href="tiles">Tiles</a></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Navigation</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="navbar">Navigation Bar</a></li>
                            <li><a href="menus">Menus</a></li>
                            <li><a href="fluent-menu">Fluent Menu</a></li>
                            <li><a href="sidebar">Sidebar</a></li>
                            <li><a href="tab-control">Tab Control</a></li>
                            <li><a href="accordion">Accordion</a></li>
                            <li><a href="buttons#_set">Button Set</a></li>
                            <li><a href="buttons#_breadcrumbs">Breadcrumbs</a></li>
                            <li><a href="wizard">Wizard</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Visualisation</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="rating">Rating</a></li>
                            <li><a href="progress-bar">Progress Bar</a></li>
                            <li><a href="scroll">Scroll Bar</a></li>
                            <li><a href="slider">Slider</a></li>
                            <li><a href="carousel">Carousel</a></li>
                            <li><a href="treeview">TreeView</a></li>
                            <li><a href="lists">Lists</a></li>
                            <li><a href="hint">Hint</a></li>
                            <li><a href="balloon">Balloon</a></li>
                            <li><a href="notices">Notices</a></li>
                            <li><a href="stepper">Stepper</a></li>
                            <li><a href="panels">Panel</a></li>
                            <li><a href="streamer">Streamer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Date and Time</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="calendar">Calendar</a></li>
                            <li><a href="datepicker">DatePicker</a></li>
                            <li><a href="times">Times</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">Information</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="window">Window</a></li>
                            <li><a href="dialog">Dialog</a></li>
                            <li><a href="notify">Notify</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="dropdown-toggle">Third-party</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="dataTables">DataTables</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle">Templates</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><a href="template-news-portal">News Portal (msn.com)</a></li>
                </ul>
            </li>
            <li>
                <a class="dropdown-toggle"  href="#">Community</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li class="disabled"><a href="http://blog.metroui.net">Blog</a></li>
                    <li class="disabled"><a href="http://forum.metroui.net">Community Forum</a></li>
                    <li class="divider"></li>
                    <li><a href="https://github.com/olton/Metro-UI-CSS">Github</a></li>
                    <li class="divider"></li>
                    <li><a href="https://github.com/olton/Metro-UI-CSS/blob/master/LICENSE">License</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle fg-yellow">Examples</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><a href="examples">Top page</a></li>
                    <li class="divider"></li>

                    <li>
                        <a href="#" class="dropdown-toggle">General</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="examples#__table__">Table</a></li>
                            <li><a href="examples#__form__">Form</a></li>
                            <li><a href="examples#__buttons__">Buttons</a></li>
                            <li><a href="examples#__image__">Images</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">Navigation</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="examples#__navbar__">Navigation bar</a></li>
                            <li><a href="examples#__dropdown__">Dropdown menu</a></li>
                            <li><a href="examples#__sidebar__">Sidebar</a></li>
                            <li><a href="examples#__tabs__">Tab control</a></li>
                            <li><a href="examples#__accordion__">Accordion</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">Visualization</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="examples#__tile__">Tiles</a></li>
                            <li><a href="examples#__rating__">Rating</a></li>
                            <li><a href="examples#__progress__">Progress bar</a></li>
                            <li><a href="examples#__scroll__">Scroll bar</a></li>
                            <li><a href="examples#__slider__">Slider</a></li>
                            <li><a href="examples#__carousel__">Carousel</a></li>
                            <li><a href="examples#__tree__">Tree view</a></li>
                            <li><a href="examples#__lists__">List view</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">Visualization 2</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="examples#__hint__">Hint</a></li>
                            <li><a href="examples#__balloon__">Balloon</a></li>
                            <li><a href="examples#__notice__">Notice</a></li>
                            <li><a href="examples#__calendar__">Calendar</a></li>
                            <li><a href="examples#__times__">Countdown &amp; Times</a></li>
                            <li><a href="examples#__window__">Windows</a></li>
                            <li><a href="examples#__streamer__">Streamer</a></li>
                            <li><a href="examples#__panel__">Panel</a></li>
                            <li><a href="examples#__stepper__">Stepper</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="no-tablet-portrait no-phone">
            <a title="Home" href="/" class="element place-right"><span class="icon-home"></span></a>
            <span class="element-divider place-right"></span>
            <a title="GitHub" href="https://github.com/turahe/metro-laravel" class="element place-right"><span class="icon-github"></span></a>
            <span class="element-divider place-right"></span>
            <a title="CSS3 validator" href="https://facebook.com/nur.wachid" class="element place-right"><span class="icon-facebook"></span></a>
            <span class="element-divider place-right"></span>
            <a title="CSS3 validator" href="https://twitter.com/macapat" class="element place-right"><span class="icon-twitter"></span></a>
            <span class="element-divider place-right"></span>
            <div class="element place-right" title="GitHub Stars"><span class="icon-star"></span> <span class="github-watchers">0</span></div>
           
        </div>
    </div>
</div>
</header>

	
		
		<div class="container">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
		</div>
		<!-- ./ container -->

		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>
		
		<!-- ./wrap -->


	    <div id="footer">
	      
	    </div>

		<!-- Javascripts
		================================================== -->
         <!-- Load JavaScript Libraries -->
    <script src="{{{ asset('js/jquery/jquery.min.js') }}}"></script>
    <script src="{{{ asset('js/jquery/jquery.widget.min.js') }}}"></script>
    <script src="{{{ asset('js/jquery/jquery.mousewheel.js') }}}"></script>
    <script src="{{{ asset('js/prettify/prettify.js') }}}"></script>
    

    
  <script>
$(function(){
    if ((document.location.host.indexOf('.dev') > -1) || (document.location.host.indexOf('modernui') > -1) ) {
        $("<script/>").attr('src', '{{ URL::to('js/metro/metro-loader.js') }}').appendTo($('head'));
    } else {
        $("<script/>").attr('src', '{{ URL::to('js/metro.min.js') }}').appendTo($('head'));
    }
})
     </script>

 <script src="{{{ asset('js/docs.js') }}}"></script>
        @yield('scripts')
	</body>
</html>
