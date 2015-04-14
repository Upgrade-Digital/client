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
  public $urn;
  
  /**
   * The name on the card.
   * @var string
   */
  public $nameOnCard;
  
  /**
   * The long 16 digit card number
   *
   * @var string
   */
  public $cardNumber;
  
  /**
   * @var string
   */
  public $cardType;
  
  /**
   * @var integer
   */
  public $expiryMonth;
  
  /**
   * @var integer
   */
  public $expiryYear;
  
  /**
   * @var integer
   */
  $issueNumber;
}
