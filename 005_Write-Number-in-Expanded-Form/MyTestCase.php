<?php

class MyTestCase extends TestCase {
    public function testDescriptionExamples() {
        $this->assertSame("10 + 2", expanded_form(12));
        $this->assertSame("40 + 2", expanded_form(42));
        $this->assertSame("70000 + 300 + 4", expanded_form(70304));
    }
}
