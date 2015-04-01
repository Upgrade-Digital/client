<?php

namespace UpgradeDigital;

/**
 * A booking stay which references a place and a period.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class Stay {

  /**
   * @var string
   */
  public $urn;
  
  /**
   * @var TimeFrame
   */
  public $period;
  
  /**
   * @var Place
   */
  public $place;
  
  /**
   * @var BookingResource[]
   */
  public $resources;

}
