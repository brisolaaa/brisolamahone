<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frases de Filmes Famosos</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #222;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2024/02/cinema.jpg');
            background-size: cover;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            text-align: center;
            width: 80%;
            max-width: 400px;
        }

        h1 {
            color: #ffcc00;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.4rem;
            color: #ddd;
            margin: 20px 0;
            font-style: italic;
        }

        .movie-icon {
            font-size: 5rem;
            color: #ffcc00;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #ffcc00;
            color: #222;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e6b800;
        }

      
        .vlib {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }
    </style>
</head>
<body>
    <div class="container">
    
        <div class="movie-icon">🍿🎬</div>

        <h1>Frases de Filmes Famosos</h1>
        <p>
            <?php
            $phrases = [
                "\"A força estará com você. Sempre.\" - Star Wars",
                "\"Você me salvou de todas as maneiras que alguém poderia ter sido salvo.\" - Titanic",
                "\"Até o infinito e além!\" - Toy Story",
                "\"Eu sou o rei do mundo!\" - Titanic",
                "\"A única coisa que está entre você e seu objetivo é a história de merda que você vive contando a si mesmo sobre por que não pode alcançá-la.\" - O Lobo de Wall Street",
                "\"Compramos coisas de que não precisamos, com dinheiro que não temos, para impressionar pessoas de quem não gostamos.\" - Clube da Luta",
                "\"A vida é como uma caixa de chocolates, você nunca sabe o que vai encontrar.\" - Forrest Gump"
                
                
            ];
            echo $phrases[array_rand($phrases)];
            ?>
        </p>
        <form action="frasess.php" method="post">
            <button type="submit">Mudar Frase</button>
        </form>
    </div>
    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
</body>
</html>
