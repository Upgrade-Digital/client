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
   * @var boolean
   */
  public $rateChange;

  /**
   * @var Currency
   */
  public $deposit;
  
  /**
   * @var boolean
   */
  public $depositRequired;

  /**
   * @var Currency
   */
  public $price;
  
  
  /**
   * @var ProductSelector[]
   */
  public $products;
  
  /**
   * @var BookingReference[]
   */
  public $bookingReferences;
      
  /**
   * @var Payment[]
   */
  public $payments;

}
