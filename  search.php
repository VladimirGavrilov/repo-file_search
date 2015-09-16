<?php 
//// Class указываем ему папку 
// метод search ищет 
//по названию и  
//содержанию файлы в ней
class File_search  
{
		public $path = "";
   	public $filename = "";
		public function file_search($path, $filename)
	   {	   	
	      echo $path." ".$filename;
	   }
}
$d = new File_search;
$path = "/var/www/html";
$filename = "test1.php";
$d -> file_search($path, $filename);
?>
