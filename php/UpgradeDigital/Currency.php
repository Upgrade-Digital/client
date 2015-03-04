<?php

namespace UpgradeDigital;

/**
 * Currency representation used to encompass currency values.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class Currency {
  
  /**
   * @var string
   */ 
  $amount;
  
  /**
   * @var string
   */  
  $tax;
  
  /**
   * @var string currency code using http://en.wikipedia.org/wiki/ISO_4217 three
   *      digit codes.
   */
  $currencyCode;

}
