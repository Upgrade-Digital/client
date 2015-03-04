<?php

namespace UpgradeDigital;

/**
 * Place based resource search is used to represent a resource search like 
 * room availability.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class ResourceSearch {

  /**
   * @var string
   */
  $urn;
  
  /**
   * @var string
   */
  $url;
  
  /**
   * @var string
   */
  $status;
  
  /**
   * @var string
   */
  $created;
  
  /**
   * @var string
   */
  $updated;
  
  /**
   * @var TimeFrame
   */
  $period;
  
  /**
   * @var Tag[]
   */
  $places;
  
  /**
   * @var TagSet
   */
  $resourceTagSet;
  
  /**
   * @var ResourceTagCount[]
   */
  $resources;

}
