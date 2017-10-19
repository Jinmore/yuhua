<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ld_model_field`;");
E_C("CREATE TABLE `ld_model_field` (
  `fieldid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `modelid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `field` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `tips` text NOT NULL,
  `css` varchar(30) NOT NULL,
  `minlength` int(10) unsigned NOT NULL DEFAULT '0',
  `maxlength` int(10) unsigned NOT NULL DEFAULT '0',
  `pattern` varchar(255) NOT NULL,
  `errortips` varchar(255) NOT NULL,
  `formtype` varchar(20) NOT NULL,
  `setting` mediumtext NOT NULL,
  `formattribute` varchar(255) NOT NULL,
  `unsetgroupids` varchar(255) NOT NULL,
  `unsetroleids` varchar(255) NOT NULL,
  `iscore` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isunique` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isbase` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `issearch` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isadd` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isfulltext` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isposition` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `disabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isomnipotent` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fieldid`),
  KEY `modelid` (`modelid`,`disabled`),
  KEY `field` (`field`,`modelid`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=utf8");
E_D("replace into `ld_model_field` values('1','1','1','catid','栏目','','','1','6','/^[0-9]{1,6}\$/','请选择栏目','catid','array (\n  ''defaultvalue'' => '''',\n)','','-99','-99','0','1','0','1','1','1','0','0','1','0','0');");
E_D("replace into `ld_model_field` values('2','1','1','typeid','类别','','','0','0','','','typeid','array (\n  ''minnumber'' => '''',\n  ''defaultvalue'' => '''',\n)','','','','0','1','0','1','1','1','0','0','2','0','0');");
E_D("replace into `ld_model_field` values('3','1','1','title','标题','','inputtitle','1','80','','请输入标题','title','','','','','0','1','0','1','1','1','1','1','3','0','0');");
E_D("replace into `ld_model_field` values('4','1','1','thumb','缩略图','','','0','100','','','image','array (\n  ''size'' => ''50'',\n  ''defaultvalue'' => '''',\n  ''show_type'' => ''1'',\n  ''upload_maxsize'' => ''1024'',\n  ''upload_allowext'' => ''jpg|jpeg|gif|png|bmp'',\n  ''watermark'' => ''0'',\n  ''isselectimage'' => ''1'',\n  ''images_width'' => '''',\n  ''images_height'' => '''',\n)','','','','0','1','0','0','0','1','0','1','20','0','0');");
E_D("replace into `ld_model_field` values('5','1','1','keywords','关键词','多关键词之间用空格或者“,”隔开','','0','40','','','keyword','array (\r\n  ''size'' => ''100'',\r\n  ''defaultvalue'' => '''',\r\n)','','-99','-99','0','1','0','1','1','1','1','0','4','0','0');");
E_D("replace into `ld_model_field` values('6','1','1','description','摘要','','','0','255','','','textarea','array (\r\n  ''width'' => ''98'',\r\n  ''height'' => ''46'',\r\n  ''defaultvalue'' => '''',\r\n  ''enablehtml'' => ''0'',\r\n)','','','','0','1','0','1','0','1','1','1','6','0','0');");
E_D("replace into `ld_model_field` values('7','1','1','updatetime','更新时间','','','0','0','','','datetime','array (\r\n  ''dateformat'' => ''int'',\r\n  ''format'' => ''Y-m-d H:i:s'',\r\n  ''defaulttype'' => ''1'',\r\n  ''defaultvalue'' => '''',\r\n)','','','','1','1','0','1','0','0','0','0','55','0','0');");
E_D("replace into `ld_model_field` values('8','1','1','content','内容','<div class=\"content_attr\"><label><input name=\"add_introduce\" type=\"checkbox\"  value=\"1\" checked>是否截取内容</label><input type=\"text\" name=\"introcude_length\" value=\"200\" size=\"3\">字符至内容摘要\r\n<label><input type=''checkbox'' name=''auto_thumb'' value=\"1\" checked>是否获取内容第</label><input type=\"text\" name=\"auto_thumb_no\" value=\"1\" size=\"2\" class=\"\">张图片作为标题图片\r\n</div>','','1','999999','','内容不能为空','editor','array (\n  ''toolbar'' => ''full'',\n  ''defaultvalue'' => '''',\n  ''enablekeylink'' => ''1'',\n  ''replacenum'' => ''2'',\n  ''link_mode'' => ''0'',\n  ''enablesaveimage'' => ''1'',\n  ''height'' => '''',\n  ''disabled_page'' => ''1'',\n)','','','','0','0','0','1','0','1','1','0','7','0','0');");
E_D("replace into `ld_model_field` values('9','1','1','voteid','添加投票','','','0','0','','','omnipotent','array (\n  ''formtext'' => ''<input type=\\\\''text\\\\'' name=\\\\''info[voteid]\\\\'' id=\\\\''voteid\\\\'' value=\\\\''{FIELD_VALUE}\\\\'' size=\\\\''3\\\\''> \r\n<input type=\\\\''button\\\\'' value=\"选择已有投票\" onclick=\"omnipotent(\\\\''selectid\\\\'',\\\\''?m=vote&c=vote&a=public_get_votelist&from_api=1\\\\'',\\\\''选择已有投票\\\\'')\" class=\"button\">\r\n<input type=\\\\''button\\\\'' value=\"新增投票\" onclick=\"omnipotent(\\\\''addvote\\\\'',\\\\''?m=vote&c=vote&a=add&from_api=1\\\\'',\\\\''添加投票\\\\'',0)\" class=\"button\">'',\n  ''fieldtype'' => ''mediumint'',\n  ''minnumber'' => ''1'',\n)','','','','0','0','0','1','0','0','1','0','55','1','0');");
E_D("replace into `ld_model_field` values('10','1','1','pages','分页方式','','','0','0','','','pages','','','-99','-99','0','0','0','1','0','0','0','0','55','1','0');");
E_D("replace into `ld_model_field` values('11','1','1','inputtime','发布时间','','','0','0','','','datetime','array (\n  ''fieldtype'' => ''int'',\n  ''format'' => ''Y-m-d H:i:s'',\n  ''defaulttype'' => ''0'',\n)','','','','0','1','0','0','0','0','0','1','21','0','0');");
E_D("replace into `ld_model_field` values('12','1','1','posids','推荐位','','','0','0','','','posid','array (\n  ''cols'' => ''4'',\n  ''width'' => ''125'',\n)','','','','0','1','0','1','0','0','0','0','18','0','0');");
E_D("replace into `ld_model_field` values('13','1','1','url','URL','','','0','100','','','text','','','','','1','1','0','1','0','0','0','0','23','0','0');");
E_D("replace into `ld_model_field` values('14','1','1','listorder','排序','','','0','6','','','number','','','','','1','1','0','1','0','0','0','0','55','0','0');");
E_D("replace into `ld_model_field` values('15','1','1','status','状态','','','0','2','','','box','','','','','1','1','0','1','0','0','0','0','55','0','0');");
E_D("replace into `ld_model_field` values('16','1','1','template','内容页模板','','','0','30','','','template','array (\n  ''size'' => '''',\n  ''defaultvalue'' => '''',\n)','','-99','-99','0','0','0','0','0','0','0','0','24','0','0');");
E_D("replace into `ld_model_field` values('17','1','1','groupids_view','阅读权限','','','0','0','','','groupid','array (\n  ''groupids'' => '''',\n)','','','','0','0','0','1','0','0','0','0','55','1','0');");
E_D("replace into `ld_model_field` values('18','1','1','readpoint','阅读收费','','','0','5','','','readpoint','array (\n  ''minnumber'' => ''1'',\n  ''maxnumber'' => ''99999'',\n  ''decimaldigits'' => ''0'',\n  ''defaultvalue'' => '''',\n)','','-99','-99','0','0','0','0','0','0','0','0','55','1','0');");
E_D("replace into `ld_model_field` values('19','1','1','relation','相关文章','','','0','0','','','omnipotent','array (\n  ''formtext'' => ''<input type=\\\\''hidden\\\\'' name=\\\\''info[relation]\\\\'' id=\\\\''relation\\\\'' value=\\\\''{FIELD_VALUE}\\\\'' style=\\\\''50\\\\'' >\r\n<ul class=\"list-dot\" id=\"relation_text\"></ul>\r\n<div>\r\n<input type=\\\\''button\\\\'' value=\"添加相关\" onclick=\"omnipotent(\\\\''selectid\\\\'',\\\\''?m=content&c=content&a=public_relationlist&modelid={MODELID}\\\\'',\\\\''添加相关文章\\\\'',1)\" class=\"button\" style=\"width:66px;\">\r\n<span class=\"edit_content\">\r\n<input type=\\\\''button\\\\'' value=\"显示已有\" onclick=\"show_relation({MODELID},{ID})\" class=\"button\" style=\"width:66px;\">\r\n</span>\r\n</div>'',\n  ''fieldtype'' => ''varchar'',\n  ''minnumber'' => ''1'',\n)','','2,6,4,5,1,17,18,7','','0','0','0','0','0','0','1','0','55','1','0');");
E_D("replace into `ld_model_field` values('20','1','1','allow_comment','允许评论','','','0','0','','','box','array (\n  ''options'' => ''允许评论|1\r\n不允许评论|0'',\n  ''boxtype'' => ''radio'',\n  ''fieldtype'' => ''tinyint'',\n  ''minnumber'' => ''1'',\n  ''width'' => ''88'',\n  ''size'' => ''1'',\n  ''defaultvalue'' => ''1'',\n  ''outputtype'' => ''1'',\n  ''filtertype'' => ''0'',\n)','','','','0','0','0','0','0','0','0','0','55','1','0');");
E_D("replace into `ld_model_field` values('21','1','1','copyfrom','来源','','','0','100','','','copyfrom','array (\n  ''defaultvalue'' => '''',\n)','','','','0','0','0','1','0','1','0','0','5','0','0');");
E_D("replace into `ld_model_field` values('80','1','1','username','用户名','','','0','20','','','text','','','','','1','1','0','1','0','0','0','0','98','0','0');");
E_D("replace into `ld_model_field` values('51','3','1','allow_comment','允许评论','','','0','0','','','box','array (\n  ''options'' => ''允许评论|1\r\n不允许评论|0'',\n  ''boxtype'' => ''radio'',\n  ''fieldtype'' => ''tinyint'',\n  ''minnumber'' => ''1'',\n  ''width'' => ''88'',\n  ''size'' => ''1'',\n  ''defaultvalue'' => ''1'',\n  ''outputtype'' => ''1'',\n  ''filtertype'' => ''0'',\n)','','','','0','0','0','0','0','0','0','0','55','1','0');");
E_D("replace into `ld_model_field` values('52','3','1','template','内容页模板','','','0','30','','','template','array (\n  ''size'' => '''',\n  ''defaultvalue'' => '''',\n)','','-99','-99','0','0','0','0','0','0','0','0','53','0','0');");
E_D("replace into `ld_model_field` values('53','3','1','url','URL','','','0','100','','','text','','','','','1','1','0','1','0','0','0','0','23','0','0');");
E_D("replace into `ld_model_field` values('54','3','1','listorder','排序','','','0','6','','','number','','','','','1','1','0','1','0','0','0','0','51','0','0');");
E_D("replace into `ld_model_field` values('55','3','1','posids','推荐位','','','0','0','','','posid','array (\n  ''cols'' => ''4'',\n  ''width'' => ''125'',\n)','','','','0','1','0','1','0','0','0','0','9','0','0');");
E_D("replace into `ld_model_field` values('56','3','1','groupids_view','阅读权限','','','0','0','','','groupid','array (\n  ''groupids'' => '''',\n)','','','','0','0','0','1','0','0','0','0','55','1','0');");
E_D("replace into `ld_model_field` values('57','3','1','inputtime','发布时间','','','0','0','','','datetime','array (\n  ''fieldtype'' => ''int'',\n  ''format'' => ''Y-m-d H:i:s'',\n  ''defaulttype'' => ''0'',\n)','','','','0','1','0','0','0','0','0','1','21','0','0');");
E_D("replace into `ld_model_field` values('58','3','1','pages','分页方式','','','0','0','','','pages','','','-99','-99','0','0','0','1','0','0','0','0','55','1','0');");
E_D("replace into `ld_model_field` values('59','3','1','relation','相关组图','','','0','0','','','omnipotent','array (\n  ''formtext'' => ''<input type=\\\\''hidden\\\\'' name=\\\\''info[relation]\\\\'' id=\\\\''relation\\\\'' value=\\\\''{FIELD_VALUE}\\\\'' style=\\\\''50\\\\'' >\r\n<ul class=\"list-dot\" id=\"relation_text\"></ul>\r\n<div>\r\n<input type=\\\\''button\\\\'' value=\"添加相关\" onclick=\"omnipotent(\\\\''selectid\\\\'',\\\\''?m=content&c=content&a=public_relationlist&modelid={MODELID}\\\\'',\\\\''添加相关文章\\\\'',1)\" class=\"button\" style=\"width:66px;\">\r\n<span class=\"edit_content\">\r\n<input type=\\\\''button\\\\'' value=\"显示已有\" onclick=\"show_relation({MODELID},{ID})\" class=\"button\" style=\"width:66px;\">\r\n</span>\r\n</div>'',\n  ''fieldtype'' => ''varchar'',\n  ''minnumber'' => ''1'',\n)','','2,6,4,5,1,17,18,7','','0','0','0','0','0','0','1','0','55','1','0');");
E_D("replace into `ld_model_field` values('60','3','1','thumb','缩略图','','','0','100','','','image','array (\n  ''size'' => ''50'',\n  ''defaultvalue'' => '''',\n  ''show_type'' => ''1'',\n  ''upload_maxsize'' => ''1024'',\n  ''upload_allowext'' => ''jpg|jpeg|gif|png|bmp'',\n  ''watermark'' => ''0'',\n  ''isselectimage'' => ''1'',\n  ''images_width'' => '''',\n  ''images_height'' => '''',\n)','','','','0','1','0','0','0','1','0','1','20','0','0');");
E_D("replace into `ld_model_field` values('61','3','1','content','内容','<div class=\"content_attr\"><label><input name=\"add_introduce\" type=\"checkbox\"  value=\"1\" checked>是否截取内容</label><input type=\"text\" name=\"introcude_length\" value=\"200\" size=\"3\">字符至内容摘要\r\n<label><input type=''checkbox'' name=''auto_thumb'' value=\"1\" checked>是否获取内容第</label><input type=\"text\" name=\"auto_thumb_no\" value=\"1\" size=\"2\" class=\"\">张图片作为标题图片\r\n</div>','','0','999999','','','editor','array (\n  ''toolbar'' => ''full'',\n  ''defaultvalue'' => '''',\n  ''enablekeylink'' => ''1'',\n  ''replacenum'' => ''2'',\n  ''link_mode'' => ''0'',\n  ''enablesaveimage'' => ''1'',\n  ''height'' => '''',\n  ''disabled_page'' => ''1'',\n)','','','','0','0','0','1','0','1','1','0','8','0','0');");
E_D("replace into `ld_model_field` values('62','3','1','updatetime','更新时间','','','0','0','','','datetime','array (\r\n  ''dateformat'' => ''int'',\r\n  ''format'' => ''Y-m-d H:i:s'',\r\n  ''defaulttype'' => ''1'',\r\n  ''defaultvalue'' => '''',\r\n)','','','','1','1','0','1','0','0','0','0','55','0','0');");
E_D("replace into `ld_model_field` values('63','3','1','description','摘要','','','0','255','','','textarea','array (\r\n  ''width'' => ''98'',\r\n  ''height'' => ''46'',\r\n  ''defaultvalue'' => '''',\r\n  ''enablehtml'' => ''0'',\r\n)','','','','0','1','0','1','0','1','1','1','6','0','0');");
E_D("replace into `ld_model_field` values('64','3','1','title','标题','','inputtitle','1','80','','请输入标题','title','','','','','0','1','0','1','1','1','1','1','3','0','0');");
E_D("replace into `ld_model_field` values('65','3','1','keywords','关键词','多关键词之间用空格或者“,”隔开','','0','40','','','keyword','array (\r\n  ''size'' => ''100'',\r\n  ''defaultvalue'' => '''',\r\n)','','-99','-99','0','1','0','1','1','1','1','0','4','0','0');");
E_D("replace into `ld_model_field` values('66','3','1','typeid','类别','','','0','0','','','typeid','array (\n  ''minnumber'' => '''',\n  ''defaultvalue'' => '''',\n)','','','','0','1','0','1','1','1','0','0','2','0','0');");
E_D("replace into `ld_model_field` values('67','3','1','catid','栏目','','','1','6','/^[0-9]{1,6}\$/','请选择栏目','catid','array (\n  ''defaultvalue'' => '''',\n)','','-99','-99','0','1','0','1','1','1','0','0','1','0','0');");
E_D("replace into `ld_model_field` values('68','3','1','status','状态','','','0','2','','','box','','','','','1','1','0','1','0','0','0','0','55','0','0');");
E_D("replace into `ld_model_field` values('69','3','1','readpoint','阅读收费','','','0','5','','','readpoint','array (\n  ''minnumber'' => ''1'',\n  ''maxnumber'' => ''99999'',\n  ''decimaldigits'' => ''0'',\n  ''defaultvalue'' => '''',\n)','','-99','-99','0','0','0','0','0','0','0','0','55','1','0');");
E_D("replace into `ld_model_field` values('70','3','1','username','用户名','','','0','20','','','text','','','','','1','1','0','1','0','0','0','0','98','0','0');");
E_D("replace into `ld_model_field` values('71','3','1','pictureurls','组图','','','0','0','','','images','array (\n  ''upload_allowext'' => ''gif|jpg|jpeg|png|bmp'',\n  ''isselectimage'' => ''1'',\n  ''upload_number'' => ''50'',\n)','','','','0','0','0','1','0','1','0','0','7','0','0');");
E_D("replace into `ld_model_field` values('72','3','1','copyfrom','来源','','','0','0','','','copyfrom','array (\n  ''defaultvalue'' => '''',\n)','','','','0','0','0','1','0','1','0','0','5','0','0');");
E_D("replace into `ld_model_field` values('73','1','1','islink','转向链接','','','0','0','','','islink','','','','','0','1','0','0','0','1','0','0','22','0','0');");
E_D("replace into `ld_model_field` values('75','3','1','islink','转向链接','','','0','0','','','islink','','','','','0','1','0','0','0','1','0','0','22','0','0');");
E_D("replace into `ld_model_field` values('83','10','1','birthday','生日','','','0','0','','生日格式错误','datetime','array (\n  ''fieldtype'' => ''date'',\n  ''format'' => ''Y-m-d'',\n  ''defaulttype'' => ''0'',\n)','','','','0','0','0','0','0','1','1','0','0','0','0');");

require("../../inc/footer.php");
?>