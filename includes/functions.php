<?php

function fwriteDontok($textfile , $donto_neve, $dontok)
{
    fwrite($textfile, utf8_decode("\n" . $donto_neve . ":\n"));
    fwrite($textfile, "==============\n\n");
    foreach ($dontok as $key => $donto) {
        fprintf(
            $textfile,
            "%15s %d - %d %-15s ==> %s\n",
            utf8_decode($donto->getCsapat1()->getOrszag()),
            $donto->getCsapat1Golok(),
            $donto->getCsapat2Golok(),
            utf8_decode($donto->getCsapat2()->getOrszag()),
            utf8_decode($donto->getGyoztes()->getOrszag())
        );
        if ($donto->getCsapat1Golok() == $donto->getCsapat2Golok()) {
            fprintf($textfile, "%17s - %s\n", "(" . $donto->getCsapat1_11es(), $donto->getCsapat2_11es() . ")");
        }
    }
    fwrite($textfile, "--------------------------------------------------------------------------------------------------------------------------------------------\n");
}
