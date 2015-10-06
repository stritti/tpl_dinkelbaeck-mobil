<?php
/**
 * @package     kaiser
 * @author      Robin Jungermann
 * @link        http://www.crosstec.de
 * @license     GNU/GPL
*/

// no direct access
defined('_JEXEC') or die;
$separator = '<div class="ct_breadcrumbsSeparator"></div>';

?>

<div class="breadcrumbs<?php echo $moduleclass_sfx; ?>">
<?php if ($params->get('showHere', 1))
	{
		echo '<span class="showHere">' .JText::_('MOD_BREADCRUMBS_HERE').'</span>';
	}
?>
<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<?php for ($i = 0; $i < $count; $i ++) :

	// If not the last item in the breadcrumbs add the separator
	if ($i < $count -1) {
		
		if (!empty($list[$i]->link)) {
			echo '<a href="'.$list[$i]->link.'" class="pathway" itemprop="url"><span itemprop="title">'.$list[$i]->name.'</span></a>';
		} else {
			echo '<span itemprop="title">'. $list[$i]->name . '</span>';
		}
		if($i < $count -2){
			echo '<span itemscope itemprop="child" itemtype="http://data-vocabulary.org/Breadcrumb">';
			echo ' '.$separator.' ';
		}
	}  else if ($params->get('showLast', 1)) { // when $i == $count -1 and 'showLast' is true
		echo '<span itemscope itemprop="child" itemtype="http://data-vocabulary.org/Breadcrumb">';
		if($i > 0){
			echo ' '.$separator.' ';
		}
		echo '<span itemprop="title">'.$list[$i]->name.'</span>';
	}
endfor;
for ($i = 0; $i < $count-2; $i ++) :
	echo '</span>';
endfor;
?>	
</span>
</div>
