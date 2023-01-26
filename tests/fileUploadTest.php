<?php
use PHPUnit\Framework\TestCase;
use FileUpload\FileUpload;

class fileUploadTest extends TestCase {
    public function setUp() : void {
        $this->fu = new FileUpload();
    }

    public function tearDown() : void {
        unset($this->Receipt);
    }

    public function testInitiateClass()
    {
        $this->assertTrue(true);
        $this->assertInstanceOf("FileUpload\FileUpload", $this->fu);
    }

    public function testWriteFile(): void
    {
        //Given
        //Given this world (the setup)

        //When
        //When this happens

        //Then
        //Then the following should be true
        $this->assertFileExists('./uploadfiles/imageTestFile.jpg');
    }

}