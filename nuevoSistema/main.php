<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center h2">Easy Carnet</h5>
            <form class="form-signin" method="GET" action="." target="_blank">
              <br>
              <div class="form-label-group Collapse">
                <select name="curso" id="cursos" class="form-control" onchange="actualizarDivis(this.value)" required autofocus>
                  <option selected disabled value="0" hidden>Ingrese Curso</option>
                  <option value="0">Todos</option>
                </select>
              </div>
              <br>
              <div class="form-label-group Collapse">
                <select name="division" id="divisiones" class="form-control " required>
                  <option selected disabled value="0" hidden>Ingrese Division</option>
                	<option value="0">Todas</option>
                </select>
              </div>
              <br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="page" value="list">Listar frente</button>
              <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit" name="page" value="reverse">Listar reverso</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>