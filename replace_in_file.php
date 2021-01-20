<? 
/* Replace $str with $newstr in $file */
function replace_in_file($str,$newstr,$file)
{
    $content = file_get_contents($file);
    $content = str_replace($str,$newstr,$content);
    $file = fopen($file,"w+");
    fwrite($file,$content);
    fclose($file);
}
 ?>
