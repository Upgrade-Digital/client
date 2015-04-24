<?php

namespace UpgradeDigital;

/**
 * Resource availability search representation.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
public class Booking {
  
  /**
   * @var string
   */
  public $urn;
  
  /**
   * @var string
   */
  public $url;
  
  /**
   * @var Timestamp
   */
  public $timestamp;
  
  /**
   * @var string
   */
  public $status;
  
  /**
   * @var Currency
   */
  public $price;
  
  /**
   * @var Currency
   */
  public $deposit;

  /**
   * @var boolean
   */
  public $depositRequired;
  
  /**
   * @var Stay[]
   */
  public $stays;
  
  /**
   * @var Payment[]
   */
  public $payments;
  
  /**
   * @var PaymentCard
   */
  public $paymentCard;
  
  /**
   * @var Identity
   */
  public $booker;
  
  /**
   * @var Message[]
   */
  public $messages;
}
