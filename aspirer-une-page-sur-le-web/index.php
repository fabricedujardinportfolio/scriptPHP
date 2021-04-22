<?php
/*---------------------------------------------------------------*/
/*
    Titre : Aspirer une page sur le web                                                                                   
                                                                                                                          
    URL   : http://localhost/fabrice-script-php/aspirer-une-page-sur-le-web/
    Auteur           : Fabrice                                                                                             
    Date édition     : 22 Avril 2021                                                                                         
    Date mise à jour : 22 Avril 2021                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code à vérifié                                                                                    
*/
/*---------------------------------------------------------------*/

      // Vous désirez récupérer le source d'une page sur un autre serveur,
      // voici le principe d'1 aspirateur, avec ce script vous pourrez
      // aspirer le contenu d'une page, si celle ci est accessible.

   $path = 'https://phpsources.net/code/php/divers/126_aspirer-une-page-sur-le-web'; // A remplir avec l'url de la page web a aspirer
   $fp = @fopen($path, "r");

   $chaine = '';

   if($fp) {
      while(!feof($fp)) {
      $chaine .= fgets($fp,1024);
      }
      
   echo $chaine;
   }
   else {
   echo "Impossible d'ouvrir la page $path";
   }
?>