<?PHP
//设置文件掩码
umask(0);

$pid = pcntl_fork();

if($pid > 0){
    //父进程自杀
    exit(0); 
}elseif($pid == 0){
    //子进程创建新会话，摆脱终端控制
    if( -1 === posix_setsid() ){
        throw new Exception("setsid fail");
    }
    //此处可以结合上面的信号代码
    while(1){
        sleep(1);
        //pcntl_signal_dispatch();
    }
}else{
    throw new Exception("fork fail");
}