<?php

namespace UpgradeDigital;


/**
 * Upgrade Digital Booking API Endpoint Configuration.
 *
 * PHP version 5
 *
 * @category   UpgradeDigital
 * @package    Client
 * @author     Original Author <damien@upgrade-digital.com>
 * @copyright  2015 Upgrade Digital
 * @license    https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @version    0.0.1
 * @link       https://github.com/Upgrade-Digital/client
 */
class Configuration {

  $_username;
  $_password;

  function __Config($username, $password) {
    $this->_username = $username;
    $this->_password = $password;
  }


}

