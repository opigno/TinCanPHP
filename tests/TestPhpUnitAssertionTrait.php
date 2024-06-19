<?php

namespace TinCanTest;


use TinCan\Group;
use TinCan\Statement;

trait TestPhpUnitAssertionTrait {

  public function getReflectionProperty($object, $prop) {
    $reflection = new \ReflectionClass($object);
    $property = $reflection->getProperty($prop);
    $property->setAccessible(TRUE);
    return $property;
  }

  private function assertAttributeEmpty($prop, $object, $message) {
    $property = $this->getReflectionProperty($object, $prop);

    $this->assertEmpty($property->getValue($object), $message);
  }

  private function assertAttributeNotEmpty($prop, $object, $message) {
    $property = $this->getReflectionProperty($object, $prop);

    $this->assertNotEmpty($property->getValue($object), $message);
  }


  private function assertAttributeInstanceOf($instance, $prop, $object, $message) {
    $property = $this->getReflectionProperty($object, $prop);

    $this->assertInstanceOf($instance, $property->getValue($object), $message);
  }


  private function setExpectedExceptionRegExp($instance, $regularExpression) {
    $this->expectException($instance);
    $this->expectExceptionMessageMatches($regularExpression);
  }


  private function assertAttributeInternalType($type, $prop, $object, $message) {
    $property = $this->getReflectionProperty($object, $prop);
    $this->assertThat($property->getValue($object), $this->isType($type), $message);
  }

  private function assertAttributeEquals($expected, $prop, $object, $message) {
    $property = $this->getReflectionProperty($object, $prop);
    $this->assertEquals($expected, $property->getValue($object), $message);
  }

  private function assertInternalType($type, $value, $message) {
    $this->assertThat($value, $this->isType($type), $message);
  }
}
