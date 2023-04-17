# easyToPrint
## Presentacion
Esta aplicación facilita el imprimir carnets para una escuela, pensada especialmente para cubrir las necesidades de la E.E.S.T. N°3 Roberto Arlt
## Modo de uso
### Carga de datos
Deben importarse usando el boton que hay esquina inferior izquierda de la página principal (/nuevoSistema/index.php)
Debe subirse un único archivo .mdb, el cual no debe superar los 10mb ya que se usa la librería freemium RebaseData
Al estar basado en la base de datos de una única institución las tablas deben tener un formato específico que puede observarse en impAlumnos.php
### Tomar las foto carnet
Para esto se usa la app [easyToPrint](https://github.com/jumpalot/easyToPrint/) (android 10+)
Esta puede descargarse al ingresar a la página principal desde un celular.
Una vez abierta deberan introducir la URL de esta página web, desde ahí podran tomar las fotos y editar los datos si se hubieran importado de forma erronea.
### Imprimir las fotos
Proponemos el siguiente flujo de trabajo
- Listar cada division por separado a medida que se sacan las fotos (con la opción solo los alumnos con foto)
- Por cada impresion si se desea que tengan QR en su reverso (para por ejemplo hacer uso de la app easyQR) se debe Listar el reverso
- Una vez visto que se imprimió correctamente se usa el boton "Guardar como impreso"
- Siempre habrá alumnos que no estén presentes al sacar las fotos, cuando se tenga esas fotos se puede imprimir todos los alumnos restantes seleccionando "todos" en cursos y divisiones, con las opciones "Solo no Impresos" y "Solo alumnos con foto"
- Si un alumno perdiera su carnet y hubiera que volver a imprimirlo encontrará una flecha a la derecha de donde se selecciona el curso/division, ahí podrá escribir carnets específicos a imprimir
## Otras aclaraciones
Si desea migrar este sistema deberá crear un nuevo archivo DBCon.php en la raiz siguiendo el ejemplo de DBConExample.php
Pronto agregaremos en el repositorio los archivos necesarios para importar la base de datos que usa el sistema
