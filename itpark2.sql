-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 29 2023 г., 17:17
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `itpark2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int NOT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `title_kk` varchar(255) DEFAULT NULL,
  `descrip_ru` text,
  `descrip_kk` text,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `aboutus`
--

INSERT INTO `aboutus` (`id`, `title_ru`, `title_kk`, `descrip_ru`, `descrip_kk`, `img`, `link`, `status`) VALUES
(1, 'Про нас', 'Біз туралы', 'Добро пожаловать в нашу компанию доставки! Мы команда профессионалов, предоставляющая надежные и эффективные услуги доставки уже много лет. Наша цель - сделать процесс доставки простым и удобным для наших клиентов. Мы гордимся своим опытом и превосходством в области логистики, грузоперевозок, упаковки и складирования. Наша команда тщательно планирует и осуществляет каждую доставку, уделяя внимание деталям и обеспечивая безопасность груза на каждом этапе. Мы стремимся к постоянному совершенствованию и удовлетворению потребностей наших клиентов, предлагая индивидуальные решения и превосходный уровень обслуживания. Доверьте нам свои грузы, и мы доставим их вовремя, надежно и с профессионализмом.', 'Біздің жеткізу компаниямызға қош келдіңіз! Біз көптеген жылдар бойы сенімді және тиімді жеткізу қызметтерін ұсынатын кәсіби мамандар командасымыз. Біздің мақсатымыз - жеткізу процесін қарапайым және тұтынушыларымыз үшін ыңғайлы ету. Біз логистика, жөнелту, орау және қоймалау саласындағы тәжірибеміз бен жетістігімізді мақтан тұтамыз. Біздің команда егжей-тегжейге назар аудара отырып және әр кезеңде жүктің сақталуын қамтамасыз ете отырып, әрбір жеткізілімді мұқият жоспарлайды және орындайды. Біз теңшелген шешімдер мен жоғары қызмет көрсетуді ұсына отырып, үздіксіз жақсартуға және тұтынушылардың қанағаттануына ұмтыламыз. Тасымалдауларыңызды бізге сеніңіз, біз оларды уақтылы, сенімді және кәсіби түрде жеткіземіз.', 'about.jpg', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `action`
--

CREATE TABLE `action` (
  `id` int NOT NULL,
  `title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `title_kk` varchar(255) DEFAULT NULL,
  `descrip_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `descrip_kk` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `action`
--

INSERT INTO `action` (`id`, `title_ru`, `title_kk`, `descrip_ru`, `descrip_kk`, `link`, `status`) VALUES
(1, 'Готовы начать сотрудничество?', 'Ынтымақтастықты бастауға дайынсыз ба?', 'Наши профессиональные услуги доставки и логистики готовы удовлетворить ваши потребности. Обратитесь к нам сегодня и получите высококачественное обслуживание, надежность и безопасность для ваших грузов.', 'Біздің кәсіби жеткізу және логистикалық қызметтеріміз сіздің қажеттіліктеріңізді қанағаттандыруға дайын. Бүгін бізге хабарласыңыз және жүктеріңіз үшін жоғары сапалы қызмет, сенімділік пен қауіпсіздікті алыңыз.', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `contactus`
--

CREATE TABLE `contactus` (
  `id` int NOT NULL,
  `urname` varchar(255) DEFAULT NULL,
  `urmail` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `answer` text,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `contactus`
--

INSERT INTO `contactus` (`id`, `urname`, `urmail`, `subject`, `message`, `answer`, `status`) VALUES
(1, 'wrer', 'werewr', 'werer', 'erwe', NULL, NULL),
(4, 'ewre', 'dfweaer', 'ewrEFD', 'FEWFARE', NULL, NULL),
(5, 'asd', 'idontlikenoodle@gmail.com', 'asdasd', 'asdasdas', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `counts`
--

CREATE TABLE `counts` (
  `id` int NOT NULL,
  `name_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name_kk` varchar(255) DEFAULT NULL,
  `numbers` int DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `counts`
--

INSERT INTO `counts` (`id`, `name_ru`, `name_kk`, `numbers`, `status`) VALUES
(1, 'клиенты', 'клиенттер', 444, 1),
(2, 'проекты', 'жобалар', 555, 1),
(3, 'поддержка', 'қолдау', 111, 1),
(4, 'рабочие', 'жұмысшы', 33, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `delivery`
--

CREATE TABLE `delivery` (
  `id` int NOT NULL,
  `title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `title_kk` varchar(255) DEFAULT NULL,
  `descrip_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `descrip_kk` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `delivery`
--

INSERT INTO `delivery` (`id`, `title_ru`, `title_kk`, `descrip_ru`, `descrip_kk`, `link`, `icon`, `status`) VALUES
(1, 'Международные грузоперевозки', 'Халықаралық жүк тасымалдау', 'Мы специализируемся на международных грузоперевозках и готовы доставить ваши грузы в любую точку мира', 'Біз халықаралық жүк тасымалдауға маманданамыз және сіздің тауарларыңызды әлемнің кез келген нүктесіне жеткізуге дайынбыз.', '', 'fa-sharp fa-solid fa-truck-fast', 1),
(2, 'Региональная доставка', 'Аймақтық жеткізу', 'Мы осуществляем быструю и эффективную доставку грузов по региону.', 'Біз аймақта тауарларды жылдам және тиімді жеткізуді жүзеге асырамыз.', '', 'fa-solid fa-truck-ramp-box', 1),
(3, 'Экспресс-доставка', 'Экспресс жеткізу', 'Когда каждая минута имеет значение, наша экспресс-доставка гарантирует быструю и своевременную доставку вашего груза.', 'Әр минут маңызды болғанда, біздің жедел жеткізуіміз сіздің жөнелтілімнің тез және уақытында келуін қамтамасыз етеді.', '', 'fa-solid fa-box-open', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `faq`
--

CREATE TABLE `faq` (
  `id` int NOT NULL,
  `question_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `question_kk` varchar(255) DEFAULT NULL,
  `answer_ru` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `answer_kk` text,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `faq`
--

INSERT INTO `faq` (`id`, `question_ru`, `question_kk`, `answer_ru`, `answer_kk`, `status`) VALUES
(1, ' Каковы ваши сроки доставки?', 'Сіздің жеткізу уақытыңыз қандай?', 'Наши сроки доставки зависят от конкретных условий и требований. Мы стремимся осуществить доставку как можно быстрее, обычно в пределах нескольких дней. Точные сроки будут согласованы с вами в процессе оформления заказа.', 'Біздің жеткізу уақытымыз нақты шарттар мен талаптарға байланысты. Біз мүмкіндігінше жылдам жеткізуге тырысамыз, әдетте бірнеше күн ішінде. Нақты күндер тапсырыс беру кезінде сізбен келісіледі.', 1),
(2, 'Какая информация требуется для расчета стоимости доставки?', 'Жеткізу құнын есептеу үшін қандай ақпарат қажет?', 'Для расчета стоимости доставки нам необходимы данные о месте отправления и назначения, характеристики груза, его вес и размеры. Также важно указать особые требования, если они есть, например, необходимость страхования груза.', 'Жеткізу құнын есептеу үшін бізге жөнелтілетін және тағайындалған жері, жүктің сипаттамалары, оның салмағы мен өлшемдері туралы деректер қажет. Сондай-ақ жүкті сақтандыру қажеттілігі сияқты арнайы талаптарды, егер бар болса, көрсету маңызды.', 1),
(3, ' Как вы обеспечиваете безопасность груза во время перевозки?', 'Тасымалдау кезінде жүктің сақталуын қалай қамтамасыз етесіз?', 'Мы придаем высокое значение безопасности груза. Используем специальные методы упаковки, страхование груза и надежные транспортные средства. Наша команда также следит за грузом на всех этапах перевозки, обеспечивая его сохранность и непрерывность доставки.', 'Біз жүк қауіпсіздігіне үлкен мән береміз. Біз арнайы орау әдістерін, жүкті сақтандыруды және сенімді көліктерді қолданамыз. Біздің команда сонымен қатар тасымалдаудың барлық кезеңдерінде жүкті бақылайды, оның сақталуын және жеткізілуінің үздіксіздігін қамтамасыз етеді.', 1),
(4, 'Предоставляете ли вы услуги складирования?', 'Сіз қойма қызметтерін көрсетесіз бе?', 'Да, мы предлагаем услуги складирования. У нас есть собственные современные складские помещения, где вы можете хранить свой груз на нужный период времени. Мы гарантируем безопасность и надлежащее обращение с вашими товарами.', 'Иә, біз қойма қызметтерін ұсынамыз. Бізде өз жүктеріңізді қалаған уақыт аралығында сақтауға болатын заманауи қоймаларымыз бар. Біз сіздің тауарларыңыздың қауіпсіздігіне және дұрыс өңделуіне кепілдік береміз.', 1),
(5, 'Какие виды грузов вы специализируетесь на перевозке?', 'Сіз қандай жүк түрлерін тасымалдауға маманданасыз?', 'Мы специализируемся на перевозке различных видов грузов, включая товары на палетах, контейнеры, сырье, оборудование и многое другое. Независимо от размера, формы или типа груза, мы разработаем оптимальное решение для его безопасной и своевременной доставки.', 'Біз жүктердің әртүрлі түрлерін, соның ішінде паллеттерде, контейнерлерде, шикізатта, жабдықтарда және т.б. жүктерді тасымалдауға маманданамыз. Жүктің өлшеміне, пішініне немесе түріне қарамастан, біз оны қауіпсіз және уақтылы жеткізу үшін оңтайлы шешім әзірлейміз.', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `feature`
--

CREATE TABLE `feature` (
  `id` int NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `title_kk` varchar(255) DEFAULT NULL,
  `subdescrip_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `subdescrip_kk` varchar(255) DEFAULT NULL,
  `descrip_ru` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `descrip_kk` text,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `feature`
--

INSERT INTO `feature` (`id`, `img`, `title_ru`, `title_kk`, `subdescrip_ru`, `subdescrip_kk`, `descrip_ru`, `descrip_kk`, `status`) VALUES
(1, 'features-1.jpg', 'Надежность и безопасность', 'Сенімділік пен қауіпсіздік', 'Мы понимаем, что ваш груз имеет для вас большую ценность.', 'Сіздің жүктеріңіз сіз үшін өте құнды екенін түсінеміз.', 'Поэтому мы придаем высочайшее значение его безопасности и целостности. Наша команда профессионалов тщательно следит за каждым шагом доставки, начиная с сбора и упаковки груза и заканчивая его надежной доставкой в пункт назначения. Мы используем передовые технологии и строгое контролируем каждый этап процесса, чтобы гарантировать, что ваш груз будет доставлен в сохранности.', 'Сондықтан біз оның қауіпсіздігі мен тұтастығына жоғары мән береміз. Біздің кәсіпқойлар командасы жүкті жинау мен ораудан бастап, белгіленген жерге сенімді жеткізуге дейін жеткізудің әрбір қадамын мұқият қадағалайды. Біз озық технологияны қолданамыз және сіздің жөнелтіңіздің қауіпсіз келуін қамтамасыз ету үшін процестің әрбір қадамын қатаң бақылаймыз.', 1),
(2, 'features-2.jpg', 'Гибкость и индивидуальный подход', 'Икемділік және жеке көзқарас', 'Мы понимаем, что каждый клиент уникален и имеет свои особые потребности. ', 'Біз әр клиенттің бірегей және өзінің ерекше қажеттіліктері бар екенін түсінеміз.', 'Поэтому мы предлагаем гибкий подход и индивидуальные решения. Наша команда готова адаптироваться к вашим требованиям и предложить оптимальный вариант доставки. Независимо от размера или характера вашего груза, мы разработаем наилучший маршрут и предоставим вам профессиональную консультацию по всем вопросам, связанным с доставкой.', 'Сондықтан біз икемді тәсіл мен теңшелген шешімдерді ұсынамыз. Біздің команда сіздің талаптарыңызға бейімделуге және жеткізудің ең жақсы нұсқасын ұсынуға дайын. Сіздің жүктің көлеміне немесе сипатына қарамастан, біз ең жақсы бағытты әзірлеп, жеткізуге қатысты барлық мәселелер бойынша кәсіби кеңес береміз.', 1),
(3, 'features-3.jpg', 'Широкий спектр услуг', 'Қызметтердің кең спектрі', 'Мы предлагаем разнообразные виды доставки, чтобы удовлетворить потребности наших клиентов.', 'Біз тұтынушылардың қажеттіліктерін қанағаттандыру үшін әртүрлі жеткізу нұсқаларын ұсынамыз.', 'Наша компания осуществляет международные грузоперевозки, региональную доставку и экспресс-доставку. Мы готовы доставить ваши грузы в любую точку мира или обеспечить оперативную доставку в пределах вашего региона. Наша команда специалистов знает, как эффективно управлять каждым видом доставки, чтобы гарантировать высокое качество и своевременность доставки.', 'Біздің компания халықаралық жүк тасымалдауды, аймақтық жеткізуді және жедел жеткізуді қамтамасыз етеді. Біз сіздің тауарларыңызды әлемнің кез келген нүктесіне жеткізуге немесе сіздің аймағыңызда жедел жеткізуді қамтамасыз етуге дайынбыз. Біздің мамандар тобы жоғары сапалы және уақтылы жеткізуді қамтамасыз ету үшін жеткізудің әрбір түрін тиімді басқаруды біледі.', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `plan`
--

CREATE TABLE `plan` (
  `id` int NOT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_kk` varchar(255) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `one_ru` varchar(255) DEFAULT NULL,
  `one_kk` varchar(255) DEFAULT NULL,
  `two_ru` varchar(255) DEFAULT NULL,
  `two_kk` varchar(255) DEFAULT NULL,
  `three_ru` varchar(255) DEFAULT NULL,
  `three_kk` varchar(255) DEFAULT NULL,
  `four_ru` varchar(255) DEFAULT NULL,
  `four_kk` varchar(255) DEFAULT NULL,
  `five_ru` varchar(255) DEFAULT NULL,
  `five_kk` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `plan`
--

INSERT INTO `plan` (`id`, `name_ru`, `name_kk`, `price`, `one_ru`, `one_kk`, `two_ru`, `two_kk`, `three_ru`, `three_kk`, `four_ru`, `four_kk`, `five_ru`, `five_kk`, `status`) VALUES
(1, 'Бесплатный план', 'Тегін жоспар', 0, 'Индивидуальные консультации доставки.', 'Жеткізу бойынша жеке кеңес.', 'Оптимизация складских процессов.', 'Қойма процестерін оңтайландыру.', 'Международные грузоперевозки с таможней.', 'Кедендік жүктерді халықаралық тасымалдау.', 'Профессиональная упаковка грузов.', 'Тауарларды кәсіби орау.', 'Мониторинг и отслеживание грузов.', 'Жүктерді бақылау және қадағалау.', 1),
(2, 'Бизнес-план', 'Бизнес жоспар', 29, 'Индивидуальные консультации доставки.', 'Жеткізу бойынша жеке кеңес.', 'Оптимизация складских процессов.', 'Қойма процестерін оңтайландыру.', 'Международные грузоперевозки с таможней.', 'Кедендік жүктерді халықаралық тасымалдау.', 'Профессиональная упаковка грузов.', 'Тауарларды кәсіби орау.', 'Мониторинг и отслеживание грузов.', 'Жүктерді бақылау және қадағалау.', 1),
(3, 'План разработчика', 'Әзірлеуші ​​жоспары', 45, 'Индивидуальные консультации доставки.', 'Жеткізу бойынша жеке кеңес.', 'Оптимизация складских процессов.', 'Қойма процестерін оңтайландыру.', 'Международные грузоперевозки с таможней.', 'Кедендік жүктерді халықаралық тасымалдау.', 'Профессиональная упаковка грузов.', 'Тауарларды кәсіби орау.', 'Мониторинг и отслеживание грузов.', 'Жүктерді бақылау және қадағалау.', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `planel`
--

CREATE TABLE `planel` (
  `id` int NOT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_kk` varchar(255) DEFAULT NULL,
  `planname_id` int DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `planel`
--

INSERT INTO `planel` (`id`, `name_ru`, `name_kk`, `planname_id`, `status`) VALUES
(1, 'Индивидуальные консультации доставки.', 'Жеткізу бойынша жеке кеңес.', 1, NULL),
(2, 'Оптимизация складских процессов.', 'Қойма процестерін оңтайландыру.', 1, NULL),
(3, 'Международные грузоперевозки с таможней.', 'Кедендік жүктерді халықаралық тасымалдау.', 1, NULL),
(4, 'Профессиональная упаковка грузов.', 'Тауарларды кәсіби орау.', 1, 1),
(5, 'Мониторинг и отслеживание грузов.', 'Жүктерді бақылау және қадағалау.', 1, 1),
(6, 'Индивидуальные консультации доставки.', 'Жеткізу бойынша жеке кеңес.', 2, NULL),
(7, 'Оптимизация складских процессов.', 'Қойма процестерін оңтайландыру.', 2, NULL),
(8, 'Международные грузоперевозки с таможней.', 'Кедендік жүктерді халықаралық тасымалдау.', 2, 1),
(9, 'Профессиональная упаковка грузов.', 'Тауарларды кәсіби орау.', 2, NULL),
(10, 'Мониторинг и отслеживание грузов.', 'Жүктерді бақылау және қадағалау.', 2, NULL),
(11, 'Индивидуальные консультации доставки.', 'Жеткізу бойынша жеке кеңес.', 3, 1),
(12, 'Оптимизация складских процессов.', 'Қойма процестерін оңтайландыру.', 3, NULL),
(13, 'Международные грузоперевозки с таможней.', 'Кедендік жүктерді халықаралық тасымалдау.', 3, 1),
(14, 'Профессиональная упаковка грузов.', 'Тауарларды кәсіби орау.', 3, NULL),
(15, 'Мониторинг и отслеживание грузов.', 'Жүктерді бақылау және қадағалау.', 3, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `planname`
--

CREATE TABLE `planname` (
  `id` int NOT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_kk` varchar(255) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `planname`
--

INSERT INTO `planname` (`id`, `name_ru`, `name_kk`, `price`, `status`) VALUES
(1, 'Бесплатный план', 'Тегін жоспар', 0, 1),
(2, 'Бизнес-план', 'Бизнес жоспар', 29, 1),
(3, 'План разработчика', 'Әзірлеуші ​​жоспары', 45, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `quote`
--

CREATE TABLE `quote` (
  `id` int NOT NULL,
  `departure` varchar(255) DEFAULT NULL,
  `delivery` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `dimension` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `message` text,
  `answer` text,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `quote`
--

INSERT INTO `quote` (`id`, `departure`, `delivery`, `weight`, `dimension`, `name`, `email`, `phone`, `message`, `answer`, `status`) VALUES
(1, 'dsf', 'fsdf', 'dsfds', 'fdsf', 'fds', 'fds', 34, 'dsf', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name_kk` varchar(255) DEFAULT NULL,
  `job_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `job_kk` varchar(255) DEFAULT NULL,
  `rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `review_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `review_kk` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id`, `img`, `name_ru`, `name_kk`, `job_ru`, `job_kk`, `rate`, `review_ru`, `review_kk`, `status`) VALUES
(1, 'testimonials-1.jpg', 'Сол Гудман', 'Сол Гудман', 'Дизайнер', 'Дизайнер', '5', 'Очень довольны качеством услуги доставки! Груз прибыл вовремя и без повреждений. Профессиональный и дружелюбный персонал. Рекомендуем!', 'Жеткізу қызметінің сапасына өте ризамын! Жеткізу уақытылы және зақымсыз келді. Кәсіби және мейірімді қызметкерлер. Ұсынылады!', 1),
(2, 'testimonials-2.jpg', 'Сара Уилсон', 'Сара Уилсон', 'Менеджер', 'Менеджер', '5', '\"Отличная компания по логистике. Сотрудничаем уже несколько лет и всегда получаем высокий уровень сервиса. Быстрые реакции на запросы и оперативные решения любых проблем. Спасибо!', '\"Тамаша логистикалық компания. Біз бірнеше жыл бойы бірге жұмыс істеп келеміз және әрқашан жоғары деңгейде қызмет көрсетеміз. Сұраныстарға жылдам жауаптар және кез келген мәселелерді жедел шешу. Рахмет!', 1),
(3, 'testimonials-3.jpg', 'Йена Карлис', 'Йена Карлис', 'Владелец магазина', 'Дүкен иесі', '4', 'Хотелось бы выразить благодарность команде за профессионализм и ответственность. Наш груз был доставлен точно в срок и в полной сохранности. Очень рекомендуем!', 'Хочу выразить благодарность коллективу за профессионализм и ответственность. Наш груз был доставлен точно в срок и в полной сохранности. Настоятельно рекомендуется!', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id` int NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `title_kk` varchar(255) DEFAULT NULL,
  `desc_ru` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `desc_kk` text,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id`, `img`, `title_ru`, `title_kk`, `desc_ru`, `desc_kk`, `status`) VALUES
(1, 'storage-service.jpg', 'Хранение', 'Сақтау', 'Надежное и безопасное хранение вашего груза на наших современных складах.', 'Біздің заманауи қоймаларымызда жүктеріңізді сенімді және қауіпсіз сақтау.', 1),
(2, 'logistics-service.jpg', 'Логистика', 'Логистика', 'Оптимизация и эффективное планирование доставки, чтобы ваш груз прибыл вовремя и в идеальном состоянии.', 'Жеткізуіңіздің уақытында және мінсіз күйде келуін қамтамасыз ету үшін оңтайландыру және жеткізуді тиімді жоспарлау.', 1),
(3, 'cargo-service.jpg', 'Груз', 'Жүк', 'Качественная обработка и бережная доставка вашего груза с учетом его особенностей и требований.', 'Оның ерекшеліктері мен талаптарын ескере отырып, жүкті сапалы өңдеу және мұқият жеткізу.', 1),
(4, 'trucking-service.jpg', 'грузоперевозки', 'Жүк тасымалдау', 'Надежные грузоперевозки на разные расстояния с использованием современного транспорта и опытных водителей.', 'Заманауи көлік пен тәжірибелі жүргізушілердің көмегімен әртүрлі қашықтыққа сенімді жүк тасымалдау.', 1),
(5, 'packaging-service.jpg', 'Упаковка', 'Қаптау', 'Профессиональная упаковка вашего груза, обеспечивающая его защиту и сохранность во время перевозки.', 'Жүкті кәсіби орау, тасымалдау кезінде оның қорғалуын және қауіпсіздігін қамтамасыз ету.', 1),
(6, 'warehousing-service.jpg', 'Складирование', 'Қойма', 'Безопасное и организованное складирование вашего груза на наших современных складах с системой контроля и доступа.', 'Бақылау және кіру жүйесі бар заманауи қоймаларда жүктеріңізді қауіпсіз және ұйымдасқан түрде сақтау.', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `team_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `icon`, `link`, `team_id`) VALUES
(1, 'bi bi-twitter', '1', 1),
(2, 'bi bi-facebook', NULL, 1),
(3, 'bi bi-instagram', NULL, 1),
(4, 'bi bi-linkedin', NULL, 1),
(5, 'bi bi-twitter', NULL, 2),
(6, 'bi bi-facebook', NULL, 2),
(7, 'bi bi-instagram', NULL, 2),
(8, 'bi bi-linkedin', NULL, 2),
(9, 'bi bi-twitter', NULL, 3),
(10, 'bi bi-facebook', NULL, 3),
(11, 'bi bi-instagram', NULL, 3),
(12, 'bi bi-linkedin', NULL, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `id` int NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name_ru` varchar(255) DEFAULT NULL,
  `name_kk` varchar(255) DEFAULT NULL,
  `job_ru` varchar(255) DEFAULT NULL,
  `job_kk` varchar(255) DEFAULT NULL,
  `phrase_ru` varchar(255) DEFAULT NULL,
  `phrase_kk` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `img`, `name_ru`, `name_kk`, `job_ru`, `job_kk`, `phrase_ru`, `phrase_kk`, `status`) VALUES
(1, 'team-1.jpg', 'Уолтер Уайт', 'Уолтер Уайт', 'Веб-разработка', 'Веб әзірлеу', 'Наша команда готова воплотить ваши доставочные мечты в реальность!', 'Біздің команда сіздің жеткізу арманыңызды жүзеге асыруға дайын!', 1),
(2, 'team-2.jpg', 'Сара Джинсо', 'Сара Джинсо', 'Маркетинг', 'Маркетинг', 'Моя цель - обеспечить безупречное состояние каждого груза, будь то маленькая посылка или крупный контейнер', 'Менің мақсатым - әрбір жөнелтілім мінсіз жағдайда болуын қамтамасыз ету, ол шағын пакет немесе үлкен контейнер болсын.', 1),
(3, 'team-3.jpg', 'Уильям Андерсон', 'Уильям Андерсон', 'Контент', 'Контент', 'Работая в области складирования, я гарантирую, что ваш груз будет храниться с максимальной осторожностью и организацией.', 'Қойма саласында жұмыс істей отырып, мен сіздің жүктеріңіздің барынша мұқият және ұйымшылдықпен сақталуына кепілдік беремін.', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `counts`
--
ALTER TABLE `counts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `planel`
--
ALTER TABLE `planel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `planname`
--
ALTER TABLE `planname`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `action`
--
ALTER TABLE `action`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `counts`
--
ALTER TABLE `counts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `planel`
--
ALTER TABLE `planel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `planname`
--
ALTER TABLE `planname`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
