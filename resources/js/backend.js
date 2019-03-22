try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}

const userDropdown = document.querySelector('.user-dropdown');
const backendNavMenu = document.querySelector('.backend-nav-menu');
const toggleSidebarBtn = document.querySelector('#toggle-sidebar');
const closeSidebarBtn = document.querySelector('#close-sidebar');
const sidebar = document.querySelector('.backend-sidebar');
const overlay = document.querySelector('.overlay');

backendNavMenu.addEventListener('click', (e) => e.stopPropagation());
sidebar.addEventListener('click', (e) => e.stopPropagation());

toggleSidebarBtn.addEventListener('click', (e) => {
	e.stopPropagation();
	sidebar.classList.toggle('visible');
	overlay.classList.toggle('visible');
});

closeSidebarBtn.addEventListener('click', (e) => {
	sidebar.classList.toggle('visible');
	overlay.classList.toggle('visible');
});

userDropdown.addEventListener('click', (e) => {
	e.preventDefault();	e.stopPropagation();
	backendNavMenu.classList.toggle('visible');
});

const body = document.querySelector('body').addEventListener('click', (e) => {
	if (backendNavMenu.classList.contains('visible')) {
		backendNavMenu.classList.toggle('visible');
	}
	if (sidebar.classList.contains('visible')) {
		sidebar.classList.toggle('visible');
	}
	if (overlay.classList.contains('visible')) {
		overlay.classList.toggle('visible');
	}
});

// Dropdown menu
$(".sidebar-dropdown > a").click(function () {
	$(".sidebar-submenu").slideUp(200);
	if ($(this).parent().hasClass("active")) {
		$(".sidebar-dropdown").removeClass("active");
		$(this).parent().removeClass("active");
	} else {
		$(".sidebar-dropdown").removeClass("active");
		$(this).next(".sidebar-submenu").slideDown(200);
		$(this).parent().addClass("active");
	}

});
