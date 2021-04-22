<?php
/*---------------------------------------------------------------*/
/*
    Titre : Vérifie si la syntaxe d'une IP est valide                                                                    
                                                                                                                          
    URL   : http://localhost/fabrice-script-php/verifie-si-la-syntaxe-une-ip-est-valide/
    Date édition     : 22 Avril 2021                                                                                        
    Date mise à jour : 22 Avril 2021                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/

     function valid_ip($ip){
     if(!is_string($ip)) 
      return false; 
      
      $ip_long = ip2long($ip); 
      $ip_reverse = long2ip($ip_long); 
      if($ip == $ip_reverse) 
      return true;
      else 
      return false; 
    }
?>