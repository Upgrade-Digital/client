<?php

namespace UpgradeDigital;

/**
 * An address including the field set out in the schema.org naming conventions
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class Address {


  /**
   * @var string
   */
  $urn;

  /**
   * @var string
   */
  $street;

  /**
   * @var string
   */
  $locality;

  /**
   * @var string
   */
  $region;

  /**
   * @var string
   */
  $postalCode;

  /**
   * Two letter http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 code
   * @var string
   */
  $countryCode;
}
