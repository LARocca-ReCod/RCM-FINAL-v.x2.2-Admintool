<?php
  
if($server_rconpass == 'my_rcon_password')
exit;

if ($game_patch == 'cod1_1.1')
			$i_name1c = 17;
			else
		    $i_name1c = 22;

$server_addr = "udp://" . $server_ip;
@$connx = fsockopen($server_addr, $server_port, $re, $errstr, 30);
if (!$connx) { die('Can\'t connx to COD gameserver.'); }
//socket_set_timeout ($connx, 1, 000000);  // bylo2
stream_set_timeout ($connx, 0, 70000); //1e5
$send = "\xff\xff\xff\xff" . 'rcon "' . $server_rconpass . '" g_log';
fwrite($connx, $send);
$outxxx = fread ($connx, 1);
if (!empty($outxxx)) {
do {
$status_pre = socket_get_status ($connx);
$outxxx = $outxxx . fread ($connx, 1024);  //1024
$status_post = socket_get_status ($connx);
} while ($status_pre['unread_bytes'] != $status_post['unread_bytes']);
};

$outxxx = explode ("\xff\xff\xff\xffprint\n", $outxxx);
$outxxx = implode ('!', $outxxx);
$outxxx = explode ("\n",$outxxx);


foreach ($outxxx as $value) {
$outxxx[0];    
}
unset($value);
 $gloggs = $outxxx[0];
//cod  "g_log" is:"gggg_mp.log^7" default:"games_mp.log^7"
//cod4 "g_log" is: "games_mp.log" default: "games_mp.log" info: "Log file name"

?>
