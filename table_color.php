<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <li class="nav-item"><a href="table.php" class="nav-link">Урок 1</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Урок 2</a></li>
            </ul>
        </header>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <?php
                    $num = range(1, 10);

                    $table = "<table class='table table-bordered border-3 border-dark'>%s</table>";

                    $tableBody = '<tr>';

                    foreach ($num as $x) {
                        $tableBody .= "<td>";

                        foreach ($num as $y) {
                            $tableBody .= "$x x $y = " . $x * $y . "<br/>";
                        }

                        $tableBody .= "</td>";

                        if ($x === 5) {
                            $tableBody .= "</tr><tr>";
                        }
                    }

                    $searchable = ['1', '2', '3', '4'];

                    $replacements = [
                        '<span style="color: red;">1</span>',
                        '<span style="color: green;">2</span>',
                        '<span style="color: yellow;">3</span>',
                        '<span style="color: blue;">4</span>',
                    ];

                    $tableBody = str_replace($searchable, $replacements, $tableBody);

                    $table = sprintf($table, $tableBody);

                    echo $table;
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