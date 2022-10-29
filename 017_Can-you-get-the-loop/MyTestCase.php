<?php

class MyTestCase extends TestCase {
    public function testFixed() {
        $this->assertSame(1, loop_size(Node::createChain(0, 1)));
        $this->assertSame(23, loop_size(Node::createChain(8778, 23)));
        $this->assertSame(8778, loop_size(Node::createChain(23, 8778)));
    }
}
