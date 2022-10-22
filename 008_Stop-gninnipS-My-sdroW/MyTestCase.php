<?php

class MyTestCase extends TestCase
{
    public function testBasicTests() {
        $this->assertSame("emocleW", spinWords("Welcome"));
        $this->assertSame("Hey wollef sroirraw", spinWords("Hey fellow warriors"));
        $this->assertSame("This is a test", spinWords("This is a test"));
        $this->assertSame("This is rehtona test", spinWords("This is another test"));
        $this->assertSame("You are tsomla to the last test", spinWords("You are almost to the last test"));
        $this->assertSame("Just gniddik ereht is llits one more", spinWords("Just kidding there is still one more"));
        $this->assertSame("ylsuoireS this is the last one", spinWords("Seriously this is the last one"));
    }
}
