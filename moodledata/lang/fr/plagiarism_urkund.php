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
 * Strings for component 'plagiarism_urkund', language 'fr', branch 'MOODLE_37_STABLE'
 *
 * @package   plagiarism_urkund
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowallsupportedfiles'] = 'Autoriser tous les types de fichiers supportés';
$string['allowallsupportedfiles_help'] = 'Ceci permet à l\'enseignant de restreindre les types de fichiers qui seront envoyés à URKUND pour analyse. Cela n\'empêche pas les étudiants de déposer d\'autres types de fichiers sur le devoir.';
$string['attempts'] = 'Tentatives effectuées';
$string['cannotupgradeunprocesseddata'] = '<h1>Impossible de mettre à jour vers cette version du plugin du fait de la présence de données non traitées, veuillez rétablir une version précédente de ce plugin et retirer les incidents anciens</h1><p>Cette version du plugin s\'appuie sur la nouvelle API d\'incidents dans Moodle, or votre installation contient des incidents non traités liés à l\'ancienne API.</p>
Nous vous suggérons de rétablir une version antérieure du plugin URKUND, de mettre le site en mode maintenance, de lancer la tâche cron Moodle et de bien vérifier que tous les incidents anciens sont effacés. Réessayez ensuite de mettre à jour vers cette version du plugin URKUND.</p>
<p>Pour plus d\'information, voir : <a href="https://docs.moodle.org/en/Plagiarism_Prevention_URKUND_Settings#Installation_failed_due_to_unprocessed_data">Échec de l\'installation d\'URKUND du fait de données non traitées (article en anglais)</a></p>';
$string['confirmresetall'] = 'Ceci remettra tous les fichier à l\'état : {$a}';
$string['cronwarning'] = 'Le script de maintenance <a href="../../admin/cron.php">cron.php</a> n\'a pas été lancé depuis au moins 30 min - le cron doit obligatoirement être configuré pour permettre à URKUND de fonctionner normalement.';
$string['debugfilter'] = 'Filtrer les fichiers par';
$string['defaultsdesc'] = 'Les réglages suivants sont ceux utilisés par défaut lorsque URKUND est activé à l\'intérieur d\'un module d\'activité.';
$string['defaultupdated'] = 'Valeurs par défaut mises à jour';
$string['deletedwarning'] = 'Ce fichier n\'a pas été trouvé - il se peut qu\'il ait été effacé par l\'utilisateur';
$string['explainerrors'] = 'Cette page liste tous les fichiers qui sont actuellement sous un statut d\'erreur. <br/>Si des fichiers sont supprimés de cette page, ils ne pourront plus être soumis à nouveau à analyse et les erreurs ne s\'afficheront plus pour les enseignants ou les étudiants';
$string['file'] = 'Fichier';
$string['filedeleted'] = 'Le fichier a été supprimé de la file d\'attente';
$string['filereset'] = 'Un fichier a été réinitialisé pour re-soumission à URKUND';
$string['fileresubmitted'] = 'Fichier mis en file d\'attente pour re-soumission';
$string['filesresubmitted'] = '{$a} fichiers re-soumis';
$string['filter30'] = 'Exclure plus anciens que 30 jours';
$string['filter7'] = 'Exclure plus anciens que 7 jours';
$string['filter90'] = 'Exclure plus anciens que 90 jours';
$string['getallscores'] = 'Obtenir toutes les estimations';
$string['getscore'] = 'Obtenir l\'estimation';
$string['getscores'] = 'Obtenir les estimations';
$string['heldevents'] = 'Incidents mis en retrait';
$string['heldeventsdescription'] = 'Ce sont les incidents qui n\'ont pas abouti lors de la première tentative et qui ont été mis en fil d\'attente pour re-soumission - ceci empêche les incidents ultérieurs d\'aboutir, en attendant de plus amples investigations à leur sujet. Certains de ces incidents ne relèvent pas d\'URKUND.';
$string['id'] = 'ID';
$string['identifier'] = 'Identifiant';
$string['module'] = 'Module';
$string['name'] = 'Nom';
$string['nofilter'] = 'Aucun filtre';
$string['noreceiver'] = 'Aucune adresse de destinataire n\'a été spécifiée';
$string['optout'] = 'Opt-out';
$string['pending'] = 'Ce fichier est en attente de soumission à URKUND';
$string['pluginname'] = 'Plugin anti-plagiat URKUND';
$string['previouslysubmitted'] = 'Précédemment soumis en tant que';
$string['processing'] = 'Ce fichier a été soumis à URKUND, en attente que l\'analyse soit disponible';
$string['receivernotvalid'] = 'Ceci n\'est pas une adresse de destinataire valide';
$string['report'] = 'rapport';
$string['restrictcontent'] = 'Soumettre les fichiers remis et les textes en ligne';
$string['restrictcontentfiles'] = 'Ne soumettre que les fichiers remis';
$string['restrictcontent_help'] = 'URKUND peut traiter des fichiers téléchargés mais peut également analyser des textes en ligne à partir de messages de forums ou encore les textes en ligne envoyés en tant que devoirs. Vous pouvez décider quels sont les composants à envoyer à URKUND.';
$string['restrictcontentno'] = 'Tout soumettre';
$string['restrictcontenttext'] = 'Ne soumettre que les textes en ligne';
$string['restrictfiles'] = 'Types de fichiers à soumettre';
$string['resubmit'] = 'Re-soumettre';
$string['resubmitall'] = 'Re-soumettre tout avec le statut : {$a}';
$string['savedconfigfailed'] = 'Une combinaison incorrecte nom d\'utilisateur/mot de passe a été saisie, URKUND a été désactivé, veuillez réessayer.';
$string['savedconfigsuccess'] = 'Les réglages anti-plagiat ont été sauvegardés';
$string['scoreavailable'] = 'Ce fichier a bien été traité par URKUND et un rapport d\'analyse est désormais disponible';
$string['scorenotavailableyet'] = 'Ce fichier n\'a pas encore été traité par URKUND';
$string['sendfiles'] = 'Envoyer les fichiers en file d\'attente';
$string['showall'] = 'Montrer toutes les erreurs';
$string['similarity'] = 'URKUND';
$string['status'] = 'Statut';
$string['studentdisclosure'] = 'Divulgation par l\'étudiant';
$string['studentdisclosuredefault'] = 'Tous les fichiers remis seront soumis au service de détection anti-plagiat URKUND. Si vous souhaitez empêcher votre document d\'être utilisé comme source de comparaison en dehors de ce site par d\'autres organisations, vous pouvez utiliser le lien de désinscription (opt-out) qui vous est fourni après la génération du rapport.';
$string['studentdisclosure_help'] = 'Ce texte sera affiché à tous les étudiants sur la page de téléchargement des fichiers.';
$string['studentemailcontent'] = 'Le fichier que vous avez soumis à {$a->modulename} dans {$a->coursename} a bien été traité par l\'outil anti-plagiat URKUND.
{$a->modulelink}

Si vous souhaitez empêcher votre document d\'être utilisé comme source de comparaison en dehors de ce site par d\'autres organisations, vous pouvez utiliser ce lien de désinscription (opt-out) :
{$a->optoutlink}';
$string['studentemailcontentnoopt'] = 'Le fichier que vous avez soumis à {$a->modulename} dans {$a->coursename} a bien été traité par l\'outil anti-plagiat URKUND.
{$a->modulelink}';
$string['studentemailsubject'] = 'Un fichier a été analysé par URKUND';
$string['submitondraft'] = 'Soumettre le fichier dès le premier téléchargement';
$string['submitonfinal'] = 'Ne soumettre le fichier que lorsque l\'étudiant a cliqué sur « Envoyer pour évaluation »';
$string['timesubmitted'] = 'Date de soumission';
$string['toolarge'] = 'Ce fichier est trop gros pour être traité par URKUND';
$string['unknownwarning'] = 'Une erreur s\'est produite lors de l\'envoi de ce fichier à URKUND';
$string['unsupportedfiletype'] = 'Ce type de fichier n\'est pas pris en charge par URKUND';
$string['updateallowedfiletypes'] = 'Mettre à jour les types de fichiers autorisés et effacer les enregistrements URKUND associés aux activités supprimées.';
$string['urkund'] = 'Plugin anti-plagiat URKUND';
$string['urkund_api'] = 'Adresse d\'intégration URKUND';
$string['urkund_api_help'] = 'Il s\'agit de l\'adresse de l\'API URKUND';
$string['urkunddebug'] = 'Débogage';
$string['urkunddefaults'] = 'Réglages par défaut URKUND';
$string['urkund_draft_submit'] = 'À quel moment le fichier doit-il être soumis';
$string['urkund:enable'] = 'Autoriser l\'enseignant à activer/désactiver URKUND à l\'intérieur d\'une activité';
$string['urkund_enableoptout'] = 'Montrer le lien de désinscription (opt-out)';
$string['urkund_enableoptoutdesc'] = 'Désactiver ceci retirera la possibilité pour les étudiants d\'afficher ou de cacher (selon les réglages par défaut) le contenu de leurs textes dans le cas où ils seraient identifiés comme correspondant à des écrits d\'autres étudiants clients (« opt-in » et « opt-out »). En désactivant cette option, vous certifiez que vous prendrez la responsabilité de gérer vous-même les questions de droit d\'auteur des écrits soumis par vos étudiants et que cela ne contrevient pas à la législation applicable dans votre pays.';
$string['urkund_enableplugin'] = 'Activer URKUND pour {$a}';
$string['urkundexplain'] = 'Pour plus d\'information sur ce plugin, voir : <a href="http://www.urkund.com/fr" target="_blank">http://www.urkund.com/fr/</a>';
$string['urkundfiles'] = 'Fichiers URKUND';
$string['urkund_lang'] = 'Langue';
$string['urkund_lang_help'] = 'Code langue fourni par URKUND';
$string['urkund_password'] = 'Mot de passe';
$string['urkund_password_help'] = 'Mot de passe fourni par URKUND pour l\'accès à l\'API';
$string['urkund_receiver'] = 'Adresse du destinataire';
$string['urkund_receiver_help'] = 'Il s\'agit de l\'adresse unique fournie par URKUND pour l\'enseignant';
$string['urkund:resetfile'] = 'Autoriser l\'enseignant à re-soumettre le fichier à URKUND après une erreur';
$string['urkund_show_student_report'] = 'Montrer le rapport de similitude à l\'étudiant';
$string['urkund_show_student_report_help'] = 'Le rapport de similitude affiche le détail des parties du texte soumis qui ont fait l\'objet d\'un plagiat ainsi que la source où URKUND a retrouvé pour la première fois ce contenu';
$string['urkund_show_student_score'] = 'Montrer le pourcentage de similitude à l\'étudiant';
$string['urkund_show_student_score_help'] = 'Le pourcentage de similitude correspond à la partie du texte soumis qui a été identifié comme identique à un autre écrit.';
$string['urkund_studentemail'] = 'Envoyer un courriel à l\'étudiant';
$string['urkund_studentemail_help'] = 'Cela enverra un courriel à l\'étudiant lorsqu\'un fichier a été traité afin de l\'informer qu\'un rapport d\'analyse est disponible';
$string['urkund_username'] = 'Nom d\'utilisateur';
$string['urkund_username_help'] = 'Nom d\'utilisateur fourni par URKUND pour accéder à l\'API';
$string['urkund:viewreport'] = 'Autoriser l\'enseignant à voir le rapport complet d\'URKUND';
$string['useurkund'] = 'Activer URKUND';
$string['waitingevents'] = 'Il y a {$a->countallevents} incidents en attente du cron et {$a->countheld} incidents retirés en attente de re-soumission';
