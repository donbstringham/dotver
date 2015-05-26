<?php

namespace spec\Donbstringham\Version\Domain\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class AbstractEntitySpec
 *
 * @category  PHP
 * @package   spec\Donbstringham\Version\Domain\Entity
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   MIT
 * @version   Release: 0.1
 * @link      http://donbstringham.us
 *
 * @mixin     \Donbstringham\Version\Domain\Entity\AbstractEntity
 */
class AbstractEntitySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Donbstringham\Version\Domain\Entity\AbstractEntity');
    }

    function it_sets_the_id()
    {
        $id = rand();

        $this->setId($id)->shouldHaveType(
            'Donbstringham\Version\Domain\Entity\AbstractEntity'
        );
        $this->getId()->shouldBeEqualTo($id);
    }
}
