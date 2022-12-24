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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'apple' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '?h$UrTjr!ct{^7?<YK)*vvOo]fHeIhtc  P+u*zHw%^}2Jtw5(B~uf!m}-[d=0a>' );
define( 'SECURE_AUTH_KEY',  '@~!sF}07D~OK(c-[I;06PHE^4Ao?1XWn}/-%E.AY*`b{-2.*g_iBRk-B<wGlE/y]' );
define( 'LOGGED_IN_KEY',    'ACiFW!@PaD m=5Y-#3tcLR6%/Tn)`_Rxu$)]jH-?La8>@en7XK61l?~{V@uaJNs3' );
define( 'NONCE_KEY',        '~6/yLMMaj*qJ4N^>Cq{>%p_~%>bA}hdP!Ol!GrOlbkbF}Ulvk&7Ie._ZRTzS5NHL' );
define( 'AUTH_SALT',        'k1p;_1%w%X3HXJrG^BYB@4tD96R&.Ha,k%@)V4mtP`c^C,)#vr}sS9sWKU]&1!q&' );
define( 'SECURE_AUTH_SALT', '=+-N!lVm,eNN_GkvkFZZl?+Yqx;?#G~m Q#6:zm.uS-jvd|a0`r/;)oQWI/WYr^9' );
define( 'LOGGED_IN_SALT',   'jpiH>+N:E@k6)$d j;3`v%.7l:W_rnYE,@u}@ZmH_he{K#ygm@r}!t;e;FL[6KfT' );
define( 'NONCE_SALT',       'fs+IIOGIO/`fe=]v`mu~g{X01|z`M}blkxG@DT`,~=2~V(`_0?H1F`C[yq2B^e.u' );

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
