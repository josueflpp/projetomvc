<?php

$template = file_get_contents('app/template/estrutura.html');
ob_start();

    $core = new Core;
    $core->start($_GET);
    $saida = ob_get_contents();
ob_clean();

    $tplPronto = str_replace('{{area_dinamica}}', $saida, $template);

    echo $tplPronto;
    
?>