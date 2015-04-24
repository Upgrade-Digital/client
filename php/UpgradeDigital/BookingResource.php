<?php

namespace UpgradeDigital;

/**
 * Resource booking representation for a resource like a hotel room offered in a
 * place.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class BookingResource {

  /**
   * @var string
   */
  public $urn;
  
  /**  
   * @var Tag[]
   */
  public $tags;
  
  /**
   * @var Occupancy
   */
  public $occupancy;
  
  /**
   * @var ResourceRate
   */
  public $rate;
  
  /**
   * @var GuestComment
   */
  public $guestComment;

}
