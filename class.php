<?php


abstract class Categoria {
                                               // Metodo astratto
    abstract public function getMyCategoria();
}

class Attualita extends Categoria {
                                        // Implementazione del metodo astratto
    public function getMyCategoria() {
        echo "Attualità \n";
    }
}

class Sport extends Categoria {
    
    public function getMyCategoria() {
        echo "Sport \n";
    }
}

class Gossip extends Categoria {
   
    public function getMyCategoria() {
        echo "Gossip \n";
    }
}

class Storia extends Categoria {
    
    public function getMyCategoria() {
        echo "Storia \n";
    }
}

// CREAZIONE INSTANZE

$storia = new Storia();
$storia -> getMyCategoria();

//

$gossip = new Gossip();
$gossip -> getMyCategoria();

//

$sport = new Sport();
$sport-> getMyCategoria();

//

$attualita = new Attualita();
$attualita-> getMyCategoria();







?>