//Cambiar imagene del icono de busqueda
$( "#buscarIcon").on({
    "mouseover": function () {
        this.src = './imgs/buscarBlack.png';
    },
    "mouseout": function() {
        this.src = './imgs/buscar.png';
    }
});

//Cambiar imagene del icono de busqueda
$( "#registrarse").on({
    "mouseover": function () {
        $("#correo")[0].src = './imgs/correoBlack.png';
        $(".registro").css("color","black");
    },
    "mouseout": function() {
        $("#correo")[0].src = './imgs/correo.png';
        $(".registro").css("color","white");
    }
});

        
//Resaltar texto perteneciente al icono de estudiante
$( "#studentIcon").on({
    "mouseover": function () {
        $("#textApoyamos").css({"font-weight":"bold"});
        $("#section3").css({"background-attachment": "fixed",
        "background-repeat": "repeat",
        "background-image":"url(./imgs/bStudent2.png)"})
        $("#textApoyamos").fadeIn();
        $("#textCalidad").hide();
        $("#textSugerencia").hide();
        $("#textEntrega").hide();
        },
    "mouseout": function() {
        // $("#textApoyamos").css({"font-weight":""});
    }
});

//Resaltar texto perteneciente al icono de estudiante
$( "#bookIcon").on({
    "mouseover": function () {
        $("#textCalidad").css({"font-weight":"bold"});
        $("#section3").css({"background-attachment": "fixed",
        "background-repeat": "repeat",
        "background-image":"url(./imgs/bBook2.png)"})
        $("#textCalidad").fadeIn();
        $("#textApoyamos").hide();
        $("#textSugerencia").hide();
        $("#textEntrega").hide();
        },
    "mouseout": function() {
        // $("#textCalidad").css({"font-weight":""});
    }
});

//Resaltar texto perteneciente al icono de estudiante
$( "#telemIcon").on({
    "mouseover": function () {
        $("#textSugerencia").css({"font-weight":"bold"});
        $("#section3").css({"background-attachment": "fixed",
        "background-repeat": "repeat",
        "background-image":"url(./imgs/bTelemark2.png)"})
        $("#textSugerencia").fadeIn();
        $("#textApoyamos").hide();
        $("#textCalidad").hide();
        $("#textEntrega").hide();
        
    },
    "mouseout": function() {
        // $("#textSugerencia").css({"font-weight":""});
    }
});

//Resaltar texto perteneciente al icono de estudiante
$( "#truckIcon").on({
    "mouseover": function () {
        $("#textEntrega").css({"font-weight":"bold"});
        $("#section3").css({"background-attachment": "fixed",
        "background-repeat": "repeat",
        "background-image":"url(./imgs/bTruck2.png)"})
        $("#textEntrega").fadeIn();
        $("#textApoyamos").hide();
        $("#textSugerencia").hide();
        $("#textCalidad").hide();
    },
    "mouseout": function() {
        // $("#textEntrega").css({"font-weight":""});
    }
});