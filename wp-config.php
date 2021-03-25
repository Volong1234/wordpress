<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'shop' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';3;6P{nf/d?_xk|Z_(WDh<b3H#TpH7xA2gO3q3SfAMX92|9y6*/Hk#/2Ni+H%HlH' );
define( 'SECURE_AUTH_KEY',  'r&+`OETPn|sbpgMgO|e/4,O0x^6Zj^:MOQl]*@HbV+|mD I~ziByP3I$yEH>`ME|' );
define( 'LOGGED_IN_KEY',    '*<.wT_{;.<d&z#5[M:t5X IqpNGyV%5Nig|zRojZo$;,f$D+XR$vOY7N}Gx.-?e$' );
define( 'NONCE_KEY',        'tx=HYd73T~L9Me=PrUf|5Sw{)^x@*h|o3Z}U1RvDvK6VCC_%`20~jCJp&;4}CZq7' );
define( 'AUTH_SALT',        '4~)T$Am<2JfGJY~{pI^$8eH!Hl+bx>OjN5uEd<O^vx~{in^[$:Q8A8GA-.|[s6xk' );
define( 'SECURE_AUTH_SALT', '}FWk]o>^9iGNxgo8pt:K~@]+w*!:6Mu07EvJEnk[=cRaQ#(SR_<Ex[-iDhvvW-<{' );
define( 'LOGGED_IN_SALT',   'sIQ>KU)*425C Xsu68_(jW1}J^#(WyxFGzB#v0VWQQ7c/k,#]xS& N*5$SAq%I b' );
define( 'NONCE_SALT',       ': |[N[e~q>YN8!JXW4o8pCh;>@tzJhyp.vA<{*CXfb }J;)T.|yD*^<wHgU!_O|#' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
