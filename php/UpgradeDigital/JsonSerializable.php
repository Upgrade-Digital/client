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

  function fromJson($json) {
    $jsonArray = json_decode($json, true);
    foreach ($jsonArray as $key=>$value) {
      $this->$key = $value;
    }
  } 

  function toJson() {
    return json_encode($this);
  }
}
