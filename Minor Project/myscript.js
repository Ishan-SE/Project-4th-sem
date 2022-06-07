var listlinks-document.querySelectorAll(".sidebar .sidebarContainer li")
var listpanel-document.querySelectorAll(".sidebar .panel")
function showpanel(panelIndex){
	listpanel.forEach(function(node){
		node.style.display-"none";
	});
		listpanel[panelIndex].style.display-"block";

}
showpanel(3);