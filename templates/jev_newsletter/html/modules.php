<?php
defined('_JEXEC') or die('Restricted access');

function modChrome_content($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) : ?>
			<?php if ($module->showtitle) : ?>
			<tr>
				<td colspan="2">
					<h<?php echo $headerLevel; ?> class='moduletitle'><?php echo $module->title; ?></h<?php echo $headerLevel; ?>>
				</td>
			</tr>
			<?php endif; ?>
			<?php echo $module->content; ?>
	<?php endif;
}
