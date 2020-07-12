<?php
//  ------------------------------------------------------------------------ //
//  Author: Designburo.nl (sales@designburo.nl)                              //
//  http://www.designburo.nl                                                 //
//  Project: Xurl   v1.2                                                     //
//  Copyright (c) 2009 by Designburo.nl This material may be distributed     //
//  only subject to the terms and conditions set forth in the                //
//  Open Public License, v1.0 or later.                                      //
//  https://fedoraproject.org/wiki/Licensing/Open_Public_License             //
//  ------------------------------------------------------------------------ //
define('_XURL_SUBMIT','Raccourcir');
define('_XURL_SANITIZE','Texte � sanitizer ');
define('_XURL_S_SUBMIT','Sanitizer');
define('_XURL_WRONG_URL','L\'url soumise n\'est pas valide.');

// admin section
define('_AM_XURL_TAB1','Au Sujet');
define('_AM_XURL_TAB1_HEAD','Bienvenue sur Xurl');
define('_AM_XURL_TAB1_FOOT1','Le module Xurl est un �l�ment de ');
define('_AM_XURL_TAB1_FOOT2',' une "Ligne de Produits"');
define('_AM_XURL_TAB2','Pr�f�rences');
define('_AM_XURL_TAB2_HEAD','<h2>Pr�f�rences Xurl</h2><br />S\'il vous pla�t, assurez-vous que tous les param�tres soient corrects.<br />Nous avons besoin que les param�tres MySQL permettent que les visiteurs soient redirig�s en cliquant sur un lien quand ils ne sont des utilisateurs enregistr�s de votre site. Sans ces informations MySQL, XOOPS v�rifiera toujours si l\'utilisateur est enregistr�.<br />Les param�tres SQL doit �tre corrects, les pr�f�rences ci-dessous sont celles que vous avez besoin de modifier pour votre utilisation du module.');
define('_AM_XURL_TAB2_HEAD2','<strong>Pr�f�rences</strong>');

define('_AM_XURL_UPAGE','Allez au module (c�t� utilisateur)');
//tab1
define('_AM_XURL_VERSION','Version');
define('_AM_XURL_DESC','Description');
define('_AM_XURL_AUTHOR','Auteur');
define('_AM_XURL_LCNSE','Licence');
define('_AM_XURL_STATUS','Status');
define('_AM_XURL_RELEASED','Publication');

//tab2
define('_AM_XURL_SET_TABLEH1','Nom');
define('_AM_XURL_SET_TABLEH2','Valeur');
define('_AM_XURL_SET_TABLEH3','Description');
define('_AM_XURL_SET_FOOTER','Derni�res pr�f�rences enregistr�es : ');
define('_AM_XURL_SET_FOOTER_ERR','Impossible d\'inscrire le fichier de configuration. S\'il vous pla�t, assurez-vous que les attributs d\'�criture soient correctement d�finis !');

define('_AM_XURL_YES','Oui');
define('_AM_XURL_NO','Non');
define('_AM_XURL_SET_BASE','Url de base');
define('_AM_XURL_SET_BASE_D','Le nom de base pour rediriger les URLs, par exemple : http://www.xoofoo.org/. N\'oubliez pas le slash "/" � la fin.');
define('_AM_XURL_SET_ERR','Erreur d\'url');
define('_AM_XURL_SET_ERR_D','Si une URL raccourcie demand�e n\'existe pas, vers quelle adresse la personne doit �tre redirig�e ?');
define('_AM_XURL_SET_RESTRICT','Acc�s limit� ?');
// Edited in v1.2
define('_AM_XURL_SET_RESTRICT_D','Lorsqu\'elle est activ�e, seuls les utilisateurs autoris� de votre site peuvent cliquer sur une URL raccourcie, un utilisateur non autoris� sera redirig� vers une autre URL.');
// end edited in v1.2
define('_AM_XURL_SET_RESTR_R','Url de redirection pour les "limit�s"');
define('_AM_XURL_SET_RESTR_R_D','Si l\'acc�s est restreint, o� le visiteur non enregistr� ? (Par exemple, si un utilisateur clique sur une URL raccourcie, mais son acc�s est limit�, sur quelle adresse doit-il �tre redirig� ?) Assurez-vous que cette URL soit autoris�e aux utilisateurs (par exemple les utilisateurs anonymes).');

define('_AM_XURL_SET_SAVE','Enregistrer les pr�f�rences');


// Added version 1.1
define('_AM_XURL_TAB3','Organisation');
define('_AM_XURL_TAB4','Aide');
define('_XURL_INDEX_TEXT','<h1>Xurl</h1>Raccourcir de longues URLs pour les utiliser par exemple dans Twitter.<br />Dans ce cas, Xurl utilise le service "2lk.nl" pour raccourcir les urls.<br />Quiconque est enregistr� sur "EasyTCPtransfer" peut utiliser cela !<br/><br/>');
define('_XURL_INDEX2_TEXT','<h1>Xurl</h1>Raccourcir de longues URLs pour les utiliser par exemple dans Twitter.<br />Il n\'est pas conseill� d\'autoriser cette fonctionnalit� aux utilisateurs anonymes.<br /><br />');
define('_AM_XURL_STAT_C1','Cl�');
define('_AM_XURL_STAT_C2','URL');
define('_AM_XURL_STAT_C3','Utilisateur');
define('_AM_XURL_STAT_C4','Hits');
define('_AM_XURL_STAT_INTRO1','Nous avons ');
define('_AM_XURL_STAT_INTRO2','d\'url(s) raccourcie(s) dans notre base de donn�es.');
define('_AM_XURL_STAT_INTRO3','Afficher les enregistrements ');
define('_AM_XURL_STAT_INTRO4','Cliquez sur le nom de la colonne pour trier sur celle-ci, ou sur les ic�nes "montante" et "descendante" afin de trier par ordre, ou encore sur un nom d\'utilisateur pour ne montrer que les Xurls de ce dernier.');
define('_AM_XURL_STAT_INTRO5','Afficher les Xurls en filtrant par utilisateur : ');
define('_AM_XURL_STAT_INTRO6','Cliquez ici pour afficher les enregistrements.');
define('_AM_XURL_STAT_NEXT','Suivant >>>');
define('_AM_XURL_STAT_PREV','<<< Pr�c�dent');

// End added version 1.1

// Added in v1.2

define('_AM_XURL_SET_QR','Utiliser les BarCodes QRC dans le module Xurl ?');
define('_AM_XURL_SET_QR_D','Si activ�, des BarCodes QRC seront cr��s pour les Urls raccourcies.');
define('_AM_XURL_SET_QR_PLUGIN','Utilisez Xurl dans les plugins ?');
define('_AM_XURL_SET_QR_PLUGIN_D','"Oui", permettra � d\'autres modules (apr�s adaptation) de raccourcir les URLs. "Aucun", limitera l\'utilisation au module Xurl uniquement.');
define('_AM_XURL_STAT_C5','Limit�');
define('_AM_XURL_STAT_C6','Groupe');
define('_AM_XURL_STAT_C7','Date de cr�ation');
define('_AM_XURL_STAT_C8','Dernier clic');
define('_AM_XURL_STAT_C9','#Spam');
define('_XURL_MAN_NODEL','Vous n\'�tes pas autoris� � utiliser cette fonctionnalit�');
define('_XURL_MAN_NOOWN','Vous n\'�tes pas le propri�taire de cette adresse URL');
define('_XURL_MAN_SQLERR','Erreur SQL � l\'effacement de l\'enregistrement');
define('_XURL_MAN_NOURL','Impossible de trouver cette Url raccourcie');
define('_XURL_MAN_SUCCESS',' a �t� retir�e.');
define('_XURL_MAN_SHOW1','Afficher');
define('_XURL_MAN_SHOW2','Gestionnaire des Urls raccourcies');
define('_XURL_MAN_CREA1','Vous avez cr��(e)');
define('_XURL_MAN_CREA2','URLs courtes');
define('_XURL_MAN_S_URL','URL raccourcie');
define('_XURL_MAN_O_URL','URL originale');
define('_XURL_MAN_DATE','Cr��');
define('_XURL_MAN_LCLICK','Derni�re visite');
define('_XURL_MAN_HITS','Hits');
define('_XURL_MAN_DEL','Effacer');
define('_XURL_NEW_URL','Nouvelle Url raccourcie');
define('_XURL_STO_URL','Url enregistr�e');
define('_XURL_ORI_URL','Url originale');
define('_XURL_WRONG_PASS','Mot de passe bizarre');
define('_XURL_SAN_TXT','Texte sanitiz�');
define('_XURL_ORI_TXT','Texte original');
define('_XURL_QRCODE','Votre BarCode QRC');
	   
	   
// End added in v1.2

/**
 * @translation     AFUX (Association Francophone des Utilisateurs de Xoops) (http://www.afux.org/)
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: ISO-8859-1
 *
 * @Translator      kris (http://www.xoofoo.org)
 *
 * @version         $Id $
**/
?>