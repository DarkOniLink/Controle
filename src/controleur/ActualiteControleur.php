<?php

function ActualiteControleur($twig){
    $form = array(); 
    if (isset($_POST['btActualite'])){
        $Titre = $_POST['Titre'];
        $textarea = $_POST['textarea'];
        $form['valide'] = true;
        $form['Titre'] = $Titre;
        $form['textarea'] = $textarea;
    }
    


    echo $twig->render('Actualite.html.twig', array('form'=>$form));
    }
?>