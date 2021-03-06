<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme version info
 *
 * @package    theme_anomaly
 * @copyright  2010 Patrick Malley (http://newschoollearning.com/)
 * @update     2016 Mary Evans
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->component = 'theme_anomaly'; // Full name of the plugin (used for diagnostics).

$plugin->maturity  = MATURITY_STABLE;

$plugin->release   = 'Anomaly 3.1 (Build: 20160813)'; // Human-friendly version name.

$plugin->requires  = 2016052300; // Requires this Moodle version

$plugin->version   = 2016081300; // The current module version (Date: YYYYMMDDXX)

$plugin->dependencies = array(
    'theme_base'  => 2016052300,
);
