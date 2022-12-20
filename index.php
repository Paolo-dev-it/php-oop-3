<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/classi/cd.php';
include_once __DIR__ . '/classi/dvd.php';
include_once __DIR__ . '/traits/worker.php';


$generi = [
    'giallo' => new Generi('giallo', '<i class="fa-solid fa-book"></i>'),
    'horror' => new Generi('horror', '<i class="fa-solid fa-book"></i>'),
    'drama' => new Generi('drama', '<i class="fa-solid fa-book"></i>'),
    'azione' => new Generi('azione', '<i class="fa-solid fa-compact-disc"></i>'),
    'fantasy' => new Generi('fantasy', '<i class="fa-solid fa-compact-disc"></i>'),
];

var_dump($generi);

$prodotti = [
    new Libro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile'),
    new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
    new Cd('Singin In The Rain', 'Gene Kelly', 13.70, $generi['drama'], true, 'https://immagine-copertina.com', 80, 2001, 'https://spotify-libri.com'),
    new Dvd('007', 'James Bond', 39.90, $generi['azione'], true, 'https://immagine-copertina.com', 100, 'https://spotify-libri.com'),
];

var_dump($prodotti);



foreach ($prodotti as $elem) {
    echo '<strong>';
    echo 'Tipo: ';
    echo get_class($elem);
    echo '</strong>';
    echo '<br>';
    echo 'Titolo: ';
    echo $elem->nome;
    echo '<br>';
    echo 'Autore: ';
    echo $elem->autore;
    echo '<br>';
    echo 'Prezzo: ';
    echo $elem->prezzo;
    echo ' €';
    echo '<br>';
    if (get_class($elem) == 'libro') {
        echo 'Copertina: ';
        echo $elem->copertina;
        echo '<br>';
        echo 'Numero pagine: ';
        echo $elem->pagine;
        echo '<br>';
    };
    if (get_class($elem) == 'audioLibro') {
        echo 'Durata: ';
        echo $elem->durata;
        echo '<br>';
        echo 'Piattaforma: ';
        echo $elem->piattaforma;
        echo '<br>';
    };
    if (get_class($elem) == 'Cd') {
        echo 'Durata: ';
        echo $elem->durata;
        echo '<br>';
        echo 'Anno: ';
        echo $elem->anno;
        echo '<br>';
    };
    if (get_class($elem) == 'Dvd') {
        echo 'Durata: ';
        echo $elem->time;
        echo ' min.';
        echo '<br>';
    };
    echo '<br>';
}







foreach ($prodotti as $elem) {
    echo get_class($elem);
    echo "<br>";
}
