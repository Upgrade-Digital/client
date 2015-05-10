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
  public $urn;

  /**
   * @var string for example BILLING
   */
  public $type;

  /**
   * @var string street part 10 Brands Hatch
   */
  public $street;
  
  /**
   * @var string area within the town or city
   */
  public $area;

  /**
   * @var string city or district
   */
  public $locality;

  /**
   * @var string province or state
   */
  public $region;

  /**
   * @var string post code if known
   */
  public $postalCode;

  /**
   * Two letter http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 code
   * @var string
   */
  public $countryCode;
}
