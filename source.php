<?php

if ($_POST['cSubscribe'] === 'Subscribe') {
    echo '<p>Thank you for subscribing</p>';
}
else {
    header('Refresh:0, url=/');
}