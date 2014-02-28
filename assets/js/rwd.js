/**
Custom RWD Javascript
**/
// grab an element
var myElement = document.querySelector("#header");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement);
// initialise
headroom.init();

/* Tracking clicks like a fucking champ */

$('#button').on('click', function() {
ga('send', 'event', 'button', 'click', 'nav-buttons');
});


var $win = $(window),$home_main = $('.page-home #main');

//Viewport Checking and shit
//$(window).resize(function() {
//var $win = $(this), win_ratio;
//	//my_class;

//	if ($home_main.length > 0) {
//	// Figure out if browser is wider or taller than video
//	win_ratio = $home_main.width()/$home_main.height();
//	//my_class = (win_ratio >= vid_ratio)?'wide':'tall';

//	// Apply wide/tall as a class to the #page container
//	$('#page').removeClass('wide').removeClass('tall').addClass(my_class);
//		$('#main .pane').height( $(this).height() );
//}

// });

//vCard Tabs
$('#aboutTabs a').click(function (e) {
e.preventDefault();
$(this).tab('show');
});