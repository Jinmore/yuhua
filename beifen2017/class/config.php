<?php
if(!defined('InEmpireBak'))
{
	exit();
}
define('EmpireBakConfig',TRUE);

//Database
$phome_db_dbtype='mysql';
$phome_db_ver='5.0';
$phome_db_server='localhost';
$phome_db_port='3306';
$phome_db_username='root';
$phome_db_password='root';
$phome_db_dbname='';
$baktbpre='';
$phome_db_char='';

//USER
$set_username='admin';
$set_password='63ee451939ed580ef3c4b6f0109d1fd0';
$set_loginauth='';
$set_loginrnd='7p7nKccJ5syZCNH5tex57ii5NVvbvb';
$set_outtime='60';
$set_loginkey='1';
$ebak_set_keytime=60;
$ebak_set_ckuseragent='';

//COOKIE
$phome_cookiedomain='';
$phome_cookiepath='/';
$phome_cookievarpre='rfezmx_';

//LANGUAGE
$langr=ReturnUseEbakLang();
$ebaklang=$langr['lang'];
$ebaklangchar=$langr['langchar'];

//BAK
$bakpath='bdata';
$bakzippath='zip';
$filechmod='1';
$phpsafemod='';
$php_outtime='1000';
$limittype='';
$canlistdb='';
$ebak_set_moredbserver='';
$ebak_set_hidedbs='';
$ebak_set_escapetype='1';

//EBMA
$ebak_ebma_open=1;
$ebak_ebma_path='phpmyadmin';
$ebak_ebma_cklogin=0;

//SYS
$ebak_set_ckrndvar='jtrxsyjdgwjs';
$ebak_set_ckrndval='4bd40ed0929173d5e38341284175eca5';
$ebak_set_ckrndvaltwo='f1ca39a5210dadecda73ea1d1a72e0ff';
$ebak_set_ckrndvalthree='13cf5de04144a511a77cdf15e132cf22';
$ebak_set_ckrndvalfour='a3c189b168823f3cd9286440fcdd151a';

//------------ SYSTEM ------------
HeaderIeChar();
?>