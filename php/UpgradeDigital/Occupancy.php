<?php

namespace UpgradeDigital;

/**
 * Occupancy representation used in search, calendar and booking to indicate
 * levels of fill of a resource.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
 class Occupancy {
 
  /**
   * @var integer
   */
  public $adultsPresent;

  /**
   * @var integer
   */
  public $childrenPresent;
  
  /**
   * @var integer
   */
  public $adultCapacity;
  
  /**
   * @var integer
   */
  public $childCapacity;
  
  /**
   * @var integer[]
   */
  public $childAges;
   
 }
