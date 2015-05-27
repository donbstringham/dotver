<?php
/**
 * File name: version-service.spec.php
 *
 * Project: dotver
 *
 * PHP version 5
 *
 * @category  PHP
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   MIT
 * @version   $Revision$
 * @link      http://donbstringham.us
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

use Donbstringham\Version\Domain\Factory\VersionFactory;
use Donbstringham\Version\Domain\Service\VersionService;

describe('VersionService', function() {
    beforeEach(function() {
        $factory = new VersionFactory();
        $this->service = new VersionService($factory);
        $this->semVer = $this->service->getVersion();
    });
    describe('->getVersion()', function() {
        it('should return "git tag" version number', function() {
            expect($this->semVer)->a->instanceof(
                '\Donbstringham\Version\Domain\Entity\SemanticVersion'
            );
        });
        it('should return default value of 0.1.0', function() {
            expect($this->semVer->getVersion())->equal('0.1.0');
        });
    });
});
