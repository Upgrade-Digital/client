lass<?php

namespace UpgradeDigital;

/**
 * The time frame representation captures a start and end date and time.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class TimeFrame {

  /**
   * @var string
   */
  public $start;
  
  /**
   * @var string
   */
  public $end;
  
  public function getStart() {
    return new DateTime($start);
  }
  
  public function getEnd() {
    return new DateTime($end);
  }
}
