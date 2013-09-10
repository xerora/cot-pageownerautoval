<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=page.edit.update.done
[END_COT_EXT]
==================== */

global $usr, $_original_page_state;
if($rpage['page_state'] == 1 && $row_page['page_ownerid'] == $usr['id'] && $_original_page_state == 0 && $row['page_state'] == 0)
{
	$db->query("UPDATE $db_structure SET structure_count=structure_count+1 WHERE structure_code = ? AND structure_area = 'page'", $rpage['page_cat']);
	$db->update($db_pages, array('page_state' => 0), $id);
	$rpage['page_state'] = 0;
}