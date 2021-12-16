<?php

$baseDir = './'; # Coloque o seu diretório aqui
$openDir = dir($baseDir);

while($arq = $openDir->read()){
    if($arq !== '.' && $arq !== '..' && !strpos($arq,'.php') && !is_dir($arq)){
        # Lemos os dados de cada arquivo e o colocamos numa variável... 
        $content = file_get_contents($arq);

        $dom = new DOMDocument();
        libxml_use_internal_errors(true); # Pro DOM funcionar corretamente recomendo manter esse parâmetro
        $dom->validateOnParse = true; # Não vi isso fazer efeito, só deixei por conter na documentação
        $dom->loadHTML($content); # Arquivo a ser usado
        
        # A partir daqui acho que você pode se virar sozinho. Espero ter ajudado
        $h1 = $dom->getElementById('titulo')->textContent;
        $h2 = $dom->getElementById('subtitulo')->textContent;
        $p1 = rtrim(substr($dom->getElementById('lead')->textContent,0,90))."...";
        
        echo
        "
        <a href='".$arq."' rel='next'>
            <div>                
                <h1>".$h1."</h1>                
                <h2>".$h2."</h1>                
                <p>".$p1."</p>                
            </div>
        </a>
        ";
    }
}

$openDir->close();
?>