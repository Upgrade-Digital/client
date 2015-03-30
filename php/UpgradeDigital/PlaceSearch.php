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
  public $urn;
  
  /**
   * @var string
   */
  public $url;
  
  /**
   * @var Organisation;
   */
  public $organisation;
  
  /**
   * @var string
   */
  public $status;
  
  /**
   * @var Timestamp
   */
  public $timestamp;
  
  /**
   * @var TimeFrame
   */
  public $period;
  
  /**
   * @var Occupancy
   */
  public $occupancy;
  
  /**
   * @var PlaceResourceSearch[]
   */
  public $places;

}
