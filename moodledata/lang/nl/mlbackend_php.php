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
 * Strings for component 'mlbackend_php', language 'nl', branch 'MOODLE_37_STABLE'
 *
 * @package   mlbackend_php
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'Er is slechts een deel van de dataset verwerkt omdat die zo groot is. Stel $CFG->mlbackend_php_no_memory_limit in als je er op vertrouwt dat jouw systeem een dataset van {$a} aankan.';
$string['errorcantloadmodel'] = 'Modelbestand {$a} bestaat niet. Dat model zou moeten getraind worden voor het kan voorspellingen maken.';
$string['errorlowscore'] = 'De voorspellingsnauwkeurigheid van het geëvalueerde model is niet erg hoog, dus voorspellingen zullen niet zo accuraat zijn. Model score = {$a->score}, minimum score = {$a->minscore}';
$string['errornotenoughdata'] = 'Er zijn niet genoeg gegevens om dit model te laten evalueren met de tijdssplitsingsmethode.';
$string['errornotenoughdatadev'] = 'De evaluatieresultaten variëren te veel. Aangeraden wordt om meer gegevens te verzamelen om te verzekeren dat dit model geldig is. De standaarddeviatie van de evaluatieresultaten = {$a->deviation}, maximum aangeraden standaarddeviatie = {$a->accepteddeviation}';
$string['errorphp7required'] = 'De PHP machine learning backend vereist PHP 7';
$string['pluginname'] = 'PHP machine learning backend';
$string['privacy:metadata'] = 'Het PHP-machine-learning backend bewaart geen persoonlijke gegevens.';
