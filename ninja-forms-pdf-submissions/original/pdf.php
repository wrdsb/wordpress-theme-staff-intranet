<?php
/**
 * PDF Included With Form Submission
 *
 * @author 		Patrick Rauland
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<html><head>
	<link type="text/css" href="<?php echo $css_path; ?>" rel="stylesheet" />
</head><body>
	<h1><?php echo $title; ?></h1>
	<?php echo $table; ?>
</body></html>
