<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center h2">Easy Carnet</h5>
            <form class="form-signin" method="GET" action="." target="_blank">
              <br>
              <div class="form-label-group Collapse">
                <select name="curso" id="cursos" class="form-control"  required autofocus>
                  <option selected value="0" hidden>Ingrese Curso</option>
                	<option value="1">Primero</option>
                	<option value="2">Segundo</option>
                  <option value="3">Tercero</option>
                  <option value="4">Cuarto</option>
                  <option value="5">Quinto</option>
                  <option value="6">Sexto</option>
                  <option value="7">Septimo</option>
                </select>
              </div>
              <br>
              <div class="form-label-group Collapse">
                <select name="division" id="divisiones" class="form-control " required>
                  <option selected value="0" hidden>Ingrese Division</option>
                	<option value="1">Primera</option>
                	<option value="2">Segunda</option>
                  <option value="3">Tercera</option>
                  <option value="4">Cuarta</option>
                  <option value="5">Quinta</option>
                  <option value="6">Sexta</option>
                  
                </select>
              </div>
              <br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="page" value="list">Listar frente</button>
              <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit" name="page" value="reverse">Listar reverso</button>
              <button class="btn btn-lg btn-dark btn-block text-uppercase" type="submit">Opcion1	</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>