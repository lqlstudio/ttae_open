SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `ttae_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `hide` tinyint(1) unsigned NOT NULL,
  `content` text NOT NULL,
  `html` text NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `width` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `target` tinyint(1) unsigned NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

CREATE TABLE IF NOT EXISTS `ttae_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `tpl` varchar(30) NOT NULL,
  `hide` tinyint(1) unsigned NOT NULL,
  `sort` int(10) unsigned NOT NULL,
  `message` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `views` int(11) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

CREATE TABLE IF NOT EXISTS `ttae_cache` (
  `cname` varchar(32) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  `data` longtext NOT NULL,
  UNIQUE KEY `cname` (`cname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ttae_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `fup` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `pic_url` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `tpl` varchar(20) NOT NULL,
  `page` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `hide` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fup` (`fup`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

CREATE TABLE IF NOT EXISTS `ttae_channel` (
  `fid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fup` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `classname` varchar(150) NOT NULL,
  `title` varchar(200) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `channel_tpl` varchar(255) NOT NULL,
  `goods_tpl` varchar(255) NOT NULL,
  `page` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `hide` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fid`),
  KEY `fup` (`fup`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

CREATE TABLE IF NOT EXISTS `ttae_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `type_id` int(11) NOT NULL,
  `num_iid` varchar(15) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `picurl` varchar(120) NOT NULL,
  `check` tinyint(4) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `is_reply` tinyint(1) NOT NULL,
  `reply_id` int(11) NOT NULL,
  `jf` int(11) NOT NULL,
  `ding` int(11) NOT NULL,
  `cai` int(11) NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ttae_duihuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_iid` varchar(15) NOT NULL,
  `cate` tinyint(5) NOT NULL,
  `title` varchar(250) NOT NULL,
  `picurl` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `apply_count` int(11) NOT NULL,
  `hide` tinyint(1) NOT NULL,
  `content` text NOT NULL,
  `jf` int(11) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `num_iid` (`num_iid`,`hide`,`sort`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

CREATE TABLE IF NOT EXISTS `ttae_duihuan_apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duihuan_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `wangwang` varchar(20) NOT NULL,
  `truename` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `statustime` int(11) NOT NULL,
  `content` text NOT NULL,
  `alipay` varchar(30) NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ttae_fetch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `fid` int(11) NOT NULL,
  `value` text NOT NULL,
  `count` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

CREATE TABLE IF NOT EXISTS `ttae_friend_link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `picurl` varchar(255) NOT NULL,
  `hide` tinyint(1) NOT NULL,
  `sort` int(11) NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`),
  KEY `check` (`hide`,`sort`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

CREATE TABLE IF NOT EXISTS `ttae_goods` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `fid` int(10) NOT NULL DEFAULT '0',
  `sid` int(11) unsigned NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL,
  `cate` int(10) unsigned NOT NULL,
  `hide` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `num_iid` varchar(15) NOT NULL,
  `title` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `nick` varchar(100) NOT NULL,
  `picurl` varchar(250) NOT NULL,
  `images` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `price` decimal(12,1) unsigned NOT NULL,
  `num` int(10) unsigned NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `message` longtext NOT NULL,
  `baoyou` int(1) unsigned NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `yh_price` decimal(12,1) unsigned NOT NULL,
  `views` int(10) unsigned NOT NULL,
  `like` int(11) unsigned NOT NULL,
  `post` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bili` int(10) NOT NULL,
  `apply_user` varchar(30) NOT NULL,
  `apply_wangwang` varchar(30) NOT NULL,
  `apply_phone` varchar(30) NOT NULL,
  `apply_qq` varchar(12) NOT NULL,
  `shop_type` tinyint(1) unsigned NOT NULL,
  `check` tinyint(1) unsigned NOT NULL,
  `return_msg` varchar(250) DEFAULT NULL,
  `ly` varchar(250) NOT NULL,
  `sum` int(11) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  `posttime` int(10) unsigned NOT NULL,
  `open_iid` varchar(40) NOT NULL,
  PRIMARY KEY (`aid`,`fid`,`flag`,`cate`,`hide`,`sort`,`check`),
  KEY `flag` (`flag`),
  KEY `cate` (`cate`),
  KEY `hide` (`hide`),
  KEY `num_iid` (`num_iid`),
  KEY `price` (`price`),
  KEY `fid` (`fid`,`sort`,`aid`,`check`,`hide`),
  KEY `check` (`check`),
  KEY `start_time` (`start_time`,`end_time`,`yh_price`),
  KEY `aid` (`aid`,`sort`,`check`),
  KEY `yh_price` (`yh_price`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1971 ;

CREATE TABLE IF NOT EXISTS `ttae_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `power` text NOT NULL,
  `login_admin` tinyint(1) NOT NULL,
  `system` tinyint(1) NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `jf_min` int(11) NOT NULL,
  `jf_max` int(11) NOT NULL,
  `fanli` int(11) NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

CREATE TABLE IF NOT EXISTS `ttae_img` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `picurl` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `description` varchar(250) NOT NULL,
  `like` int(11) NOT NULL,
  `hate` int(11) NOT NULL,
  `message` text NOT NULL,
  `from_name` varchar(40) NOT NULL,
  `from_url` varchar(150) NOT NULL,
  `sort` int(11) NOT NULL,
  `hide` tinyint(1) unsigned NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`hide`),
  KEY `sort` (`sort`,`hide`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1888 ;

CREATE TABLE IF NOT EXISTS `ttae_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type_id` int(11) NOT NULL,
  `num_iid` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `picurl` varchar(150) NOT NULL,
  `jf` tinyint(3) NOT NULL,
  `url` varchar(30) NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ttae_like_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `uid` int(11) NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ttae_member` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `key` varchar(10) NOT NULL,
  `money` decimal(10,2) NOT NULL,
  `groupid` tinyint(3) unsigned NOT NULL,
  `jf` int(11) NOT NULL,
  `wangwang` varchar(20) NOT NULL,
  `qq` varchar(13) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `content` varchar(250) NOT NULL,
  `prize` int(10) unsigned NOT NULL,
  `regip` varchar(15) NOT NULL,
  `login_ip` varchar(15) NOT NULL,
  `login_time` int(11) NOT NULL,
  `login_count` int(11) NOT NULL,
  `regdate` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `order_number` varchar(4) NOT NULL,
  `picurl` varchar(250) NOT NULL,
  `login_name` varchar(50) NOT NULL,
  `t_uid` int(11) NOT NULL,
  `alipay` varchar(30) NOT NULL,
  `alipay_name` varchar(30) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `login_id` varchar(50) NOT NULL,
  `email_check` tinyint(1) NOT NULL,
  `phone_check` tinyint(1) NOT NULL,
  `end_time` int(11) NOT NULL,
  `check` tinyint(1) NOT NULL,
  `order_list` text NOT NULL,
  `rank` tinyint(3) NOT NULL,
  `auto_update` tinyint(1) NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `check` (`check`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `ttae_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `url` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `check` tinyint(1) NOT NULL,
  `dateline` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `ttae_pics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fup` int(10) unsigned NOT NULL,
  `title` varchar(250) NOT NULL,
  `url` varchar(200) NOT NULL,
  `sort` int(10) unsigned NOT NULL,
  `hide` tinyint(1) unsigned NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=94 ;

CREATE TABLE IF NOT EXISTS `ttae_pics_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET gb2312 NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

CREATE TABLE IF NOT EXISTS `ttae_setting` (
  `name` varchar(20) NOT NULL,
  `value` text NOT NULL,
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ttae_shop` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate` int(10) unsigned NOT NULL,
  `shop_type` tinyint(3) NOT NULL,
  `shop_tag` tinyint(2) NOT NULL DEFAULT '0',
  `nick` varchar(30) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `zk` float NOT NULL,
  `title` varchar(200) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `desc` text NOT NULL,
  `pic_path` varchar(200) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `url` varchar(100) NOT NULL,
  `hide` tinyint(1) unsigned NOT NULL,
  `sort` int(10) unsigned NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sid` (`sid`),
  KEY `fup` (`cate`),
  KEY `shop_tag` (`shop_tag`),
  KEY `hide` (`hide`),
  KEY `cate` (`shop_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

CREATE TABLE IF NOT EXISTS `ttae_sign` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `username` varchar(100) NOT NULL,
  `jf` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(15) NOT NULL,
  `org_jf` int(6) NOT NULL DEFAULT '0',
  `type` varchar(20) NOT NULL,
  `add` tinyint(1) NOT NULL,
  `desc` varchar(250) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `username` (`username`),
  KEY `type` (`type`),
  KEY `add` (`add`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
