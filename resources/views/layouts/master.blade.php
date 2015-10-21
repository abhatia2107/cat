<!DOCTYPE html>
<html lang="en">

	@include('templates.head')

<body id="page-top" class="home">

<!-- PAGE WRAP -->
<div id="page-wrap">

	<!-- PRELOADER -->
	<div id="preloader">
		<div class="pre-icon">
			<div class="pre-item pre-item-1"></div>
			<div class="pre-item pre-item-2"></div>
			<div class="pre-item pre-item-3"></div>
			<div class="pre-item pre-item-4"></div>
		</div>
	</div>
	<!-- END / PRELOADER -->

    @include('templates.header')

    @include('templates.message')
    @yield('content')

    @include('templates.footer')


</div>
<!-- END / PAGE WRAP -->

<!-- Load jQuery -->
<script type="text/javascript" src="/assets/js/library/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/assets/js/library/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/library/jquery.owl.carousel.js"></script>
<script type="text/javascript" src="/assets/js/library/jquery.appear.min.js"></script>
<script type="text/javascript" src="/assets/js/library/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/assets/js/library/jquery.easing.min.js"></script>
<script type="text/javascript" src="/assets/js/scripts.js"></script>
<script type="text/javascript" src="/assets/js/library/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="/assets/js/library/typeahead.js"></script>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-20585382-5', 'megadrupal.com');
	ga('send', 'pageview');
</script>
@yield('pagejquery')

</body>

<!-- Mirrored from envato.megadrupal.com/html/megacourse/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2015 03:54:29 GMT -->
</html>