
/* Clear the specific $folder (recursive) */
function clear_directory($folder) {
$open=@opendir($folder);
if (!$open) return;
while($file=readdir($open)) {
    if ($file == "." || $file == "..") continue;
    if (is_dir("$folder/$file")) {
        $r=clear_directory("$folder/$file");
        if (!$r) return false;
    }
    else {
    	$r=@unlink("$folder/$file");
    	if (!$r) return false;
    }
}
closedir($open);
$r=@rmdir($folder);
if (!$r) return false;
return true;
}
