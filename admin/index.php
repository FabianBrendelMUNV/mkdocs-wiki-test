<?php
	session_start();
	if (!$_SESSION['login']) {
		$dirname = $_SERVER['REQUEST_URI'];

		if (substr($dirname, -1) != '/') {
			$dirname=dirname($dirname).'/';
		} else {
			$dirname = preg_replace('~/+~', '/', $dirname);
		}

		header("Location: ".$dirname."../login.php?redirect=admin/index.php");
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/@staticcms/app@^2.3.0/dist/main.css" />
    <title>Content Manager</title>
  </head>
  <body>
    <!-- Include the script that builds the page and powers Static CMS -->
    <script src="https://unpkg.com/@staticcms/app@^2.3.0/dist/static-cms-app.js"></script>
    <script>
      window.CMS.init();
    </script>
  </body>
</html>
