<?php
use Step\Acceptance\Admin as AdminTester;

class FirstCest
{

    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('nguyendamanhtho@gmail.com','0355267219tho');

    }
}
