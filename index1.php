<?php
// Importa la classe Categoria dal file class.php
require_once 'class.php';

class Post {
    private $titolo;
    private $categoria; // Questo sarà un oggetto di tipo Categoria
    private $tag;

    public function __construct($titolo, Categoria $categoria, $tag = []) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    // Metodo per visualizzare il titolo
    public function getTitolo() {
        return $this->titolo;
    }

    // Metodo per visualizzare la categoria
    public function getCategoria() {
        return $this->categoria->getMyCategoria();
    }

    // Metodo per visualizzare i tag
    public function getTag() {
        return implode(', ', $this->tag);
    }

    // Metodo per visualizzare l'articolo completo
    public function displayPost() {
        echo "Titolo: " . $this->getTitolo() . "\n";
        echo "Categoria: " . $this->getCategoria() . "\n";
        echo "Tag: " . $this->getTag() . "\n";
    }
}

// Creiamo alcune istanze di Categoria
$attualita = new Attualita();
$sport = new Sport();
$gossip = new Gossip();
$storia = new Storia();

// Creiamo delle istanze di Post iniettando le dipendenze Categoria
$post1 = new Post("Ultime notizie", $attualita, ["breaking", "news"]);
$post2 = new Post("Partita di calcio", $sport, ["calcio", "serie A"]);
$post3 = new Post("Gossip dell'estate", $gossip, ["celebrità", "pettegolezzi"]);
$post4 = new Post("La storia di Roma", $storia, ["storia", "Roma"]);

// Visualizziamo gli articoli completi
echo "<pre>";
$post1->displayPost();
echo "\n";
$post2->displayPost();
echo "\n";
$post3->displayPost();
echo "\n";
$post4->displayPost();
echo "</pre>";
?>
