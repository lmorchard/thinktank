<?php
require_once 'init.tests.php';
require_once $SOURCE_ROOT_PATH.'extlib/simpletest/autorun.php';
require_once $SOURCE_ROOT_PATH.'extlib/simpletest/web_tester.php';
require_once $SOURCE_ROOT_PATH.'extlib/simpletest/mock_objects.php';

/* MODEL TESTS */
require_once $SOURCE_ROOT_PATH.'tests/TestOfConfig.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfCrawler.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfDatabase.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfFollowMySQLDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfInstanceMySQLDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfLinkMySQLDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfLogger.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfMySQLDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfOwnerMySQLDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfOwnerInstanceDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfPluginDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfPluginHook.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfPostMySQLDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfPostErrorMySQLDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfSmartyThinkTank.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfUserMySQLDAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfUtils.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfPDODAO.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfDAOFactory.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfWebapp.php';

$model_tests = & new GroupTest('Model tests');
$model_tests->addTestCase(new TestOfLogger());
$model_tests->addTestCase(new TestOfPDODAO());
$model_tests->addTestCase(new TestOfDAOFactory());
$model_tests->addTestCase(new TestOfConfig());
$model_tests->addTestCase(new TestOfCrawler());
$model_tests->addTestCase(new TestOfDatabase());
$model_tests->addTestCase(new TestOfFollowMySQLDAO());
$model_tests->addTestCase(new TestOfInstanceMySQLDAO());
$model_tests->addTestCase(new TestOfLinkMySQLDAO());
$model_tests->addTestCase(new TestOfMySQLDAO());
$model_tests->addTestCase(new TestOfOwnerMySQLDAO());
$model_tests->addTestCase(new TestOfOwnerInstanceDAO());
$model_tests->addTestCase(new TestOfPluginDAO());
$model_tests->addTestCase(new TestOfPluginHook());
$model_tests->addTestCase(new TestOfPostMySQLDAO());
$model_tests->addTestCase(new TestOfPostErrorMySQLDAO());
$model_tests->addTestCase(new TestOfSmartyThinkTank());
$model_tests->addTestCase(new TestOfUserMySQLDAO());
$model_tests->addTestCase(new TestOfUtils());
$model_tests->addTestCase(new TestOfWebapp());
$model_tests->run( new TextReporter());
