-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 30, 2025 at 09:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tours4real`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `adults` int(1) NOT NULL,
  `childrens` int(1) NOT NULL,
  `card_holder` varchar(25) NOT NULL,
  `card_no` varchar(20) NOT NULL,
  `total_price` int(6) NOT NULL,
  `discount` int(5) NOT NULL,
  `book_date` datetime NOT NULL DEFAULT current_timestamp(),
  `Arrival_DT` date NOT NULL DEFAULT current_timestamp(),
  `Leaving_DT` date NOT NULL DEFAULT current_timestamp(),
  `cancel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `sent_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(5) NOT NULL,
  `package_name` varchar(125) NOT NULL,
  `package_desc` varchar(5000) NOT NULL,
  `pack_category_id` int(11) NOT NULL,
  `pack_category_name` varchar(50) NOT NULL,
  `package_price` int(15) NOT NULL,
  `package_img` varchar(250) NOT NULL,
  `package_source` varchar(125) NOT NULL,
  `between_places` varchar(100) NOT NULL,
  `package_destination` varchar(125) NOT NULL,
  `rate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_desc`, `pack_category_id`, `pack_category_name`, `package_price`, `package_img`, `package_source`, `between_places`, `package_destination`, `rate`) VALUES
(1, 'Ahmedabad', 'One of the largest city and former capital of Gujarat, Ahmedabad is also known as Amdavad. It is situated on the banks of Sabarmati river, mostly known for its tourist attractions', 1, 'Popular Cities', 250, 'http://localhost/Tours4Real_Final/img/Package/City/ahmedabad.jpg', 'Sabarmati River Front', 'Adalaj Vav, Gandhi Ashram, Lal Darwaja, Kankaria Lake', 'Iskcon Temple', 4),
(2, 'Vadodara', 'Vadodara, also known as Baroda, is a city in the western Indian state of Gujarat.The city has a rich legacy of art and culture, with a number of museums and galleries showcasing local arts and crafts.', 1, 'Popular Cities', 500, 'http://localhost/Tours4Real_Final/img/Package/City/vadodara.jpg', 'Sayaji Baug Zoo', 'Laxmi Vilas Palace, Baroda Museum, Statue Of Unity, Ajwa Nimeta Garden, SurSagar Lake, Kirti Mandir', 'Champaner Pavagadh Archaeological Park', 5),
(3, 'Kutch', 'Kutch, also known as Kachchh, is a district in the state of Gujarat in western India. It is the largest district in India and is known for its distinct culture, history, and natural beauty.', 1, 'Popular Cities', 300, 'http://localhost/Tours4Real_Final/img/Package/City/kutch.jpg', 'Dholavira', 'Narayan Sarovar, Vijay Vilas Palace, Aaina Mahal, Mandvi Beach, Rann Of Kutch, ', 'Kutch Museum', 3),
(4, 'Narmada', 'Narmada is a district in the state of Gujarat, India. It is located in the eastern part of the state.  The district is named after the Narmada River, which flows through it. The district is known for its natural beauty and is home to several tourist attractions.', 1, 'Popular Cities', 150, 'http://localhost/Tours4Real_Final/img/Package/City/narmada.jpg', 'Junaraj', 'Ninai Waterfall, Sardar Sarovar Dam, Harsiddhi Temple, Zarvani Waterfall, Karjan Dam', 'Rajavant Palace', 3),
(5, 'Junagadh', 'The district is located in the Saurashtra region of Gujarat. Junagadh district is known for its historical and cultural significance, and it has several important tourist attractions. ', 1, 'Popular Cities', 200, 'http://localhost/Tours4Real_Final/img/Package/City/junagadh.jpg', 'Uparkot Fort', 'Girnar Hill, Adi-Kadi Vav & Navghan Kuwo, Gir National Park, Sarkheswar Beach, Buddhist Caves ', 'Jain Temples', 4),
(6, 'North Gujarat', 'North Gujarat is known for its rich cultural heritage, as well as its significant agricultural and industrial sectors. he region also has several important industrial centers. North Gujarat is a vibrant and diverse region with a rich history and culture, and a significant contribution to the economy of Gujarat and India as a whole.', 2, 'Heritage', 3000, 'http://localhost/Tours4Real_Final/img/Package/Heritage/mahisagar.jpg', 'Kutch', 'Banaskantha, Mehsana, Morbi, Gandhinagar, Aravali, Patan, Sabarkantha', 'Mahisagar', 5),
(7, 'Central & South Gujarat', 'Central region is known for its rich cultural heritage, with many historical monuments and temples. South region is known for its thriving textile industry, as well as its natural beauty and rich cultural heritage. ', 2, 'Heritage', 4000, 'http://localhost/Tours4Real_Final/img/Package/Heritage/valsad.jpg', 'Surendranagar', 'Ahmedabad, Kheda, Anand, Vadodara, Chhota Udaipur, Bharuch, Narmada, Surat, Tapi, Navsari', 'Valsad', 4),
(8, 'Saurashtra', ' It is a region located in the western part of India, primarily in the state of Gujarat. It is a peninsular region that is bounded by the Arabian Sea to the west, the Gulf of Cambay to the east, and the Gulf of Kutch to the south. The region is known for its rich cultural heritage, including its arts, crafts, and cuisine.  ', 2, 'Heritage', 5000, 'http://localhost/Tours4Real_Final/img/Package/Heritage/bhavnagar.jpg', 'Jamnagar', 'Devbhoomi Dwarka, Porbandar, Rajkot, Junagadh, GIR Somnath, Amreli, Botad', 'Bhavnagar', 5),
(9, 'Akshardham', 'Akshardham in Gandhinagar is a Hindu temple complex and a spiritual-cultural campus. It was built in 1992 and is dedicated to Lord Swaminarayan. The temple complex also has beautifully landscaped gardens, a musical fountain, and a cultural center that offers classes in Indian classical music and dance. Overall, Akshardham in Gandhinagar is a must-visit destination for anyone interested in Hindu culture and spirituality.', 3, 'Famous Religious Places', 850, 'http://localhost/Tours4Real_Final/img/Package/Religious/akshardham.jpg', 'Ahmedabad', 'Akshardham, Sector 20', 'Gandhinagar', 5),
(10, 'Somnath', 'Somnath Mandir (also known as the Somnath Temple) is a famous Hindu temple located in the Prabhas Kshetra near Veraval in Saurashtra, Gujarat, India. It is one of the twelve Jyotirlinga shrines of Lord Shiva.', 3, 'Famous Religious Places', 1000, 'http://localhost/Tours4Real_Final/img/Package/Religious/somnathtemple.jpg', 'Ahmedabad', 'Somnath, Veraval', 'Patan', 4),
(11, 'Ambaji', 'Ambaji is a popular pilgrimage site for Hindus, as it is home to the famous Ambaji Temple, one of the 51 Shakti Peethas (holy shrines of the goddess Shakti) in India. The temple is dedicated to Goddess Amba, who is worshipped as a form of the mother goddess.', 3, 'Famous Religious Places', 1100, 'http://localhost/Tours4Real_Final/img/Package/Religious/ambajitempal.jpg', 'Ahmedabad', 'Ambaji, Abu Rd', 'Banaskantha', 5),
(12, 'Palitana', 'Palitana is known for being the site of the Palitana Temples, which are a cluster of more than 900 Jain temples located on the Shatrunjaya hill.The town of Palitana is also known for its scenic beauty, as it is surrounded by the Shatrunjaya hills and offers stunning views of the surrounding landscape.', 3, 'Famous Religious Places', 850, 'http://localhost/Tours4Real_Final/img/Package/Religious/palitana.jpg', 'Ahmedabad', 'Palitana, Shatrunjaya hills', 'Bhavnagar', 3),
(13, 'KastBhanjandev Temple', 'Kashtabhanjan Dev is a revered Hindu deity, who is believed to be a form of Lord Hanuman.The temple also has a rich history and is believed to have been built in the 19th century by a devotee named Gopalanand Swami, who was a disciple of the famous saint and spiritual leader, Swaminarayan.', 3, 'Famous Religious Places', 500, 'http://localhost/Tours4Real_Final/img/Package/Religious/sarangpur.jpg', 'Ahmedabad', 'KastBhanjan, Salangpur', 'Botad', 4),
(16, 'Lothal', 'Lothal was a vital and thriving trade centre in ancient times, with its trade of beads, gems and valuable ornaments reaching the far corners of West Asia and Africa. ', 4, 'Tours4Real Special', 700, 'http://localhost/Tours4Real_Final/img/Package/Special/lothal.jpg', 'Ahmedabad', 'Saragwala', 'Bhal, Lothal', 4),
(17, 'Palanpur', 'Palanpur is a city and a municipality of Banaskantha district in the Indian state of Gujarat. Palanpur is the administrative headquarters of Banaskantha district.', 4, 'Tours4Real Special', 550, 'http://localhost/Tours4Real_Final/img/Package/Special/palanpur.jpg', 'Surendranagar', 'Antroli,Badargadh,Bhagal,Bhutedi', 'Banaskantha', 3),
(18, 'Pavagadh', 'Pavagadh is an ancient Triassic Period location with Enriched History from periods of Treta Yuga and Dvapara Yuga. In present day, Pavagadh is a municipal operated region in Panchmahal district about 46 kilometres (29 mi) away from Vadodara in Gujarat state in western India.  ', 4, 'Tours4Real Special', 1000, 'http://localhost/Tours4Real_Final/img/Package/Special/pavagadh.jpg', 'Ahmedabad', 'Panchmahal, Champaner', 'Vadodara', 5),
(19, 'Polo Forest', 'Located 160 km from the town of Ahmedabad, the Polo Forest provides visitors with sumptuous green attractive beauty in the rainy season. It is spread over an area of 400 sq. km and has a rich ecology that lures in travelers to let them be a part of the wonderful experience.', 4, 'Tours4Real Special', 3000, 'http://localhost/Tours4Real_Final/img/Package/Special/poloForest.jpg', 'Gandhinagar', 'Vijaynagar', 'Sabarkantha', 5),
(21, 'Weekends', 'We provide expert innovative learning that combines adventure and education in a positive and creative environment. Weekends Destination has two main aims that comprise our mission statement.', 5, 'Fun filled Holiday', 3000, 'http://localhost/Tours4Real_Final/img/Package/Holiday/weekend.jpg', 'Ahmedabad', 'Akshardham, Indroda Park, Science City, Adalaj Vav, Kankaria', 'Gandhinagar', 3),
(22, 'Hot Summers', 'Summers in Gujarat are generally hot and dry, with temperatures typically ranging from 35-45°C (95-113°F) during the months of April to June. However, there are some places in Gujarat that offer respite from the heat during summers. ', 5, 'Fun filled Holiday', 1500, 'http://localhost/Tours4Real_Final/img/Package/Holiday/summer.jpg', 'Ahmedabad', 'Saputara', 'Dang', 4),
(23, 'Chilling Winters', 'Gujarat generally experiences mild winters compared to the rest of India. The winter season in Gujarat starts from November and lasts until February. The winter season in Gujarat is generally pleasant with sunny days and cool nights, making it a great time to explore the state\'s rich culture, history, and natural beauty.', 5, 'Fun filled Holiday', 3500, 'http://localhost/Tours4Real_Final/img/Package/Holiday/winter.jpg', 'Ahmedabad', 'Dadra Nagar Haveli, Kathiawar Peninsula', 'Daman', 4),
(24, 'Wildlife & Nature', 'Gir National Park is the only place in the world outside Africa where a lion can be seen in its natural habitat. Gujarat is the only place in the world where you can spot lions roaming free in the wild.', 5, 'Fun filled Holiday', 4000, 'http://localhost/Tours4Real_Final/img/Package/Holiday/wildlife.jpg', 'Ahmedabad', 'GIR National Park & Wildlife Sanctuary', 'GIR', 5),
(25, 'Dare to Picnic', 'Summers in Gujarat are generally hot and dry, with temperatures typically ranging from 35-45°C (95-113°F) during the months of April to June. However, there are some places in Gujarat that offer respite from the heat during summers. ', 5, 'Fun filled Holiday', 1500, 'http://localhost/Tours4Real_Final/img/Package/Holiday/daretopicnic.jpg', 'Ahmedabad', 'Saputara', 'Dang', 4);

-- --------------------------------------------------------

--
-- Table structure for table `package_category`
--

CREATE TABLE `package_category` (
  `pack_cat_id` int(11) NOT NULL,
  `pack_cat_name` varchar(50) NOT NULL,
  `pack_cat_desc` varchar(200) NOT NULL,
  `pack_cat_info` varchar(1000) NOT NULL,
  `pack_cat_slider_img` varchar(250) NOT NULL,
  `pack_cat_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_category`
--

INSERT INTO `package_category` (`pack_cat_id`, `pack_cat_name`, `pack_cat_desc`, `pack_cat_info`, `pack_cat_slider_img`, `pack_cat_img`) VALUES
(1, 'Popular Cities', 'Discovering the Pulse of Popular Cities: Unraveling the Magic of Urban Life', 'From the vibrant streets of New York to the historic charm of Paris, popular cities offer a unique blend of culture, entertainment, and urban life. These bustling metropolises are centers of innovation, creativity, and diversity, attracting people from all over the world. With a plethora of activities and attractions to explore, popular cities are a hub of energy and excitement, offering endless opportunities to experience the pulse of urban life.', 'http://localhost/Tours4Real_Final/img/Package/pack_categories_slider/cities.jpg', 'http://localhost/Tours4Real_Final/img/Package/pack_categories/city.jpg'),
(2, 'Heritage', 'Preserving Our Past: Exploring the World\'s Heritage Places', 'Heritage places are a testament to the rich cultural and historical wonders of the world, and are a true reflection of our shared history. These places offer a glimpse into the past, telling stories of the people who lived there, the events that took place, and the traditions and beliefs that shaped their lives. From ancient ruins and iconic landmarks to traditional villages and religious sites, heritage places are an important part of our collective heritage.', 'http://localhost/Tours4Real_Final/img/Package/pack_categories_slider/heritage.jpg', 'http://localhost/Tours4Real_Final/img/Package/pack_categories/heritage.jpg'),
(3, 'Famous Religious Places', 'Divine Journeys: Exploring the Spiritual Significance of Religious Places', 'Religious places hold a special place in the hearts of believers, serving as centers of faith and worship around the world. These sacred sites are imbued with spiritual significance, offering a place for prayer, contemplation, and reflection. From the grandeur of St. Peter\'s Basilica to the peacefulness of the Golden Temple, religious places come in many different shapes and sizes, but all share a common thread of deep cultural and historical significance.', 'http://localhost/Tours4Real_Final/img/Package/pack_categories_slider/religious.jpg', 'http://localhost/Tours4Real_Final/img/Package/pack_categories/religious.jpg'),
(4, 'Tours4Real Special', 'Experience the Extraordinary: Our Special Package for a Journey of a Lifetimeid illo consequuntur, velit odit necessitatibus!', 'Are you ready to embark on a journey of a lifetime and experience the extraordinary? Our Special Package offers you the opportunity to discover the hidden gems and cultural wonders of our world in a way that is both immersive and unforgettable. This package has been curated to take you on a journey of discovery through some of the most breathtaking destinations, from the awe-inspiring natural wonders of the Grand Canyon to the enchanting streets of gujrat.', 'http://localhost/Tours4Real_Final/img/Package/pack_categories_slider/special.jpg', 'http://localhost/Tours4Real_Final/img/Package/pack_categories/special.jpg'),
(5, 'Fun filled Holiday', 'Fun Filled Holidays: Creating Lasting Memories with Your Loved Ones', 'Holidays are a time for making memories, reconnecting with loved ones, and creating unforgettable experiences. Fun Filled Holidays is all about creating the perfect vacation for you and your family, where you can let your hair down, relax, and enjoy quality time together. From family-friendly resorts and theme parks to exotic beach destinations and outdoor adventures, there\'s something for everyone with our carefully selected holiday packages.', 'http://localhost/Tours4Real_Final/img/Package/pack_categories_slider/holiday.jpg', 'http://localhost/Tours4Real_Final/img/Package/pack_categories/holiday.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photogallery`
--

CREATE TABLE `photogallery` (
  `PhotoG_id` int(5) NOT NULL,
  `PhotoG_img` varchar(250) NOT NULL,
  `PhotoG_name` varchar(50) NOT NULL,
  `PhotoG_dt` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `photogallery`
--

INSERT INTO `photogallery` (`PhotoG_id`, `PhotoG_img`, `PhotoG_name`, `PhotoG_dt`) VALUES
(1, 'http://localhost/Tours4Real_Final/img/Places/Gallery/akshardham.jpg', 'Akshardham Temple', 'gandhinagara  '),
(2, 'http://localhost/Tours4Real_Final/img/Places/Gallery/IndrodaPark.jpg', 'Indroda Park', 'gandhinagar'),
(3, 'http://localhost/Tours4Real_Final/img/Places/Gallery/MahatmaMandir.jpg', 'Mahatma Mandir', 'gandhinagar'),
(4, 'http://localhost/Tours4Real_Final/img/Places/Gallery/Gandhiashram.jpg', 'Gandhi Ashram', 'ahmedabad'),
(5, 'http://localhost/Tours4Real_Final/img/Places/Gallery/sidisyadjali.jpg', 'Sidi Sayad Ni Jali', 'ahmedabad'),
(6, 'http://localhost/Tours4Real_Final/img/Places/Gallery/adalajval.jpg', 'Adalaj Ni Vav', 'ahmedabad'),
(7, 'http://localhost/Tours4Real_Final/img/Places/Gallery/laxmivilaspalacevadodra.jpg', 'Laxmi Vilas Places', 'Vadodara'),
(8, 'http://localhost/Tours4Real_Final/img/Places/Gallery/TriMandir.jpg', 'Trimandir', 'Vadodara'),
(9, 'http://localhost/Tours4Real_Final/img/Places/Gallery/KirtiMandir.jpg', 'Kirti Mandir', 'Vadodara'),
(10, 'http://localhost/Tours4Real_Final/img/Places/Gallery/ranjitvilaspalace.jpg', 'Ranjit Vilas Palace', 'rajkot'),
(11, 'http://localhost/Tours4Real_Final/img/Places/Gallery/ramkrishnamandir.jpg', 'Shri Ramakrishna Ashrama', 'rajkot'),
(12, 'http://localhost/Tours4Real_Final/img/Places/Gallery/AjiDam.jpg', 'Aji Dam', 'rajkot'),
(13, 'http://localhost/Tours4Real_Final/img/Places/Gallery/DumasBeach.jpg', 'Dumas Beach', 'surat'),
(14, 'http://localhost/Tours4Real_Final/img/Places/Gallery/IskonMandri.jpg', 'Iskon Mandir', 'surat'),
(15, 'http://localhost/Tours4Real_Final/img/Places/Gallery/UbharatBeach.jpg', 'Ubharat Beach', 'surat'),
(16, 'http://localhost/Tours4Real_Final/img/Places/Gallery/RanUtsav.jpg', 'Ran Uttsav', 'kutch'),
(17, 'http://localhost/Tours4Real_Final/img/Places/Gallery/dholavira.jpg', 'Dholavira', 'kutch'),
(18, 'http://localhost/Tours4Real_Final/img/Places/Gallery/LakhpatFort.jpg', 'Lakhpat Fort', 'kutch'),
(19, 'http://localhost/Tours4Real_Final/img/Places/Gallery/Dwarka1.jpg', 'Dwarka Tample', 'dwarka'),
(20, 'http://localhost/Tours4Real_Final/img/Places/Gallery/Nageswar.jpg', 'Nageshwar Jyotilinga', 'dwarka'),
(21, 'http://localhost/Tours4Real_Final/img/Places/Gallery/shivrajpurbech.jpg', 'Shivrajpur beach', 'dwarka'),
(22, 'http://localhost/Tours4Real_Final/img/Places/Gallery/girSomnath1.jpg', 'Gir lion Forest', 'gir somnath'),
(23, 'http://localhost/Tours4Real_Final/img/Places/Gallery/somnath-temple.jpg', 'Somnath Temple', 'gir somnath'),
(24, 'http://localhost/Tours4Real_Final/img/Places/Gallery/SomnathBeach.jpg', 'Somnath beach', 'gir somnath'),
(25, 'http://localhost/Tours4Real_Final/img/Places/Gallery/ranikivav.jpg', 'Rani ki Vav', 'patan'),
(26, 'http://localhost/Tours4Real_Final/img/Places/Gallery/SahastralingaTalav.jpg', 'Sahastralinga Talav', 'patan'),
(27, 'http://localhost/Tours4Real_Final/img/Places/Gallery/modherasuntemple.jpg', 'Modhera Sun Temple', 'patan'),
(28, 'http://localhost/Tours4Real_Final/img/Places/Gallery/poloforest.jpg', 'Polo Forest', 'sabarkantha'),
(29, 'http://localhost/Tours4Real_Final/img/Places/Gallery/tirupatirushivan_picnic.jpg', 'Tirupati Rishivan Park', 'sabarkantha'),
(30, 'http://localhost/Tours4Real_Final/img/Places/Gallery/iderfort.jpg', 'Ider Fort', 'sabarkantha'),
(31, 'http://localhost/Tours4Real_Final/img/Places/Gallery/statueofunity.jpg', 'Statue Of Unity', 'narmada'),
(32, 'http://localhost/Tours4Real_Final/img/Places/Gallery/sardarsarovardam.jpg', 'Sardarsarovar Dem', 'narmada'),
(33, 'http://localhost/Tours4Real_Final/img/Places/Gallery/NilkanthDham.jpg', 'Nilkanthdham', 'narmada'),
(34, 'http://localhost/Tours4Real_Final/img/Places/Gallery/saputarahillstation.jpg', 'Saputara Hill Station', 'dang'),
(35, 'http://localhost/Tours4Real_Final/img/Places/Gallery/U-turnpoint.jpg', 'U Turn-Point', 'dang'),
(36, 'http://localhost/Tours4Real_Final/img/Places/Gallery/AmbikeshwarTemple.jpg', 'Ambikeshwar Temple', 'dang'),
(37, 'http://localhost/Tours4Real_Final/img/Places/Gallery/swaminarayanmandir.jpg', 'BAPS Swaminarayan Mandir', 'bhavnagar'),
(38, 'http://localhost/Tours4Real_Final/img/Places/Gallery/KodiyarTemple.jpg', 'Khodiyar Mata Mandir', 'bhavnagar'),
(39, 'http://localhost/Tours4Real_Final/img/Places/Gallery/VictoriaPark.jpg', 'Victoria Nature Park', 'bhavnagar'),
(40, 'http://localhost/Tours4Real_Final/img/Places/Gallery/KirtiToran.jpg', 'Kirti Toran', 'porbandar'),
(41, 'http://localhost/Tours4Real_Final/img/Places/Gallery/porbandarbeach.jpg', 'Porbandar Beach', 'porbandar'),
(42, 'http://localhost/Tours4Real_Final/img/Places/Gallery/modherasuntemple.jpg', 'Sun Temple', 'Mehsana'),
(43, 'http://localhost/Tours4Real_Final/img/Places/Gallery/ShankusPark.jpg', 'Shankus Waterpark & Resort', 'Mehsana   ');

-- --------------------------------------------------------

--
-- Table structure for table `place_360`
--

CREATE TABLE `place_360` (
  `place_id` int(11) NOT NULL,
  `place_title` varchar(150) NOT NULL,
  `place_img` varchar(250) NOT NULL,
  `popup_img` varchar(250) NOT NULL,
  `popup_desc` varchar(500) NOT NULL,
  `place_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `place_360`
--

INSERT INTO `place_360` (`place_id`, `place_title`, `place_img`, `popup_img`, `popup_desc`, `place_cat`) VALUES
(1, 'Gandhi Ashram, Ahmedabad', 'http://localhost/Tours4Real_Final/img/Places/360/gandhiashram.jpg', 'https://momento360.com/e/u/c515eaeb60694fa38c750ba5e40818dd?utm_campaign=embed&utm_source=other&heading=125.84&pitch=-1.25&field-of-view=75&size=medium&display-plan=true', 'Sabarmati Ashram in Gujarat, located north of Ahmedabad, was originally the residence of Mahatma Gandhi and his spouse Kasturba. The ashram is flanked by a calm and quiet stretch by the Sabarmati River. This is also the location where Gandhi started his Dandi March from.        ', ' Historical        '),
(2, 'Laxmi vilas palace,Vadodra', 'http://localhost/Tours4Real_Final/img/Places/360/laxmivilaspalace.jpg', 'https://momento360.com/e/u/9a6265596c954e10ac24402892a87b32?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true', 'The Lakshmi Vilas Palace in Vadodara, Gujarat, India, was constructed by the Gaekwad family, a prominent Maratha family, who ruled the Baroda State. ', ' Historical '),
(3, 'Champaner killa, Panchmahal', 'http://localhost/Tours4Real_Final/img/Places/360/champaner.jpg', 'https://momento360.com/e/u/44792569f7e240269e7d5c6f01b2628b?utm_campaign=embed&utm_source=other&heading=-47.72&pitch=11.2&field-of-view=100&size=medium&display-plan=true', 'Champaner is a historical city in the state of Gujarat, in western India. ', ' Historical '),
(4, 'Junagadh fort', 'http://localhost/Tours4Real_Final/img/Places/360/junagadh.jpg', 'https://momento360.com/e/u/82c04231ca034590880dc0e2e22a83ba?utm_campaign=embed&utm_source=other&heading=138.76&pitch=77.42&field-of-view=96.35&size=medium&display-plan=true', 'Junagarh Fort is a fort in the city of Bikaner, Rajasthan, India. The modern city of Bikaner has developed around the fort.', 'Historical'),
(5, 'Porbandar', 'http://localhost/Tours4Real_Final/img/Places/360/porbandar.jpg', 'https://momento360.com/e/u/96f1a5cb0cb342668749fb5e27791d67?utm_campaign=embed&utm_source=other&heading=151.52&pitch=56.56&field-of-view=75&size=medium&display-plan=true', 'Porbandar is a city in the Indian state of Gujarat, perhaps best known for being the birthplace of Mahatma Gandhi and Sudama.', 'Historical'),
(6, 'Rani ki vav, Patan', 'http://localhost/Tours4Real_Final/img/Places/360/ranikivav.jpg', 'https://momento360.com/e/u/4d3f53d2b6204a41aca363ebb4db10cd?utm_campaign=embed&utm_source=other&heading=330.18&pitch=23.07&field-of-view=100&size=medium&display-plan=true', 'Rani Ki Vav is a stepwell situated in the town of Patan in Gujarat, India. It is located on the banks of the Saraswati River.', 'Historical'),
(7, 'Dholavira nagar, Kutch', 'http://localhost/Tours4Real_Final/img/Places/360/dholavira.jpg', 'https://momento360.com/e/u/d268eecd9ed142589a6d9469e1961081?utm_campaign=embed&utm_source=other&heading=14.13&pitch=29.5&field-of-view=100&size=medium&display-plan=true', 'Dholavira is an archaeological site at Khadirbet in Bhachau Taluka of Kutch District, in the state of Gujarat in western India', 'Historical'),
(8, 'Sidi saiyyed jali, Ahm.', 'http://localhost/Tours4Real_Final/img/Places/360/sidisyadnijali.jpg', 'https://momento360.com/e/u/e335844f0948459f9bf0cc249b462414?utm_campaign=embed&utm_source=other&heading=271.59&pitch=25.7&field-of-view=100&size=medium&display-plan=true', 'The Sidi Saiyyed Mosque, popularly known as Sidi Saiyyid ni Jali locally, built in 1572–73 AD, is one of the most famous mosques of Ahmedabad', 'Historical'),
(9, 'Ranjit vilas palace,Rajkot', 'http://localhost/Tours4Real_Final/img/Places/360/ranjitvilaspelas.jpg', 'https://momento360.com/e/u/4ba5e4bf412345cdb85ec6d1969a5f97?utm_campaign=embed&utm_source=other&heading=-36.18&pitch=-9.11&field-of-view=100&size=medium&display-plan=true', 'The Ranjit Vilas Palace is a palace in the city of Rajkot, Gujarat and is the residence of the royal family of the erstwhile Rajkot State.', 'Historical'),
(10, 'Adalaj vav, Ahmedabad', 'http://localhost/Tours4Real_Final/img/Places/360/adalajvav.jpg', 'https://momento360.com/e/u/314059af30af41ecaad571f792e4e0df?utm_campaign=embed&utm_source=other&heading=166.46&pitch=-28.15&field-of-view=100&size=medium&display-plan=true', 'Adalaj Stepwell is a stepwell. It was built in 1498 in the memory of Rana Veer Singh by his wife, Queen Rudadevi.', 'Historical'),
(11, 'Kabirvad, Bharuch', 'http://localhost/Tours4Real_Final/img/Places/360/kabirvad.jpg', 'https://momento360.com/e/u/59fd5a69456540a98eb25b7aaa8efb9d?utm_campaign=embed&utm_source=other&heading=199.29&pitch=-2.77&field-of-view=100&size=medium&display-plan=true', 'Kabirvad is a banyan tree located on a small river island in the Narmada river. ', 'Historical'),
(12, 'Desert of Kutch, kutch', 'http://localhost/Tours4Real_Final/img/Places/360/kutchran.jpg', 'https://momento360.com/e/u/f51a6b6baffa4d459655fde6bcecb822?utm_campaign=embed&utm_source=other&heading=56.97&pitch=-21.25&field-of-view=100&size=medium&display-plan=true', 'The Rann of Kutch (alternately spelled as Kuchchh) is a large area of salt marshes that span the border between India and Pakistan.', 'Trending'),
(13, 'Gir safari, junagadh', 'http://localhost/Tours4Real_Final/img/Places/360/gir.jpg', 'https://momento360.com/e/u/b0a952380166461fb6695ae8e78fa9e8?utm_campaign=embed&utm_source=other&heading=-136.74&pitch=-9.8&field-of-view=100&size=medium&display-plan=true', 'Over beautiful beaches and old forts of Veraval and Junagadh lies the thick jungles of Sasan Gir which is believed to be the last refuge of magnificent Asiatic Lions ', 'Trending'),
(14, 'Statue of unity, ', 'http://localhost/Tours4Real_Final/img/Places/360/statueosunity.jpg', 'https://momento360.com/e/u/3b6171cdf9174a3fa5050955416cff17?utm_campaign=embed&utm_source=other&heading=-6.97&pitch=12.23&field-of-view=100&size=medium&display-plan=true', 'The Statue of Unity is the world\'s tallest statue, with a height of 182 metres, located near Kevadia in the state of Gujarat, India.', 'Trending'),
(15, 'Saputara hillstation, Dang', 'http://localhost/Tours4Real_Final/img/Places/360/saputara.jpg', 'https://momento360.com/e/u/9721588195c04fa4a0c917a1206900cd?utm_campaign=embed&utm_source=other&heading=248.14&pitch=-85&field-of-view=100&size=medium&display-plan=true', 'Snuggled in the Sahyadris or the Western Ghats, Saputara is a quaint little hill station in the Dang district of Gujarat.', 'Trending'),
(16, 'Tapi river, Surat', 'http://localhost/Tours4Real_Final/img/Places/360/tapisurat.jpg', 'https://momento360.com/e/u/4c93860d990748e6a1d5fc5331107de7?utm_campaign=embed&utm_source=other&heading=83.9&pitch=28&field-of-view=75&size=medium&display-plan=true', 'Tapi river front looks beautiful in evening time in colorful light. good place for evening timr speent.', 'Trending'),
(17, 'Girnar mountain', 'http://localhost/Tours4Real_Final/img/Places/360/girnarmounten.jpg', 'https://momento360.com/e/u/fb87c27abc924da5846b649cf0435f77?utm_campaign=embed&utm_source=other&heading=221.82&pitch=-4.35&field-of-view=100&size=medium&display-plan=true', 'This sacred mountain also known as Revatak Parvata, rising dramatically from the plains, is covered with Jain and Hindu temples.', 'Trending'),
(18, 'Balram palace resort', 'http://localhost/Tours4Real_Final/img/Places/360/balrampalaceresortpalanpur.jpg', 'https://momento360.com/e/u/d65380eea2d742e587c91fc89234b6ca?utm_campaign=embed&utm_source=other&heading=220.29&pitch=13.7&field-of-view=75&size=medium&display-plan=true', 'A beautiful converted palace located on a hill and surrounded by a valley and stunning, well maintained grounds. The history is fascinating. ', 'Trending'),
(19, 'Umbergaon beach,Valsad', 'http://localhost/Tours4Real_Final/img/Places/360/umbergaonbeach.jpg', 'https://momento360.com/e/u/67bd6a227f1347aa8d74ccdd59d794c1?utm_campaign=embed&utm_source=other&heading=175.96&pitch=48.96&field-of-view=100&size=medium&display-plan=true', 'This beautiful beach lies in a charming small coastal town called Umbergaon, located in the Valsad district of Gujarat.', 'Trending'),
(20, 'Zarwani Waterfalls', 'http://localhost/Tours4Real_Final/img/Places/360/ZarwaniWaterfalls.jpg', 'https://momento360.com/e/u/e8b9080f8d294c92b6ecc044e7601b46?utm_campaign=embed&utm_source=other&heading=712.13&pitch=12.82&field-of-view=100&size=medium&display-plan=true', 'Cliffside waterfall with a natural pool at the base & at its strongest during monsoon season.', 'Trending'),
(21, 'Shivrajpur beach, dwarka', 'http://localhost/Tours4Real_Final/img/Places/360/shivrajpurbech.jpg', 'https://momento360.com/e/u/c7a955998289453ca3318ef14e55ff13?utm_campaign=embed&utm_source=other&heading=259.3&pitch=18.4&field-of-view=100&size=medium&display-plan=true', 'It is one of the cleanest beach in India. Family and friends and enjoy here freely as it\'s a ticketed venue they have maintained it very well.', 'Trending'),
(22, 'Science city, Ahmedabad', 'http://localhost/Tours4Real_Final/img/Places/360/sciencecity.jpg', 'https://momento360.com/e/u/dd3e0a281f754ca9ab3b377d30872885?utm_campaign=embed&utm_source=other&heading=140.07&pitch=23.77&field-of-view=100&size=medium&display-plan=true', 'One of the top places to visit in Ahmedabad, Gujarat Science City is a sprawling complex in the shape of a hexagon. ', 'Trending'),
(23, 'Somnath Temple', 'http://localhost/Tours4Real_Final/img/Places/360/somnath.jpg', 'https://momento360.com/e/u/3d0108b68084419bb50907a278816ae9?utm_campaign=embed&utm_source=other&heading=457.82&pitch=21.3&field-of-view=100&size=medium&display-plan=true', 'The temple is built at the shore of the Arabian ocean on the western corner of Indian subcontinent.', 'Temples'),
(24, 'Krishna mandir -dwarka', 'http://localhost/Tours4Real_Final/img/Places/360/dwarka.jpg', 'https://momento360.com/e/u/4f14cc1bd5654818a1dd08404b2344de?utm_campaign=embed&utm_source=other&heading=416.85&pitch=-11.19&field-of-view=90&size=medium&display-plan=true', 'As the temple is 2,200 years old, the temple has many beautiful carvings and statues of Lord Krishna. ', 'Temples'),
(25, 'Akshardham temple, Gandhinagar', 'http://localhost/Tours4Real_Final/img/Places/360/akshardham.jpg', 'https://momento360.com/e/u/4a4459de9f7c493dac514297909b80ef?utm_campaign=embed&utm_source=other&heading=17.07&pitch=-40.98&field-of-view=100&size=medium&display-plan=true', 'Akshardham is a majestic, intricately carved stone structure that stands amid sprawling gardens set in a 23-acre plot at Gandhinagar', 'Temples'),
(26, 'Swaminarayan mandir, Bhuj', 'http://localhost/Tours4Real_Final/img/Places/360/swaminarayanmandir_bhuj.jpg', 'https://momento360.com/e/u/60bdeeb9f73f4531b2a24bd1e1397e60?utm_campaign=embed&utm_source=other&heading=-25.78&pitch=41.43&field-of-view=100&size=medium&display-plan=true', 'Shree Swaminarayan Temple Bhuj is a socio-spiritual Hindu organisation, based in Bhuj-Kutch, Gujarat, which falls under the Nar-Narayandev Gadi as established and ordained by Lord Shree Swaminarayan Himself. ', 'Temples'),
(27, 'Ambaji tempel, Banaskantha', 'http://localhost/Tours4Real_Final/img/Places/360/ambajitempal.jpg', 'https://momento360.com/e/u/f4cb4eadba444ba0931f860247958df6?utm_campaign=embed&utm_source=other&heading=177.75&pitch=19.72&field-of-view=100&size=medium&display-plan=true', 'Located in Banaskantha District, Ambaji Temple is one of the 51 shaktipeeths of Maa Sati. It is believed that Maa Sati\'s heart has fallen in this place.', 'Temples'),
(28, 'Swaminarayan mandir, Bhavnagar', 'http://localhost/Tours4Real_Final/img/Places/360/swaminarayanmandir_bhavnagar.jpg', 'https://momento360.com/e/u/86f19c31123e40fb8b6d0e6dc725b378?utm_campaign=embed&utm_source=other&heading=25.08&pitch=2.94&field-of-view=100&size=medium&display-plan=true', 'Hindu temple featuring lavish carvings, landscaped gardens & multiple statues of deities. ... BAPS Shri Swaminarayan Mandir, Bhavnagar.\r\n', 'Temples'),
(29, 'Modhera sun temple, Mehsana', 'http://localhost/Tours4Real_Final/img/Places/360/somnath.jpg', 'https://momento360.com/e/u/d7204c590e1046bd98cc1931bad91e60?utm_campaign=embed&utm_source=other&heading=-76.8&pitch=10.5&field-of-view=75&size=medium&display-plan=true', 'The Sun Temple of Modhera is a Hindu temple dedicated to the solar deity Surya located at Modhera village of Mehsana district.', 'Temples'),
(30, 'Hanuman temple, Botad', 'http://localhost/Tours4Real_Final/img/Places/360/sarangpur.jpg', 'https://momento360.com/e/u/89e440b58b4549e5987d7a2fd303124c?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&display-plan=true', 'An ancient Lord Hanuman temple located within the Army Cantonment area in Ahmedabad.', 'Temples');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(5) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL DEFAULT 'XYZ',
  `password` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `fullname`, `username`, `password`, `email`, `mobile`, `created_at`, `status`) VALUES
(1, 'admin', 'admin', '12345', '', '', '2023-04-29 17:06:34', 0),
(2, 'Mohit Parmar', 'mohitparmar', '12345', 'xyz12@gmail.com', '1234567890', '2023-04-29 17:07:37', 1),
(4, 'Dax Mistry', 'dax', '12345', 'daxmistry83@gmail.com', '8200166120', '2023-04-29 20:53:33', 1),
(5, 'Vandit', 'vandit', '12345', 'xyz12@gmail.com', '1234567890', '2023-04-30 12:53:14', 0),
(6, 'Harsh.H.Kansara', 'harshkansara', 'har09har', 'harsh.h.kansara9775@gmail.com', '8000627900', '2023-05-01 01:45:46', 0),
(10, 'GOKUL LALANI', 'gokullalani', '12345', 'xyz12@gmail.com', '9099331234', '2023-05-08 23:42:28', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `user_id_fk` (`user_id`),
  ADD KEY `package_id_fk` (`package_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `package_category_id` (`pack_category_id`);

--
-- Indexes for table `package_category`
--
ALTER TABLE `package_category`
  ADD PRIMARY KEY (`pack_cat_id`),
  ADD UNIQUE KEY `pack_name_2` (`pack_cat_name`),
  ADD KEY `pack_name` (`pack_cat_name`);

--
-- Indexes for table `photogallery`
--
ALTER TABLE `photogallery`
  ADD PRIMARY KEY (`PhotoG_id`);

--
-- Indexes for table `place_360`
--
ALTER TABLE `place_360`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `package_category`
--
ALTER TABLE `package_category`
  MODIFY `pack_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photogallery`
--
ALTER TABLE `photogallery`
  MODIFY `PhotoG_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `place_360`
--
ALTER TABLE `place_360`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `package_id_fk` FOREIGN KEY (`package_id`) REFERENCES `package` (`package_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`pack_category_id`) REFERENCES `package_category` (`pack_cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
