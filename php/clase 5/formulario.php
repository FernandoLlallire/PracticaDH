<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario php</title>
  </head>
  <body>
    <form action="imprimir.php" method="post">
      <fieldset>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombreID">
        <br><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="emailID">
        <br><br>
        <fieldset>
          <legend>Estado civil</legend>
          <label> <input type="radio" name="radioEstadoCivil" value="soltero">soltero</label>
          <label> <input type="radio" name="radioEstadoCivil" value="casado">casado</label>
          <label> <input type="radio" name="radioEstadoCivil" value="joda">joda</label>
        </fieldset>
        <br>
        <select name="pais">
          <optgroup label="america">
            <option value="argentina">Argentina</option>
            <option value="uruguay">Uruguay</option>
          </optgroup>
          <optgroup label="europa">
            <option value="espana">España</option>
            <option value="grecia">Grecia</option>
          </optgroup>
        </select>
        <br><br>
        <fieldset>
          <legend>¿Cuales son tus hobbies?</legend>
          <label> <input type="checkbox" name="hobies[]" value="leer">Leer</label><br>
          <label> <input type="checkbox" name="hobies[]" value="caminar">caminar</label><br>
          <label> <input type="checkbox" name="hobies[]" value="bailar">bailar</label><br>
        </fieldset>
      </fieldset>
      <br>
      <br>
      <button type="submit">Mandale Mecha</button>
    </form>
  </body>
</html>
