<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-11-25 22:14:48 --> No such file or directory
#0 /var/www/html/ford32/system/Database/BaseConnection.php(377): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 /var/www/html/ford32/system/Database/BaseConnection.php(643): CodeIgniter\Database\BaseConnection->initialize()
#2 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Grupos`...', Array, false)
#3 /var/www/html/ford32/app/Models/AlumnoModel.php(138): CodeIgniter\Database\BaseBuilder->get()
#4 /var/www/html/ford32/app/Controllers/HomeController.php(22): App\Models\AlumnoModel->getInfGrados()
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-25 22:14:48 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\HomeController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-25 22:14:49 --> No such file or directory
#0 /var/www/html/ford32/system/Database/BaseConnection.php(377): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 /var/www/html/ford32/system/Database/BaseConnection.php(643): CodeIgniter\Database\BaseConnection->initialize()
#2 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Grupos`...', Array, false)
#3 /var/www/html/ford32/app/Models/AlumnoModel.php(138): CodeIgniter\Database\BaseBuilder->get()
#4 /var/www/html/ford32/app/Controllers/HomeController.php(22): App\Models\AlumnoModel->getInfGrados()
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-25 22:14:49 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\HomeController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(mysqli_sql_exception), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(mysqli_sql_exception))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
