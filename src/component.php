<?php
/**
 * @package     kaiser
 * @author      Robin Jungermann
 * @link        http://www.crosstec.de
 * @license     GNU/GPL
*/
defined('_JEXEC') or die;

$templateURL = $this->baseurl."/templates/".$this->template;
?>
<!doctype html>

<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/layout.css.php?sitewidth=<?php echo $this->params->get('sitewidth'); ?>&amp;sitewidth_unit=<?php echo $this->params->get('sitewidth_unit'); ?>" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/colors.css.php?color=<?php echo $this->params->get('color', 'bbff00'); ?>&amp;content_color=<?php echo $this->params->get('content_color', '5bae98'); ?>&amp;base_color=<?php echo $this->params->get('base_color', '6b7e8f'); ?>&amp;bg_style=<?php echo $this->params->get('bg_style','03'); ?>&amp;templateurl=<?php echo $templateURL; ?>" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" media="screen, projection" />

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/formelements.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/contentbuilder_support.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/content_types.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/cssmenu.css" type="text/css" media="screen, projection" /> 

<!--[if lt IE 9]>
    <style type="text/css">
    ul.menu {
    	-webkit-border-radius: 0px;
		-moz-border-radius: 0px;
		border-radius: 0px; 
   	}
    ul.menu, ul.menu ul, .moduletable_ct_darkBox, .moduletable_ct_lightBox, ul.pagenav li a,
    input.button, button, #login-form.compact .button, #ct_headerLogin input.button, .tip  {
        behavior:url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/pie/PIE.php);
    }  
    </style>
<![endif]-->

<!--[if lte IE 8]>
    <style type="text/css">
    ul.menu {
    	-webkit-border-radius: 0px;
		-moz-border-radius: 0px;
		border-radius: 0px; 
   	}

    ul.menu, .moduletable_ct_darkBox, .moduletable_ct_lightBox, ul.pagenav li a,
    input.button, button, #login-form.compact .button, #ct_headerLogin input.button, .tip  {
        behavior:url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/pie/PIE.php);
    }
    
    </style>
<![endif]-->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/print.css" type="text/css" media="Print" />
</head>
<body class="contentpane">
	<jdoc:include type="message" />
    <div class="ct_popup_bg" style="margin: 0; padding: 0 10px;">
        <jdoc:include type="component" />
	</div>
</body>
</html>