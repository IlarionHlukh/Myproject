<!doctype html>
<html lang="en">
<head><link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>PHP сайт</title>
</head>
<body class="text-center">
    <body><link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h3 class="center"><strong>Random</strong></h3>
</div>
    <div class="container">
            <div class="card mb-5 shadow-sm">
                <div class="col-md-4">
                </div>
                <div class="main-signin__middle">
                    <ul class="list-unstyled mt-1 mb-5">
                        <form action="" method="POST" class="form-group">
                            <br><label for="email"><input type="number" size="18" style="width:100%;" maxlength="100" name="user_number" class="form-control" position="align="^[А-Яа-яЁё]+$" placeholder="Введите число">
                                <br><input type="submit" class="btn btn-success"></br

<div class="container">
        <div class="card mt-3 mb-5 shadow-sm">
            <?php
                $abc = range(1, 100);
                $number= $_POST['user_number'];

                $first = getRandomElement($abc);
                $rndNumber = $first;
                $counter = 1;

                while ($number != $rndNumber) {
                $first = getRandomElement($abc);
                $rndNumber = $first;
                $counter++;
                }
                do {
                    $first = getRandomElement($abc);
                    $rndNumber = $first;
                    $counter++;
                } while ($number != $rndNumber);

                echo "Ваше число: $rndNumber
                <br>Количество попыток: $counter<br>";

                function getRandomElement(array $abc): int
                {
                    $len = count($abc);
                    $index = rand(0, $len - 1);
                    return $abc[$index];
                }



