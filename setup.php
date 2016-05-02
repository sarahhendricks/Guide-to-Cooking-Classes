/* ________________________________________________________________________________
 * This php code is a modified version of a tutorial written by jamesismyname. His 
 * work can be found at https://github.com/daveismyname/simple-cms
 *
 * Author: Sarah Hendricks
 * ________________________________________________________________________________
*/
--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pageID` int(11) NOT NULL,
  `pageTitle` varchar(255) DEFAULT NULL,
  `pageLink` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photoCredit` text NOT NULL,
  `pageCont` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pageID`, `pageTitle`, `pageLink`, `photo`, `photoCredit`, `pageCont`) VALUES
(1, 'Sur La Table', 'http://www.surlatable.com/category/cat2211278/Find+a+Cooking+Class', 'https://scontent-iad3-1.cdninstagram.com/t51.2885-15/e35/12965705_1555092611456820_707386800_n.jpg', '<a href="https://www.instagram.com/p/BER-eHXovld/?taken-by=surlatable" target="_blank">Sur La Table Instagram</a>', '<p>Sur La Table combines the best of both technique classes and fun themed dinners. Go to town on a "Grilled Seafood" class or learn how to make the "Perfect Pie from Scratch" - either way, Sur La Table has you covered. And because this location is a chain store, you have a variety of places to take classes, even just in Virginia!</p>'),
(2, 'Culinaria Cooking School', 'http://www.culinariacookingschool.com/culinaria-classes/month/', 'https://scontent-iad3-1.cdninstagram.com/t51.2885-15/e35/12327956_562319707249644_1480609688_n.jpg', '<a href="https://www.instagram.com/p/-6ysyaylzy/?taken-by=culinariacookingschool" target="_blank">Culinaria Cooking School Instagram</a>', '<p>If variety of classes is your calling, then look no further than Culinaria Cooking School. Culinaria''s mission is "teaching the fundamentals in a fun, no-pressure environment" while also bringing together professional chefs and home cooks. An entire calendar of classes means that you''ll have multiple chances to try most classes, but will also find something that suits your fancy each time you attend.</p>'),
(3, 'Culinaerie', 'http://www.culinaerie.com/classcalendar', 'https://scontent-iad3-1.cdninstagram.com/t51.2885-15/e35/12716790_1191920424152717_163936649_n.jpg', '<a href="https://www.instagram.com/p/BCa9oTCstaL/?taken-at=481702" target="_blank">fannetasticfood on Instagram</a>', '<p>Run out of ideas for anniversary gifts? Take a class together at Culinaerie! This location has couple''s classes on Friday nights that feature everything from margaritas to lobster. Follow along a demonstration, and enjoy a romantic dinner afterwards of the hard work you''ve created.</p>'),
(4, 'L''Academie de Cuisine', 'https://lacademie.com/recreational/calendar/', 'https://scontent-iad3-1.cdninstagram.com/t51.2885-15/e35/12530958_1270142889679669_2139011070_n.jpg', '<a href="https://www.instagram.com/p/BEWWdwJS4T6/?taken-by=lacademiedc" target="_blank">L''Academie Instagram</a>', '<p>L''Academie de Cuisine is one of DC''s premiere cooking schools, but you can also take classes even if you aren''t a student! This is the place to go to if you''re looking to nail down the fundamentals as trained chefs will take you through skill-based classes such as "Italian Cake Making" and "Steak Night." Go take a class and wow your friends afterwards with your technique!</p>'),
(5, 'Society Fair', 'http://societyfair.net/demo-kitchen/', 'https://scontent-iad3-1.cdninstagram.com/t51.2885-15/e35/12950338_1013003482125557_1931506700_n.jpg', '<a href="https://www.instagram.com/p/BEouUCxSco9/?taken-by=societyfair" target="_blank">Society Fair Instagram</a>', '<p>Don''t feel like cooking tonight, but still want to learn something new? Then Society Fair''s demo classes are right for you! A special 4-course food-and-wine menu is picked each month, so everything is one-time only.</p>'),
(6, 'Del Campo', 'http://delcampodc.com/news/', 'https://pbs.twimg.com/media/CglCjhxWwAAjJjL.jpg', '<a href="https://twitter.com/DelCampoDC/status/723182393994027013" target="_blank">Del Campo Twitter</a>', '<p>Del Campo''s classes are few and far between, so when they are offering something, be sure to take advantage of it! This Mexican restaurant features classes centered around Central American and Caribbean cuisine, and often feature meat as the main focus. Enjoy a trip south of the border without ever leaving home!</p>'),
(7, 'Osteria Marzano', 'http://media.wix.com/ugd/b0015c_f501dac6a25d43728029f7c55e68c38c.pdf', 'https://scontent-iad3-1.cdninstagram.com/t51.2885-15/e35/12965817_347438412046798_1583065924_n.jpg', '<a href="https://www.instagram.com/p/BERjtV_MEJA/?taken-by=osteriamarzano" target="_blank">Osteria Marzano Instagram</a>', '<p>Craving Italian? Osteria Marzano is the place to go! They only offer one class a month, so be sure to attend them when they happen on Saturday afternoons. But the exclusivity is worth it: 3-4 course authentic Italian meals that you can then take home with you.</p>'),
(8, 'Urbana', 'http://www.urbanadc.com/promotions/cooking-classes.htm', 'https://scontent-iad3-1.cdninstagram.com/t51.2885-15/e35/12750335_1552599295067977_2060567090_n.jpg', '<a href="https://www.instagram.com/p/BCBRvpfNfHE/?taken-by=urbana_dc" target="_blank">Urbana Instagram</a>', '<p>Urbana restaurant specializes in fresh, contemporary Italian food, so it would only make sense that their monthly cooking classes are the same. Urbana likes to take advantage of holidays like Valentines day or Mother''s day, so if you know your boo would enjoy a class as a gift, then take one together!</p>'),
(9, 'Thai Basil', 'http://thaibasilchantilly.com/classes-catering/', 'http://thaibasilchantilly.com/wp-content/uploads/2014/05/02_0010.jpg', '<a href="http://thaibasilchantilly.com/gallery/" target="_blank">Thai Basil gallery</a>', '<p>Although a ways out in Chantilly, Virginia, Thai Basil offers unique classes focused on Thai cuisine. Multiple dishes are made during class so that you can create a well-rounded meal. Prepare one of their dishes at class, and then enjoy it at home for years to come.</p>'),
(10, 'Calbra Classics', 'http://www.calbraclassics.com/cooking-classes/', 'http://www.calbraclassics.com/wp-content/uploads/2014/12/1.jpg', '<a href="http://www.calbraclassics.com/gallery/" target="_blank">Calbra Classics gallery</a>', '<p>North African cuisine is not something you''ll find much of in the DC-Metro area, but step outside your comfort zone with a class at Calbra Classics! They limit their offerings to food centered around the family, whether that''s couple''s classes or how to prepare healthy meals for everyone in the family. Enjoy bringing everyone together with these new meals!</p>'),
(11, 'Casa Italiana', 'http://www.casaitalianaschool.org/cookingdetails.html', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Cotechino-Servito-Polenta-Lenticchie.jpg/640px-Cotechino-Servito-Polenta-Lenticchie.jpg', '<a href="http://www.meetup.com/DCitalian/events/225693884/" target="_blank">Piazza Italia Language Group meetup</a>', '<p>Craving a little bit of rustic Italy - the kind of food that locals eat? Then the cooking classes at the Casa Italiana School will guide you well. This school teaches cooking classes as part of their Italian Culture curriculum, and you''ll be surrounded by other community members who have a love for all things Italian.</p>'),
(12, 'Straw Stick and Brick Deli', 'http://www.ssbdeli.com/Workshops.aspx', 'https://scontent-iad3-1.cdninstagram.com/t51.2885-15/e35/13092496_1198696900155413_1908435186_n.jpg', '<a href="https://www.instagram.com/p/BEhmXBSzM66/?taken-at=10401384" target="_blank">instaleezy on Instagram</a>', '<p>Ever wanted to take a class on making bacon? Then check out the Straw Stick and Brick Deli! Most of their classes focus on butchery and making sausages, all from pork. Their small class sizes will also mean that you get personalized attention from the chefs, so roll up your sleeves - you''re about to go hog wild.</p>'),
(13, 'Williams-Sonoma', 'http://www.williams-sonoma.com/pages/store-events/store-events/technique-classes.html', 'https://scontent-iad3-1.cdninstagram.com/t51.2885-15/e35/12725064_471883976345703_435327278_n.jpg', '<a href="https://www.instagram.com/p/BBxmn0IP9x0/?taken-at=279901500" target="_blank">Williams-Sonoma Bethesda Instagram</a>', '<p>Ah, good ol'' Williams-Sonoma. A large demo kitchen in the back of these chain stores means that you have ample space to make whatever is featured on the calendar for that day. Each store is a bit different, so stop by the one nearest to you to see what they''re offering for the month. But at each place you''ll find a fun mix of skills and cuisine classes, designed to help you fill your kitchen at home with good food and good people.</p>'),
(14, 'YMCA', 'http://www.ymcadc.org/page.cfm?p=52', 'https://scontent-iad3-1.cdninstagram.com/t51.2885-15/e35/12328498_134536080269783_313302750_n.jpg', '<a href="https://www.instagram.com/p/BCX_uD7jT2Y/?taken-by=ymcadc" target="_blank">YMCA DC Instagram</a>', '<p>Bet you didn''t know that your local YMCA has cooking classes! If your budget has got you down or want to spend an afternoon with your kids, the Y is a cheap and fun place to go for an afternoon. Many of their classes focus on introducing cooks to a new cuisine, such as Israeli or Georgian (the country, not the state), so go learn something new with the DC community.</p>'),
(15, 'La Tasca', 'http://www.latascausa.com/site/combo-paella-and-sangria/', 'https://scontent-iad3-1.cdninstagram.com/t51.2885-15/e35/12751558_802972883179919_199048225_n.jpg', '<a href="https://www.instagram.com/p/BC50-DtJPRu/?taken-at=235858215" target="_blank">deannadelgado on Instagram</a>', '<p>This location only offers two classes: making sangrias and making paella. Needless to say, because they''ve limited their offerings, you know that these will be expertly executed. You can take one or the other, or a combo class. Enjoy a Spanish night to remember!</p>');
