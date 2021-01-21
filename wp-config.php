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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'webshpora' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%MrkFG,tmmdM^`H7 * t>L|WA.2HifJ7k;u00{]}h&n^jZl$+Y06q,Q5PIbTFre}' );
define( 'SECURE_AUTH_KEY',  'ScK(1${vivSY@G?x=z>%nm.KM7(Z:P_1~ai)OD[2?J]],#1Aq~)2fq#4!d>6>`Ei' );
define( 'LOGGED_IN_KEY',    'V/BG%x,]C?DWb8HkV](2StG0koN9}ct Pe }L)H&ft3hg(&qcda+|>BEW.Gma|N:' );
define( 'NONCE_KEY',        '%|W(CAfCfg=~gO}cj~<>Bv9wCZ[-9;A,7H3ZsI]|?vu#dlSyvZp`sM0qHg!Qo,Mp' );
define( 'AUTH_SALT',        '$%r/@VXI0Qx}Ldi?zEC)DHKCOi&nh[`QsS@PP }~__]FFEKA|bn0>n%TkUJj<*,k' );
define( 'SECURE_AUTH_SALT', '[f0mrF;VHd`(IN6Gd#hzr<lEX$|mnY <bq]M[_Q(%:3>msVa^3tWC<Nf*ucJVRn_' );
define( 'LOGGED_IN_SALT',   '?sh{-`p<^RMPqQ3)Y$Z>nQXwoXaXad@g{ZQLw*WAX]!3^d<de&W)n8z6CoT4$xZV' );
define( 'NONCE_SALT',       '!@F$1C3X0y)cR~U/Ev}1EYwwsdz4h<$6muR5yd;X:An&xo1]-M[~Mv.qeHdC~=^[' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
