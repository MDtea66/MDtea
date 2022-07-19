-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2022-06-03 16:36:44
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myfilm`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` tinyint(8) NOT NULL AUTO_INCREMENT,
  `User` varchar(20) NOT NULL,
  `Password` char(8) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`Id`, `User`, `Password`) VALUES
(1, 'admin', '666'),
(2, 'user', '777'),
(3, 'wwj', '668');

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `classNO` char(8) NOT NULL,
  `filmClass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`classNO`, `filmClass`) VALUES
('01', '剧情片'),
('02', '励志片'),
('03', '音乐片'),
('04', '家庭片'),
('05', '犯罪片'),
('06', '历史片'),
('07', '爱情片'),
('08', '动画片');

-- --------------------------------------------------------

--
-- 表的结构 `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `filmID` int(8) NOT NULL AUTO_INCREMENT,
  `filmName` varchar(30) NOT NULL,
  `classNO` char(8) NOT NULL,
  `filmAuthor` char(15) NOT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `filmJianjie` varchar(200) NOT NULL,
  `filmClass` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`filmID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74678679 ;

--
-- 转存表中的数据 `film`
--

INSERT INTO `film` (`filmID`, `filmName`, `classNO`, `filmAuthor`, `Photo`, `filmJianjie`, `filmClass`) VALUES
(5485633, '湿哒哒多所', '', '', 'upload/bawangbieji.jpg', '', '犯罪片'),
(19720324, '教父', '05', '弗朗西斯·福特·科波拉', 'upload/jiaofu.jpg', '讲述了以维托·唐·柯里昂为首的黑帮家族的发展过程以及柯里昂的小儿子迈克如何接任父亲成为黑帮首领的故事。', '犯罪片'),
(19871023, '末代皇帝', '01', '贝纳尔多·贝托鲁奇', 'upload/modaihuangdi.jpg', '该片讲述了中国最后一个皇帝爱新觉罗·溥仪从当上皇帝开始到最终成为一名普通公民之间横跨60年的跌宕一生。', '剧情片'),
(19930101, '霸王别姬', '01', '陈凯歌', 'upload/bawangbieji.jpg', '影片围绕两位京剧伶人半个世纪的悲欢离合，展现了对传统文化、人的生存状态及人性的思考与领悟。', '剧情片'),
(19931130, '辛德勒的名单', '06', '史蒂文·斯皮尔伯格', 'upload/xdldmd.jpg', '讲述了一名身在波兰的德国人奥斯卡·辛德勒，在二战时雇用了1100多名犹太人在他的工厂工作，帮助他们逃过被屠杀的劫数。', '历史片'),
(19940706, '阿甘正传', '02', '罗伯特·泽米吉斯', 'upload/aganzhengzhuan.jpg', '电影改编自美国作家温斯顿·格卢姆于1986年出版的同名小说，描绘了先天智障的小镇男孩福瑞斯特·甘自强不息，最终“傻人有傻福”地得到上天眷顾，在多个领域创造奇迹的励志故事。', '励志片'),
(19940910, '肖申克的救赎', '01', '弗兰克·德拉邦特', 'upload/xiaoshengke.jpg', '主要讲述了银行家安迪因被误判为枪杀妻子及其情人的罪名入狱后，他不动声色、步步为营地谋划自我拯救并最终成功越狱，重获自由的故事。', '剧情片'),
(19980605, '楚门的世界', '01', '彼得·威尔', 'upload/chumendeshijie.jpg', '影片讲述了楚门是一档热门肥皂剧的主人公，他身边的所有事情都是虚假的，他的亲人和朋友全都是演员，但他本人对此一无所知。最终楚门不惜一切代价走出了这个虚拟的世界。', '剧情片'),
(19981028, '海上钢琴师', '03', '吉赛贝·托纳多雷', 'upload/haishanggqs.jpg', '该片改编自亚利桑德罗·巴里克文学剧本《1900：独白》，讲述了一个被命名为“1900”的弃婴在一艘远洋客轮上与钢琴结缘，成为钢琴大师的传奇故事。', '音乐片'),
(19990202, '海绵宝宝', '08', 'wwj', 'upload/haimianbaobao.jpg', '好看', '动画片'),
(20061215, '当幸福来敲门', '01', '加布里尔·穆奇诺', 'upload/dangxinfulaiqm.jpg', '主角是非洲裔美国人投资专家克里斯·加德纳。影片讲述了一位濒临破产、老婆离家的落魄业务员，如何刻苦耐劳的善尽单亲责任，奋发向上成为股市交易员，最后成为知名的金融投资家的励志故事。', '剧情片'),
(20161118, '海边的曼彻斯特', '04', '肯尼斯·罗纳根', 'upload/haibiandemcst.jpg', '影片讲述了李·钱德勒的哥哥因病去世之后，他作为监护人照顾侄子的故事。', '家庭片');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
