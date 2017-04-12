window.addEventListener("load", function () {
	document.getElementsByClassName("toggler")[0].addEventListener("click", toggleMenu)
});

function toggleMenu() {
	var page = document.getElementsByClassName("else-wrapper")[0];
	if (page.style.top == "-312px") {
		page.style.top = "0px"
	} else {
		page.style.top = "-312px"
	}
}

// function toggleMenu() {
// 	var menu = document.getElementsByClassName("top-menu-wrapper")[0];
// 	if (menu.style.display == "block") {
// 		menu.style.display = "none"
// 	} else {
// 		menu.style.display = "block"
// 	}
// }