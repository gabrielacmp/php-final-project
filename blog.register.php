<?php 
    require_once('config/config.php');
    session_start();

    $service = new BlogService();

    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);
    $categoriaId = filter_input(INPUT_POST, 'inputCategoria', FILTER_SANITIZE_NUMBER_INT);
 
    $blog = new Blog();
    $blog->setTitulo($titulo);
    $blog->setDescricao($descricao);
    $blog->setCategoriaId($categoriaId);

    if($service->cadastrar($blog))
    {
        header('location: ./home');
        exit;
    } else {
        $_SESSION['error'] = 'Ocorreu uma falha ao cadastrar';
        header('location: ./blogs');
        exit;
    }