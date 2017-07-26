<?php
use PHPUnit\Framework\TestCase;
class FullNamesTests extends TestCase
{
    private $fullnames;
 
    protected function setUp()
    {
        $this->fullnames = new FullNames();
    }
 
    protected function tearDown()
    {
        $this->fullnames = NULL;
    }
 
    public function testMergeNames()
    {
        $result = $this->fullnames->MergeNames('Sharon', 'Kimeli');
        $this->assertEquals(3, $result);
    }
 
}