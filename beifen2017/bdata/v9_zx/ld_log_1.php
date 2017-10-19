<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_log`;");
E_C("CREATE TABLE `ld_log` (
  `logid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field` varchar(15) NOT NULL,
  `value` int(10) unsigned NOT NULL DEFAULT '0',
  `module` varchar(15) NOT NULL,
  `file` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL,
  `querystring` varchar(255) NOT NULL,
  `data` mediumtext NOT NULL,
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`logid`),
  KEY `module` (`module`,`file`,`action`),
  KEY `username` (`username`,`action`)
) ENGINE=MyISAM AUTO_INCREMENT=239 DEFAULT CHARSET=utf8");
E_D("replace into `ld_log` values('1','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 15:43:36');");
E_D("replace into `ld_log` values('2','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 15:43:36');");
E_D("replace into `ld_log` values('3','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 15:43:45');");
E_D("replace into `ld_log` values('4','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:44:03');");
E_D("replace into `ld_log` values('5','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:44:12');");
E_D("replace into `ld_log` values('6','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:44:13');");
E_D("replace into `ld_log` values('7','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:44:13');");
E_D("replace into `ld_log` values('8','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:44:30');");
E_D("replace into `ld_log` values('9','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:44:36');");
E_D("replace into `ld_log` values('10','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:44:37');");
E_D("replace into `ld_log` values('11','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:44:57');");
E_D("replace into `ld_log` values('12','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_edit','','1','wz010','127.0.0.1','2014-06-18 15:44:58');");
E_D("replace into `ld_log` values('13','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:44:59');");
E_D("replace into `ld_log` values('14','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:46:28');");
E_D("replace into `ld_log` values('15','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:46:31');");
E_D("replace into `ld_log` values('16','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:46:42');");
E_D("replace into `ld_log` values('17','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:46:46');");
E_D("replace into `ld_log` values('18','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_edit','','1','wz010','127.0.0.1','2014-06-18 15:46:47');");
E_D("replace into `ld_log` values('19','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:46:48');");
E_D("replace into `ld_log` values('20','','0','admin','','index','?m=admin&c=index&a=login','','0','wz010','127.0.0.1','2014-06-18 15:48:01');");
E_D("replace into `ld_log` values('21','','0','admin','','index','?m=admin&c=index&a=login','','0','wz010','127.0.0.1','2014-06-18 15:48:11');");
E_D("replace into `ld_log` values('22','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:48:35');");
E_D("replace into `ld_log` values('23','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:48:36');");
E_D("replace into `ld_log` values('24','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:48:38');");
E_D("replace into `ld_log` values('25','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_edit','','1','wz010','127.0.0.1','2014-06-18 15:48:39');");
E_D("replace into `ld_log` values('26','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:48:39');");
E_D("replace into `ld_log` values('27','','0','admin','','index','?m=admin&c=index&a=login','','0','wz010','127.0.0.1','2014-06-18 15:50:49');");
E_D("replace into `ld_log` values('28','','0','admin','','index','?m=admin&c=index&a=login','','0','wz010','127.0.0.1','2014-06-18 15:50:56');");
E_D("replace into `ld_log` values('29','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:51:04');");
E_D("replace into `ld_log` values('30','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:51:08');");
E_D("replace into `ld_log` values('31','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:51:10');");
E_D("replace into `ld_log` values('32','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_edit','','1','wz010','127.0.0.1','2014-06-18 15:51:11');");
E_D("replace into `ld_log` values('33','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 15:51:12');");
E_D("replace into `ld_log` values('34','','0','admin','','category','?m=admin&c=category&a=count_items','','1','wz010','127.0.0.1','2014-06-18 15:54:27');");
E_D("replace into `ld_log` values('35','','0','video','','video','?m=video&c=video&a=subscribe_list','','1','wz010','127.0.0.1','2014-06-18 15:54:40');");
E_D("replace into `ld_log` values('36','','0','video','','video','?m=video&c=video&a=open','','1','wz010','127.0.0.1','2014-06-18 15:54:40');");
E_D("replace into `ld_log` values('37','','0','video','','video','?m=video&c=video&a=open','','1','wz010','127.0.0.1','2014-06-18 15:54:40');");
E_D("replace into `ld_log` values('38','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:54:50');");
E_D("replace into `ld_log` values('39','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:54:52');");
E_D("replace into `ld_log` values('40','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:54:53');");
E_D("replace into `ld_log` values('41','','0','admin','','module','?m=admin&c=module&a=uninstall','','1','wz010','127.0.0.1','2014-06-18 15:55:06');");
E_D("replace into `ld_log` values('42','','0','admin','','module','?m=admin&c=module&a=cache','','1','wz010','127.0.0.1','2014-06-18 15:55:07');");
E_D("replace into `ld_log` values('43','','0','admin','','module','?m=admin&c=module&a=uninstall','','1','wz010','127.0.0.1','2014-06-18 15:55:34');");
E_D("replace into `ld_log` values('44','','0','admin','','module','?m=admin&c=module&a=uninstall','','1','wz010','127.0.0.1','2014-06-18 15:55:43');");
E_D("replace into `ld_log` values('45','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:56:04');");
E_D("replace into `ld_log` values('46','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:56:06');");
E_D("replace into `ld_log` values('47','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:56:07');");
E_D("replace into `ld_log` values('48','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:56:18');");
E_D("replace into `ld_log` values('49','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:56:21');");
E_D("replace into `ld_log` values('50','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 15:56:22');");
E_D("replace into `ld_log` values('51','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:03:06');");
E_D("replace into `ld_log` values('52','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:03:08');");
E_D("replace into `ld_log` values('53','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:03:08');");
E_D("replace into `ld_log` values('54','','0','pay','','payment','?m=pay&c=payment&a=pay_list','','1','wz010','127.0.0.1','2014-06-18 16:05:02');");
E_D("replace into `ld_log` values('55','','0','pay','','payment','?m=pay&c=payment&a=pay_list','','1','wz010','127.0.0.1','2014-06-18 16:05:26');");
E_D("replace into `ld_log` values('56','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:05:40');");
E_D("replace into `ld_log` values('57','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:05:42');");
E_D("replace into `ld_log` values('58','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:05:43');");
E_D("replace into `ld_log` values('59','','0','dbsource','','dbsource_admin','?m=dbsource&c=dbsource_admin&a=add','','1','wz010','127.0.0.1','2014-06-18 16:05:50');");
E_D("replace into `ld_log` values('60','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:06:02');");
E_D("replace into `ld_log` values('61','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:06:04');");
E_D("replace into `ld_log` values('62','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:06:05');");
E_D("replace into `ld_log` values('63','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:06:13');");
E_D("replace into `ld_log` values('64','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:06:15');");
E_D("replace into `ld_log` values('65','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:06:16');");
E_D("replace into `ld_log` values('66','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 16:06:24');");
E_D("replace into `ld_log` values('67','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_delete','','1','wz010','127.0.0.1','2014-06-18 16:06:28');");
E_D("replace into `ld_log` values('68','','0','wap','','wap_admin','?m=wap&c=wap_admin&a=type_manage','','1','wz010','127.0.0.1','2014-06-18 16:06:29');");
E_D("replace into `ld_log` values('69','','0','admin','','module','?m=admin&c=module&a=uninstall','','1','wz010','127.0.0.1','2014-06-18 16:06:37');");
E_D("replace into `ld_log` values('70','','0','admin','','module','?m=admin&c=module&a=cache','','1','wz010','127.0.0.1','2014-06-18 16:06:38');");
E_D("replace into `ld_log` values('71','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:07:35');");
E_D("replace into `ld_log` values('72','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:07:36');");
E_D("replace into `ld_log` values('73','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:07:37');");
E_D("replace into `ld_log` values('74','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:07:45');");
E_D("replace into `ld_log` values('75','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:07:47');");
E_D("replace into `ld_log` values('76','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:07:48');");
E_D("replace into `ld_log` values('77','','0','collection','','node','?m=collection&c=node&a=manage','','1','wz010','127.0.0.1','2014-06-18 16:07:56');");
E_D("replace into `ld_log` values('78','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:08:09');");
E_D("replace into `ld_log` values('79','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:08:11');");
E_D("replace into `ld_log` values('80','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:08:12');");
E_D("replace into `ld_log` values('81','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:08:34');");
E_D("replace into `ld_log` values('82','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:08:36');");
E_D("replace into `ld_log` values('83','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:08:37');");
E_D("replace into `ld_log` values('84','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:09:28');");
E_D("replace into `ld_log` values('85','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:09:29');");
E_D("replace into `ld_log` values('86','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:09:38');");
E_D("replace into `ld_log` values('87','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:09:40');");
E_D("replace into `ld_log` values('88','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:09:41');");
E_D("replace into `ld_log` values('89','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:09:54');");
E_D("replace into `ld_log` values('90','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:09:55');");
E_D("replace into `ld_log` values('91','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:09:56');");
E_D("replace into `ld_log` values('92','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:10:09');");
E_D("replace into `ld_log` values('93','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:10:11');");
E_D("replace into `ld_log` values('94','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:10:12');");
E_D("replace into `ld_log` values('95','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:10:32');");
E_D("replace into `ld_log` values('96','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:10:33');");
E_D("replace into `ld_log` values('97','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:10:42');");
E_D("replace into `ld_log` values('98','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:10:44');");
E_D("replace into `ld_log` values('99','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:10:45');");
E_D("replace into `ld_log` values('100','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:10:58');");
E_D("replace into `ld_log` values('101','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:01');");
E_D("replace into `ld_log` values('102','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:02');");
E_D("replace into `ld_log` values('103','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:07');");
E_D("replace into `ld_log` values('104','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:10');");
E_D("replace into `ld_log` values('105','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:11');");
E_D("replace into `ld_log` values('106','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:20');");
E_D("replace into `ld_log` values('107','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:23');");
E_D("replace into `ld_log` values('108','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:24');");
E_D("replace into `ld_log` values('109','','0','admin','','module','?m=admin&c=module&a=uninstall','','1','wz010','127.0.0.1','2014-06-18 16:11:35');");
E_D("replace into `ld_log` values('110','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:45');");
E_D("replace into `ld_log` values('111','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:48');");
E_D("replace into `ld_log` values('112','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:48');");
E_D("replace into `ld_log` values('113','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:56');");
E_D("replace into `ld_log` values('114','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:11:59');");
E_D("replace into `ld_log` values('115','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:12:01');");
E_D("replace into `ld_log` values('116','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:12:17');");
E_D("replace into `ld_log` values('117','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:12:19');");
E_D("replace into `ld_log` values('118','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:12:20');");
E_D("replace into `ld_log` values('119','','0','admin','','database','?m=admin&c=database&a=export','','1','wz010','127.0.0.1','2014-06-18 16:12:23');");
E_D("replace into `ld_log` values('120','','0','admin','','admin_manage','?m=admin&c=admin_manage&a=add','','1','wz010','127.0.0.1','2014-06-18 16:19:32');");
E_D("replace into `ld_log` values('121','','0','admin','','role','?m=admin&c=role&a=add','','1','wz010','127.0.0.1','2014-06-18 16:19:37');");
E_D("replace into `ld_log` values('122','','0','admin','','role','?m=admin&c=role&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:20:20');");
E_D("replace into `ld_log` values('123','','0','admin','','role','?m=admin&c=role&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:20:24');");
E_D("replace into `ld_log` values('124','','0','admin','','role','?m=admin&c=role&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:20:27');");
E_D("replace into `ld_log` values('125','','0','admin','','role','?m=admin&c=role&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:20:30');");
E_D("replace into `ld_log` values('126','','0','admin','','role','?m=admin&c=role&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:20:35');");
E_D("replace into `ld_log` values('127','','0','admin','','role','?m=admin&c=role&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:20:39');");
E_D("replace into `ld_log` values('128','','0','admin','','setting','?m=admin&c=setting&a=save','','1','wz010','127.0.0.1','2014-06-18 16:22:58');");
E_D("replace into `ld_log` values('129','','0','admin','','category','?m=admin&c=category&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:27:40');");
E_D("replace into `ld_log` values('130','','0','admin','','category','?m=admin&c=category&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:27:43');");
E_D("replace into `ld_log` values('131','','0','admin','','category','?m=admin&c=category&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:27:46');");
E_D("replace into `ld_log` values('132','','0','admin','','category','?m=admin&c=category&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:27:49');");
E_D("replace into `ld_log` values('133','','0','admin','','category','?m=admin&c=category&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:27:52');");
E_D("replace into `ld_log` values('134','','0','admin','','category','?m=admin&c=category&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:27:55');");
E_D("replace into `ld_log` values('135','','0','admin','','category','?m=admin&c=category&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:27:57');");
E_D("replace into `ld_log` values('136','','0','admin','','category','?m=admin&c=category&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:28:00');");
E_D("replace into `ld_log` values('137','','0','admin','','category','?m=admin&c=category&a=count_items','','1','wz010','127.0.0.1','2014-06-18 16:28:03');");
E_D("replace into `ld_log` values('138','','0','content','','sitemodel','?m=content&c=sitemodel&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:29:01');");
E_D("replace into `ld_log` values('139','','0','content','','sitemodel','?m=content&c=sitemodel&a=add','','1','wz010','127.0.0.1','2014-06-18 16:29:21');");
E_D("replace into `ld_log` values('140','','0','content','','sitemodel','?m=content&c=sitemodel&a=add','','1','wz010','127.0.0.1','2014-06-18 16:29:27');");
E_D("replace into `ld_log` values('141','','0','admin','','category','?m=admin&c=category&a=add','','1','wz010','127.0.0.1','2014-06-18 16:30:58');");
E_D("replace into `ld_log` values('142','','0','admin','','category','?m=admin&c=category&a=add','','1','wz010','127.0.0.1','2014-06-18 16:31:03');");
E_D("replace into `ld_log` values('143','','0','content','','sitemodel','?m=content&c=sitemodel&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:31:09');");
E_D("replace into `ld_log` values('144','','0','content','','sitemodel','?m=content&c=sitemodel&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:31:12');");
E_D("replace into `ld_log` values('145','','0','content','','sitemodel','?m=content&c=sitemodel&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:31:21');");
E_D("replace into `ld_log` values('146','','0','admin','','category','?m=admin&c=category&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:31:26');");
E_D("replace into `ld_log` values('147','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:31:59');");
E_D("replace into `ld_log` values('148','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:32:02');");
E_D("replace into `ld_log` values('149','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:32:05');");
E_D("replace into `ld_log` values('150','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:32:09');");
E_D("replace into `ld_log` values('151','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:32:11');");
E_D("replace into `ld_log` values('152','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:32:14');");
E_D("replace into `ld_log` values('153','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=listorder','','1','wz010','127.0.0.1','2014-06-18 16:32:29');");
E_D("replace into `ld_log` values('154','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=listorder','','1','wz010','127.0.0.1','2014-06-18 16:33:00');");
E_D("replace into `ld_log` values('155','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:33:27');");
E_D("replace into `ld_log` values('156','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:33:30');");
E_D("replace into `ld_log` values('157','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:33:33');");
E_D("replace into `ld_log` values('158','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:33:39');");
E_D("replace into `ld_log` values('159','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=disabled','','1','wz010','127.0.0.1','2014-06-18 16:33:45');");
E_D("replace into `ld_log` values('160','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=listorder','','1','wz010','127.0.0.1','2014-06-18 16:34:02');");
E_D("replace into `ld_log` values('161','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=listorder','','1','wz010','127.0.0.1','2014-06-18 16:34:43');");
E_D("replace into `ld_log` values('162','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:24');");
E_D("replace into `ld_log` values('163','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:27');");
E_D("replace into `ld_log` values('164','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:30');");
E_D("replace into `ld_log` values('165','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:33');");
E_D("replace into `ld_log` values('166','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:35');");
E_D("replace into `ld_log` values('167','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:38');");
E_D("replace into `ld_log` values('168','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:41');");
E_D("replace into `ld_log` values('169','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:45');");
E_D("replace into `ld_log` values('170','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:47');");
E_D("replace into `ld_log` values('171','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:49');");
E_D("replace into `ld_log` values('172','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:52');");
E_D("replace into `ld_log` values('173','','0','admin','','position','?m=admin&c=position&a=delete','','1','wz010','127.0.0.1','2014-06-18 16:35:55');");
E_D("replace into `ld_log` values('174','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:36:23');");
E_D("replace into `ld_log` values('175','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:36:24');");
E_D("replace into `ld_log` values('176','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:36:57');");
E_D("replace into `ld_log` values('177','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:37:05');");
E_D("replace into `ld_log` values('178','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:37:23');");
E_D("replace into `ld_log` values('179','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:38:32');");
E_D("replace into `ld_log` values('180','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:38:55');");
E_D("replace into `ld_log` values('181','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:39:26');");
E_D("replace into `ld_log` values('182','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:39:35');");
E_D("replace into `ld_log` values('183','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:40:41');");
E_D("replace into `ld_log` values('184','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:41:55');");
E_D("replace into `ld_log` values('185','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:47:18');");
E_D("replace into `ld_log` values('186','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:47:46');");
E_D("replace into `ld_log` values('187','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:47:58');");
E_D("replace into `ld_log` values('188','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:48:08');");
E_D("replace into `ld_log` values('189','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:48:08');");
E_D("replace into `ld_log` values('190','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:49:24');");
E_D("replace into `ld_log` values('191','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:51:32');");
E_D("replace into `ld_log` values('192','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-18 16:51:38');");
E_D("replace into `ld_log` values('193','','0','admin','','site','?m=admin&c=site&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:51:43');");
E_D("replace into `ld_log` values('194','','0','admin','','site','?m=admin&c=site&a=edit','','1','wz010','127.0.0.1','2014-06-18 16:51:57');");
E_D("replace into `ld_log` values('195','','0','admin','','index','?m=admin&c=index&a=login','','0','wz010','127.0.0.1','2014-06-19 17:30:41');");
E_D("replace into `ld_log` values('196','','0','admin','','index','?m=admin&c=index&a=login','','0','wz010','127.0.0.1','2014-06-19 17:30:42');");
E_D("replace into `ld_log` values('197','','0','admin','','index','?m=admin&c=index&a=login','','0','wz010','127.0.0.1','2014-06-19 17:30:49');");
E_D("replace into `ld_log` values('198','','0','admin','','admin_manage','?m=admin&c=admin_manage&a=add','','1','wz010','127.0.0.1','2014-06-19 17:30:55');");
E_D("replace into `ld_log` values('199','','0','admin','','admin_manage','?m=admin&c=admin_manage&a=add','','1','wz010','127.0.0.1','2014-06-19 17:31:10');");
E_D("replace into `ld_log` values('200','','0','admin','','role','?m=admin&c=role&a=priv_setting','','1','wz010','127.0.0.1','2014-06-19 17:31:13');");
E_D("replace into `ld_log` values('201','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:31:13');");
E_D("replace into `ld_log` values('202','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:31:14');");
E_D("replace into `ld_log` values('203','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:32:12');");
E_D("replace into `ld_log` values('204','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:32:14');");
E_D("replace into `ld_log` values('205','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:32:14');");
E_D("replace into `ld_log` values('206','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=edit','','1','wz010','127.0.0.1','2014-06-19 17:33:29');");
E_D("replace into `ld_log` values('207','','0','content','','sitemodel_field','?m=content&c=sitemodel_field&a=edit','','1','wz010','127.0.0.1','2014-06-19 17:33:36');");
E_D("replace into `ld_log` values('208','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-19 17:33:55');");
E_D("replace into `ld_log` values('209','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-19 17:33:59');");
E_D("replace into `ld_log` values('210','','0','admin','','menu','?m=admin&c=menu&a=edit','','1','wz010','127.0.0.1','2014-06-19 17:34:00');");
E_D("replace into `ld_log` values('211','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-19 17:34:03');");
E_D("replace into `ld_log` values('212','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-19 17:34:10');");
E_D("replace into `ld_log` values('213','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-19 17:34:30');");
E_D("replace into `ld_log` values('214','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-19 17:34:37');");
E_D("replace into `ld_log` values('215','','0','admin','','role','?m=admin&c=role&a=priv_setting','','1','wz010','127.0.0.1','2014-06-19 17:34:41');");
E_D("replace into `ld_log` values('216','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:34:41');");
E_D("replace into `ld_log` values('217','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:34:42');");
E_D("replace into `ld_log` values('218','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:35:01');");
E_D("replace into `ld_log` values('219','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:35:02');");
E_D("replace into `ld_log` values('220','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:35:10');");
E_D("replace into `ld_log` values('221','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:35:11');");
E_D("replace into `ld_log` values('222','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-19 17:35:14');");
E_D("replace into `ld_log` values('223','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-19 17:35:20');");
E_D("replace into `ld_log` values('224','','0','content','','create_html','?m=content&c=create_html&a=update_urls','','2','admin','127.0.0.1','2014-06-19 17:35:37');");
E_D("replace into `ld_log` values('225','','0','content','','create_html','?m=content&c=create_html&a=category','','2','admin','127.0.0.1','2014-06-19 17:35:38');");
E_D("replace into `ld_log` values('226','','0','content','','create_html','?m=content&c=create_html&a=update_urls','','2','admin','127.0.0.1','2014-06-19 17:35:38');");
E_D("replace into `ld_log` values('227','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-19 17:35:42');");
E_D("replace into `ld_log` values('228','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-19 17:35:49');");
E_D("replace into `ld_log` values('229','','0','admin','','role','?m=admin&c=role&a=priv_setting','','1','wz010','127.0.0.1','2014-06-19 17:35:53');");
E_D("replace into `ld_log` values('230','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:35:53');");
E_D("replace into `ld_log` values('231','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:35:54');");
E_D("replace into `ld_log` values('232','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:36:07');");
E_D("replace into `ld_log` values('233','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:36:09');");
E_D("replace into `ld_log` values('234','','0','admin','','role','?m=admin&c=role&a=role_priv','','1','wz010','127.0.0.1','2014-06-19 17:36:09');");
E_D("replace into `ld_log` values('235','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-19 17:36:13');");
E_D("replace into `ld_log` values('236','','0','admin','','index','?m=admin&c=index&a=login','','0','','127.0.0.1','2014-06-19 17:36:19');");
E_D("replace into `ld_log` values('237','','0','admin','','setting','?m=admin&c=setting&a=save','','2','admin','127.0.0.1','2014-06-19 17:36:36');");
E_D("replace into `ld_log` values('238','','0','admin','','site','?m=admin&c=site&a=edit','','2','admin','127.0.0.1','2014-06-19 17:36:50');");

require("../../inc/footer.php");
?>