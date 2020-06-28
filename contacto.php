	<?php
  include 'html/header.html';
  include 'html/menu.html';
  ?>
	<main id="contacto">
	  <h1>Contacto</h1>
	  <section>
	    <form action="contacto2.php" method="POST">
	      <div class="block">
	        <label for="nombre">Nombre: </label>
	        <input type="text" name="nombre" id="nombre" required>
	      </div>
	      <div class="block">
	        <label for="mail">E-mail: </label>
	        <input type="email" name="mail" id="mail" required>
	      </div>
	      <div class="block">
	        <label for="mensaje">Mensaje: </label>
	        <textarea name="mensaje" id="mensaje" cols="50" rows="3" required></textarea>
	      </div>
	      <button>Enviar</button>
	    </form>
	  </section>
	</main>
	<?php include 'html/footer.html'; ?>