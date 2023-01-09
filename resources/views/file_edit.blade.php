


<?php
    $fp = fopen("$scorelink->path", "r");
 while (!feof($fp)) {
   echo fgets($fp).'<br>';
    }
    fclose($fp);
   
  //  dd(session('flag'));
    if (!null == session('flag')){
    $fp = fopen("$scorelink->path", "a+");
    fwrite($fp, session('memo'));
    rewind($fp);
    while (!feof($fp)) {
    echo fgets($fp).'<br>';
    }
    fclose($fp);
}
?>

            
