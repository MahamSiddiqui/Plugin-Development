<?php
// if uninstall ot called from WordPress exit.
if (!define('WP_UNINSTALL_PLUGIN'))
exit();
delete_option('mfp_option');
?>