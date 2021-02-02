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
 * Strings for component 'local_boostnavigation', language 'fr', branch 'MOODLE_37_STABLE'
 *
 * @package   local_boostnavigation
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Personnaliser le tiroir de navigation';
$string['privacy:metadata:preference:collapse'] = 'État (déplié/replié) d\'un nœud dépliable dans le tiroir de navigation';
$string['privacy:request:preference:collapse'] = 'L\'état du nœud « {$a->nodename} » dans le tiroir de navigation est {$a->collapse}';
$string['setting_collapsemycoursesnodeperformancehint'] = 'Attention: ceci ne fonctionnera que si le paramètre <a href="/admin/search.php?query=navshowmycoursecategories">Afficher les catégories de cours</a> est désactivé. Dans le cas contraire, ce paramètre sera ignoré.';
$string['setting_collapsenodestechnicalhint'] = 'Aspect technique: du code JavaScript et CSS est ajouté à la page pour afficher/masquer les nœuds de second niveau lorsque l\'utilisateur clique sur ce nœud. L\'état (déplié/replié) du nœud est enregistré dans les préférences de l\'utilisateur. Ainsi, les nœuds ne seront masqués dans le tiroir de navigation qu\'à l\'exécution tout en restant dans l\'arbre de navigation et donc accessibles par d\'autres composants de Moodle.';
$string['setting_customnodesusageexamples'] = 'Exemples :';
$string['setting_customnodesusageparameterlanguagedt'] = 'Langue(s) prise en charge (facultatif) :';
$string['setting_customnodesusageparameterlinkdt'] = 'Lien :';
$string['setting_customnodesusageparameterroledt'] = 'Rôle(s) pris en charge (facultatif) :';
$string['setting_customnodesusageparameters'] = 'Informations complémentaires sur les paramètres :';
$string['setting_customnodesusageparametertitledt'] = 'Titre :';
$string['setting_customnodesusagepleasenote'] = 'Veuillez noter :';
$string['setting_customnodesusagepleasenotephavailable'] = 'Les espaces réservés disponibles sont :';
$string['setting_customnodesusagepleasenotephcoursefullnamedd'] = 'Libellé long du cours';
$string['setting_customnodesusagepleasenotephcoursefullnamedt'] = '{coursefullname} :';
$string['setting_customnodesusagepleasenotephcourseiddd'] = 'ID (interne) du cours';
$string['setting_customnodesusagepleasenotephcourseiddt'] = '{courseid} :';
$string['setting_customnodesusagepleasenotephcourseshortnamedd'] = 'Libellé court du cours';
$string['setting_customnodesusagepleasenotephcourseshortnamedt'] = '{courseshortname} :';
$string['setting_customnodesusagepleasenotepheditinglinkdd'] = 'La valeur « on » ou « off » nécessaire pour basculer en mode édition';
$string['setting_customnodesusagepleasenotepheditinglinkdt'] = '{editingtoggle} :';
$string['setting_customnodesusagepleasenotepheditingtitledd'] = 'La valeur « Activer l\'édition » ou « Désactiver l\'édition » dans le pack de langue actuellement utilisé';
$string['setting_customnodesusagepleasenotepheditingtitledt'] = '{editingtoggle} :';
$string['setting_customnodesusagepleasenotephpagecontextiddt'] = '{pagecontextid} :';
$string['setting_customnodesusagepleasenotephpagepathdd'] = 'Le chemin de l\'URL de la page en cours';
$string['setting_customnodesusagepleasenotephpagepathdt'] = '{pagepath} :';
$string['setting_customnodesusagepleasenotephsesskeydd'] = 'La clé de session à utiliser dans les URL sécurisées';
$string['setting_customnodesusagepleasenotephsesskeydt'] = '{sesskey} :';
$string['setting_customnodesusagepleasenotephuserfullnamedd'] = 'Le nom complet de l\'utilisateur connecté';
$string['setting_customnodesusagepleasenotephuserfullnamedt'] = '{userfullname} :';
$string['setting_customnodesusagepleasenotephuseriddd'] = 'L\'identifiant (interne) de l\'utilisateur connecté';
$string['setting_customnodesusagepleasenotephuseriddt'] = '{userid} :';
$string['setting_customnodesusagepleasenotephuserusernamedd'] = 'Le nom d\'utilisateur de l\'utilisateur connecté';
$string['setting_customnodesusagepleasenotephuserusernamedt'] = '{userusername} :';
$string['setting_insertcoursesectionscoursenodecorehint'] = 'Attention: ceci ne fonctionnera que si le paramètre <a href="/admin/search.php?query=linkcoursesections">Toujours lier les sections de cours</a> est activé. Dans le cas contraire, ce paramètre sera ignoré.';
$string['setting_insertcustomnodes'] = 'Insérer {$a->what} pour {$a->who}';
$string['setting_insertnode'] = 'Insérer {$a->what} « {$a->which} »';
$string['setting_removecoursenodestechnicalhint'] = 'Aspect technique: le nœud est supprimé de l\'arbre de navigation. Par conséquent il n\'est plus accessible par d\'autres composants de Moodle. Dans des configurations classiques de Moodle, cela ne devrait pas poser de problèmes.';
$string['setting_removemycoursesnodeperformancehint'] = 'À noter : Si vous activez ce paramètre ainsi que <a href="/admin/search.php?query=navshowmycoursecategories">navshowmycoursecategories</a>, supprimer « Mes cours » prend plus de temps et vous devriez peut-être désactiver le paramètre navshowmycoursecategories.';
$string['settingspage_bottomnodes'] = 'Nœuds inférieurs';
$string['settingspage_coursenodes'] = 'Nœuds de cours';
$string['settingspage_rootnodes'] = 'Nœuds globaux';
