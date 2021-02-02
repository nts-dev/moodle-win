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
 * Strings for component 'mlbackend_python', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   mlbackend_python
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['packageinstalledshouldbe'] = '"moodlemlbackend" python packet zou moeten geüpdatet worden. De vereiste versie is "{$a->required}" en de geïnstalleerde versie is "{$a->installed}"';
$string['packageinstalledtoohigh'] = '"moodlemlbackend" python pakket is niet compatibel met deze Moodle-versie. De vereiste versie is "{$a->required}" of hoger zolang het API-compatibel is. De geïnstalleerde versie "{$a->installed}" is te hoog.';
$string['pluginname'] = 'Python machine learning backend';
$string['privacy:metadata'] = 'Het Python machine-learning backend bewaart geen persoonlijke gegevens';
$string['pythonpackagenotinstalled'] = '"moodlemlbackend" python pakket is niet geïnstalleerd of er is een probleem mee. Voer "{$a}" uit van de command line interface voor meer informatie.';
$string['pythonpathnotdefined'] = 'Het pad naar je uitvoerbare Python-bibliotheek is niet opgegeven. Ga naar  "{$a}" om dat in te stellen.';
