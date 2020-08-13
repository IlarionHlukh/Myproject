<?php

function pc_array_shuffle($array) {
    $i = count($array);

    while(--$i) {
        $j = mt_rand(0, $i);

        if ($i != $j) {
            $tmp = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $tmp;

        }
    }

    return $array;
}

{
    $suits = array('Піка', 'Трефа', 'Бубна', 'Чирва');
    $cards = array(6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A');

    $deck = pc_array_shuffle(range(1, 6));

    while (($draw = array_pop($deck)) != NULL) {
        print  "<div class='container'>" . $cards[$draw / 2] . ' ' . $suits[$draw % 2] . "</div>\n";
    }
};