/**
 * File main.js.
 *
 * Series of initialize tasks.
 *
 * Please see comments below.
 */

( function( $ ) {

	// clean load site after all elements loaded. fix object fit for ie
	$(document).ready(function() {
	  document.getElementsByTagName("html")[0].style.visibility = "visible";
		objectFitImages();
	});

  // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
  let vh = window.innerHeight * 0.01;
  // Then we set the value in the --vh custom property to the root of the document. `${vh}px`
  document.documentElement.style.setProperty('--vh', vh + 'px');

  // fixed navigation header add sticky class on scroll
	$(document).ready(function() {
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};
    // Get the header
    var header = document.getElementById("masthead");
    // Get the offset position of the navbar
    var sticky = header.offsetTop;
    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        $('.header-sticky-height').css('display','block')
      } else {
        header.classList.remove("sticky");
        $('.header-sticky-height').css('display','none')
      }
    };
  });
  // add hamburgers support for bootstrap mobile menu
  $('.navbar-toggle').click(function () {
          $('.navbar-toggle').toggleClass('is-active');
   });

	// add bootstrap container to gutenberg wp-block-column class
	$('header.page-header').addClass('container');
	$('header.entry-header').addClass('container');
  $('.entry-content > .wp-block-columns:not(.fullwidth)').wrapInner("<div class='container' />");
  $('body:not(.no-sidebar) .site-content').wrapInner("<div class='container' />");
  $('body.woocommerce .site-content').wrapInner("<div class='container' />");


} )( jQuery );
