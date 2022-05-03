<?php 
    require_once('config/config.php');

    $service = new BlogService();

    $id = filter_input(INPUT_POST, 'inputIdentificador', FILTER_SANITIZE_NUMBER_INT);
    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);
    $categoriaId = filter_input(INPUT_POST, 'inputCategoria', FILTER_SANITIZE_NUMBER_INT);

    $blog = new Blog();
    $blog->setId($id);
    $blog->setTitulo($titulo);
    $blog->setDescricao($descricao);
    $blog->setCategoriaId($categoriaId);

    if($service->atualizar($blog))
    {
        header('location: ./blogs?success=true');
        exit;
    } else {
        $_SESSION['error'] = 'Ocorreu uma falha ao cadastrar';
        header('location: ./blogs?error=true');
        exit;
    }