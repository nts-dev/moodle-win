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
 * Strings for component 'fileconverter_unoconv', language 'fr', branch 'MOODLE_37_STABLE'
 *
 * @package   fileconverter_unoconv
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoconv'] = 'Chemin d\'accès du convertisseur de documents <i>unoconv</i>';
$string['pathtounoconv_help'] = 'Chemin d\'accès du programme « unoconv ». Ce programme permet de convertir les documents d\'un format supporté par LibreOffice à un autre. Ce réglage est optionnel. Cependant, s\'il est renseigné correctement, Moodle utilisera ce programme pour convertir automatiquement les documents au besoin. Notamment, cette fonctionnalité est utilisée pour permettre l\'annotation PDF des devoirs avec un plus grand nombre de types de fichiers.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Le plugin format de données Unoconv n\'enregistre aucune donnée personnelle.';
$string['test_unoconv'] = 'Tester le chemin d\'accès à <i>unoconv</i>';
$string['test_unoconvdoesnotexist'] = 'Le chemin d\'accès à <i>unoconv</i> ne pointe pas vers le programme correct. Veuillez contrôler le réglage.';
$string['test_unoconvdownload'] = 'Télécharger le fichier PDF de test.';
$string['test_unoconvempty'] = 'Le chemin d\'accès à <i>unoconv</i> n\'est pas défini. Veuillez contrôler ce réglage.';
$string['test_unoconvisdir'] = 'Le chemin d\'accès à <i>unoconv</i> pointe vers un dossier. Veuillez inclure le nom du programme dans le chemin indiqué.';
$string['test_unoconvnotestfile'] = 'Le document de test à convertir en PDF est manquant.';
$string['test_unoconvnotexecutable'] = 'Le chemin d\'accès à <i>unoconv</i> pointe vers un programme qui n\'est pas exécutable.';
$string['test_unoconvok'] = 'Le chemin d\'accès à <i>unoconv</i> est configuré adéquatement.';
$string['test_unoconvversionnotsupported'] = 'La version installée de <i>unoconv</i> n\'est pas supportée. La fonctionnalité d\'annotation de devoirs de Moodle nécessite la version 0.7 ou ultérieure.';
