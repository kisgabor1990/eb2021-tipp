<?php 

class Donto {
    private $csapat1, $csapat2, $gyoztes;
    private $csapat1_golok = 0, $csapat2_golok = 0;
    private $csapat1_11es = 0, $csapat2_11es = 0;

    public function __construct(Valogatott $csapat1, Valogatott $csapat2)
    {
        $this->csapat1 = $csapat1;
        $this->csapat2 = $csapat2;

        $this->meccs();
    }

    private function meccs() {
        $golok_max_szama = rand(0, 6);

        $this->golSzerzes($golok_max_szama);
        

        if ($this->csapat1_golok > $this->csapat2_golok) {
            $this->gyoztes = $this->csapat1;
        } else if ($this->csapat2_golok > $this->csapat1_golok) {
            $this->gyoztes = $this->csapat2;
        } else {
            // Hosszabbítás
            $hosszabbitas_golok_max_szama = rand(0, 3);
            $this->golSzerzes($hosszabbitas_golok_max_szama);
            if ($this->csapat1_golok > $this->csapat2_golok) {
                $this->gyoztes = $this->csapat1;
            } else if ($this->csapat2_golok > $this->csapat1_golok) {
                $this->gyoztes = $this->csapat2;
            } else {
                // Gólpárbaj (11-es)

                for ($i = 0; $i < 5; $i++) {
                    if (rand(0, 1)) {
                        $this->csapat1_11es++;
                    }
                    if (rand(0, 1)) {
                        $this->csapat2_11es++;
                    }
                }

                if ($this->csapat1_11es > $this->csapat2_11es) {
                    $this->gyoztes = $this->csapat1;
                } else if ($this->csapat2_11es > $this->csapat1_11es) {
                    $this->gyoztes = $this->csapat2;
                } else {
                    while ($this->csapat1_11es == $this->csapat2_11es) {
                        if (rand(0, 1)) {
                            $this->csapat1_11es++;
                        }
                        if (rand(0, 1)) {
                            $this->csapat2_11es++;
                        }
                    }
                    $this->csapat1_11es > $this->csapat2_11es ? 
                        $this->gyoztes = $this->csapat1 : $this->gyoztes = $this->csapat2;
                }

            }
        }
    }

    private function golSzerzes(int $golok_szama) {
        $csapatok_pont_kulonbseg = abs($this->csapat1->getRanglista_pontszam() - $this->csapat2->getRanglista_pontszam());
        for ($i = 1; $i <= $golok_szama; $i++) {
            $csapat1_tip = rand(1000, $this->csapat1->getRanglista_pontszam());
            $csapat2_tip = rand(1000, $this->csapat2->getRanglista_pontszam());
            $this->csapat1->getRanglista_pontszam() > $this->csapat2->getRanglista_pontszam() ? $csapat1_tip += $csapatok_pont_kulonbseg : $csapat2_tip += $csapatok_pont_kulonbseg;

            if ($csapat1_tip > $csapat2_tip) {
                $this->csapat1_golok++;
            } else {
                $this->csapat2_golok++;
            }

        }
    }

    public function getCsapat1()
    {
        return $this->csapat1;
    }
    public function getCsapat2()
    {
            return $this->csapat2;
    }
    public function getCsapat1Golok()
    {
        return $this->csapat1_golok;
    }
    public function getCsapat2Golok()
    {
        return $this->csapat2_golok;
    }
    public function getCsapat1_11es()
    {
        return $this->csapat1_11es;
    }
    public function getCsapat2_11es()
    {
        return $this->csapat2_11es;
    }
    public function getGyoztes()
    {
        return $this->gyoztes;
    }
}