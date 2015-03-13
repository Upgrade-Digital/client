<?php

namespace UpgradeDigital;

/**
 * Place calendar representation captures a specific place e.g. a hotel and 
 * contains a list of rate days for that place.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class PlaceCalendar {

  /**
   * @var string
   */
  $urn;
  
  /**
   * @var Timestamp
   */
  $timestamp;

  
  /**
   * @var string
   */
  $status;
  
  /**
   * @var Tag[]
   */
  $tags;
  
  /**
   * @var CalendarDay[]
   */
  $days;

}
