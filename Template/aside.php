<aside class="col-lg-3">
  <i class="fas fa-user-ninja fa-4x mb-3"></i>
  <ul class="list-group">
    <?php
    //On boucle sur l'utilisateur stocké en session pour afficher toutes ses informations
    foreach ($_SESSION["user"] as $key => $value) {
      echo "<li class='list-group-item'>$key : $value</li>";

    }
    echo $_SESSION["total"];
    ?>
  </ul>
  <a href="logOut.php"><button type="button" class="btn btn-danger">deconnexion</button></a>
  <a href="basketTreatment.php?emptyBasket=true"><button type="button" class="btn btn-warning">Panier à 0</button></a>

</aside>
