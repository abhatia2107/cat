@section('header')
	<!-- HEADER -->
	<header id="header" class="header">
		<div class="container">

			<!-- LOGO -->
			<div class="logo"><a href="{{url('/')}}"> <p style="color:#fff; font-size:25px; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;" >CAT</p></a></div>
			<!-- END / LOGO -->

			<!-- NAVIGATION -->
			<nav class="navigation">

				<div class="open-menu">
					<span class="item item-1"></span>
					<span class="item item-2"></span>
					<span class="item item-3"></span>
				</div>

				<!-- MENU -->
				<ul class="menu">
{{--
					<li class="menu-item-has-children megamenu col-4">
						<a href="#">Pages</a>
						<ul class="sub-menu">
							<li class="menu-item-has-children">
								<a href="#">Account 1</a>
								<ul class="sub-menu">
									<li><a href="account-assignment.html">Account Assignment</a></li>
									<li><a href="account-inbox.html">Account Inbox</a></li>
									<li><a href="account-learning.html">Account Learning</a></li>
									<li><a href="account-profile-owner-view.html">Account Profile Owner</a></li>
									<li><a href="account-profile-guest-view.html">Account Profile Guest</a></li>
									<li><a href="account-teaching.html">Account Teaching</a></li>
									<li><a href="setting.html">Setting</a></li>
								</ul>
							</li>

							<li class="menu-item-has-children">
								<a href="#">Assignment 2</a>
								<ul class="sub-menu">
									<li><a href="asignment-after-submit.html">Assignment After Submit</a></li>
									<li><a href="asignment-list.html">Assignment List</a></li>
									<li><a href="asignment-marking.html">Assignment Marking</a></li>
									<li><a href="asignment-received.html">Assignment Received</a></li>
									<li><a href="asignment-submit.html">Assignment Submit</a></li>
									<li><a href="become-teacher.html">Become Teacher</a></li>
									<li><a href="categories.html">Categories</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Course 3</a>
								<ul class="sub-menu">
									<li><a href="course-intro.html">Course Intro</a></li>
									<li><a href="course-learn.html">Course Learn</a></li>
									<li><a href="create-basic-information.html">Create Basic Information</a></li>
									<li><a href="create-design-course.html">Create Design Course</a></li>
									<li><a href="create-publish-course.html">Create Publish Course</a></li>
									<li><a href="request-teacher.html">Request Teacher</a></li>
									<li><a href="search-result-found.html">Search Result Found</a></li>
									<li><a href="search-result-not-found.html">Search Result Found</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Learn 3</a>
								<ul class="sub-menu">
									<li><a href="learning.html">Learning</a></li>
									<li><a href="quizz-1.html">Quizz 1</a></li>
									<li><a href="quizz-2.html">Quizz 2</a></li>
									<li><a href="quizz-3.html">Quizz 3</a></li>
									<li><a href="quizz-5.html">Quizz 5</a></li>
									<li><a href="quizz-20.html">Quizz 20</a></li>
									<li><a href="quizz-finish.html">Quizz Finish</a></li>
									<li><a href="quizz-intro.html">Quizz Intro</a></li>
								</ul>
							</li>
						</ul>
					</li>
--}}
					<li class="menu-item-has-children">
						<a href="blog">Blog</a>
					</li>
					<li class="menu-item-has-children">
						@if (Auth::guest())
							<a href="/auth/login">Login</a>
						@else
							<a href="/users/profile">{{ Auth::user()->first_name }}</a>
						@endif
						<ul class="sub-menu">
						@if (Auth::guest())
							<li><a href="/auth/login">Login</a></li>
							<li><a href="/auth/register">Register</a></li>
						@else
							<li><a href="/users/profile">{{ 'My Profile' }}</a></li>
							<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
						@endif
						</ul>
					</li>
					{{--<li>
						<a href="categories.html">Course</a>
					</li>--}}
				</ul>
				<!-- END / MENU -->


			</nav>
			<!-- END / NAVIGATION -->

		</div>
	</header>
	<!-- END / HEADER -->

@show