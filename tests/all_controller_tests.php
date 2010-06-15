<?php
require_once 'init.tests.php';
require_once $SOURCE_ROOT_PATH.'extlib/simpletest/autorun.php';
require_once $SOURCE_ROOT_PATH.'extlib/simpletest/web_tester.php';
require_once $SOURCE_ROOT_PATH.'extlib/simpletest/mock_objects.php';

/* CONTROLLER TESTS */
require_once $SOURCE_ROOT_PATH.'tests/TestOfPublicTimelineController.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfPrivateDashboardController.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfPostController.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfTestController.php';
require_once $SOURCE_ROOT_PATH.'tests/TestOfTestAuthController.php';

$controller_tests = & new GroupTest('Controller tests');
$controller_tests->addTestCase(new TestOfPublicTimelineController());
$controller_tests->addTestCase(new TestOfPrivateDashboardController());
$controller_tests->addTestCase(new TestOfPostController());
$controller_tests->addTestCase(new TestOfTestController());
$controller_tests->addTestCase(new TestOfTestAuthController());
$controller_tests->run( new TextReporter());
