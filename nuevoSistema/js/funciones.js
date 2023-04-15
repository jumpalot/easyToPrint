var originalList;
window.onload = () => {
    originalList = $('#divisiones').html();
    $.post("../getCursos.php", (cursos) => {
        var lista = $('#cursos').html();
        cursos.split(',').forEach( (curso) => 
            lista += '<option value="' + curso + '">' + curso + '°</option>'
        );
        $('#cursos').html(lista);
    })
    $("#izquierda").hide()
}
function actualizarDivis(curso){
    if (curso!="")
        $.post("../getDivisiones.php", {curso: curso}, (divisiones) => {
            var lista = originalList;
            divisiones.split(',').forEach( (division) => 
                lista += '<option value="' + division + '">' + division + 'ª</option>'
            );
            $('#divisiones').html(lista);
        })
}
function limpiar(id){
    $("textarea#listcarnets").val("")
    if(id=="derecha") {
        $("#derecha").hide()
        $("#izquierda").show()
    } else {
        $("#derecha").show()
        $("#izquierda").hide()
    }
}
function guardarImpreso(id){
    datos = $(".form-signin").serialize()
    $.post("../marcarImpresos.php?"+datos, (error) => {
        if (error == "completado"){
            alert ("Impresiones registradas correctamente")
        } else {
            alert (error)
        }
    })
    $(id).hide()
}