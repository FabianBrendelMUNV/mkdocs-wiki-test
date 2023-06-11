<?php
	session_start();
	if (!$_SESSION['login']) {
		$dirname = $_SERVER['REQUEST_URI'];

		if (substr($dirname, -1) != '/') {
			$dirname=dirname($dirname).'/';
		} else {
			$dirname = preg_replace('~/+~', '/', $dirname);
		}

		header("Location: ".$dirname."login.php?redirect=index.php");
	}
?>
<!DOCTYPE html>
<html>

<head>
  <title>MaaS NRW Wiki Preview Version</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

    body {
      background-color: #00628b;
    }

    h1 {
      color: #fd7e14;
      text-align: center;
      font-family: 'Roboto', sans-serif;
      font-size: xxx-large;
    }

    a {
      color: #fd7e14;
      text-align: center;
      font-family: 'Roboto', sans-serif;
      font-size: xx-large;
    }

    a.visited {
      color: #fd7e14;
      text-align: center;
      font-family: 'Roboto', sans-serif;
      font-size: xx-large;
    }

    .disclaimer {
      color: white;
      max-width: 750px;
      margin: 40px;
      border: 3px solid #EC6608;
      text-align: justify;
      font-family: 'Roboto', sans-serif;
      font-size: x-large;
    }
  </style>
</head>

<body>
  <br />
  <br />
  <br />
  <br />
  <br />
  <h1>MaaS NRW Wiki - Preview Version</h1>
  <center>
    <div class="disclaimer" >
      Dies ist die Preview-Version des MaaS NRW Wikis.<br /> <br/> Sie ist nur f&uuml;r den internen Gebrauch bestimmt und kann unrichtige,
      veraltete Informationen oder alternative Fakten beinhalten.
    </div>
    <br />
    <br />
    <a <a href="/index.live/">OK, verstanden!</a>
    <br />
    <br />
    <br />
    <a <a href="https://maas.mobil.nrw/">Ich will hier lieber weg!</a>
  </center>
</body>

</html>