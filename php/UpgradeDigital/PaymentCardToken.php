<?php

namespace UpgradeDigital;

/**
 * Payment card token representation.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class PaymentCardToken {
 
  /**
   * @var string 
   */
  $identifier;
  
  /**
   * The last digits of the card, typically the last 4.
   *
   * @var string
   */
  $lastDigits;
  
  /**
   * @var string
   */
  $brand;
  
  /**
   * @var integer
   */
  $expiryMonth;
  
  /**
   * @var integer
   */
  $expiryYear;
}
