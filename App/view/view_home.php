<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home page</title>
    <link rel="stylesheet" href="/asset/style/style_home.css">
    
</head>

<body>
    <header>
        <nav class="navMenu">
            <ul class="navMenu__links">
                <li class="navMenu__logo">
                    <a href="#">
                        <img src="./asset/images/logoChocoblast.png" alt="Logo Chocoblast" />
                    </a>
                </li>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Chocoblast</a></li>
                <li><a href="#">Inscription</a></li>
                <li><a href="#">Se connecter</a></li>
            </ul>
            <div class="dot"></div>

        </nav>
    </header>
</body>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
      background: #272727;
      font-family: "Montserrat", sans-serif;
    }

    header {
        background-color: whitesmoke;
        
    }

    .navMenu {
        padding: 0.2rem;
    }

    .navMenu__logo img {
        max-height: 100px;
        width: auto;
    }

    .navMenu__links {
        list-style: none;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 0.5rem;
        place-items: center;
    }

    .navMenu__links a {
        text-decoration: none;
        color: #fff;
        font-size: 1.1rem;
        text-align: center;
        
    }

    .navMenu__links a:hover{
      color: blue;
    }
  
</style>
</html>