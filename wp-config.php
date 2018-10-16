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
define('DB_NAME', 'creon');

/** Имя пользователя MySQL */
define('DB_USER', 'creon');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Gx86Ffl8lJC1WVOq');

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
define('AUTH_KEY',         '[sMWDAe:m(G?478%d,H8U(@W{vAN>^S-+bD$4s9-{s]T$uJ^E?u/z{ar~HDBer{_');
define('SECURE_AUTH_KEY',  'nMDGM/j[s(fq(PZSJ$_P{jxv0r6Bq_[vD+n{gdIs`7a[2`n[cE@i}k;&%?*YIf[z');
define('LOGGED_IN_KEY',    'pHhvTz*@HQcA*sgcNw2uWwmbs:=+] hMBR99><76W^=;8/hV<Vm$8w)c#4myZ6TW');
define('NONCE_KEY',        '0UoFS6p`LOE^X@vrhe{.)kVj%He)m$b>-(5?}INcL,N)G>#(1s )^4>Lrx(Oah[n');
define('AUTH_SALT',        'qirl11f8m;^M:H[vh3VZk]Q@TFj*@ji!:xCSJ%JzQ(;VMDZnT6d<wNtSKVW-d7n,');
define('SECURE_AUTH_SALT', 'O#p-QAFNC8w8N4iWP6 ?6w,lABazDf:>}+_:>g)DLgv,,W#|`=y%#V!$>`l,=TFr');
define('LOGGED_IN_SALT',   '8z3Gf=4&;[tP1Vq)C>OBa7!R.-~vg`TAFkX3Do2 ,g*yc}yv,mztJ+9]tmj&_hIu');
define('NONCE_SALT',       'n/1ARyzOPLx$X<1i,dEg4hN*k>.uiiq<_<er5FCWQE0:s?=<nh#SzFC;Y2aKBQtX');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
