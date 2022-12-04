<?php

class MyTest extends TestCase
{
    public function testThatSomethingShouldHappen() {
        $this->assertSame(false, generateHashtag(''), 'Expected an empty string to return false');
        $this->assertSame(false, generateHashtag(str_repeat(' ', 200)), "Still an empty string");
        $this->assertSame('#Codewars', generateHashtag('Codewars'), 'Should handle a single word and add a hashtag at the beginning.');
        $this->assertSame('#Codewars', generateHashtag('Codewars      '), 'Should handle trailing whitespace.');
        $this->assertSame('#CodewarsIsNice', generateHashtag('Codewars Is Nice'), 'Should remove spaces.');
        $this->assertSame('#CodewarsIsNice', generateHashtag('codewars is nice'), 'Should capitalize first letters of words.');
        $this->assertSame('#CodeWars', generateHashtag('Code' . str_repeat(' ', 140) . 'wars'));
        $this->assertSame(false, generateHashtag('Looooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooong Cat'), 'Should return false if the final word is longer than 140 chars.');
        $this->assertSame("#A" . str_repeat("a", 138), generateHashtag(str_repeat("a", 139)), "Should work");
        $this->assertSame(false, generateHashtag(str_repeat("a", 140)), "Too long");
    }
}
