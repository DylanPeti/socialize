
jQuery(document).ready(function($) {

	 var item;
	 $('#footer .container').attr('id', 'contact-us');
 	  $('#menu-quick-links li a').each(function() {

 	  	headerHeight = $('#header_main').height();
       item = $(this).text().toLowerCase().replace(/\s+/g, '-');
        $(this).attr('href', '#' + item);
         var scrollhere = $(this).attr('href');

 	   $(this).click(function() {
      
       $('html, body').animate({
        scrollTop: $(scrollhere).offset().top - headerHeight -20
    }, 1000);

});

 	   $('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
});

});   



// $( window ).resize(function() {
// 	windowWidth = $(window).width();
// console.log(windowWidth)
// if(windowWidth < 750){

// var rearrange = $('#case-studies #post-two span, #case-studies #post-two button');
// rearrange.appendTo( $('#case-studies #post-three') );



// var paragraphItems = $('#container-post-two span, #container-post-two button');
// var video = $('#container-post-two #post-three');
// var paragraph = $('#container-post-two #post-two, #container-post-two #post-one-a');

//     paragraphItems.appendTo( video );
//     paragraph.insertBefore( video );
//     paragraph.css({
//     	'margin-left': '0 !important'
//     });
// } 

// });



});


        
        