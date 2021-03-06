<?php
/**
 * Elgg Tracker plugin
 * @license: GPL v 2.
 * @author slyhne
 * @copyright tiger-inc.eu
 * @link http://tiger-inc.eu
 */

// Simple IP address search

$ip_string = elgg_echo('tracker:search:ip');
$ip_info = elgg_echo('tracker:search:info');

// Get IP address
$ip_address = get_input('ip');

// Get URL for IP information
$tracker_url = sprintf(elgg_get_plugin_setting('tracker_url', 'tracker'), $ip_address);

// Create tracker link
$tracker_link = "<a href='{$tracker_url}' target='_blank' class='elgg-button elgg-button-action' />$ip_info</a>";

?>

<h5><?php echo elgg_echo('tracker:searchip'); ?></h5>
<form id="trackersearchform" action="<?php echo elgg_get_site_url(); ?>tracker/" method="post">
	<input class="mbm" type="text" name="ip" value="<?php echo $ip_address; ?>" class="search_input" />
	<input type="submit" class="elgg-button elgg-button-submit" value="<?php echo elgg_echo('search'); ?>" />
</form>

<br>
<?php
	echo $tracker_link;
?>
<br><br>
