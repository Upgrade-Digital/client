<?php

namespace UpgradeDigital;

/**
 * Place representation holds details of a place.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class Place {

  /**
   * @var string
   */
  public $urn;
  
  /**
   * @var string
   */
  public $url;
  
  /**
   * @var Tag[]
   */
  public $tags;
  
  /**
   * @var string
   */
  public $name;
  
  /**
   * @var Organisation
   */
  public $organisation;

}
