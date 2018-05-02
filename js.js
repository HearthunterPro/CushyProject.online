$(document).ready(function(e) {
        $("#body").fadeIn(1500);
		$(".menu").show(1000);
});
function selH() {
	document.getElementById("a").className = "";
	document.getElementById("home").className = "active";
	document.getElementById("op").className = "";
	document.getElementById("mfl").className = "";
	$("#Home").show(1000);
	$("#HOME").show(1000);
	$("#Op").hide(1000);
	$("#OP").hide(1000);
	$("#A").hide(1000);
	$("#A1").hide(1000);
	$("#Mfl").hide(1000);
	$("#MFL").hide(1000);
}
function selH1() {
	document.getElementById("a").className = "active";
	document.getElementById("home").className = "";
	document.getElementById("op").className = "";
	document.getElementById("mfl").className = "";
	$("#Home").hide(1000);
	$("#HOME").hide(1000);
	$("#Op").hide(1000);
	$("#OP").hide(1000);
	$("#A").show(1000);
	$("#A1").show(1000);
	$("#Mfl").hide(1000);
	$("#MFL").hide(1000);
}
function selH2() {
	document.getElementById("a").className = "";
	document.getElementById("home").className = "";
	document.getElementById("op").className = "active";
	document.getElementById("mfl").className = "";
	$("#Home").hide(1000);
	$("#HOME").hide(1000);
	$("#Op").show(1000);
	$("#OP").show(1000);
	$("#A").hide(1000);
	$("#A1").hide(1000);
	$("#Mfl").hide(1000);
	$("#MFL").hide(1000);
}
function selH3() {
	document.getElementById("a").className = "";
	document.getElementById("home").className = "";
	document.getElementById("op").className = "";
	document.getElementById("mfl").className = "active";
	$("#Home").hide(1000);
	$("#HOME").hide(1000);
	$("#Op").hide(1000);
	$("#OP").hide(1000);
	$("#A").hide(1000);
	$("#A1").hide(1000);
	$("#Mfl").show(1000);
	$("#MFL").show(1000);
}