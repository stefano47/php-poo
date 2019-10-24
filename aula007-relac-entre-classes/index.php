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
                $lut = array();
                $lut[0] = new Lutador("Pretty Boy", 
                        "França", 
                        31, 
                        1.75, 
                        68.9, 
                        11, 2, 1);
                $lut[0]->apresentar();
                $lut[0]->status();
                
                $lut[1] = new Lutador("Putscript", 
                        "Brasil", 
                        29, 
                        1.68, 
                        57.8, 
                        14, 2, 3);
                $lut[1]->apresentar();
                $lut[1]->status();
                
                $lut[2] = new Lutador("Snapshadow", 
                        "EUA", 
                        35, 
                        1.65, 
                        80.9, 
                        12, 2, 1);
                $lut[2]->apresentar();
                $lut[2]->status();
                
                $lut[3] = new Lutador("Dead Code", 
                        "Austrália", 
                        28, 
                        1.93, 
                        81.6, 
                        13, 0, 2);
                $lut[3]->apresentar();
                $lut[3]->status();
                
                $lut[4] = new Lutador("UFOCobol", 
                        "Brasil", 
                        37, 
                        1.70, 
                        119.3, 
                        5, 4, 3);
                $lut[4]->apresentar();
                $lut[4]->status();
                
                $lut[5] = new Lutador("Nerdaart", 
                        "EUA", 
                        30, 
                        1.81, 
                        105.7, 
                        12, 2, 4);
                $lut[5]->apresentar();
                $lut[5]->status();
            ?>
        </pre>
    </body>
</html>
