<?php 
     // array associativo di categorie 
     $categories = [
        'cane' => new Category('Cane', 'fas fa-dog'),
        'gatto' => new Category('Gatto', 'fas fa-cat'),
        'uccello' => new Category('Uccello', 'fas fa-dove'),
        'pesce' => new Category('Pesce', 'fas fa-fish'),
    ];

    // array di prodotti
    $products = [
        new Food('Royal Canin Mini Adult', 43.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?', true, $categories['cane'], 550,['proteine', 'grassi', 'carboidrati']),

        new Food('Almo Nature Holistic Maintenance', 35.51, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', true, $categories['cane'], 1200,['tonno', 'riso', 'pollo']),

        new Food('Almo Nature Cat Daily Lattina', 1.29, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', true, $categories['gatto'], 400,['anatra', 'manzo']),

        new Food('Mangime per Pesci Guppy in Fiocchi', 3.41, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', true, $categories['pesce'], 30,['pesci']),

        new Accessory('Voliera Wilma in Legno', 346, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', true, $categories['uccello'], 'legno', 158),

        new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 12, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', true, $categories['pesce'], 'plastica', 250),

        new Accessory('Kong Classic', 8.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', true, $categories['cane'], 'plastica', 7.62),

        new Toy('Topini di peluche Trixie', 7.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', true, $categories['gatto'], 'gioco per gatti', 5),
    ]
?>