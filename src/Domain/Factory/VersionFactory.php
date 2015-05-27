<?php
/**
 * File name: SemanticVersionFactory.php
 *
 * Project: dotver
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Donbstringham\Version\Domain\Factory
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   MIT
 * @version   $Revision$
 * @link      http://donbstringham.us
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Donbstringham\Version\Domain\Factory;

use vierbergenlars\SemVer\version;
use Donbstringham\Version\Domain\Service\VersionService;

/**
 * Class SemanticVersionFactory
 *
 * @category  PHP
 * @package   Donbstringham\Version\Domain\Factory
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   MIT
 * @version   Release: 0.1
 * @link      http://donbstringham.us
 */
class VersionFactory
{
    const DEFAULT_VERSION = '0.1.0';

    /**
     * Function createService
     *
     * @return \Donbstringham\Version\Domain\Service\VersionService
     *
     * @access public
     */
    public function createService()
    {
        $service = new VersionService($this);
        return $service;
    }

    /**
     * Function createVersion
     *
     * @param string $version
     * @return null|\vierbergenlars\SemVer\version
     *
     * @access public
     */
    public function createVersion($version = '')
    {
        try {
            $semver = new version($version);
        } catch (\Exception $e) {
            $semver = null;
        }

        return $semver;
    }

    /**
     * Function createDefaultVersion
     *
     * @return \vierbergenlars\SemVer\version
     *
     * @access public
     */
    public function createDefaultVersion()
    {
        $semver = new version(self::DEFAULT_VERSION);
        return $semver;
    }
}
