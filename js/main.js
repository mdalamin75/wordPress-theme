// Initialize the Bx-slider
jQuery(document).ready(function () {
    jQuery('#nav').slicknav({
        label : "",
        appendTo: "#header_area",
        // closedSymbol: "&#9658;",
        // openedSymbol: "&#9660;"	
    });
    jQuery('.slider').bxSlider({
        mode: 'fade',
        captions: true,
    });
});