<?php

$books = [
    ['title' => 'Le comte de Monte Cristo', 'author' => "Dumas", 'score' => '99'],
    ['title' => 'Les misérables', 'author' => "Hugo", 'score' => '72'],
    ['title' => 'Don Quichotte', 'author' => "Cervantes", 'score' => '81'],
    ['title' => 'Dune', 'author' => "Herbert", 'score' => '91'],
    ['title' => 'Et aprés', 'author' => "Musso", 'score' => '4'],
    ['title' => '1Q84', 'author' => "Murakami", 'score' => '88'],
    ['title' => 'Les 3 mousquetaires', 'author' => "Dumas", 'score' => '92'],
];

$i = 0;
while ($i < count($books)) {
    echo "Titre : " . $books[$i]['title'] . ' / Auteur : ' .  $books[$i]['author'];
    echo PHP_EOL;
    $i++;
}

/*
echo 'Avec For ' . PHP_EOL;
for($i = 0; $i < count($books); $i++) {
    echo "Titre : " . $books[$i]['title'] . ' / Auteur : ' .  $books[$i]['author'];
    echo PHP_EOL;
}
*/

usort($books, function ($book1, $book2) {
    if($book1['author'] === $book2['author'])
        return $book1['score'] > $book2['score'] ? -1 : 1;

    return $book1['author'] <=> $book2['author'];
});


echo PHP_EOL;
echo 'Avec Foreach ' . PHP_EOL;

foreach($books as $book) {
    echo "Titre : " . $book['title']  . ' / Auteur : ' . $book['author'] ;
    echo PHP_EOL;
}