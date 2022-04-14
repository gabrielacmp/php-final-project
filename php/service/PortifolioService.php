<?php

    class PortifolioService{
        
        private $repository;

        public function __construct() {
            $this->repository = new PortifolioRepository();
        }

        public function cadastrar(Portifolio $portifolio): bool {
            return $this->repository->fnAddPortifolio($portifolio);
        }
    }