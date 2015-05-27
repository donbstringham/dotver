<?php
/**
 * File name: version-factory.spec.php
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

describe('VersionFactory', function() {
    describe('->createSemanticVersion()', function() {
        it('should return a SemanticVersion object', function() {
            $factory = new VersionFactory();
            $semVer = $factory->createSemanticVersion();

            expect($semVer)->to->be->instanceof(
                'Donbstringham\Version\Domain\Entity\SemanticVersion'
            );
        });
        it('should have a major number of 0', function() {
            $factory = new VersionFactory();
            $semVer = $factory->createSemanticVersion();

            expect($semVer->getMajor())->to->be->a('integer');
            expect($semVer->getMajor())->to->equal(0);
        });
        it('should have a minor number of 1', function() {
            $factory = new VersionFactory();
            $semVer = $factory->createSemanticVersion();

            expect($semVer->getMinor())->to->be->a('integer');
            expect($semVer->getMinor())->to->equal(1);
        });
        it('should have a patch number of 0', function() {
            $factory = new VersionFactory();
            $semVer = $factory->createSemanticVersion();

            expect($semVer->getPatch())->to->be->a('integer');
            expect($semVer->getPatch())->to->equal(0);
        });
        it('should have a default value of 0.1.0', function() {
            $factory = new VersionFactory();
            $semVer = $factory->createSemanticVersion();

            expect($semVer->getVersion())->to->equal('0.1.0');
        });
    });
});

describe('VersionFactory', function() {
    describe('->createService()', function() {
        it('should return a VersionService object', function() {
            $factory = new VersionFactory();
            $service = $factory->createService();

            expect($service)->to->be->instanceof(
                'Donbstringham\Version\Domain\Service\VersionService'
            );
        });
    });
});
