<?php

namespace UpgradeDigital;

/**
 * The resource day representation captures a single resource day availability
 * which is used in a calendar context.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class ResourceDay {
  
  /**
   * @var string
   */
  $urn;
  
  /**
   * @var Tag[]
   */
  $tags;
  
  /**
   * @var integer
   */
  $available;
  
  /**
   * @var RateDay[]
   */
  $rates;
  
}
