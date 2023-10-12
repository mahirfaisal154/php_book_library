
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $books = json_decode(file_get_contents('books.json'), true);
    $newBook = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
		'pages' => $_POST['pages'],
		'availability' => $_POST['availability'],
		'isbn'=>$_POST['isbn']
        
    ];
    $books[] = $newBook;
    file_put_contents('books.json', json_encode($books, JSON_PRETTY_PRINT));
    header('Location: home.php');
    exit;
}
?>
