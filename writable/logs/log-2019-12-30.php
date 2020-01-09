<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-12-30 15:51:06 --> Invalid file: {0}
#0 /var/www/html/ford32/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('user/templates/...')
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/templates/...', Array, NULL)
#2 /var/www/html/ford32/app/Views/user/home.php(2): view('user/templates/...')
#3 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#4 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/home', Array, NULL)
#5 /var/www/html/ford32/app/Controllers/user/HomeController.php(27): view('user/home', Array)
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\HomeController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\HomeController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 15:51:06 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\HomeController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\View\Exceptions\ViewException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\View\Exceptions\ViewException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 15:51:07 --> Invalid file: {0}
#0 /var/www/html/ford32/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('user/templates/...')
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/templates/...', Array, NULL)
#2 /var/www/html/ford32/app/Views/user/home.php(2): view('user/templates/...')
#3 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#4 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/home', Array, NULL)
#5 /var/www/html/ford32/app/Controllers/user/HomeController.php(27): view('user/home', Array)
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\HomeController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\HomeController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 15:51:07 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\HomeController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\View\Exceptions\ViewException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\View\Exceptions\ViewException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 17:56:39 --> Too few arguments to function CodeIgniter\Router\RouteCollection::get(), 1 passed in /var/www/html/ford32/app/Config/Routes.php on line 102 and at least 2 expected
#0 /var/www/html/ford32/app/Config/Routes.php(102): CodeIgniter\Router\RouteCollection->get('')
#1 /var/www/html/ford32/system/Router/RouteCollection.php(746): CodeIgniter\CodeIgniter->Config\{closure}(Object(CodeIgniter\Router\RouteCollection))
#2 /var/www/html/ford32/app/Config/Routes.php(106): CodeIgniter\Router\RouteCollection->group('report', Object(Closure))
#3 /var/www/html/ford32/system/CodeIgniter.php(712): require('/var/www/html/f...')
#4 /var/www/html/ford32/system/CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#5 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 17:56:41 --> Too few arguments to function CodeIgniter\Router\RouteCollection::get(), 1 passed in /var/www/html/ford32/app/Config/Routes.php on line 102 and at least 2 expected
#0 /var/www/html/ford32/app/Config/Routes.php(102): CodeIgniter\Router\RouteCollection->get('')
#1 /var/www/html/ford32/system/Router/RouteCollection.php(746): CodeIgniter\CodeIgniter->Config\{closure}(Object(CodeIgniter\Router\RouteCollection))
#2 /var/www/html/ford32/app/Config/Routes.php(106): CodeIgniter\Router\RouteCollection->group('report', Object(Closure))
#3 /var/www/html/ford32/system/CodeIgniter.php(712): require('/var/www/html/f...')
#4 /var/www/html/ford32/system/CodeIgniter.php(298): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#5 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 18:26:53 --> Too few arguments to function App\Models\AlumnoModel::getAlumnosGrado(), 0 passed in /var/www/html/ford32/app/Controllers/user/InfoController.php on line 26 and exactly 1 expected
#0 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado()
#1 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('1')
#2 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#3 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 18:26:56 --> Too few arguments to function App\Models\AlumnoModel::getAlumnosGrado(), 0 passed in /var/www/html/ford32/app/Controllers/user/InfoController.php on line 26 and exactly 1 expected
#0 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado()
#1 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#2 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#3 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 18:27:42 --> Too few arguments to function App\Models\AlumnoModel::getAlumnosGrado(), 0 passed in /var/www/html/ford32/app/Controllers/user/InfoController.php on line 26 and exactly 1 expected
#0 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado()
#1 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#2 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#3 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 18:27:43 --> Too few arguments to function App\Models\AlumnoModel::getAlumnosGrado(), 0 passed in /var/www/html/ford32/app/Controllers/user/InfoController.php on line 26 and exactly 1 expected
#0 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado()
#1 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#2 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#3 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 18:27:44 --> Too few arguments to function App\Models\AlumnoModel::getAlumnosGrado(), 0 passed in /var/www/html/ford32/app/Controllers/user/InfoController.php on line 26 and exactly 1 expected
#0 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado()
#1 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#2 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#3 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 18:27:44 --> Too few arguments to function App\Models\AlumnoModel::getAlumnosGrado(), 0 passed in /var/www/html/ford32/app/Controllers/user/InfoController.php on line 26 and exactly 1 expected
#0 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado()
#1 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#2 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#3 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 18:27:44 --> Too few arguments to function App\Models\AlumnoModel::getAlumnosGrado(), 0 passed in /var/www/html/ford32/app/Controllers/user/InfoController.php on line 26 and exactly 1 expected
#0 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado()
#1 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#2 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#3 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 18:27:44 --> Too few arguments to function App\Models\AlumnoModel::getAlumnosGrado(), 0 passed in /var/www/html/ford32/app/Controllers/user/InfoController.php on line 26 and exactly 1 expected
#0 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado()
#1 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#2 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#3 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 18:27:45 --> Too few arguments to function App\Models\AlumnoModel::getAlumnosGrado(), 0 passed in /var/www/html/ford32/app/Controllers/user/InfoController.php on line 26 and exactly 1 expected
#0 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado()
#1 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#2 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#3 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-12-30 18:30:25 --> Unknown column 'Alumno.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumno`...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumno`...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumno`...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumno`...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:26 --> Unknown column 'Alumno.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumno`...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumno`...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumno`...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumno`...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:35 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:35 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:36 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:36 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:37 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:37 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:37 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:37 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:38 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:38 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:38 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:30:38 --> Unknown column 'Alumnos.id_alumno' in 'field list'
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Alumnos...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Alumnos...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Alumnos...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Alumnos...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(109): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/user/InfoController.php(26): App\Models\AlumnoModel->getAlumnosGrado('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:49:23 --> Invalid file: {0}
#0 /var/www/html/ford32/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('templates/page/...')
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('templates/page/...', Array, NULL)
#2 /var/www/html/ford32/app/Views/reports/home.php(2): view('templates/page/...')
#3 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#4 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('reports/home', Array, NULL)
#5 /var/www/html/ford32/app/Controllers/report/ReportController.php(42): view('reports/home', Array)
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\report\ReportController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\report\ReportController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:49:29 --> Invalid file: {0}
#0 /var/www/html/ford32/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('templates/page/...')
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('templates/page/...', Array, NULL)
#2 /var/www/html/ford32/app/Views/reports/home.php(2): view('templates/page/...')
#3 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#4 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('reports/home', Array, NULL)
#5 /var/www/html/ford32/app/Controllers/report/ReportController.php(42): view('reports/home', Array)
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\report\ReportController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\report\ReportController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:49:44 --> Invalid file: {0}
#0 /var/www/html/ford32/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('templates/page/...')
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('templates/page/...', Array, NULL)
#2 /var/www/html/ford32/app/Views/reports/home.php(2): view('templates/page/...')
#3 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#4 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('reports/home', Array, NULL)
#5 /var/www/html/ford32/app/Controllers/report/ReportController.php(42): view('reports/home', Array)
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\report\ReportController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\report\ReportController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:51:21 --> Invalid file: {0}
#0 /var/www/html/ford32/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('templates/page/...')
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('templates/page/...', Array, NULL)
#2 /var/www/html/ford32/app/Views/reports/home.php(2): view('templates/page/...')
#3 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#4 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('reports/home', Array, NULL)
#5 /var/www/html/ford32/app/Controllers/report/ReportController.php(42): view('reports/home', Array)
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\report\ReportController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\report\ReportController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 18:51:22 --> Invalid file: {0}
#0 /var/www/html/ford32/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('templates/page/...')
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('templates/page/...', Array, NULL)
#2 /var/www/html/ford32/app/Views/reports/home.php(2): view('templates/page/...')
#3 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#4 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('reports/home', Array, NULL)
#5 /var/www/html/ford32/app/Controllers/report/ReportController.php(42): view('reports/home', Array)
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\report\ReportController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\report\ReportController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-30 21:35:42 --> You must set the database table to be used with your query.
#0 /var/www/html/ford32/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /var/www/html/ford32/system/Model.php(1673): CodeIgniter\Model->builder()
#2 /var/www/html/ford32/app/Controllers/user/InfoController.php(27): CodeIgniter\Model->__call('getIDGradoGrupo', Array)
#3 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('1')
#4 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#5 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 21:35:42 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\InfoController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Database\Exceptions\DatabaseException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Database\Exceptions\DatabaseException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 22:41:06 --> Illegal string offset 'grado'
#0 /var/www/html/ford32/app/Views/user/info.php(29): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Illegal string ...', '/var/www/html/f...', 29, Array)
#1 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#2 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/info', Array, NULL)
#3 /var/www/html/ford32/app/Controllers/user/InfoController.php(29): view('user/info', Array)
#4 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('1')
#5 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#6 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-12-30 22:41:06 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\InfoController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(ErrorException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 23:04:22 --> print_r() expects at least 1 parameter, 0 given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r() expec...', '/var/www/html/f...', 47, Array)
#1 /var/www/html/ford32/app/Views/user/info.php(47): print_r()
#2 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/info', Array, NULL)
#4 /var/www/html/ford32/app/Controllers/user/InfoController.php(29): view('user/info', Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-12-30 23:04:22 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\InfoController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(ErrorException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 23:04:23 --> print_r() expects at least 1 parameter, 0 given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r() expec...', '/var/www/html/f...', 47, Array)
#1 /var/www/html/ford32/app/Views/user/info.php(47): print_r()
#2 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/info', Array, NULL)
#4 /var/www/html/ford32/app/Controllers/user/InfoController.php(29): view('user/info', Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-12-30 23:04:23 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\InfoController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(ErrorException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 23:04:23 --> print_r() expects at least 1 parameter, 0 given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r() expec...', '/var/www/html/f...', 47, Array)
#1 /var/www/html/ford32/app/Views/user/info.php(47): print_r()
#2 /var/www/html/ford32/system/View/View.php(236): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/info', Array, NULL)
#4 /var/www/html/ford32/app/Controllers/user/InfoController.php(29): view('user/info', Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-12-30 23:04:23 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\InfoController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(ErrorException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 23:15:23 --> Cannot unset string offsets
#0 /var/www/html/ford32/system/View/View.php(236): include()
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/info', Array, NULL)
#2 /var/www/html/ford32/app/Controllers/user/InfoController.php(29): view('user/info', Array)
#3 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#4 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#5 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 23:15:23 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\InfoController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Error), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Error))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 23:15:24 --> Cannot unset string offsets
#0 /var/www/html/ford32/system/View/View.php(236): include()
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/info', Array, NULL)
#2 /var/www/html/ford32/app/Controllers/user/InfoController.php(29): view('user/info', Array)
#3 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#4 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#5 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 23:15:24 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\InfoController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Error), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Error))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 23:15:27 --> Cannot unset string offsets
#0 /var/www/html/ford32/system/View/View.php(236): include()
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/info', Array, NULL)
#2 /var/www/html/ford32/app/Controllers/user/InfoController.php(29): view('user/info', Array)
#3 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#4 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#5 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 23:15:27 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\InfoController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Error), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Error))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 23:15:36 --> Cannot unset string offsets
#0 /var/www/html/ford32/system/View/View.php(236): include()
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/info', Array, NULL)
#2 /var/www/html/ford32/app/Controllers/user/InfoController.php(29): view('user/info', Array)
#3 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#4 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#5 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 23:15:36 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\InfoController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Error), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Error))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 23:15:37 --> Cannot unset string offsets
#0 /var/www/html/ford32/system/View/View.php(236): include()
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/info', Array, NULL)
#2 /var/www/html/ford32/app/Controllers/user/InfoController.php(29): view('user/info', Array)
#3 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#4 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#5 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 23:15:37 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\InfoController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Error), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Error))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-12-30 23:15:38 --> Cannot unset string offsets
#0 /var/www/html/ford32/system/View/View.php(236): include()
#1 /var/www/html/ford32/system/Common.php(176): CodeIgniter\View\View->render('user/info', Array, NULL)
#2 /var/www/html/ford32/app/Controllers/user/InfoController.php(29): view('user/info', Array)
#3 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\user\InfoController->index('3')
#4 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\user\InfoController))
#5 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-30 23:15:38 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\user\InfoController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Error), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Error))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
