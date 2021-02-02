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
 * Strings for component 'mlbackend_python', language 'fr', branch 'MOODLE_37_STABLE'
 *
 * @package   mlbackend_python
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['packageinstalledshouldbe'] = 'Le paquetage Python « moodlemlbackend » doit être mis à jour. La version installée est {$a->installed}, alors que la version requise est {$a->required}';
$string['packageinstalledtoohigh'] = 'Le paquetage python « moodlemlbackend » n\'est pas compatible avec cette version de Moodle. La version requise est {$a->required} ou ultérieure, pour autant qu\'elle soit compatible avec l\'API. La version installée {$a->installed} est trop récente.';
$string['pluginname'] = 'Programme d\'apprentissage automatique en Python';
$string['privacy:metadata'] = 'Le plugin Programme d\'apprentissage automatique en Python n\'enregistre aucune donnée personnelle.';
$string['pythonpackagenotinstalled'] = 'Le paquetage Python « moodlemlbackend » a un problème ou n\'est pas installé. Veuillez lancer la commande « {$a} » en ligne de commande pour plus de détails';
$string['pythonpathnotdefined'] = 'Le chemin d\'accès à votre exécutable Python n\'est pas défini. Veuillez le configurer en visitant la page « {$a} ».';
