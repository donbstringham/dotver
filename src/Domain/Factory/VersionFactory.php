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

use Donbstringham\Version\Domain\Entity\SemanticVersion;
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
    /**
     * Function createService
     *
     * @return \Donbstringham\Version\Domain\Service\VersionService
     *
     * @access public
     */
    public function createService()
    {
        $semanticVersion = new SemanticVersion();
        $service = new VersionService($semanticVersion);
        return $service;
    }

    /**
     * Function createSemanticVersion
     *
     * @return \Donbstringham\Version\Domain\Entity\SemanticVersion
     *
     * @access public
     */
    public static function createSemanticVersion()
    {
        $semanticVersion = new SemanticVersion();
        return $semanticVersion;
    }
}
