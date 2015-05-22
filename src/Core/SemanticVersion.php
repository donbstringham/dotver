<?php
/**
 * File name: SemanticVersion.php
 *
 * Project: dotver
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Donbstringham\Common\Version\Core
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   MIT
 * @version   $Revision$
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Donbstringham\Common\Version\Core;

/**
 * Class SemanticVersion
 *
 * @category  PHP
 * @package   Donbstringham\Common\Version\Core
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   MIT
 * @version   $Revision$
 */
class SemanticVersion
{
    /** @var integer */
    protected $major;

    /** @var integer */
    protected $minor;

    /** @var integer */
    protected $patch;

    /**
     * @param int $major
     * @param int $minor
     * @param int $patch
     */
    public function __construct($major = 0, $minor = 1, $patch = 0)
    {
        $this->major = $major;
        $this->minor = $minor;
        $this->patch = $patch;
    }

    /**
     * Function getMajor
     *
     * @return int
     *
     * @access public
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * Function getMinor
     *
     * @return int
     *
     * @access public
     */
    public function getMinor()
    {
        return $this->minor;
    }

    /**
     * Function getPatch
     *
     * @return int
     *
     * @access public
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * Function getVersion
     *
     * @return string
     *
     * @access public
     */
    public function getVersion()
    {
        return $this->__toString();
    }

    /**
     * Function toString
     *
     * @return string
     *
     * @access public
     */
    public function __toString()
    {
        return $this->major . '.' . $this->minor . '.' . $this->patch;
    }
}
