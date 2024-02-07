<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
    <script src="./script.js" defer></script>
  </head>
  <body>
    <header>
      <h1>Manipulation du DOM en JavaScript</h1>
    </header>
    <nav>
      <ul>
        <li><a href="#article1">Article 1</a></li>
        <li><a href="#article2">Article 2</a></li>
        <li><a href="#article3">Article 3</a></li>
      </ul>
    </nav>
    <main>
      <article id="article1">
        <h2 class="demo">Titre de l'article 1</h2>
        <p>
          Ceci est le contenu de l'article 1 tel que décrit sur le site
        </p>
      </article>
      <?php
        for($i =0 ; $i < 10; $i++)
        {
          echo "<article id='article".$i."'>";
          echo "<h2>Nouvel article num.".$i."</h2>";
          echo "<p>Ceci est un paragraphe generé</p>";
          echo "</article>";
        }

      ?>+
    </main>
    <aside>
      <h3>Informations supplémentaires</h3>
      <p>Quelques informations ici...</p>
    </aside>
    <footer>
      <p>© 2024 École de Technologie Supérieure. Tous droits réservés.</p>
    </footer>
  </body>
</html>
