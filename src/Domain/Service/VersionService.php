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
    const VERSION_DEFAULT   = '0.1.0';
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
     * @return \Donbstringham\Version\Domain\Entity\SemanticVersion
     *
     * @access public
     */
    public function getVersion()
    {
        try {
            $contents = parse_ini_file($this->versionFileName);
        } catch (\Exception $e) {
            $contents = $this->getOutputFromGitTagCall();
        }

        return $this->stringToSemanticVersion($contents);
    }

    /**
     * Function stringToSemanticVersion
     *
     * @param string $contents
     * @return \Donbstringham\Version\Domain\Entity\SemanticVersion
     *
     * @access public
     */
    public function stringToSemanticVersion($contents = '')
    {
        $pos = strpos($contents, $this::VERSION_DELIMITER);

        if ($pos === false) {
            return $this->factory->createSemanticVersion();
        }

        $pieces = explode($this::VERSION_DELIMITER, $contents);

        return $this->factory->createSemanticVersion(
            (int)$pieces[0],
            (int)$pieces[1],
            (int)$pieces[2]
        );
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
            return $this::VERSION_DEFAULT;
        }

        return $output[0];
    }
}
