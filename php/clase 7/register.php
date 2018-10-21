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
];?>
<?php
  if(!empty($_POST)){
    $name = "\"".$_POST["name"]."\"";
    $email = "\"".$_POST["email"]."\"";
    $username = "\"".$_POST["username"]."\"";
    $direccion = "\"".$_POST["direccion"]."\"";
    $telefono = "\"".$_POST["telefono"]."\"";
    $pais = "\"".$_POST["pais"]."\"";
    $pasatiempos = "\"".($_POST["pasatiempos"] ?? "")."\"";
  }
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylo.css">
    <title>Contact us</title>
</head>
<body>
   <form method='post' >
      <fieldset >
			<legend>Registrate</legend>

			<strong>* campos requeridos</strong><br><br>

			<div class='form-control'>
				<label for='name' >Nombre completo*: </label>
				<input type='text' name='name' value=<?= $name ?? "" ?> >
			</div>

			<div class='form-control'>
				<label for='email' >Email*:</label>
				<input type='text' name='email' value= <?= $email ?? "" ?>>
			</div>

			<div class='form-control'>
				<label for='username' >Nombre de usuario*:</label>
				<input type='text' name='username' value= <?= $username ?? "" ?>>
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
        <input type='text' name="direccion" value=<?= $direccion ?? "" ?>>
      </div>
    <?php endif;?>

      <?php if (!$versionCorta): ?>
      <div class='form-control'>
				<label for='telefono' >Telefono:</label>
				<input type='tel' name='telefono' value=<?= $telefono ?? "" ?>>
			</div>
    <?php endif;?>

      <?php if (!$versionCorta): ?>
        <div class="form-control">
          <select name="pais">
            <?php foreach ($paises as $code => $country): ?>
              <option value=<?=$code?> <?php if(($pais ?? "")==$code) echo("selected")?>><?=$country?></option>
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
