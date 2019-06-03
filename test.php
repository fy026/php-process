<?PHP
$path = __DIR__;
echo $path;
require $path.'/Worker.php';

Worker::runAll();