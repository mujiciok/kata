<?php

final class MyTestCase extends TestCase {
    private function assertEquivalent(array $expected, array $actual, string $msg = '') {
        sort($expected);
        sort($actual);
        $this->assertSame($expected, $actual, $msg);
    }
    public function testDescriptionExamples() {
        $this->assertEquivalent(['a'], permutations('a'));
        $this->assertEquivalent(['ab', 'ba'], permutations('ab'));
        $this->assertEquivalent(['abc', 'acb', 'bac', 'bca', 'cab', 'cba'], permutations('abc'));
        $this->assertEquivalent(['aabb', 'abab', 'abba', 'baab', 'baba', 'bbaa'], permutations('aabb'));
        $this->assertEquivalent(['abcc', 'acbc', 'accb', 'bacc', 'bcac', 'bcca', 'cabc', 'cacb', 'cbac', 'cbca', 'ccab', 'ccba'], permutations('abcc'));
    }
}
