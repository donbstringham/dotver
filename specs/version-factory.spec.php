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
    describe('->createVersion("1.2.3")', function() {
        it('should return a version object', function() {
            $factory = new VersionFactory();
            $semver = $factory->createVersion('1.2.3');

            expect($semver)->to->be->instanceof(
                'vierbergenlars\SemVer\version'
            );
        });
        it('should have a major number of 1', function() {
            $factory = new VersionFactory();
            $semver = $factory->createVersion('1.2.3');

            expect($semver->getMajor())->to->be->a('integer');
            expect($semver->getMajor())->to->equal(1);
        });
        it('should have a minor number of 2', function() {
            $factory = new VersionFactory();
            $semver = $factory->createVersion('1.2.3');

            expect($semver->getMinor())->to->be->a('integer');
            expect($semver->getMinor())->to->equal(2);
        });
        it('should have a patch number of 3', function() {
            $factory = new VersionFactory();
            $semver = $factory->createVersion('1.2.3');

            expect($semver->getPatch())->to->be->a('integer');
            expect($semver->getPatch())->to->equal(3);
        });
        it('should have a value of 1.2.3', function() {
            $factory = new VersionFactory();
            $semver = $factory->createVersion('1.2.3');

            expect($semver->getVersion())->to->equal('1.2.3');
        });
    });
    describe('->createVersion("x.y.z")', function() {
        it('should return NULL for invalid "a.b.c."', function() {
            $factory = new VersionFactory();
            $semver = $factory->createVersion('a.b.c');

            expect($semver)->to->be->null;
        });
        it('should return NULL for invalid "1.2"', function() {
            $factory = new VersionFactory();
            $semver = $factory->createVersion('1.2');

            expect($semver)->to->be->null;
        });
        it('should return NULL for invalid "1.2.z"', function() {
            $factory = new VersionFactory();
            $semver = $factory->createVersion('1.2.z');

            expect($semver)->to->be->null;
        });
        it('should return NULL for invalid "x.2.3"', function() {
            $factory = new VersionFactory();
            $semver = $factory->createVersion('x.2.3');

            expect($semver)->to->be->null;
        });
    });
    describe('->createDefaultVersion()', function() {
        it('should return a version object', function() {
            $factory = new VersionFactory();
            $semver = $factory->createDefaultVersion();

            expect($semver)->to->be->instanceof(
                'vierbergenlars\SemVer\version'
            );
        });
        it('should have a major number of 0', function() {
            $factory = new VersionFactory();
            $semver = $factory->createDefaultVersion();

            expect($semver->getMajor())->to->be->a('integer');
            expect($semver->getMajor())->to->equal(0);
        });
        it('should have a minor number of 1', function() {
            $factory = new VersionFactory();
            $semver = $factory->createDefaultVersion();

            expect($semver->getMinor())->to->be->a('integer');
            expect($semver->getMinor())->to->equal(1);
        });
        it('should have a patch number of 0', function() {
            $factory = new VersionFactory();
            $semver = $factory->createDefaultVersion();

            expect($semver->getPatch())->to->be->a('integer');
            expect($semver->getPatch())->to->equal(0);
        });
        it('should have a default value of 0.1.0', function() {
            $factory = new VersionFactory();
            $semver = $factory->createDefaultVersion();

            expect($semver->getVersion())->to->equal('0.1.0');
        });
    });
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
