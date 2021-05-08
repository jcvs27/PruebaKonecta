
$(document).ready(function(){

    //$(".menu_1").show();
    $(".menu_2").show();
    $(".menu_3").hide();
    $(".menu_4").hide();

    // Para solo mostrar en los trabajo individuales
   /* $(document).on('click' , '#menu_1', function(){
        $(".menu_1").show();
        $(".menu_2").hide();
        $(".menu_3").hide();
        $(".menu_4").hide();
    }); */
    // Para solo mostrar en los trabajo Coloborativo
    $(document).on('click' , '#menu_2', function(){
        $(".menu_1").hide();
        $(".menu_2").show();
        $(".menu_3").hide();
        $(".menu_4").hide();
    });
    // Para solo mostrar la evaluación
    $(document).on('click' , '#menu_3', function(){
        $(".menu_1").hide();
        $(".menu_2").hide();
        $(".menu_3").show();
        $(".menu_4").hide();
    });

    // Para solo mostrar Quienes somos
    $(document).on('click' , '#menu_4', function(){
        $(".menu_1").hide();
        $(".menu_2").hide();
        $(".menu_3").hide();
        $(".menu_4").show();
    })
    // abre quiz
    $(document).on('click', '#AbrirQuiz', function(){
        var configuracion_ventana = "menubar=yes,location=yes,resizable=yes,scrollbars=yes,status=yes";
        window.open("https://testmoz.com/q/7377694", "Evaluación - Proyecto de Grado", "_blank", configuracion_ventana);
    });

});