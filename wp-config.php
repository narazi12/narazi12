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
define( 'DB_NAME', 'kappers1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', '192.168.0.106' );

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
define( 'AUTH_KEY',         'xvG-Pv5hscICOQyv4er>: RF@:pkgm-6sNl$2G@^p#~{Le@>2)iNw)}DY!JFU[/i' );
define( 'SECURE_AUTH_KEY',  'CpA}N,$zqzR+~4Y7vZw+0~D;3[.-@Sk*D1I!RU~wXtoP$!JL2!/!}.qUdi@-lF<V' );
define( 'LOGGED_IN_KEY',    '[22J*b<f&$G/~syG_wm[I)m0#a,[:^/[)@NDJuT:%t%!#hL>sEs?7T;K:mC :*i)' );
define( 'NONCE_KEY',        '3=2c=H~$1SGsM%:>k&J%S/q |Jvs3EWHoS@6op7n+vQ8AS=abIe[.idxZ43ou@E>' );
define( 'AUTH_SALT',        'ZsC.Hom#EcSjVhWA9I4zHHt[DwZyu,H#T9?3p*0+!DI/B3[4Z}v{ePmlkPizG}Kv' );
define( 'SECURE_AUTH_SALT', 'I&pemLG|7%q<BklZG;L^v=C8GT|E@,IK-9/S=:,JJgLf9$3Lx/[2O64g,>)wY~sT' );
define( 'LOGGED_IN_SALT',   'f+j(*rV @2sqY`M1YL#(!80`.l;yA-#Pnf>~*&vy{E#JAebp>SUUs9g$d0%ZnQS?' );
define( 'NONCE_SALT',       '9Rk<wH7ZmKH,a/XCWwqpXw7h/f8wFYUKM3inJd]9]WScMAi@o0>nVizgAwjaIEcH' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
