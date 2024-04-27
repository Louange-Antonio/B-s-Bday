<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title>Happy Birthday</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css" integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- icons remix icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/> <!-- icons fontawesome icon -->
  </head>
  <body>
    <!-- header section starts -->
    <header class="hero" id="home">
      <div class="hero-text">
      <h1>HAPPY BIRTHDAY</h1>
      </div>
    </header>
    <!-- header section ends -->

    <!-- nav section starts -->
    <section class="nav"> <!--- BACKGROUND IMAGE --->
    <a href="#" class="logo">BML</a>
    <!-- Links -->
    <nav class="navbar">
      <a href="#home">HOME</a>
      <a href="#card">CARD</a>
      <a href="#about">MESSAGES</a>
    </nav>

    </section>

    <section class="gatuex" id="card">
      <div class="card">
        <div class="outside">

          <div class="front">
            <p>HAPPY BIRTHDAY</p>
            <h1>BENEL LUPAYA</h1>
            

            <div class="cake">
              <div class="top-layer"></div>
              <div class="middle-layer"></div>
              <div class="bottom-layer"></div>
              <div class="candle"></div>
            </div>

          </div>

          <div class="back"></div>
        </div>
        <div class="inside">
          <p>Wishing you a very happy birthday filled with love and laughter. <br>
            May the Lord keep blessing you
          </p>
          <h1>&#127873;</h1>
        </div>
      </div>
    </section>

    <!-- messages -->

    <section class="message">
              <?php
              $dbsevername = "localhost";
              $dbusername = "root";
              $dbpassword = "";
              $dbname = "db_birthday";

              $conn = mysqli_connect($dbsevername, $dbusername, $dbpassword, $dbname);

              if(!$conn)
              {
                  die("Connection failed: " . mysqli_connect_error());
              }

              $sql = "SELECT * FROM `tbl_birthday`";
              $result = mysqli_query($conn, $sql);
              
              if (mysqli_num_rows($result) > 0) 
              {
                // echo "<h1>MESSAGES/WELL WISHES</h1>";
                echo "<div class= 'content'>";
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                    // <!-- <section class="container"> -->
                   echo "<div class='cards'>";
                   echo "<div class='image'>";
                   echo "<img src='image/" .$row['birth_pic'] ."' class='card-img'>";
                   echo "</div>";

                    echo "<h2 class='names'>";
                    echo $row["birth_name"]. "<br>". "<br>"; 
                    echo "</h2>";

                    echo "<p class='desc'>";
                    echo $row["birth_mess"]. "<br>"; 
                    echo "</p>";
                    echo "</div>";

                    
                  }
                  
                  echo "</div>";
              } 
              else 
              {
              echo "0 results";
              }
                  mysqli_close($conn);
              {
              }
          ?>

  </section>


    <footer>
      <h2>CREATED BY LOUANGE ANTONIO</h2>
    </footer>

  </body>
</html>