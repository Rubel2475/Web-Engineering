<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>

    <link rel="stylesheet" href="table_style.css">

</head>

<body>
    <?php 
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
    ?>

    <?php $rows_count = count($books); ?>

    <?php  if(isset($_POST['id']) || isset($_POST['title']) || isset($_POST['author']) || isset($_POST['available'])|| isset($_POST['pages'])|| isset($_POST['isbn'])): ?>
            <?php $books[$rows_count]['id'] = $_POST['id']; ?> 
            <?php $books[$rows_count]['title'] = $_POST['title']; ?> 
            <?php $books[$rows_count]['author'] = $_POST['author']; ?>    
            <?php $books[$rows_count]['available'] = $_POST['available']; ?>    
            <?php $books[$rows_count]['pages'] = $_POST['pages']; ?>    
            <?php $books[$rows_count]['isbn'] = $_POST['isbn']; ?>    
    <?php else: ?>
            <p> You are not adding book? </P>
    <?php endif; ?>

    <?php $newJsonString = json_encode($books);
    file_put_contents('books.json', $newJsonString); 
    ?>

    <table class="center">
        <tr>
            <th> Id </th>
            <th>Title </th>
            <th>Author </th>
            <th>Availablity </th>
            <th>Pages </th>
            <th>ISBN </th>
        </tr>
        <?php foreach($books as $book): ?>
        <tr>
            <td> <?php echo $book['id']; ?> </td>
            <td> <?php echo $book['title']; ?> </td>
            <td> <?php echo $book['author']; ?> </td>
            <td> <?php echo $book['available']; ?> </td>
            <td> <?php echo $book['pages']; ?> </td>
            <td> <?php echo $book['isbn']; ?> </td>
        </tr>
        <?php endforeach; ?>
    
    </table>

    <br>
    <br>
    <br>

    <a href="index.php"> Back to home page </a>

</body>

</html>