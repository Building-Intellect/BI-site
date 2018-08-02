"use strict";

(function(){

    setActiveNav();

	window.onload = function() {

	};

	//Sets active navigation elements and disables active element
	function setActiveNav() {
        var currentURL = window.location.href;
        var tokens = currentURL.split("/");
        var currentPage = tokens[tokens.length - 1];
        var navItem;
        if (currentPage == '') {
            navItem = document.getElementById('welcome');
        } else if (currentURL.includes('tickets')) {
            navItem = document.getElementById('work-orders');
        } else {
            navItem = document.getElementById(currentPage);
        }
        navItem.className = navItem.className + ' bi-nav-active';
        navItem.disabled = true;
	}

})();
