<!doctype html>
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

        <h1 class="text-center text-uppercase my-5">EB - 2021</h1>

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
                            {foreach $csoportok as $key => $csoport}
                                <div class="col card-group mb-5">
                                    <div class="card">
                                        <div class="card-header text-center">{$key} Csoport</div>
                                        <div class="card-body">
                                            {foreach $csoport->getEredmenyek() as $meccs}
                                                <div class="row">
                                                    <div class="col-5 text-end">
                                                        {$meccs.csapat1}
                                                    </div>
                                                    <div class="col-auto text-center px-0">
                                                        {$meccs.csapat1_golok} -
                                                        {$meccs.csapat2_golok}
                                                    </div>
                                                    <div class="col-5 text-start">
                                                        {$meccs.csapat2}
                                                    </div>
                                                </div>
                                            {/foreach}
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
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
                                    {foreach $csoportok as $key => $csoport}
                                        <tr>
                                            <td colspan="10" class="fw-bold">
                                                {$key} Csoport
                                            </td>
                                        </tr>
                                        {foreach $csoport->getCsapatok() as $key => $csapat}
                                            <tr>
                                                <td>
                                                    {$key + 1}.
                                                </td>
                                                <td>
                                                    {$csapat->getOrszag()}
                                                </td>
                                                <td class="text-center">
                                                    {$csapat->getMerkozesek()}
                                                </td>
                                                <td class="text-center">
                                                    {$csapat->getGyozelem()}
                                                </td>
                                                <td class="text-center">
                                                    {$csapat->getDontetlen()}
                                                </td>
                                                <td class="text-center">
                                                    {$csapat->getVereseg()}
                                                </td>
                                                <td class="text-center">
                                                    {$csapat->getSzerzett_golok()}
                                                </td>
                                                <td class="text-center">
                                                    {$csapat->getKapott_golok()}
                                                </td>
                                                <td class="text-center">
                                                    {$csapat->getGolkulonbseg()}
                                                </td>
                                                <td class="text-center">
                                                    {$csapat->getPontszam()}
                                                </td>
                                            </tr>
                                        {/foreach}
                                    {/foreach}
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
                            {foreach $nyolcaddontok as $key => $nyolcaddonto}
                                <div class="col card-group mb-5">
                                    <div class="card">
                                        <div class="card-header fw-bold text-center">{$key + 1}. mérkőzés</div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div
                                                    class="col-12 col-lg-4 text-center text-lg-end fs-5 {if $nyolcaddonto->getCsapat1() == $nyolcaddonto->getGyoztes()} fw-bold {/if}">
                                                    {$nyolcaddonto->getCsapat1()->getOrszag()}
                                                </div>
                                                <div class="col-12 col-lg-4 my-3 my-lg-0 text-center fs-3">
                                                    {$nyolcaddonto->getCsapat1Golok()} -
                                                    {$nyolcaddonto->getCsapat2Golok()}
                                                    {if $nyolcaddonto->getCsapat1Golok() == $nyolcaddonto->getCsapat2Golok()}
                                                        <div class="row">
                                                            <div class="col text-center fs-6">
                                                                ({$nyolcaddonto->getCsapat1_11es()} -
                                                                {$nyolcaddonto->getCsapat2_11es()})
                                                            </div>
                                                        </div>
                                                    {/if}
                                                </div>
                                                <div
                                                    class="col-12 col-lg-4 text-center text-lg-start fs-5 {if $nyolcaddonto->getCsapat2() == $nyolcaddonto->getGyoztes()} fw-bold {/if}">
                                                    {$nyolcaddonto->getCsapat2()->getOrszag()}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
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
                            {foreach $negyeddontok as $key => $negyeddonto}
                                <div class="col card-group mb-5">
                                    <div class="card">
                                        <div class="card-header fw-bold text-center">{$key + 1}. mérkőzés</div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-4 text-center text-lg-end fs-5 {if $negyeddonto->getCsapat1() == $negyeddonto->getGyoztes()} fw-bold {/if}">
                                                    {$negyeddonto->getCsapat1()->getOrszag()}
                                                </div>
                                                <div class="col-12 col-lg-4 my-3 my-lg-0 text-center fs-3">
                                                    {$negyeddonto->getCsapat1Golok()} -
                                                    {$negyeddonto->getCsapat2Golok()}
                                                    {if $negyeddonto->getCsapat1Golok() == $negyeddonto->getCsapat2Golok()}
                                                        <div class="row">
                                                            <div class="col text-center fs-6">
                                                                ({$negyeddonto->getCsapat1_11es()} -
                                                                {$negyeddonto->getCsapat2_11es()})
                                                            </div>
                                                        </div>
                                                    {/if}
                                                </div>
                                                <div
                                                    class="col-12 col-lg-4 text-center text-lg-start fs-5 {if $negyeddonto->getCsapat2() == $negyeddonto->getGyoztes()} fw-bold {/if}">
                                                    {$negyeddonto->getCsapat2()->getOrszag()}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
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
                            {foreach $elodontok as $key => $elodonto}
                                <div class="col card-group mb-5">
                                    <div class="card">
                                        <div class="card-header fw-bold text-center">{$key + 1}. mérkőzés</div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div
                                                    class="col-12 col-lg-4 text-center text-lg-end fs-5 {if $elodonto->getCsapat1() == $elodonto->getGyoztes()} fw-bold {/if}">
                                                    {$elodonto->getCsapat1()->getOrszag()}
                                                </div>
                                                <div class="col-12 col-lg-4 my-3 my-lg-0 text-center fs-3">
                                                    {$elodonto->getCsapat1Golok()} -
                                                    {$elodonto->getCsapat2Golok()}
                                                    {if $elodonto->getCsapat1Golok() == $elodonto->getCsapat2Golok()}
                                                        <div class="row">
                                                            <div class="col text-center fs-6">
                                                                ({$elodonto->getCsapat1_11es()} -
                                                                {$elodonto->getCsapat2_11es()})
                                                            </div>
                                                        </div>
                                                    {/if}
                                                </div>
                                                <div
                                                    class="col-12 col-lg-4 text-center text-lg-start fs-5 {if $elodonto->getCsapat2() == $elodonto->getGyoztes()} fw-bold {/if}">
                                                    {$elodonto->getCsapat2()->getOrszag()}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
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
                                                class="col-12 col-lg-4 text-center text-lg-end fs-3 {if $donto->getCsapat1() == $donto->getGyoztes()} fw-bold {/if}">
                                                {$donto->getCsapat1()->getOrszag()}
                                            </div>
                                            <div class="col-12 col-lg-4 my-3 my-lg-0 text-center fs-1">
                                                {$donto->getCsapat1Golok()} -
                                                {$donto->getCsapat2Golok()}
                                                {if $donto->getCsapat1Golok() == $donto->getCsapat2Golok()}
                                                    <div class="row">
                                                        <div class="col text-center fs-6">
                                                            ({$donto->getCsapat1_11es()} -
                                                            {$donto->getCsapat2_11es()})
                                                        </div>
                                                    </div>
                                                {/if}
                                            </div>
                                            <div
                                                class="col-12 col-lg-4 text-center text-lg-start fs-3 {if $donto->getCsapat2() == $donto->getGyoztes()} fw-bold {/if}">
                                                {$donto->getCsapat2()->getOrszag()}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-center">Az EB 2021 győztese:</h3>
                        <h1 class="text-center my-5 fw-bold text-uppercase">{$donto->getGyoztes()->getOrszag()}</h1>
                    </div>
                </div>
            </div>
        </div>


        <p class="h3"></p>

        <p class="h3"></p>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>