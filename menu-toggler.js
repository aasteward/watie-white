window.addEventListener("load", function () {
	document.getElementsByClassName("toggler")[0].addEventListener("click", toggleMenu)
});

// function toggleMenu() {
// 	var page = document.getElementsByClassName("else-wrapper")[0];
// 	if (page.style.top == "-312px") {
// 		page.style.top = "0px"
// 	} else {
// 		page.style.top = "-312px"
// 	}
// }

function toggleMenu() {
	var page = document.getElementsByClassName("else-wrapper")[0];
	if (page.classList.contains("moved")) {
		page.classList.remove("moved")
	} else {
		page.classList.add("moved")
	}
}