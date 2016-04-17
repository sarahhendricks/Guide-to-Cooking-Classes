/* ________________________________________________________________________________
 * This php code is a modified version of a tutorial written by jamesismyname. His 
 * work can be found at https://github.com/daveismyname/simple-cms
 *
 * Author: Sarah Hendricks
 * ________________________________________________________________________________
*/

CREATE TABLE IF NOT EXISTS `members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `members` (`memberID`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

CREATE TABLE IF NOT EXISTS `pages` (
  `pageID` int(11) NOT NULL AUTO_INCREMENT,
  `pageTitle` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `pageCont` text,
  PRIMARY KEY (`pageID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO `pages` (`pageID`, `pageTitle`, `photo`, `pageCont`) VALUES
(1, 'Home', 'photos/apple_pie_making.jpeg', '<p>Sample Sample content</p>'),
(2, 'About', 'photos/carving_beef.jpeg', '<p>Sample Sample content</p>'),
(3, 'Services', 'photos/food_tray.jpeg', '<p>Sample Sample content</p>'),
(4, 'News', 'photos/pasta_making.jpeg', '<p>Sample Sample content</p>'),
(5, 'Contact', 'photos/picnic_and_wine.jpeg', '<p>Sample Sample content</p>');