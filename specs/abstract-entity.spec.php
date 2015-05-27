<?php
/**
 * File name: abstract-entity.spec.php
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

use Donbstringham\Version\Domain\Entity\AbstractEntity;

describe('AbstractEntity', function() {
    describe('->setId()', function() {
        it('should set the ID to 101767 correctly', function() {
            $id = 101767;
            $abstractEntity = new AbstractEntity();

            expect($abstractEntity->setId($id))->to->be->a->instanceof(
                'Donbstringham\Version\Domain\Entity\AbstractEntity'
            );
            expect($abstractEntity->getId())->to->be->equal($id);
        });
    });
});
