<!-- the seaching id have to give by url, not by form -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        $booksJson = file_get_contents('books.json');
        $books = json_decode($booksJson, true);
    ?>

    <?php if(isset($_GET['id'])): ?>
        <?php
            $d = $_GET['id'];
            $c=0;
            foreach($books as $book){
                foreach($book as $k => $v){
                    if($k == 'id'){
                        if($d == $v){
                            $c=1;
                            $i = array_search($book, $books);
                            break;
                        }
                    }
                    
                }
            }

            if($c===1){
                foreach($books[$i] as $key => $val){
                    echo $key . " : " . $val;
                    echo '<br>';
                }
            }
            else{
                echo "Result:   " . "searched book is not available";
            }
            
        ?>
    <?php else: ?>
        <?php echo "Please pass searching book id by URL"; ?>

    <?php endif ?>

    <br>
    <br>
    <br>

    <a href="index.php"> Back to home page </a>

</body>

</html>