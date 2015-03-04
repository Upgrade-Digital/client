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

  const BASKET = 'BASKET';
  const HOLD = 'HOLD';
  const HOLD_FAILED = 'HOLD_FAILED';
  const HELD = 'HELD';
  const RELEASE = 'RELEASE';
  const RELEASE_FAILED = 'RELEASE_FAILED';
  const RELEASED = 'RELEASED';
  const CONFIRM = 'CONFIRM';
  const CONFIRM_FAILED = 'CONFIRM_FAILED';
  const CONFIRMED = 'CONFIRMED';
  const CANCEL = 'CANCEL';
  const CANCEL_FAILED = 'CANCEL_FAILED';
  const CANCELLED = 'CANCELLED';

}
