<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-11-05 10:34:06 --> No such file or directory
#0 /var/www/html/ford32/system/Database/BaseConnection.php(376): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 /var/www/html/ford32/system/Database/BaseConnection.php(642): CodeIgniter\Database\BaseConnection->initialize()
#2 /var/www/html/ford32/system/Database/BaseBuilder.php(1782): CodeIgniter\Database\BaseConnection->query('SELECT `Grupos`...', Array, false)
#3 /var/www/html/ford32/app/Models/AlumnoModel.php(138): CodeIgniter\Database\BaseBuilder->get()
#4 /var/www/html/ford32/app/Controllers/HomeController.php(15): App\Models\AlumnoModel->getInfGrados()
#5 /var/www/html/ford32/system/CodeIgniter.php(844): App\Controllers\HomeController->index()
#6 /var/www/html/ford32/system/CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#7 /var/www/html/ford32/system/CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-05 10:34:07 --> No such file or directory
#0 /var/www/html/ford32/system/Database/BaseConnection.php(376): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 /var/www/html/ford32/system/Database/BaseConnection.php(642): CodeIgniter\Database\BaseConnection->initialize()
#2 /var/www/html/ford32/system/Database/BaseBuilder.php(1782): CodeIgniter\Database\BaseConnection->query('SELECT `Grupos`...', Array, false)
#3 /var/www/html/ford32/app/Models/AlumnoModel.php(138): CodeIgniter\Database\BaseBuilder->get()
#4 /var/www/html/ford32/app/Controllers/HomeController.php(15): App\Models\AlumnoModel->getInfGrados()
#5 /var/www/html/ford32/system/CodeIgniter.php(844): App\Controllers\HomeController->index()
#6 /var/www/html/ford32/system/CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\HomeController))
#7 /var/www/html/ford32/system/CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
