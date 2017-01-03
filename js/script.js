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