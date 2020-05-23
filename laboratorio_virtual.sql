-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Maio-2020 às 20:38
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laboratorio_virtual`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cate_exer`
--

DROP TABLE IF EXISTS `tbl_cate_exer`;
CREATE TABLE IF NOT EXISTS `tbl_cate_exer` (
  `Cod_Cate` int(10) NOT NULL AUTO_INCREMENT,
  `Nom_Cate` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Sig_Cate` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Cod_Cate`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_cate_exer`
--

INSERT INTO `tbl_cate_exer` (`Cod_Cate`, `Nom_Cate`, `Sig_Cate`) VALUES
(1, 'Sistema Ósseo Bovino', 'S. O. Bovino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_div`
--

DROP TABLE IF EXISTS `tbl_div`;
CREATE TABLE IF NOT EXISTS `tbl_div` (
  `Cod_Div` int(11) NOT NULL AUTO_INCREMENT,
  `Img_Div` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Nom_Div` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Vis_Div` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Oss_Div` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Inf_Div` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `Oss_Ori_Div` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Nom_Cie_Div` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Cod_Div`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_div`
--

INSERT INTO `tbl_div` (`Cod_Div`, `Img_Div`, `Nom_Div`, `Vis_Div`, `Oss_Div`, `Inf_Div`, `Oss_Ori_Div`, `Nom_Cie_Div`) VALUES
(7, 'Escapula_lateral_bov_espinhadaescapula.jpg', 'Espinha da escápula', 'lateral', 'escapula', 'É uma projeção óssea que parte da extremidade proximal da escápula, desde a margem dorsal, se prolongando distalmente até o colo escapular. Percorre praticamente toda a extensão do osso em forma sinusóide, levemente curvada em direção caudal e com crescente amplitude, atingindo a altura máxima no terço médio do osso, no túber da espinha da escápula, mantendo a mesma amplitude até o final da espinha, chamado de acrômio.', 'Escapula_lateral_bov.jpg', 'Spina scapulae'),
(8, 'Escapula_lateral_bov_fossasupraespinal.jpg', 'Fossa supraespinhal', 'lateral', 'escapula', 'É a depressão delimitada por parte da margem dorsal, pela margem cranial e pela espinha da escápula. É breve e encerra aproxidamente junto ao inicio do terço da escápula.', 'Escapula_lateral_bov.jpg', 'Fossa supraspinata'),
(11, 'Escapula_lateral_bov_fossainfraespinal.jpg', 'Fossa infreaespinal', 'lateral', 'escapula', 'Mais ampla e acentuada que a fossa supraespinhal, a fossa infraespinhal é a  depressão delimitada pela maior parte da margem dorsal, pela margem caudal e pela espinha da escápula. É parcialmente coberta pela curvartura caudal da espinha da escápula em seu terço médio.', 'Escapula_lateral_bov.jpg', 'Fossa infraspinata'),
(13, 'Escapula_lateral_bov_acromio.jpg', 'acromio', 'lateral', 'escapula', 'Proeminência óssea que se projeta distalmente no término da espinha da escápula.', 'Escapula_lateral_bov.jpg', 'Acromion'),
(14, 'Escapula_lateral_bov_margemdorsal.jpg', 'margem Dorsal', 'lateral', 'escapula', 'Borda proximal da escápula, pouco arqueada, que forma, de maneira imaginária, a base do contorno triangular da escápula.', 'Escapula_lateral_bov.jpg', 'Margo dorsalis'),
(15, 'Escapula_lateral_bov_margemcranial.jpg', 'Margem Cranial', 'lateral', 'escapula', 'Tem a forma suave de um “S” e se prolonga desde a margem dorsal até o tubérculo supraglenoidal. É a mais delgada das 3 margens escapulares.', 'Escapula_lateral_bov.jpg', 'Margo cranialis'),
(16, 'Carpo_dorsal_bov_ossoescafoide.jpg', 'Osso Escafóide', 'dorsal', 'carpo', 'Osso da extremidade medial da fileira proximal do carpo.', 'Carpo_dorsal_bov.jpg', 'carporradial (Os scaphoideum (Os carpi radiale))'),
(17, 'Carpo_dorsal_bov_ossohamato.jpg', 'Osso Hamato', 'dorsal', 'carpo', 'Osso de localização lateral na fileira distal do carpo.', 'Carpo_dorsal_bov.jpg', 'cárpico IV (Os hamatum (Os carpale IV))'),
(18, 'Carpo_dorsal_bov_ossopiramidal.jpg', 'Osso Piramidal', 'dorsal', 'carpo', 'Osso localizado de forma lateral ao osso semilunar do carpo.', 'Carpo_dorsal_bov.jpg', 'Carpoulnar (Os triquetrum (Os carpi ulnare))'),
(19, 'Carpo_dorsal_bov_ossopisiforme.jpg', 'Osso Pisiforme', 'dorsal', 'carpo', 'Osso da extremidade lateral da fileira proximal do carpo.', 'Carpo_dorsal_bov.jpg', 'Os pisiforme (Os carpi accessorium)'),
(20, 'Carpo_dorsal_bov_ossosemilunar.jpg', 'Osso Semilunar', 'dorsal', 'carpo', 'Osso de posição intermédia da fileira proximal do carpo.', 'Carpo_dorsal_bov.jpg', 'Os lunatum (Os carpi intermedium)'),
(21, 'Carpo_dorsal_bov_ossotrapezoidecapitato.jpg', 'Osso Trapezóidecapitato (cárpico II & III)', 'dorsal', 'carpo', 'Osso de localização medial na fileira distal do carpo.', 'Carpo_dorsal_bov.jpg', 'Os trapezoideocapitatum (Os carpale II et III)'),
(22, 'Carpo_lateral_bov_ossohamato.jpg', 'Osso Hamato (cárpico IV)', 'lateral', 'carpo', 'Osso de localização lateral na fileira distal do carpo.', 'Carpo_lateral_bov.jpg', 'Os hamatum (Os carpale IV)'),
(23, 'Carpo_lateral_bov_ossopiramidal.jpg', 'Osso Piramidal (carpoulnar)', 'lateral', 'carpo', 'Osso localizado de forma lateral ao osso semilunar do carpo.', 'Carpo_lateral_bov.jpg', 'Os triquetrum (Os carpi ulnare)'),
(24, 'Carpo_lateral_bov_ossopisiforme.jpg', 'Osso Pisiforme (acessório)', 'lateral', 'carpo', 'Osso da extremidade lateral da fileira proximal do carpo.', 'Carpo_lateral_bov.jpg', 'Os pisiforme (Os carpi accessorium)'),
(25, 'Carpo_palmar_bov_ossoescafoide.jpg', 'Osso Escafoide (carporradial)', 'palmar', 'carpo', 'Osso da extremidade medial da fileira proximal do carpo.', 'Carpo_palmar_bov.jpg', 'Os scaphoideum (Os carpi radiale)'),
(26, 'Carpo_palmar_bov_ossohamato.jpg', 'Osso Hamato (cárpico IV)', 'palmar', 'carpo', 'Osso de localização lateral na fileira distal do carpo.', 'Carpo_palmar_bov.jpg', 'Os hamatum (Os carpale IV)'),
(27, 'Carpo_palmar_bov_ossopiramidal.jpg', 'Osso Piramidal (carpoulnar)', 'palmar', 'carpo', 'Osso localizado de forma lateral ao osso semilunar do carpo.', 'Carpo_palmar_bov.jpg', 'Os triquetrum (Os carpi ulnare)'),
(28, 'Carpo_palmar_bov_ossopisiforme.jpg', 'Osso Pisiforme (acessório)', 'palmar', 'carpo', 'Osso da extremidade lateral da fileira proximal do carpo.', 'Carpo_palmar_bov.jpg', 'Os pisiforme (Os carpi accessorium)'),
(29, 'Carpo_palmar_bov_ossosemilunar.jpg', 'Osso Semilunar (intermédio do carpo)', 'palmar', 'carpo', 'Osso de posição intermédia da fileira proximal do carpo.', 'Carpo_palmar_bov.jpg', 'Os lunatum (Os carpi intermedium)'),
(30, 'Carpo_palmar_bov_ossotrapezoidecapitato.jpg', 'Osso Trapezóidecapitato (cárpico II & III)', 'palmar', 'carpo', 'Osso de localização medial na fileira distal do carpo.', 'Carpo_palmar_bov.jpg', 'Os trapezoideocapitatum (Os carpale II et III)'),
(31, 'Coxal_dorsal_bov_corpodoisquio.jpg', 'Corpo do Osso Ísquio', 'dorsal', 'coxal', 'Região do osso achatada latero-lateralmente, imediatamente lateral ao forame obturado.', 'Coxal_dorsal_bov.jpg', 'Corpus ossis ischii'),
(32, 'Coxal_dorsal_bov_corpodopube.jpg', 'Corpo do Osso Pube', 'dorsal', 'coxal', 'Extensão óssea única do osso pube.', 'Coxal_dorsal_bov.jpg', 'Corpus ossis pubis'),
(33, 'Coxal_dorsal_bov_cristailiaca.jpg', 'Crista Ilíaca', 'dorsal', 'coxal', 'Borda transversa que comunica o túber coxal ao túber sacral.', 'Coxal_dorsal_bov.jpg', 'Crista iliaca'),
(34, 'Coxal_dorsal_bov_espinhaisquiadica.jpg', 'Espinha Isquiática', 'dorsal', 'coxal', 'Elevação óssea delgada entre a incisura isquiática menor e maior.', 'Coxal_dorsal_bov.jpg', 'Spina ischiadica'),
(35, 'Coxal_dorsal_bov_forameobturado.jpg', 'Forame Obturado', 'dorsal', 'coxal', 'Abertura grande e levemente elipsóide localizada entre os ossos ísquio e púbe.', 'Coxal_dorsal_bov.jpg', 'Foramen obturatum'),
(36, 'Coxal_dorsal_bov_incisuraisquiadicamaior.jpg', 'Incisura Isquiádica Maior', 'dorsal', 'coxal', 'Comunicação óssea do túber sacral com a espinha isquiática, em forma de uma prolongada incisura desde a asa do ílio até o seu corpo.', 'Coxal_dorsal_bov.jpg', 'Incisura ischiadica major'),
(37, 'Coxal_dorsal_bov_incisuraisquiadicamenor.jpg', 'Incisura isquiática menor', 'dorsal', 'coxal', 'Comunicação óssea do túber isquiádico com a espinha isquiática, em forma de uma reduzida incisura.', 'Coxal_dorsal_bov.jpg', 'Incisura ischiadica minor'),
(38, 'Coxal_dorsal_bov_labioexterno.jpg', 'Lábio Externo', 'dorsal', 'coxal', 'Borda caudal do túber coxal.', 'Coxal_dorsal_bov.jpg', 'Labium externum'),
(43, 'Coxal_dorsal_bov_labiointerno.jpg', 'Lábio Interno', 'dorsal', 'coxal', 'Borda cranial do túber coxal.', 'Coxal_dorsal_bov.jpg', 'Labium internum'),
(44, 'Coxal_dorsal_bov_ramocaudaldopube.jpg', 'Ramo Caudal do Pube', 'dorsal', 'coxal', 'Região longitudinal do corpo do osso pube, medial ao forame obturado.', 'Coxal_dorsal_bov.jpg', 'Ramus caudalis ossis pubis'),
(45, 'Coxal_dorsal_bov_ramocranialdopube.jpg', 'Ramo Cranial do Pube', 'dorsal', 'coxal', 'Região transversa do corpo do osso pube, cranial ao forame obturado.', 'Coxal_dorsal_bov.jpg', 'Ramus cranialis ossis pubis'),
(46, 'Coxal_dorsal_bov_ramodoisquio.jpg', 'Ramo do Ísquio', 'dorsal', 'coxal', 'Região do osso achatada dorso-ventralmente, imediatamente medial ao forame obturado.', 'Coxal_dorsal_bov.jpg', 'Ramus ossis ischii'),
(47, 'Coxal_dorsal_bov_sulcoobturatorio.jpg', 'Sulco Obturatório', 'dorsal', 'coxal', 'Pequena depressão craniolateral ao forame obturado, em seu aspecto dorsal.', 'Coxal_dorsal_bov.jpg', 'Sulcus obturatorius'),
(48, 'Coxal_dorsal_bov_tabuadoisquio.jpg', 'Tábua do Ísquio', 'dorsal', 'coxal', 'Região óssea caudal ao forame obturado.', 'Coxal_dorsal_bov.jpg', 'Tabula ossis ischii'),
(49, 'Coxal_dorsal_bov_tubercoxal.jpg', 'Túber Coxal', 'dorsal', 'coxal', 'Eminente dilatação óssea na extremidade lateral da asa do ílio.', 'Coxal_dorsal_bov.jpg', 'Tuber coxae'),
(50, 'Coxal_dorsal_bov_tuberisquiadico.jpg', 'Túber Isquiádico', 'dorsal', 'coxal', 'Projeção óssea dorsocaudal da tábua do isquio.', 'Coxal_dorsal_bov.jpg', 'Tuber ischiadicum'),
(51, 'Coxal_dorsal_bov_tubersacral.jpg', 'Túber Sacral', 'dorsal', 'coxal', 'Pequena dilatação óssea na extremidade medial da asa do ílio.', 'Coxal_dorsal_bov.jpg', 'Tuber sacrale'),
(52, 'Coxal_lateral_bov_acetabulo.jpg', 'Acetábulo', 'lateral', 'coxal', 'Cavidade aproximadamente na forma de uma hemi-esfera, formada pelo encontro dos ossos ílio, ísquio e púbe.', 'Coxal_lateral_bov.jpg', 'Acetabulum'),
(53, 'Coxal_lateral_bov_arealateraldomretofemoral.jpg', 'Área lateral do m. Reto femoral', 'lateral', 'coxal', 'Área rugosa imediatamente dorsal à margem acetabular da parte maior da face lunata.', 'Coxal_lateral_bov.jpg', 'Area lateralis m. recti femoris'),
(54, 'Coxal_lateral_bov_asadoilio.jpg', 'Asa do Ílio', 'lateral', 'coxal', 'Extremidade craniodorsal do ílio, extremamente ampla no sentido latero-lateral.', 'Coxal_lateral_bov.jpg', 'Ala ossis ilii'),
(55, 'Coxal_lateral_bov_corpodoilio.jpg', 'Corpo do Ílio', 'lateral', 'coxal', 'Região óssea achatada latero-lateralmente, compreendida entre a espinha isquiática e a asa do ílio.', 'Coxal_lateral_bov.jpg', 'Corpus ossis ilii'),
(56, 'Coxal_lateral_bov_corpodoossoisquio.jpg', 'Corpo do Ísquio', 'lateral', 'coxal', 'Região do osso achatada latero-lateralmente, imediatamente lateral ao forame obturado.', 'Coxal_lateral_bov.jpg', 'Corpus ossis ischii'),
(57, 'Coxal_lateral_bov_cristailiaca.jpg', 'Crista Ilíaca', 'lateral', 'coxal', 'Borda transversa que comunica o túber coxal ao túber sacral.', 'Coxal_lateral_bov.jpg', 'Crista iliaca'),
(58, 'Coxal_lateral_bov_faceglutea.jpg', 'Face Glútea', 'lateral', 'coxal', 'Superfície externa da asa do ílio.', 'Coxal_lateral_bov.jpg', 'Facies glutea'),
(59, 'Coxal_lateral_bov_facelunata.jpg', 'Face Lunata', 'lateral', 'coxal', 'Superfície articular côncava do acetábulo.', 'Coxal_lateral_bov.jpg', 'Facies lunata'),
(60, 'Coxal_lateral_bov_incisuraacetabular.jpg', 'Incisura Acetabular', 'lateral', 'coxal', 'Interrupção da face margem acetabular e da face lunata ao nível do formame obturado.', 'Coxal_lateral_bov.jpg', 'Incisura acetabuli'),
(61, 'Coxal_lateral_bov_incisuraisquiadicamaior.jpg', 'Incisura Isquiádica Maior', 'lateral', 'coxal', 'Comunicação óssea do túber sacral com a espinha isquiática, em forma de uma prolongada incisura desde a asa do ílio até o seu corpo.', 'Coxal_lateral_bov.jpg', 'Incisura ischiadica major'),
(62, 'Coxal_lateral_bov_incisuraisquiadicamenor.jpg', 'Incisura Isquiádica Menor', 'lateral', 'coxal', 'Comunicação óssea do túber isquiádico com a espinha isquiática, em forma de uma reduzida incisura.', 'Coxal_lateral_bov.jpg', 'Incisura ischiadica minor'),
(63, 'Coxal_lateral_bov_labioexterno.jpg', 'Lábio Externo', 'lateral', 'coxal', 'Borda caudal do túber coxal.', 'Coxal_lateral_bov.jpg', 'Labium externum'),
(64, 'Coxal_lateral_bov_labiointerno.jpg', 'Lábio Interno', 'lateral', 'coxal', 'Borda cranial do túber coxal.', 'Coxal_lateral_bov.jpg', 'Labium internum'),
(65, 'Coxal_lateral_bov_linhagluteacaudal.jpg', 'Linha Glútea Caudal', 'lateral', 'coxal', 'Breve linha óssea de sentido cranioventral no corpo do ílio.', 'Coxal_lateral_bov.jpg', 'Linea glutea caudalis'),
(66, 'Coxal_lateral_bov_linhagluteaventral.jpg', 'Linha Glútea Ventral', 'lateral', 'coxal', 'Discreta linha óssea que cruza a face glútea.', 'Coxal_lateral_bov.jpg', 'Linea glutea ventralis'),
(67, 'Coxal_lateral_bov_margemacetabular.jpg', 'Margem Acetabular', 'lateral', 'coxal', 'Contorno ósseo circular que delimita o acetábulo do restante do osso coxal.', 'Coxal_lateral_bov.jpg', 'Margo acetabuli'),
(68, 'Coxal_lateral_bov_tabuadoossoisquio.jpg', 'Tábua do Osso Ísquio', 'lateral', 'coxal', 'Região óssea caudal ao forame obturado.', 'Coxal_lateral_bov.jpg', 'Tabula ossis ischii'),
(69, 'Coxal_lateral_bov_tubercoxal.jpg', 'Túber Coxal', 'lateral', 'coxal', 'Eminente dilatação óssea na extremidade lateral da asa do ílio.', 'Coxal_lateral_bov.jpg', 'Tuber coxae'),
(70, 'Coxal_lateral_bov_tuberisquiadico.jpg', 'Túber Isquiádico', 'lateral', 'coxal', 'Projeção óssea dorsocaudal da tábua do isquio.', 'Coxal_lateral_bov.jpg', 'Tuber ischiadicum'),
(71, 'Coxal_lateral_bov_tubersacral.jpg', 'Túber Sacral', 'lateral', 'coxal', 'Pequena dilatação óssea na extremidade medial da asa do ílio.', 'Coxal_lateral_bov.jpg', 'Tuber sacrale'),
(72, 'Coxal_medial_bov_corpodoilio.jpg', 'Corpo do Ílio', 'medial', 'coxal', 'Região óssea achatada latero-lateralmente, compreendida entre a espinha isquiática e a asa do ílio.', 'Coxal_medial_bov.jpg', 'Corpus ossis ilii'),
(73, 'Coxal_medial_bov_espinhaesquiadica.jpg', 'Espinha Isquiática', 'medial', 'coxal', 'Elevação óssea delgada entre a incisura isquiática menor e maior.', 'Coxal_medial_bov.jpg', 'Spina ischiadica'),
(74, 'Coxal_medial_bov_faceauricular.jpg', 'Face Auricular', 'medial', 'coxal', 'Pequena superfície rugosa deslocada medialmente na face sacropélvica.', 'Coxal_medial_bov.jpg', 'Facies auricularis'),
(75, 'Coxal_medial_bov_faceiliaca.jpg', 'Face Ilíaca', 'medial', 'coxal', 'Parte lateral da face sacropélvica.', 'Coxal_medial_bov.jpg', 'Facies iliaca'),
(76, 'Coxal_medial_bov_facesacropelvica.jpg', 'Face Sacropélvica', 'medial', 'coxal', 'Superfície interna da asa do ílio.', 'Coxal_medial_bov.jpg', 'Facies sacropelvina'),
(77, 'Coxal_medial_bov_facesinfisialdoisquio.jpg', 'Face Sinfisial do Ísquio', 'medial', 'coxal', 'Face voltada para a articulação com o osso ísquio do antímero correspondente.', 'Coxal_medial_bov.jpg', 'Facies symphysialis'),
(78, 'Coxal_medial_bov_facesinfisialdopube.jpg', 'Face Sinfisial do Pube', 'medial', 'coxal', 'Face voltada para a articulação com o osso pube do antímero correspondente.', 'Coxal_medial_bov.jpg', 'Facies symphysialis'),
(79, 'Coxal_medial_bov_forameobturado.jpg', 'Forame Obturado', 'medial', 'coxal', 'Abertura grande e levemente elipsóide localizada entre os ossos ísquio e púbe.', 'Coxal_medial_bov.jpg', 'Foramen obturatum'),
(80, 'Coxal_medial_bov_incisuraisquiaticamenor.jpg', 'Incisura Isquiática menor', 'medial', 'coxal', 'Comunicação óssea do túber isquiádico com a espinha isquiática, em forma de uma reduzida incisura.', 'Coxal_medial_bov.jpg', 'Incisura ischiadica minor'),
(81, 'Coxal_medial_bov_incisuraisquiaticamaior.jpg', 'Incisura Isquiádica Maior', 'medial', 'coxal', 'Comunicação óssea do túber sacral com a espinha isquiática, em forma de uma prolongada incisura desde a asa do ílio até o seu corpo.', 'Coxal_medial_bov.jpg', 'Incisura ischiadica major'),
(82, 'Coxal_medial_bov_linhaarqueada.jpg', 'Linha Arqueada', 'medial', 'coxal', 'Suave linha óssea que percorre o corpo do ílio medialmente.', 'Coxal_medial_bov.jpg', 'Linea arcuata'),
(83, 'Coxal_medial_bov_tuberculodomusculopsoas.jpg', 'Tubérculo do m. Psoas menor', 'medial', 'coxal', 'Área de superfície rugosa na extremidade cranial da linha arqueada.', 'Coxal_medial_bov.jpg', 'Tuberculum m. psoas minoris'),
(84, 'Coxal_medial_bov_tuberisquiadico.jpg', 'Túber Ísquiádico', 'medial', 'coxal', 'Projeção óssea dorsocaudal da tábua do isquio.', 'Coxal_medial_bov.jpg', 'Tuber ischiadicum'),
(85, 'Coxal_medial_bov_tuberosidadeiliaca.jpg', 'Tuberosidade Ilíaca', 'medial', 'coxal', 'Projeção óssea craniodorsal à face auricular.', 'Coxal_medial_bov.jpg', 'Tuberositas iliaca'),
(86, 'Coxal_ventral_bov_corpodoossoisquio.jpg', 'Corpo do Ísquio', 'ventral', 'coxal', 'Região do osso achatada latero-lateralmente, imediatamente lateral ao forame obturado.', 'Coxal_ventral_bov.jpg', 'Corpus ossis ischii'),
(87, 'Coxal_ventral_bov_eminenciailiopubica.jpg', 'Eminência íliopúbica', 'ventral', 'coxal', 'Dilatação óssea irregular e rugosa na extremidade lateral do pécten do osso pube.', 'Coxal_ventral_bov.jpg', 'Eminentia iliopubica'),
(88, 'Coxal_ventral_bov_forameobturado.jpg', 'Forame Obturado', 'ventral', 'coxal', 'Abertura grande e levemente elipsóide localizada entre os ossos ísquio e púbe.', 'Coxal_ventral_bov.jpg', 'Foramen obturatum'),
(89, 'Coxal_ventral_bov_pectendoossodopube.jpg', 'Pécten do osso pube', 'ventral', 'coxal', 'Borda cranial do ramo cranial do osso pube, com o aspecto de uma fina lâmina óssea.', 'Coxal_ventral_bov.jpg', 'Pecten ossis pubis'),
(90, 'Coxal_ventral_bov_ramodoossoisquio.jpg', 'Ramo do Ísquio', 'ventral', 'coxal', 'Região do osso achatada dorso-ventralmente, imediatamente medial ao forame obturado.', 'Coxal_ventral_bov.jpg', 'Ramus ossis ischii'),
(91, 'Coxal_ventral_bov_tabuadoossoisquio.jpg', 'Tábua do Osso Ísquio', 'ventral', 'coxal', 'Região óssea caudal ao forame obturado.', 'Coxal_ventral_bov.jpg', 'Tabula ossis ischii'),
(92, 'Coxal_ventral_bov_tubersacral.jpg', 'Túber Sacral', 'ventral', 'coxal', 'Pequena dilatação óssea na extremidade medial da asa do ílio.', 'Coxal_ventral_bov.jpg', 'Tuber sacrale'),
(93, 'Escapula_lateral_bov_angulocaudal.jpg', 'Ângulo Caudal', 'lateral', 'escapula', 'Ângulo aproximadamente reto formado pelo encontro da margem dorsal e margem caudal.', 'Escapula_lateral_bov.jpg', 'Angulus caudalis'),
(94, 'Escapula_lateral_bov_angulocranial.jpg', 'Ângulo Cranial', 'lateral', 'escapula', 'Ângulo aproximadamente reto formado pelo encontro da margem dorsal com a margem cranial.', 'Escapula_lateral_bov.jpg', 'Angulus cranialis'),
(95, 'Escapula_lateral_bov_anguloventral.jpg', 'Ângulo Ventral', 'lateral', 'escapula', 'Ângulo aproximadamente reto formado pelo encontro da margem caudal com o contorno caudal da cavidade glenoidal.', 'Escapula_lateral_bov.jpg', 'Angulus ventralis'),
(96, 'Escapula_lateral_bov_colodaescapula.jpg', 'Colo da Escápula', 'lateral', 'escapula', 'Região distal com menor largura na escápula. Marca a transição entre as fossas supra e infraespinhal e a cavidade glenoidal, lateralmente, e a transição  entre a fossa subescapular e cavidade glenoidal, medialmente.', 'Escapula_lateral_bov.jpg', 'Collum scapulae'),
(97, 'Escapula_lateral_bov_facelateral.jpg', 'Face Lateral', 'lateral', 'escapula', 'A face lateral é suavemente côncava e irregular, com acidentes ósseos em projeção. Assim como a face costal, a lateral é mais larga na extremidade proximal e mais estreita na extremidade distal.', 'Escapula_lateral_bov.jpg', 'Facies lateris'),
(98, 'Escapula_lateral_bov_margemcaudal.jpg', 'Margem Caudal', 'lateral', 'escapula', 'É a mais espessa das três margens, se estende desde a margem dorsal até a cavidade glenoidal, fazendo todo o contorno caudal da escápula.', 'Escapula_lateral_bov.jpg', 'Margo caudalis'),
(99, 'Escapula_lateral_bov_tuberculoinfraglenoidal.jpg', 'Tubérculo Infraglenoidal', 'lateral', 'escapula', 'Discreta elevação óssea localizada no ângulo ventral da escápula, imediatamente caudal à cavidade glenoidal.', 'Escapula_lateral_bov.jpg', 'Tuberculum infraglenoidale'),
(100, 'Escapula_lateral_bov_tuberculosupraglenoidal.jpg', 'Tubérculo Supraglenoidal', 'lateral', 'escapula', 'Eminência óssea situada na extremidade distal da incisura escapular.', 'Escapula_lateral_bov.jpg', 'Tuberculum supraglenoidale'),
(101, 'Escapula_medial_bov_angulocaudal.jpg', 'Ângulo Caudal', 'medial', 'escapula', 'Ângulo aproximadamente reto formado pelo encontro da margem dorsal e margem caudal.', 'Escapula_medial_bov.jpg', 'Angulus caudalis'),
(102, 'Escapula_medial_bov_angulocranial.jpg', 'Ângulo Cranial', 'medial', 'escapula', 'Ângulo aproximadamente reto formado pelo encontro da margem dorsal com a margem cranial.', 'Escapula_medial_bov.jpg', 'Angulus cranialis'),
(103, 'Escapula_medial_bov_anguloventral.jpg', 'Ângulo Ventral', 'medial', 'escapula', 'Ângulo aproximadamente reto formado pelo encontro da margem caudal com o contorno caudal da cavidade glenoidal.', 'Escapula_medial_bov.jpg', 'Angulus ventralis'),
(104, 'Escapula_medial_bov_colodaescapula.jpg', 'Colo da Escápula', 'medial', 'escapula', 'Região distal com menor largura na escápula. Marca a transição entre as fossas supra e infraespinhal e a cavidade glenoidal, lateralmente, e a transição  entre a fossa subescapular e cavidade glenoidal, medialmente.', 'Escapula_medial_bov.jpg', 'Collum scapulae'),
(105, 'Escapula_medial_bov_facecostal.jpg', 'Face Costal', 'medial', 'escapula', 'A face costal é suavemente côncava e irregular, com acidentes ósseos em projeção. Assim como a face costal, a costal é mais larga na extremidade proximal e mais estreita na extremidade distal.', 'Escapula_medial_bov.jpg', 'Facies lateris'),
(106, 'Escapula_medial_bov_faceserreada.jpg', 'Face Serreada', 'medial', 'escapula', 'Situada na face costal da escápula, a face serreada ocupa o terço proximal deste osso e se apresenta como uma área de aspecto levemente poroso e irregular.', 'Escapula_medial_bov.jpg', 'Facies serrata'),
(107, 'Escapula_medial_bov_fossasubescapular.jpg', 'Fossa Subescapular', 'medial', 'escapula', 'Encontra-se no terço médio da face costal da escápula na forma de uma depressão, que se estende em sentido distal até o início do terço final desta face. É pouco profunda e estreita, contribuindo com o aspecto côncavo característico da face em que se situa.', 'Escapula_medial_bov.jpg', 'Fossa subscapularis'),
(108, 'Escapula_medial_bov_incisuraescapular.jpg', 'Incisura Escapular', 'medial', 'escapula', 'Curvatura final da margem cranial, que ocupa o terço médio e distal desta margem, até se encontrar com o tubérculo supraglenoidal.', 'Escapula_medial_bov.jpg', 'Incisura scapulae'),
(109, 'Escapula_medial_bov_margemcaudal.jpg', 'Margem Caudal', 'medial', 'escapula', 'É a mais espessa das três margens, se estende desde a margem dorsal até a cavidade glenoidal, fazendo todo o contorno caudal da escápula.', 'Escapula_medial_bov.jpg', 'Margo caudalis'),
(110, 'Escapula_medial_bov_margemcranial.jpg', 'Margem Cranial', 'medial', 'escapula', 'Ângulo aproximadamente reto formado pelo encontro da margem dorsal com a margem cranial.', 'Escapula_medial_bov.jpg', 'Angulus cranialis'),
(111, 'Escapula_medial_bov_margemdorsal.jpg', 'Margem Dorsal', 'medial', 'escapula', 'Borda proximal da escápula, pouco arqueada, que forma, de maneira imaginária, a base do contorno triangular da escápula.', 'Escapula_medial_bov.jpg', 'Margo dorsalis'),
(112, 'Escapula_medial_bov_processocoracoide.jpg', 'Processo Coracóide', 'medial', 'escapula', 'Proeminência óssea dirigida craniomedialmente à cavidade glenoidal.', 'Escapula_medial_bov.jpg', 'Processus coracoideus'),
(113, 'Falangedistal_abaxial_bov_apice.jpg', 'Ápice', 'abaxial', 'falange_distal', 'Extremidade pontiaguda distal da borda dorsal da falange distal.', 'Falangedistal_abaxial_bov.jpg', 'Apex'),
(114, 'Falangedistal_abaxial_bov_faceabaxial.jpg', 'Face Abaxial', 'abaxial', 'falange_distal', 'Superfície convexa de contorno aproximadamente triangular.', 'Falangedistal_abaxial_bov.jpg', 'Facies abaxialis'),
(115, 'Falangedistal_abaxial_bov_forameabaxial.jpg', 'Forame Abaxial', 'abaxial', 'falange_distal', 'Abertura generosa localizada na face abaxial, deslocada caudalmente, próxima à face solear.', 'Falangedistal_abaxial_bov.jpg', 'Foramen abaxiale'),
(116, 'Falangedistal_abaxial_bov_margemcoronal.jpg', 'Margem Coronal', 'abaxial', 'falange_distal', 'Borda proximal que delimita a face articular da face parietal.', 'Falangedistal_abaxial_bov.jpg', 'Margo coronalis'),
(117, 'Falangedistal_abaxial_bov_margemdorsal.jpg', 'Margem Dorsal', 'abaxial', 'falange_distal', 'Borda que delimita a face parietal da face axial.', 'Falangedistal_abaxial_bov.jpg', 'Margo dorsalis'),
(118, 'Falangedistal_abaxial_bov_margemsolear.jpg', 'Margem Solear', 'abaxial', 'falange_distal', 'Borda de delimitação da face abaxial com a face solear.', 'Falangedistal_abaxial_bov.jpg', 'Margo solearis'),
(119, 'Falangedistal_abaxial_bov_processoextensor.jpg', 'Processo Extensor', 'abaxial', 'falange_distal', 'Dilatação óssea no limite proximal da borda dorsal da falange distal.', 'Falangedistal_abaxial_bov.jpg', 'Processus extensorius'),
(120, 'Falangedistal_abaxial_bov_sulcoparietalabaxial.jpg', 'Sulco Parietal Abaxial', 'abaxial', 'falange_distal', 'Sulco raso intermitente localizado de forma oblíqua na face abaxial da falange distal.', 'Falangedistal_abaxial_bov.jpg', 'Sulcus parietalis abaxialis'),
(121, 'Falangedistal_axial_bov_apice.jpg', 'Ápice', 'axial', 'falange_distal', 'Extremidade pontiaguda distal da borda dorsal da falange distal.', 'Falangedistal_axial_bov.jpg', 'Apex'),
(122, 'Falangedistal_axial_bov_facearticular.jpg', 'Face Articular', 'axial', 'falange_distal', 'Superfície lisa e irregular para articulação com a cabeça da falange média.', 'Falangedistal_axial_bov.jpg', 'Facies articularis'),
(123, 'Falangedistal_axial_bov_facearticularsedamoidea.jpg', 'Face Articular Sedamóidea', 'axial', 'falange_distal', 'Reduzida área da face articular destinada a articulação com o osso sesamóideo distal.', 'Falangedistal_axial_bov.jpg', 'Facies articularis sesamoidea'),
(124, 'Falangedistal_axial_bov_faceaxial.jpg', 'Face Axial', 'axial', 'falange_distal', 'Superfície côncava direcionada para o espaço interdigital, com contorno aproximadamente triangular.', 'Falangedistal_axial_bov.jpg', 'Facies axialis'),
(125, 'Falangedistal_axial_bov_facesolear.jpg', 'Face Solear', 'axial', 'falange_distal', 'Superfície horizontal ligeiramente plana.', 'Falangedistal_axial_bov.jpg', 'Facies solearis'),
(126, 'Falangedistal_axial_bov_forameaxial.jpg', 'Forame Axial', 'axial', 'falange_distal', 'Grande abertura situada na extremidade proximal da face parietal da falange distal.', 'Falangedistal_axial_bov.jpg', 'Foramen axiale');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_exe`
--

DROP TABLE IF EXISTS `tbl_exe`;
CREATE TABLE IF NOT EXISTS `tbl_exe` (
  `Cod_Exe` int(10) NOT NULL AUTO_INCREMENT,
  `Nom_Exe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Desc_Exe` text COLLATE utf8_unicode_ci NOT NULL,
  `Cat_Exe` int(10) NOT NULL,
  `Ten_Exe` int(10) NOT NULL,
  `Status_Exe` int(3) NOT NULL,
  `RespC_Exe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Op1_Exe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Op2_Exe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Op3_Exe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Op4_Exe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Op5_Exe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Op6_Exe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Dis_Exe` int(1) NOT NULL,
  `Aut_Exe` int(10) NOT NULL,
  PRIMARY KEY (`Cod_Exe`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_exe`
--

INSERT INTO `tbl_exe` (`Cod_Exe`, `Nom_Exe`, `Desc_Exe`, `Cat_Exe`, `Ten_Exe`, `Status_Exe`, `RespC_Exe`, `Op1_Exe`, `Op2_Exe`, `Op3_Exe`, `Op4_Exe`, `Op5_Exe`, `Op6_Exe`, `Dis_Exe`, `Aut_Exe`) VALUES
(1, 'Primeiro Exercício :D', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 1, 2, 1, 'a', '00', 'a', '000', '0000', '0000', '0000', 0, 1),
(2, 'Nome', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 1, 2, 1, '0', '0', '0', '0', '0', '0', '0', 0, 1),
(3, 'Exercício 1', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 1, 5, 1, '0aaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', '0', '0', '0', '0', '0', 0, 1),
(4, 'Essa aqui que eu acertei :D', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 1, 3, 1, 'a', '0', '0', '0', '0', 'a', '0', 0, 1),
(5, 'uai', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 1, 0, 1, '0', '0', '0', '0', '0', '0', '0', 0, 1),
(6, 'Anao', '<p>a</p>\r\n', 1, 0, 1, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 0, 1),
(7, 'a', '<p>a</p>\r\n', 1, 0, 1, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 0, 1),
(8, 'aaaaaaaaa', '<p>a</p>\r\n', 1, 0, 1, 'a', 'a', 'a', 'a', '0000', '0000', '0000', 0, 1),
(9, 'Adm top', '<p>a</p>\r\n', 1, 0, 1, '', '', '', '', '', '', '', 1, 1),
(10, 'questão administrativa', '<p>Essa &eacute; uma quest&atilde;o dissertativa.</p>\r\n', 1, 1, 1, '', '', '', '', '', '', '', 1, 1),
(11, 'Exercício 15', '<p>xcdsfdasfsdfadsfdsfsfadfasdfasdfasdfas</p>\r\n', 1, 1, 1, 'a', 'a', 'b', 'n', 'h', 'm', 'm', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_exer_res`
--

DROP TABLE IF EXISTS `tbl_exer_res`;
CREATE TABLE IF NOT EXISTS `tbl_exer_res` (
  `Cod_ER` int(10) NOT NULL AUTO_INCREMENT,
  `Cod_Exe` int(10) NOT NULL,
  `Nom_ER` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Alu_ER` int(10) NOT NULL,
  `Cat_ER` int(10) NOT NULL,
  `Dat_ER` datetime NOT NULL,
  `Sta_ER` int(5) NOT NULL,
  `Resp_Exe` text NOT NULL,
  PRIMARY KEY (`Cod_ER`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_exer_res`
--

INSERT INTO `tbl_exer_res` (`Cod_ER`, `Cod_Exe`, `Nom_ER`, `Alu_ER`, `Cat_ER`, `Dat_ER`, `Sta_ER`, `Resp_Exe`) VALUES
(1, 1, 'Primeiro Exercício :D', 1, 1, '2020-05-23 00:00:00', 1, ''),
(2, 3, 'Exercício 1', 1, 1, '2020-05-23 00:00:00', 0, ''),
(3, 2, 'Nome', 1, 1, '2020-05-23 00:00:00', 1, ''),
(4, 4, 'a', 1, 1, '2020-05-23 00:00:00', 1, ''),
(5, 10, 'questão administrativa', 1, 1, '2020-05-23 00:00:00', 2, ''),
(6, 11, 'Exercicio 112', 1, 1, '2020-05-23 00:00:00', 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usu`
--

DROP TABLE IF EXISTS `tbl_usu`;
CREATE TABLE IF NOT EXISTS `tbl_usu` (
  `Cod_Usu` int(11) NOT NULL AUTO_INCREMENT,
  `Ema_Usu` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Sen_Usu` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `Tip_Usu` int(5) NOT NULL,
  `Nom_Usu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Sob_Usu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Rank_Usu` int(10) NOT NULL,
  `Acer_Usu` int(10) NOT NULL,
  `Tent_Usu` int(10) NOT NULL,
  PRIMARY KEY (`Cod_Usu`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_usu`
--

INSERT INTO `tbl_usu` (`Cod_Usu`, `Ema_Usu`, `Sen_Usu`, `Tip_Usu`, `Nom_Usu`, `Sob_Usu`, `Rank_Usu`, `Acer_Usu`, `Tent_Usu`) VALUES
(1, 'a', 'a', 0, 'Alisson', 'Goulart', 0, 14, 14),
(4, 'arlindo@gmail.com', 'ifsuldeminas', 2, 'Professor', 'Chavier', 0, 0, 0),
(5, 'sdjkdads@dshakdash', 'ifsuldeminas', 3, 'Monitor ', 'Mauro', 0, 0, 0),
(6, 'alefzandomenighi@gmail.com', 'ifsuldeminas', 1, 'Aluno', 'Agustinho', 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
