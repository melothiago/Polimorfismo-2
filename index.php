<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        /* Polimorfismo de sobrecarga nao e suportado no PHP
           Utilizamos as funcoes com nomes diferentes dentro da mesma classe
           cachorro */
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        
        $c = new Cachorro();
        
        $c->reagirFrase("Ola");
        $c->reagirFrase("Vai Apanhar!");
        $c->reagirHora(11, 45);
        $c->reagirHora(21, 00);
        $c->reagirDono(TRUE);
        $c->reagirDono(FALSE);
        $c->reagirIdadePeso(2, 12.5);
        $c->reagirIdadePeso(17, 4.5);        
        
        ?>
        </pre>
    </body>
</html>