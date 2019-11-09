<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-11-07 22:37:22 --> Object of class App\Controllers\app\reports\ReportController could not be converted to string
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-07 22:53:44 --> count(): Parameter must be an array or an object that implements Countable
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'count(): Parame...', '/var/www/html/f...', 57, Array)
#1 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(57): count(NULL)
#2 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#3 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#4 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
