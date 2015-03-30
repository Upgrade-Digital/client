<?php

namespace UpgradeDigital;

/**
 * Calendar rate represents a rate available on a specific calendar day.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class CalendarRate {

  /**
   * @var Currency
   */  
  public $rate;
  
  /**
   * @var Tags[]
   */  
  public $tags;

}
