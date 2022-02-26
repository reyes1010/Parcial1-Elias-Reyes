//GUARDAMOS LA INSCRIPCION
$("#enviar").off("click");
$("#enviar").on("click", function(e) {
    $('enviar').attr("disabled", true);
    var codigo = $("#codigo").val();
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var dui = $("#dui").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var email = $("#email").val();

   
    parametros = {
        'codigo': codigo,
        'nombre': nombre,
        'apellido': apellido,
        'dui': dui,
        'direccion': direccion,
        'telefono': telefono,
        'email': email
    };
    $.ajax({
        type: "POST",
        url: "recibe_Datos_ajax.php", 
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg").html(datos);
            $('#enviar').attr("disabled", false);
            $('#codigo').val(''),
            $('#nombre').val(''),
            $('#apellido').val(''),
            $('#dui').val(''),
            $('#direccion').val(''),
            $('#telefono').val(''),
            $('#email').val('')
        }
    });
    event.preventDefault();
});
