<?
$date = date('d.m.Y H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$url = $_SERVER['REQUEST_URI'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$refer = $_SERVER['HTTP_REFERER'];
$ban = "# ".$date." ".$url." \r\nDeny from ".$ip." \r\n"; 
$htaccess = $_SERVER['DOCUMENT_ROOT'].'/.htaccess'; 
$str = file_get_contents($htaccess);
$fn = 'Deny from '.$ip;
$pos = strpos($str,$fn);
if ($pos === false)
{
  $o = @fopen($htaccess, "a+"); 
  $write = @fputs($o, $ban); 
   fclose($o);
  echo '
        <html><head></head><body style="background:#363636;font-family:Century Gothic;color:#CFCFCF">
        <div style="width:100%;height:100%;position:fixed;top:0;left:0;display:flex;align-items:center;align-content:center;justify-content:center;overflow:auto;color:red"><span style="font-size:80px">Get Banned, Bitch</span></div>
        </body></html>
      ';
 
}
else
{
}
?>