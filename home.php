<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>
<body style="background-color: rgb(14, 11, 139);">
    
    <h1 style="text-align: center; background-color:red;">Home</h1>
    <div style="background-color: rgb(14, 11, 139); display: flex; flex-direction: column; align-items: center;">
        <br>
    
<table class="table table-success table-striped">
<thead>
    <tr >
      <th scope="col"># </th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
			<th scope="col">available</th>
            <th scope="col">Pages</th>
			<th scope="col">isbn</th>
            
     </tr>
 </thead>
        <?php
        $i=1;
        $books = json_decode(file_get_contents('books.json'), true);
        foreach ($books as $book) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $book['title'] . "</td>";
            echo "<td>" . $book['author'] . "</td>";
			echo "<td>" . $book['available'] . "</td>";
            echo "<td>" ."$" . $book['pages'] . "</td>";
            echo "<td>" . $book['isbn'] . "</td>";
            echo "</tr>";
            $i++;
        }
        ?>
    </table>
    </div>
</body>
</html>
