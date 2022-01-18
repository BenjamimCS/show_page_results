<?php

$baseDir = './'; # Put your directory here
$openDir = dir($baseDir);

while($files = $openDir->read()){
    if($files !== '.' && $files !== '..' && !strpos($files,'.php') && !is_dir($files)){
        # Reads the data of each file and puts it in a variable...
        $content = file_get_contents($files);

        $dom = new DOMDocument(); 
        libxml_use_internal_errors(true); # By order to DOM correctly works I recommend to keep this parameter
        # I didn't see it have some effect, I just left it here 'cause it is in the documentation
        $dom->validateOnParse = true; 
        $dom->loadHTML($content); # The string to be used
        
        # From here, I think you can do it for yourself. I hope helped you
        $h1 = $dom->getElementById('title')->textContent;
        $h2 = $dom->getElementById('subtitle')->textContent;
        $p1 = rtrim(substr($dom->getElementById('lead')->textContent,0,90))."...";
        
        echo
        "
        <a href='".$files."' rel='next'>
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
