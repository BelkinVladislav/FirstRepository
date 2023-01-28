<?php 
namespace index;
use Work\stud\Students;

include_once __DIR__.'\vendor\autoload.php';

// spl_autoload_register(function ($class){
//     $path = dirname(__DIR__).'/'.str_replace('\\','/',$class).'.php';
//     require_once $path;
// });

$student = new Students();
$student->name = 'Shasa';
echo $student->name;
echo $student->getFullName().PHP_EOL;

?>