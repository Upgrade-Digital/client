<?php

namespace UpgradeDigital;

/**
 * The best rate calendar offers functionality to display a calendar of dates
 * with the best rates tagged for each date.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class BestRateCalendar {
  
  /**
   * @var string
   */
  public $urn;
  
  /**
   * @var string
   */
  public $url;
  
  /**
   * @var Organisation
   */
  public $organisation;
  
  /**
   * @var Timestamp
   */
  public $timestamp;
  
  /**
   * @var Occupancy
   */
  public $occupancy;
  
  /**
   * @var TimeFrame
   */
  public $period;
  
  /**
   * @var PlaceCalendar[]
   */
  public $placeCalendars;
  
  /**
   * @var string
   */
  public $status;

}
