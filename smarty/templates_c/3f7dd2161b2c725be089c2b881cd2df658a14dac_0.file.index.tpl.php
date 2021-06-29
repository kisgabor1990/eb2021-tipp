<?php
/* Smarty version 3.1.39, created on 2021-06-29 15:19:53
  from 'C:\xampp\htdocs\rendesweb\02\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db1df9a60f12_95585770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f7dd2161b2c725be089c2b881cd2df658a14dac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rendesweb\\02\\smarty\\templates\\index.tpl',
      1 => 1624972792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db1df9a60f12_95585770 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Foci EB tippelő</title>
</head>

<body>

    <div class="container">

        <h1 class="text-center text-uppercase mb-5">EB - 2021</h1>

        <div class="accordion" id="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingCsoportmerkozesek">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#csoportmerkozesek" aria-expanded="true" aria-controls="csoportmerkozesek">
                        Csoportmérkőzések
                    </button>
                </h2>
                <div id="csoportmerkozesek" class="accordion-collapse collapse show"
                    aria-labelledby="headingCsoportmerkozesek" data-bs-parent="#accordion">
                    <div class="accordion-body px-0">
                        <div class="row row-cols-1 row-cols-lg-3">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['csoportok']->value, 'csoport', false, 'key');
$_smarty_tpl->tpl_vars['csoport']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['csoport']->value) {
$_smarty_tpl->tpl_vars['csoport']->do_else = false;
?>
                                <div class="col card-group mb-5">
                                    <div class="card">
                                        <div class="card-header text-center"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 Csoport</div>
                                        <div class="card-body">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['csoport']->value->getEredmenyek(), 'meccs');
$_smarty_tpl->tpl_vars['meccs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meccs']->value) {
$_smarty_tpl->tpl_vars['meccs']->do_else = false;
?>
                                                <div class="row">
                                                    <div class="col-5 text-end">
                                                        <?php echo $_smarty_tpl->tpl_vars['meccs']->value['csapat1'];?>

                                                    </div>
                                                    <div class="col-auto text-center px-0">
                                                        <?php echo $_smarty_tpl->tpl_vars['meccs']->value['csapat1_golok'];?>
 -
                                                        <?php echo $_smarty_tpl->tpl_vars['meccs']->value['csapat2_golok'];?>

                                                    </div>
                                                    <div class="col-5 text-start">
                                                        <?php echo $_smarty_tpl->tpl_vars['meccs']->value['csapat2'];?>

                                                    </div>
                                                </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingCsoportmerkozes_eredmenyek">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#csoportmerkozes_eredmenyek" aria-expanded="false"
                        aria-controls="csoportmerkozes_eredmenyek">
                        Csoportmérkőzések eredménylista
                    </button>
                </h2>
                <div id="csoportmerkozes_eredmenyek" class="accordion-collapse collapse"
                    aria-labelledby="headingCsoportmerkozes_eredmenyek" data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Helyezés</th>
                                        <th>Csapat</th>
                                        <th>Mérkőzések</th>
                                        <th>Győzelem</th>
                                        <th>Döntetlen</th>
                                        <th>Vereség</th>
                                        <th>Szerzett gólok</th>
                                        <th>Kapott gólok</th>
                                        <th>Gólkülönbség</th>
                                        <th>Pontszám</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['csoportok']->value, 'csoport', false, 'key');
$_smarty_tpl->tpl_vars['csoport']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['csoport']->value) {
$_smarty_tpl->tpl_vars['csoport']->do_else = false;
?>
                                        <tr>
                                            <td colspan="10" class="fw-bold">
                                                <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 Csoport
                                            </td>
                                        </tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['csoport']->value->getCsapatok(), 'csapat', false, 'key');
$_smarty_tpl->tpl_vars['csapat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['csapat']->value) {
$_smarty_tpl->tpl_vars['csapat']->do_else = false;
?>
                                            <tr>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
.
                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['csapat']->value->getOrszag();?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['csapat']->value->getMerkozesek();?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['csapat']->value->getGyozelem();?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['csapat']->value->getDontetlen();?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['csapat']->value->getVereseg();?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['csapat']->value->getSzerzett_golok();?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['csapat']->value->getKapott_golok();?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['csapat']->value->getGolkulonbseg();?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['csapat']->value->getPontszam();?>

                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Helyezés</th>
                                        <th>Csapat</th>
                                        <th>Mérkőzések</th>
                                        <th>Győzelem</th>
                                        <th>Döntetlen</th>
                                        <th>Vereség</th>
                                        <th>Szerzett gólok</th>
                                        <th>Kapott gólok</th>
                                        <th>Gólkülönbség</th>
                                        <th>Pontszám</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNyolcaddontok">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#nyolcaddontok" aria-expanded="false" aria-controls="nyolcaddontok">
                        Nyolcaddöntők
                    </button>
                </h2>
                <div id="nyolcaddontok" class="accordion-collapse collapse" aria-labelledby="headingNyolcaddontok"
                    data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <div class="row row-cols-1 row-cols-lg-2">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nyolcaddontok']->value, 'nyolcaddonto', false, 'key');
$_smarty_tpl->tpl_vars['nyolcaddonto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['nyolcaddonto']->value) {
$_smarty_tpl->tpl_vars['nyolcaddonto']->do_else = false;
?>
                                <div class="col card-group mb-5">
                                    <div class="card">
                                        <div class="card-header fw-bold text-center"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
. mérkőzés</div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div
                                                    class="col text-end fs-5 <?php if ($_smarty_tpl->tpl_vars['nyolcaddonto']->value->getCsapat1() == $_smarty_tpl->tpl_vars['nyolcaddonto']->value->getGyoztes()) {?> fw-bold <?php }?>">
                                                    <?php echo $_smarty_tpl->tpl_vars['nyolcaddonto']->value->getCsapat1()->getOrszag();?>

                                                </div>
                                                <div class="col text-center fs-3">
                                                    <?php echo $_smarty_tpl->tpl_vars['nyolcaddonto']->value->getCsapat1Golok();?>
 -
                                                    <?php echo $_smarty_tpl->tpl_vars['nyolcaddonto']->value->getCsapat2Golok();?>

                                                </div>
                                                <div
                                                    class="col text-start fs-5 <?php if ($_smarty_tpl->tpl_vars['nyolcaddonto']->value->getCsapat2() == $_smarty_tpl->tpl_vars['nyolcaddonto']->value->getGyoztes()) {?> fw-bold <?php }?>">
                                                    <?php echo $_smarty_tpl->tpl_vars['nyolcaddonto']->value->getCsapat2()->getOrszag();?>

                                                </div>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['nyolcaddonto']->value->getCsapat1Golok() == $_smarty_tpl->tpl_vars['nyolcaddonto']->value->getCsapat2Golok()) {?>
                                                <div class="row">
                                                    <div class="col text-center">
                                                        (<?php echo $_smarty_tpl->tpl_vars['nyolcaddonto']->value->getCsapat1_11es();?>
 -
                                                        <?php echo $_smarty_tpl->tpl_vars['nyolcaddonto']->value->getCsapat2_11es();?>
)
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNegyeddontok">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#negyeddontok" aria-expanded="false" aria-controls="negyeddontok">
                        Negyeddöntők
                    </button>
                </h2>
                <div id="negyeddontok" class="accordion-collapse collapse" aria-labelledby="headingNegyeddontok"
                    data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <div class="row row-cols-1 row-cols-lg-2">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['negyeddontok']->value, 'negyeddonto', false, 'key');
$_smarty_tpl->tpl_vars['negyeddonto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['negyeddonto']->value) {
$_smarty_tpl->tpl_vars['negyeddonto']->do_else = false;
?>
                                <div class="col card-group mb-5">
                                    <div class="card">
                                        <div class="card-header fw-bold text-center"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
. mérkőzés</div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div
                                                    class="col text-end fs-5 <?php if ($_smarty_tpl->tpl_vars['negyeddonto']->value->getCsapat1() == $_smarty_tpl->tpl_vars['negyeddonto']->value->getGyoztes()) {?> fw-bold <?php }?>">
                                                    <?php echo $_smarty_tpl->tpl_vars['negyeddonto']->value->getCsapat1()->getOrszag();?>

                                                </div>
                                                <div class="col text-center fs-3">
                                                    <?php echo $_smarty_tpl->tpl_vars['negyeddonto']->value->getCsapat1Golok();?>
 -
                                                    <?php echo $_smarty_tpl->tpl_vars['negyeddonto']->value->getCsapat2Golok();?>

                                                </div>
                                                <div
                                                    class="col text-start fs-5 <?php if ($_smarty_tpl->tpl_vars['negyeddonto']->value->getCsapat2() == $_smarty_tpl->tpl_vars['negyeddonto']->value->getGyoztes()) {?> fw-bold <?php }?>">
                                                    <?php echo $_smarty_tpl->tpl_vars['negyeddonto']->value->getCsapat2()->getOrszag();?>

                                                </div>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['negyeddonto']->value->getCsapat1Golok() == $_smarty_tpl->tpl_vars['negyeddonto']->value->getCsapat2Golok()) {?>
                                                <div class="row">
                                                    <div class="col text-center">
                                                        (<?php echo $_smarty_tpl->tpl_vars['negyeddonto']->value->getCsapat1_11es();?>
 -
                                                        <?php echo $_smarty_tpl->tpl_vars['negyeddonto']->value->getCsapat2_11es();?>
)
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingElodontok">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#elodontok" aria-expanded="false" aria-controls="elodontok">
                        Elődöntők
                    </button>
                </h2>
                <div id="elodontok" class="accordion-collapse collapse" aria-labelledby="headingElodontok"
                    data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <div class="row row-cols-1 row-cols-lg-2">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elodontok']->value, 'elodonto', false, 'key');
$_smarty_tpl->tpl_vars['elodonto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['elodonto']->value) {
$_smarty_tpl->tpl_vars['elodonto']->do_else = false;
?>
                                <div class="col card-group mb-5">
                                    <div class="card">
                                        <div class="card-header fw-bold text-center"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
. mérkőzés</div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div
                                                    class="col text-end fs-5 <?php if ($_smarty_tpl->tpl_vars['elodonto']->value->getCsapat1() == $_smarty_tpl->tpl_vars['elodonto']->value->getGyoztes()) {?> fw-bold <?php }?>">
                                                    <?php echo $_smarty_tpl->tpl_vars['elodonto']->value->getCsapat1()->getOrszag();?>

                                                </div>
                                                <div class="col text-center fs-3">
                                                    <?php echo $_smarty_tpl->tpl_vars['elodonto']->value->getCsapat1Golok();?>
 -
                                                    <?php echo $_smarty_tpl->tpl_vars['elodonto']->value->getCsapat2Golok();?>

                                                </div>
                                                <div
                                                    class="col text-start fs-5 <?php if ($_smarty_tpl->tpl_vars['elodonto']->value->getCsapat2() == $_smarty_tpl->tpl_vars['elodonto']->value->getGyoztes()) {?> fw-bold <?php }?>">
                                                    <?php echo $_smarty_tpl->tpl_vars['elodonto']->value->getCsapat2()->getOrszag();?>

                                                </div>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['elodonto']->value->getCsapat1Golok() == $_smarty_tpl->tpl_vars['elodonto']->value->getCsapat2Golok()) {?>
                                                <div class="row">
                                                    <div class="col text-center">
                                                        (<?php echo $_smarty_tpl->tpl_vars['elodonto']->value->getCsapat1_11es();?>
 -
                                                        <?php echo $_smarty_tpl->tpl_vars['elodonto']->value->getCsapat2_11es();?>
)
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingDonto">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#donto" aria-expanded="false" aria-controls="donto">
                        Döntő
                    </button>
                </h2>
                <div id="donto" class="accordion-collapse collapse" aria-labelledby="headingDonto"
                    data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col mb-5">
                                <div class="card">
                                    <div class="card-header fw-bold text-center">A NAGY mérkőzés</div>
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div
                                                class="col text-end fs-3 <?php if ($_smarty_tpl->tpl_vars['donto']->value->getCsapat1() == $_smarty_tpl->tpl_vars['donto']->value->getGyoztes()) {?> fw-bold <?php }?>">
                                                <?php echo $_smarty_tpl->tpl_vars['donto']->value->getCsapat1()->getOrszag();?>

                                            </div>
                                            <div class="col text-center fs-1">
                                                <?php echo $_smarty_tpl->tpl_vars['donto']->value->getCsapat1Golok();?>
 -
                                                <?php echo $_smarty_tpl->tpl_vars['donto']->value->getCsapat2Golok();?>

                                            </div>
                                            <div
                                                class="col text-start fs-3 <?php if ($_smarty_tpl->tpl_vars['donto']->value->getCsapat2() == $_smarty_tpl->tpl_vars['donto']->value->getGyoztes()) {?> fw-bold <?php }?>">
                                                <?php echo $_smarty_tpl->tpl_vars['donto']->value->getCsapat2()->getOrszag();?>

                                            </div>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['donto']->value->getCsapat1Golok() == $_smarty_tpl->tpl_vars['donto']->value->getCsapat2Golok()) {?>
                                            <div class="row">
                                                <div class="col text-center">
                                                    (<?php echo $_smarty_tpl->tpl_vars['donto']->value->getCsapat1_11es();?>
 -
                                                    <?php echo $_smarty_tpl->tpl_vars['donto']->value->getCsapat2_11es();?>
)
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-center">Az EB 2021 győztese:</h3>
                        <h1 class="text-center my-5"><?php echo $_smarty_tpl->tpl_vars['donto']->value->getGyoztes()->getOrszag();?>
</h1>
                    </div>
                </div>
            </div>
        </div>


        <p class="h3"></p>

        <p class="h3"></p>

    </div>


    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    <?php echo '</script'; ?>
>

</body>

</html><?php }
}
