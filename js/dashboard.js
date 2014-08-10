$(document).ready(function($) {
	$("#temperature").on("change", function(e) {
		if($(this).prop("checked")) {
			$("#temperature-map").show();
		} else {
			$("#temperature-map").hide();
		}
	});
	
	$("#humidity").on("change", function(e) {
		if($(this).prop("checked")) {
			$("#humidity-map").show();
		} else {
			$("#humidity-map").hide();
		}
	});

	$("#noise").on("change", function(e) {
		if($(this).prop("checked")) {
			$("#noise-map").show();
		} else {
			$("#noise-map").hide();
		}
	});

	$("#carbonmonoxide").on("change", function(e) {
		if($(this).prop("checked")) {
			$("#carbonmonoxide-map").show();
		} else {
			$("#carbonmonoxide-map").hide();
		}
	});

	$("#methane").on("change", function(e) {
		if($(this).prop("checked")) {
			$("#methane-map").show();
		} else {
			$("#methane-map").hide();
		}
	});
});
