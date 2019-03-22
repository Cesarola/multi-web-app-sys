<nav id="backend-navbar" class="custom-bg-dark">
	<div class="backend-nav">
		<span id="toggle-sidebar"><i class="fas fa-bars"></i></span>
		<a href="" id="backend-brand">
			<i class="fas fa-desktop mr-2"></i>
			<span>{{ config('app.name') }}</span>
		</a>
	</div>
	<div class="backend-nav">
		<a href="" class="backend-nav-item user-dropdown">
			<span class="d-none d-sm-inline-block">Erickson Suero</span>
			<img src="{{ asset('img/default-avatar.png') }}" height="30px" class="mx-2">
		</a>
		<div class="backend-nav-menu shadow-sm animated bounceIn">
			<a href="profile"><i class="fas fa-user"></i><span>{{ __('Profile') }}</span></a>
			<a href="notifications"><i class="fas fa-bell"></i><span>{{ __('Notifications') }}</span></a>
			<hr class="m-0">
			<a href="sign-out"><i class="fas fa-sign-out-alt"></i><span>{{ __('Sign Out') }}</span></a>
		</div>
	</div>
</nav>