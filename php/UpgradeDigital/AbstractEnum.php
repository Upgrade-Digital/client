<?php

namespace UpgradeDigital;

/**
 * Enumeration helper used to match an enumeration to a set of examples.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
abstract class AbstractEnum {

  private static $constCacheArray = NULL;

  /**
   * @return the collection of enumeration constants.
   */
  private static function getConstants() {
    if (self::$constCacheArray === NULL) {
      self::$constCacheArray = [];
    }
    $calledClass = get_called_class();
    if (!array_key_exists($calledClass, self::$constCacheArray)) {
      $reflect = new ReflectionClass($calledClass);
      self::$constCacheArray[$calledClass] = $reflect->getConstants();
    }
    return self::$constCacheArray[$calledClass];
  }

  /**
   * @param value to check for validity.
   * @return true if the value is an enumeration constant.
   */
  public static function isValidValue($value) {
    $values = array_values(self::getConstants());
    return in_array($value, $values);
  }
}
