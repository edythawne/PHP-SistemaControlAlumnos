<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-12-24 12:36:11 --> count(): Parameter must be an array or an object that implements Countable
#0 /var/www/html/ford32/app/Views/home.php(26): CodeIgniter\Debug\Exceptions->errorHandler(2, 'count(): Parame...', '/var/www/html/f...', 26, Array)
#1 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#2 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('home', Array, NULL)
#3 /var/www/html/ford32/app/Controllers/HomeController.php(24): view('home', Array)
#4 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#5 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#6 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-24 12:36:11 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\HomeController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(ErrorException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-24 12:38:19 --> count(): Parameter must be an array or an object that implements Countable
#0 /var/www/html/ford32/app/Views/home.php(26): CodeIgniter\Debug\Exceptions->errorHandler(2, 'count(): Parame...', '/var/www/html/f...', 26, Array)
#1 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#2 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('home', Array, NULL)
#3 /var/www/html/ford32/app/Controllers/HomeController.php(24): view('home', Array)
#4 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#5 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#6 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-24 12:38:19 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\HomeController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(ErrorException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-24 12:49:56 --> You must set the database table to be used with your query.
#0 /var/www/html/ford32/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /var/www/html/ford32/system/Model.php(1673): CodeIgniter\Model->builder()
#2 /var/www/html/ford32/app/Models/AlumnoModel.php(93): CodeIgniter\Model->__call('toJSON', Array)
#3 /var/www/html/ford32/app/Controllers/HomeController.php(22): App\Models\AlumnoModel->getInfGrados()
#4 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#5 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#6 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-24 12:49:56 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\HomeController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Database\Exceptions\DatabaseException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Database\Exceptions\DatabaseException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-24 12:49:57 --> You must set the database table to be used with your query.
#0 /var/www/html/ford32/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /var/www/html/ford32/system/Model.php(1673): CodeIgniter\Model->builder()
#2 /var/www/html/ford32/app/Models/AlumnoModel.php(93): CodeIgniter\Model->__call('toJSON', Array)
#3 /var/www/html/ford32/app/Controllers/HomeController.php(22): App\Models\AlumnoModel->getInfGrados()
#4 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#5 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#6 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-24 12:49:57 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\HomeController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Database\Exceptions\DatabaseException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Database\Exceptions\DatabaseException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-24 12:51:31 --> Illegal string offset 'data'
#0 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(74): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Illegal string ...', '/var/www/html/f...', 74, Array)
#1 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(65): App\Controllers\app\reports\ReportController->pdfRender('"{\\"data\\":{\\"0...')
#2 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#3 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#4 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-12-24 12:51:31 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(ErrorException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-24 13:55:12 --> Too few arguments to function App\Controllers\app\information\InformationController::index(), 0 passed in /var/www/html/ford32/system/CodeIgniter.php on line 847 and exactly 1 expected
#0 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\information\InformationController->index()
#1 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\information\InformationController))
#2 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-24 13:55:25 --> Too few arguments to function App\Controllers\app\information\InformationController::index(), 0 passed in /var/www/html/ford32/system/CodeIgniter.php on line 847 and exactly 1 expected
#0 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\information\InformationController->index()
#1 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\information\InformationController))
#2 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-24 13:55:45 --> Too few arguments to function App\Controllers\app\information\InformationController::index(), 0 passed in /var/www/html/ford32/system/CodeIgniter.php on line 847 and exactly 1 expected
#0 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\information\InformationController->index()
#1 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\information\InformationController))
#2 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-24 13:56:53 --> Too few arguments to function App\Controllers\app\information\InformationController::a(), 0 passed in /var/www/html/ford32/system/CodeIgniter.php on line 847 and exactly 1 expected
#0 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\information\InformationController->a()
#1 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\information\InformationController))
#2 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-24 13:56:58 --> Too few arguments to function App\Controllers\app\information\InformationController::a(), 0 passed in /var/www/html/ford32/system/CodeIgniter.php on line 847 and exactly 1 expected
#0 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\information\InformationController->a()
#1 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\information\InformationController))
#2 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-12-24 13:57:01 --> Too few arguments to function App\Controllers\app\information\InformationController::a(), 0 passed in /var/www/html/ford32/system/CodeIgniter.php on line 847 and exactly 1 expected
#0 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\information\InformationController->a()
#1 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\information\InformationController))
#2 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
