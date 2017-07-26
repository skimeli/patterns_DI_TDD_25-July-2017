<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 7/26/17
 * Time: 11:18 AM
 */
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