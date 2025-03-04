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
 * Strings for component 'plagiarism_compilatio', language 'fr', branch 'MOODLE_37_STABLE'
 *
 * @package   plagiarism_compilatio
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_expire_soon_content'] = 'Vous disposez du service Compilatio au sein de votre plateforme jusqu\'à la fin du mois. Si l\'abonnement n\'est pas reconduit, vous ne disposerez plus de Compilatio passé cette date.';
$string['account_expire_soon_title'] = 'Votre abonnement Compilatio.net expire bientôt';
$string['activate_compilatio'] = 'Activer le plug-in Compilatio';
$string['admin_disabled_reports'] = 'L\'administrateur a désactivé l\'affichage des rapports de similitudes aux étudiants.';
$string['admin_goto_helpcenter'] = '<a href=\'helpcenter.php?page=moodle-admin\' target=\'_blank\' >Accéder au centre d\'aide de Compilatio</a> pour lire des articles sur l\'administration du plugin Moodle.';
$string['allow_teachers_to_show_reports'] = 'Permettre aux enseignants de mettre les rapports d\'analyse à disposition des étudiants';
$string['analysing'] = 'Document en cours d\'analyse';
$string['analysis_completed'] = 'Analyse terminée : {$a}% de similitudes.';
$string['analysis_date'] = 'Date d\'analyse (lancement programmé uniquement)';
$string['analysis_started'] = '{$a} analyse(s) demandée(s).';
$string['analysis_type'] = 'Lancement des analyses';
$string['analysistype_direct'] = 'Immédiat';
$string['analysis_type_help'] = '<p>Vous disposez de trois options :</p>
<ul>
	<li><strong>Immédiat :</strong> Le document est envoyé à Compilatio et analysé immédiatement </li>
	<li><strong>Manuel :</strong> Le document est envoyé à Compilatio, mais l\'enseignant doit déclencher manuellement les analyses des documents</li>
	<li><strong>Programmé :</strong> Le document est envoyé à Compilatio puis analysé à l\'heure/date choisie(s) </li>
</ul>
<p>Pour que tous les documents soient comparés entre eux lors des analyses, déclenchez les analyses seulement lorsque tous les documents sont présents dans le devoir.</p>';
$string['analysistype_manual'] = 'Manuel';
$string['analysistype_prog'] = 'Programmé';
$string['analyze'] = 'Analyser';
$string['analyzing'] = 'Analyse';
$string['api_key_not_tested'] = 'La clé API n\'a pas pû être vérifiée car la connexion au service Compilatio.net à échouée.';
$string['api_key_not_valid'] = 'La clé API enregistrée est invalide. Elle est spécifique à la plateforme utilisée. Vous pouvez en obtenir une en contactant <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a>.';
$string['api_key_valid'] = 'La clé API enregistrée est valide.';
$string['assign_statistics'] = 'Statistiques des devoirs';
$string['auto_diagnosis_title'] = 'Auto-diagnostic';
$string['average'] = 'Moyenne';
$string['average_similarities'] = 'Le taux de similitudes moyen pour ce devoir est de {$a}%.';
$string['compilatio'] = 'Plugin de détection de plagiat Compilatio';
$string['compilatioapi'] = 'Adresse de l\'API';
$string['compilatioapi_help'] = 'Il s\'agit de l\'adresse de l\'API Compilatio';
$string['compilatiodefaults'] = 'Valeurs par défaut pour Compilatio.';
$string['compilatio_display_student_report'] = 'Permettre à l\'étudiant de visualiser le rapport d\'analyse';
$string['compilatio_display_student_report_help'] = 'Le rapport d’analyse d’un document présente les passages similaires avec les sources détectées et leurs pourcentages de similitudes.';
$string['compilatio_display_student_score'] = 'Rendre le pourcentage de similitudes visible par les étudiants';
$string['compilatio_display_student_score_help'] = 'Le pourcentage de similitudes indique la quantité de texte dans le document qui a été retrouvée dans d’autres documents.';
$string['compilatio_draft_submit'] = 'Quand le fichier doit être soumis à Compilatio';
$string['compilatio:enable'] = 'Autoriser l\'enseignant à activer/désactiver Compilatio au sein d\'une activité';
$string['compilatio_enable_mod_assign'] = 'Activer Compilatio pour les devoirs (assign)';
$string['compilatio_enable_mod_forum'] = 'Activer Compilatio pour les forums';
$string['compilatio_enable_mod_workshop'] = 'Activer Compilatio pour les ateliers (workshop)';
$string['compilatioenableplugin'] = 'Activer Compilatio pour {$a}';
$string['compilatioexplain'] = 'Pour obtenir des informations complémentaires sur ce plugin, voir : <a href="http://compilatio.net" target="_blank">compilatio.net</a>';
$string['compilatio_help_assign'] = 'Obtenir de l\'aide sur le plugin Compilatio';
$string['compilatiopassword'] = 'Clé API';
$string['compilatiopassword_help'] = 'Code personnel fourni par Compilatio pour accéder à l\'API';
$string['compilatio:resetfile'] = 'Autoriser l\'enseignant à soumettre à nouveau le fichier à Compilatio après une erreur';
$string['compilatio_studentemail'] = 'Envoyer un mail à l\'étudiant';
$string['compilatio_studentemail_help'] = 'Ceci enverra un courriel à l\'élève quand un fichier a été traité pour lui faire savoir que le rapport est disponible.';
$string['compilatio:triggeranalysis'] = 'Autoriser l\'enseignant à déclencher manuellement l\'analyse';
$string['compilatio:viewreport'] = 'Autoriser l\'enseignant à consulter le rapport complet depuis Compilatio';
$string['context'] = 'Contexte';
$string['cron_check'] = 'CRON a été exécuté le {$a} pour la dernière fois.';
$string['cron_check_never_called'] = 'CRON n\'a pas été exécuté depuis l\'activation du plugin. Il est possible qu\'il soit mal configuré.';
$string['cron_check_not_ok'] = 'Il n\'a pas été exécuté depuis plus d\'une heure.';
$string['cron_frequency'] = 'Il semblerait qu\'il soit exécuté toutes les {$a} minutes.';
$string['cron_recommandation'] = 'Nous recommandons d\'utiliser un délai inférieur à 15 minutes entre chaque exécution de CRON.';
$string['defaults_desc'] = 'Les paramètres suivants sont utilisés comme valeurs par défaut dans les activités de Moodle intégrant Compilatio.';
$string['defaultupdated'] = 'Les valeurs par défaut ont été mises à jour';
$string['disclaimer_data'] = 'En activant Compilatio, vous acceptez que des informations concernant la configuration de votre plateforme Moodle soient collectées afin de faciliter le support et la maintenance du service.';
$string['display_notifications'] = 'Afficher les notifications';
$string['display_stats'] = 'Afficher les statistiques de ce devoir';
$string['documents_analyzed'] = '{$a->countAnalyzed} document(s) sur {$a->documentsCount} ont été analysés.';
$string['documents_analyzed_between_thresholds'] = '{$a->documentsBetweenThresholds} document(s) entre {$a->greenThreshold}% et {$a->redThreshold}%.';
$string['documents_analyzed_higher_red'] = '{$a->documentsAboveRedThreshold} document(s) supérieur(s) à {$a->redThreshold}%.';
$string['documents_analyzed_lower_green'] = '{$a->documentsUnderGreenThreshold} document(s) inférieur(s) à {$a->greenThreshold}%.';
$string['documents_analyzing'] = '{$a} document(s) en cours d\'analyse.';
$string['documents_in_queue'] = '{$a} document(s) en attente d\'analyse.';
$string['documents_number'] = 'Documents analysés';
$string['enabledandworking'] = 'Le plugin Compilatio est actif et fonctionnel.';
$string['enable_javascript'] = 'Veuillez activer Javascript pour profiter de toutes les fonctionnalités du plugin Compilatio. <br/>
Voici les <a href=\'http://www.enable-javascript.com/fr/\' target=\'_blank\'> instructions pour activer JavaScript dans votre navigateur Web</a>.';
$string['error'] = 'Erreur';
$string['errors'] = 'Erreurs :';
$string['export_csv'] = 'Exporter les données de ce devoir au format CSV';
$string['export_global_csv'] = 'Cliquez-ici pour exporter ces données au format CSV';
$string['export_raw_csv'] = 'Cliquez-ici pour exporter les données brutes au format CSV';
$string['failedanalysis'] = 'Compilatio n\'a pas réussi à analyser votre document :';
$string['filename'] = 'Nom du fichier';
$string['filereset'] = 'Un fichier a été remis à zéro pour re-soumission à Compilatio';
$string['firstname'] = 'Prénom';
$string['get_scores'] = 'Récupère les taux de similitudes depuis Compilatio.net';
$string['global_statistics'] = 'Statistiques globales';
$string['goto_helpcenter'] = 'Cliquez sur le point d\'interrogation pour ouvrir une nouvelle fenêtre et vous connecter au centre d\'aide Compilatio.';
$string['green_threshold'] = 'Vert jusqu\'à';
$string['help_compilatio_format_content'] = 'Compilatio.net prend en charge la plupart des formats utilisés en bureautique et sur Internet.
Les formats suivants sont acceptés :';
$string['help_compilatio_settings_content'] = 'Trois types d’analyse sont disponibles avec le plugin Compilatio :
<ul>
<li>
Immédiat : <br/>
Chaque document est envoyé à Compilatio et analysé dès le dépôt par l’étudiant.
Recommandé si vous souhaitez avoir vos résultats au plus vite et qu’il n’est pas nécessaire que tous les documents de l’activité soient comparés mutuellement.
</li>
<li>
Programmé : <br/>
Choisissez une date de démarrage des analyses Compilatio postérieure à la date limite de rendu par les étudiants.
Recommandé si vous souhaitez comparer tous les documents de votre activité entre eux.
</li>
<li>
Manuel : <br/>
Les documents de votre activité ne sont analysés que si vous démarrez vous-même les analyses.
Pour lancer l’analyse d’un document, cliquez sur le bouton “analyser” de chaque document.
Le bouton “Analyser tous les documents” vous permet de lancer l’analyse de tous les documents présents dans un devoir.
</li>
</ul>';
$string['help_compilatio_settings_title'] = 'Quels réglages choisir dans les paramètres Compilatio d’une activité ?';
$string['hide_area'] = 'Masquer les informations Compilatio';
$string['immediately'] = 'Immédiatement';
$string['indexed_document'] = 'Document ajouté à la bibliothèque de références de votre établissement. Son contenu pourra être utilisé pour détecter des similitudes avec d’autres documents.';
$string['indexing_state'] = 'Ajouter les documents à la bibliothèque de références';
$string['indexing_state_help'] = 'Le contenu des documents est indexé à la bibliothèque de références. Il sera utilisé comme matériel de comparaison pour les analyses ultérieures.';
$string['information_settings'] = 'Informations';
$string['lastname'] = 'Nom';
$string['loading'] = 'Chargement en cours, veuillez patienter…';
$string['manual_analysis'] = 'L\'analyse de ce document doit être déclenchée manuellement.';
$string['manual_send_confirmation'] = '{$a} fichier(s) soumis à Compilatio.';
$string['max_attempts_reach_files'] = 'Les fichiers suivants n\'ont pas pu être analysés par Compilatio. La limite de relance d\'analyses a été atteinte :';
$string['max_file_size_allowed'] = 'Taille maximale des documents : <strong>{$a->Mo} Mo</strong>';
$string['maximum'] = 'Maximum';
$string['minimum'] = 'Minimum';
$string['news_analysis_perturbated'] = 'Analyses Compilatio.net perturbées';
$string['news_incident'] = 'Incident Compilatio.net';
$string['news_maintenance'] = 'Maintenance Compilatio.net';
$string['news_update'] = 'Mise à jour Compilatio.net';
$string['no_document_available_for_analysis'] = 'Aucun document n\'était disponible pour analyse.';
$string['no_documents_available'] = 'Aucun document n\'est disponible pour analyse dans ce devoir.';
$string['no_statistics_yet'] = 'Aucun document n\'a été analysé actuellement.';
$string['not_analyzed'] = 'Les documents suivants n\'ont pas pu être analysés :';
$string['not_analyzed_unextractable'] = '{$a} document(s) n\'ont pas été analysés car ils ne contenaient pas assez de texte.';
$string['not_analyzed_unsupported'] = '{$a} document(s) n\'ont pas été analysés car leur format n\'est pas supporté.';
$string['not_indexed_document'] = 'Document non ajouté à la bibliothèque de références de votre établissement. Son contenu ne sera pas utilisé pour détecter des similitudes avec d’autres documents.';
$string['numeric_threshold'] = 'Le seuil doit être numérique.';
$string['orange_threshold'] = 'Orange jusqu\'à';
$string['owner_file'] = 'RGPD et propriété du devoir';
$string['owner_file_school'] = 'L\'établissement est propriétaire des devoirs';
$string['owner_file_school_details'] = 'En cas de demande de suppression des données personnelles d\'un élève, le contenu des devoirs sera conservé et disponible pour une comparaison future avec de nouveaux devoirs. À échéance du contrat avec Compilatio, toutes les données à caractère personnel de votre établissement, dont les devoirs, sont supprimées dans les délais prévus contractuellement.';
$string['owner_file_student'] = 'L\'élève est l\'unique propriétaire de son devoir';
$string['owner_file_student_details'] = 'En cas de demande de suppression des données personnelles d\\\'un élève, les devoirs seront supprimés de la plateforme Moodle et de la bibliothèque de références Compilatio. Les devoirs ne seront plus disponibles pour une comparaison avec de nouveaux documents.';
$string['pending'] = 'Le fichier est en attente de soumission à Compilatio.';
$string['pending_status'] = 'Attente';
$string['planned'] = 'Planifié';
$string['plugin_disabled'] = 'Le plugin n\'est pas activé pour la plateforme Moodle.';
$string['plugin_disabled_assign'] = 'Le plugin n\'est pas activé pour les devoirs.';
$string['plugin_disabled_forum'] = 'Le plugin n\'est pas activé pour les forums.';
$string['plugin_disabled_workshop'] = 'Le plugin n\'est pas activé pour les ateliers.';
$string['plugin_enabled'] = 'Le plugin est activé pour la plateforme Moodle.';
$string['plugin_enabled_assign'] = 'Le plugin est activé pour les devoirs.';
$string['plugin_enabled_forum'] = 'Le plugin est activé pour les forums.';
$string['plugin_enabled_workshop'] = 'Le plugin est activé pour les ateliers.';
$string['pluginname'] = 'Compilatio - Plugin de détection de plagiat';
$string['previouslysubmitted'] = 'Auparavant soumis comme';
$string['privacy:metadata:core_files'] = 'Fichiers déposés ou créés depuis un champ de saisie';
$string['privacy:metadata:core_plagiarism'] = 'Ce plugin est appelé par le sous-système de détection de plagiat de Moodle';
$string['privacy:metadata:external_compilatio_document'] = 'Informations à propos des fichiers soumis à Compilatio dans la base de données du plugin';
$string['privacy:metadata:external_compilatio_document:email_adress'] = 'Adresse email de l\'utilisateur Compilatio qui a soumis le fichier - attention, cet utilisateur est celui qui est lié à la clé d\'API Compilatio sur la plateforme Moodle (c\'est donc souvent l\'administrateur de la plateforme)';
$string['privacy:metadata:external_compilatio_document:filename'] = 'Le nom de la soumission';
$string['privacy:metadata:external_compilatio_document:firstname'] = 'Prénom de l\'utilisateur Compilatio qui a soumis le fichier - attention, cet utilisateur est celui qui est lié à la clé d\'API Compilatio sur la plateforme Moodle (c\'est donc souvent l\'administrateur de la plateforme)';
$string['privacy:metadata:external_compilatio_document:id'] = 'L\'identifiant de la soumission dans la base de données de Compilatio';
$string['privacy:metadata:external_compilatio_document:indexed'] = 'L\'état d\'indexation de la soumission (si elle est utilisée comme document de référence lors des analyses)';
$string['privacy:metadata:external_compilatio_document:lastname'] = 'Nom de l\'utilisateur Compilatio qui a soumis le fichier - attention, cet utilisateur est celui qui est lié à la clé d\'API Compilatio sur la plateforme Moodle (c\'est donc souvent l\'administrateur de la plateforme)';
$string['privacy:metadata:external_compilatio_document:upload_date'] = 'L\'heure à laquelle le fichier à été enregistré dans la base de données Compilatio';
$string['privacy:metadata:external_compilatio_document:user_id'] = 'L\'identifiant de l\'utilisateur Compilatio qui a soumis le fichier - attention, cet utilisateur est celui qui est lié à la clé d\'API Compilatio sur la plateforme Moodle (c\'est donc souvent l\'administrateur de la plateforme)';
$string['privacy:metadata:external_compilatio_report'] = 'Informations à propos du rapport d\'analyse dans la base de données de Compilatio (uniquement si le document a été analysé)';
$string['privacy:metadata:external_compilatio_report:doc_id'] = 'L\'identifiant Compilatio du document qui a été analysé';
$string['privacy:metadata:external_compilatio_report:end'] = 'La date de fin de l\'analyse';
$string['privacy:metadata:external_compilatio_report:id'] = 'L\'identifiant Compilatio du rapport d\'analyse';
$string['privacy:metadata:external_compilatio_report:plagiarism_percent'] = 'Le pourcentage de similitudes trouvées pour cette soumission';
$string['privacy:metadata:external_compilatio_report:start'] = 'La date de début de l\'analyse';
$string['privacy:metadata:external_compilatio_report:state'] = 'L\'état de l\'analyse de la soumission (Analysé, En attente, Temps dépassé…)';
$string['privacy:metadata:external_compilatio_report:user_id'] = 'L\'identifiant de l\'utilisateur Compilatio qui a soumis le fichier - attention, cet utilisateur est celui qui est lié à la clé d\'API Compilatio sur la plateforme Moodle (c\'est donc souvent l\'administrateur de la plateforme)';
$string['privacy:metadata:plagiarism_compilatio_files'] = 'Informations à propos des fichiers soumis à Compilatio dans la base de données du plugin';
$string['privacy:metadata:plagiarism_compilatio_files:attempt'] = 'Le nombre de fois qu\'un utilisateur a essayé de lancer l\'analyse d\'une soumission';
$string['privacy:metadata:plagiarism_compilatio_files:cm'] = 'L\'identifiant du module de cours où se trouve la soumission';
$string['privacy:metadata:plagiarism_compilatio_files:errorresponse'] = 'La réponse au cas où il y aurait une erreur - actuellement, ce champ n\'est plus utilisé et est automatiquement mis à \'NULL\'';
$string['privacy:metadata:plagiarism_compilatio_files:externalid'] = 'L\'identifiant de la soumission dans la base de données de Compilatio';
$string['privacy:metadata:plagiarism_compilatio_files:filename'] = 'Le nom (éventuellement auto-généré) de la soumission';
$string['privacy:metadata:plagiarism_compilatio_files:id'] = 'L\'identifiant de la soumission dans la base de données de Moodle';
$string['privacy:metadata:plagiarism_compilatio_files:identifier'] = 'La contenthash de la soumission';
$string['privacy:metadata:plagiarism_compilatio_files:reporturl'] = 'L\'adresse URL du rapport d\'analyse';
$string['privacy:metadata:plagiarism_compilatio_files:similarityscore'] = 'Le pourcentage de similitudes trouvées pour cette soumission';
$string['privacy:metadata:plagiarism_compilatio_files:statuscode'] = 'L\'état de l\'analyse la soumission (Analysé, En attente, Temps dépassé…)';
$string['privacy:metadata:plagiarism_compilatio_files:timesubmitted'] = 'L\'heure à laquelle le fichier a été enregistré dans la base de données Moodle du plugin';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'L\'identifiant de l\'utilisateur Moodle qui a fait la soumission';
$string['processing_doc'] = 'Le fichier est en cours d\'analyse par Compilatio.';
$string['programmed_analysis_future'] = 'Les documents seront analysés par Compilatio le {$a}.';
$string['programmed_analysis_past'] = 'Les documents ont été soumis pour analyse à Compilatio le {$a}.';
$string['progress'] = 'Progression :';
$string['queue'] = 'Attente';
$string['queued'] = 'Le document est en attente d\'analyse et va bientôt être traité par Compilatio';
$string['red_threshold'] = 'rouge au delà';
$string['report'] = 'rapport';
$string['reset'] = 'Relancer';
$string['restart_failed_analysis'] = 'Relancer les analyses échouées';
$string['restart_failed_analysis_title'] = 'Relance des analyses échouées :';
$string['results'] = 'Résultats :';
$string['saved_config_failed'] = '<strong>La combinaison adresse - clé API est incorrecte. Le plugin est désactivé, merci de réessayer.<br/>
								La page d\'<a href="autodiagnosis.php">auto-diagnostic</a> peut vous aider à configurer ce plugin.</strong><br/>
								Erreur :';
$string['savedconfigsuccess'] = 'Les paramètres ont bien été sauvegardés';
$string['send_files'] = 'Envoie les fichiers à Compilatio.net pour détection de plagiat';
$string['showwhenclosed'] = 'Quand l\'activité est fermée';
$string['similarities'] = 'Similitudes';
$string['similarities_disclaimer'] = 'Vous pouvez analyser les similitudes présentes dans les documents de ce devoir à l’aide du logiciel <a href=\'http://compilatio.net\' target=\'_blank\'>Compilatio</a>.<br/>
	Attention, des similitudes mesurées lors d’une analyse ne révèlent pas nécessairement un plagiat.
	Le rapport d’analyse vous aide à comprendre si les similitudes correspondent à des emprunts et citations convenablement identifiés ou à des plagiats.';
$string['similarity_percent'] = '% de similitudes';
$string['startallcompilatioanalysis'] = 'Analyser tous les documents';
$string['startanalysis'] = 'Démarrer l\'analyse';
$string['start_analysis_title'] = 'Démarrage manuel des analyses';
$string['statistics_title'] = 'Statistiques';
$string['studentdisclosuredefault'] = 'L\'ensemble des fichiers envoyés seront soumis au service de détection de plagiat de Compilatio';
$string['studentemailcontent'] = 'Le fichier que vous avez soumis à {$a->modulename} dans {$a->coursename} a été traité par l\'outil de détection de plagiat Compilatio
{$a->modulelink}';
$string['studentemailsubject'] = 'Le fichier a été traité par Compilatio';
$string['students_disclosure'] = 'Message de prévention pour les étudiants';
$string['students_disclosure_help'] = 'Ce texte sera affiché à tous les étudiants sur la page de dépôt de fichier.';
$string['submitondraft'] = 'Soumettre un fichier quand le premier est chargé';
$string['submitonfinal'] = 'Soumettre un fichier lorsqu\'un étudiant l\'envoie pour l\'analyse';
$string['subscription_state'] = '<strong>Votre abonnement Compilatio.net est valable jusqu\'à la fin du mois de {$a->end_date}. Ce mois-ci, vous avez analysé l\'équivalent de {$a->used} document(s) de moins de 5 000 mots.</strong>';
$string['tabs_title_help'] = 'Aide';
$string['tabs_title_notifications'] = 'Notifications';
$string['tabs_title_stats'] = 'Statistiques';
$string['teacher'] = 'Enseignant';
$string['thresholds_description'] = 'Indiquez les seuils que vous souhaitez utiliser, afin de faciliter le repérage des rapports d’analyse (% de similitudes) :';
$string['thresholds_settings'] = 'Réglage des seuils d\'affichage des taux de similitudes :';
$string['timesubmitted'] = 'Soumis à Compilatio le';
$string['toolarge'] = 'Le fichier est trop volumineux pour être traité par Compilatio. Taille maximale : {$a->Mo} Mo';
$string['trigger_timed_analyses'] = 'Déclenche les analyses de plagiat programmées';
$string['unextractable'] = 'Le contenu de ce document n\'a pas pu être extrait';
$string['unextractablefile'] = 'Votre document ne contient pas assez de mots, ou le texte n’a pas pu être extrait correctement.';
$string['unextractable_files'] = 'Le(s) fichier(s) suivant(s) n\'ont pas pu être analysés par Compilatio. Ils ne contenaient pas assez de mots ou leur contenu n\'a pas pu être extrait correctement :';
$string['unknownlang'] = 'Attention, la langue de certains passages de ce document n\'a pas été reconnue.';
$string['unknownwarning'] = 'Une erreur s\'est produite lors de l\'envoi du fichier à Compilatio';
$string['unsent_documents'] = 'Document(s) non-soumis';
$string['unsent_documents_content'] = 'Attention, ce devoir contient un (ou des) document(s) non soumis à Compilatio.';
$string['unsupported'] = 'Document non supporté';
$string['unsupported_files'] = 'Le(s) fichier(s) suivant(s) n\'ont pas pu être analysés par Compilatio car leur format n\'est pas supporté :';
$string['unsupportedfiletype'] = 'Ce type de fichier n\'est pas supporté par Compilatio';
$string['updatecompilatioresults'] = 'Rafraîchir les informations';
$string['updated_analysis'] = 'Les résultats de l\'analyse Compilatio ont été mis à jour.';
$string['update_in_progress'] = 'Mise à jour des informations en cours';
$string['update_meta'] = 'Exécute les tâches planifiées par Compilatio.net';
$string['use_compilatio'] = 'Permettre de détecter les similitudes avec Compilatio';
$string['waitingforanalysis'] = 'Ce fichier sera traité le {$a}';
$string['webservice_not_ok'] = 'Le service web n\'a pas pu être contacté. Il est possible que votre pare-feu bloque la connexion.';
$string['webservice_ok'] = 'Le serveur est capable de contacter le service web.';
$string['webservice_unreachable_content'] = 'Le service Compilatio.net est actuellement indisponible. Veuillez nous excuser pour la gêne occasionnée.';
$string['webservice_unreachable_title'] = 'Indisponibilité Compilatio.net';
