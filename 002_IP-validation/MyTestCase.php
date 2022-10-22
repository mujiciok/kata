<?php

class MyTestCase extends TestCase
{
    public function testValid()
    {
        $valid = [
            '0.0.0.0',
            '255.255.255.255',
            '238.46.26.43',
            '0.34.82.53',
        ];

        foreach ($valid as $input) {
            $this->assertTrue(isValidIP($input), "Failed asserting that '$input' is a valid IP4 address.");
        }
    }

    public function testInvalid()
    {
        $invalid = [
            '',
            'abc.def.ghi.jkl',
            '123.456.789.0',
            ' 1.2.3.4',
            '03.45.20.1',
            '192.168.00.3'
        ];

        foreach($invalid as $input) {
            $this->assertFalse(isValidIP($input), "Failed asserting that '$input' is an invalid IP4 address.");
        }
    }
}
