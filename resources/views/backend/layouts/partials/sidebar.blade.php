<aside class="backend-sidebar">

	<header>
		<button class="btn bg-dark btn-sm shadow-sm mb-2 float-right" id="close-sidebar"><i class="fas fa-arrow-left"></i></button>
		<h3 class="m-0">{{ config('app.name') }}</h3>
	</header>

	<hr class="m-0">

	<li>
		<a href="{{ route('backend.dashboard') }}" class="sidebar-link">
			<i class="fas fa-tachometer-alt"></i><span>{{ __('Dashboard') }}</span>
		</a>
	</li>

	<li class="sidebar-dropdown">
		<a href="#" class="sidebar-link">
			<i class="fas fa-comments"></i><span>{{ __('Blog') }}</span>
		</a>
		<div class="sidebar-submenu">
			<ul>
				<li>
					<a href="" class="sidebar-link">
						<i class="fas fa-layer-group"></i><span>{{ __('Categories') }}</span>
					</a>
				</li>
				<li>
					<a href="#" class="sidebar-link">
						<i class="fas fa-tags"></i><span>{{ __('Tags') }}</span>
					</a>
				</li>
				<li>
					<a href="" class="sidebar-link">
						<i class="fas fa-newspaper"></i><span>{{ __('Articles') }}</span>
					</a>
				</li>
				<li>
					<a href="" class="sidebar-link">
						<i class="fas fa-comments"></i><span>{{ __('Comments') }}</span>
					</a>
				</li>
			</ul>
		</div>
	</li>

	<li class="sidebar-dropdown">
		<a href="#" class="sidebar-link">
			<i class="fa fa-cog"></i><span>{{ __('Settings') }}</span>
		</a>
		<div class="sidebar-submenu">
			<ul>
				<li>
					<a href="{{ route('backend.users.index') }}" class="sidebar-link">
						<i class="fas fa-users"></i><span>{{ __('Users') }}</span>
					</a>
				</li>
				<li>
					<a href="" class="sidebar-link">
						<i class="fas fa-list-alt"></i><span>{{ __('Roles') }}</span>
					</a>
				</li>
				<li>
					<a href="" class="sidebar-link">
						<i class="fas fa-check-double"></i><span>{{ __('Permissions') }}</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
</aside>