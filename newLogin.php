<?php
include "Template/header.php";

if(isset($_GET["message"])) {
  $message = htmlspecialchars($_GET["message"]);
  echo "<div class='alert alert-danger w-50 mx-auto'>" . $message . "</div>";
}

?>

<form class="w-50 mx-auto my-5" action="loginNew.php" method="post">
  <div class="form-group">
    <label for="userName">Votre nom</label>
    <input type="text" class="form-control" id="userName" name="user_name" required>
  </div>
  <div class="form-group">
    <label for="userPassword">Votre mot de passe</label>
    <input type="password" class="form-control" id="userPassword" name="user_password" required>
    <label for="confirmPassword">confirmation mot de passe</label>
    <input type="password" class="form-control" id="confirmPassword" name="confirm_password" required>
  </div>
  <div class="form-group">
    <label for="sexeChoice">Choisir sexe</label>
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
      <option value="1">Homme</option>
      <option value="2">Femme</option>
    </select>
  </div>
  <button type="submit" class="btn lightBg">Se connecter</button>
</form>


<?php
include "Template/footer.php";
 ?>
