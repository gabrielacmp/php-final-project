<?php

    class Media{

        private int $id;
        private string $nome;

        # encapsulamento
        public function getId():int{
            return $this->id;
        }

        public function setId($id): void {
            $this->id = $id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome): void {
            $this->nome = $nome;
        }

    }