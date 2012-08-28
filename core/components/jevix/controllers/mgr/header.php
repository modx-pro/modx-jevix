<?php
/**
 * Loads the header for mgr pages.
 *
 * @package jevix
 * @subpackage controllers
 */
$modx->regClientCSS($Jevix->config['cssUrl'].'mgr.css');
$modx->regClientStartupScript($Jevix->config['jsUrl'].'mgr/jevix.js');
$modx->regClientStartupHTMLBlock('<script type="text/javascript">
Ext.onReady(function() {
    Jevix.config = '.$modx->toJSON($Jevix->config).';
    Jevix.config.connector_url = "'.$Jevix->config['connectorUrl'].'";
    Jevix.action = "'.(!empty($_REQUEST['a']) ? $_REQUEST['a'] : 0).'";
});
</script>');

return '';