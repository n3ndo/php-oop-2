<?php

class Categoria {
    public string $nome;
    public $icona;

    public function __construct($nome, $icona) {
        $this->nome = $nome;
        $this->icona = $icona;
    }

}

class Prodotto {
    public $titolo;
    public $prezzo;
    public $immagine;
    public $categoria;

    public function __construct($titolo, $prezzo, $immagine, $categoria) {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }

    public function getTipo() {
        if ($this->categoria->nome === "Cibo") {
            return "Cibo";
        } elseif ($this->categoria->nome === "Gioco") {
            return "Gioco";
        } else {
            return "Accessorio";
        }

    }
}

$categorie = [
    new Categoria("Cibo", "🐶"),
    new Categoria("Gioco", "🐱"),
    new Categoria("Casa per animali", "🦆"),
    new Categoria("pippo", "🦆"),
];


$prodotti = [
    new Prodotto("Cibo per cani", 10, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", $categorie[0]),
    new Prodotto("Gioco per gatti", 5, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", $categorie[1]),
    new Prodotto("Cuccia per cani", 20, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", $categorie[2]),
    new Prodotto("Acquario per pesci", 50, "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", $categorie[3]),
];

foreach ($prodotti as $prodotto) {
    echo "<div class='card'>";
    echo "<img src='{$prodotto->immagine}' width=200' alt='{$prodotto->titolo}'>";
    echo "<h3>{$prodotto->titolo}</h3>";
    echo "<p>{$prodotto->prezzo} €</p>";
    echo "<p class='icona'><i class='{$prodotto->categoria->icona}'></i></p>";
    echo "<p class='tipo'>{$prodotto->getTipo()}</p>";
    echo "</div>";
}