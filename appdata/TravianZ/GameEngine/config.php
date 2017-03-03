<?php
###############################  S  T  A  R  T   ################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       config.php                                                  ##
##  Version        8.0                                                         ##
##  Developed by:  Dzoki and Dixie Edited by Advocaite                         ##
##  License:       TravianZ Project                                            ##
##  Copyright:     TravianZ (c) 2013-2014. All rights reserved.                ##
##  Modified by:   Shadow and ronix                                            ##
##                                                                             ##
#################################################################################

//////////////////////////////////
// *****  ERROR REPORTING  *****//
//////////////////////////////////
// (E_ALL ^ E_NOTICE) = enabled
// (0) = disabled
define("ERROR_REPORT","error_reporting (E_ALL ^ E_NOTICE ^ E_DEPRECATED);");
error_reporting (E_ALL ^ E_NOTICE ^ E_DEPRECATED);

//////////////////////////////////
// *****  SERVER SETTINGS  *****//
//////////////////////////////////

// ***** Name
define("SERVER_NAME","TravianZ");

// ***** Time zone added by ronix
// Defines server time zone.
define("TIMEZONE","Australia/Melbourne");
date_default_timezone_set(TIMEZONE);

// ***** Started
// Defines when has server started.
define("COMMENCE","1488504982");

// ***** Server Start Date / Time
define("START_DATE", "03/03/2017");
define("START_TIME", "12:35");

// ***** Language
// Choose your server language.
define("LANG","en");

// ***** Speed
// Choose your server speed. NOTICE: Higher speed, more likely
// to have some bugs. Lower speed, most likely no major bugs.
// Values: 1 (normal), 3 (3x speed) etc...
define("SPEED", "3");

// ***** World size
// Defines world size. NOTICE: DO NOT EDIT!!
define("WORLD_MAX", "25");

// ***** Graphic Pack
// True = enabled, false = disabled
//!!!!!!!!!!!! DO NOT ENABLE !!!!!!!!!!!!
define("GP_ENABLE",false);
// Graphic pack location (default: gpack/travian_default/)
define("GP_LOCATE", "gpack/travian_default/");

// ***** Troop Speed
// Values: 1 (normal), 3 (3x speed) etc...
define("INCREASE_SPEED","1");

// ***** Evasion Speed
define("EVASION_SPEED","1");

// ***** Trader capacity
// Values: 1 (normal), 3 (3x speed) etc...
define("TRADER_CAPACITY","1");

// ***** Cranny capacity
define("CRANNY_CAPACITY","1");

// ***** Trapper capacity
define("TRAPPER_CAPACITY","1");

// ***** Village Expand
// 1 = slow village expanding - more Cultural Points needed for every new village
// 0 = fast village expanding - less Cultural Points needed for every new village
define("CP", 1);

// ***** Demolish Level Required
// Defines which level of Main building is required to be able to
// demolish. Min value = 1, max value = 20
// Default: 10
define("DEMOLISH_LEVEL_REQ","10");

// ***** Change storage capacity
define("STORAGE_MULTIPLIER","1");
define("STORAGE_BASE",800*STORAGE_MULTIPLIER);

// ***** Quest
// Ingame quest enabled/disabled.
define("QUEST",true);
//quest type : 25 = Travian Official 
//             37 = TravianZ Extended 
define("QTYPE",37);

// ***** Beginners Protection
// 3600 = 1 hour
// 3600*12 = 12 hours
// 3600*24 = 1 day
// 3600*24*3 = 3 days
// You can choose any value you want!
define("PROTECTION","43200");

// ***** Enable WW Statistics
define("WW",False);

// ***** Show Natars in Statistics
define("SHOW_NATARS",False); 

// ***** Natars Units Multiplier
define("NATARS_UNITS",100); 

// ***** Nature troops regeneration time
define("NATURE_REGTIME",43200); 

// ***** Enable T4 is Coming screen
define("T4_COMING",false);

// ***** Activation Mail
// true = activation mail will be sent, users will have to finish registration
//        by clicking on link recieved in mail.
// false =  users can register with any mail. Not needed to be real one.
define("AUTH_EMAIL",false);

// ***** PLUS
//Plus account lenght
define("PLUS_TIME",(3600*24*7));
//+25% production lenght
define("PLUS_PRODUCTION",(3600*24*7));
// ***** Medal Interval check
define("MEDALINTERVAL",(3600*24*7));
// ***** Great Workshop
define("GREAT_WKS",False);
// ***** Tourn threshold
define("TS_THRESHOLD",20);  

// ***** Register open/close
define("REG_OPEN",True);

// ***** Peace system
// 0 = None
// 1 = Normal
// 2 = Christmas
// 3 = New Year
// 4 = Easter
define("PEACE",0);

//////////////////////////////////
//    **** LOG SETTINGS  ****   //
//////////////////////////////////
// LOG BUILDING/UPGRADING
define("LOG_BUILD",false);
// LOG RESEARCHES
define("LOG_TECH",false);
// LOG USER LOGIN (IP's)
define("LOG_LOGIN",false);
// LOG GOLD
define("LOG_GOLD_FIN",false);
// LOG ADMIN
define("LOG_ADMIN",false);
// LOG ATTACK REPORTS
define("LOG_WAR",false);
// LOG MARKET REPORTS
define("LOG_MARKET",false);
// LOG ILLEGAL ACTIONS
define("LOG_ILLEGAL",false);



//////////////////////////////////
// ****  NEWSBOX SETTINGS  **** //
//////////////////////////////////
//true = enabled
//false = disabled
define("NEWSBOX1",false);
define("NEWSBOX2",false);
define("NEWSBOX3",false);



//////////////////////////////////
//   ****  SQL SETTINGS  ****   //
//////////////////////////////////

// ***** SQL Hostname
// example. sql106.000space.com / localhost
// If you host server on own PC than this value is: localhost
// If you use online hosting, value must be written in host cpanel
define("SQL_SERVER", "mysql");

// ***** Database Username
define("SQL_USER", "trav");

// ***** Database Password
define("SQL_PASS", "trav");

// ***** Database Name
define("SQL_DB", "travian");

// ***** Database - Table Prefix
define("TB_PREFIX", "s1_");

// ***** Database type
// 0 = MYSQL
// 1 = MYSQLi
// default: 1
define("DB_TYPE", 0);



////////////////////////////////////
//   ****  EXTRA SETTINGS  ****   //
////////////////////////////////////

// ***** Censore words
//define("WORD_CENSOR", "%ACTCEN%");

// ***** Words (censore)
// Choose which words do you want to be censored
//define("CENSORED","%CENWORDS%");


// ***** Limit Mailbox
// Limits mailbox to defined number of mails. (IGM's)
define("LIMIT_MAILBOX",false);
// If enabled, define number of maximum mails.
define("MAX_MAIL","30");

// ***** Include administrator in statistics/rank
define("INCLUDE_ADMIN", False);



////////////////////////////////////
//   ****  ADMIN SETTINGS  ****   //
////////////////////////////////////

// ***** Admin Email
define("ADMIN_EMAIL", "");

// ***** Admin Name
define("ADMIN_NAME", "");



//////////////////////////////////////////
//   ****  DO NOT EDIT SETTINGS  ****   //
//////////////////////////////////////////
define("TRACK_USR","");
define("USER_TIMEOUT",""); 
define("ALLOW_BURST",false);
define("BASIC_MAX",1);
define("INNER_MAX",1);
define("PLUS_MAX",1);
define("ALLOW_ALL_TRIBE",false);
define("CFM_ADMIN_ACT",true);
define("SERVER_WEB_ROOT",false);
define("USRNM_SPECIAL",true);
define("USRNM_MIN_LENGTH",3);
define("PW_MIN_LENGTH",4);
define("BANNED",0);
define("AUTH",1);
define("USER",2);
define("MULTIHUNTER",8);
define("ADMIN",9);
define("COOKIE_EXPIRE", 60*60*24*7); 
define("COOKIE_PATH", "/"); 


////////////////////////////////////////////
//   ****  DOMAIN/SERVER SETTINGS  ****   //
////////////////////////////////////////////
define("DOMAIN", "http://localhost/");
define("HOMEPAGE", "http://localhost/");
define("SERVER", "http://localhost/");

$requse = 0;

###############################  E    N    D   ##################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       config.php                                                  ##
##  Version        4.8.5                                                       ##
##  Developed by:  Dzoki and Dixie Edited by Advocaite                         ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

?>
