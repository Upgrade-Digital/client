<?php

namespace UpgradeDigital;

/**
 * Rate day restriction captures the arbitrary restrictions on a rate which
 * apply for a day rate. The most common being minimum stay through
 * 
 * Depending on the underlying platform these restrictions could include:
 * - OPEN
 * - CLOSED
 * - OPEN_FOR_ARRIVAL
 * - CLOSED_FOR_ARRIVAL
 * - OPEN_FOR_DEPARTURE
 * - CLOSED_FOR_DEPARTURE
 * - MINIMUM_STAY_THROUGH
 * - MAXIMUM_STAY_THROUGH
 * - MINIMUM_LENGTH_OF_STAY
 * - MAXIMUM_LENGTH_OF_STAY
 * - MINIMUM_ADVANCE_BOOKING
 * - MAXIMUM_ADVANCE_BOOKING
 * - LENGTH_OF_STAY_NOT_AVAILABLE
 *
 * Note that the value is optional and contains the restriction value, for 
 * example when used in the context of a minimum stay through, it could be 2.
 *
 * As an example of stay through consider maximising occupancy around new year 
 * (29th Dec to 2nd Jan), a hotel could avoid empty room on 30th Dec or 1st Jan 
 * because it is difficult to sell rooms for only those specific dates.
 * This is achived by appling minimum stay-through of 3 days on the given period
 * (29th Dec to 2nd Jan), meaning a guest cannot make a booking for less than 3 
 * nights during this period.
 * 
 * PHP version 5
 * 
 * @package Client
 * @author Damien Allison <damien@upgrade-digital.com>
 * @copyright 2015 Upgrade Digital
 * @license https://github.com/Upgrade-Digital/client/blob/master/LICENSE.md
 * @link https://github.com/Upgrade-Digital/client
 */
class RateDayRestriction {
 
  /**
   * @var string
   */
  public $urn;
  
  /**
   * @var string
   */
  public $name;
  
  /**
   * @var string
   */
  public $value;
}
