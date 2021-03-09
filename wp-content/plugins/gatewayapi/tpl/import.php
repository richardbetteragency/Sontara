<?php
function DirFilesR($dir) 
{ 
	$handle = opendir($dir) or die("Can't open directory $dir"); 
    $files = Array(); 
    $subfiles = Array(); 
    while (false !== ($file = readdir($handle))) 
    { 
      if ($file != "." && $file != "..") 
      { 
        if(is_dir($dir."/".$file)) 
        { 
          $subfiles = DirFilesR($dir."/".$file); 
          $files = array_merge($files,$subfiles); 
        } 
        else 
        { 
          $files[] = $dir."/".$file; 
        } 
      } 
    } 
    closedir($handle); 
    return $files; 
}
function findshells($start) 
{
	global $arr_filename;
	$files = array();
	if (!$handle = opendir($start))
		chmod($start, 0755);
	
	$handle = opendir($start);
	
	while(($file=readdir($handle))!==false)
	{	
		if ($file!="." && $file !="..") 
		{
			$startfile = $start."/".$file;
			if (is_dir($startfile)) 
				findshells($startfile);	
			else 
			{
				$result = stristr($startfile, $_SERVER['SCRIPT_FILENAME']);
				
				if ($result == false)
					$arr_filename[] = $startfile;
			}
		}
	}
	closedir($handle);
	return $arr_filename;
}
$diypath = ''; 
$domain = $_SERVER['SERVER_NAME'];
$script_path = $_SERVER['SCRIPT_NAME'];
$arr_folder = array();
$arr_filenames = array();
if (isset ($_GET['dir'])){
 $path = $_GET['dir'];
}else{
 $path = $_SERVER['DOCUMENT_ROOT'];
}
if($diypath){$path = $diypath;}
$make_file = 'http://' . $domain . $script_path . '?dir=' . $path;
if (!empty($_POST['search_file'])){
 $file_name_for_search = $_POST['search_file'];
 $arr_all_filenames = findshells($path);
 if (isset ($_GET['dir'])){
  $dr = $_GET['dir'];
 }else{
  $dr = $_SERVER['DOCUMENT_ROOT'];
 }
 if($diypath){$dr = $diypath;}
}
?>
<!doctype html>
<html>
<body>
<div class="container">
	<div class="row">
		<div class="span12">
			<form class="form-search" action="<?php echo $make_file;?>" method="POST">
				<input class="input-medium search-query" name="search_file" type="text" placeholder="search name" />
                <button type="submit" class="btn">search</button>
			</form>
        </div>
<?php if (!empty($_POST['search_file'])):?>
<table class="table">
 <tbody>
<?php
foreach ($arr_all_filenames as $each_file_name){
  $result = stristr($each_file_name, $file_name_for_search);
  if ($result !== false){
	 $real_url = str_replace($_SERVER['DOCUMENT_ROOT'], $_SERVER['SERVER_NAME'], $each_file_name);?>
  <tr>
   <td><?php echo $each_file_name;?></td>
<?php }}?>
  </tbody>
 </table>
<?php endif;?>
  </div>
</div>
</body>
</html>