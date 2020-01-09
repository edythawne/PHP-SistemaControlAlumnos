<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-12-12 10:59:27 --> json_decode() expects parameter 1 to be string, array given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'json_decode() e...', '/var/www/html/f...', 183, Array)
#1 /var/www/html/ford32/app/Models/AlumnoModel.php(183): json_decode(Array)
#2 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(90): App\Models\AlumnoModel->buildQueryReport(Array)
#3 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#4 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#5 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
