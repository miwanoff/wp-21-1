<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-21-1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&!!bcc-]IB&AZ;sH$y9CCo>yAt+r-}}h6R-.Mw62-:{@518}Zl k>YW!b[E0=f;z' );
define( 'SECURE_AUTH_KEY',  '#R[7<LZ4] {Ci? :{@k?lS^mB,@OK>9|<(|6<ygxGxaV?lElT,1KmbN2^Iy}PKeM' );
define( 'LOGGED_IN_KEY',    'R<ry(,yR^v/e1SJ2qldfP8<(SF{A(1dx[aHC.;2[<q|hR5R3k2?>eXH95+V.3;.7' );
define( 'NONCE_KEY',        'dLZ^d;*&N/6`fH;TMY2&Nop1KWmf*>jV2(ff3T-Ge5:XT/t!c?Oyh1xB<nI~a!Yc' );
define( 'AUTH_SALT',        '0G]jAZO/IDD!fHgggrC:!CaR%FaD1Y*9z67e8bF+mh:wV@!BgisC)617>&sq;R2l' );
define( 'SECURE_AUTH_SALT', 't[|mOXRb-TfBsd>mNGC!<*Vi2H-H?nxo@TIZ+3iwfiw%]CW?*rKULH32h)UcHJGj' );
define( 'LOGGED_IN_SALT',   '(n{PN1;@ewCp.fA;@WN,wlrguuzm>a337`dQI=%Ew|*6ga)kI$%wMG~Y?VI$)pg-' );
define( 'NONCE_SALT',       '4&>VqOxeA@M*o^/TytH`O}(VC,#oQe3M~ Gnj;rx},}mAp0eA!YRBfemKd:bL#NL' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
