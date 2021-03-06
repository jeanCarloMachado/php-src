<?php
require_once 'PHPUnit/Framework.php';
require_once dirname(__FILE__) . '/../src/gtAutoload.php';

class gtBasicTestCaseFunctionTest extends PHPUnit_Framework_TestCase {


  public function testTestCase() {
   
    $f = new gtFunction('cos');
    $f->setArgumentNames();
    $f->setArgumentLists();
    $f->setInitialisationStatements();
    $optSect = new gtOptionalSections();
    
    $btc = gtBasicTestCase::getInstance($optSect);
    $btc->setFunction($f);
    $btc->constructTestCase();

    $fs = $btc->toString();
    $this->assertTrue(is_string($fs));
  }
}
?>