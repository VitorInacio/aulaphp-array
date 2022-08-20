<?php
    include "header.php";
    include "dados.php";
?>
<main>
    <h1>Séries em Destaque:</h1>
        <div class="grid">
            <?php 
            foreach ($series as $serie) {
                $id =$serie["id"];
                $nome = $serie["nome"];
                $imagem = $serie["imagem"];

                echo "<div class='coluna'>
                    <img src='imagens/{$imagem}'>
                    <p><strong>{$nome}</strong></p>

                    <p>
                        <a href='serie.php?id={$id}'>
                            Detalhes
                        </a>
                    </p>
                </div>";
            }
            
            ?>
        </div>

</main>

<?php include "footer.php"?>