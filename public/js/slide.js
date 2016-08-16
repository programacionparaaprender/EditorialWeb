/*
 * Plugin intialization
 */
$('#pagepiling').pagepiling({
    verticalCentered: true,
    css3: true,
    sectionsColor: ['#feffff', '#a07c5c', '#feffff', '#312c32'],
    onLeave: function (index, nextIndex, direction) {

        //fading out the txt of the leaving section
        $('.section').eq(index - 1).find('h1, p').fadeOut(700, 'easeInQuart');

        //fading in the text of the destination (in case it was fadedOut)
        $('.section').eq(nextIndex - 1).find('h1, p').fadeIn(700, 'easeInQuart');


        //reaching our last section? The one with our normal site?
        if (nextIndex == 4) {
            $('#arrow').hide();

            //fading out navigation bullets "Eliminar circulos de navegacion en seccion4"
            // $('#pp-nav').fadeOut();

            $('#section4').find('.content').animate({
                top: '0%'
            }, 700, 'easeInQuart');
        }

        if (nextIndex != 0) {
            $('#arrow').hide();
        }
        
        //leaving our last section? The one with our normal site?
        if (index == 4) {
            $('#arrow').show();

            //fadding in navigation bullets
            $('#pp-nav').fadeIn();

            $('#section4 .content').animate({
                top: '100%'
            }, 700, 'easeInQuart');
        }

        if (index == 2) {
            $("#textApoyamos").hide();
            $("#textCalidad").hide();
            $("#textSugerencia").hide();
            $("#textEntrega").hide();
        }
        if(index == 1) {
            $("#imgLibros").animate({top: '2rem'},800);
        }
    },
});

$('#arrow').click(function () {
    $.fn.pagepiling.moveSectionDown();
});
