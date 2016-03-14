<meta charset="utf-8" />
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="icon" href="img/favicon.ico">
<meta name="author" content="Jessy Lachapelle, Dereck Pouliot, Alizée Fournier et Marc Dupuis" />
<meta name="robots" content="index, follow" />
<link rel="stylesheet" href="css/open-iconic.css"/>
<?php
require_once 'lib/mobileDetect.php';
$device = new Mobile_Detect;

if($device->isTablet()) {
  include  "inc/mhead.php";
  echo "<link rel='stylesheet/less' href='css/mobile.less' media='(orientation : portrait)' charset='utf-8' />
        <link rel='stylesheet/less' href='css/desktop.less' media='(orientation : landscape)' charset='utf-8' />";
} elseif($device->isMobile()) {
  include  "inc/mhead.php";
  echo "<link rel='stylesheet/less' href='css/mobile.less' charset='utf-8' />";
} else
  echo "<link rel='stylesheet/less' href='css/desktop.less' charset='utf-8' />";
?>
<script src="js/jquery.js"></script>
<script src="js/slideout.js"></script>
<script src="js/less.js"></script>
<script src="js/tablesorter.js"></script>
<script type="text/javascript" defer="defer" src="js/script.js"></script>
