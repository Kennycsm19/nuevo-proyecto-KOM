<section id="contact">
  <div class="formgrid">
    <div class="formcontainer">
      <div class="contactcontainer">
        <p>Completa el formulario y pronto nos pondremos en contacto contigo</p>
      </div>
      <form method="post" action="guardar_datos.php">
        <label for="nombre">Ingresa tu Nombre*</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="apellido">Tu Apellido*</label>
        <input type="text" name="apellido" id="apellido" required>
        <label for="whatsapp">Tu Teléfono (WhatsApp)*</label>
        <input type="text" name="whatsapp" id="whatsapp" required>
        <label for="correo">Tu electrónico*</label>
        <input type="email" name="correo" id="correo" required>
        <label for="empresa">Y el nombre de la empresa*</label>
        <input type="text" name="empresa" id="empresa" required>
        <label>
        <input type="checkbox" name="acepta_terminos" required>Aceptas los Términos y Condiciones</label>
        <button type="submit">Enviar datos</button>
      </form>
    </div>
    <div class="ifdiv">
      <div class="marifdiv">
        <p>Si prefieres llámanos o escribenos...</p>
        <p>Estamos antentos a tu comunicación para poder implementar tus nuevas herramientas digitales.</p>
        <a href="#"><span></span>hola@kom.pe</a>
        <a href="#"><span></span>(+51)1.322.2789</a>
        <a href="#"><span></span>(+51)932.222.223</a>
      </div>
    </div>
  </div>
</section>

<!-- .formgrid {  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "formcontainer formcontainer formcontainer formcontainer"
    "formcontainer formcontainer formcontainer formcontainer"
    "formcontainer formcontainer formcontainer formcontainer"
    "formcontainer formcontainer formcontainer formcontainer"
    "ifdiv ifdiv ifdiv ifdiv"
    "ifdiv ifdiv ifdiv ifdiv"
    "ifdiv ifdiv ifdiv ifdiv"
    "ifdiv ifdiv ifdiv ifdiv";
}

.formcontainer { grid-area: formcontainer; }

.ifdiv { grid-area: ifdiv; }
 -->
