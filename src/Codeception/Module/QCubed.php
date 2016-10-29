<?php
namespace Codeception\Module;

//use Codeception\Configuration;
//use Codeception\Exception\ModuleConfigException;
//use Codeception\Exception\ModuleException;
use Codeception\Lib\Framework;
//use Codeception\Lib\Interfaces\ActiveRecord;
//use Codeception\Lib\Interfaces\PartedModule;
//use Codeception\Lib\Notification;
//use Codeception\TestInterface;

/**
 * This module provides integration with [QCubed framework](http://qcu.be/) (3.0).
 * It initializes QCubed framework in test environment and provides actions for functional testing.
 *
 * You can use this module by setting params in your functional.suite.yml:
 *
 * ```yaml
 * class_name: FunctionalTester
 * modules:
 *     enabled:
 *         - QCubed:
 * ```
 *
 * ### Example (`functional.suite.yml`)
 *
 * ```yml
 * class_name: FunctionalTester
 * modules:
 *   enabled:
 *      - QCubed:
 * ```
 *
 * ### Example (`unit.suite.yml`)
 *
 * ```yml
 * class_name: UnitTester
 * modules:
 *   enabled:
 *      - Asserts
 *      - QCubed:
 * ```
 *
 * ### Example (`acceptance.suite.yml`)
 *
 * ```yml
 * class_name: AcceptanceTester
 * modules:
 *     enabled:
 *         - WebDriver:
 *             url: http://127.0.0.1:8080/
 *             browser: firefox
 *         - QCubed:
 * ```
 *
 * ## Status
 *
 * Maintainer: **olegabr**
 * Stability: **alpha**
 *
 */
class QCubed extends Framework// implements ActiveRecord, PartedModule
{

    /**
     * Application config file must be set.
     * @var array
     */
    protected $config = [
//        'cleanup'     => false,
//        'entryScript' => '',
//        'entryUrl'    => 'http://localhost/index-test.php',
    ];

    public function _initialize()
    {
    }

    public function _before(\Codeception\TestInterface $test)
    {
    }

    public function _after(\Codeception\TestInterface $test)
    {
    }

    /**
     * Returns all loaded fixtures.
     * Array of fixture instances
     *
     * @part fixtures
     * @return array
     */
    public function grabControl($strControlId)
    {
		if (!isset($_FORM) || !$_FORM) {
			return null;
		}
		return $_FORM->GetControl($strControlId);
    }

}
