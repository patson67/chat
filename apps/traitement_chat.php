<?php

if ( isset( $_POST['action'] ) ) {
    // var_dump($_POST);
    if ($_POST['action'] == 'ajout') {

        $manager = new MessageManager( $link );// $link => $this->link
        try {
            $message = $manager->create( $_POST );

            header('Location: index.php?page=chat');
            exit;
        }

        catch ( Exception $exception ){
            $error = $exception->getMessage();
        }
    }
}
?>