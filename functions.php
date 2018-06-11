<?php 

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/Models/SelectData.php';
require __DIR__ . '/Controllers/RequestData.php';
require __DIR__ . '/Models/InsertData.php';

 function generateID()
    {
        $n = mt_rand();
        $parceiroID = hash('md5', "$n");

        return $parceiroID;
    }

     function obtainNome()
    {
        $nome = isset($_POST['name']) ? $_POST['name'] : '';
        return $nome;
    }

     function obtainData()
    {
        $data = isset($_POST['date']) ? $_POST['date'] : '';
        return $data;
    }

     function obtainComentario()
    {
        $comentario = isset($_POST['comments']) ? $_POST['comments'] : '';
        return $comentario;
    }

function insertData()
{
    try {

        $insertObject = new InsertData();
        $insertObject->insert(
            generateID(),
            obtainNome(),
            obtainData(),
            obtainComentario()
        );
        header("Location: http://unidosaosindoromededown-com.umbler.net/parceiros.php");
    } catch (PDOException $e) {
        header("Location: http://unidosaosindoromededown-com.umbler.net/parceiros.php?r=error");
    }
}

function showData()
{
    $selectObject = new SelectData();
    return $selectObject->getData();
}

function twigIndex()
{
    $viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('index.html');

}

function twigIdeia()
{
	$viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('header.html');
    echo $twig->render('ideia.html');
    echo $twig->render('footer.html');
}

function twigBrinquedo(){
	$viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('header.html');
    echo $twig->render('brinquedo.html');
    echo $twig->render('footer.html');
}

function twigSindrome(){
	$viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('header.html');
    echo $twig->render('sindrome.html');
    echo $twig->render('footer.html');
}

function twigSobre(){
	$viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('header.html');
    echo $twig->render('sobre.html');
    echo $twig->render('footer.html');
}

function twigContato(){
	$viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('header.html');
    echo $twig->render('contato.html');
    echo $twig->render('footer.html');
}

function twigParceiros(){
	$viewFolder = __DIR__ . "/views";
    $loader = new Twig_Loader_Filesystem($viewFolder);
    $twig = new Twig_Environment($loader);

    echo $twig->render('header.html');
    echo $twig->render('parceiros.html', array('postsParceiros'=>showData()));
    echo $twig->render('footer.html');
}