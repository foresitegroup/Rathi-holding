<?php
function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <title>Rathi North America<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="//fonts.googleapis.com/css?family=Kanit:300,500,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">
  </head>
  <body>

    <div class="site-width">
      <img src="images/trim.png" alt="" id="trim-top">
      <img src="images/trim.png" alt="" id="trim-bot">

      <div id="left">
        <img src="images/logo.png" alt="Rathi North America" id="logo">

        <h1>Contact</h1>

        <h2>Bobby Brown</h2>
        <h3>Vice President - Sales</h3>
        1.281.690.0741<br>
        <?php email("bjb@rathi-na.com"); ?><br>
        <br>

        Rathi North America<br>
        N56W13855 Silver Spring Dr.<br>
        Menomonee Falls, WI 53051
      </div>

      <div id="mid">
        <h1>Global Quality Couplings.</h1>
        Rathi North America offers a wide range of standard elastomeric and metallic couplings with time-tested, off-the-shelf designs. Local distribution and technical support is focused on serving OEMs, Distributors, and End User customers. Five decades of integrated manufacturing experience provides optimal quality and performance.
      </div>

      <div id="right">
        <div class="coupling" style="background-image: url(images/elastomeric-coupling.png);">
          <div>Elastomeric Couplings</div>
        </div>

        <div class="coupling" style="background-image: url(images/metallic-coupling.png);">
          <div>Metallic Couplings</div>
        </div>
      </div>
    </div>

  </body>
</html>