<?php

namespace UpgradeDigital;

/**
 * Calendar day is a container for a collection of resources which have rates
 * for a given day.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class CalendarDay {
  
  /**
   * @var string
   */
  $urn;
  
  /**
   * ISO date YYYYMMDD
   * @var string
   */
  $date;
  
  /**
   * @var ResourceDay[]
   */
  $resources;
}
