<?php

namespace AppBundle\Services;

class Pagination {

    private $limitePagina = 6;
    private $extremos = 2;
    private $itemsLimit = 14;

    public function getLimitePagina() {
        return $this->limitePagina;
    }

    public function setLimitePagina($limite) {
        $this->limitePagina = $limite;
    }

    public function getExtremos() {
        return $this->limitePagina;
    }

    public function setExtremos($extremos) {
        $this->extremos = $extremos;
    }

    public function getItemsLimit() {
        return $this->itemsLimit;
    }

    public function setItemsLimit($limite) {
        $this->itemsLimit = $limite;
    }

}
