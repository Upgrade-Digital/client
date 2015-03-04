<?php

namespace UpgradeDigital;

/**
 * Json Serializable is a marker abstract class which allows mapping of json
 * associative data to an object state.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
abstract class JsonSerializable {

  /**
   * Map a json string to a given class instance.
   * @param $json string Json data.
   * @param $classInstance class e.g. an instance of ResourceSearch.
   *
   * Usage is like JsonSerializable::fromJson($myData, new ResourceSearch());
   */
  static function fromJson($json, $classInstance) {
    $jsonArray = json_decode($json, true);
    $mapper = new JsonMapper();
    return $mapper->map($jsonArray, $classInstance);    
  } 

  /**
   * Helper to generate Json for a given class. Preferred over json_encode 
   * direct usage to allow for inclusion of json mapper bindings.
   * @param $classInstance class instance to map.
   */
  static function toJson($classInstance) {
    return json_encode($classInstance);
  }
}
