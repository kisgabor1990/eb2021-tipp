<?php 

class Csoport {
    private $csapatok = [];
    private $meccs_eredmenyek = [];

    public function __construct(Valogatott $csapat1, Valogatott $csapat2, Valogatott $csapat3, Valogatott $csapat4)
    {
        $this->csapatok = [
            'csapat1' => $csapat1,
            'csapat2' => $csapat2,
            'csapat3' => $csapat3,
            'csapat4' => $csapat4,
        ];
    }

    public function CsoportMerkozes()
    {
        $this->meccs($this->csapatok["csapat1"], $this->csapatok["csapat2"]);
        $this->meccs($this->csapatok["csapat3"], $this->csapatok["csapat4"]);
        $this->meccs($this->csapatok["csapat1"], $this->csapatok["csapat3"]);
        $this->meccs($this->csapatok["csapat2"], $this->csapatok["csapat4"]);
        $this->meccs($this->csapatok["csapat4"], $this->csapatok["csapat1"]);
        $this->meccs($this->csapatok["csapat2"], $this->csapatok["csapat3"]);

        usort($this->csapatok, function($a, $b) {
            if ($a->getPontszam() == $b->getPontszam()) {
                if ($a->getGolkulonbseg() == $b->getGolkulonbseg()) {
                    return ($a->getSzerzett_golok() < $b->getSzerzett_golok()) ? 1 : -1;
                }
                return ($a->getGolkulonbseg() < $b->getGolkulonbseg()) ? 1 : -1;
            }
            return ($a->getPontszam() < $b->getPontszam()) ? 1 : -1;
        });
    }

    private function meccs(Valogatott $csapat1, Valogatott $csapat2) {
        $csapat1->merkozes();
        $csapat2->merkozes();
        $golok_max_szama = rand(0, 6);
        $csapat1_golok = 0;
        $csapat2_golok = 0;
        $csapatok_pont_kulonbseg = abs($csapat1->getRanglista_pontszam() - $csapat2->getRanglista_pontszam());

        for ($i = 1; $i <= $golok_max_szama; $i++) {
            $csapat1_tip = rand(1000, $csapat1->getRanglista_pontszam());
            $csapat2_tip = rand(1000, $csapat2->getRanglista_pontszam());
            $csapat1->getRanglista_pontszam() > $csapat2->getRanglista_pontszam() ? $csapat1_tip += $csapatok_pont_kulonbseg : $csapat2_tip += $csapatok_pont_kulonbseg;

            if ($csapat1_tip > $csapat2_tip) {
                $csapat1->goltSzerez();
                $csapat2->goltKap();
                $csapat1_golok++;
            } else {
                $csapat1->goltKap();
                $csapat2->goltSzerez();
                $csapat2_golok++;
            }

        }

        if ($csapat1_golok > $csapat2_golok) {
            $csapat1->nyer();
            $csapat2->veszit();
        } else if ($csapat2_golok > $csapat1_golok) {
            $csapat1->veszit();
            $csapat2->nyer();
        } else {
            $csapat1->dontetlen();
            $csapat2->dontetlen();
        }

        $this->meccs_eredmenyek[] = [
            'csapat1' => $csapat1->getOrszag(),
            'csapat1_golok' => $csapat1_golok,
            'csapat2' => $csapat2->getOrszag(),
            'csapat2_golok' => $csapat2_golok,
        ];
    }

    public function getElsoHelyezett()
    {
        return $this->csapatok[0];
    }

    public function getMasodikHelyezett()
    {
        return $this->csapatok[1];
    }

    public function getHarmadikHelyezett()
    {
        return $this->csapatok[2];
    }


    public function getCsapatok()
    {
        return $this->csapatok;
    }

    public function getEredmenyek()
    {
        return $this->meccs_eredmenyek;
    }


}