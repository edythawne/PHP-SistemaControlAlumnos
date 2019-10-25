<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-24 01:10:49 --> Unknown database 'ford32_school'
#0 C:\apache\htdocs\ford32\system\Database\BaseConnection.php(376): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 C:\apache\htdocs\ford32\system\Database\BaseConnection.php(642): CodeIgniter\Database\BaseConnection->initialize()
#2 C:\apache\htdocs\ford32\system\Database\BaseBuilder.php(1782): CodeIgniter\Database\BaseConnection->query('SELECT `idDocen...', Array, false)
#3 C:\apache\htdocs\ford32\app\Models\AlumnoModel.php(85): CodeIgniter\Database\BaseBuilder->get()
#4 C:\apache\htdocs\ford32\app\Controllers\app\reports\ListReportController.php(46): App\Models\AlumnoModel->getDirector()
#5 C:\apache\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\app\reports\ListReportController->report2()
#6 C:\apache\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ListReportController))
#7 C:\apache\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\apache\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
