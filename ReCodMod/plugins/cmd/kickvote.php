<?php	
if ($x_stop_lp == 0 ) {

if (strpos($msgr, $vk) !== false)
{
  echo "\n[cmk] : [",$datetime, "] : ".$nickr." : ".$msgr;   
//*//	
	$xtee = date("dmYHis");
  $checkmm = sqlite_query($db, "SELECT * FROM x_cmd_kck");  
 while ($row = sqlite_fetch_array($checkmm))
 {
$xbm = $row['z_time'];	 
$xbb = $row['z_counts'];	
 }
 $razn = $xtee - $xbm;

 if($razn > 50) 
  {
  VoteCashreset("null");
  }
 
 //*///
$fd = fopen($rules_log_vote, "r");
$bufer = fread($fd, filesize($rules_log_vote));
fclose($fd);    
//СЂР°Р·Р±РёРІР°РµРј РІ РјР°СЃСЃРёРІ РїРѕ СЃС‚СЂРѕС‡РЅРѕ
$strtmp = explode("\n", $bufer); 
// list($nickr, $msgr) = explode(' % ', $parselinetxt); 
$v = $nickr;
//$v = trim($v);
//РїСЂРѕРІРµСЂСЏРµРј РµСЃС‚СЊ Р»Рё РїСЂРѕРІРµСЂРѕС‡РЅРѕРµ СЃР»РѕРІРѕ РІ РјР°СЃСЃРёРІРµ
foreach($strtmp as $word) {
if($v == $word){

require $cpath.'ReCodMod/w_functions/inc_functions2.php';
for ($i=0; $i<1; $i++)
	{
require $cpath.'ReCodMod/w_functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
/////////////////////////////////////////////////////////////////////////////////KICK
$x_namex = trim(clearnamex($i_name));
	  usleep($sleep_rcon);
		rcon('say ^6 ^3Voted!', '');
	}	
		
echo '  golosoval  '.(microtime(true) - $start);

 echo "" .$v. "\n";

sqlite_close($db); sqlite_close($db2); sqlite_close($db3); sqlite_close($db4);	
 return;}
}
$vote_cgu = 0;		
$x_number = 0;	
require $cpath.'ReCodMod/w_functions/inc_functions2.php';
for ($i=0; $i<$player_cnt; $i++)
	{
require $cpath.'ReCodMod/w_functions/inc_functions3.php';
if ((! $valid_id) || (! $valid_ping)) Continue; 
/////////////////////////////////////////////////////////////////////////////////KICK
$x_namex = trim(clearnamex($i_name));
$x_nickx = trim(clearnamex($nickr));
$findgi3   = '!k ';
$posvok3 = strpos($msgr, $findgi3);
if ($posvok3 !== false) { 
   $xtee = date("dmYHis");
 list($x_cmd, $idgz) = explode(' ', $msgr);   // !kick 5 ( 5 = id)	

 $inamex = afdasfawf($i_name);	
  $oo = $i_id . ' / ' . $inamex . ' / ' . $i_ip . ' / ' . $i_ping;
	$x_kk = explode(" / ", $oo); 	  
 $checkmm = sqlite_query($db, "SELECT * FROM x_cmd_kck");  
 while ($row = sqlite_fetch_array($checkmm))
 {
$xbm = $row['z_time'];	 
$xbb = $row['z_counts'];	
 }
	  if($x_kk[0] == $idgz)
	     {	
$votm = "";
$razn = $xtee - $xbm;
///////////////////////////////////////////VOTE
if($player_cnt = 2)
$plgg = 5;
if($player_cnt = 3)
$plgg = 2;
else if($player_cnt = 4)
$plgg = 2;
else if($player_cnt = 5)
$plgg = 2;
else if ($player_cnt = 6)
$plgg = 3;
else if ($player_cnt = 7)
$plgg = 3;
else if ($player_cnt = 8)
$plgg = 3;
else if ($player_cnt = 9)
$plgg = 3;
else if($player_cnt > 10)
$plgg = round(($player_cnt/4)+1);

if(($razn < 50) && ($xbb < $plgg)) 
  {
    $razn = $xtee - $xbm;
  $razn2 = (50 - $razn); 
  sqlite_query($db, "UPDATE x_cmd_kck SET z_counts=z_counts +1");
  usleep($sleep_rcon);
  rcon('say ^6 '. $votm . ' "^2Vote: ^7!k '.$idgz.'"^1Kick^5 '.$inamex.' ^8Seconds Left:^3 '.$razn2.'', '');	 
VoteCash("".$nickr."");	
  }
      else if(($razn < 50) && ($xbb >= $plgg))   
  { 
	usleep($sleep_rcon);
	rcon('clientkick '. $idgz, '');
	AddToLog("[".$datetime."] KICK: " . $i_ip . " (" . $x_namex . ") (" . $i_id . ") BY: (" . $x_namex . ")  R ");    
  $xcnnn = 0;
  $xtee = date("dmYHis");
  sqlite_query($db, "UPDATE x_cmd_kck SET z_counts='{$xcnnn}',z_time='{$xtee}'");
VoteCashreset("".$nickr."");
	++$x_number; 	 
  }
      else if($razn > 50) 
  {
  $xcnnn = 0;	
  $xtee = date("dmYHis");
  sqlite_query($db, "UPDATE x_cmd_kck SET z_counts='{$xcnnn}',z_time='{$xtee}'");
  usleep($sleep_rcon);
  rcon('say ^6 '. $votm . ' "^2Vote Activated!: ^7!k '.$idgz.'"^1<- Vote: to Kick^5 '.$inamex.'', ''); 
VoteCashreset("".$nickr."");
  } 
	}
} 
/////////////////////////////////////////////////////////////////////////////////KICK 
  }   ///end loop
//fclose($connect);
//fclose($fpX);


sqlite_close($db); sqlite_close($db2); sqlite_close($db3); sqlite_close($db4);	
echo '    '.(microtime(true) - $start);
++$x_stop_lp;    //return;
}
}
?>
 
