<?php
/**
 * File name: semantic-version.spec.php
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

use Donbstringham\Version\Domain\Entity\SemanticVersion;

describe('SemanticVersion', function() {
    describe('->setVersion()', function() {
        it('should set the semantic version number to 1.1.1 correctly', function() {
            $semVer = new SemanticVersion();

            expect($semVer->setVersion(1, 1, 1))->to->be->a->instanceof(
                '\Donbstringham\Version\Domain\Entity\SemanticVersion'
            );
            expect($semVer->__toString())->to->equal('1.1.1');
        });
    });
});
