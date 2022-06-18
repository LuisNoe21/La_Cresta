<?php 
include('includes/funciones.php');
incluirTemplate('header');
?>

    <section id="menu" data-aos="fade-up" class="contenedor box-productos">
        <h2>Nuestro Menu</h2>
        <div class="productos">
            <div class="item">
                <img src="img/img1.jpg" alt="">
                <h4>Pollo Fresco</h4>
                <span>L 140.90</span>
                <a href="#">Solicitar a Domicilio</a>
            </div>
            <div class="item">
                <img src="img/img2.jpg" alt="">
                <h4>Alitas</h4>
                <span>L 71.90</span>
                <a href="#">Solicitar a Domicilio</a>
            </div>
            <div class="item">
                <img src="img/img3.jpg" alt="">
                <h4>Muslo</h4>
                <span>L 35.50</span>
                <a href="#">Solicitar a Domicilio</a>
            </div>
            <div class="item">
                <img src="img/img4.png" alt="">
                <h4>Patas Frescas</h4>
                <span>L 65.00</span>
                <a href="#">Solicitar a Domicilio</a>
            </div>
            <div class="item">
                <img src="img/img5.jpg" alt="">
                <h4>Alas con Pechuga</h4>
                <span>L 141.90</span>
                <a href="#">Solicitar a Domicilio</a>
            </div>
            <div class="item">
                <img src="img/img6.jpg" alt="">
                <h4>Pechuga</h4>
                <span>L 70.00</span>
                <a href="#">Solicitar a Domicilio</a>
            </div>
            <div class="item">
                <img src="img/img7.png" alt="">
                <h4>Piernas</h4>
                <span>L 26.65</span>
                <a href="#">Solicitar a Domicilio</a>
            </div>
            <div class="item">
                <img src="img/img8.jpg" alt="">
                <h4>Piernas, alas y pechuga</h4>
                <span>L 180.00</span>
                <a href="#">Añadir al Carrito</a>
            </div>
        </div>

    </section>
<!-- 
    <section id="nosotros" data-aos="fade-up" class="box-sobre">
        <br>
        <br>
        <div class="contenedor contenido-sbr">
            <h2>Sobre Nosotros</h2>

            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido
                el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona
                que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró
                hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de
                relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los
                60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más
                recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones
                de Lorem Ipsum.</p>
        </div> -->
    <!-- </section> -->
    <div data-aos="fade-up"
    data-aos-anchor-placement="top-center" class="carrusel">
    <h2 style="text-align:center ; font-size:40px;">Galeria</h2>
        <div class="carrusel-items">
            <div class="carrusel-item">
                <img src="img/1.jpg" alt="">
            </div>
            <div class="carrusel-item">
                <img src="img/img1.jpg" alt="">
            </div>
            <div class="carrusel-item">
                <img src="img/img2.jpg" alt="">
            </div>
            <div class="carrusel-item">
                <img src="img/img3.jpg" alt="">
            </div>
            <div class="carrusel-item">
                <img src="img/img4.png" alt="">
            </div>
            <div class="carrusel-item">
                <img src="img/img5.jpg" alt="">
            </div>
            <div class="carrusel-item">
                <img src="img/img6.jpg" alt="">
            </div>
            <div class="carrusel-item">
                <img src="img/img7.png" alt="">
            </div>
            <div class="carrusel-item">
                <img src="img/img8.jpg" alt="">
            </div>
        </div>
    </div>
   
  
<?php 
incluirTemplate('formulario-contacto');
incluirTemplate('footer');
?>