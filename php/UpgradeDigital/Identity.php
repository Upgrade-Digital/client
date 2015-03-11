<?php

namespace UpgradeDigital;

/**
 * The identity representation holds a collection of different identity related
 * data for a given person.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class Identity {

  /**
   * @var string
   */ 
  $urn;

  /**
   * @var PersonName
   */
  $name;

  /**
   * @var Address
   */
  $billingAddress;

  /**
   * @var string
   */
  $email;
  
  /**
   * @var Telephone[]
   */
  $telephones;
}
