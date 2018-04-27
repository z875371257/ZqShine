<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'www_zqshine_com');

/** MySQL数据库用户名 */
define('DB_USER', 'www_zqshine_com');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'Zhou887459');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qw5w9Cqv1%=exU1.Z~|WcgKf.xPiyB*$Vjd{tM;hVAm@Z]J:vBHQ7MPw5~n/gmFV');
define('SECURE_AUTH_KEY',  'Zg>/y F4-:~dA!(gp@GLnvD4YwkG g:;@f=MJmy$OSL??Z(Ai 7e{`*g{*AFR&Y%');
define('LOGGED_IN_KEY',    '1MBYCzg2O$4ei]S(u1fH {XxerSMVRZjHSGTU,#3p5bsQ4qg@wTi(4daST)N:n/f');
define('NONCE_KEY',        '-A>{3@}7z.#Zy*amP06UEd>pkcv?+HOtU+ _JCs5~naDssZp-_YCH,%.8s?)0;i>');
define('AUTH_SALT',        'D5JpVh,nS4(X@+1{gI$N{.yP3/omj`x~0n9cONev#-FKmlTGA0`-dQ8O<a3V+[Uh');
define('SECURE_AUTH_SALT', 'drG;NRkGVk<fpd/~2b]<:Y03,3M=ywt$`6tFj>J:au9@l:1we&Xw~5v.s<N8BiU!');
define('LOGGED_IN_SALT',   'eiJ0Mh_^5,VG)SLLMiu}g<glb}95$qUy$vFu:[8@uJi]XfJmqIrW H<X+xCad$2>');
define('NONCE_SALT',       'WQsSevH?[t zeIB,hZ{: d/e)5tEo %1F$0VyCc?sT)F`Vj4_mvR5L1JqHuk<T3z');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
