<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-26 11:16:33 --> Too few arguments to function CodeIgniter\Database\BaseBuilder::join(), 1 passed in C:\apache\htdocs\ford32\app\Models\AlumnoModel.php on line 81 and at least 2 expected
#0 C:\apache\htdocs\ford32\app\Models\AlumnoModel.php(81): CodeIgniter\Database\BaseBuilder->join('Alumnos.fk_grup...')
#1 C:\apache\htdocs\ford32\app\Controllers\app\reports\ListReportController.php(31): App\Models\AlumnoModel->getTodosAlumnosGrados()
#2 C:\apache\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\app\reports\ListReportController->index()
#3 C:\apache\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ListReportController))
#4 C:\apache\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\apache\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-10-26 11:16:35 --> Too few arguments to function CodeIgniter\Database\BaseBuilder::join(), 1 passed in C:\apache\htdocs\ford32\app\Models\AlumnoModel.php on line 81 and at least 2 expected
#0 C:\apache\htdocs\ford32\app\Models\AlumnoModel.php(81): CodeIgniter\Database\BaseBuilder->join('Alumnos.fk_grup...')
#1 C:\apache\htdocs\ford32\app\Controllers\app\reports\ListReportController.php(31): App\Models\AlumnoModel->getTodosAlumnosGrados()
#2 C:\apache\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\app\reports\ListReportController->index()
#3 C:\apache\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ListReportController))
#4 C:\apache\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\apache\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-10-26 13:51:36 --> Invalid file: {0}
#0 C:\apache\htdocs\ford32\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('reports/home.ph...')
#1 C:\apache\htdocs\ford32\system\Common.php(175): CodeIgniter\View\View->render('reports/home', Array, NULL)
#2 C:\apache\htdocs\ford32\app\Controllers\app\reports\ReportController.php(35): view('reports/home', Array)
#3 C:\apache\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\app\reports\ReportController->index()
#4 C:\apache\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#5 C:\apache\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\apache\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
