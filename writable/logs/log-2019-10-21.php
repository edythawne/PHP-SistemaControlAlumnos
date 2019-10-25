<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-21 14:58:00 --> print_r(): Property access is not allowed yet
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', 'C:\\Apache24\\htd...', 17, Array)
#1 C:\Apache24\htdocs\ford32\app\Controllers\Home.php(17): print_r(Object(CodeIgniter\Database\MySQLi\Result))
#2 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\Home->index()
#3 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Apache24\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-10-21 14:59:44 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::getRowArray()
#0 C:\Apache24\htdocs\ford32\app\Controllers\Home.php(17): App\Models\AlumnoModel->getAllStudents()
#1 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\Home->index()
#2 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Apache24\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-21 14:59:47 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::getRowArray()
#0 C:\Apache24\htdocs\ford32\app\Controllers\Home.php(17): App\Models\AlumnoModel->getAllStudents()
#1 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\Home->index()
#2 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Apache24\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-21 14:59:50 --> Call to undefined method CodeIgniter\Database\MySQLi\Builder::getRowArray()
#0 C:\Apache24\htdocs\ford32\app\Controllers\Home.php(17): App\Models\AlumnoModel->getAllStudents()
#1 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\Home->index()
#2 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#3 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Apache24\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-21 15:00:11 --> print_r(): Property access is not allowed yet
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', 'C:\\Apache24\\htd...', 17, Array)
#1 C:\Apache24\htdocs\ford32\app\Controllers\Home.php(17): print_r(Object(CodeIgniter\Database\MySQLi\Result))
#2 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\Home->index()
#3 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Home))
#4 C:\Apache24\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Apache24\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
