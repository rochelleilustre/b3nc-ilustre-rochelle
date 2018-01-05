/*$('p').hide();*/ //targeting a tag

/*$('.para-to-hide').hide();*/ //targeting a class

//$("#paraToHideWithId").hide(); //targetting id

/*$('p').click(function () { //selector event
	$(this).hide();
});

$('p').click();*/

/*function hideThisElement() {
	$(this).hide();
}

$('p').click(hideThisElement);*/

$("#paraToHideWithId").hover(function(){
	$(this).html("I am a changed paragraph.");
});

$("p").click(function(){
	$(this).attr("align", "right");
	$(this).css("color", "red");

});