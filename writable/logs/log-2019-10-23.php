CRITICAL - 2019-10-23 20:11:27 --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 67125248 bytes)
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-10-23 20:12:52 --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 67125248 bytes)
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-10-23 20:12:58 --> Allowed memory size of 134217728 bytes exhausted (tried to allocate 67125248 bytes)
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-10-23 20:49:31 --> Invalid file: {0}
#0 C:\apache\htdocs\ford32\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('reports/report1...')
#1 C:\apache\htdocs\ford32\system\Common.php(175): CodeIgniter\View\View->render('reports/report1', Array, true)
#2 C:\apache\htdocs\ford32\app\Controllers\app\reports\ListReport.php(33): view('reports/report1', Array, Array)
#3 C:\apache\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\app\reports\ListReport->index()
#4 C:\apache\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ListReport))
#5 C:\apache\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\apache\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-10-23 23:38:11 --> Unknown column 'apellidos' in 'field list'
#0 C:\apache\htdocs\ford32\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT `idDocen...')
#1 C:\apache\htdocs\ford32\system\Database\BaseConnection.php(737): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `idDocen...')
#2 C:\apache\htdocs\ford32\system\Database\BaseConnection.php(665): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `idDocen...')
#3 C:\apache\htdocs\ford32\system\Database\BaseBuilder.php(1782): CodeIgniter\Database\BaseConnection->query('SELECT `idDocen...', Array, false)
#4 C:\apache\htdocs\ford32\app\Models\AlumnoModel.php(85): CodeIgniter\Database\BaseBuilder->get()
#5 C:\apache\htdocs\ford32\app\Controllers\app\reports\ListReportController.php(46): App\Models\AlumnoModel->getDirector()
#6 C:\apache\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\app\reports\ListReportController->report2()
#7 C:\apache\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ListReportController))
#8 C:\apache\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\apache\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-10-23 23:39:52 --> Unknown column 'apellidos' in 'field list'
#0 C:\apache\htdocs\ford32\system\Database\MySQLi\Connection.php(329): mysqli->query('SELECT `idDocen...')
#1 C:\apache\htdocs\ford32\system\Database\BaseConnection.php(737): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `idDocen...')
#2 C:\apache\htdocs\ford32\system\Database\BaseConnection.php(665): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `idDocen...')
#3 C:\apache\htdocs\ford32\system\Database\BaseBuilder.php(1782): CodeIgniter\Database\BaseConnection->query('SELECT `idDocen...', Array, false)
#4 C:\apache\htdocs\ford32\app\Models\AlumnoModel.php(85): CodeIgniter\Database\BaseBuilder->get()
#5 C:\apache\htdocs\ford32\app\Controllers\app\reports\ListReportController.php(46): App\Models\AlumnoModel->getDirector()
#6 C:\apache\htdocs\ford32\system\CodeIgniter.php(844): App\Controllers\app\reports\ListReportController->report2()
#7 C:\apache\htdocs\ford32\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ListReportController))
#8 C:\apache\htdocs\ford32\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\apache\htdocs\ford32\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
