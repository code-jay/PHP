<?php
if(isset($_REQUEST)){
    print_r($_REQUEST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Contact Us </h1>
    <form method="post" action="">
        Name : <input type="text" name="username"><br/>
        Email : <input type="text", name="email"><br/>

        Qualification : <select multiple name="quali">
                        <option value="mca">MCA</option>
                        <option value="btech">BTech</option>
                        <option value="bca">BCA</option>
                        <option value="be">BE</option>
                        <option value="mtech">MTech</option>
                        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>