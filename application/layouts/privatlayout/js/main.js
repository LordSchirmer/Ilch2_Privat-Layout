/* plugins */
$(document).ready(function(){
    // initialise slideshow
    $('.flexslider').flexslider({
		animation: "slide",
        start: function(slider){
            $('body').removeClass('loading');
        }
     });
    // totop button
    $('.totop').on('click', function(e){
        var href = $(this).attr('href');
        $('html, body').animate({
            scrollTop:$(href).offset().top
        },'slow');
        e.preventDefault();
    });
});

/* toggling navigation menu for small screens */
(function(){
    var button = document.getElementById('topnav').getElementsByTagName('div')[0],
          menu = document.getElementById('topnav').getElementsByTagName('ul')[0];
    if (undefined === button)
        return false;
    if (undefined === menu || ! menu.childNodes.length){
        button.style.display = 'none';
        return false;
    }
    button.onclick = function(){
        if (-1 == menu.className.indexOf('srt-menu'))
            menu.className = 'srt-menu';
        if (-1 != button.className.indexOf('toggled-on')){
            button.className = button.className.replace('toggled-on', '');
            menu.className = menu.className.replace(' toggled-on', '');
        } else {
            button.className += ' toggled-on';
            menu.className += ' toggled-on';
        }
    };
})();
