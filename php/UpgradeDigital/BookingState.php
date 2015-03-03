<?php

require_once('./AbstractEnum.php');

namespace UpgradeDigital;

/**
 * Enumeration helper used to match an enumeration to a set of examples.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
abstract class BookingState extends AbstractEnum {

  const BASKET = 1;
  const HOLD = 2;
  const HOLD_FAILED = 3;
  const HELD = 4;
  const RELEASE = 5;
  const RELEASE_FAILED = 6;
  const RELEASED = 7;
  const CONFIRM = 8;
  const CONFIRM_FAILED = 9;
  const CONFIRMED = 10;
  const CANCEL = 11;
  const CANCEL_FAILED = 12;
  const CANCELLED = 13;

}
