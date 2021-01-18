<?php

namespace spec\mochan;

use PhpSpec\ObjectBehavior;
use mochan\Solution475;

class Solution475Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Solution475::class);
    }

    function it_test_1()
    {
        $houses = [1, 2, 3];
        $heaters = [2];
        $this->findRadius($houses, $heaters)->shouldBe(1);
    }

    function it_test_2()
    {
        $houses = [1, 3, 2];
        $heaters = [2];
        $this->findRadius($houses, $heaters)->shouldBe(1);
    }

    function it_test_3()
    {
        $houses = [1, 2, 3, 4];
        $heaters = [1, 4];
        $this->findRadius($houses, $heaters)->shouldBe(1);
    }

    function it_test_4()
    {
        $houses = [1, 5];
        $heaters = [2];
        $this->findRadius($houses, $heaters)->shouldBe(3);
    }

    function it_test_5()
    {
        $houses = [1, 5];
        $heaters = [10];
        $this->findRadius($houses, $heaters)->shouldBe(9);
    }

    function it_test_6()
    {
        $houses = [282475249, 622650073, 984943658, 144108930, 470211272, 101027544, 457850878, 458777923];
        $heaters = [823564440, 115438165, 784484492, 74243042, 114807987, 137522503, 441282327, 16531729, 823378840, 143542612];
        $this->findRadius($houses, $heaters)->shouldBe(161834419);
    }

    function it_test_7()
    {
        $houses = [474833169, 264817709, 998097157, 817129560];
        $heaters = [197493099, 404280278, 893351816, 505795335];
        $this->findRadius($houses, $heaters)->shouldBe(104745341);
    }
}
