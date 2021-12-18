<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topics</title>
    <link rel="stylesheet" href="./decoration/style.css">
    <style>

</style>
</head>
<body>
    <main>
        <h1>Topics</h1> 
        <section id="results">
            <?php
            $baseDir = './topics/';
            $openDir = dir($baseDir);
            
            while($arq = $openDir->read()){
                if($arq !== '.' && $arq !== '..' && !strpos($arq,'.php') && !is_dir($arq)){
                    $content = file_get_contents($baseDir.$arq);
            
                    $dom = new DOMDocument();
                    libxml_use_internal_errors(true);
                    $dom->validateOnParse = true;
                    $dom->loadHTML($content);
            
                    $h1 = $dom->getElementById('titulo')->textContent;
                    $h2 = $dom->getElementById('subtitulo')->textContent;
                    $p1 = rtrim(substr($dom->getElementById('lead')->textContent,0,90))."...";
            
                    echo
                    "
                    <a href='".$baseDir.$arq."' rel='next'>
                        <div class='result-area'>
                            <h1>".$h1."</h1>
                            <h2>".$h2."</h1>
                            <p>".$p1."</p>
                        </div>
                    </a>
                    ";
                }
            }
            ?>
        </section>
    </main>
</body>