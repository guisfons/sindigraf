<?php
    $url = get_field('botao_largo_url');
    $btnText = get_field('botao_largo_texto');
    if($url) {
        echo "<a class=\"beneficios-btn\" href=\"$url\">$btnText</a>";
    }
?>