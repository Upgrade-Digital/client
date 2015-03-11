<?php

namespace UpgradeDigital;

/**
 * Resource tag count model represents a count of resources grouped by a 
 * particular tag set e.g. room type.

 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class ResourceTagCount {

  /**
   * @var string
   */
  $urn;
  
  /**
   * @var Tag
   */
  $tag;
  
  /**
   * @var integer
   */
  $count;
  
  /**
   * @var ResourceRate[]
   */
  $rates;
  
  /**
   * @var ProductSelector[]
   */
  $products;

}
