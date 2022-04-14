<?php
    require_once('config/config.php');

    $respository = new MediaRepository();

    # cadastrar media
    $media = new stdClass();
    $media->id = 1;
    $media->nome = 'bi-twitter';

    $media = new stdClass();
    $media->id = 2;
    $media->nome = 'bi-facebook';

    $media = new stdClass();
    $media->id = 3;
    $media->nome = 'bi-instagram';

    $media = new stdClass();
    $media->id = 4;
    $media->nome = 'bi-linkedin';

