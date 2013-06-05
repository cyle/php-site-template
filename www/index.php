<?php

/* this also serves as a generic page template */

require_once('../config/config.php');

// you might want one of these or something
//require_once('../www-includes/dbconn_mongo.php');
//require_once('../www-includes/dbconn_mysql.php');

require('head.php');
require('header.php');
?>

<div id="content">
<h2>a sub-header</h2>
<p>some content, lol</p>
</div>

<?php require('footer.php'); ?>