<?php

// Definindo uma variável que contém um valor que pode interferir na marcação HTML
$nome = 'campo"';

?>

<!-- Utilizando a função htmlentities para escapar caracteres especiais no valor do atributo -->
<input type="text" name="<?php echo htmlentities($nome); ?>" />

<?php
/*

Explicações dos comandos utilizados:
htmlentities = Converte caracteres especiais em entidades HTML.

Explicação do código:
Neste código, estamos utilizando a função htmlentities para escapar caracteres
especiais no valor do atributo name de um input. Isso é importante para evitar
que o valor do atributo name contenha caracteres que possam interferir na marcação
HTML, como aspas duplas.

*/
?>