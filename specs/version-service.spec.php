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
    describe('->getOutputFromGitTagCall()', function() {
        it('should return "git tag" version number', function() {
            exec('git tag', $output);
            $expected = empty($output) ? '0.1.0' : $output[0];

            $factory = new VersionFactory();
            $service = new VersionService($factory);

            expect($service->getOutputFromGitTagCall())->equal($expected);
        });
    });
    describe('->getVersion()', function() {
        it('should return a version object', function() {

            $factory = new VersionFactory();
            $service = new VersionService($factory);
            $semver = $service->getVersion();

            expect($semver)->a->instanceof(
                '\vierbergenlars\SemVer\version'
            );
        });

        exec('git tag', $output);
        $expected = empty($output) ? '0.1.0' : $output[0];

        it('should return a value of '.$expected, function() {
            exec('git tag', $output);
            $expected = empty($output) ? '0.1.0' : $output[0];

            $factory = new VersionFactory();
            $service = new VersionService($factory);

            $semVer = $service->getVersion();
            $version = $semVer->getVersion();

            expect($version)->equal($expected, 'returned '.$version);
        });
    });
});
