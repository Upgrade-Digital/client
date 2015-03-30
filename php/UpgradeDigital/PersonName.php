<?php

namespace UpgradeDigital;

/**
 * The person name represetation captures the person's name details.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class PersonName {
  
  /**
   * @var string
   */
  public $urn;

  /**
   * @var string
   */
  public $honorificPrefix;


  /**
   * @var string
   */
  public $givenName;


  /**
   * @var string
   */
  public $familyName;
}
