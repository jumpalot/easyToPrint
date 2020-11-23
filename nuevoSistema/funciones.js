window.onload = () => {
    $.post("../getCursos.php", (cursos) => {
        $lista = $('#cursos').html();
        cursos.split(',').array.forEach( (curso) => 
            lista += '<option value="' + curso + '">' + curso + '°</option>'
        );
        $('#cursos').html(lista);
    })
}
function actualizarDivis(curso){
    if (curso!="")
        $.post("../getDivisiones.php", {curso: curso}, (divisiones) => {
            $lista = $('#divisiones').html();
            divisiones.split(',').array.forEach( (division) => 
                lista += '<option value="' + division + '">' + division + 'ª</option>'
            );
            $('#divisiones').html(lista);
        })
}