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
 * Strings for component 'filter_poodll', language 'fr', branch 'MOODLE_37_STABLE'
 *
 * @package   filter_poodll
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate'] = 'Activer Poodll ?';
$string['advancedsettings'] = 'Paramètres avancés';
$string['alwayshtml5'] = 'Toujours utiliser HTML5';
$string['appauthorised'] = 'Le filtre Poodll est autorisé pour ce site.';
$string['appnotauthorised'] = 'Le filtre Poodll n\'est pas autorisé pour ce site.';
$string['audiotranscode'] = 'Conversion automatique en MP3';
$string['audiotranscodedetails'] = 'Conversion des fichiers audio enregistrés ou téléversés au format MP3 avant de les stocker dans Moodle. Fonctionne seulement lorsque vous utilisez le serveur tokyo.poodll.com, ou les enregistrements téléversés si vous utilisez FFMPEG.';
$string['autotryports'] = 'Essayez des ports différents si la connexion échoue';
$string['awsregion'] = 'Région Cloud (AWS)';
$string['awsregion_desc'] = 'Choisissez la région la plus proche de votre serveur Moodle pour obtenir les meilleures performances et respecter les règles ou réglementations de protection des données qui vous concernent.';
$string['bandwidth'] = 'Connexion étudiant en octets par seconde. Affecte la qualité de la Webcam.';
$string['bgtranscode_audio'] = 'Convertir en MP3 en tâche de fond';
$string['bgtranscodedetails_audio'] = 'C\'est plus fiable qu\'exécuter la conversion alors que l\'utilisateur attend. Mais l\'utilisateur n\'obtiendra pas son audio tant que le cron n\'aura pas été exécuté après l\'enregistrement. Ne fonctionne que si vous utilisez FFMPEG et Moodle 2.7 ou supérieur. Pour les enregistrements en MP3 avec l\'enregistreur MP3, la conversion a lieu dans le navigateur, pas sur le serveur. Donc la conversion côté serveur (FFMPEG) ne sera pas utilisée.';
$string['bgtranscodedetails_video'] = 'C\'est plus fiable qu\'exécuter la conversion alors que l\'utilisateur attend. Mais l\'utilisateur n\'obtiendra pas son audio tant que le cron n\'aura pas été exécuté après l\'enregistrement. Ne fonctionne que si vous utilisez FFMPEG et Moodle 2.7 ou supérieur.';
$string['bgtranscode_video'] = 'Convertir en MP4 en tâche de fond';
$string['bmr_recorder'] = 'Rose brûlé';
$string['burntrose_recorder'] = 'Rose brûlé';
$string['cameraback'] = '';
$string['cancel'] = 'Annuler';
$string['capturefps'] = 'Enregistrement vidéo : images par seconde';
$string['captureheight'] = 'Enregistrement vidéo : hauteur';
$string['capturewidth'] = 'Enregistrement vidéo : largeur';
$string['cleartemplate'] = 'Effacer le modèle';
$string['cpapi_heading'] = 'Paramétrages de l\'API Poodll';
$string['cpapisecret'] = 'Clé secrète API Poodll';
$string['cpapisecret_details'] = 'Ceci peut être obtenu à partir de l\'onglet Crédits API de votre espace membre sur Poodll.com.';
$string['cpapiuser'] = 'Nom de l\'utilisateur de l\'API Poodll';
$string['cpapiuser_details'] = 'Il est identique à votre nom d\'utilisateur sur Poodll.com.';
$string['credentialsinvalid'] = 'Le nom d\'utilisateur et la clé secrète de l\'API entrés ne peuvent pas être utilisés pour obtenir un accès. Veuillez les vérifier.';
$string['datasetvars_desc'] = '';
$string['debug_enable'] = 'Activer le débogage';
$string['debug_enable_details'] = 'Si activé, les informations sur les enregistrements seront stockées dans les journaux Moodle. Celles-ci sont destinées à faciliter le dépannage et l\'assistance du service d\'assistance Poodll. Désactivez-le si vous n\'en avez pas besoin sinon vous stockerez des informations inutiles dans les journaux Moodle.';
$string['default_camera'] = 'Caméra par défaut';
$string['defaultwhiteboard'] = 'Tableau blanc par défaut';
$string['displaysubs'] = '{$a->subscriptionname} : expire le {$a->expiredate}';
$string['event_adhoc_completed'] = 'Tâche Poodll Adhoc terminée';
$string['event_adhoc_convert_completed'] = 'Tâche Poodll Adhoc convert terminée';
$string['event_adhoc_convert_registered'] = 'Tâche Poodll Adhoc convert enregistrée';
$string['event_debug_log'] = 'Note de débogage Poodll';
$string['expired'] = 'Poodll ne s\'affiche pas car l\'enregistrement a expiré. Demandez à votre enseignant/administrateur de renouveler votre inscription sur Poodll.com.';
$string['exportdiagnostics'] = 'Exporter';
$string['extensions'] = 'Extensions des fichiers';
$string['extensions_desc'] = 'Une liste CSV (valeurs séparées par des virgules) des extensions de fichier que ce filtre peut analyser.';
$string['extensionsettings'] = 'Paramètres d\'extension de fichier';
$string['ffmpeg'] = 'Convertir avec ffmpeg les fichiers multimédia déposés';
$string['ffmpeg_details'] = 'Le logiciel ffmpeg doit être installé sur votre serveur Moodle, et dans le chemin système. Il devra prendre en charge la conversion en MP3. Essayez d\'abord en ligne de commande. Par exemple : ffmpeg-i somefile.flv somefile.mp3 . C\'est encore « expérimental »';
$string['filtername'] = 'Filtre Poodll';
$string['filter_poodll_audioplayer_heading'] = 'Paramètres du lecteur audio';
$string['filter_poodll_camera_heading'] = 'Paramètres de la webcam (Flash seulement)';
$string['filter_poodll_html5recorder_heading'] = 'Paramètres de l\'enregistreur HTML5';
$string['filter_poodll_mic_heading'] = 'Paramètres du microphone (Flash seulement)';
$string['filter_poodll_mp3recorder_heading'] = 'Paramètres de l\'enregistreur MP3 (Flash seulement)';
$string['filter_poodll_network_heading'] = 'Paramètres du serveur Red5 Poodll';
$string['filter_poodll_registration_explanation'] = 'Depuis PoodLL version 2.8.0 vous devez obtenir et saisir une clé d\'enregistrement PoodLL. L\'enregistrement est actuellement gratuit, et vous pouvez obtenir facilement une clé depuis <a href=\'http://poodll.com/registration\'>http://poodll.com/registration</a>';
$string['filter_poodll_registration_heading'] = 'Enregistrer votre Poodll';
$string['filter_poodll_videogallery_heading'] = 'Paramètres de la galerie vidéo';
$string['filter_poodll_videoplayer_heading'] = 'Paramètres du lecteur vidéo';
$string['filter_poodll_whiteboard_heading'] = 'Paramètres du tableau blanc';
$string['flashonandroid'] = 'Utiliser Flash sur Android';
$string['flashonandroid_desc'] = 'Il est possible d’utiliser Flash sur Android, même si dans de nombreux cas, il n’est pas disponible et il est difficile de communiquer aux étudiants quoi faire. Donc par défaut il est désactivé.';
$string['fluencybuilder_recorder'] = 'Générateur de fluidité';
$string['generalsettings'] = 'Paramètres généraux';
$string['gold_recorder'] = 'Bouton unique';
$string['have_recent_event'] = 'Vous avez trouvé un événement de fin de déplacement récemment déclenché pour : {$a}';
$string['highquality'] = 'haute';
$string['html5ondsafari'] = 'Utiliser sur le bureau Safari';
$string['insert'] = 'Insérer';
$string['jumpcat_explanation'] = 'L\'ensemble complet des paramètres du filtre Poodll se trouve <a href="{$a}"> ici </a>.';
$string['jumpcat_heading'] = 'Paramètres du filtre Poodll';
$string['lowquality'] = 'basse';
$string['mediumquality'] = 'moyenne';
$string['miccanpause'] = 'Permettre la mise en pause (enregistreur MP3 uniquement)';
$string['micecho'] = 'Echo du micro';
$string['micgain'] = 'Gain du micro';
$string['micloopback'] = 'Bouclage du micro';
$string['micrate'] = 'Volume du micro';
$string['micsilencelevel'] = 'Niveau du silence micro';
$string['mobileandwebkit'] = 'Mobiles + navigateurs Webkit (Safari, Chrome, etc.)';
$string['mobile_audio_quality'] = 'Qualité audio';
$string['mobileonly'] = 'Seulement les appareils mobiles';
$string['mobile_os_version_warning'] = '<p>La version de votre système d\'exploitation est trop ancienne.</p>
<ul>
<li>Android : version 4 minimum</li>
<li>iOS : version 6 minimum</li>
</ul>';
$string['mobile_video_quality'] = 'Qualité vidéo';
$string['mp3_nocloud_details'] = 'Ne soumettez pas les enregistrements Flash MP3 dans le Cloud pour le transcoder et le copier.';
$string['mp3opts'] = 'Options de conversion MP3 de FFmpeg';
$string['mp3opts_details'] = 'Laissez ceci vide si vous souhaitez laisser FFmpeg prendre les décisions. Tout ce que vous entrez ici apparaîtra entre [ffmpeg -i myfile.xx ] et [ myfile.mp3 ]';
$string['mp3skin'] = 'Habillage MP3';
$string['mp3skin_details'] = 'Si vous voulez utiliser un habillage de l\'enregistreur, entrez son nom ici. Sinon, saisissez : none.';
$string['mp4opts'] = 'Options de conversion MP4 de FFmpeg';
$string['mp4opts_details'] = 'Laissez ceci vide si vous souhaitez laisser FFmpeg prendre les décisions. Tout ce que vous entrez ici apparaîtra entre [ffmpeg -i myfile.xx ] et [ myfile.mp4 ]';
$string['neverhtml5'] = 'Ne jamais utiliser HTML5';
$string['normal'] = 'Normal';
$string['picqual'] = 'Cible webcam qual. 1 - 10';
$string['placeholderaudiosecs'] = 'Durée audio (secondes)';
$string['plain_recorder'] = 'Brut';
$string['player'] = 'Lecteur {$a}';
$string['playertype'] = 'lecteur';
$string['pluginname'] = 'Filtre Poodll';
$string['poodll:candownloadmedia'] = 'Peut télécharger des médias';
$string['poodllsupportinfo'] = 'Information de support Poodll';
$string['poodlltemplatesadmin'] = 'Administration des modèles du filtre Poodll';
$string['recui_audiogain'] = 'Gain audio';
$string['recui_audiorate'] = 'Taux audio';
$string['recui_btnupload'] = 'Enregistrer ou choisir un fichier';
$string['recui_cancelsnapshot'] = 'Annuler';
$string['recui_choosefile'] = 'Choisir le fichier';
$string['recui_close'] = 'Fermer';
$string['recui_continue'] = 'Continuer';
$string['recui_converting'] = 'conversion';
$string['recui_downloadfile'] = 'Télécharger l\'enregistrement';
$string['recui_echo'] = 'Suppression d\'écho';
$string['recui_finished'] = 'Terminé';
$string['recui_inaudibleerror'] = 'Impossible de vous entendre. Veuillez vérifier les permissions Flash et celles du navigateur internet.';
$string['recui_loopback'] = 'Bouclage';
$string['recui_medianotsupportederror'] = 'Votre type de navigateur ne prend pas en charge l’enregistrement via une connexion HTTP.';
$string['recui_mediaoverconstrainederror'] = 'La webcam / le microphone actuel ne peut pas générer de flux avec les exigences actuelles';
$string['recui_mediasecurityerror'] = 'Votre type de navigateur ne prend pas en charge l’enregistrement via une connexion HTTP.';
$string['recui_mediatypeerror'] = 'Échec d\'obtention du flux car aucun type de média n\'a été spécifié.';
$string['recui_nothingtosaveerror'] = 'Rien n\'a été capturé. Désolé… rien à déposer.';
$string['recui_off'] = 'Désactivé';
$string['recui_ok'] = 'OK';
$string['recui_on'] = 'Activé';
$string['recui_openrecorderapp'] = 'Application Poodll';
$string['recui_pause'] = 'Pause';
$string['recui_play'] = 'Lecture';
$string['recui_pushtospeak'] = 'Appuyez pour parler';
$string['recui_ready'] = 'Prêt';
$string['recui_readytorecord'] = 'Prêt à enregistrer';
$string['recui_record'] = 'Enregistrer';
$string['recui_recordagain'] = 'Enregistrer à nouveau';
$string['recui_recording'] = 'Enregistrement :';
$string['recui_restart'] = 'Redémarrer';
$string['recui_silencelevel'] = 'Niveau de silence';
$string['recui_stop'] = 'Stop';
$string['recui_takesnapshot'] = 'Prendre une photo';
$string['recui_testmic'] = 'Prêt à enregistrer';
$string['recui_time'] = 'Temps :';
$string['recui_timeouterror'] = 'La demande a expiré. Désolé.';
$string['recui_uploaderror'] = 'Une erreur est survenue et votre fichier n\'a PAS été déposé.';
$string['recui_uploading'] = 'téléversement en cours';
$string['refreshtoken'] = 'Actualiser les informations de licence';
$string['REGION_APN1'] = 'Asie pacifique (Tokyo)';
$string['REGION_APN2'] = 'Asie pacifique (Séoul)';
$string['REGION_APS1'] = 'Asie pacifique (Mumbai)';
$string['REGION_APSE1'] = 'Asie pacifique (Singapour)';
$string['REGION_APSE2'] = 'Asie pacifique (Sydney)';
$string['REGION_EUC1'] = 'EU (Francfort)';
$string['REGION_EUW1'] = 'Eu (irlande)';
$string['REGION_EUW2'] = 'EU (Londres)';
$string['registrationkey'] = 'Clé d\'enregistrement';
$string['registrationkey_explanation'] = 'Saisissez votre clé d\'enregistrement PoodLL ici. C\'est gratuit, mais PoodLL ne fonctionnera pas sans cela. Vous pouvez obtenir une clé depuis <a href=\'http://poodll.com/registration\'>http://poodll.com/registration</a>';
$string['serverhttpport'] = 'Port du serveur Red5 Poodll (HTTP)';
$string['serverid'] = 'Identifiant du serveur Red5 Poodll';
$string['servername'] = 'Adresse du serveur Red5 Poodll';
$string['serverport'] = 'Port du serveur Red5 Poodll (RTMP)';
$string['settings'] = 'Paramètres du filtre Poodll';
$string['shadow_recorder'] = 'Ombre';
$string['showdownloadicon'] = 'Afficher l\'icône de téléchargement sous les lecteurs';
$string['sitedefault'] = 'Site par défaut';
$string['size'] = 'Taille';
$string['skinstylevideo_details'] = 'Nom de la classe CSS qui sera ajouté à l’enregistreur vidéo pour aider à la personnalisation de son apparence.';
$string['split_recorder'] = 'Divisé';
$string['studentcam'] = 'Nom choisi pour l\'appareil photo';
$string['studentmic'] = 'Nom choisi pour le microphone';
$string['template'] = 'Le corps du modèle {$a}';
$string['templatealternate'] = 'Contenu alternatif (modèle {$a})';
$string['templatealternate_end'] = 'Fin du contenu alternatif (modèle {$a})';
$string['templatecount'] = 'Nombre de modèles';
$string['templatecount_desc'] = 'Le nombre de modèles que vous pouvez avoir ; 20 par défaut.';
$string['templatedefaults'] = 'Variables par défaut (modèle {$a})';
$string['templateend'] = 'Balise de fin (modèle {$a})';
$string['templateend_desc'] = 'Si votre modèle comprend du contenu utilisateur, par exemple une zone d’information, placez les balises de fermeture ici. L\'utilisateur entrera quelque chose comme {POODLL:mytag_end} pour fermer le filtre.';
$string['templateheading'] = 'Paramètres pour le modèle Poodll {$a}';
$string['templateheadingjs'] = 'Paramètres Javascript.';
$string['templateinstructions'] = 'Instructions (modèle {$a})';
$string['templateinstructions_desc'] = 'Toutes les instructions entrées ici seront affichées sur le formulaire Poodll atto si ce modèle est disponible pour être affiché. Les instructions doivent être courtes sinon l\'affichage du formulaire sera mauvais.';
$string['templatekey'] = 'La clé qui identifie le modèle {$a}';
$string['templatekey_desc'] = 'La clé doit être constituée d\'un mot et ne contenir que des chiffres et des lettres, des traits de soulignement, des traits d\'union et des points.';
$string['templatename'] = 'Le nom qui s\'affiche pour le modèle {$a}';
$string['templatename_desc'] = 'Le nom peut contenir des chiffres et des lettres, des traits de soulignement, des tirets et des points.';
$string['templatepageheading'] = '(T) : {$a}';
$string['templatepageplayerheading'] = '(P) : {$a}';
$string['templatepagewidgetheading'] = '(W) : {$a}';
$string['templaterequire_amd'] = 'Charger via AMD';
$string['templaterequire_amd_desc'] = 'AMD est un mécanisme de chargement javascript. Si vous téléchargez ou créez un lien vers des bibliothèques javascript dans votre modèle, vous devrez peut-être désélectionner cette option. Cela ne s\'applique que sur Moodle 2.9 ou supérieur';
$string['templaterequire_css'] = 'Nécessite CSS (modèle {$a})';
$string['templaterequire_css_desc'] = 'Lien (1 seul uniquement) vers un fichier CSS externe requis par ce modèle. Optionnel.';
$string['templaterequire_jquery'] = 'Nécessite JQuery (modèle {$a})';
$string['templaterequire_js'] = 'Nécessite JS (modèle {$a})';
$string['templaterequire_js_desc'] = 'Lien (1 seul uniquement) vers un fichier JS externe requis par ce modèle. Optionnel.';
$string['templates'] = 'Modèles';
$string['templatescript'] = 'JS personnalisé (modèle {$a})';
$string['templatescript_desc'] = 'Si votre modèle doit exécuter du javascript personnalisé, entrez-le ici. Il sera exécuté une fois que tous les éléments auront été chargés sur la page.';
$string['template_showatto'] = 'Afficher dans Atto (modèle {$a})';
$string['template_showatto_desc'] = 'Affichez un bouton et une forme pour ce widget dans la boîte de dialogue Poodll Widgets pour Atto.';
$string['template_showplayers'] = 'Afficher dans la liste des lecteurs (modèle {$a})';
$string['template_showplayers_desc'] = 'Afficher dans la liste déroulante les lecteurs pouvant être associés à une extension de fichier.';
$string['templatestyle'] = 'CSS personnalisé (modèle {$a})';
$string['templatestyle_desc'] = 'Entrez le code CSS personnalisé que votre modèle utilise ici. Les variables de modèle ne fonctionneront pas ici. Seul le code CSS classique sera accepté.';
$string['templateupdated'] = '{$a} modèles Poodll mis à jour.';
$string['templateversion'] = 'La version de ce modèle {$a}';
$string['templateversion_desc'] = 'Utilisez le contrôle de version sémantique, par exemple 1.0.0. Poodll affichera un bouton de mise à jour lorsque la version prédéfinie est supérieure à la version du modèle.';
$string['tiny'] = 'Tout petit';
$string['transcode_heading'] = 'Paramètres de conversion audio/vidéo (FFMPEG)';
$string['transcode_heading_desc'] = 'Les paramètres de cette section concernent FFMPEG et Red5 et ne s\'appliquent pas à l\'enregistrement dans le cloud.';
$string['type'] = 'Type';
$string['unregistered'] = 'PoodLL ne s\'affiche pas car il n\'a pas été enregistré/validé. L\'enregistrement est gratuit. Demandez à votre enseignant/administrateur de visiter les paramètres du filtre PoodLL et de terminer le processus d\'enregistrement.';
$string['uploadkey_desc'] = 'L\'enregistrement dans le cloud Poodll nécessite une clé de téléchargement pour l\'enregistrement. Vous devriez la recevoir lorsque vous vous inscrivez à Poodll. Entrez la clé de téléchargement ici.';
$string['uploadsecret'] = 'Déposer la phrase secrète';
$string['uploadsecret_desc'] = 'L\'enregistrement dans le cloud Poodll nécessite une phrase secrète de téléchargement pour l\'enregistrement. Vous devriez la recevoir lorsque vous vous inscrivez à Poodll. Entrez la phrase secrète de téléchargement ici.';
$string['usecloudnotifications'] = 'Notifications du cloud';
$string['usecloudnotifications_desc'] = 'Notifications Poodll cloud. Ceci active la notification instantanée indiquant que le transcodage dans le cloud est terminé.';
$string['usecloudrecording_desc'] = 'Enregistrement Poodll dans le cloud. Cela permet le transcodage et d’autres services dans le cloud. L\'application iOS Poodll le requiert, de même que les enregistreurs audio et vidéo html5. Les fichiers enregistrés ne sont pas hébergés dans le cloud.';
$string['useplayer'] = 'Lecteur {$a}';
$string['useplayerdesc'] = 'Le lecteur sélectionné utilisera les informations du modèle approprié.';
$string['value'] = 'valeur';
$string['videotranscode'] = 'Conversion automatique en MP4';
$string['videotranscodedetails'] = 'Convertir automatiquement au format MP4 les fichiers vidéo enregistrés ou déposés avant de les stocker dans Moodle. Fonctionne seulement lorsque vous utilisez le serveur tokyo.poodll.com, ou les enregistrements téléversés si vous utilisez FFMPEG.';
$string['wboardautosave'] = 'Enregistrement automatique (millisecondes)';
$string['wboardautosave_details'] = 'Enregistrer le dessin lorsque l\'utilisateur arrête de dessiner pendant au moins X millisecondes. 0 = pas d\'enregistrement automatique';
$string['wboardheight'] = 'Hauteur du tableau blanc';
$string['wboardnozoom'] = 'Désactiver le zoom';
$string['wboardnozoom_details'] = 'S\'applique uniquement à LiterallyCanvas. Si cette case est cochée, les zooms maximum et minimum sont 1.0, désactivant ainsi la fonction de zoom.';
$string['wboardwidth'] = 'Largeur du tableau blanc';
$string['whiteboardsave'] = 'Enregistrer l\'image';
