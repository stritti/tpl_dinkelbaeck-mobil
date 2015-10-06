<?php
/**
 * @package     kaiser
 * @author      Robin Jungermann
 * @link        http://www.crosstec.de
 * @license     GNU/GPL
*/

// no direct access
defined('_JEXEC') or die;

$images = json_decode($item->images);
?>
<?php if ($params->get('item_title')) : ?>

	<<?php echo $params->get('item_heading'); ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
	<?php if ($params->get('link_titles') && $item->link != '') : ?>
		<a href="<?php echo $item->link;?>">
			<?php echo $item->title;?></a>
	<?php else : ?>
		<?php echo $item->title; ?>
	<?php endif; ?>
	</<?php echo $params->get('item_heading'); ?>>

<?php endif; ?>

<div class="ct_newsflashItemWrapper" style="width:100%">

<?php if (!$params->get('intro_only')) :
	echo $item->afterDisplayTitle;
endif; ?>

<?php echo $item->beforeDisplayContent; ?>

<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
	<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
	<div class="img-intro-<?php echo htmlspecialchars($imgfloat); ?>" style="width:100%">
	<a href="<?php echo $item->link;?>"><img title="<?php echo htmlspecialchars($images->image_intro_caption); ?>"
		src="<?php echo htmlspecialchars($images->image_intro); ?>" 
		alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/></a>
	</div>
<?php endif; ?>

<?php echo $item->introtext; ?>

<?php if (isset($item->link) && $item->readmore && $params->get('readmore')) :
	echo '<a class="readmore" href="'.$item->link.'">'.$item->linkText.'</a>';
endif; ?>
</div>