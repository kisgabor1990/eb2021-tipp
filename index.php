<?php

require 'includes/common.php';

$smarty = new Smarty();

$smarty->setTemplateDir('./smarty/templates/');
$smarty->setCompileDir('./smarty/templates_c/');
$smarty->setConfigDir('./smarty/configs/');
$smarty->setCacheDir('./smarty/cache/');


$resztvevok = [
    "torok" => new Valogatott("A1", "Törökország", 1505),
    "olasz" => new Valogatott("A2", "Olaszország", 1642),
    "wales" => new Valogatott("A3", "Wales", 1570),
    "svajc" => new Valogatott("A4", "Svájc", 1606),
    "dania" => new Valogatott("B1", "Dánia", 1632),
    "finn" => new Valogatott("B2", "Finnország", 1411),
    "belga" => new Valogatott("B3", "Belgium", 1783),
    "orosz" => new Valogatott("B4", "Oroszország", 1463),
    "holland" => new Valogatott("C1", "Hollandia", 1598),
    "ukrajna" => new Valogatott("C2", "Ukrajna", 1515),
    "ausztria" => new Valogatott("C3", "Ausztria", 1523),
    "eszak_macedonia" => new Valogatott("C4", "Észak-Macedónia", 1375),
    "anglia" => new Valogatott("D1", "Anglia", 1687),
    "horvat" => new Valogatott("D2", "Horvátország", 1606),
    "skocia" => new Valogatott("D3", "Skócia", 1441),
    "cseh" => new Valogatott("D4", "Csehország", 1459),
    "spanyol" => new Valogatott("E1", "Spanyolország", 1648),
    "sved" => new Valogatott("E2", "Svédország", 1570),
    "lengyel" => new Valogatott("E3", "Lengyelország", 1550),
    "szlovak" => new Valogatott("E4", "Szlovákia", 1475),
    "magyar" => new Valogatott("F1", "Magyarország", 1469),
    "portugal" => new Valogatott("F2", "Portugália", 1666),
    "francia" => new Valogatott("F3", "Franciaország", 1757),
    "nemet" => new Valogatott("F4", "Németország", 1609),
];

$csoportok = [
    "A" => new Csoport($resztvevok['torok'], $resztvevok['olasz'], $resztvevok['wales'], $resztvevok['svajc']),
    "B" => new Csoport($resztvevok['dania'], $resztvevok['finn'], $resztvevok['belga'], $resztvevok['orosz']),
    "C" => new Csoport($resztvevok['holland'], $resztvevok['ukrajna'], $resztvevok['ausztria'], $resztvevok['eszak_macedonia']),
    "D" => new Csoport($resztvevok['anglia'], $resztvevok['horvat'], $resztvevok['skocia'], $resztvevok['cseh']),
    "E" => new Csoport($resztvevok['spanyol'], $resztvevok['sved'], $resztvevok['lengyel'], $resztvevok['szlovak']),
    "F" => new Csoport($resztvevok['magyar'], $resztvevok['portugal'], $resztvevok['francia'], $resztvevok['nemet']),
];

// Lejátszuk a csoportmérkőzéseket,
// majd kigyűjtjük az első, második, és harmadik helyezetteket
$tovabbjutok = [];
$harmadikok = [];
foreach ($csoportok as $key => $csoport) {
    $csoport->CsoportMerkozes();
    $tovabbjutok += [
        $key => [
            'elso' => $csoport->getElsoHelyezett(),
            'masodik' => $csoport->getMasodikHelyezett(),
        ],
    ];
    $harmadikok[] = $csoport->getHarmadikHelyezett();
}

// Sorba rendezzük a 3. helyezetteket, mert csak a 4 legjobb jut tovább
usort($harmadikok, function($a, $b) {
    if ($a->getPontszam() == $b->getPontszam()) {
        if ($a->getGolkulonbseg() == $b->getGolkulonbseg()) {
            return ($a->getSzerzett_golok() < $b->getSzerzett_golok()) ? 1 : -1;
        }
        return ($a->getGolkulonbseg() < $b->getGolkulonbseg()) ? 1 : -1;
    }
    return ($a->getPontszam() < $b->getPontszam()) ? 1 : -1;
});

// Lejátszuk a nyolcaddöntőket
$nyolcaddontok = [
    new Nyolcaddonto($tovabbjutok['B']['elso'],$harmadikok[0]),
    new Nyolcaddonto($tovabbjutok['A']['elso'],$tovabbjutok['C']['masodik']),
    new Nyolcaddonto($tovabbjutok['F']['elso'],$harmadikok[1]),
    new Nyolcaddonto($tovabbjutok['D']['masodik'],$tovabbjutok['E']['masodik']),
    new Nyolcaddonto($tovabbjutok['E']['elso'],$harmadikok[2]),
    new Nyolcaddonto($tovabbjutok['D']['elso'],$tovabbjutok['F']['masodik']),
    new Nyolcaddonto($tovabbjutok['C']['elso'],$harmadikok[3]),
    new Nyolcaddonto($tovabbjutok['A']['masodik'],$tovabbjutok['B']['masodik']),
];

// Lejátszuk a negyeddöntőket
$negyeddontok = [];
for ($i = 0; $i < 8; $i += 2) {
    $negyeddontok[] = new Negyeddonto($nyolcaddontok[$i]->getGyoztes(), $nyolcaddontok[$i + 1]->getGyoztes());
}

// Lejátszuk az elődöntőket
$elodontok = [];
for ($i = 0; $i < 4; $i += 2) {
    $elodontok[] = new Elodonto($negyeddontok[$i]->getGyoztes(), $negyeddontok[$i + 1]->getGyoztes());
}

// Lejátszuk a döntőt
$donto = new Donto($elodontok[0]->getGyoztes(), $elodontok[1]->getGyoztes());

$smarty->assign('csoportok', $csoportok);
$smarty->assign('nyolcaddontok', $nyolcaddontok);
$smarty->assign('negyeddontok', $negyeddontok);
$smarty->assign('elodontok', $elodontok);
$smarty->assign('donto', $donto);
$smarty->display('index.tpl');
