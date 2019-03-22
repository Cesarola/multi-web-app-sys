<aside class="backend-sidebar">
	<button class="btn btn-primary" id="close-sidebar">Close</button>
	<div class="sidebar-content">
		<div class="sidebar-item sidebar-brand">
			<a href="{{ route('backend.dashboard') }}">{{ config('app.name') }}</a>
		</div>
		<div class=" sidebar-item sidebar-menu">
			<ul>
				<li class="header-menu">
					<span>General</span>
				</li>
				<li class="sidebar-dropdown">
					<a href="#">
						<i class="fa fa-tachometer-alt"></i>
						<span class="menu-text">Dashboard</span>
						<span class="badge badge-pill badge-warning">New</span>
					</a>
					<div class="sidebar-submenu">
						<ul>
							<li>
								<a href="#">Dashboard 1
									<span class="badge badge-pill badge-success">Pro</span>
								</a>
							</li>
							<li>
								<a href="#">Dashboard 2</a>
							</li>
							<li>
								<a href="#">Dashboard 3</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="sidebar-dropdown">
					<a href="#">
						<i class="fa fa-shopping-cart"></i>
						<span class="menu-text">E-commerce</span>
						<span class="badge badge-pill badge-danger">3</span>
					</a>
					<div class="sidebar-submenu">
						<ul>
							<li>
								<a href="#">Products

								</a>
							</li>
							<li>
								<a href="#">Orders</a>
							</li>
							<li>
								<a href="#">Credit cart</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="sidebar-dropdown">
					<a href="#">
						<i class="far fa-gem"></i>
						<span class="menu-text">Components</span>
					</a>
					<div class="sidebar-submenu">
						<ul>
							<li>
								<a href="#">General</a>
							</li>
							<li>
								<a href="#">Panels</a>
							</li>
							<li>
								<a href="#">Tables</a>
							</li>
							<li>
								<a href="#">Icons</a>
							</li>
							<li>
								<a href="#">Forms</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="sidebar-dropdown">
					<a href="#">
						<i class="fa fa-chart-line"></i>
						<span class="menu-text">Charts</span>
					</a>
					<div class="sidebar-submenu">
						<ul>
							<li>
								<a href="#">Pie chart</a>
							</li>
							<li>
								<a href="#">Line chart</a>
							</li>
							<li>
								<a href="#">Bar chart</a>
							</li>
							<li>
								<a href="#">Histogram</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="sidebar-dropdown">
					<a href="#">
						<i class="fa fa-globe"></i>
						<span class="menu-text">Maps</span>
					</a>
					<div class="sidebar-submenu">
						<ul>
							<li>
								<a href="#">Google maps</a>
							</li>
							<li>
								<a href="#">Open street map</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="header-menu">
					<span>Extra</span>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-book"></i>
						<span class="menu-text">Documentation</span>
						<span class="badge badge-pill badge-primary">Beta</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-calendar"></i>
						<span class="menu-text">Calendar</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-folder"></i>
						<span class="menu-text">Examples</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</aside>