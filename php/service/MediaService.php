<?php

    class MediaService{
        
        private $repository;

        public function __construct() {
            $this->repository = new MediaRepository();
        }

        public function cadastrar(Media $media): bool {
            return $this->repository->fnAddMedia($media);
        }
    }