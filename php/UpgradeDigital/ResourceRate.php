<?php

namespace UpgradeDigital;

/**
 * Resource rate representation for example a room rate per stay.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class ResourceRate {

  /**
   * @var string
   */
  public $urn;
  
  /**
   * @var Tag[]
   */
  public $tags;
  
  /**
   * @var integer
   */
  public $units;
  
  /**
   * @var Currency
   */
  public $averageUnitRate;
  
  /**
   * @var Currency
   */
  public $deposit;
  
  /**
   * @var Currency
   */
  public $price;

}
