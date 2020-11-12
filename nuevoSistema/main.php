<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center h2">Easy Carnet</h5>
            <form class="form-signin" method="GET" action=".">
              <br>
              <div class="form-label-group Collapse">
                <select name="curso" id="cursos" class="form-control"  required autofocus>
                  <option selected disabled hidden>Ingrese Curso</option>
                	<option>Primero</option>
                	<option>Segundo</option>
                	<option>Tercero</option>
                </select>
              </div>
              <br>
              <div class="form-label-group Collapse">
                <select name="division" id="divisiones" class="form-control " required>
                  <option selected disabled hidden>Ingrese Division</option>
                	<option>Primera</option>
                	<option>Segunda</option>
                	<option>Tercera</option>
                </select>
              </div>
              <br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Listar</button>
              <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Listar parte trasera</button>
              <button class="btn btn-lg btn-dark btn-block text-uppercase" type="submit">Opcion1	</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>