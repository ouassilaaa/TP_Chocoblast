
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">


</head>
<body>

  <div class="login-box">
    <h2>Inscription &#129360</h2>
    <form>
      <div class="user-box">
        <input type="text" name="nom_utilisateur" required="">
        <label>Nom</label>
    </div>

    <div class="user-box">
        <input type="email" name="mail_utilisateur" required="">
        <label>Email</label>
    </div>

    <div class="user-box">
        <input type="password" name="password_utilisateur" required="">
        <label>Mot de passe </label>

    </div>  
    <div class="user-box">
      <input type="confirm" name="confirm_password" required="">
      <label>Confirmer le mot de passe</label>
  </div>

    <div class ="file">
        <input type="file" name="image_utilisateur">
    </div>
  
      <a href="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Je m'inscris
      </a>
    </form>
  </div>
</body>
</html>

