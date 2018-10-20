  <?php
   $countries=[
     "ar"=>"argentina",
     "pe"=>"peru",
     "br"=>"brasil",
     "mx"=>"mexico",
     "co"=>"colombia",
     "es"=>"españa",
     "it"=>"italia",
     "ge"=>"alemania",
     "ru"=>"rusia",
     "jp"=>"japon",
   ];
?>
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
	 </style>
</head>
<body>
   <form method='post'>
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
      <?php if (!isset($_GET["versionCorta"])) : ?>
      <div class='form-control'>
        <label for='telefono'>Confirme Contraseña:</label>
        <input type='password' name='telefono'>
      </div>

      <div class='form-control'>
        <label for='address'>Direccion:</label>
        <input type='password' name='address'>
      </div>
      <div class='form-control'>
        <label for='phone'>Telefono:</label>
        <input type='password' name='phone'>
      </div>
    <?php endif;  ?>
			<div class='form-control'>
				<button type="submit">ENVIAR</button>
			</div>

      <select name="countries">
        <?php foreach ($countries as $code => $country): ?>
          <option value="<?= $code ?>"> <?= $country ?></option>
        <?php endforeach; ?>
      </select>

          <br>
         <input type="checkbox" name="hobbies[]" value="hobie 1">  hobie 1 <br>
         <input type="checkbox" name="hobbies[]" value="hobie 2">  hobie 2 <br>
         <input type="checkbox" name="hobbies[]" value="hobie 3">  hobie 3 <br>
         <input type="checkbox" name="hobbies[]" value="hobie 4">  hobie 4 <br>
         <input type="checkbox" name="hobbies[]" value="hobie 5">  hobie 5 <br>

      </fieldset>
   </form>
</body>
</html>