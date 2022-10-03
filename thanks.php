<?php
$phone = $_POST['user_phone_number'];
$regex = '/(0|\\+33|0033)[1-9][0-9]{8}/';


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // nettoyage et validation des données soumises via le formulaire
        if(!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
            $errors[] = "Le prénom est obligatoire";
        if(!isset($_POST['user_lastname']) || trim($_POST['user_lastname']) === '')
            $errors[] = "Le nom est obligatoire";
        if(!isset($_POST['user_mail']) || trim($_POST['user_mail']) === '' || !filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL))
            $errors[] = "L email est obligatoire et doit être un mail valide";
        if(!isset($_POST['user_phone_number']) || trim($_POST['user_phone_number']) === '' || !preg_match('/(0|\\+33|0033)[1-9][0-9]{8}/', $phone))
            $errors[] = "Le numéro de téléphone est obligatoire et doit être correct";
        if(!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
            $errors[] = "Veuillez renseigner un message";
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>réponse</title>
</head>
<body>

  <?php if (count($errors) > 0) : ?>
      <div class="border border-danger rounded p-3 m-5 bg-danger">
          <ul>
              <?php foreach ($errors as $error) : ?>
                  <li><?= $error ?></li>
              <?php endforeach; ?>
          </ul>
      </div>
  <?php endif; ?>
  <?php if (count($errors) === 0) : ?>
    <h2>Merci <strong><?=$_POST['user_firstname']?> <?= $_POST['user_lastname']?></strong> de nous avoir contacté à propos de <strong><?=$_POST['user_sujet']?></strong>.</h2>

      <p>Un de nos conseiller vous contactera soit à l’adresse <strong><?=$_POST['user_mail']?></strong> ou par téléphone au <strong><?=$_POST['user_phone_number']?></strong> dans les plus brefs délais pour traiter votre demande :</p>

      <p><strong><?=$_POST['user_message']?></strong></p>
  <?php endif; ?>







</body>
</html>
