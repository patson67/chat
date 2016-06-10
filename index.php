<?php
    session_start();
    require('config.php');

    function __autoload( $className ) {
        require('models/' . $className . '.class.php' );
    }

    $link = mysqli_connect( $serveur ,$username, $password, $database);
    if ( !$link ) {
        require('views/bigerror.phtml');
        exit;
    }

    $page = 'chat';
    $error = '';

    $access = array('chat', 'chat_liste');
    $access_traitement = array('chat' => 'chat');      

    if ( isset( $_GET['page'] ) ) {
        if ( in_array( $_GET['page'], $access ) ) {
            $page = $_GET['page'];
        }
    }

    if ( isset( $access_traitement[$page] ) ) {
        require('apps/traitement_' . $access_traitement[$page] . '.php' );
    }

    if (isset($_GET['ajax']))
    {
        require('apps/'.$page.'.php');
    }
    else
    	require('apps/skel.php');

?>