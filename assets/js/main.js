
$(document).ready(function () {

    //$(".menu_1").show();
    $(".menu_2").show();


 

    // Guardar la informacion de la creación del producto
    $('#GuardarProducto').submit(function () {
        $.post(baseurl + 'controller_crud/guardar',
            function (data) {
                if (data == 1) {
                    alert('El registro se realizo');
                    setTimeout(() => {
                        location.reload();
                    }, 1200);
                } else {
                    alert('El registro no se logro hacer');
                }
            });
    });


    $("#Tablaproductos").DataTable({
        'paging': true,
        'info': true,
        'filter': true,
        'stateSave': true,
        'ajax': {
            'url': baseurl + 'controller_crud/getproductos',
            'type': 'POST',
            dataSrc: ''

        },
        "columns": [
            {
                data: 'ID'
            }, {
                data: 'nombre_producto'
            }, {
                data: 'referencia'
            }, {
                data: 'precio'
            }, {
                data: 'peso'
            },
            {
                data: 'stock'
            },
            {
                "orderable": true,
                render: function (data, type, row) {
                    return '<a href="#" class="btn btn-success" data-toggle="modal" data-target="#modificarproducto" onClick="funProd(\'' + row.ID + '\',\'' + row.nombre_producto + '\',\'' + row.referencia + '\',\'' + row.precio + '\',\'' + row.peso + '\',\'' + row.stock + '\');" >Editar</a>';
                },

            },
            {
                "orderable": true,
                render: function (data, type, row) {
                    return '<a href="#" class="btn btn-warning" onClick="funelminar(\'' + row.ID + '\');" >Eliminar</a>';
                },

            },


        ],
        "order": [[0, 'DESC']],

    });

    // Guardar la informacion Actualizzada de producto
    $(document).on("click", "#modipro", function () {
        $.post(baseurl + 'controller_crud/modificar',
        {
            exampleInputNamprod_m :$("#exampleInputNamprod_m").val(),
            exampleInputRefe_m: $("#exampleInputRefe_m").val(),
            exampleInputPrecio_m:$("#exampleInputPrecio_m").val(),
            exampleInputPeso_m:$("#exampleInputPeso_m").val(),
            exampleInputStock_m:$("#exampleInputStock_m").val(),
            exampleInputID_m: $("#exampleInputID_m").val()
        },
            function (data) {
                
                if (data == 1) {
                    alert('El registro Actualizado');
                    setTimeout(() => {
                        location.reload();
                    }, 1200);
                } else {
                    alert('El registro no se Actualizo');
                }
            });
    });

});
// capturar y mostrar valores
function funProd(id, np, ref, pr, ps, st) {
    $("#exampleInputNamprod_m").val(np);
    $("#exampleInputRefe_m").val(ref);
    $("#exampleInputPrecio_m").val(pr);
    $("#exampleInputPeso_m").val(ps);
    $("#exampleInputStock_m").val(st);
    $("#exampleInputID_m").val(id);
}

function funelminar(id) {
    $.post(baseurl + 'controller_crud/eliminar',
        {id:id},
        function (data) {
            if (data == 1) {
                alert('El registro Eliminado');
                setTimeout(() => {
                    location.reload();
                }, 1200);
            } else {
                alert('El registro no se logro Eliminar');
            }
        });
}