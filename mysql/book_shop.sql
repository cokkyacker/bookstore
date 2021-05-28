-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2021-04-23 16:03:31
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book_shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(18) CHARACTER SET utf8 NOT NULL,
  `pwd` char(18) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `tb_book`
--

CREATE TABLE IF NOT EXISTS `tb_book` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `typeid` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `anthor` varchar(20) NOT NULL,
  `publish` varchar(20) NOT NULL,
  `jianjie` text NOT NULL,
  `bind` varchar(10) NOT NULL,
  `tupian` varchar(100) NOT NULL,
  `shichangjia` int(10) NOT NULL,
  `huiyuanjia` int(10) NOT NULL,
  `tejia` tinyint(1) NOT NULL,
  `tuijian` tinyint(1) NOT NULL,
  `shuliang` int(10) NOT NULL,
  `cishu` int(10) NOT NULL,
  `addtime` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `tb_book`
--

INSERT INTO `tb_book` (`id`, `typeid`, `title`, `anthor`, `publish`, `jianjie`, `bind`, `tupian`, `shichangjia`, `huiyuanjia`, `tejia`, `tuijian`, `shuliang`, `cishu`, `addtime`) VALUES
(1, 2, '你坏', '大冰', '天津xx出版社', '你好坏', '平装', 'admin/upimages/26.png', 30, 20, 0, 0, 8, 6, '2018-01-01'),
(3, 2, '悲伤逆流成河', '22', '22', '当悲伤逆流成河', '平装', 'admin/upimages/10.png', 50, 20, 0, 0, 7, 0, '2008-01-01'),
(7, 1, 'CSS', '22', '北京大学出版社', '33', '平装', 'admin/upimages/17.jpg', 30, 15, 0, 1, 11, 0, '2013-01-01'),
(8, 3, 'JSP网络开发技术', '22', '北京大学出版社', '34', '精装', 'admin/upimages/16.jpg', 50, 15, 0, 1, 11, 0, '2015-01-01'),
(9, 3, '绝代双骄', '古龙', '天津xx出版社', '好看', '精装', 'admin/upimages/33.png', 100, 20, 1, 1, 10, 1, '2006-03-01'),
(10, 3, '唐诗三百首', '无', '天津xx出版社', '5', '平装', 'admin/upimages/34.png', 50, 40, 0, 1, 11, 0, '2000-01-01'),
(11, 3, '我不', '大冰', '天津xx出版社', '22', '平装', 'admin/upimages/35.png', 30, 15, 0, 0, 11, 0, '2017-08-08'),
(13, 3, '庆余年', '猫腻', '天津公告出版社', '买它！！！！', '精装', 'admin/upimages/20.jpg', 200, 100, 0, 1, 11, 0, '2017-01-01'),
(14, 3, '脑筋急转弯', 'qqq', '天津', '111', '平装', 'admin/upimages/28.png', 50, 45, 0, 0, 10, 0, '2016-06-01'),
(17, 3, 'C语言从入门到精通', '李冰', '天津出版社', '特价活动，先到先得', '平装', 'admin/upimages/21.jpg', 100, 10, 1, 0, 9, 1, '2006-08-01'),
(19, 7, '脑筋急转弯', '李冰', '天津出版社', '脑筋急转弯，让思维变得不一样！', '平装', 'admin/upimages/36.png', 50, 30, 0, 1, 10, 0, '2012-01-01');

-- --------------------------------------------------------

--
-- 表的结构 `tb_dingdan`
--

CREATE TABLE IF NOT EXISTS `tb_dingdan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dingdanhao` varchar(50) NOT NULL,
  `spc` varchar(20) NOT NULL,
  `slc` varchar(20) NOT NULL,
  `shouhuoren` varchar(18) CHARACTER SET utf8 NOT NULL,
  `dizhi` text CHARACTER SET utf8 NOT NULL,
  `youbian` int(11) NOT NULL,
  `tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `shff` varchar(20) CHARACTER SET utf8 NOT NULL,
  `zfff` varchar(20) CHARACTER SET utf8 NOT NULL,
  `leaveword` text CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL,
  `xiadanren` varchar(20) CHARACTER SET utf8 NOT NULL,
  `zt` varchar(100) CHARACTER SET utf8 NOT NULL,
  `total` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tb_dingdan`
--

INSERT INTO `tb_dingdan` (`id`, `dingdanhao`, `spc`, `slc`, `shouhuoren`, `dizhi`, `youbian`, `tel`, `shff`, `zfff`, `leaveword`, `time`, `xiadanren`, `zt`, `total`) VALUES
(2, '20191210657371', '1@', '1@', 'DA', 'FA', 300300, '13212202033', '普通平邮', '货到付款', 'AF', '2019-12-01 06:57:37', 'FA', '已收款&nbsp;已发货&nbsp;已收货&nbsp;', '20'),
(3, '20191210659181', '1@', '1@', 'FA', 'FA', 300300, '13212202033', '特快专递', '网上支付', 'AF', '2019-12-01 06:59:18', 'FA', '已收款&nbsp;', '20'),
(4, '201912100754011', '11@4@', '1@1@', 'DA', 'FA', 300300, '13212202033', '个人送货', '交通银行汇款', '5555', '2019-12-10 07:54:01', 'FA', '未作任何处理', '25'),
(5, '201912101006431', '11@8@', '1@1@', 'AAA', 'AAAA', 300300, '13212202033', '送货上门', '建设银行汇款', 'AAA', '2019-12-10 10:06:43', 'FA', '未作任何处理', '30'),
(6, '201912281639291', '4@', '1@', 'DA', 'FA', 300300, '13212202033', '普通平邮', '货到付款', '', '2019-12-28 16:39:29', 'FA', '未作任何处理', '10'),
(7, '201912290246596', '4@9@', '1@1@', 'DA', 'FA', 300300, '13212202033', '普通平邮', '货到付款', '555', '2019-12-29 02:46:59', 'WZQ', '已收货&nbsp;', '30'),
(8, '20210352020391', '4@1@', '1@1@', '王智晴', '南开大学滨海学院', 300000, '13210002003', '普通平邮', '货到付款', '无', '2021-03-05 20:20:39', 'FA', '未作任何处理', '30'),
(9, '20210352021051', '4@1@', '1@1@', '王智晴', '南开大学滨海学院', 300000, '13210002003', '普通平邮', '货到付款', '', '2021-03-05 20:21:05', 'FA', '已发货&nbsp;', '30'),
(10, '202103241954331', '1@17@', '1@1@', '王智晴', '南开大学滨海学院', 300000, '13210002003', '普通平邮', '货到付款', '希望老板包装的精致一点！', '2021-03-24 19:54:33', 'FA', '已发货&nbsp;', '30');

-- --------------------------------------------------------

--
-- 表的结构 `tb_gonggao`
--

CREATE TABLE IF NOT EXISTS `tb_gonggao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `tb_gonggao`
--

INSERT INTO `tb_gonggao` (`id`, `title`, `content`, `time`) VALUES
(1, '这里是网上书店', '欢迎大家来到网上书店，在这里你将以比实体书店更优惠的价格买到心爱的书籍，欢迎注册会员，用以享受更便宜的会员价。', '2019-11-29 14:47:08'),
(5, 'JSP网络开发技术', 'JSP(JavaServer Pages)是由Sun Microsystems公司倡导、许多公司参与一起建立的一种动态网页技术标准。该技术为创建显示动态生成内容的Web页面提供了一个简捷而快速的方法。JSP技术的设计目的是使得构造基于Web的应用程序更加容易和快捷，而这些应用程序能够与各种Web服务器，应用服务器，浏览器和开发工具共同工作。 JSP规范是Web服务器、应用服务器、交易系统、以及开发工具供应商间广泛合作的结果。在传统的网页HTML文件(*htm,*.html)中加入Java程序片段(Scriptlet)和JSP标记(tag)，就构成了JSP网页(*.jsp)。Web服务器在遇到访问JSP网页的请求时，首先执行其中的程序片段，然后将执行结果以HTML格式返回给客户。程序片段可以操作数据库、重新定向网页以及发送 email 等等，这就是建立动态网站所需要的功能。所有程序操作都在服务器端执行，网络上传送给客户端的仅是得到的结果，对客户浏览器的要求最低，可以实现无Plugin，无ActiveX，无Java Applet，甚至无Frame。', '2019-12-10 09:59:53'),
(7, '大冰新作《你坏》发售', '首发价格只要20元', '2019-12-10 10:05:20'),
(8, '精装版庆余年全网首发', '首发优惠价，更有附赠作者猫腻亲笔签名，还有随机赠送电视剧明信片，买它！买它！买它！！！', '2019-12-29 04:11:34'),
(9, '编推书籍：《庆余年》', '老猫的书，说不上寓意深长、回味无穷，但是很吸引人，主要的体会来自几个：行文轻松活泼，对白老道，文字流畅，读来很舒服。对皇权政治、天下大势的发展，深具匠心，让人感觉很自然。情节安排下了很深的功夫，庆帝二十载一局、范闲、庆帝、叶轻眉之间的恩怨情仇，与范闲穿越20年历程的主线紧紧交织，层层剥茧、丝丝入扣，世乎意料的事态演变不断出现，十分精彩。\r\n', '2021-03-05 20:25:33'),
(11, '剧版庆余年大火，原著同样精彩！', '《庆余年》是由孙皓执导，张若昀、李沁、陈道明、吴刚、李小冉、辛芷蕾、李纯、宋轶等主演的古装剧\r\n该剧改编自猫腻的同名小说，讲述了一个有着神秘身世的少年范闲，自海边小城初出茅庐，历经家族、江湖、庙堂的种种考验、锤炼的故事。', '2021-03-24 19:59:20');

-- --------------------------------------------------------

--
-- 表的结构 `tb_leaveword`
--

CREATE TABLE IF NOT EXISTS `tb_leaveword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  `isOpen` int(1) NOT NULL,
  `reply` text NOT NULL,
  `replyTime` datetime NOT NULL,
  `pass` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_TB_LEAVE_REFERENCE_TB_USER` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `tb_leaveword`
--

INSERT INTO `tb_leaveword` (`id`, `userid`, `title`, `content`, `time`, `isOpen`, `reply`, `replyTime`, `pass`) VALUES
(7, 2, '踩踩，抢个沙发', 'aa', '2019-11-28 21:35:58', 1, '', '0000-00-00 00:00:00', 1),
(8, 2, '新的书城吗，看价格还挺便宜', 'bb', '2019-11-28 21:36:03', 1, '', '0000-00-00 00:00:00', 1),
(12, 1, '优化意见', '验证码看不清，建议优化。', '2019-11-29 13:17:21', 1, '感谢访问本网站，您的意见我们已收到，会做出后续优化，希望您能继续关注。', '2019-11-29 14:22:28', 0),
(13, 1, '清新网站让人耳目愉悦', '清新网站让人耳目愉悦', '2019-12-10 13:30:05', 0, '', '0000-00-00 00:00:00', 0),
(14, 1, '想知道如何注册会员', '想知道如何注册会员', '2019-11-29 14:18:59', 1, '', '0000-00-00 00:00:00', 1),
(15, 1, '请问未通过审核的原因是什么呢', 'isOpen!==2', '2019-11-29 14:19:57', 0, '', '0000-00-00 00:00:00', 1),
(16, 1, '点击个人注册没反应', 'isOpen!==2"\r\n是对的"', '2019-11-29 18:06:56', 1, '', '0000-00-00 00:00:00', 1),
(17, 1, '可以多上一些大冰的书吗', '新作之类的', '2019-11-29 18:07:17', 1, '', '0000-00-00 00:00:00', 1),
(18, 1, '老用户了，以后也会继续支持！', '终于弄好留言板了', '2019-11-29 20:18:59', 1, '再也不改了，累死了', '2019-11-29 20:20:18', 1),
(19, 6, '绝代双骄', '这本书好看哎，推荐推荐', '2019-12-29 10:06:21', 1, '', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tb_pingjia`
--

CREATE TABLE IF NOT EXISTS `tb_pingjia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `spid` int(11) NOT NULL,
  `title` varchar(20) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL,
  `pass` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tb_pingjia`
--

INSERT INTO `tb_pingjia` (`id`, `userid`, `spid`, `title`, `content`, `time`, `pass`) VALUES
(1, 1, 1, '你坏坏', '你真坏', '2019-11-30 00:00:00', 0),
(2, 1, 8, 'JSP', '好难', '2019-12-10 00:00:00', 0),
(3, 1, 13, '推荐', '看完电视剧来买书，内容很丰富', '2021-03-03 00:00:00', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tb_type`
--

CREATE TABLE IF NOT EXISTS `tb_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tb_type`
--

INSERT INTO `tb_type` (`id`, `typename`) VALUES
(1, '程序语言'),
(2, '文艺小说'),
(3, '冒险小说'),
(7, '益智游戏');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(18) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `truename` varchar(18) NOT NULL,
  `sfzh` varchar(18) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `dizhi` varchar(100) NOT NULL,
  `youbian` int(11) NOT NULL,
  `regtime` datetime NOT NULL,
  `dongjie` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `pwd`, `truename`, `sfzh`, `tel`, `dizhi`, `youbian`, `regtime`, `dongjie`) VALUES
(1, 'FA', 'e10adc3949ba59abbe56e057f20f883e', '王智晴', '120110199812250000', '13212202033', '天津市滨海新区', 300300, '2019-11-29 13:00:20', 0),
(2, 'FB', 'e10adc3949ba59abbe56e057f20f883e', 'QK', '120101199912250000', '13212202033', '天津市', 300300, '2019-11-29 13:19:59', 0),
(3, 'FC', 'e10adc3949ba59abbe56e057f20f883e', 'QQ', '110101199812256541', '13212202033', '22333', 300300, '2019-11-29 20:22:42', 1),
(4, 'FF', 'e10adc3949ba59abbe56e057f20f883e', 'WQ', '120102197812250213', '13212202033', '22333', 300300, '2019-12-09 21:22:50', 1),
(5, '王智晴', 'e10adc3949ba59abbe56e057f20f883e', 'wzq', '120101201502250236', '13212202033', '22333', 300300, '2019-12-29 09:27:11', 0),
(6, 'WZQ', 'b415c4b9ba9e305327bad9ea8f6a2594', 'aa', '120101201502250236', '13212202033', '333333', 300300, '2019-12-29 09:30:16', 0),
(7, 'FFF', 'e10adc3949ba59abbe56e057f20f883e', 'WZQ', '120120199901010011', '13210002003', 'TIANJIN', 300000, '2021-03-06 01:20:07', 0),
(9, '王智晴1', 'e10adc3949ba59abbe56e057f20f883e', '王智晴', '120120199901010011', '13210002003', '天津', 300000, '2021-03-25 02:52:21', 0);

--
-- 限制导出的表
--

--
-- 限制表 `tb_leaveword`
--
ALTER TABLE `tb_leaveword`
  ADD CONSTRAINT `FK_TB_LEAVE_REFERENCE_TB_USER` FOREIGN KEY (`userid`) REFERENCES `tb_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
