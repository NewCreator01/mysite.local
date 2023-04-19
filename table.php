<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>MySite.Local</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">MySite.Local</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link">Урок 1</a></li>
                <li class="nav-item"><a href="table_color.php" class="nav-link">Урок 2</a></li>
                <li class="nav-item"><a href="strrev.php" class="nav-link">Урок 3</a></li>
            </ul>
        </header>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
<?php

   $num = range(1,10);

   echo "<table class='table'>";
   foreach($num as $x){
        echo "<td style='border: solid black 1px'>";

        foreach($num as $y){
             echo "$x x $y = " . $x*$y . "<br/>";
        }
        echo "</td>";

        if($x == 5)  echo "</tr><tr>";
   }
   echo '</table>';
?>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer mt-auto py-3 bg-light text-center">
        <div class="container">
            <span class="text-muted">Fixed site footer</span>
        </div>
    </footer>
</div>
</body>
</html>