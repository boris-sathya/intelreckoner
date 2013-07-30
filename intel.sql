
--
-- Database: `wrdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `intel`
--

CREATE TABLE IF NOT EXISTS `intel` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

