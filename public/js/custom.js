

$(document).pjax('.sidebar a, #pjax-container a', '#pjax-container');
$(document).pjax('#settingsmenu a', '#pjax-container2');





$(document).on('pjax:popstate ', function(event) {
    if(event.direction == "back" || event.direction == "forward"  ) {
        console.log('executes before page-change');

        $(document).find('script#inline-scripts').each(function() {

            $.globalEval(this.text || this.textContent || this.innerHTML || '');
        })
    }
});

$(document).on('pjax:complete', function(event) {

    $(document).find('script#inline-scripts').each(function() {

        $.globalEval(this.text || this.textContent || this.innerHTML || '');
    })
});




$('.sidebar-menu li > a').click(function() {

    $('.sidebar-menu > li').each(function(){

            $(this).removeClass('active');

    })

    $(this).parent().addClass('active');
});





