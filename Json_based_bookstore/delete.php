<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books after deleted</title>

    <link rel="stylesheet" href="table_style.css">

</head>

<body>
    <?php 
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
    ?>

        <?php if(isset($_POST['id'])): ?>       
            <?php
                $d = $_POST['id']; 
                $c = 0;
                foreach($books as $book){
                    foreach($book as $k => $v){
                        if($k == 'id'){
                            if($d == $v){
                                $c = 1;
                                $i = array_search($book, $books);
                                break;
                                //$c++;
                            }
                        }
                    }
                }
                if($c===1){
                    //unset($books[$i]);
                    array_splice($books, $i, 1);
                }
                else{
                    echo "Result:   " . "Please enter book id correctly";
                }
            ?>
            
        <?php endif; ?>
    
    <?php $newJsonString = json_encode($books);
    file_put_contents('books.json', $newJsonString); 
    ?>

    <table class="center">
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

    <br> <br>

    <form action="index.php">
        <input type="submit" value="Delete any more?">
    </form>

</body>

</html>