<!doctype html>
<html lang="es">

<head>
  <title>COLABORADORES</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- BOOTSTRAP ICONS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  

</head>

  <!-- Modal trigger button -->
  <div class="col-md-6 text-left">
  <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal-colaborador"><i class="bi bi-person-plus-fill">Registro COLAB</i>
  </button>
</div>

  <body>
  <div class="container mt-3">
    <div class="row">
      <div class="card-body">
        <table class="table table-sm table-striped" id="tabla-colaborador">
          <thead>
          <tr>
          <th>#</th>
          <th>Apellidos</th>
          <th>Nombres</th>
          <th>Cargo</th>
          <th>Sede</th>
          <th>Telefono</th>
          <th>Tipo contraro</th>
          <th>Operaciones</th>
        </tr>

          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    
    </div>
  </div> <!-- Fin de container-->



  
  <!-- Modal Body -->
  <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
  <div class="modal fade" id="modal-estudiante" tabindex="-1" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header text-bg-secondary">
          <h5 class="modal-title" id="modalTitleId">Complete el Registro</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <form action="" autocomplete="off" id="formulario-estudiantes" enctype="multipart/form-data">
          <div class="row">
              <div class="mb-3 col-md-6">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" id="apellidos" class="form-control form-control-sm" autofocus>
              </div>
              <div class="mb-3 col-md-6">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" id="nombres" class="form-control form-control-sm" autofocus>
              </div>
          </div>

      
          <div class="row">
              <div class="mb-3 col-md-6">
              <label for="tipodocumento" class="form-label">Tipo Documento:</label>
              <select id="tipodocumento" class="form-select form-select-sm">
                <option value="">Seleccione</option>
                <option value="D">DNI</option>
                <option value="C">Carnet de Extranjería</option>
              </select>
              </div>
              <div class="mb-3 col-md-6">
                <label for="nrodocumento" class="form-label">N° Documento:</label>
                <input type="text" id="nrodocumento" class="form-control form-control-sm" autofocus>
              </div>
          </div>

          <div class="row">
              <div class="mb-3 col-md-6">
              <label for="fechanacimiento" class="form-label">Fecha de nacimiento:</label>
              <input type="date" class="form-control form-control-sm" id="fechanacimiento">
            </div>
            <div class="mb-3 col-md-6">
              <label for="sede" class="form-label">Sede:</label>
              <select id="sede" class="form-select form-select-sm">
                <option value="">Seleccione</option>
              </select>
              </div>
          </div>

          <div class="row">
              <div class="mb-3 col-md-6">
              <label for="escuela" class="form-label">Escuela:</label>
              <select id="escuela" class="form-select form-select-sm">
                <option value="">Seleccione</option>
              </select>
              </div>
              <div class="mb-3 col-md-6">
              <label for="carrera" class="form-label">Carreras:</label>
              <select id="carrera" class="form-select form-select-sm">
                <option value="">Seleccione</option>
              </select>
              </div>
          </div>

              <div class="mb-3">
              <label for="fotografia" class="form-label">Fotografía:</label>
              <input type="file" id="fotografia" accept=".jpg" class="form-control form-control-sm" >
            </div>

        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="guardar-estudiante">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  
  

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!--Sweet alert-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Lightbox CSS-->
  <script src="../dist/lightbox2/src/js/lightbox.js"></script>


  <script>
    $(document).ready(function (){


      function registrarEstudiante(){
        //Enviaremos los datos dentro de un OBJETO
        //Para adjuntar algún archico multimedia(se conoce como BINARIO) se hace con formData:
        var formData = new FormData();

        formData.append("operacion", "registrar");
        formData.append("apellidos", $("#apellidos").val());
        formData.append("nombres", $("#nombres").val());
        formData.append("tipodocumento", $("#tipodocumento").val());
        formData.append("nrodocumento", $("#nrodocumento").val());
        formData.append("fechanacimiento", $("#fechanacimiento").val());
        formData.append("idcarrera", $("#carrera").val());
        formData.append("idsede", $("#sede").val());
        formData.append("fotografia", $("#fotografia")[0].files[0]);
      

        $.ajax({
          url: '../controllers/estudiante.controller.php',
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          cache: false,
          success: function(){
            $("#formulario-estudiantes")[0].reset();
            $("#modal-estudiante").modal("hide");
            alert("Guardando correctamente");
          }
        });
      }


      function preguntarRegistro(){
        Swal.fire({
          icon: 'question',
          title: 'Matriculas',
          text:'¿Estas seguro de registrar al estudiante?',
          footer: 'Desarrollado con PHP',
          confirmButtonText: 'Aceptar',
          confirmButtonColor: '#EE8509',
          showCancelButton: true,
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          //Identificando la acción del usuario
          if(result.isConfirmed){
              registrarEstudiante();
          }
        });
      }

      function mostrarColaboradores(){
        $.ajax({
          url: '../controllers/colaborador.controller.php',
          type: 'POST',
          data: {operacion: 'Listar'},
          dataType: 'text',
          success: function(result){
            $("#tabla-colaborador tbody").html(result);
          }
        });
      }
    
      $("#guardar-colaborador").click(preguntarRegistro);



      //Al cambiar una escuela, se actualizarán las carreras
      $("#escuela").change(function (){
        const idescuelaFiltro = $(this).val();

        $.ajax({
          url: '../controllers/carrera.controller.php',
          type: 'POST',
          data: {
            operacion     :'listar',
            idescuela     : idescuelaFiltro  
          },
          dataType        : 'text',
          success         : function(result){
            $("#carrera").html(result);
          }     
        })
      });

      //Predeterminamos un control dentro del modal
      $("#modal-estudiante").on("shown.bs.modal", event => {
        $("#apellidos").focus();

        //EVENTOS
        obtenerSedes();
        obtenerEscuelas();
      });

      //Funciones de carga automatica
      mostrarColaboradores();

    });
  </script>

</body>

</html>