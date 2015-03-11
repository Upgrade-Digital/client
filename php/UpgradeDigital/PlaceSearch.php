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
class PlaceSearch {

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
  $organisationUrn;

  /**
   * @var string
   */
  $organisationUrl;
  
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
   * @var Occupancy
   */
  $occupancy;
  
  /**
   * @var TagSet
   */
  $resourceTagSet;
  
  /**
   * @var PlaceResourceSearch[]
   */
  $places;

}
