<div class="main-container">

    <form class="box login" action="" method="POST" autocomplete="off">
		<h5 class="title is-5 has-text-centered is-uppercase">Sistema de inventario</h5>

		<div class="field">
			<label class="label">Usuario</label>
			<div class="control">
			    <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" placeholder="Nombre de usuario" required >
			</div>
		</div>

		<div class="field">
		  	<label class="label">Clave</label>
		  	<div class="control">
		    	<input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" placeholder="Contraseña" required >
		  	</div>
		</div>

		<p class="has-text-centered mb-4 mt-3">
			<button type="submit" class="button is-primary">Iniciar sesion</button>
			<a href="index.php?view=user/new">
				<button class="button is-info" type="button">Registrarse</button>
			</a>
		</p>

		<?php

		if(isset($_POST["login_usuario"]) && isset($_POST["login_clave"])) {
			require_once "php/main.php";
			require_once "php/user/login.php";
		}

		?>

	</form>

</div>