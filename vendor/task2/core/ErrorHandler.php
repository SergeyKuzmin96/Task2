<?php

namespace task2;

class ErrorHandler
{
    public function __construct()
    {
        if(DEBUG)
        {
            error_reporting(-1);
        }else
        {
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    //Метод обрабатывающий перехваченные исключения
    public function exceptionHandler($e)
    {

    }

    //Метод для логировния ошибок
    protected function logErrors($message = '', $file = '', $line = '')
    {
        error_log("[" .date('Y-m-d H:i:s') ."] Текст ошибки: {$message} | Файл: {$file} | Строка : {$line}\n===================\n",3, ROOT . '/tmp/errors.log');
    }

    //Метод для вывода ошибок и для подключения того или иного шаблона
    //errno - номер ошибки,  errstr текст ошибки,
    // errfile - файл в котором произошла ошибка, errline - строка в файле где ошибка
    // responce -код которпый мы отправляем в заголовке браузеру
    protected function displayError($errno, $errstr, $errfile, $errline, $response = 404)
    {
        http_response_code($response);
        if($response === 404 && !DEBUG){
            require
        }

    }

}