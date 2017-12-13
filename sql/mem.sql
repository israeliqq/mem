-- phpMyAdmin SQL Dump
-- version 4.4.8
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2017 a las 17:21:47
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE IF NOT EXISTS `institucion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rbd` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `distrito` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `web` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `director` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `capellan` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `funcionarios` int(11) DEFAULT NULL,
  `vision` varchar(10000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mision` varchar(10000) COLLATE utf8_spanish_ci DEFAULT NULL,
  `matricula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id`, `nombre`, `rbd`, `direccion`, `ciudad`, `distrito`, `telefono`, `email`, `web`, `director`, `capellan`, `funcionarios`, `vision`, `mision`, `matricula`) VALUES
(1, 'ESCUELA PARTICULAR <br>Nº 7 METODISTA', '6834-9', 'AVDA ARGENTINA 3595', 'VALDIVIA', 'SUR', '2217250', 'ESC.METODISTAVALDIVIA@GMAIL.COM', '', 'GUILLERMINA SÁEZ CARREÑO', '', 41, 'SER RECONOCIDOS POR UNA PROPUESTA EDUCATIVA DE CALIDAD E INTEGRAL EN EL CONTEXTO EDUCACIONAL DE LA CIUDAD DE VALDIVIA, CON UN SELLO CARACTERISTICO Y DISTINTIVO SUSTENTADO EN LOS VALORES CRISTIANOS,QUE PERMITA EL DESARROLLO DE COMPETENCIAS Y HABILIDADES EN TODOS LOS EDUCANDOS.', 'ENTREGAR A NUESTROS ESTUDIANTES VALORES CRISTIANOS Y UNA SOLIDA BASE PEDAGOGICA,QUE LES PERMITA PROYECTARSE CON EXITO Y PLENITUD,EN LA CONTINUIDAD DEL SISTEMA EDUCATIVO.', 275),
(2, 'ESCUELA AGRÍCOLA <br> EL VERGEL', '5267-1', 'KILÓMETRO Nº 5 CAMINO ANGOL-COLLIPULLI', 'ANGOL', 'SUR', '452711142', 'LICEOELVERGEL@YAHOO.COM', '', 'MANUEL JESÚS GATICA VENEGAS', '', 52, 'El Liceo Agrícola  Metodista El Vergel de Angol será un actor principal en el ámbito de la Educación Media Técnico Profesional Agrícola de la Región de la Araucanía,  Reconocido  como una Institución Educativa comprometida con la formación integral, el aprendizaje de todos sus estudiantes, cuidado de los recursos naturales y la adquisición de las habilidades y competencias necesarias para desempeñarse en la vida.', 'La Misión del Liceo  Agrícola "El Vergel" de Angol, como Liceo Técnico Profesional Inclusivo de Iglesia Metodista de Chile es formar Técnicos Agropecuarios de Nivel Medio con carácter, Competentes y Emprendedores, con una sólida base Valórica Cristiana  y responsables en  el uso Sustentable de los  recursos naturales. ', 159),
(3, 'ESCUELA PARTICULAR <br>METODISTA COQUIMBO', '650-5', 'SAN MARTÍN 1598', 'COQUIMBO', 'NORTE VERDE', '51232277', 'DIRECCION@ESCUELAMETODISTA.CL', 'WWW.ESCUELAMETODISTA.CL', 'SHELDA CAROLINA ASCENCIO ARRIAGADA', '', 50, 'Ser una institución que se caracterice por otorgar a la comunidad, una educación de calidad y de equidad, con una identidad cristiana basados en el amor a Dios, así mismos  y a su prójimo.', 'Educar al alumno y alumna, fortaleciendo sus capacidades, cognitivas, afectivas y sociales para proyectar la continuidad de sus estudios, con el propósito de decidir sobre su futuro académico y/o laboral, con el lema “Educando para la vida plena”', 371),
(4, 'ESCUELA PARTICULAR<br> Nº 23 METODISTA', '5010-5', 'COLO COLO ESQUINA GABRIELA MISTRAL S/N', 'CORONEL', 'CONCEPCION', '412752105', 'ESCMET23@HOTMAIL.COM', 'WWW.METODISTA23CORONEL.CL', 'SILVIA NOEMÍ AEDO ÚRIBE', '', 52, 'Formar estudiantes integrales con una sólida base valórica y académica aportando constructivamente a la  sociedad, siendo protectores del medio ambiente, respetuosos de los demás, capaces de  tomar decisiones asertivas. Una escuela con reconocimiento público, que presente alto nivel de vinculación con la comunidad, autónoma y con eficiente  gestión interna.  Una escuela  acogedora con  grato nivel de convivencia entre sus miembros. ', 'Nuestra misión como Institución de la Iglesia Metodista es  potenciar  el desarrollo integral de niños y niñas, en el ámbito valórico, cognitivo y social internalizando competencias acordes al mundo de hoy, que les permitan; ser tolerantes, proactivos, respetuosos, autónomos fieles a sus principios y creencias. ', 640),
(5, 'COLEGIO PSICOPEDAGÓGICO <br> JUAN WESLEY', '25170-4', 'LAS DALIAS 1847-ÑUÑOA', 'SANTIAGO', 'METROPOLITANO', '222386593', 'COLEGIOJUANWESLEY@HOTMAIL.COM', '', 'NATALY FERNÁNDEZ VEGA', '', 21, 'Ser una escuela especial pionera en la región metropolitana,  que brinde una Educación de calidad, basada en un currículum integral que garantice aprendizajes significativos centrados en el nivel de cada estudiante, en un contexto que reconozca y asuma la condición de criatura e imagen de Dios de cada uno de ellos. La formación de estudiantes capaces de contribuir a nuestra sociedad, considerando a las familias como sujetos activos en su rol formador.', 'Brindar una Educación de Calidad a niños y jóvenes en situación de Discapacidad Intelectual o Discapacidad Múltiple, en los niveles de Enseñanza Pre Básica, Básica y  Laboral, que brinda estrategias para desarrollar habilidades cognitivas, físicas, emocionales y espirituales,  además de competencias para la vida adulta familiar e independiente. Integrando a la comunidad en la vivencia de valores cristianos, fortaleciendo las habilidades emocionales, el compromiso social, el amor por la vida y el respeto al medio ambiente.', 43),
(6, 'COLEGIO METODISTA<br> DE SANTIAGO', '25359-6', 'ARTURO PRAT 1655', 'SANTIAGO ', 'METROPOLITANO', '225557432', 'COLEGIOMETODISTADESANTIAGO@HOTMAIL.COM', 'WWW.COLEGIOMETODISTADESANTIAGO.CL', 'MARCELA MONDACA ZUÑIGA', '', 53, 'La educación necesita ser entregada de tal forma que todos se beneficien de ella de acuerdo a sus necesidades físicas, cognitivas y  espirituales en un ambiente de respeto, compromiso y amor.  Donde el ser humano desarrolle la conciencia de sí y de su entorno, ejercite su libertad, asuma responsabilidades y se sienta respaldado como persona; llevando en sí una gama de saberes, valores, competencias, destrezas, habilidades y actitudes con capacidad de asumir sus derechos y deberes de manera que lo conviertan en un agente activo de la construcción del reino en una sociedad postmoderna.', 'Nuestro colegio tiene como misión formar personas en el marco valórico del cristianismo, proporcionando los medios necesarios para que descubra y forje su propio proyecto de vida, a través de un programa educativo flexible y de acuerdo a las necesidades sociales y personales del estudiante apuntando  hacia la excelencia académica centrada en la persona y en su entorno para lograr un desarrollo personal con fuerte orientación en los valores y conocimientos que permitan al estudiante integrarse, ya sea en la educación superior, vida laboral o social, siendo una persona capaz de contribuir en la construcción  de una sociedad basada en los valores y principios del Evangelio.', 343),
(7, 'COLEGIO METODISTA <BR> ROBERT JOHNSON', '12534-2', 'AVDA. LAS PARCELAS 32A', 'ALTO HOSPICIO', 'NORTE', '572574617', 'RECTORIA@CMRJ.CL', 'WWW.CMRJ.CL', 'MARCELA CATALÁN MUÑOZ', '', 162, 'Queremos ser una institución que brinde una \r\neducación de Excelencia, basada en un curriculum que garantice aprendizajes de calidad y una formación integral de sus educandos.\r\nUn colegio con énfasis en los Valores Cristianos, el respeto irrestricto por el Medio Ambiente, referentes en la formación Técnico Profesional, competentes y coherentes a los nuevos desafíos; de manera tal que sus egresados y egresadas, sean agentes de desarrollo, útiles a la sociedad en la que les corresponda desenvolverse.', 'El Colegio Metodista Robert Johnson de Alto Hospicio, es un establecimiento confesional Cristiano, sin afán de lucro, perteneciente a la Iglesia Metodista de Chile.\r\nBrinda una Educación de Calidad a la niñez y juventud de la comuna, en los niveles de enseñanza prebásica, básica y media técnico profesional, para que cultiven su mente y su espíritu, adquiriendo competencias para la vida, que les permitan desenvolverse eficazmente en la sociedad en la cual son actores respetuosos de sí mismo, de la diversidad cultural, de los valores Cristianos y del Medio Ambiente.', 1696),
(8, 'INSTITUCIÓN SWEET', '25627-7', 'SARGENTO ALDEA 1057', 'SANTIAGO', 'METROPOLITANO', '225553553', 'JARDIN_SWEET@HOTMAIL.COM', 'INSTITUCIONSWEET.CL', 'DENISE SOTO VERGARA', '', 56, 'Ser un jardín acogedor y solidario, que promueva el derecho a recibir educación de calidad en un proceso integral que considere lo emocional, cognitivo y espiritual, en un contexto cristiano evangélico de armonía, respeto a las personas y al medio ambiente, incluyendo a las familias como sujetos activos en su rol formador.', 'Educar integralmente a menores en edad preescolar, en la fe de Jesucristo y en un  ambiente acogedor, solidario y de calidad pedagógica que promueva la autonomía, libertad, seguridad y alegría, integrando a la comunidad en la vivencia de valores cristianos, las habilidades emocionales, el compromiso social, el amor por la vida y el respeto al medio ambiente.', 250),
(9, 'COLEGIO METODISTA <br>EDÉN DEL NIÑO', '1220-3', 'SANTA ROSA N° 137', 'LOS ANDES', '', '342422138', 'METODISTA3@YAHOO.ES', 'WWW.FCMLA.ORG', 'ELISA BARRAZA ALFARO', '', 41, 'Al año 2020 ser reconocido como un colegio metodista de sólida formación cristiana, alto rendimiento académico y excelencia Educativa. Con una gestión pedagógica innovadora, eficiente y sistemática, Comprometida con el mejoramiento continuo.', 'Somos una Institución Educacional Metodista, de la comuna de Los Andes, particular  subvencionada con excelencia académica y una sólida Concepción Cristiana. Formamos estudiantes con habilidades para integrarse y aportar con éxito en la sociedad actual, propiciando en ellos el desarrollo de sus máximas capacidades, destrezas, valores y actitudes. Responsables de la construcción de una sociedad mejor y más justa.\r\nLo hacemos a través de la implementación del currículum nacional, con procesos pedagógicos de altos estándares de calidad y con una comunidad educativa comprometida y competente que forma para la Vida.\r\n', 347),
(10, 'COLEGIO INGLÉS', '12631-4', 'PATRICIO LYNCH 1580', 'IQUIQUE', 'NORTE', '572398000', 'INFO@COLEGIOINGLES.ORG', 'WWW.COLEGIOINGLES.ORG', 'ENRIQUE SEGUNDO QUINTANA MALDONADO', '', 133, 'Anhelamos ser una comunidad educativa de excelencia en la formación académica y valórica', '“Somos el Colegio Inglés de Iquique, una Institución Educativa Confesional, dependiente de la Iglesia Metodista de Chile. Impartimos educación de calidad en los niveles de Enseñanza Parvularia, Básica, Media Humanístico Científico y Técnico Profesional.\r\nFormamos personas que utilicen al máximo sus capacidades cognitivas, afectivas, sociales y espirituales, que les permitan ser un aporte significativo a la sociedad, con énfasis en principios cristianos y en la enseñanza del idioma inglés, en un ambiente de sana convivencia, a través de un equipo de profesionales altamente calificados”.', 1490),
(11, 'COLEGIO METODISTA <BR>WILLIAM TAYLOR', '12566-0', 'AVDA. LOS ÁLAMOS 3025', 'ALTO HOSPICIO', 'NORTE', '956696977', 'VIRGINIA.CARTES@CMWT.CL', 'WWW.CMWT.CL', 'VIRGINIA TAMARA CÁRTES GARRIDO', '', 160, 'Ser una comunidad de aprendizaje inclusiva y efectiva que en un proceso de dos años avance hacia mejores estándares de aprendizaje, asegurando la calidad del proceso de enseñanza y aprendizaje. Basados en el evangelio de Cristo, expresado en el respeto a la diversidad; cultivando una convivencia escolar armoniosa , donde el equipo de funcionarios asume su trabajo con sentido de misión basados en una pedagogía de amor y respeto en un contexto de vulnerabilidad, logrando el compromiso de todos los actores de la comunidad educativa.', 'Somos el Colegio Metodista William Taylor una comunidad educativa confesional que promueve en forma efectiva y duradera el desarrollo integral de todos y cada uno de nuestros estudiantes y su entorno familiar, a través de una sólida formación cristiana, de una pedagogía inclusiva, de una convivencia armoniosa y una formación técnico profesional, construyendo con fe y esperanza en nuestros estudiantes un proyecto de vida exitoso. ', 1664),
(12, 'COLEGIO METODISTA<br> LAGUNILLAS', '11420-0', 'LOS MOLINEROS 488', 'CORONEL', 'CONCEPCION', '752105', 'METODISTALAG@GMAIL.COM', '', 'JUAN ERASMO ARÉVALO OÑATE', '', 39, 'Soñamos con un colegio reconocido por su formación valórica cristiana, que respete a la diversidad, con logros de aprendizaje de calidad, formación integral y desarrollo de competencias habilidades y destrezas.', 'Nuestro compromiso es potenciar el desarrollo integral de nuestros alumnos fortaleciendo su formación valórica cristiana , los hábitos de vida saludable, el respeto a la diversidad, entregando una educación de calidad que asegure a los estudiantes aprendizajes significativos.', 353),
(13, 'COLEGIO METODISTA <br>DE TEMUCO', '5816-5', 'CLARO SOLAR 971', 'TEMUCO', 'SUR', '455210910', 'SECRETARIA@METODISTATEMUCO.CL', 'WWW.METODISTATEMUCO.CL', 'SANTIAGO VALENZUELA GUAJARDO ', '', 59, '"Entregar una educación de calidad , con sólidos valores y principios Cristianos"', '"El Colegio Metodista de Temuco, es un Colegio Confesional que entrega a la juventud de su comunidad una una modalidad educacional Científico - Humanista , comprometiéndose con una constante búsqueda de lo valórico, que permita a sus educandos alcanzar la plenitud, los niveles de desarrollo y competencias necesarias para un eficaz desempeño en sociedad"', 672),
(14, 'LICEO POLITÉCNICO <br>METODISTA LA GRANJA', '11527-4', 'KM 1 CAMINO IMPERIAL - TEMUCO', 'NUEVA IMPERIAL', 'SUR', '452611107', 'OBRARURALLICEO@GMAIL.COM', 'WWW.METODISTALAGRANJA.WEBESCUELA.CL', 'MARCELA ALEJANDRA CANALES VERDEJO', '', 47, 'Queremos ser reconocidos como una institución inclusiva, con una impronta cristiana metodista, que proporcione a los estudiantes una relación vital con Jesucristo, con capacidad de gestión e innovación en la formación de técnicos profesionales de nivel medio, acorde a la vanguardia de los nuevos paradigmas y enfoques educativos, en una sociedad cambiante.', 'El liceo politécnico metodista “La Granja” es una institución educativa, sin fines de lucro, de carácter  técnico profesional de nivel medio, con formación cristiana, que valora la familia, las distintas culturas, el cuidado y preservación de la naturaleza.\r\nCreada para contribuir al desarrollo económico, social y político de la nación. Para lograrlo formaremos técnicos de nivel medio, con capacidad de gestión e innovación, adaptable a los cambios tecnológicos y a lo que la sociedad requiera. Implementando procesos educativos holísticos, orientados a la formación general y diferenciada para desarrollar competencias y carácter de  los estudiantes.\r\nEntregando una educación de calidad y equitativa en ambientes e infraestructuras adecuadas para la enseñanza, el aprendizaje y la recreación; con participación activa de un personal idóneo, abierto al cambio y a la innovación, que proporciona un currículo sustentado en un evangelio integral con tolerancia y respeto por todas las etnias.\r\n', 215),
(15, 'ESCUELA METODISTA <br>N° 118 RULO', '6667-2', 'KM. 12 CAMINO ALTERNATIVO A CARAHUE', 'NUEVA IMPERIAL', 'SUR', '962732746', 'METODISTA.RULO@HOTMAIL.COM', '', 'MÓNICA JUDITH PACHECO MARTÍNEZ', '', 23, 'La Visión de la Escuela Metodista N°118 Rulo, es ser una comunidad educativa acogedora e inclusiva, que desarrolle en sus estudiantes aprendizajes significativos que los forme para la vida, manteniendo un desarrollo profesional constante a través de la capacitación permanente, integrando a la familia como pilar fundamental de la sociedad, en un ambiente de tolerancia y respeto que promueva  una convivencia sana y armoniosa, liderada por una efectiva gestión centrada en lo pedagógico, en un marco de principios y valores cristianos, sustentada en el Evangelio de Jesucristo.', 'La misión de la Unidad Educativa es entregar una educación de calidad y equidad, a través de la implementación de propuestas pedagógicas significativas, adecuadas a la realidad sociocultural y étnica de los estudiantes, que promueva el desarrollo integral, con un sentido de aceptación y tolerancia hacia el prójimo, capaces de conciliar un diálogo de respeto y convivencia con la cultura y tradiciones mapuche, teniendo presente la persona de Cristo como modelo de vida. ', 92),
(16, 'LICEO INDUSTRIAL<br> METODISTA CORONEL', '12033-2', 'AVDA. LOS MOLINEROS Nº 22', 'CORONEL', 'CONCEPCION', '412715804', 'INDUMETO@OUTLOOK.COM', 'WWW.LIMCORONEL.CL', 'JUAN ERASMO ARÉVALO OÑATE', '', 97, 'El Liceo Industrial Metodista educa en una visión Humanista Cristiana y desde la perspectiva de la Iglesia Metodista de Chile ampliamente Social y de respeto a la diversidad.\r\n\r\nPretende formar a jóvenes (hombres y mujeres), incorporándolos a un proceso de desarrollo como agentes motivadores y gestores del mejoramiento de su calidad de vida, personal y familiar, de su entorno social y medio ambiente.\r\n\r\nDesarrolla las competencias de la Educación Media Técnico Profesional que le permita integrarse con éxito ante las exigencias del mundo cultural, valórico y tecnológico globalizado.\r\n', 'Colaborar en la formación de jóvenes con una sólida preparación académica, valórica y técnica, mediante una educación humanista cristiana, inspirada en los principios de la Iglesia Metodista de Chile, que promuevan el desarrollo de competencias, habilidades y actitudes, que les permita aportar como personas y ciudadanos útiles a la sociedad y al mundo laboral de acuerdo a los nuevos desafíos.', 1028),
(17, 'COLEGIO METODISTA<br> CONCEPCIÓN', '17900-0', 'COLO COLO N° 760', 'CONCEPCIÓN', 'CONCEPCION', '412621100', 'DIRECCION@METODISTACONCEPCION.CL', 'WWW.METODISTACONCEPCION.CL', 'LUCILA ELIZABETH VILLEGAS RETAMAL', '', 56, 'El Colegio Metodista Concepción reconoce la importancia que la Educación tiene en la vida del ser humano, por lo que asume la responsabilidad que le ha encomendado la Iglesia, que es la de unir la adquisición del saber con la formación cristiana y ofrecer la posibilidad de descubrir la dimensión espiritual y comunitaria de la vida.\r\n​\r\nAsí el colegio orienta su quehacer hacia la formación de personas:\r\n​\r\n- Críticas y creativas\r\n- Solidarias, tolerantes y pacíficas\r\n- Con una sólida formación académica\r\n- Responsables y respetuosas con el prójimo\r\n- Capaces de hacer opciones libres y justas, haciendo suyo el modelo de vida de Jesucristo, participando activamente de las instancias espirituales ofrecidas por la institución', 'Ser una Comunidad Educativa comprometida con la Iglesia Metodista, que se distingue por formar a estudiantes en valores cristianos basados en el modelo de vida de Jesús y por la entrega de una sólida formación académica, que los habilita para descubrir su vocación de servicio y construir su futuro en una sociedad democrática.', 411);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `html` varchar(10000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
