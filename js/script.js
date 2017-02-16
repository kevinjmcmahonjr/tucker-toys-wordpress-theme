$(document).ready(iOSclick);
function iOSclick(){
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
    	$(".site-header .product-navigation > ul > li").click(function(){});
	}
}

$(document).ready(function() {
    var autoplaySlider = $('#tucker-awards-list').lightSlider({
        auto:true,
        loop:true,
        pauseOnHover: true,
		item: 6,
    });
});

$(document).ready(touchNavEnable);
function touchNavEnable(){
	console.log("This is working");
	$('input[type=checkbox][id^="touch-drop"]').change(function(){
		$(this).prev().toggleClass("close-icon", this.checked);
	});
	$('.main-navigation>ul>li>input[type=checkbox][id^="touch-drop"]').change(function(){
		$(this).prev().toggleClass("sub-menu-focus", this.checked);
	});
}