<?php

require_once( "includes/DefaultSettings.php" );
require_once( "/srv/settings/wiki_settings.php" );

# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.

#$IP = "/srv/www/htdocs/core";
ini_set( "include_path", ".:$IP:$IP/includes:$IP/languages" );

# If PHP's memory limit is very low, some operations may fail.
ini_set( 'memory_limit', '64M' );

if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
} elseif ( empty( $wgNoOutputBuffer ) ) {
	## Compress output if the browser supports it
	if( !ini_get( 'zlib.output_compression' ) ) @ob_start( 'ob_gzhandler' );
}

$wgSitename         = "openSUSE";

$wgScriptPath       = "";
$wgScript           = "$wgScriptPath/index.php";
$wgRedirectScript   = "$wgScriptPath/redirect.php";

## If using PHP as a CGI module, use the ugly URLs
$wgArticlePath      = "$wgScriptPath/$1";
# $wgArticlePath      = "$wgScript?title=$1";

$wgStylePath        = "$wgScriptPath/skins";
$wgStyleDirectory   = "$IP/skins";
$wgLogo             = "$wgStylePath/common/images/wiki.png";

$wgUploadPath       = "$wgScriptPath/images";
$wgUploadDirectory  = "$IP/images";

$wgEnableEmail = true;
$wgEnableUserEmail = false;

#$wgEmergencyContact = "webmaster@novell.com";
$wgEmergencyContact = "noreply@novell.com";
$wgPasswordSender	= "webmaster@novell.com";

## For a detailed description of the following switches see
## http://meta.wikimedia.org/Enotif and http://meta.wikimedia.org/Eauthent
## There are many more options for fine tuning available see
## /includes/DefaultSettings.php
## UPO means: this is also a user preference option
$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = false;

# If you're on MySQL 3.x, this next line must be FALSE:
$wgDBmysql4 = true;

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = true;

# File Cache
#$wgUseFileCache = true; /* default: false */
#$wgFileCacheDirectory = "/srv/www/htdocs/cache";
$wgShowIPinHeader = false;

## Shared memory settings
$wgMemCachedServers = array( 0 => '127.0.0.1:11211' );
$wgMainCacheType      = CACHE_MEMCACHED;
$wgMessageCacheType = CACHE_ANYTHING;
$wgParserCacheType = CACHE_MEMCACHED;
$configdate = gmdate( 'YmdHis', @filemtime( __FILE__ ) );
$wgCacheEpoch = max( $wgCacheEpoch, $configdate );
$wgEnableSidebarCache = true;
$wgCacheDirectory = "/srv/www/cache";

## To enable image uploads, make sure the 'images' directory
## is writable, then uncomment this:
$wgEnableUploads		= true;
$wgUseImageResize		= true;
$wgUseImageMagick = false;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
# $wgUseTeX			= true;
$wgMathPath         = "{$wgUploadPath}/math";
$wgMathDirectory    = "{$wgUploadDirectory}/math";
$wgTmpDirectory     = "{$wgUploadDirectory}/temp";

$wgLocalInterwiki   = $wgSitename;

$wgSecretKey = "43eec14064049edec12eceb5cb11609dbdb0eeb27646d9996b7274d2a0617432";

$wgCookieDomain = "opensuse.org";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook':
# $wgDefaultSkin = 'monobook';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
# $wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used
$wgSkipSkins = array('cologneblue', 'nostalgia','myskin','standard','chick','simple', 'mono', 'modern');
$wgDefaultSkin = 'bentofluid';
$wgWhitelistEdit = true;
$wgLocalTZoffset = date("Z") / 3600;
$wgGroupPermissions['*'    ]['edit']            = false;
$wgFavicon = "http://www.opensuse.org/favicon.ico";
$wgDiff3 = "/usr/bin/diff3";

   # used for mysql/search settings
   $tmarray = getdate(time());
   $hour = $tmarray['hours'];
   $day = $tmarray['wday'];

   # Ugly hack warning! This needs smoothing out.
   if($wgLocaltimezone) {
       $oldtz = getenv('TZ');
       putenv("TZ=$wgLocaltimezone");
       $wgLocalTZoffset = date('Z') / 3600;
       putenv("TZ=$oldtz");
   }

#--------------------------------------------------------------                                        
# Custom config section                                                                                 
#                                                                                                 
                                                                                                            
##### Namespace configuration #####                                                                     
#                                                        
#                                                                      
# Project (meta) namespace                                                                      
$wgMetaNamespace = 'openSUSE';                                                          
# Custom namespaces                                                                                   
$wgExtraNamespaces[100] = 'SDB';                                                                  
$wgExtraNamespaces[101] = 'SDB_Talk';                                                               
$wgExtraNamespaces[102] = 'Portal';                                                                 
$wgExtraNamespaces[103] = 'Portal_Talk';
$wgExtraNamespaces[104] = 'Archive';
$wgExtraNamespaces[105] = 'Archive_Talk';
$wgExtraNamespaces[106] = 'HCL';
$wgExtraNamespaces[107] = 'HCL_Talk';
# $wgExtraNamespaces[108] = '11.2';
# $wgExtraNamespaces[109] = '11.2_Talk';
$wgExtraNamespaces[110] = 'Book';
$wgExtraNamespaces[111] = 'Book_Talk';

# Enable/Disable subpages                                                                              
$wgNamespacesWithSubpages[-1] = false;                                                             
$wgNamespacesWithSubpages[0] = true;                                                           
$wgNamespacesWithSubpages[1] = true;                                                              
$wgNamespacesWithSubpages[2] = true;                                                          
$wgNamespacesWithSubpages[3] = true;                                                          
$wgNamespacesWithSubpages[4] = true;
$wgNamespacesWithSubpages[5] = true;                                                               
$wgNamespacesWithSubpages[6] = false;                                                       
$wgNamespacesWithSubpages[7] = true;                                                         
$wgNamespacesWithSubpages[8] = false;                                                    
$wgNamespacesWithSubpages[9] = true;                                                     
$wgNamespacesWithSubpages[10] = true;
$wgNamespacesWithSubpages[11] = true;                                                          
$wgNamespacesWithSubpages[100] = true;                                               
$wgNamespacesWithSubpages[101] = true;                                               
$wgNamespacesWithSubpages[102] = true;                                                         
$wgNamespacesWithSubpages[103] = true;                                               
$wgNamespacesWithSubpages[104] = true;                                               
$wgNamespacesWithSubpages[105] = true;
$wgNamespacesWithSubpages[110] = true;

$wgContentNamespaces = array (0, 4, 12, 100, 102, 104, 106, 110);

$wgAllowCategorizedRecentChanges = true;

$wgNamespacesToBeSearchedDefault = array(
        NS_MAIN =>           true,
        102 => true
);

##### Misc #####

$wgUseAjax = true; // Enable Ajax
$wgAllowExternalImages = true; // Enable links to external images
# Allow upload of files with the following extensions            
$wgFileExtensions = array( 'doc', 'docx', 'gif', 'jpg', 'jpeg', 'odp', 'ods', 'odt', 'pdf', 'png', 'ppt', 'pptx', 'svg', 'sxc', 'sxw', 'xls', 'xlsx' );                                                                     
# Add XMPP functionality
$wgUrlProtocols[] = 'xmpp:';

# To be removed once the wiki transition is finished
$wgGroupPermissions['user']['import'] = true;
$wgGroupPermissions['user']['importupload'] = true;
$wgGroupPermissions['sysop']['deleterevision']  = true;
$wgGroupPermissions['user']['move'] = true;

##### Extensions #####
# UserMerge ------------------------
require_once( "$IP/extensions/UserMerge/UserMerge.php" );
// By default nobody can use this function, enable for bureaucrat?
$wgGroupPermissions['bureaucrat']['usermerge'] = true;

# WikiEditor -----------------------
require_once("$IP/extensions/WikiEditor/WikiEditor.php");
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;

# Intersection ---------------------
include("$IP/extensions/intersection/DynamicPageList.php");

# SimpleFeed -----------------------
include("$IP/extensions/SimpleFeed.php");

# Access Manager -------------------
require_once("$IP/extensions/NovellAuthenticationPlugin.php");
$wgAuth = new NovellAuthenticationPlugin();                   

# InputBox -------------------------
require_once($IP.'/extensions/InputBox/InputBox.php');

# FlaggedRevs ----------------------
#include_once("$IP/extensions/FlaggedRevs/FlaggedRevs.php");
#$wgFlaggedRevsNamespaces = array(NS_MAIN, NS_IMAGE, NS_TEMPLATE, 100, 102, 12, 106); // SDB, Portal, Help, HCL
#$wgSimpleFlaggedRevsUI = true;                                                           
#$wgFlaggedRevComments = true;                                                           
#$wgFlaggedRevsLowProfile = false;                                                         
#$wgFlaggedRevTabs = false;
#$wgFlaggedRevsAutoReview = true;
#$wgFlaggedRevsAutoReviewNew = true; 

# ParserFunctions -----------------
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );

# CategoryTree.php ----------------
require_once("$IP/extensions/CategoryTree/CategoryTree.php");
$wgCategoryTreeMaxDepth = array(CT_MODE_PAGES => 2, CT_MODE_ALL => 2, CT_MODE_CATEGORIES => 3);

# EventCountdown ------------------
require_once("$IP/extensions/EventCountdown.php");

# SemanticMediaWiki ---------------
$smwgNamespaceIndex=120;           
include_once("$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php");
enableSemantics('wiki.opensuse.org');                                      

# MultiBoilerplate ----------------
require_once( "$IP/extensions/MultiBoilerplate/MultiBoilerplate.php" );
$wgMultiBoilerplateOptions = false;
$wgMultiBoilerplatePerNamespace = true;

#-------------------------------------------------------------- 

# Replace Text ----------------------------------------------
require_once( "$IP/extensions/ReplaceText/ReplaceText.php" );

# Hermes Notification ----------------
require_once("$IP/extensions/HermesNotification/HermesNotify.php");

# Interwiki links management ----------------------------------
require_once("$IP/extensions/Interwiki/Interwiki.php");
$wgInterwikiMagic=true;
$wgHideInterlanguageLinks=false;
$wgGroupPermissions['*']['interwiki'] = false;
$wgGroupPermissions['sysop']['interwiki'] = true;

# Flash video links ----------------------------------
require_once("extensions/videoflash.php");

# Syntax highlighting ----------------------------------
require_once("$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");

# Category watching ----------------------------------
require_once("$IP/extensions/CategoryWatch/CategoryWatch.php");

// This plugin caused trouble
//require_once( 'extensions/SelectCategory/SelectCategory.php' );
//$wgSelectCategoryNamespaces[100] = true;
//$wgSelectCategoryNamespaces[102] = true;
//$wgSelectCategoryNamespaces[104] = true;
//$wgSelectCategoryNamespaces[106] = true;
//$wgSelectCategoryNamespaces[108] = true;

require_once("$IP/extensions/CrossNamespaceLinks/CrossNamespaceLinks.php");
require_once("$IP/extensions/notitle.php");

// Semantic Maps: 
include_once( "$IP/extensions/SemanticForms/SemanticForms.php");
require_once( "$IP/extensions/Validator/Validator.php" );
require_once( "$IP/extensions/Maps/Maps.php" );
require_once( "$IP/extensions/SemanticMaps/SemanticMaps.php" );
include_once( "/srv/settings/map_settings.php" );

// Smooth Gallery... it is not working right now
//require_once( "$IP/extensions/SmoothGallery/SmoothGallery.php" );
//$wgSmoothGalleryExtensionPath = "/extensions/SmoothGallery";
//$wgSmoothGalleryDelimiter = "\n";

// protect user pages
include_once( "$IP/extensions/UserPageEditProtection/UserPageEditProtection.php" );
$wgOnlyUserEditUserPage = true; /* Set this to true to turn on user page protection */ 
$wgGroupPermissions['sysop']['editalluserpages'] = true; /* Set this to allow sysops to edit all user pages */

// Multiple Uploads
//require_once("$IP/extensions/MultiUpload/SpecialMultipleUpload.php");
//Uncomment this to make it the default uploader
//$wgUploadNavigationUrl = '/index.php?title=Special:MultipleUpload';
//$wgMaxUploadFiles = 5;

include("$IP/extensions/BentoLanguage.php");
include("$IP/extensions/google-coop.php");


$wgShowExceptionDetails = true;
?>
