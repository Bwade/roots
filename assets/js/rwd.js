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

//vCard Tabs
$('#aboutTabs a').click(function (e) {
e.preventDefault();
$(this).tab('show');
});