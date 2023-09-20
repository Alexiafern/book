<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/categorias.css">
    <title>Categorias</title>
</head>
<body>
    <main>
        <div class="categoria-card">
            <?php
                // Array de categorias (você pode buscar isso de um banco de dados)
                $categorias = array(
                    "Eletrônicos",
                    "Roupas",
                    "Livros",
                    "Alimentos",
                    "Esportes"
                );

                // Loop para exibir as categorias
                foreach ($categorias as $categoria) {
                    echo "<div class='card'>$categoria</div>";
                }
            ?>
        </div>
        <script>
          window.addEventListener('resize', function() {
              const categoriaCard = document.querySelector('.categoria-card');
              const cards = document.querySelectorAll('.card');
              const cardWidth = cards[0].offsetWidth;
              const windowWidth = window.innerWidth;
              const numVisibleCards = Math.floor(windowWidth / cardWidth);
              categoriaCard.style.transform = `translateX(0px)`;
              categoriaCard.style.transition = 'transform 0.3s';
  
              if (numVisibleCards < cards.length) {
                  categoriaCard.style.transform = `translateX(-${cardWidth * (cards.length - numVisibleCards)}px)`;
              }
          });
      </script>
    </main>
</body>
</html>
