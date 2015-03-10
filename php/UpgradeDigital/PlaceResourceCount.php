<?php

namespace UpgradeDigital;

/**
 * Place resource count contains a collection of resource counts by place.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class PlaceResourceCount {
  
  /**
   * @var string
   */
  $urn;
  
  /**
   * @var Place
   */
   $place;
   
  /**
   * @var ResourceTagCount[]
   */
  $resoruces;
  
}
