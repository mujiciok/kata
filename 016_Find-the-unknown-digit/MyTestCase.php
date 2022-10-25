<?php

final class MyTestCase extends TestCase {
    public function testExamples() {
        $this->assertSame(2, solve_expression('1+1=?'));
        $this->assertSame(6, solve_expression('123*45?=5?088'));
        $this->assertSame(0, solve_expression('-5?*-1=5?'));
        $this->assertSame(-1, solve_expression('19--45=5?'));
        $this->assertSame(5, solve_expression('??*??=302?'));
        $this->assertSame(2, solve_expression('?*11=??'));
        $this->assertSame(2, solve_expression('??*1=??'));
    }
}
