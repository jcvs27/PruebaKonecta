
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
   // Guardar la informacion de la creación del producto
    $(document).submit("#Guadarproducto", function() {
        $.post(baseurl+'controller_crud/guardar',
        function (data) {
          if(data == 1){
           
          }else{
            alert('El registro no se logro hacer');
          }
        });
    });
    

    $("#Tablaproductos").DataTable({
        'paging': true,
        'info': true,
        'filter':true,
        'stateSave':true,
        'ajax':{
            'url':baseurl+'controller_crud/getproductos/',
            'type': 'POST',
            dataSrc: ''

        },
        "columns":[
            {
                data: 'ID'
            },{
                data: 'nombre_producto'
            },{
                data: 'referencia'
            },{
                data: 'precio'
            },{
                data: 'peso'
            },
            {
                data: 'stock'
            }

        ], 
        "order":[[0, 'DESC']],

    });

});