<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/main.css">
        <title>Desafio Integrador II-JS</title>
    </head>
    <body>
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-secondary-custom d-flex align-items-center">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <!-- <img src="public/img/codoacodo.png" alt="Codo a Codo"> -->
            <span class="fs-4 conf_bs_as">Conf Bs As</span>
            </a>    
            <ul class="nav nav-pills margin_r">
                <!-- <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li> -->
                <li class="nav-item"><a href="#" class="nav-link font_header_gray">La conferencia</a></li>
                <li class="nav-item"><a href="#" class="nav-link font_header_gray">Los oradores</a></li>
                <li class="nav-item"><a href="#" class="nav-link font_header_gray">El lugar y la fecha</a></li>
                <li class="nav-item"><a href="#" class="nav-link font_header_white">Conviértete en orador</a></li>
                <li class="nav-item"><a href="#" class="nav-link font_header_green">Comprar tickets</a></li>
            </ul>
        </header>        
        <main>
          <!-- Boxes categoría -->
          <div class="container contact_form">                                  
            <div class="row justify-content-start">
              <div class="box_student">
                <div class="card-body form_title_top">
                  <h5 class="card-title">Estudiante</h5>
                  <p class="card-text">Tiene un descuento</p>
                  <h5 class="card-text">80%</h5>
                  <p class="card-text">*presentando documentación</p>

                </div>
              </div>
              <div class="box_student">
                <div class="card-body form_title_top">
                  <h5 class="card-title">Trainee</h5>
                  <p class="card-text">Tiene un descuento</p>
                  <h5 class="card-text">50%</h5>
                  <p class="card-text">*presentando documentación</p>
                </div>
              </div>
              <div class="box_student_plus" >
                <div class="card-body form_title_top">                  
                  <h5 class="card-title">Junior</h5>
                  <p class="card-text">Tiene un descuento</p>
                  <h5 class="card-text">15%</h5>
                  <p class="card-text">*presentando documentación</p>
                </div>
              </div>
            </div>
          </div>  
          <!-- FIN Boxes categoría -->
          <!-- Titulo formulario -->
          <div class="d-flex justify-content-center">
            <div class= "form_title_top">
              <h6>VENTA</h6>
              <h2>VALOR DE TICKET $200</h2>            
            </div>    
          </div>    
          <!--  FIN Titulo formulario -->
            <!-- Formulario  -->
            <form class="row g-3 justify-content-center contact_form">
              <div class="col-md-6">                
                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
              </div>
              <div class="col-md-6">                
                <input type="text" class="form-control" id="apellido" placeholder="Apellido">
              </div>
              <div class="col-12">                
                <input type="email" class="form-control" id="email" placeholder="Correo">
              </div> 
              <div class="col-md-6">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" placeholder="cantidad" min="1" max="10">
              </div>
              <div class="col-md-6">
                <label for="categoria" class="form-label">Categoría</label>
                <select id="categoria" class="form-select">
                  <option>Seleccioná una categoria</option>
                  <option>Estudiante</option>
                  <option>Trainee</option>
                  <option>Junior</option>
                  <!-- <option>...</option> -->
                </select>
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label total_a_pagar" id="totalCuenta">Total a Pagar: $</label>
              </div> 
              <div class="form_title_top mensaje" id="mensaje">
                <h5>mensaje</h5>
              </div>             
              <div class="col-md-6">
                <button type="reset" class="btn btn-primary button_bottom">Borrar</button>
              </div>
              <div class="col-md-6">
                <button type="submit" class="btn btn-primary button_bottom" id="calcular">Resumen</button>
              </div>              
            </form>

            <!-- FIN Formulario  -->
        </main>
            <!-- Footer -->
            <div class="container-footer">                
              <footer>          
              <ul class="nav justify-content-center">
                <li class="nav-item flex-wrap li-maxwidth"><a href="#" class="nav-link px-2 font_header_white">Preguntas Frecuentes</a></li>
                <li class="nav-item flex-wrap li-maxwidth"><a href="#" class="nav-link px-2 font_header_white">Contáctanos</a></li>
                <li class="nav-item flex-wrap li-maxwidth"><a href="#" class="nav-link px-2 font_header_white">Prensa</a></li>
                <li class="nav-item flex-wrap li-maxwidth"><a href="#" class="nav-link px-2 font_header_white">Conferencias</a></li>
                <li class="nav-item flex-wrap li-maxwidth"><a href="#" class="nav-link px-2 font_header_white">Términos y condiciones</a></li>
                <li class="nav-item flex-wrap li-maxwidth"><a href="#" class="nav-link px-2 font_header_white">Privacidad</a></li>
                <li class="nav-item flex-wrap li-maxwidth"><a href="#" class="nav-link px-2 font_header_white">Estudiantes</a></li>
              </ul>
            </footer>
          </div>
          <!-- FIN footer -->              
          <script src="index.js"></script>
    </body>
</html>