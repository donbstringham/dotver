<?php
/**
 * File name: VersionService.php
 *
 * Project: dotver
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Donbstringham\Version\Domain\Service
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   MIT
 * @version   $Revision$
 * @link      https:/ems.ldschurch.org
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Donbstringham\Version\Domain\Service;

use Donbstringham\Version\Domain\Factory\VersionFactory;


/**
 * Class VersionService
 *
 * @category  PHP
 * @package   Donbstringham\Version\Domain\Service
 * @author    stringhamdb <stringhamdb@familysearch.org>
 * @copyright 2015 © Intellectual Reserve, Inc.
 * @license   Trademarked by Intellectual Reserve, Inc.
 * @version   Release: 0.1
 * @link      https:/ems.ldschurch.org
 */
class VersionService
{
    const GIT_TAG_COMMAND   = 'git tag';
    const VERSION_DELIMITER = '.';
    const VERSION_FILENAME  = '.ver';

    /**
     * @var \Donbstringham\Version\Domain\Factory\VersionFactory $factory
     * @access protected
     */
    protected $factory;

    /**
     * @var string $versionFileName
     * @access protected
     */
    protected $versionFileName;

    /**
     * @param \Donbstringham\Version\Domain\Factory\VersionFactory $factory
     */
    public function __construct($factory)
    {
        $this->factory = $factory;
        $this->versionFileName = $this::VERSION_FILENAME;
    }

    /**
     * Function getVersion
     *
     * @return \vierbergenlars\SemVer\version
     *
     * @access public
     */
    public function getVersion()
    {
        $version = parse_ini_file($this->versionFileName);
        $version = $version['VERSION'];

        if ($version === null) {
            $version = $this->getOutputFromGitTagCall();
        }

        return $this->factory->createVersion($version);
    }

    /**
     * Function getOutputFromGitTagCall
     *
     * @return string
     *
     * @access public
     */
    public function getOutputFromGitTagCall()
    {
        exec($this::GIT_TAG_COMMAND, $output);

        if (empty($output)) {
            return VersionFactory::DEFAULT_VERSION;
        }

        return $output[0];
    }
}
