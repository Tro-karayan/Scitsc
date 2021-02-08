<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="squares.php" method="POST">
            <p>Please select the number of rows: <input type="text" name="x" value=""></p>
            <p>Please select the number of colums: <input type="text" name="y" value=""></p>
            <p>Input text for each cell: <input type="text" name="cell_input" value=""></p>
            <p>Text Color: <select name="color">
                            <option value="Black">Black</option>
                            <option value="red">Red</option>
                            <option value="blue">Blue</option>
                            </select><br></p>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>