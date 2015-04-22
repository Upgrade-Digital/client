<?php

namespace UpgradeDigital;

/**
 * A message representation used to feedback on status updates etc for a context
 * like a booking.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
public class Message {

  /**
   * @var Timestamp
   */
  $timestamp;
  
  /**
   * @var string
   */
  $message;
}
