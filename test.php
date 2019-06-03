<?PHP
require_once __DIR__ . '/vendor/autoload.php';
use PHPProcess\Worker

$worker = new Worker();

$worker->count = 2;

$worker->onWorkerStart = function($worker){
    echo 'onWorkerStart' . PHP_EOL;
};

Worker::runAll();