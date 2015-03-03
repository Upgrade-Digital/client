<?php

require_once('./JsonSerializable.php');

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
public class Booking extends JsonSerilizable {
  
  $urn;
  $url;
  $created;
  $updated;
  $status;
  $price;
  $stays;
  $payments;

}
