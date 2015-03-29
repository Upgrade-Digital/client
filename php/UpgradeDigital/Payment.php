<?php

namespace UpgradeDigital;

/**
 * Payment representation with multiple payments per reservation potentially.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class Payment {

  /**
   * @var string
   */
  $urn;
  
  /**
   * @var Timestamp
   */
  $timestamp;
  
  /**
   * @var string
   */  
  $transaction;
  
  /**
   * @var Currency
   */  
  $amount;
}
