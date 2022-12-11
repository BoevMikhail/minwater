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
define( 'DB_NAME', 'minwater__bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '<d#&SgpRdGpN8N_[=XEKd%DVVIf;cLkr2_&Vf)CbWA7xp%fXv_%;~M=,}6-yLFtR' );
define( 'SECURE_AUTH_KEY',  'S cn4+|-B[(Dq<E%wEh_:5#I]Zy`Y=X%^.kfq}zb)w6oICyFT<Xo#M_0ojnt}Q}f' );
define( 'LOGGED_IN_KEY',    '@]i]9u(YcfScCupf$n#n|?3*d@M{,Rb|)z)gmg6z^6u>n1,K-XRWY8qs4xJJJ/K5' );
define( 'NONCE_KEY',        'DJp^/]3r25Hb,l6Ev:ivdmwm}.,-R6DXp+B5/r ,J#i.VTM,@?`Dx#,%J9Q)?!c@' );
define( 'AUTH_SALT',        '[KPMB+i$ C2]@)Oysu}lg1qXMF ub%,+[0cQxdJN--7lQ x,@/Txq7q<}`o[=~@D' );
define( 'SECURE_AUTH_SALT', 'QFT>o.+VVM;{(lt(SyGM,r*0p^.m`&wS--lN58YLQEnhs+0t?74M@SC%=N^F^dQ^' );
define( 'LOGGED_IN_SALT',   'q3+F|Si.n3}2wmBBask1bj9dy%0yMohjTATu5w:Cvv:Jo4pyIVr%Vkn{>NnE-_)4' );
define( 'NONCE_SALT',       't/P9`An+gAc@I2*8QfU=s;$ZR][AZva$gL^n%)?h^l!;D[=pd?GLmm_clAFj8~cU' );

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
