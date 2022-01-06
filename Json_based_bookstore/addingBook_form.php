<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add book </title>

    <style>
        fieldset {
            background-color: #008080;
        }

        legend {
            background-color: gray;
            color: white;
            padding: 5px 10px;
            margin-left: auto;
            margin-right: auto;
        }

        label {
        display: inline-block;
        width: 150px;
        text-align: right;
      }

    </style>

</head>
<body>
    <form action="create.php" method="post" style="margin-left:303px;margin-right:303px" >
        <fieldset>
            <legend>Book details:</legend>
            <label>Book id:  </label>
            <input type="text" name="id" /> <br> <br>
            <label>Title:    </label>
            <input type="text" name="title"/> <br> <br>
            <label>Author:   </label>
            <input type="text" name="author" /> <br> <br>
            <label>Available:</label>
            <input type="text" name="available" /> <br> <br>
            <label>Pages:    </label>
            <input type="text" name="pages" /> <br> <br>
            <label>ISBN:    </label>
            <input type="text" name="isbn" /> <br> <br>
            </br> <br>
            <input type="submit" value="Add book" style="margin-left:333px;margin-right:333px;color:darkgreen" /> <br> <br>
        </fieldset>
    </form>
</body>
</html>