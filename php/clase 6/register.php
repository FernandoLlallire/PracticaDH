<?php isset($_GET["versionCorta"]) ? $versionCorta = $_GET["versionCorta"] : $versionCorta= false; ?>
<?php $paises = [
  "" => "",
  "ar" => "argentina",
  "ur" => "uruguay",
  "pe" => "peru",
  "br" => "brasil",
  "mx" => "mexico",
  "eu" => "yankiland",
  "jp" => "japon",
  "ta" => "tailand",
  "ru" => "mother rusia",
  "es" => "españa",
  ]?>
  <pre>
  <?php if($_POST) var_dump($_POST); ?>
  </pre>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact us</title>
	 <style media="screen">
	 	* {
	 		box-sizing: border-box;
	 	}
	 	.form-control {
	 		border: solid 1px #dddddd;
			background-color: #eeeeee;
			padding: 5px;
			margin-bottom: 10px;
	 	}
		.form-control input:not([type=checkbox]) {
			display: block;
			height: 40px;
			width: 100%;
			margin-top: 5px;
			padding: 15px;
			font-size: 1em;
			outline: none;
		}
		.form-control select {
			width: 60%;
			height: 40px;
			font-size: 1em;
			outline: none;
		}
		.form-control button {
			background-color: #24c4d4;
			color: #FFFFFF;
			font-size: 1.2em;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
		}
    p{
      margin:0px;
    }
	 </style>
</head>
<body>
   <form method='post' action="confirmation.php">
      <fieldset >
			<legend>Registrate</legend>

			<strong>* campos requeridos</strong><br><br>

			<div class='form-control'>
				<label for='name' >Nombre completo*: </label>
				<input type='text' name='name'>
			</div>

			<div class='form-control'>
				<label for='email' >Email*:</label>
				<input type='text' name='email'>
			</div>

			<div class='form-control'>
				<label for='username' >Nombre de usuario*:</label>
				<input type='text' name='username'>
			</div>

			<div class='form-control'>
				<label for='password'>Contraseña*:</label>
				<input type='password' name='password'>
			</div>


      <?php if (!$versionCorta): ?>
      <div class='form-control'>
				<label for='confirmpassword'>Confirme Contraseña*:</label>
				<input type='password' name='confirm-password'>
			</div>
    <?php endif;?>

      <?php if (!$versionCorta): ?>
      <div class='form-control'>
        <label for="direccion">Direccion:</label>
        <input type='text' name="direccion">
      </div>
    <?php endif;?>

      <?php if (!$versionCorta): ?>
      <div class='form-control'>
				<label for='telefono' >Telefono:</label>
				<input type='tel' name='telefono'>
			</div>
    <?php endif;?>

      <?php if (!$versionCorta): ?>
        <div class="form-control">
          <select name="pais">
            <?php foreach ($paises as $code => $country): ?>
              <option value=<?=$code?>><?=$country?></option>
            <?php endforeach;?>
          </select>
        </div>
			</div>
    <?php endif;?>
      <div class="form-control">
        <p>Pasatiempos:</p>
        <label>correr<input type="checkbox" name="pasatiempos[]" value="correr"></label>
        <label>leer<input type="checkbox" name="pasatiempos[]" value="leer"></label>
        <label>salir<input type="checkbox" name="pasatiempos[]" value="salir"></label>
        <label>bailar<input type="checkbox" name="pasatiempos[]" value="bailar"></label>
        <label>fulbo<input type="checkbox" name="pasatiempos[]" value="fulbo"></label>
      </div>
			<div class='form-control'>
				<button type="submit">ENVIAR</button>
			</div>

      </fieldset>
   </form>
</body>
</html>
