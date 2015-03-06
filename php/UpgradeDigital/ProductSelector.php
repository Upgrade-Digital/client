<?php

namespace UpgradeDigital;

/**
 * Product selection is used to indicate what volumes of extra products are 
 * available and selected in the context of a resource reservation.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class ProductSelector {

  /**
   * @var Tag[]
   */
  $tags;
  
  /**
   * @var integer
   */
  $available;
  
  /**
   * @var integer
   */
  $selected;
  
  /**
   * @var Currency
   */
  $unitRate;
  
  /**
   * @var Currency;
   */
  $deposit;
  
  /**
   * @var Currency
   */
  $price;

}
