<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>

    <link rel="stylesheet" href="table_style.css">

    <style>
        .form_style{
            margin-left: 399px;
            margin-right: 399px;
        }
        legend {
            background-color: darkblue;
            color: white;
            padding: 5px 10px;
            margin-left: auto;
            margin-right: auto;
        }

    </style>

</head>

<body style="background-color:cornsilk">
    <?php 
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
    ?>

    <table class="center" >
        <caption style="font-style: ctype_alpha;"><b> <i> List of books </i> </b></caption>
        <tr>
            <th> id </th>
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

    <b style="margin-left:400px;font-size:25px;"> Do you want to add book? </b> 
    <a href="addingBook_form.php" style="margin-left:3px;font-size:24px;color:magenta"> Add book </a>
    <br> <br> <br>

    <form action="delete.php" method="post" class="form_style">
        <fieldset>
            <legend>Delete book</legend>
            <label>Enter Book id: </label>
            <input type="text" name="id">
            <input type="submit" value="Delete" style="color: white;background-color:red">
        </fieldset>
    </form>

    <br> <br> <br>

    <form action="search.php" method="post"  class="form_style">
        <fieldset>
            <legend>Search a specific book</legend>
            <label>Pass searching book id by URL</label>
            <input type="submit" value="Search" style="color: white;background-color:green">
        </fieldset>
    </form>

       
</body>

</html>