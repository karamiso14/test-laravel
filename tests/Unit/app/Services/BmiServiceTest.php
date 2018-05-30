<?php

namespace Tests\Unit\app\Services;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BmiServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCalcBmi($height, $weight, $result)
    {
        $bmiService = new BmiService();
        $method = new \RefrectionMethod(get_class($bmiService), 'calcBmi');
        $method->setAccessible(true);
        $actual = $method->invoke($bmiService, $height, $weight);
        $tehis->assertEquals($result, $actual, '', 0.2);
    }

    public function testGetBmi($height, $weight, $result)
    {
        $person = new Person();
        $person->height = $height;
        $person->weight = $weight;
        $actual = BmiService::getBmi($person);
        $this->assertEquals($result, $actual, '', 0.2);
    }

    public function bmiDataProvider()
    {
        return [
            [1.5, 60, 23.4735],
            [1.8, 80, 24.6941],
            [1, 0, false],
            [0, 50, false],
        ];
    }
}
