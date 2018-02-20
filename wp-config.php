<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1234');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IZ(@ik>0wslPco7VHZJ M=6[~?eU^3+W4:t&$H9VK*2fvgdyj2|7^!.+KZp%j>04');
define('SECURE_AUTH_KEY',  ',UK`B_s@d?;/e]*}PQM$26?D/t[+[C>x0RBTy]BM>Jd%,=?f18gVuWt*?P5Xsfz!');
define('LOGGED_IN_KEY',    'pGOXl153oU0WWrGqqd!3V2Y?bGwzZ^FJ}7%jpNfd(MM}k29_Sm`Iz]-8q9v8jEPf');
define('NONCE_KEY',        's;)jEn0q}1d3IKWT^{{+>Ibc);dE<$j{4pt[rT=93fa]f]hvOcXwwcA9W[kS1_@x');
define('AUTH_SALT',        '`.N(<re7mQUId:aIMt<iM]uPl&(cc=x5O.#g~vka<q$mtG.iGeu@Q~I77nM6|>v3');
define('SECURE_AUTH_SALT', 's4hsf5LhW4XTS`waR^ bO:^~[cQx[&]&oS:p(-!h,gvWBkR5m2&b2WSbNy:wj)&{');
define('LOGGED_IN_SALT',   'VY)?z?q!*W7cb*TQd+0ZWIS};q$_~r*jm!Gf/Mgd+dbr[ls^E(JVHoU`!4yIi=ba');
define('NONCE_SALT',       '%*DH2M[(H<=PLF(oI[grNs]V.!3]%4@b8HLA~h#QtjkF#qZI,QrY8l=UfaW)(BIV');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
