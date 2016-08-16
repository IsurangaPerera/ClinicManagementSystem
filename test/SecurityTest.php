<?php
require '../include/security/security1.php';
class SecurityTest extends PHPUnit_Framework_TestCase {

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    public function testAdd() {
    	$str = "This is some <b>bold</b> text.";
    	$result = "This is some &lt;b&gt;bold&lt;/b&gt; text.";

   		$this->assertEquals(567, test_input(567));
   		$this->assertEquals("test", test_input("test  "));
   		$this->assertEquals("test", test_input("te\st\\"));
   		$this->assertEquals($result, test_input($str));
   		$this->assertEquals("", test_input(""));
    }
}
