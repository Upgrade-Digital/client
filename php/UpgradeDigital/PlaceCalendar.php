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
  public $urn;
  
  /**
   * @var Timestamp
   */
  public $timestamp;

  
  /**
   * @var string
   */
  public $status;
  
  /**
   * @var Tag[]
   */
  public $tags;
  
  /**
   * @var CalendarDay[]
   */
  public $days;

}
