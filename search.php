<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $books = json_decode(file_get_contents('books.json'), true);
    $title = $_POST['title'];

    foreach ($books as $key => $book) {
        if ($book['title'] === $title) {
          echo 'yes found';

        }
    }
    exit;
}
?>