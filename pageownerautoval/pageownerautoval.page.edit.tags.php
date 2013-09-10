<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=page.edit.tags
[END_COT_EXT]
==================== */

if ($pag['page_state'] == 0 && $pag['page_ownerid'] == $usr['id'])
{
	$usr_can_publish = TRUE;
}