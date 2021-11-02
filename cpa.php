<?php

$cpa= array(
		  	 "https://hotdating-near.com/?u=0x7k60p&o=1mxhc3v", 
	       "https://hotdating-near.com/?u=0x7k60p&o=1mxhc3v", 
		  
           );
             
            $cpa_ram = rand(0,count($cpa)-1);




// reemplaza UA-156810917-1  por  tu codigo de tu codigo de google analitics

$codigo="UA-211154998-1";

$analiti='
<script async src="https://www.googletagmanager.com/gtag/js?id='.$codigo.'"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag("js", new Date());

   gtag("config", "'.$codigo.'");
 </script>';
			

 
 ?>