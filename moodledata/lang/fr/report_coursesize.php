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
 * Strings for component 'report_coursesize', language 'fr', branch 'MOODLE_37_STABLE'
 *
 * @package   report_coursesize
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupsize'] = 'Taille des sauvegardes';
$string['catsystembackupuse'] = 'Les sauvegardes du système et des catégories pèsent {$a}.';
$string['catsystemuse'] = 'Les sauvegardes du système et des catégories sans les cours ni les utilisateurs pèsent {$a}.';
$string['coursebackupbytes'] = '{$a->backupbytes} octets utilisés par les sauvegardes du cours {$a->shortname}';
$string['coursebytes'] = '{$a->bytes} octets utilisés par le cours {$a->shortname}';
$string['coursereport'] = 'Résumé des types de plugins - NOTEZ que cela peut être plus bas que la valeur du cours, et probablement plus juste.';
$string['coursesize'] = 'Taille des cours';
$string['coursesize_desc'] = '<p>Ce rapport fourni seulement des valeurs indicatives : si un fichier est utilisé plusieurs fois dans un cours, ou dans plusieurs cours, le rapport comptera chaque instance, alors que Moodle ne le stocke qu\'une seule fois sur le disque.</p>';
$string['coursesize:view'] = 'Voir le rapport des cours';
$string['coursesummary'] = '(voir statistiques)';
$string['diskusage'] = 'Total';
$string['emptycourseshidden'] = 'Les cours qui n\'utilisent pas de stockage de documents n\'apparaissent pas dans ce rapport.';
$string['exportcsv'] = 'Export CSV';
$string['nouserfiles'] = 'Aucun fichier utilisateur n\'a été trouvé.';
$string['pluginname'] = 'Poids des cours';
$string['privacy:metadata'] = 'Le plugin Poids des cours n\'enregistre aucune donnée personnelle.';
$string['sharedusage'] = 'Usage partagé';
$string['sharedusagecourse'] = 'Environ {$a} est partagé avec d\'autres cours.';
$string['sitefilesusage'] = 'Rapport d\'utilisation des fichiers';
$string['sizepermitted'] = '(Utilisation autorisée {$a}MB)';
$string['sizerecorded'] = '(à la date du {$a})';
$string['totalsitedata'] = 'Total du répertoire de données : {$a}';
$string['userstopnum'] = 'Utilisateurs (top {$a})';
