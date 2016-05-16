NProgress.configure({showSpinner: true});
NProgress.start();

window.addEventListener('load', function(){
	NProgress.done();
});



var $table = $(".list table");

$table.floatThead({
	scrollContainer: function($table){
		return $table.closest(".scrolling");
	}
});


var menuElem = $("#menu a");

menuElem.on('click', function(event){
	event.preventDefault();
	var hash = this.hash;
	console.log(this.hash);


	$("html, body").animate({
		scrollTop: $(hash).offset().top
	}, 600, function(){
		window.location.hash = hash;
	});
});


var arrowElem = $("#arrow");
arrowElem.on('click', function(){
	$("html, body").animate({
		scrollTop: $("html, body").offset().top
	}, 600);
});


var posY = function(){
	// if(ypos > 400){
	// 	arrowElem.style.display = "none";
	// }
}

window.addEventListener("scroll", function(){
	if(window.pageYOffset > 400){
		arrowElem.css(
		{
			"opacity":"1",
			"transition":"all .3s ease", 
			"transform":"rotate(0deg)"
		});
	}
	else {
		arrowElem.css(
			{
				"opacity":"0",
				"transform":"rotate(180deg)"
			});
	}

});