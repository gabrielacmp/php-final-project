<?php

    class Portifolio{

        private int $id;
        private string $imagem;
        private string $title;
        private string $texto;

        # encapsulamento
        public function getId():int{
            return $this->id;
        }

        public function setId($id): void {
            $this->id = $id;
        }

        public function getImagem() {
            return $this->imagem;
        }

        public function setImagem($imagem): void {
            $this->imagem = $imagem;
        }

        public function getTitle(): int {
            return $this->title;
        }

        public function setTitle($title): void {
            $this->title = $title;
        }

        public function getTexto(): int {
            return $this->texto;
        }

        public function setTexto($texto): void {
            $this->texto = $texto;
        }

    }