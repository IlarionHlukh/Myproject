<?php
$content= '<!doctype html>
<html lang="en">
<head><link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>PHP сайт</title>
</head>
<body><link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h3 class="my-0 mr-md-auto font-weight-normal"><strong>PHP</strong></h3>


    <nav class="my-2 my-md-0 mr-md-3">
    </nav>
    <a class="btn btn-outline-primary" size="10" style="width:10%;" maxlength="10"href="js/registr.html">Register</a>
    <a class="btn btn-outline-primary" size="10" style="width:10%;" maxlength="10"href="js/signin.html">Sign in</a><br>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 style="margin-bottom: 1px">Форма</h3>
        </div>
        <div class="main-signin__middle">
            <ul class="list-unstyled mt-1 mb-5">
                <form action="create.php" method="POST" class="form-group">
                    <br><label for="Name"><input type="text" name="Name" position="align="^[А-Яа-яЁё]+$"  placeholder="Имя"></br>
                    <br><label for="Age"><input type="text" name="Age" position="align="^[А-Яа-яЁё]+$" placeholder="Возраст"></br>
                        <br><label for="mark"><input type="text" name="mark" position="align="^[А-Яа-яЁё]+$" placeholder="Марка авто"></br>
                            <br><label for="email"><input type="text" size="18" style="width:100%;" maxlength="100" name="email" class="form-control" position="align="^[А-Яа-яЁё]+$" placeholder="email@example.com">
                                <br><input type="submit" class="btn btn-success"></br
                </form>
        </div>
<div style="width:500">
    <h4 style="margin-left: 350px">Таблиця товарів</h4>
';

$i = 0;
function getNumPP()
{
    global $i;
    return '#' . ++$i;
}

$input = [
    [
        'p/p' => GetNumPP(),
        'Name' => "Iphone 11",
        'Number' => 1,
        'Price' => 25000,
        'Seller' => "Rozetka"
    ],
    [
        'p/p' => GetNumPP(),
        'Name' => "Samsung S20+",
        'Number' => 2,
        'Price' => 24500,
        'Seller' => "Rozetka"
    ],
    [
        'p/p' => GetNumPP(),
        'Name' => "Xiaomi",
        'Number' => 1,
        'Price' => 15000,
        'Seller' => "Rozetka"
    ]];

$html.='<table>
<title>Таблиця</title>
                 <style>
                        table {
                            border: 2px solid darkorange;
                            width: 600px;
                            margin: center;
                            margin-left: 150px;
                            vertical-align: auto;
                        }
                        th {
                            border: 2px solid darkorange;
                            text-align: center;
                        }
                        td {
                            border: 1px solid darkorange;
                            text-align: center;
                        }
                    </style>';
$html .= '<thead>';
$html .= '<th>№ п/п</th>';
$html .= '<th>Назва товару</th>';
$html .= '<th>Кількість</th>';
$html .= '<th>Ціна, грн.</th>';
$html .= '<th>Продавець</th>';
$html .= '</thead>';
$html .= '<tbody>';

foreach ($input as $user) {
    $html .= "<tr><td>{$user['p/p']}</td><td>{$user['Name']}</td><td>{$user['Number']}</td><td>{$user['Price']}</td><td>{$user['Seller']}</td></tr>";
}

$html .= '</tbody>';
$html .= '</html>';


echo $content. $html;