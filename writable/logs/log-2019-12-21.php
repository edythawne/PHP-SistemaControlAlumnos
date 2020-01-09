<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-12-21 11:33:12 --> implode(): Invalid arguments passed
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'implode(): Inva...', '/var/www/html/f...', 83, Array)
#1 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(83): implode(',', NULL)
#2 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#3 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#4 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-21 11:37:28 --> implode(): Invalid arguments passed
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'implode(): Inva...', '/var/www/html/f...', 60, Array)
#1 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(60): implode(',', NULL)
#2 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#3 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#4 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-21 11:44:36 --> Unknown column 'M' in 'where clause'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT CONCAT(G...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT CONCAT(G...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT CONCAT(G...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT CONCAT(G...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(185): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(73): App\Models\AlumnoModel->buildQueryReport(Array)
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-21 11:45:49 --> Unknown column 'M' in 'where clause'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT CONCAT(G...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT CONCAT(G...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT CONCAT(G...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT CONCAT(G...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(185): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(73): App\Models\AlumnoModel->buildQueryReport(Array)
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-21 11:48:05 --> Unknown column 'F' in 'where clause'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT CONCAT(G...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT CONCAT(G...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT CONCAT(G...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT CONCAT(G...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(185): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(75): App\Models\AlumnoModel->buildQueryReport(Array)
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-21 11:48:34 --> Unknown column 'F' in 'where clause'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT CONCAT(G...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT CONCAT(G...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT CONCAT(G...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT CONCAT(G...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(185): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(75): App\Models\AlumnoModel->buildQueryReport(Array)
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
