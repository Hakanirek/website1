<?php
define('WP_CACHE', true);
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'u8808450_z10wordpressnew' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'u8808450_newwpus' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'eWtJ~SQ%GrWX' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pE>Z]$zp~ygkehI9Bj+VvxW`ULqJJ|,4 )?hKT!h2ZsfleiB$;yT$|1azyQbY3P^' );
define( 'SECURE_AUTH_KEY',  '5]]UWZXdT~p>$Z($ ^Ku,M(T:L2o<t2AU1h>u_9EqF>6s^{-jtfZY5we95t<kBzD' );
define( 'LOGGED_IN_KEY',    'sfOYp*A8}*!e.r$hY+g~JTgoC)-;vB(qov1cX)j7X!vYokBUXWbU7`7,l95uSl)b' );
define( 'NONCE_KEY',        'rH;&lO*paME,L=&46&hW:r^w)Fnw>lkUA8Tnjq51DH95C>NIN6u!42ADlvm4,X{i' );
define( 'AUTH_SALT',        '=$V=f~QCudU3>EZht_4:@@,Pag)JfXxmms=oitp4y~c^>f1@!3uKt=:nrM==H}w^' );
define( 'SECURE_AUTH_SALT', 'V#_pD>~x(C#d%wo/Ll^h)U{$$Hh<F*#qMM`>{i</e`?4H2I^}7<)NqE5Kh&:d%iB' );
define( 'LOGGED_IN_SALT',   '57!t1tmS<^BK%`chOysZhy$~BN3~Pep@OIdK)Ge5vVWm$qlG*.5ljc0M*$UI99)1' );
define( 'NONCE_SALT',       'oyZaP)[>$*I!A:%R)~;F+a|Z`SBV$%is>!j2^k.k3b#<Cipg},XK|Tngr,@P kK!' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
