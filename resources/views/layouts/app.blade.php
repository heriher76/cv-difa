<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ url('assets/images/Untitled-1.png') }}" type="image/x-icon">
  <meta name="description" content="">
  
  <title>difaandika</title>
  <link rel="stylesheet" href="{{ url('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href="{{ url('assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/soundcloud-plugin/style.css') }}">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href="{{ url('assets/theme/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('assets/gallery/style.css') }}">
  <link href="{{ url('assets/fonts/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
  
  <style>
  	.navbar {
	  height: 80px;
	  width: 100%;
	  background-color: transparent;
	  border: none;
	  color: white;
	  z-index: 100;
	  transition: background-color 1s ease 0s;
		position: fixed;
	}


	.navbar-default {
	  
	   .navbar-brand {
	     margin-top: 10px;
	     color: white;
	        
	      &:hover {
	         color: #C57ED3;
	         border: 1px solid #C57ED3;
	      } 
	   }
	   
	  .navbar-nav {
	    
	    > li {
	      
	      > a {
	        color: white;
	        margin: 10px 5px 5px 5px;
	        
	      }
	      > a:hover, > a:active, > a:focus {
	        color: #C57ED3;
	        border: 1px solid #C57ED3;
	      }
	      > a:visited {
	        color: #C57ED3;
	        text-decoration: none;
	      }

	    } 

	    > .active {

	      > a, > a:hover, > a:focus {
	        background-color: transparent;
	        color: #C57ED3;
	      }

	    }

	  } 

	  .navbar-toggle {
	    border-color: #C57ED3;

	      &:hover, &:focus {
	        background-color: #490D40;
	      }



	      .icon-bar {
	        color: #C57ED3;
	        background-color: #C57ED3;

	      }
	  }

	  .navbar-collapse.collapse.in ul {
	    background-color: #490D40;
	  }
	    
	} 



	/* Solid class attached on scroll past first section */

	.navbar.solid {
	  background-color: #490D40;
	  transition: background-color 1s ease 0s;
	  box-shadow: 0 0 4px grey;

	    .navbar-brand {
	      color: #C57ED3;
	      transition: color 1s ease 0s;
	    }

	    .navbar-nav {

	       > li {

	          > a {
	            color: #C57ED3;
	            transition: color 1s ease 0s;
	          }

	       } 

	    } 

	}	
  </style>
  
  @yield('style')
  
</head>
<body>
  
  @yield('content')

  <script src="{{ url('assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/tether/tether.min.js') }}"></script>
  <script src="{{ url('assets/popper/popper.min.js') }}"></script>
  <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets/ytplayer/jquery.mb.ytplayer.min.js') }}"></script>
  <script src="{{ url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ url('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') }}"></script>
  <script src="{{ url('assets/masonry/masonry.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/parallax/jarallax.min.js') }}"></script>
  <script src="{{ url('assets/sociallikes/social-likes.js') }}"></script>
  <script src="{{ url('assets/vimeoplayer/jquery.mb.vimeo_player.js') }}"></script>
  <script src="{{ url('assets/theme/js/script.js') }}"></script>
  <script src="{{ url('assets/formoid/formoid.min.js') }}"></script>
  <script src="{{ url('assets/gallery/player.min.js') }}"></script>
  <script src="{{ url('assets/gallery/script.js') }}"></script>
  <script src="{{ url('assets/slidervideo/script.js') }}"></script>
  
  <script>
  	$(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
	          // checks if window is scrolled more than 500px, adds/removes solid class
	          if($(this).scrollTop() > 500) { 
	              $('.navbar').addClass('solid');
	          } else {
	              $('.navbar').removeClass('solid');
	          }
	        });
	});
  </script>

  @yield('script')

</body>
</html>