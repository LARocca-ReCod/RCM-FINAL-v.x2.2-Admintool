<?php
////$r_ch = trim($chistx);
//$vipt = (array_search($chistx, $r_adm, true) !== false);
////////////////////////////////////////////////////////////////////NEW DOWN AT THE LIST   
 list($nickr, $msgr) = explode(' % ', $damytext);  
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !kick 5 ( 5 = id)
$i_namex = chatrr($i_name);	
  $tk = $i_id . ' / ' . $i_namex . ' / ' . $i_ip . ' / ' . $i_ping;
	$kski = explode(" / ", $tk); 	
	while ($row = sqlite_fetch_array($sql))
	{	
   $adm_ip  = $row['s_adm'];
          $a_grp  = $row['s_group'];  
  $adm_ip = trim($adm_ip);
  $i_ipn = trim($i_ip);
  $kski[1] = trim($kski[1]);
  $nickr = trim($nickr);   
  
if(($adm_ip == $i_ipn) && ($kski[1] == chatrr($nickr)) && (($a_grp == 0) || ($a_grp == 111) || ($a_grp == 555)))
   { 	  
 list($x_cmd, $x_idn) = explode(' ', $msgr); // !kick 5 ( 5 = id)
 for ($i=0; $i<1; $i++)
	{
require 'ReCodMod/w_functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
if ($x_number == 0){
usleep($sleep_rcon);
if ($game_ac == '0'){ rcon('clientkick '. $x_idn, '');}
else { rcon('akick '. $x_idn.' " ^6[^7Kicked by Admin^6]"', ''); }
	  AddToLog("[".$datetime."] KICKED: " . $i_ip . " (" . $i_namex . ") (" . $x_idn . ") BY: (" . $x_nickx . ") ");    
echo '  bb  '.substr((microtime(true) - $start),0,7);
++$x_number;
++$x_return;
	}else{
++$x_number;
++$x_return;	
	}
   }
  } 
}	     
?>
 