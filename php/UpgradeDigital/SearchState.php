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
public abstract class SearchState extends AbstractEnum {

  const QUEUED = 1;
  const SEARCHING = 2;
  const COMPLETE = 3;
  const FAILED = 4;

}
