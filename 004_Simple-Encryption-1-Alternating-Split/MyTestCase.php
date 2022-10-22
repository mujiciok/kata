<?php

class MyTestCase extends TestCase
{
    public function testEncryptExampleTests() {
        $this->assertSame("This is a test!", encrypt("This is a test!", 0));
        $this->assertSame("hsi  etTi sats!", encrypt("This is a test!", 1));
        $this->assertSame("s eT ashi tist!", encrypt("This is a test!", 2));
        $this->assertSame(" Tah itse sits!", encrypt("This is a test!", 3));
        $this->assertSame("This is a test!", encrypt("This is a test!", 4));
        $this->assertSame("This is a test!", encrypt("This is a test!", -1));
        $this->assertSame("hskt svr neetn!Ti aai eyitrsig", encrypt("This kata is very interesting!", 1));
    }
    public function testDecryptExampleTests() {
        $this->assertSame("This is a test!", decrypt("This is a test!", 0));
        $this->assertSame("This is a test!", decrypt("hsi  etTi sats!", 1));
        $this->assertSame("This is a test!", decrypt("s eT ashi tist!", 2));
        $this->assertSame("This is a test!", decrypt(" Tah itse sits!", 3));
        $this->assertSame("This is a test!", decrypt("This is a test!", 4));
        $this->assertSame("This is a test!", decrypt("This is a test!", -1));
        $this->assertSame("This kata is very interesting!", decrypt("hskt svr neetn!Ti aai eyitrsig", 1));
    }
    public function testNullorEmpty() {
        $this->assertSame("", encrypt("", 0));
        $this->assertSame("", decrypt("", 0));
        $this->assertSame(null, encrypt(null, 0));
        $this->assertSame(null, decrypt(null, 0));
    }
}
