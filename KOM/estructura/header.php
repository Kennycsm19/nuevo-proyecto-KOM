<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Título de la página</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descripción de la página">
    <link rel="stylesheet" href="./css/header.css">
  </head>
  <header>
    <?php require('./estructura/promotion.php')?>
    <div class="logoheader"></div>
    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle"></label>
    <div id="sidebarMenu">
      <div class="logoafter"></div>
      <div class="slidermenugrid">
        <div class="logoslidediv">
          <div class="logohead"></div>
          <label for="openSidebarMenu" class="sidebarIconToggle"></label>
        </div>
        <div class="fourlinks">
          <a href="#">
            <span class="home"></span>Home </a>
          <a href="#">
            <span class="porta"></span>Portafolio </a>
          <a href="#">
            <span class="coti"></span>Cotizador </a>
          <a href="#">
            <span class="contact"></span>Contacto </a>
        </div>
        <div class="fourcube">
          <div class="cube1">
            <a href="#">
              <span></span>Páginas Web </a>
          </div>
          <div class="cube2">
            <a href="#">
              <span></span>Tiendas Virtuales </a>
          </div>
          <div class="cube3">
            <a href="#">
              <span></span>Landing Pages </a>
          </div>
          <div class="cube4">
            <a href="#">
              <span></span>Google SEO </a>
          </div>
        </div>
        <div class="fourlinkstwo">
          <a href="#">
            <span class="blog"></span>Blog </a>
          <a href="#">
            <span class="student"></span>Cursos </a>
          <a href="#">
            <span class="jobs"></span>KOM jobs </a>
          <a href="#">
            <span class="Whatsapp"></span>Whatsapp </a>
        </div>
        <div class="socialmedia">
          <a href="#">
            <span class="telf"></span>
          </a>
          <a href="#">
            <span class="correo"></span>
          </a>
          <a href="#">
            <span class="fb"></span>
          </a>
          <a href="#">
            <span class="ig"></span>
          </a>
          <a href="#">
            <span class="in"></span>
          </a>
          <a href="#">
            <span class="yt"></span>
          </a>
        </div>
      </div>
    </div>
    </div>
  </header>
