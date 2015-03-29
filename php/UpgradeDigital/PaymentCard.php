<?php

namespace UpgradeDigital;

/**
 * Payment card representation.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class PaymentCard {
 
  /**
   * @var string 
   */
  $urn;
  
  /**
   * The name on the card.
   * @var string
   */
  $nameOnCard;
  
  /**
   * The long 16 digit card number
   *
   * @var string
   */
  $cardNumber;
  
  /**
   * @var string
   */
  $cardType;
  
  /**
   * @var integer
   */
  $expiryMonth;
  
  /**
   * @var integer
   */
  $expiryYear;
}
