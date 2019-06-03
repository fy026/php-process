<?PHP


class Worker{
    public static function runAll(){
        static::checkEnv();
    }

    public static function checkEnv(){

        if (php_sapi_name() != 'cli') {
            exit('请使用命令行模式运行!');
        }

        if(!function_exists('posix_kill')){
            exit('请先安装posix扩展'."\n");
        }

        if(!function_exists('pcntl_fork')){
            exit('请先安装pcntl扩展'."\n");
        }

    }
}