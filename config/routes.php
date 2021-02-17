<?php
function getPage($db){    
    $lesPages['accueil'] = "accueilControleur";
    $lesPages['Actualite'] = "ActualiteControleur"; 
if ($db!=null){         
    if (isset($_GET['page'])){        
        $page = $_GET['page'];    
    }    
    else{        
        $page = 'accueil';
    }    
    if (!isset($lesPages[$page])){   
        $page = 'accueil';   
        }  
        $contenu = $lesPages[$page];  
        }
        else{   
            $contenu = $lesPages['maintenance'];
        }
            return $contenu; 
            }
            ?>