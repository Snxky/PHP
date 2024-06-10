<form action="" method = "GET">
      <label for="name">nom</label>
      <input type="text" name="nom" id="name" />

      <label for="pren">prenom</label>
      <input type="text" name="prenom" id="pren" />

      <input type="submit" value="submit" />



</form>


<?php
  var_dump($_POST['nom']);