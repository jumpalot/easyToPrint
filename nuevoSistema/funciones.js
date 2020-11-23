window.onload = () => {
    $.post("../getCursos.php", (cursos) => {
        var lista = $('#cursos').html();
        cursos.split(',').forEach( (curso) => 
            lista += '<option value="' + curso + '">' + curso + '°</option>'
        );
        $('#cursos').html(lista);
    })
}
function actualizarDivis(curso){
    if (curso!="")
        $.post("../getDivisiones.php", {curso: curso}, (divisiones) => {
            var lista = $('#divisiones').html();
            divisiones.split(',').forEach( (division) => 
                lista += '<option value="' + division + '">' + division + 'ª</option>'
            );
            $('#divisiones').html(lista);
        })
}