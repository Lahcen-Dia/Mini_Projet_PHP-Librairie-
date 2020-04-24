<?php 
	function deux_Dernier_nbr_ISBN($nombre)//fct dial affichage de deux char f fin dial chaine
	{
		$tool=strlen($nombre); 
		if($tool>2) { 
						$n=($tool-2); 
 						$ch = substr($nombre, $n,2); 
 					return $ch;
					}
		}
    function deux_dernier_lettre($chaine)//fct dial affichage de deux char f début dial chaine
    {
			$tool=strlen($chaine); 
			if($tool>2){ 
			$ch = substr($chaine, 0,2);
 		return $ch;
       }
         else return $chaine;
    }
/*	function AfficheCodeLivre($chaine1,$chaine2,$chaine3,$chaine4)//fct dial concaténation dial les chaine
	{
            $ch1=AfficheTo($chaine1); 		//ch1
            $ch2=AfficheTo($chaine2);		//ch2
            $ch3=AfficheTo($chaine3);		//ch3
            $ch4=LastAfficheTo($chaine4);	//ch4
            $rest= $ch1.$ch2.$ch3.$ch4;		//concaténation des chaines
        return $rest;
        }
$chaine1="VeJuRo22";
$chaine2="Verne";
$chaine3="Roman";
$chaine4="123456";
echo  AfficheCodeLivre($chaine1,$chaine2,$chaine3,$chaine4);
*/
?>