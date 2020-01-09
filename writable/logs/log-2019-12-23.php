<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-12-23 17:40:24 --> You must set the database table to be used with your query.
#0 /var/www/html/ford32/system/Model.php(1182): CodeIgniter\Database\BaseConnection->table(NULL)
#1 /var/www/html/ford32/system/Model.php(1673): CodeIgniter\Model->builder()
#2 /var/www/html/ford32/app/Controllers/HomeController.php(23): CodeIgniter\Model->__call('getNumeroAlumno...', Array)
#3 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#4 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#5 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-12-23 17:40:24 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
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
CRITICAL - 2019-12-23 17:48:50 --> In aggregated query without GROUP BY, expression #1 of SELECT list contains nonaggregated column 'Ford32_school.Grupos.idGrupo'; this is incompatible with sql_mode=only_full_group_by
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Grupos`...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Grupos`...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Grupos`...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Grupos`...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(84): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/HomeController.php(22): App\Models\AlumnoModel->getInfGrados()
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-23 17:48:53 --> In aggregated query without GROUP BY, expression #1 of SELECT list contains nonaggregated column 'Ford32_school.Grupos.idGrupo'; this is incompatible with sql_mode=only_full_group_by
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Grupos`...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Grupos`...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Grupos`...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Grupos`...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(84): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/HomeController.php(22): App\Models\AlumnoModel->getInfGrados()
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-23 17:48:54 --> In aggregated query without GROUP BY, expression #1 of SELECT list contains nonaggregated column 'Ford32_school.Grupos.idGrupo'; this is incompatible with sql_mode=only_full_group_by
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT `Grupos`...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `Grupos`...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `Grupos`...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `Grupos`...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(84): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/HomeController.php(22): App\Models\AlumnoModel->getInfGrados()
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-23 17:49:30 --> In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'Ford32_school.Grupos.grado'; this is incompatible with sql_mode=only_full_group_by
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT ANY_VALU...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT ANY_VALU...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT ANY_VALU...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT ANY_VALU...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(84): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/HomeController.php(22): App\Models\AlumnoModel->getInfGrados()
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-12-23 17:49:31 --> In aggregated query without GROUP BY, expression #2 of SELECT list contains nonaggregated column 'Ford32_school.Grupos.grado'; this is incompatible with sql_mode=only_full_group_by
#0 /var/www/html/ford32/system/Database/MySQLi/Connection.php(330): mysqli->query('SELECT ANY_VALU...')
#1 /var/www/html/ford32/system/Database/BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT ANY_VALU...')
#2 /var/www/html/ford32/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT ANY_VALU...')
#3 /var/www/html/ford32/system/Database/BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT ANY_VALU...', Array, false)
#4 /var/www/html/ford32/app/Models/AlumnoModel.php(84): CodeIgniter\Database\BaseBuilder->get()
#5 /var/www/html/ford32/app/Controllers/HomeController.php(22): App\Models\AlumnoModel->getInfGrados()
#6 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\HomeController->index()
#7 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#8 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
