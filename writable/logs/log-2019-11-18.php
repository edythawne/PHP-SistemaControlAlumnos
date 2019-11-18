<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-11-18 08:18:44 --> CodeIgniter\Autoloader\Autoloader::main(): Failed opening required 'Dompdf/autoload.inc.php' (include_path='.:/usr/share/pear:/usr/share/php')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 08:19:16 --> CodeIgniter\Autoloader\Autoloader::main(): Failed opening required 'Dompdf/autoload.inc.php' (include_path='.:/usr/share/pear:/usr/share/php')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 08:27:54 --> Trait 'setasign\Fpdi\FpdiTrait' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:14:00 --> Trait 'setasign\Fpdi\FpdiTrait' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:14:04 --> Trait 'setasign\Fpdi\FpdiTrait' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:14:09 --> Trait 'setasign\Fpdi\FpdiTrait' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:14:14 --> Trait 'setasign\Fpdi\FpdiTrait' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:25:26 --> Temporary files directory "/var/www/html/ford32/app/Libraries/mpdf/src/Config/../../tmp" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('/var/www/html/f...')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct()
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(115): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 09:25:26 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:27:49 --> Temporary files directory "/var/www/html/ford32/app/Libraries/mpdf/src/Config/../../tmp" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('/var/www/html/f...')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct()
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(115): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 09:27:49 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:32:17 --> Temporary files directory "/var/www/html/ford32/app/Libraries/mpdf/src/Config/../../tmp" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('/var/www/html/f...')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct()
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(116): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 09:32:17 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:41:20 --> Temporary files directory "/var/www/html/ford32/app/Libraries/mpdf/src/Config/../../tmp" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('/var/www/html/f...')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct()
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(115): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 09:41:20 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:46:24 --> Temporary files directory "/var/www/html/ford32/app/Libraries/mpdf/src/Config/../../tmp" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('/var/www/html/f...')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct()
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(115): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 09:46:24 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:46:52 --> Temporary files directory "/var/www/html/ford32/app/Libraries/mpdf/src/Config/../../tmp" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('/var/www/html/f...')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct()
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(115): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 09:46:52 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:46:59 --> Temporary files directory "/var/www/html/ford32/app/Libraries/mpdf/src/Config/../../tmp" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('/var/www/html/f...')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct()
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(115): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 09:46:59 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:56:25 --> Temporary files directory "/var/www/html/ford32/app/Libraries/mpdf/src/Config/../../tmp" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('/var/www/html/f...')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct()
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(116): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 09:56:26 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:57:19 --> Temporary files directory "http://127.0.0.1/ford32/writable/logs/" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('http://127.0.0....')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct(Array)
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(116): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 09:57:19 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:57:29 --> Temporary files directory "http://127.0.0.1/ford32/writable/logs/" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('http://127.0.0....')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct(Array)
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(116): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 09:57:29 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 09:58:04 --> Temporary files directory "http://127.0.0.1/ford32/writable/logs/" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('http://127.0.0....')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct(Array)
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(116): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 09:58:04 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-11-18 10:07:41 --> Temporary files directory "/var/www/html/ford32/app/Libraries/mpdf/src/Config/../../tmp" is not writable
#0 /var/www/html/ford32/app/Libraries/mpdf/src/ServiceFactory.php(59): Mpdf\Cache->__construct('/var/www/html/f...')
#1 /var/www/html/ford32/app/Libraries/mpdf/src/Mpdf.php(1051): Mpdf\ServiceFactory->getServices(Object(App\Libraries\MpdfLib), Object(Psr\Log\NullLogger), Array, 0, Object(Mpdf\Language\LanguageToFont), Object(Mpdf\Language\ScriptToLanguage), NULL, NULL, NULL, NULL)
#2 /var/www/html/ford32/app/Libraries/MpdfLib.php(15): Mpdf\Mpdf->__construct()
#3 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(116): App\Libraries\MpdfLib->__construct()
#4 /var/www/html/ford32/app/Controllers/app/reports/ReportController.php(93): App\Controllers\app\reports\ReportController->pdfRender(Array)
#5 /var/www/html/ford32/system/CodeIgniter.php(847): App\Controllers\app\reports\ReportController->validarReporteGenerador()
#6 /var/www/html/ford32/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\app\reports\ReportController))
#7 /var/www/html/ford32/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 /var/www/html/ford32/index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-11-18 10:07:42 --> Uncaught ErrorException: print_r(): Property access is not allowed yet in /var/www/html/ford32/app/Views/errors/html/error_exception.php:100
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'print_r(): Prop...', '/var/www/html/f...', 100, Array)
#1 /var/www/html/ford32/app/Views/errors/html/error_exception.php(100): print_r(Object(App\Controllers\app\reports\ReportController), true)
#2 /var/www/html/ford32/system/Debug/Exceptions.php(298): include('/var/www/html/f...')
#3 /var/www/html/ford32/system/Debug/Exceptions.php(171): CodeIgniter\Debug\Exceptions->render(Object(Mpdf\MpdfException), 500)
#4 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(Mpdf\MpdfException))
#5 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
