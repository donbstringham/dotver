<?php

namespace spec\Donbstringham\Version\Domain\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SemanticVersionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Donbstringham\Version\Domain\Entity\SemanticVersion');
    }

    function it_has_getMajor_method()
    {
        $this->getMajor()->shouldBeInteger();
        $this->getMajor()->shouldEqual(0);
    }

    function it_has_getMinor_method()
    {
        $this->getMinor()->shouldBeInteger();
        $this->getMinor()->shouldEqual(1);
    }

    function it_has_getPatch_method()
    {
        $this->getPatch()->shouldBeInteger();
        $this->getPatch()->shouldEqual(0);
    }

    function it_has_getVersion_method()
    {
        $this->getVersion()->shouldBeString();
        $this->getVersion()->shouldEqual('0.1.0');
    }

    function it_has_toString_method()
    {
        $this->__toString()->shouldBeString();
        $this->__toString()->shouldEqual('0.1.0');
    }
}
