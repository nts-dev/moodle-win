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
 * Strings for component 'qtype_vplquestion', language 'fr', branch 'MOODLE_37_STABLE'
 *
 * @package   qtype_vplquestion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allornothing'] = 'Tout ou rien';
$string['answertemplate'] = 'Squelette de r&eacute;ponse';
$string['answertemplate_help'] = '&Eacute;crivez ici le code qui sera pr&eacute;-rempli dans la zone de r&eacute;ponse de l\'&eacute;tudiant.';
$string['cannotimportquestionvplnotfound'] = 'Erreur d\'importation : l\'id du module VPL de la Question VPL "{$a}" est invalide.';
$string['cannotimportquestionvplunreachable'] = 'Erreur d\'importation : le VPL sp&eacute;cifi&eacute; dans la Question VPL "{$a}" n\'est pas dans ce cours.';
$string['cfg:deletevplsubmissions'] = 'Supprimer les soumissions du VPL';
$string['cfg:deletevplsubmissions_help'] = 'D&eacute;termine si les soumissions faites par une Question VPL sur un VPL seront supprim&eacute;es.';
$string['cfg:generalsettings'] = 'Param&egrave;tres g&eacute;n&eacute;raux';
$string['cfg:generalsettings_help'] = '';
$string['choose'] = 'Choisissez...';
$string['compilation'] = 'Compilation :';
$string['correction'] = 'Correction';
$string['evaluation'] = '&Eacute;valuation :';
$string['evaluationdetails'] = 'D&eacute;tails de l\'&eacute;valuation :';
$string['evaluationerror'] = 'Erreur d\'&eacute;valuation :';
$string['execerror'] = 'Erreur d\'ex&eacute;cution :';
$string['execerrordetails'] = 'Operation abandonn&eacute;e par le VPL. Les ressources d\'ex&eacute;cution maximum ont peut-&ecirc;tre &eacute;t&eacute; d&eacute;pass&eacute;es.';
$string['execfiles'] = 'Fichiers d\'ex&eacute;cution';
$string['execfilesevalsettings'] = 'Fichiers d\'ex&eacute;cution et param&egrave;tres d\'&eacute;valuation';
$string['execfiles_help'] = 'Vous pouvez modifier ici les fichiers d\'ex&eacute;cution. Ils sont transmis uniquement lors de l\'&eacute;valuation (et pr&eacute;-&eacute;valuation si les fichiers sont les m&ecirc;mes), et non lors de l\'ex&eacute;cution (sauf pour les fichiers sp&eacute;cifi&eacute;s comme &eacute;tant "&agrave; conserver durant l\'ex&eacute;cution" dans le VPL).<br>
Pour ajouter des fichiers, cr&eacute;ez-les dans le VPL comme fichiers d\'ex&eacute;cution.<br>
Si vous souhaitez ne pas utiliser un fichier, &eacute;crivez "UNUSED" sur la premi&egrave;re ligne et il sera omis.';
$string['execution'] = 'Erreur d\'ex&eacute;cution :';
$string['gradingmethod'] = 'Notation';
$string['gradingmethod_help'] = 'D&eacute;termine la m&eacute;thode de notation de cette question.
<ul><li>Si "Tout ou rien" est s&eacute;lectionn&eacute;, l\'&eacute;tudiant obtiendra 100% ou 0% de la note pour cette question, selon qu\'il a ou non obtenu une note parfaite sur le VPL.</li>
<li>Si "Proportionnel" est s&eacute;lectionn&eacute;, l\'&eacute;tudiant obtiendra une note proportionnelle &agrave; celle du VPL.</li></ul>';
$string['informationtext'] = 'Question VPL';
$string['nogradeerror'] = 'Une erreur est survenue lors de l\'&eacute;valuation de cette question (pas de note obtenue).';
$string['noprecheck'] = 'Pas de pr&eacute;-&eacute;valuation';
$string['pleaseanswer'] = 'Merci de fournir une r&eacute;ponse.';
$string['pluginname'] = 'Question VPL';
$string['pluginnameadding'] = 'Ajout d\'une Question VPL';
$string['pluginnameediting'] = 'Edition d\'une Question VPL';
$string['pluginname_help'] = 'Les Questions VPL permettent aux &eacute;tudiants d\'effectuer de simples exercices de programmation.<br>
Elles fonctionnent &agrave; l\'aide d\'un VPL, mais sont plus simples du point de vue de l\'&eacute;tudiant.';
$string['pluginnamesummary'] = 'Les Questions VPL permettent aux &eacute;tudiants d\'effectuer de simples exercices de programmation.<br>
Elles fonctionnent &agrave; l\'aide d\'un VPL, mais sont plus simples du point de vue de l\'&eacute;tudiant.';
$string['possiblesolution'] = 'Solution propos&eacute;e :';
$string['precheck'] = 'Pr&eacute;-&eacute;valuer';
$string['precheckexecfiles'] = 'Fichiers d\'ex&eacute;cution pour la pr&eacute;-&eacute;valuation';
$string['precheckexecfiles_help'] = 'Vous pouvez modifier ici les fichiers d\'ex&eacute;cution de la pr&eacute;-&eacute;valuation. Pour plus d\'informations, voir l\'aide de "Fichiers d\'ex&eacute;cution".';
$string['precheckhasownfiles'] = 'La pr&eacute;-&eacute;valuation utilise ses propres fichiers';
$string['precheckhassamefiles'] = 'La pr&eacute;-&eacute;valuation utilise les m&ecirc;mes fichiers que l\'&eacute;valuation';
$string['precheckhelp'] = '&Eacute;valuer votre r&eacute;ponse sur un sous-ensemble de tests';
$string['precheckisdebug'] = 'La pr&eacute;-&eacute;valuation utilise Debug';
$string['precheckpreference'] = 'Pr&eacute;f&eacute;rences de pr&eacute;-&eacute;valuation';
$string['precheckpreference_help'] = 'D&eacute;termine si l\'&eacute;tudiant a acc&egrave;s au bouton "Pr&eacute;-&eacute;valuation" lors de sa tentative (utilisation illimit&eacute;e).
<ul><li>Si "Pas de pr&eacute;-&eacute;valuation" est s&eacute;lectionn&eacute;, le bouton ne sera pas disponible.</li>
<li>Si "La pr&eacute;-&eacute;valuation utilise Debug" est s&eacute;lectionn&eacute;, le bouton sera comme le bouton Debug du VPL. Veuillez noter que l\'interface graphique usuelle sera indisponible.</li>
<li>Si "La pr&eacute;-&eacute;valuation utilise les m&ecirc;mes fichiers que l\'&eacute;valuation" est s&eacute;lectionn&eacute;, le bouton &eacute;valuera la r&eacute;ponse avec les m&ecirc;mes fichiers que ci-dessus.</li>
<li>Si "La pr&eacute;-&eacute;valuation utilise ses propres fichiers" est s&eacute;lectionn&eacute;, vous pourrez &eacute;diter des fichiers d\'ec&eacute;cution sp&eacute;cifiques qui seront utilis&eacute;s pour la pr&eacute;-&eacute;valuation. Cette option est recommand&eacute;e, car elle vous permet de sp&eacute;cifier un sous-ensemble de tests auquel l\'&eacute;tudiant aura acc&egrave;s durant sa tentative.</li></ul>';
$string['privacy:metadata'] = 'Le plugin Question VPL ne stocke aucune donn&eacute;e personnelle. Cependant, il envoie des donn&eacute;es entr&eacute;es par l\'utilisateur au plugin mod_vpl, qui peut les stocker de son c&ocirc;t&eacute;.';
$string['qvplbase'] = 'Base de la Question VPL';
$string['run'] = 'Ex&eacute;cuter';
$string['scaling'] = 'Proportionnel';
$string['selectavpl'] = '<a href="{$a}">S&eacute;lectionnez un VPL</a> pour &eacute;diter les fichiers d\'ex&eacute;cution.';
$string['teachercorrection'] = 'Correction de l\'enseignant';
$string['teachercorrection_help'] = '&Eacute;crivez ici votre correction pour cette question.';
$string['templatecontext'] = '&Eacute;diter le code';
$string['templatecontext_help'] = 'Vous pouvez &eacute;diter ici le code qui sera ex&eacute;cut&eacute; (c\'est-&agrave;-dire le contenu du fichier requis).<br>
La balise "{{ANSWER}}" sera remplac&eacute;e par la r&eacute;ponse de l\'&eacute;tudiant. Vous pouvez la placer o&ugrave; vous le souhaitez, mais elle doit appara&icirc;tre !';
$string['templatevpl'] = 'VPL &agrave; utiliser comme base';
$string['templatevpl_help'] = 'S&eacute;lectionnez le VPL sur lequel baser cette question.<br>
<b>Note :</b> Veuillez s&eacute;lectionner un VPL d&eacute;di&eacute; &agrave; cet effet, car les soumissions des &eacute;tudiants sur ce VPL seront supprim&eacute;es si le param&egrave;tre associ&eacute; a &eacute;t&eacute; coch&eacute; par l\'administrateur.';
$string['validateonsave'] = 'Valider';
$string['validateonsave_help'] = 'Si cette case est coch&eacute;e, la correction sera test&eacute;e avec les cas de tests avant la sauvegarde cette question.';
$string['warningvplchange'] = 'Attention ! Changer le VPL de cette question &eacute;crasera toute modification apport&eacute;e au code et aux fichiers d\'ex&eacute;cution si vous sauvegardez cette question.';
