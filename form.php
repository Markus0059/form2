

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
<form action="thanks.php" method="post" class="container bg-light border rounded p-5">
  <h1 class="text-center">Votre Formulaire</h1>
  <p class="row">
      <label for="firstname" class="form-label">Prénom : </label>
      <input type="text" name="user_firstname" id="firstname" class="form-control" required>
  </p>
  <p class="row">
      <label for="lastname" class="form-label">Nom : </label>
      <input type="text" name="user_lastname" id="lastname" class="form-control" required>
  </p>
  <p class="row">
      <label for="mail" class="form-label">Email : </label>
      <input type="email" name="user_mail" id="mail" class="form-control" required>
  </p>
  <p class="row">
      <label for="phone_number" class="form-label">Numéro de téléphone: </label>
      <input type="text" name="user_phone_number" id="phone_number" class="form-control" required>
  </p>
  <p class="row">
      <label for="sujet">Pour quel sujet vous nous contactez:</label>
      <select id="sujet" name="user_sujet" size="3" required>
        <option value="votre renseignement" selected>Renseignement</option>
        <option value="votre problème">Problème</option>
        <option value="votre resiliation">Résiliation</option>
      </select>
  </p>
  <p class="row">
      <label for="message" class="form-label">Message: </label>
      <textarea rows="10" cols="30" type="text" name="user_message" id="message" class="form-control" required></textarea>
  </p>

  <p class="text-center">
      <button type="submit" class="btn btn-primary">Envoyer le message</button>
  </p>

</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
