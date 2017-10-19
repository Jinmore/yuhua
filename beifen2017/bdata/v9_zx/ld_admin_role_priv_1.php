<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_admin_role_priv`;");
E_C("CREATE TABLE `ld_admin_role_priv` (
  `roleid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `m` char(20) NOT NULL,
  `c` char(20) NOT NULL,
  `a` char(20) NOT NULL,
  `data` char(30) NOT NULL DEFAULT '',
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  KEY `roleid` (`roleid`,`m`,`c`,`a`,`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ld_admin_role_priv` values('2','template','template_bak','del','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','template_bak','restore','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','template_bak','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','file','edit_pc_tag','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','file','visualization','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','file','edit_file','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','file','add_file','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','file','edit_file','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','file','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','style','updatename','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','style','disable','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','file','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','style','export','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','style','import','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','style','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','template','style','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','category','batch_edit','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','category','count_items','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','category','add','s=2','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','category','add','s=1','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','category','public_cache','module=admin','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','category','edit','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','category','add','s=0','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','category','init','module=admin','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','position','edit','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','position','add','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','position','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','content_settings','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','create_html','public_index','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','create_html','category','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','create_html','update_urls','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','create_html','show','','1');");
E_D("replace into `ld_admin_role_priv` values('2','release','html','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','attachment','address','update','','1');");
E_D("replace into `ld_admin_role_priv` values('2','attachment','address','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','attachment','manage','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','attachment','manage','dir','','1');");
E_D("replace into `ld_admin_role_priv` values('2','attachment','manage','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','content','listorder','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','create_html','batch_show','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','content','delete','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','content','add_othors','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','content','remove','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','push','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','content','edit','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','content','pass','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','content','add','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','content','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','content','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','content','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','admin_manage','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','setting','save','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','setting','init','&tab=4','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','setting','init','&tab=3','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','setting','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','setting','init','&tab=2','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','site','del','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','site','edit','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','site','add','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','site','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','admin','admin','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','setting','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','index','public_main','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','admin_manage','init','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','admin_manage','public_edit_pwd','','1');");
E_D("replace into `ld_admin_role_priv` values('2','admin','admin_manage','public_edit_info','','1');");
E_D("replace into `ld_admin_role_priv` values('2','content','create_html','public_index','','1');");

require("../../inc/footer.php");
?>