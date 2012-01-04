<?
function scandirs($start) {
     $files = array();
     $handle = opendir($start);
     while (false !== ($file = readdir($handle)))
     {
         if ($file != '.' && $file != '..')
         {
             if (is_dir($start.'/'.$file))
             {
                 $dir = scandirs($start.'/'.$file);
                 $files[$file] = $dir;
             }
             else
             {
                 array_push($files, $file);
             }
         }
     }
     closedir($handle);
     return $files;
 }
$dir = 'classes';
$classes = scandirs($dir);

foreach($classes as $className)
{
  $className = substr($className,0,-4);
  if(file_exists($dir . '/' . $className.'.php'))
                {
                require_once($dir . '/' . $className.'.php');
                $$className = new $className;
                }
}
?>