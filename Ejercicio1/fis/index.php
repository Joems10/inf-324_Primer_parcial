<?php
$nivel = "../";
$pag = "F";
include '../head.php';
include '../menu.php';

?>

<main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../image/fis-1.jpg" alt="" width="100%">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1 style="font-size:50px">Carrera de Física</h1>
            <p style="font-size:30px">
              Excelencia en la Formación Profesional
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../image/fis-2.jpg" alt="">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Carrera de Física</h1>
            <p>
              Excelencia en la Formación Profesional
            </p>
          </div>
        </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider" />

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">CARRERA DE FÍSICA</h2>
        <h4><span class="text-muted">MISIÓN</span>
        </h4>
        <p class="lead">
        La Carrera de Física comparte sustancialmente la misión, visión y objetivos de la Universidad Boliviana, los de la UMSA y los de la FCPN. No obstante, tiene como misión propia y fundamental la de formar y entrenar recursos humanos de alto nivel, especializados en la investigación científica, la docencia y la aplicación de conocimientos en todas las áreas de la física. Crear y difundir conocimiento en física o relacionado con la física, Comando y contribuyendo para la formación de profesionales críticos, independientes y capacitados tanto a nivel de pregrado como de posgrado. Estos profesionales deberán ser capaces de contribuir al desarrollo científico y tecnológico, como consecuencia al mejoramiento de las condiciones sociales y económicas del país.
        </p>
      </div>
      <div class="col-md-5">
        <img src="../image/4.jpg" alt="" width="550px">
      </div>
    </div>


    <hr class="featurette-divider" />

    <!------------------->

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4 ">
        <img src="../image/2.jpeg" alt="">

        <h2>INFORMÁTICA</h2>
        <p>
        Ser la unidad académica líder a nivel nacional y un referente de alto nivel en la formación de profesionales del área de la Informática.
        </p>
        <p>
          <a class="btn btn-secondary" href="<?php echo $nivel; ?>inf/index.php">Ver más &raquo;</a>
        </p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="../img/3.png" alt="">

        <h2>MATEMÁTICA</h2>
        <p>
        La Carrera de Matemática, formador de profesionales en Matemática y Matemática Aplicada a nivel Licenciatura y Postgrado.
        </p>
        <p>
          <a class="btn btn-secondary" href="<?php echo $nivel; ?>mat/index.php">Ver más &raquo;</a>
        </p>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="../image/4.jpg" alt="" width="230px">
        <h2>FÍSICA</h2>
        <p>
          La visión de la Carrera es la de constituirse en un centro de excelencia en Física con capacidades plenas.
        </p>
        <p>
          <a class="btn btn-secondary" href="<?php echo $nivel; ?>fis/index.php">Ver más &raquo;</a>
        </p>
      </div>
      <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
    <hr class="featurette-divider" />

  </div>
  <!-- /.container -->

  <?php
  include '../footer.php';
  ?>