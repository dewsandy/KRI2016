# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.5.27
# Server OS:                    Win32
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2016-04-18 00:50:56
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for kri
CREATE DATABASE IF NOT EXISTS `kri` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `kri`;


# Dumping structure for table kri.group
CREATE TABLE IF NOT EXISTS `group` (
  `id_group` int(10) NOT NULL AUTO_INCREMENT,
  `group` char(50) NOT NULL,
  PRIMARY KEY (`id_group`),
  UNIQUE KEY `group` (`group`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

# Dumping data for table kri.group: ~2 rows (approximately)
DELETE FROM `group`;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
INSERT INTO `group` (`id_group`, `group`) VALUES
	(1, 'admin'),
	(2, 'user');
/*!40000 ALTER TABLE `group` ENABLE KEYS */;


# Dumping structure for table kri.p_agenda
CREATE TABLE IF NOT EXISTS `p_agenda` (
  `id_agenda` int(10) NOT NULL AUTO_INCREMENT,
  `agenda` char(50) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_agenda: ~4 rows (approximately)
DELETE FROM `p_agenda`;
/*!40000 ALTER TABLE `p_agenda` DISABLE KEYS */;
INSERT INTO `p_agenda` (`id_agenda`, `agenda`, `date_add`, `tanggal`, `keterangan`) VALUES
	(1, 'Makan Bersama', '2015-06-22 09:00:18', '2016-06-24', ''),
	(2, 'Makrab', '2015-06-22 09:00:49', '2016-06-30', ''),
	(4, 'Kimi no2', '2015-05-22 09:29:01', '2016-06-30', ''),
	(5, 'test', '2016-04-18 01:48:37', '2016-06-30', '<p>test</p>');
/*!40000 ALTER TABLE `p_agenda` ENABLE KEYS */;


# Dumping structure for table kri.p_anggota
CREATE TABLE IF NOT EXISTS `p_anggota` (
  `id_anggota` int(10) NOT NULL DEFAULT '0',
  `id_tim` int(10) DEFAULT NULL,
  `nama` int(10) DEFAULT NULL,
  `jabatan` int(10) DEFAULT NULL,
  `nim` char(50) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_anggota`),
  KEY `FK_p_anggota_p_tim` (`id_tim`),
  CONSTRAINT `FK_p_anggota_p_tim` FOREIGN KEY (`id_tim`) REFERENCES `p_tim` (`id_tim`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_anggota: ~0 rows (approximately)
DELETE FROM `p_anggota`;
/*!40000 ALTER TABLE `p_anggota` DISABLE KEYS */;
/*!40000 ALTER TABLE `p_anggota` ENABLE KEYS */;


# Dumping structure for table kri.p_banner
CREATE TABLE IF NOT EXISTS `p_banner` (
  `id_banner` int(10) NOT NULL AUTO_INCREMENT,
  `banner` varchar(250) DEFAULT NULL,
  `date_add` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_banner: ~2 rows (approximately)
DELETE FROM `p_banner`;
/*!40000 ALTER TABLE `p_banner` DISABLE KEYS */;
INSERT INTO `p_banner` (`id_banner`, `banner`, `date_add`) VALUES
	(1, 'asset/upload/banner/2012kraireg4jpg18042016020640.jpg', '2016-04-17 12:28:05'),
	(2, 'asset/upload/banner/2015kraireg4jpg18042016020926.jpg', '2016-04-17 12:28:06');
/*!40000 ALTER TABLE `p_banner` ENABLE KEYS */;


# Dumping structure for table kri.p_berita
CREATE TABLE IF NOT EXISTS `p_berita` (
  `id_berita` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) NOT NULL,
  `overview` text NOT NULL,
  `full` text NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug_judul` varchar(220) NOT NULL,
  `image` varchar(220) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_berita: ~7 rows (approximately)
DELETE FROM `p_berita`;
/*!40000 ALTER TABLE `p_berita` DISABLE KEYS */;
INSERT INTO `p_berita` (`id_berita`, `judul`, `overview`, `full`, `keyword`, `id_kategori`, `id_user`, `tanggal`, `slug_judul`, `image`) VALUES
	(4, 'Awali Gerakan Wajib Upload Melalui Sosialisasi PKM', '<p style="text-align: justify;">Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>', '<div class="dept-subtitle-tabs">Donec scelerisque leo</div>\r\n<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>\r\n<p>Holisticly expedite innovative manufactured products after highly efficient ROI. Energistically enhance adaptive results rather than functionalized experiences. Uniquely enhance web-enabled channels for high-payoff convergence. Synergistically myocardinate tactical materials rather than virtual resources. Competently facilitate exceptional sources with high-quality e-business.</p>\r\n<p>Globally scale cross-unit customer service after enterprise methods of empowerment. Progressively procrastinate magnetic strategic theme areas for inexpensive architectures. Dynamically revolutionize multifunctional markets vis-a-vis resource-leveling outsourcing. Compellingly re-engineer client-centered outsourcing vis-a-vis excellent data. Objectively maintain impactful e-commerce without principle-centered deliverables.</p>\r\n<p>Dynamically revolutionize 2.0 platforms rather than backend data. Competently deploy strategic opportunities without customized communities. Competently innovate alternative data whereas effective data. Collaboratively aggregate wireless vortals through front-end imperatives.</p>', '', 1, 1, '2015-05-21 18:48:11', 'seputar-komputer', 'asset/upload/berita/Lighthousejpg21052015184811.jpg'),
	(5, 'Tssss', '<p>asasasas</p>', '<p>sasasasas</p>', '', 3, 2, '2015-05-21 18:48:27', 'tssss', 'asset/upload/berita/Tulipsjpg21052015184827.jpg'),
	(6, 'Seputar Komputer', '<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>', '<div class="dept-subtitle-tabs">Donec scelerisque leo</div>\r\n<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>\r\n<p>Holisticly expedite innovative manufactured products after highly efficient ROI. Energistically enhance adaptive results rather than functionalized experiences. Uniquely enhance web-enabled channels for high-payoff convergence. Synergistically myocardinate tactical materials rather than virtual resources. Competently facilitate exceptional sources with high-quality e-business.</p>\r\n<p>Globally scale cross-unit customer service after enterprise methods of empowerment. Progressively procrastinate magnetic strategic theme areas for inexpensive architectures. Dynamically revolutionize multifunctional markets vis-a-vis resource-leveling outsourcing. Compellingly re-engineer client-centered outsourcing vis-a-vis excellent data. Objectively maintain impactful e-commerce without principle-centered deliverables.</p>\r\n<p>Dynamically revolutionize 2.0 platforms rather than backend data. Competently deploy strategic opportunities without customized communities. Competently innovate alternative data whereas effective data. Collaboratively aggregate wireless vortals through front-end imperatives.</p>', '', 5, 1, '2015-05-21 18:48:11', 'seputar-komputer', 'asset/upload/berita/Lighthousejpg21052015184811.jpg'),
	(7, 'Seputar International Skills Partnership antara British Council, Politeknik Elektronika Negeri Surabaya, dan West Lothian College UKKomputer', '<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>', '<div class="dept-subtitle-tabs">Donec scelerisque leo</div>\r\n<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>\r\n<p>Holisticly expedite innovative manufactured products after highly efficient ROI. Energistically enhance adaptive results rather than functionalized experiences. Uniquely enhance web-enabled channels for high-payoff convergence. Synergistically myocardinate tactical materials rather than virtual resources. Competently facilitate exceptional sources with high-quality e-business.</p>\r\n<p>Globally scale cross-unit customer service after enterprise methods of empowerment. Progressively procrastinate magnetic strategic theme areas for inexpensive architectures. Dynamically revolutionize multifunctional markets vis-a-vis resource-leveling outsourcing. Compellingly re-engineer client-centered outsourcing vis-a-vis excellent data. Objectively maintain impactful e-commerce without principle-centered deliverables.</p>\r\n<p>Dynamically revolutionize 2.0 platforms rather than backend data. Competently deploy strategic opportunities without customized communities. Competently innovate alternative data whereas effective data. Collaboratively aggregate wireless vortals through front-end imperatives.</p>', '', 5, 1, '2015-05-21 18:48:11', 'seputar-komputer', 'asset/upload/berita/Lighthousejpg21052015184811.jpg'),
	(8, 'Seputar Komputer', '<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>', '<div class="dept-subtitle-tabs">Donec scelerisque leo</div>\r\n<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>\r\n<p>Holisticly expedite innovative manufactured products after highly efficient ROI. Energistically enhance adaptive results rather than functionalized experiences. Uniquely enhance web-enabled channels for high-payoff convergence. Synergistically myocardinate tactical materials rather than virtual resources. Competently facilitate exceptional sources with high-quality e-business.</p>\r\n<p>Globally scale cross-unit customer service after enterprise methods of empowerment. Progressively procrastinate magnetic strategic theme areas for inexpensive architectures. Dynamically revolutionize multifunctional markets vis-a-vis resource-leveling outsourcing. Compellingly re-engineer client-centered outsourcing vis-a-vis excellent data. Objectively maintain impactful e-commerce without principle-centered deliverables.</p>\r\n<p>Dynamically revolutionize 2.0 platforms rather than backend data. Competently deploy strategic opportunities without customized communities. Competently innovate alternative data whereas effective data. Collaboratively aggregate wireless vortals through front-end imperatives.</p>', '', 3, 1, '2015-05-21 18:48:11', 'seputar-komputer', 'asset/upload/berita/Lighthousejpg21052015184811.jpg'),
	(9, 'Seputar Komputer', '<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>', '<div class="dept-subtitle-tabs">Donec scelerisque leo</div>\r\n<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>\r\n<p>Holisticly expedite innovative manufactured products after highly efficient ROI. Energistically enhance adaptive results rather than functionalized experiences. Uniquely enhance web-enabled channels for high-payoff convergence. Synergistically myocardinate tactical materials rather than virtual resources. Competently facilitate exceptional sources with high-quality e-business.</p>\r\n<p>Globally scale cross-unit customer service after enterprise methods of empowerment. Progressively procrastinate magnetic strategic theme areas for inexpensive architectures. Dynamically revolutionize multifunctional markets vis-a-vis resource-leveling outsourcing. Compellingly re-engineer client-centered outsourcing vis-a-vis excellent data. Objectively maintain impactful e-commerce without principle-centered deliverables.</p>\r\n<p>Dynamically revolutionize 2.0 platforms rather than backend data. Competently deploy strategic opportunities without customized communities. Competently innovate alternative data whereas effective data. Collaboratively aggregate wireless vortals through front-end imperatives.</p>', '', 5, 1, '2015-05-21 18:48:11', 'seputar-komputer', 'asset/upload/berita/Lighthousejpg21052015184811.jpg'),
	(10, 'Seputar Komputer', '<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>', '<div class="dept-subtitle-tabs">Donec scelerisque leo</div>\r\n<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>\r\n<p>Holisticly expedite innovative manufactured products after highly efficient ROI. Energistically enhance adaptive results rather than functionalized experiences. Uniquely enhance web-enabled channels for high-payoff convergence. Synergistically myocardinate tactical materials rather than virtual resources. Competently facilitate exceptional sources with high-quality e-business.</p>\r\n<p>Globally scale cross-unit customer service after enterprise methods of empowerment. Progressively procrastinate magnetic strategic theme areas for inexpensive architectures. Dynamically revolutionize multifunctional markets vis-a-vis resource-leveling outsourcing. Compellingly re-engineer client-centered outsourcing vis-a-vis excellent data. Objectively maintain impactful e-commerce without principle-centered deliverables.</p>\r\n<p>Dynamically revolutionize 2.0 platforms rather than backend data. Competently deploy strategic opportunities without customized communities. Competently innovate alternative data whereas effective data. Collaboratively aggregate wireless vortals through front-end imperatives.</p>', '', 3, 1, '2015-05-21 18:48:11', 'seputar-komputer', 'asset/upload/berita/Lighthousejpg21052015184811.jpg'),
	(11, '\r\n4 D4 TEKKOM Kembali raih Prestasi di Ajang ITCE Cup 2015', '<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>', '<div class="dept-subtitle-tabs">Donec scelerisque leo</div>\r\n<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>\r\n<p>Holisticly expedite innovative manufactured products after highly efficient ROI. Energistically enhance adaptive results rather than functionalized experiences. Uniquely enhance web-enabled channels for high-payoff convergence. Synergistically myocardinate tactical materials rather than virtual resources. Competently facilitate exceptional sources with high-quality e-business.</p>\r\n<p>Globally scale cross-unit customer service after enterprise methods of empowerment. Progressively procrastinate magnetic strategic theme areas for inexpensive architectures. Dynamically revolutionize multifunctional markets vis-a-vis resource-leveling outsourcing. Compellingly re-engineer client-centered outsourcing vis-a-vis excellent data. Objectively maintain impactful e-commerce without principle-centered deliverables.</p>\r\n<p>Dynamically revolutionize 2.0 platforms rather than backend data. Competently deploy strategic opportunities without customized communities. Competently innovate alternative data whereas effective data. Collaboratively aggregate wireless vortals through front-end imperatives.</p>', '', 5, 1, '2015-05-21 18:48:11', 'seputar-komputer', 'asset/upload/berita/Lighthousejpg21052015184811.jpg'),
	(12, 'Seputar Komputer', '<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>', '<div class="dept-subtitle-tabs">Donec scelerisque leo</div>\r\n<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>\r\n<p>Holisticly expedite innovative manufactured products after highly efficient ROI. Energistically enhance adaptive results rather than functionalized experiences. Uniquely enhance web-enabled channels for high-payoff convergence. Synergistically myocardinate tactical materials rather than virtual resources. Competently facilitate exceptional sources with high-quality e-business.</p>\r\n<p>Globally scale cross-unit customer service after enterprise methods of empowerment. Progressively procrastinate magnetic strategic theme areas for inexpensive architectures. Dynamically revolutionize multifunctional markets vis-a-vis resource-leveling outsourcing. Compellingly re-engineer client-centered outsourcing vis-a-vis excellent data. Objectively maintain impactful e-commerce without principle-centered deliverables.</p>\r\n<p>Dynamically revolutionize 2.0 platforms rather than backend data. Competently deploy strategic opportunities without customized communities. Competently innovate alternative data whereas effective data. Collaboratively aggregate wireless vortals through front-end imperatives.</p>', '', 1, 1, '2015-05-21 18:48:11', 'seputar-komputer', 'asset/upload/berita/Lighthousejpg21052015184811.jpg'),
	(13, 'Seputar Komputer', '<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>', '<div class="dept-subtitle-tabs">Donec scelerisque leo</div>\r\n<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>\r\n<p>Holisticly expedite innovative manufactured products after highly efficient ROI. Energistically enhance adaptive results rather than functionalized experiences. Uniquely enhance web-enabled channels for high-payoff convergence. Synergistically myocardinate tactical materials rather than virtual resources. Competently facilitate exceptional sources with high-quality e-business.</p>\r\n<p>Globally scale cross-unit customer service after enterprise methods of empowerment. Progressively procrastinate magnetic strategic theme areas for inexpensive architectures. Dynamically revolutionize multifunctional markets vis-a-vis resource-leveling outsourcing. Compellingly re-engineer client-centered outsourcing vis-a-vis excellent data. Objectively maintain impactful e-commerce without principle-centered deliverables.</p>\r\n<p>Dynamically revolutionize 2.0 platforms rather than backend data. Competently deploy strategic opportunities without customized communities. Competently innovate alternative data whereas effective data. Collaboratively aggregate wireless vortals through front-end imperatives.</p>', '', 5, 1, '2015-05-21 18:48:11', 'seputar-komputer', 'asset/upload/berita/Lighthousejpg21052015184811.jpg'),
	(14, 'Seputar Komputer', '<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>', '<div class="dept-subtitle-tabs">Donec scelerisque leo</div>\r\n<p>Appropriately disintermediate cost effective users and technically sound methods of empowerment. Conveniently revolutionize client-based experiences whereas standards compliant content. Collaboratively repurpose clicks-and-mortar communities after holistic infrastructures. Uniquely engage vertical paradigms without cross functional users. Phosfluorescently disseminate cutting-edge e-commerce through goal-oriented intellectual capital.</p>\r\n<p>Holisticly expedite innovative manufactured products after highly efficient ROI. Energistically enhance adaptive results rather than functionalized experiences. Uniquely enhance web-enabled channels for high-payoff convergence. Synergistically myocardinate tactical materials rather than virtual resources. Competently facilitate exceptional sources with high-quality e-business.</p>\r\n<p>Globally scale cross-unit customer service after enterprise methods of empowerment. Progressively procrastinate magnetic strategic theme areas for inexpensive architectures. Dynamically revolutionize multifunctional markets vis-a-vis resource-leveling outsourcing. Compellingly re-engineer client-centered outsourcing vis-a-vis excellent data. Objectively maintain impactful e-commerce without principle-centered deliverables.</p>\r\n<p>Dynamically revolutionize 2.0 platforms rather than backend data. Competently deploy strategic opportunities without customized communities. Competently innovate alternative data whereas effective data. Collaboratively aggregate wireless vortals through front-end imperatives.</p>', '', 1, 1, '2015-05-21 18:48:11', 'seputar-komputer', 'asset/upload/berita/Lighthousejpg21052015184811.jpg');
/*!40000 ALTER TABLE `p_berita` ENABLE KEYS */;


# Dumping structure for table kri.p_dosen
CREATE TABLE IF NOT EXISTS `p_dosen` (
  `id_dosen` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `posisi` varchar(30) NOT NULL,
  `bidang` text NOT NULL,
  `tahun` int(11) NOT NULL DEFAULT '0',
  `foto` varchar(500) NOT NULL,
  `program` varchar(10) NOT NULL DEFAULT 'd4',
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_dosen: ~12 rows (approximately)
DELETE FROM `p_dosen`;
/*!40000 ALTER TABLE `p_dosen` DISABLE KEYS */;
INSERT INTO `p_dosen` (`id_dosen`, `nama`, `posisi`, `bidang`, `tahun`, `foto`, `program`) VALUES
	('20130819155947', 'Sigit Wasista, M.Kom., Ir. ', 'dosen', 'Jaringan Komputer ,Pengolahan Citra Digital', 0, 'asset/upload/dosen/sigit wasista.jpg', 'd4'),
	('20130820094542', 'Dadet Pramadihanto, Ir., M.Eng., PhD.', 'dosen', 'Pengolahan Citra Digital, Sistem Kontrol', 0, 'asset/upload/dosen/20130820094542dadet p.jpg', 'd4'),
	('20130820094805', 'Tri Harsono, S.Si, M.Kom, Ph.D', 'dosen', 'Pemodelan dan Simulasi', 0, 'asset/upload/dosen/20130820094805tri harsono.jpg', 'd4'),
	('20130820094953', 'Setiawardhana, ST., MT.', 'dosen', 'Sistem Cerdas dan Teknologi Sensor', 0, 'asset/upload/dosen/20130820094953setiawardana.jpg', 'd4'),
	('20130820095116', 'Riyanto Sigit, ST., M.Kom', 'dosen', 'Pengolahan Citra Digital', 0, 'asset/upload/dosen/20130820095116riyanto sigit.jpg', 'd4'),
	('20130820095235', 'Bima Sena Bayu, SST, MT', 'dosen', 'Sinyal Sistem & Control , Robot & Otomasi', 0, 'asset/upload/dosen/20130820095235bima sena.jpg', 'd4'),
	('20130820095415', 'Dwi Kurnia Basuki, S.Si.,M.Kom', 'dosen', 'Rekayasa Perangkat Lunak, Pemrograman berorientasi obyek.', 0, 'asset/upload/dosen/20130820095415dwi kurnia.jpg', 'd4'),
	('20130820100133', 'Fernando Ardila, S.ST, MT', 'dosen', 'Sistem Embedded,  Robot & Otomasi', 0, 'asset/upload/dosen/20130820100133fernando ardila.jpg', 'd4'),
	('20130820100500', 'One Setiaji, ST.', 'dosen', 'Sistem Embedded,  Robot & Otomasi', 0, 'asset/upload/dosen/20130820100500one setiaji.jpg', 'd4'),
	('20130820100640', 'Adnan Rachmat Anom Besari, S.ST, M.Sc', 'dosen', 'Sistem Komputer Waktu Nyata, Sistem Pengaturan Komputer', 0, 'asset/upload/dosen/20130820100640anom besari.jpg', 'd4'),
	('20130820101047', 'Iwan Kurnianto, S.ST', 'dosen', 'Sistem Embedded', 0, 'asset/upload/dosen/20130820101047iwan kurnianto.jpg', 'd4'),
	('20130820101732', 'Bayu Sandi Marta, S.ST', 'dosen', 'Pengolahan Sinyal Digital, Sistem Pengaturan Komputer', 0, 'asset/upload/dosen/20130820101732bayu sandi.jpg', 'd4');
/*!40000 ALTER TABLE `p_dosen` ENABLE KEYS */;


# Dumping structure for table kri.p_download
CREATE TABLE IF NOT EXISTS `p_download` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` char(50) DEFAULT NULL,
  `keterangan` text,
  `file` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_download: ~0 rows (approximately)
DELETE FROM `p_download`;
/*!40000 ALTER TABLE `p_download` DISABLE KEYS */;
/*!40000 ALTER TABLE `p_download` ENABLE KEYS */;


# Dumping structure for table kri.p_faq
CREATE TABLE IF NOT EXISTS `p_faq` (
  `id_faq` int(10) NOT NULL DEFAULT '0',
  `faq` varchar(50) DEFAULT NULL,
  `answer` text,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_faq: ~0 rows (approximately)
DELETE FROM `p_faq`;
/*!40000 ALTER TABLE `p_faq` DISABLE KEYS */;
/*!40000 ALTER TABLE `p_faq` ENABLE KEYS */;


# Dumping structure for table kri.p_galeri
CREATE TABLE IF NOT EXISTS `p_galeri` (
  `id_galeri` int(10) NOT NULL DEFAULT '0',
  `galeri` char(50) DEFAULT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_galeri: ~0 rows (approximately)
DELETE FROM `p_galeri`;
/*!40000 ALTER TABLE `p_galeri` DISABLE KEYS */;
/*!40000 ALTER TABLE `p_galeri` ENABLE KEYS */;


# Dumping structure for table kri.p_kategori
CREATE TABLE IF NOT EXISTS `p_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_kategori: ~3 rows (approximately)
DELETE FROM `p_kategori`;
/*!40000 ALTER TABLE `p_kategori` DISABLE KEYS */;
INSERT INTO `p_kategori` (`id_kategori`, `kategori`) VALUES
	(1, 'Riset dan Teknologi'),
	(3, 'Lomba'),
	(5, 'Seputar Teknik Komputer');
/*!40000 ALTER TABLE `p_kategori` ENABLE KEYS */;


# Dumping structure for table kri.p_komen
CREATE TABLE IF NOT EXISTS `p_komen` (
  `id_komen` int(10) DEFAULT NULL,
  `komen` text,
  `id_berita` int(10) DEFAULT NULL,
  `date_add` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_komen: ~0 rows (approximately)
DELETE FROM `p_komen`;
/*!40000 ALTER TABLE `p_komen` DISABLE KEYS */;
/*!40000 ALTER TABLE `p_komen` ENABLE KEYS */;


# Dumping structure for table kri.p_page
CREATE TABLE IF NOT EXISTS `p_page` (
  `id_page` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL DEFAULT '0',
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `for_page` char(50) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `date_add` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_page: ~4 rows (approximately)
DELETE FROM `p_page`;
/*!40000 ALTER TABLE `p_page` DISABLE KEYS */;
INSERT INTO `p_page` (`id_page`, `id_user`, `judul`, `isi`, `for_page`, `image`, `date_add`) VALUES
	(1, 1, 'Tentang KRI 2016', '<p><strong><span class="kri-headline03">Sejarah Singkat Kontes Robot Indonesia</span></strong></p>\r\n<p><span class="kri-bodytext01">Kontes Robot Indonesia memiliki perjalanan yang sangat panjang, bahkan sejak sebelum kontes pertama dilaksanakan. Tulisan ini berisi uraian sejarah cikal bakal lahirnya Kontes Robot Indonesia, hingga perkembangan terkini yang dapat tercatat.</span></p>\r\n<p><strong><span class="kri-headline04">Cikal Bakal Kontes Robot Indonesia</span></strong></p>\r\n<p><span class="kri-bodytext01">Perjalanan menuju lahirnya Kontes Robot Indonesia tidak terlepas dari World Micromouse Competition yang sangat populer pada tahun 1980-an. Kompetisi internasional yang diselenggarakan di berbagai negara, seperti Jepang, Amerika Serikat dan Inggris ini menjadi populer sejak diperkenalkan pada IEEE Spectrum Magazine tahun 1977.</span></p>\r\n<p><span class="kri-bodytext01">Pada tahun 1990, Politeknik Elektronika Negeri Surabaya (PENS), yang kala itu bernama Politeknik Elektronika dan Telekomunikasi (PET) ITS, membuat Robot Micro Mouse pertama di Indonesia yang diberi nama RMM v.Z80A. Robot tersebut ditampilkan pada PIMNAS 1991 di Malang.</span></p>\r\n<p><span class="kri-bodytext01">Kerja keras dan semangat tinggi dalam berkarya mengembangkan Robot Micro Mouse ini terlihat oleh expert-expert Jepang yang saat itu sedang bertugas di PET-ITS. Pada tahun 1991, Prof Matsumoto dan Makino-sensei (team leader JICA saat itu) menyampaikan undangan dari NHK (Nippon Hooso Kyokai) untuk berlaga di NHK Robocon 1991 dengan tema yang sangat menantang, yang berbeda dengan Robot Micro Mouse. Tema NHK Robocon 1991 adalah Hot Tower. Dua tim robot saling berhadapan, bertugas mengambil kotak karton berukuran paket pos Jepang, kemudian ditumpuk dalam tumpukan menyerupai setengah piramida. Sistem pertandingannya membuat strategi bertanding lebih utama dari sekedar membuat robot canggih.</span></p>\r\n<p><span class="kri-bodytext01">Robot BIMA-X1 yang dibawa tim PET-ITS pada NHK Robocon 1991 berhasil memukau penonton. Robot yang pada awalnya tiarap, dapat menjadi tinggi sekali ketika menarik pantograf-nya. Sistem pantograf yang menjadi ciri khas Robot BIMA-X1, yang tidak dimiliki tim lain, membuat tim PET-ITS memperoleh The Best Idea Award.<br /> Tahun berikutnya, PES-ITS (PET-ITS berganti nama menjadi PES-ITS) kembali diundang untuk mengikuti NHK Robocon 1992 yang bertema Mystery Circle. Tim PES-ITS mengirimkan Robot CARAKA-XH, dan berhasil meraih posisi 2nd Runner Up.<br /> Capaian CARAKA-XH, satu-satunya robot dari luar Jepang yang bertanding pada NHK Robocon 1992, berdampak besar bagi masyarakat Jepang. Bila tim PES-ITS sampai memboyong piala bergilir ke Indonesia dapat menjadi mimpi buruk, mengingat NHK Robocon adalah kontes robot untuk kalangan Jepang saja.</span></p>\r\n<p><span class="kri-bodytext01">Peristiwa ini menyebabkan NHK merancang ulang seluruh kegiatan Robocon yang memiliki hak khusus siar-nya di seantero Jepang. NHK merancang acara baru yang sifatnya internasional.</span></p>\r\n<p><span class="kri-bodytext01">Pada tahun berikutnya (1993), meski NHK Robocon masih digelar, tetapi PES-ITS tidak lagi diundang. Saat itu NHK masih menggodok rancangan Robocon Internasional untuk tingkat Universitas. Hal ini mendorong PES-ITS menggelar sendiri Robocon di tanah air dengan tema persis seperti di Jepang. Inilah cikal bakal Indonesia Robot Contest (IRC) atau Kontes Robot Indonesia (KRI).</span></p>\r\n<p><strong><span class="kri-headline04">IRC 1993, Kontes Robot Indonesia Yang Pertama</span></strong></p>\r\n<p><span class="kri-bodytext01">Tahun 1993 PES-ITS berinisiatif mengadakan Indonesian Robot Contest (IRC 1993) dengan mengadopsi peraturan NHK Robocon 1993 seutuhnya. Kegiatan ini adalah KRI yang pertama. IRC 1993 yang bertempat di Lapangan Merah PENS diikuti oleh 7 tim peserta dari Politeknik UI, Politeknik ITB, Undip dan PES-ITS.</span></p>\r\n<p><span class="kri-bodytext01">Tema NHK Robocon 1993 yang juga menjadi tema IRC 1993 adalah Step Dancer. Tantangannya adalah bagaimana melewati tangga naik turun 3 step setinggi 80 cm sebelum berhadap-hadapan dengan lawan dan saling menyerang, mendorong bola volley dan memasukkannya ke daerah lawan. </span></p>\r\n<p><span class="kri-bodytext01">Sukses penyelenggaraan IRC 1993 atau KRI Pertama makin meyakinkan pihak NHK untuk mengundang PENS (PES-ITS telah berubah nama menjadi PENS-ITS) ikut bertanding pada University Level NHK Robocon 1995 yang diikuti perguruan-perguruan tinggi terkenal di Jepang ditambah beberapa peserta internasional. Tim PENS dengan robot TRADA yang bertanding pada NHK Robocon 1995 dengan tema Techno Rugger ini mendapat penghargaan Best Spirit.<br /> Tahun 1997 PENS kembali ikut serta pada International NHK Robocon 1997 di Osaka. PENS mengirim Robot Cendrawasih. Demikian juga tahun 1999 PENS diundang pada International NHK Robocon 1999 di Tokyo dengan tema Robo Soccer. PENS mengirimkan Robot Garuda.</span></p>\r\n<p><span class="kri-bodytext01">Selanjutnya NHK mengundang Indonesia untuk berpartisipasi pada International NHK Robocon 2000 di Fukushima, dengan tema Snow Fighter. Untuk menentukan wakil Indonesia yang akan bertanding pada Robocon 2000, PENS berinisiatif mengadakan IRC-2 atau KRI-2 pada tahun 1999, dengan bertempat di Graha Sepuluh Nopember ITS. KRI-2 diikuti tim peserta dari PPNS, PENS, STTS, Ubaya, UWM, Polban. Tim Robot Millenium dan Edelweiss yang menjadi juara 1 dan 2 menuju NHK Robocon 2000 di Fukushima. Robot Millenium mendapat penghargaan Fukushima Prefecture Award.</span></p>\r\n<p><span class="kri-bodytext01">Pada tahun 2000 dilaksanakan IRC-3 atau KRI-3 dengan tema Cubic Bingo. Sebagai penyelenggara adalah PENS, bertempat di Graha Sepuluh Nopember ITS. Tim B-Cak dari PENS sebagai pemenang melaju ke International NHK Robocon 2001 dan memperoleh juara pertama (Grand Prix). Kemenangan ini menjadi tonggak sejarah kebangkitan minat mahasiswa teknik Indonesia di bidang robotika.</span></p>\r\n<p><span class="kri-bodytext01">Tahun 2002 NHK Robocon berakhir dan berubah menjadi ABU Robocon Pertama. 1st ABU Robocon 2002 diselenggarakan di Tokyo Jepang dengan tema Reach For The Top of Mt. Fuji. Wakil Indonesia yang bertanding pada ABU Robocon 2002 diseleksi pada KRI-4. Tim Robot ELLITE dari PENS sebagai pemenang KRI-4 berangkat untuk bertanding di ABU Robocon 2002 dan memperoleh Special Commendation Award.</span></p>\r\n<p><strong><span class="kri-headline04">Menjadi Kontes Robot Nasional Resmi</span></strong></p>\r\n<p><span class="kri-bodytext01">Pada tahun 2003, Direktorat Jenderal Pendidikan Tinggi Departemen Pendidikan dan Kebudayaan, melalui Direktorat Penelitian dan Pengabdian kepada Masyarakat, mulai mendanai Kontes Robot Indonesia. Pelaksanaan KRI-5 tahun 2003 dipindahkan ke Universitas Indonesia Jakarta, untuk dapat menjaring lebih banyak peserta. Hasilnya jumlah peserta bertambah terus, baik jumlah perguruan tinggi maupun tim peserta yang ikut berpartisipasi. Dari 16 perguruan tinggi yang mendaftar pada tahun 2002, bertambah menjadi 34 perguruan tinggi pada tahun 2003. Jumlah ini terus meningkat secara signikan pada tahun-tahun berikutnya.</span></p>\r\n<p><strong><span class="kri-headline04">KRCI, Kontes Robot Cerdas Indonesia</span></strong></p>\r\n<p><span class="kri-bodytext01">Tonggak sejarah berikutnya adalah pada tahun 2004 ketika pertama kalinya diselenggarakan divisi selain KRI yang mengacu ke Robocon, yaitu Kontes Robot Cerdas Indonesia (KRCI). Tema yang diusung adalah Robot Cerdas Pemadam Api. Kontes ini mempertandingkan dua kategori, yaitu Robot Pemadam Api Beroda dan Robot Pemadam Api Berkaki. Pada KRCI ini robot secara cerdas dan mandiri mencari dan memadamkan api lilin yang berada dalam salah satu ruangan dari empat ruangan di arena yang mensimulasikan ruangan gedung. Ukuran arena 248 cm x 248 cm. Robot yang tercepat menyelesaikan misinya, yaitu memadamkan api, dinyatakan sebagai pemenang. Perbedaan antara Kategori Beroda dan Berkaki terletak pada sistem geraknya. Kategori Beroda menggunakan roda, sementara Kategori Berkaki menggunakan kaki. Aturan KRCI mengadopsi aturan Kontes Robot Internasional dari Trinity College International Robot Contest TCIRC. </span></p>\r\n<p><span class="kri-bodytext01">Pada tahun berikutnya, 2005 dan 2006 diselenggarakan KRCI kedua dan ketiga dimana terdapat satu kategori baru yaitu Expert Single. Pada kategori ini tugas robot lebih sulit lagi dibandingkan dengan KRCI Beroda dan Berkaki, yaitu selain memadamkan api, robot juga harus dapat mendeteksi keberadaan bayi. Ukuran lapangan kategori Expert ini lebih besar dan memiliki 2 tingkat. </span></p>\r\n<p><span class="kri-bodytext01">Tahun 2007 dan 2008 diselenggarakan KRCI keempat dan kelima dimana terdapat tambahan satu kategori baru lagi, yaitu Expert Swarm. Pada kategori ini misi robot seperti pada Expert Single harus diselesaikan oleh dua robot dengan cara bekerja sama.</span></p>\r\n<p><span class="kri-bodytext01">Tahun 2009 diselenggarakan KRCI keenam dimana terdapat tambahan satu kategori baru lagi, yaitu Pemadam Api dan Penyelematan Bayi. Pada kategori ini dua robot bekerja sama dalam memadamkan api dan menyelamatkan bayi.</span></p>\r\n<p><span class="kri-bodytext01">Selanjutnya pada tahun 2010 diselenggarakan KRCI ketujuh dimana terdapat perubahan tema pada kategori Battle menjadi Battle Pemain Bola. Pada kategori ini terdapat dua robot yang bekerja sama dalam memasukkan bola ke dalam suatu wadah.</span></p>\r\n<p><span class="kri-bodytext01">Tahun 2011 dan 2012, yaitu pada KRCI kedelapan dan kesembilan, kategori Battle Pemain Bola bertransformasi dari robot beroda menjadi robot humanoid dengan nama Liga Sepak Bola Robot Humanoid (Robo Soccer Humanoid League).</span></p>\r\n<p><strong><span class="kri-headline04">Kontes Robot Tingkat Regional dan Tingkat Nasional</span></strong></p>\r\n<p><span class="kri-bodytext01">Karena jumlah peserta yang terus bertambah banyak dari tahun ke tahun, maka mulai tahun 2008 pelaksanaan KRI/KRCI ini dipecah menjadi dua tahap, yaitu Kontes Tingkat Regional dan Kontes Tingkat Nasional. Tim terbaik pada Kontes Tingkat Regional diundang untuk mengikuti Kontes Tingkat Nasional.</span></p>\r\n<p><span class="kri-bodytext01">Kontes Tingkat Regional 2008 diselenggarakan di 4 (empat) Regional, yaitu:??1. Kontes Tingkat Regional 1, meliputi area Sumatera dan sekitarnya.??2. Kontes Tingkat Regional 2, meliputi area DKI Jakarta, Jawa Barat dan sekitarnya.??3. Kontes Tingkat Regional 3, meliputi area Jawa Tengah dan Yogyakarta dan sekitarnya.??4. Kontes Tingkat Regional 4, meliputi area Jawa-Timur, Kalimantan dan Indonesia Timur.</span></p>\r\n<p><span class="kri-bodytext01">Dalam dua tahun, yaitu 2010, dengan bertambah banyaknya partisipasi dari perguruan tinggi di wilayah Indonesia Timur, jumlah tempat pelaksanaan Kontes Tingkat Regional ditambah menjadi 5 (lima) dengan&nbsp;pembagian wilayah untuk setiap regional:<br /> ?1. Kontes Tingkat Regional 1, meliputi area Sumatera dan sekitarnya.?<br /> 2. Kontes Tingkat Regional 2, meliputi area DKI Jakarta, Jawa Barat dan sekitarnya.?<br /> 3. Kontes Tingkat Regional 3, meliputi area Jawa Tengah dan Yogyakarta dan sekitarnya.?<br /> 4. Kontes Tingkat Regional 4, meliputi area Jawa Timur dan sekitarnya.<br /> ?5. Kontes Tingkat Regional 5, meliputi area Kalimantan dan Indonesia Timur.</span></p>\r\n<p><span class="kri-headline04">KRSI dan KRSBI, Divisi Baru Yang Semakin Menantang</span></p>\r\n<p><span class="kri-bodytext01">Pada tahun 2009, ditambah kategori baru yaitu Kontes Robot Seni Indonesia (KRSI) yang &nbsp;mempertandingkan Robot Penari tari traditional budaya Indonesia. Saat itu KRSI tidak dipertandingan di Kontes Regional, tetapi langsung&nbsp;dipertandingkan di Tingkat Nasional. Tema KRSI pertama tahun 2009 adalah Robot Penari Jaipong. </span></p>\r\n<p><span class="kri-bodytext01">Pada tahun berikutnya 2010, dilaksanakan KRSI kedua dengan tema Robot Penari Pendet. Tahun-tahun selanjutnya, tema KRSI adalah: KRSI 2011 Robot Penari Klono Topeng, KRSI 2012 Robot Penari Piring, KRSI 2013 Robot Penari Anoman Duta.</span></p>\r\n<p><span class="kri-bodytext01">Pada KRSI keenam tahun 2014, kontes yang mengusung tema Robot Penari Legong Keraton menampilkan dua robot humanoid yang berkolaborasi menari bersama. Kolaborasi dua robot humanoid ini diteruskan pada KRSI 2015 dengan tema Robot Penari Bambangan Cakil, dan KRSI 2016 dengan tema Robot Penari Topeng Betawi.</span></p>\r\n<p><span class="kri-bodytext01">Pada tahun 2013, dengan semakin banyaknya tim peserta yang berminat dengan KRCI kategori RSHL, maka kategori tersebut dipisahkan untuk berdiri sendiri dengan nama Kontes Robot Sepak Bola Indonesia (KRSBI), dengan tema &ldquo;Liga Sepakbola Robot Humanoid&rdquo;. Aturan KRSBI mengacu kepada RoboCup Soccer Humanoid League Rules robot Kidsize. Dan sejak tahun 2013 mulai diadakan simposium &ldquo;Indonesian Symposium on Robot Soccer Competition (ISRSC) 2013 yang pertama. Pada simposium ini&nbsp;seluruh peserta KRSBI diwajibkan menyampaikan makalah yang berkaitan dengan&nbsp;desain dan rancang bangun robot dibuat oleh setiap tim. Simposium ini diharapkan menjadi ajang fasilitasi untuk penyebarluasan informasi tentang rancang bangun robot,&nbsp;serta pengembangan&nbsp;algoritma dan pemrograman pada&nbsp;robot yang digunakan. Tahun 2016 diperkenalkan kategori baru dalam KRSBI, yaitu Ekshibisi Sepak Bola Beroda (ERSB).</span></p>\r\n<p><strong><span class="kri-headline04">Kontes Robot Indonesia, Sebagai Nama Resmi Seluruh Kegiatan Kontes</span></strong></p>\r\n<p><span class="kri-bodytext01">Sejak tahun 2013, seluruh ajang kompetisi robot ini digabungkan dan diberi nama&nbsp;Kontes Robot Indonesia (KRI) yang terdiri dari 4 (empat) Kategori :<br /> ?1. Kontes Robot ABU Indonesia (KRAI)?<br /> 2. Kontes Robot Pemadam Api Indonesia (KRPAI), Divisi Robot Beroda&nbsp;dan Divisi Robot Berkaki?<br /> 3. Kontes Robot Seni Tari Indonesia (KRSTI)?<br /> 4. Kontes Robot Sepak Bola Indonesia (KRSBI)</span><br /> ?<span class="kri-bodytext01">Tahun 2015, Indonesia mendapatkan kehormatan menjadi tuan rumah pelaksana Kontes robot Internasional Asian Broadcasting Union (ABU) ROBOCON 2015. Indonesia diwakili oleh Televisi Republik Indonesia sebagai anggota ABU. Kontes dilaksanakan di Universitas Muhammadiyah Yogyakarta di Yogyakarta tanggal 21-24 Agustus 2015, dengan Tema &ldquo;Robominton: Badminton Robo Games&rdquo;. Dengan pelaksanaan kontes robot Internasional ini, kembali Indonesia memantapkan posisi di mata dunia tentang kemampuan rekayasa di bidang robotika.</span></p>\r\n<p><span class="kri-bodytext01">Tahun 2016, setelah adanya perubahan Direktorat Jenderal Pendidikan Tinggi pada&nbsp;Kementerian Pendidikan Nasional menjadi Kementerian Riset, Teknologi dan Pendidikan Tinggi, ajang Kontes Robot Indonesia ini terus diadakan. Direktorat Kemahasiswaan, Direktorat Jenderal Pembelajaran dan Kemahasiswaan, Kementerian Riset, Teknologi dan Pendidikan Tinggi mengkoordinasikan Kontes Robot Indonesia (KRI) sebagai ajang kompetisi rancang bangun dan rekayasa dalam bidang robotika, yang dalam pelaksanaan nya Kontes Robot Indonesia (KRI) terdiri dari 4 (empat) divisi, yaitu<br /> ?1. Kontes Robot ABU Indonesia (KRAI),<br /> 2. Kontes Robot Pemadam Api Indonesia (KRPAI) kategori Beroda dan Berkaki<br /> 3. Kontes Robot Seni Tari Indonesia (KRSTI)<br /> 4. Kontes Robot Sepak Bola Indonesia (KRSBI), kategori Robot Humanoid dan Robot Beroda.</span></p>\r\n<p>&nbsp;</p>\r\n<p class="kri-headline03"><strong>Tujuan Kontes Robot Indonesia</strong></p>\r\n<p class="kri-bodytext01">1. Menumbuh-kembangkan dan meningkatkan kreatifitas mahasiswa di Perguruan Tinggi<br /> 2. Mengaplikasikan Ilmu Pengetahuan dan Teknologi ke dalam dunia desain dan aplikasi nyata.<br /> 3. Meningkatkan kepekaan mahasiswa dalam pengembangan bidang teknologi robotika<br /> 4. Membudayakan iklim kompetitif yang positif dilingkungan perguruan tinggi.<br /> 5. Meningkatkan kepekaan mahasiswa terhadap seni budaya bangsa.<br /> 6. Meningkatkan pengetahuan aplikasi sensor dan teknik kendali yang mutakhir.<br /> 7. Menentukan tim terbaik dari tiga wilayah untuk mengikuti kontes robot tingkat nasional.<br /> 8. Menentukan duta bangsa untuk mewakili Indonesia dalam kontes tingkat Internasional.</p>', 'kri', 'asset/upload/page/IMG-20160417-WA0017.jpg ', '2016-04-17 12:54:55'),
	(2, 1, 'Sekilas Tentang Politeknik Elektronika Negeri Surabaya', '<div id="header">\r\n<div class="blu">&nbsp;<img style="float: left; margin: 0px 10px 10px 0px; width: 314px; height: 157px;" src="http://www.eepis-its.edu/spcf/plugin/imagepost/fbe1738471e6be88502197926fc9ec78.jpg" alt="" />Awal sejarah PENS dimulai pada tahun 1985. Saat itu, tim studi awal Japan International Cooperation Agency (JICA) untuk bantuan dan kerjasama teknik yang dikepalai oleh Prof. Y. Naito dari Tokyo Institute of Technology, datang ke politeknik ini. Setelah melakukan pengamatan dan studi kelayakan di tahun 1986, JICA menyetujui untuk memulai kerjasama teknik di tahun 1987 dengan mengirim 5 orang pengajar Indonesia ke perguruan tinggi teknologi di Jepang.</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><strong>Politeknik Elektronika &amp; Telekomunikasi (PET) 1988 - 1992</strong></p>\r\n<p style="text-align: justify;">Pada tanggal 15 Maret 1988, Pemerintah Jepang, melalui JICA secara resmi memberikan gedung kampus kepada pemerintah Indonesia lengkap dengan berbagai peralatan pendidikan. Selanjutnya pada tanggal 2 Juni 1988 Politeknik ini diresmikan dengan nama "Politeknik Elektronika &amp; Telekomunikasi (PET)" dan sejak saat itulah tahun ajaran dimulai. Kerjasama dengan JICA pun berlanjut dengan banyaknya pengajar politeknik yang dikirim ke berbagai perguruan tinggi teknologi di Jepang dan sebaliknya, pengiriman beberapa ahli dari Jepang ke politeknik ini.</p>\r\n<p><strong>Politeknik Elektronik Surabaya (PES) 1992 - 1996</strong></p>\r\n<p style="text-align: justify;">Pada bulan Juni 1991, Menteri Pendidikan dan Kebudayaan menata ulang keberadaan seluruh Politeknik, Institut dan sebagian Universitas di Indonesia. Pada saat itu politeknik ini pun berubah nama menjadi "Politeknik Elektronika Surabaya (PES)" yang merupakan bagian dari Institut Teknologi Sepuluh Nopember Surabaya (ITS).</p>\r\n<p><strong>Politeknik Elektronika Negeri Surabaya (PENS) 1996 hingga sekarang</strong></p>\r\n<p style="text-align: justify;">Pada tahun 1996, nama politeknik ini kembali diubah oleh Menteri Pendidikan dan Kebudayaan menjadi "Politeknik Elektronika Negeri Surabaya (PENS)". Nama itulah yang kemudian tetap bertahan hingga kini.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Visi</strong></p>\r\n<p>Menjadi pusat unggulan pendidikan teknologi rekayasa di bidang <em>emerging technology</em> dalam skala nasional maupun internasional</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Misi</strong></p>\r\n<ul>\r\n<li><span style="line-height: 1.45em; background-color: initial;">Menyelenggarakan pendidikan dengan menyediakan lingkungan dan suasana akademik yang berkualitas untuk menghasilkan lulusan yang profesional, berpikiran terbuka, kreatif dan berjiwa pemimpin, yang siap bersaing di era global;</span></li>\r\n<li><span style="line-height: 1.45em; background-color: initial;">Sebagai sumber daya politeknik nasional, berperan aktif dalam pengembangan dan peningkatan sistem pendidikan politeknik di Indonesia;</span></li>\r\n<li><span style="line-height: 1.45em; background-color: initial;">Melaksanakan penelitian yang berorientasi penemuan, pengembangan, kombinasi, atau integrasi dari beberapa teknologi yang sudah ada sebelumnya, menjadi teknologi baru yang membawa kemaslahatan masyarakat;</span></li>\r\n<li><span style="line-height: 1.45em; background-color: initial;">Membangun dan mengimplementasikan nilai-nilai etika moral akademis dan sosial masyarakat</span></li>\r\n</ul>', 'pens', 'asset/upload/page/Logo_PENS.png', '2016-04-17 12:54:56'),
	(5, 1, 'Kontes Robot Inodenesia 2016', '<p><span class="kri-bodytext01">Tema dan aturan KRAI 2016 mengacu pada ABU Asia-Pacific Robot Contest 2016 Bangkok. Tema KRAI 2016 adalah "<strong>Efisiensi Energi Terbarukan</strong>", selaras dengan tema ABU Robocon 2016, yaitu "<strong><em>Clean Energy Recharging The World</em></strong>". Pada kontes ini terdapat dua robot, yaitu eco-robot dan hybrid-robot, yang bekerja sama untuk memasang propeller ke mesin turbin angin.</span></p>', 'krai', 'asset/upload/page/2016-krai-icon.jpg', '2016-04-17 13:18:48'),
	(6, 1, 'Kontes Robot Inodenesia 2016', '<p>KRSBI adalah <strong>Liga Sepak Bola Robot Humanoid</strong> (RoboSoccer Humanaoid League) yang mengacu pada cita-cita organisasi RoboCup International, yaitu tahun 2050 mampu mencetak tim sepak bola robot yang mampu melawan tim juara dunia sepak bola. KRSBI 2016 mempertandingkan kelas KidSize dengan Rule of the Game diadopsi dari RoboCup.org.</p>', 'krsbi', 'asset/upload/page/2016-krsbi-icon.jpg', '2016-04-17 13:19:14'),
	(7, 1, 'Kontes Robot Inodenesia 2016', '<p><span class="kri-bodytext01">Tema dan aturan KRPAI 2016 mengacu pada Trinity College International Robot Contest - TCIRC. Tema KRPAI 2016 adalah "<strong>Robot Cerdas SAR Pemadam Api</strong>". KRPAI 2016 terdapat dua tipe robot: beroda dan berkaki.&nbsp;Pada kontes ini&nbsp;robot secara mandiri bergerak di lapangan yang mensimulasikan rumah untuk&nbsp;menemukan&nbsp;dan memadamkan api lilin.</span></p>', 'krpai', 'asset/upload/page/2016-krpai-icon2.jpg', '2016-04-17 13:19:26'),
	(8, 1, 'Kontes Robot Inodenesia 2016', '<p>KRSTI menampilkan robot-robot humanoid yang dapat menari berdasarkan gerakan seni tari dan budaya bangsa di Indonesia. Robot menari dengan diiringi bunyi-bunyian pengiring tari. Robot menggerakkan tubuhnya sesuai dengan irama, dengan memperlihatkan gerakan-gerakan wajib sesuai dengan tema KRSTI 2016, yaitu "<strong>Robot Penari Topeng Betawi</strong>"</p>', 'krsti', 'asset/upload/page/2016-krsti-icon.jpg', '2016-04-17 13:19:49'),
	(9, 1, 'Kontes Robot Inodenesia 2016', '<p>ERSB merupakan divisi terbaru pada KRI yang mulai diperkenalkan pada ekshibisi di KRI 2016 Tingkat Nasional. Aturan kompetisi mengacu pada KRSBI (lapangan, permainan, game controller). Robot harus memiliki kamera untuk mendeteksi bola, dengan jumlah dan tipe yang tidak dibatasi.<span class="Apple-converted-space">&nbsp;</span>Robot dapat menggunakan komputer luar sebagai pengendali.</p>', 'ersb', 'asset/upload/page/2010-robocup.jpg', '2016-04-17 13:23:37');
/*!40000 ALTER TABLE `p_page` ENABLE KEYS */;


# Dumping structure for table kri.p_pict
CREATE TABLE IF NOT EXISTS `p_pict` (
  `id` int(10) NOT NULL DEFAULT '0',
  `id_galeri` int(10) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_p_pict_p_galeri` (`id_galeri`),
  CONSTRAINT `FK_p_pict_p_galeri` FOREIGN KEY (`id_galeri`) REFERENCES `p_galeri` (`id_galeri`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_pict: ~0 rows (approximately)
DELETE FROM `p_pict`;
/*!40000 ALTER TABLE `p_pict` DISABLE KEYS */;
/*!40000 ALTER TABLE `p_pict` ENABLE KEYS */;


# Dumping structure for table kri.p_tag
CREATE TABLE IF NOT EXISTS `p_tag` (
  `id_tag` int(10) NOT NULL AUTO_INCREMENT,
  `tag` char(50) DEFAULT NULL,
  `slug_tag` char(50) DEFAULT NULL,
  PRIMARY KEY (`id_tag`),
  UNIQUE KEY `tag` (`tag`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_tag: ~3 rows (approximately)
DELETE FROM `p_tag`;
/*!40000 ALTER TABLE `p_tag` DISABLE KEYS */;
INSERT INTO `p_tag` (`id_tag`, `tag`, `slug_tag`) VALUES
	(1, 'KRSBI', 'krsbi'),
	(2, 'KRAI', 'krai'),
	(3, 'KRI', 'KRI');
/*!40000 ALTER TABLE `p_tag` ENABLE KEYS */;


# Dumping structure for table kri.p_tagberita
CREATE TABLE IF NOT EXISTS `p_tagberita` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_berita` int(10) DEFAULT NULL,
  `id_tag` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_p_tagberita_p_berita` (`id_berita`),
  KEY `FK_p_tagberita_p_tag` (`id_tag`),
  CONSTRAINT `FK_p_tagberita_p_berita` FOREIGN KEY (`id_berita`) REFERENCES `p_berita` (`id_berita`) ON UPDATE CASCADE,
  CONSTRAINT `FK_p_tagberita_p_tag` FOREIGN KEY (`id_tag`) REFERENCES `p_tag` (`id_tag`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_tagberita: ~5 rows (approximately)
DELETE FROM `p_tagberita`;
/*!40000 ALTER TABLE `p_tagberita` DISABLE KEYS */;
INSERT INTO `p_tagberita` (`id`, `id_berita`, `id_tag`) VALUES
	(1, 4, 2),
	(2, 12, 3),
	(3, 11, 1),
	(4, 4, 3),
	(5, 4, 1);
/*!40000 ALTER TABLE `p_tagberita` ENABLE KEYS */;


# Dumping structure for table kri.p_tim
CREATE TABLE IF NOT EXISTS `p_tim` (
  `id_tim` int(10) NOT NULL DEFAULT '0',
  `nama` char(50) DEFAULT NULL,
  `institusi` char(50) DEFAULT NULL,
  `surat_keterangan` varchar(50) DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `dosen` char(50) DEFAULT NULL,
  `nik` char(50) DEFAULT NULL,
  PRIMARY KEY (`id_tim`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_tim: ~0 rows (approximately)
DELETE FROM `p_tim`;
/*!40000 ALTER TABLE `p_tim` DISABLE KEYS */;
/*!40000 ALTER TABLE `p_tim` ENABLE KEYS */;


# Dumping structure for table kri.p_web
CREATE TABLE IF NOT EXISTS `p_web` (
  `id` int(10) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telp` varchar(200) DEFAULT NULL,
  `fax` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `sms` varchar(200) DEFAULT NULL,
  `stream` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

# Dumping data for table kri.p_web: ~1 rows (approximately)
DELETE FROM `p_web`;
/*!40000 ALTER TABLE `p_web` DISABLE KEYS */;
INSERT INTO `p_web` (`id`, `nama`, `alamat`, `telp`, `fax`, `email`, `sms`, `stream`) VALUES
	(1, 'KRI 2016', 'Jl. Raya ITS - Kampus PENS Sukolilo\r\nSurabaya 60111, INDONESIA\r\n', '62 31 594 7280', '62 31 594 6114', 'kri2016@pens.ac.id', '02012', 'https://www.youtube.com/watch?v=J7ArPgBRR94');
/*!40000 ALTER TABLE `p_web` ENABLE KEYS */;


# Dumping structure for table kri.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `id_group` int(50) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

# Dumping data for table kri.user: ~3 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `status`, `id_group`) VALUES
	(1, 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 'Super Admin2', 'alioke@eepis-its.edu', 1, 1),
	(2, 'user', 'e00cf25ad42683b3df678c61f42c6bda', 'User', '', 2, 2),
	(4, 'admin2', 'e00cf25ad42683b3df678c61f42c6bda', 'admin2', 'admin2@hmail.com', 1, 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
