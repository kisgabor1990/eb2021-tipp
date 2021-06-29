<?php

class Valogatott {
    private $pozicio, $orszag, $ranglista_pontszam;
    private $szerzett_golok = 0, $kapott_golok = 0;
    private $merkozesek = 0, $gyozelem = 0, $vereseg = 0, $dontetlen = 0;
    private $pontszam = 0;

    public function __construct(string $pozicio, string $orszag, int $ranglista_pontszam)
    {
        $this->pozicio = $pozicio;
        $this->orszag = $orszag;
        $this->ranglista_pontszam = $ranglista_pontszam;
    }

    public function getPozicio()
    {
        return $this->pozicio;
    }

    public function getOrszag()
    {
        return $this->orszag;
    }

    public function getRanglista_pontszam()
    {
        return $this->ranglista_pontszam;
    }

    public function getSzerzett_golok()
    {
        return $this->szerzett_golok;
    }

    public function getKapott_golok() {
        return $this->kapott_golok;
    }

    public function getGolkulonbseg()
    {
        return $this->szerzett_golok - $this->kapott_golok;
    }

    public function getMerkozesek()
    {
        return $this->merkozesek;
    }

    public function getGyozelem()
    {
        return $this->gyozelem;
    }

    public function getVereseg()
    {
        return $this->vereseg;
    }

    public function getDontetlen()
    {
        return $this->dontetlen;
    }

    public function getPontszam()
    {
        return $this->pontszam;
    }

    public function goltSzerez() {
        $this->szerzett_golok++;
    }
    public function goltKap() {
        $this->kapott_golok++;
    }

    public function merkozes()
    {
        $this->merkozesek++;
    }

    public function nyer()
    {
        $this->gyozelem++;
        $this->pontszam += 3;
    }

    public function veszit()
    {
        $this->vereseg++;
    }

    public function dontetlen()
    {
        $this->dontetlen++;
        $this->pontszam++;
    }
}