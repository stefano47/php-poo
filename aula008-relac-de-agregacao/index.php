<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Ultra Emoji Combate</h1>
        <pre>
            <?php
                require_once 'Lutador.php';
                require_once 'Luta.php';
                $lut = array();
                $UEC01 = new Luta;
                $UEC02 = new Luta;
                $UEC03 = new Luta;
                $UEC04 = new Luta;
                
                $lut[0] = new Lutador("Pretty Boy", 
                        "França", 
                        31, 
                        1.75, 
                        68.9, 
                        11, 2, 1);
                 
                $lut[1] = new Lutador("Putscript", 
                        "Brasil", 
                        29, 
                        1.68, 
                        57.8, 
                        14, 2, 3);
                 
                $lut[2] = new Lutador("Snapshadow", 
                        "EUA", 
                        35, 
                        1.65, 
                        80.9, 
                        12, 2, 1);
                 
                $lut[3] = new Lutador("Dead Code", 
                        "Austrália", 
                        28, 
                        1.93, 
                        81.6, 
                        13, 0, 2);
                 
                $lut[4] = new Lutador("UFOCobol", 
                        "Brasil", 
                        37, 
                        1.70, 
                        119.3, 
                        5, 4, 3);
                 
                $lut[5] = new Lutador("Nerdaart", 
                        "EUA", 
                        30, 
                        1.81, 
                        105.7, 
                        12, 2, 4);
                
                $UEC01->marcarLuta($lut[0], $lut[1]);
                $UEC01->lutar();
                $lut[0]->status();
                $lut[1]->status();
                
                $UEC02->marcarLuta($lut[0], $lut[5]);
                $UEC02->lutar(); # [ERRO]
                
                $UEC03->marcarLuta($lut[5], $lut[5]);
                $UEC03->lutar();
                
                $UEC04->marcarLuta($lut[5], $lut[4]);
                $UEC04->lutar();
                $lut[4]->status();
                $lut[5]->status();
            ?>
        </pre>
    </body>
</html>