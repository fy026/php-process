<?PHP
define('PROJECT_ROOT',dirname(__FILE__));

require PROJECT_ROOT.'/worker.php';

$worker = new Worker();

$worker->count = 2;

$worker->onWorkerStart = function($worker){
    echo 'onWorkerStart' . PHP_EOL;
};

Worker::runAll();