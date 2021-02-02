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
 * Strings for component 'cachestore_apcu', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   cachestore_apcu
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Wees er je van bewust dat APCu enkel geschikt is voor single node sites of caches die lokaal bewaard kunnen worden.
Raadpleeg voor meer informatie de <a href="{$a}">APC user cache documentation</a>.';
$string['notice'] = 'Aankondiging';
$string['pluginname'] = 'APC user cache (APCu)';
$string['prefix'] = 'Prefix';
$string['prefix_help'] = 'Bovenstaande prefix wordt gebruikt voor alle sleutels die bewaard worden in deze APC opslaginstantie. Standaard wordt het databankprefix gebruikt.';
$string['prefixinvalid'] = 'Je hebt een ongeldig prefix gekozen. Je kunt enkel a-z A-Z 0-9-_ gebruiken.';
$string['prefixnotunique'] = 'Het prefix dat je gekozen hebt is niet uniek. Kies een uniek prefix';
$string['privacy:metadata'] = 'De APC gebruikerscache (APCu) bewaart gegevens kort als deel van zijn cachingsfunctie, maar deze gegevens worden regelmatig gewist en worden nooit extern verzonden.';
$string['testperformance'] = 'Testperformantie';
$string['testperformance_desc'] = 'Indien ingeschakeld zal de APCu-performantie getoond worden op de testperformantiepagina. Het wordt niet aangeraden om dit in te schakelen op een productiesite.';
