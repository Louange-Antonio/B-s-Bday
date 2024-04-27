<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form">
        <form action="function.php" method="POST">
            <div class="container">
                <h1>BIRTHDAY MESSAGE</h1> 

                <!-- <label for="">Name</label> -->
                <input type="text" name="name" placeholder="Enter Name"><br>

                <!-- <label for="">Well Wishes</label> -->
                <textarea name="well" placeholder="Well Wishes"></textarea><br>

                <div class="pic">
                    <label for="">Favourite Memory Together</label>
                    <input type="file" name="pic" placeholder="Pic Together">
                </div>
                <button type="submit" class="registerbtn" name="submit">Submit</button>
                <!-- <a href="viewing.php">view</a> -->
            </div>
        </form>
    </div>
</body>
</html>