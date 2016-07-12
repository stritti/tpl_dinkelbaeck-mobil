<?php
/**
 * @package     kaiser
 * @author      Robin Jungermann
 * @link        http://www.crosstec.de
 * @license     GNU/GPL
*/

defined('_JEXEC') or die;
JHTML::_('behavior.modal');
JHTML::_('behavior.framework', true);
//require_once(JPATH_SITE . DS . 'templates' . DS . $this->template . DS . 'system' . DS . 'recolor.php');
require_once(JPATH_SITE .  '/templates/' .  $this->template . '/system/recolor.php');
$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$highlights1ModuleCount = $this->countModules('highlights_1_1') + $this->countModules('highlights_1_2')
    + $this->countModules('highlights_1_3') + $this->countModules('highlights_1_4') 
    + $this->countModules('highlights_1_5') + $this->countModules('highlights_1_6');

$maincontent1ModuleCount = $this->countModules('maincontent_1_1') + $this->countModules('maincontent_1_2') 
        + $this->countModules('maincontent_1_3') + $this->countModules('maincontent_1_4') 
        + $this->countModules('maincontent_1_5') + $this->countModules('maincontent_1_6');

$maincontent2ModuleCount = $this->countModules('maincontent_2_1') + $this->countModules('maincontent_2_2') + $this->countModules('maincontent_2_3') + $this->countModules('maincontent_2_4') + $this->countModules('maincontent_2_5') + $this->countModules('maincontent_2_6');

$footerModuleCount = $this->countModules('footer_1_1') + $this->countModules('footer_1_2') 
        + $this->countModules('footer_1_3') + $this->countModules('footer_1_4') 
        + $this->countModules('footer_1_5') + $this->countModules('footer_1_6');

$contentLeft = 0;
$contentRight = 0;

if($this->countModules('left') > 0) {
	$contentLeft =	1;
}

if($this->countModules('right') > 0) {
	$contentRight =	1;
}
 
$moduleWidthcomponentContent = "ct_componentWidth_".(4 - ($contentLeft + $contentRight));

$templateURL = str_replace('/','_',$this->baseurl."/templates/".$this->template);

?>

<!doctype html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <meta property="og:locale" content="<?php echo  $doc->language ?>" />
  <meta property="og:title" content="<?php echo  $doc->getTitle() ?>" />
  <meta property="og:description" content="<?php echo  $doc->getDescription() ?>" />
  <meta property="og:url" content="<?php echo  JURI::current() ?>" />
  <meta property="og:site_name" content="<?php echo  $app->getCfg('sitename') ?>"/>
  
  <jdoc:include type="head" />
  
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
  
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/basics.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/layout.css.php?max_sitewidth=<?php echo $this->params->get('max_sitewidth','960');?>
  " type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/menu.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
  
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/colors.css.php?base_color=<?php echo $this->params->get('base_color','ffffff');?>&amp;header_gradient_top=<?php echo $this->params->get('header_gradient_top','ffea00');?>&amp;header_gradient_bottom=<?php echo $this->params->get('header_gradient_bottom','ffc600');?>&amp;footer_color=<?php echo $this->params->get('footer_color','4c4c4c');?>&amp;copyright_color=<?php echo $this->params->get('copyright_color','000000');?>&amp;accent_color=<?php echo $this->params->get('accent_color','ffea00');?>&amp;text_color=<?php echo $this->params->get('text_color','4c4c4c');?>&amp;menu_text_color=<?php echo $this->params->get('menu_text_color','000000');?>&amp;button_text_color=<?php echo $this->params->get('button_text_color','000000');?>&amp;footer_text_color=<?php echo $this->params->get('footer_text_color','cccccc');?>&amp;copyright_text_color=<?php echo $this->params->get('copyright_text_color','888888');?>&amp;templateurl=<?php echo $templateURL; ?>" type="text/css" />    
      
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/content_types.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/formelements.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/typography.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/icons.css" type="text/css" />
     <?php

    if(strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
	echo('
	<style>
	
		ul.menu ul {	
			display: none;

			padding: 0;
			width: auto;
			white-space: nowrap;
			position: absolute;
		
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
		
			-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
			-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
			box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
			
			-pie-box-shadow: 0 2px 0px rgba(0, 0, 0, 0.15);
		}
		
		/* dropdown */
		.ct_menu_horizontal ul.menu li:hover > ul {
			display: block;			
		}
		
		.ct_menu_vertical ul.menu li:hover > ul {
			display: inline-block;
		}

	</style>
	');
    }?>
 
 <!--[if IE 9]>
    <style>
    
    	body, 
    	#siteWrapper,
        #siteTop,
        header,
        #main section,
        
        .moduletable_ct_lightBox,
        .moduletable_ct_darkBox,
         
        input[type="text"],
        input[type="password"],
        input[type="email"],
        textarea,
        
        #main img,
           
        ul.menu ul,
        ul.menu ul ul,
        ul.menu li > a,
        ul.menu li > span,
        ul.menu li ul li > a,
        ul.menu li ul li > span,
        ul.menu li ul li ul li > a,
        ul.menu li ul li ul li > span,
        
        .ct_pagination div,

        .autocompleter-choices,
        ul.autocompleter-choices li.autocompleter-selected,
        
  		.flex-direction-nav li .next,
        .flex-direction-nav li .prev,
        .flex-control-nav li a,
        .flex-control-nav li a.active,
        .flex-control-nav li a:hover,
        
        ul.pagenav li a,
        
        .pane-sliders div.panel,
                    
        input.button, 
        button,
        #errorboxoutline a
        
        ul.pagenav li a,
        
        .ct_buttonAccent, 
        .ct_buttonYellow, 
        .ct_buttonRed, 
        .ct_buttonBlue,
        .ct_buttonGreen,
        .ct_buttonPink,
        .ct_buttonBlack,
        .ct_buttonWhite,
        
        #login-form.compact .button,
        #ct_headerLogin input.button,
        .tip  {
            behavior:url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/pie/PIE.php);
        }
    

    </style>
<![endif]-->


 <!--[if lt IE 9]>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie_fixes.css.php" type="text/css" />
<![endif]-->


 <!--[if lt IE 9]>
    <style>
    
    	body, 
    	#siteWrapper,
        #siteTop,
        header,
        #main section,
        
        .moduletable_ct_lightBox,
        .moduletable_ct_darkBox,
         
        input, 
        input[type="text"],
        input[type="password"],
        input[type="email"],
        textarea,

        .ct_pagination div,

        .autocompleter-choices,
        ul.autocompleter-choices li.autocompleter-selected,
        
  		.flex-direction-nav li .next,
        .flex-direction-nav li .prev,
        .flex-control-nav li a,
        .flex-control-nav li a.active,
        .flex-control-nav li a:hover,
        
        ul.pagenav li a,
        
        .pane-sliders div.panel,
                    
        input.button, 
        button,
        #errorboxoutline a
        
        ul.pagenav li a,
        
        .ct_buttonAccent, 
        .ct_buttonYellow, 
        .ct_buttonRed, 
        .ct_buttonBlue,
        .ct_buttonGreen,
        .ct_buttonPink,
        .ct_buttonBlack,
        .ct_buttonWhite,
        
        #login-form.compact .button,
        #ct_headerLogin input.button,
        .tip  {
            behavior:url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/pie/PIE.php);
        }
        
        ul.menu {
            -webkit-border-radius: 0px;
        	-moz-border-radius: 0px;
        	border-radius: 0px; 
       	}
    
    </style>
<![endif]-->


<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/jquery-1.7.1.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.mobilemenu.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.ba-resize.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/touchmenu.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/css3-mediaqueries.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/selectivizr-min.js"></script>

<script>
	// Convert menu to select-list for small displays
	jQuery(document).ready(function() {
		
		var seen = {};
		jQuery('a').each(function() {
			var txt = jQuery(this).attr('href');
			if (seen[txt])
				jQuery(this).attr('href', txt + '#');
			else
				seen[txt] = true;
		});
		
		jQuery('.ct_menu_horizontal > ul.menu').mobileMenu({switchWidth:769, prependTo: '#navigation', topOptionText: '<?php echo $this->params->get('show_menu_text', 'Select a Page');?>'});
	});
</script>

<!-- Pulled from http://code.google.com/p/html5shiv/ -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/selectivizr-min.js"></script>
<![endif]-->

</head>


<body id="body">
<script type="text/javascript">// <![CDATA[
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', '<?php echo $this->params->get('google_analytic_tracking-id', 'UA-35451204-1');?>', 'auto');
  ga('send', 'pageview');
// ]]></script>










<div id="siteWrapper">
	<!-- SITE TOP -->
    <div id="siteTop">
    <header id="header">
      <div class="wrapper container">

        <div id="ct_headerTools">
            <div id="ct_headerSearch">
                <jdoc:include type="modules" name="searchHeader" style="xhtml" />
            </div>
            <div id="ct_headerLogin">
                <jdoc:include type="modules" name="loginHeader" style="xhtml" />
            </div>
        </div>
        
        
        <div class="siteLogo">
       	<?php if ($this->params->get('logo')) : ?>
              <a href="<?php echo $this->baseurl ?>" id="logo">
                 <img src="<?php echo $this->baseurl.'/'.$this->params->get('logo'); ?>"/>
              </a> 
        	<?php endif; ?>
        </div>

        

        <div class="ct_clearFloatLeft"></div>
        
        <nav id="navigation">
            <div id="mainMenu">
                <jdoc:include type="modules" name="mainNav" style="xhtml" />
            </div>
        </nav>
        
        <div class="ct_clearFloatBoth"></div>
        
       </div>
    </header>
  
  
  
  
	<?php if ($this->countModules( 'slider' )) : ?>
        <div id="ct_sliderWrapper">
            <div id="ct_sliderContent">
            	<jdoc:include type="modules" name="slider" style="xhtml" />
            </div>
        </div>
    <?php endif; ?>
    <!-- END SITE TOP -->   
    </div>   
  
    <!-- MAIN AREA --> 
    <div id="main">
        <?php if ($this->countModules( 'breadcrumbs' )) : ?>
            <div class="ct_breadcrumbs"><jdoc:include type="modules" name="breadcrumbs" style="xhtml" /></div>
        <?php endif; ?>
    
		<!-- MAIN AREA INNER -->
        <div class="wrapper container">
            <jdoc:include type="message" />
            
            <!-- ROW HIGHLIGHTS_1 -->
        <?php if ($this->countModules( 'highlights_1_1' ) || $this->countModules( 'highlights_1_2' ) 
                || $this->countModules( 'highlights_1_3' ) || $this->countModules( 'highlights_1_4' ) 
                || $this->countModules( 'highlights_1_5' ) || $this->countModules( 'highlights_1_6' ) ) : ?>
            <section>
                <div class="row columnWidth_<?php echo $highlights1ModuleCount ?>">
                    <?php if ($this->countModules( 'highlights_1_1' )) : ?>
                        <jdoc:include type="modules" name="highlights_1_1" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'highlights_1_2' )) : ?>
                        <jdoc:include type="modules" name="highlights_1_2" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'highlights_1_3' )) : ?>
                        <jdoc:include type="modules" name="highlights_1_3" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'highlights_1_4' )) : ?>
                        <jdoc:include type="modules" name="highlights_1_4" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'highlights_1_5' )) : ?>
                        <jdoc:include type="modules" name="highlights_1_5" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'highlights_1_6' )) : ?>
                        <jdoc:include type="modules" name="highlights_1_6" style="xhtml" />
                    <?php endif; ?>
                </div>
		<div class="ct_clearFloatLeft"></div>
            </section>

        <?php endif; ?>
        <!-- END ROW HIGHLIGHTS_1 -->
            
        <!-- ROW MAINCONTENT_1 -->

     	<?php if ( $this->countModules( 'maincontent_1_1' ) || $this->countModules( 'maincontent_1_2' ) 
                || $this->countModules( 'maincontent_1_3' ) || $this->countModules( 'maincontent_1_4' ) 
                || $this->countModules( 'maincontent_1_5' ) || $this->countModules( 'maincontent_1_6' )) : ?>
                <section>
                <div class="row columnWidth_<?php echo $maincontent1ModuleCount ?>">
                    <?php if ($this->countModules( 'maincontent_1_1' )) : ?>
                        <jdoc:include type="modules" name="maincontent_1_1" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'maincontent_1_2' )) : ?>
                        <jdoc:include type="modules" name="maincontent_1_2" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'maincontent_1_3' )) : ?>
                        <jdoc:include type="modules" name="maincontent_1_3" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'maincontent_1_4' )) : ?>
                        <jdoc:include type="modules" name="maincontent_1_4" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'maincontent_1_5' )) : ?>
                        <jdoc:include type="modules" name="maincontent_1_5" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'maincontent_1_6' )) : ?>
                        <jdoc:include type="modules" name="maincontent_1_6" style="xhtml" />
                    <?php endif; ?>
                 </div>
		 <div class="ct_clearFloatLeft"></div>
            </section>
   	<?php endif; ?>
	<!-- END ROW MAINCONTENT_1 -->
   

    
	<!-- LEFT / COMPONENT CONTENT / RIGHT -->
    	<section>
        <div class="row">
			<?php if ($this->countModules( 'left' )) : ?>
                <div class="ct_left"><jdoc:include type="modules" name="left" style="xhtml" /></div>
            <?php endif; ?>
        
            <div class="ct_componentContent <?php echo $moduleWidthcomponentContent?>">
                <jdoc:include type="component" />
            </div>
            
            <?php if ($this->countModules( 'right' )) : ?>
                <div class="ct_right"><jdoc:include type="modules" name="right" style="xhtml" /></div>
            <?php endif; ?>
            
            <div class="ct_clearFloatBoth"></div>
            
        </div>
        </section>
 		<!-- END LEFT / COMPONENT CONTENT / RIGHT -->
            
            <!-- ROW MAINCONTENT_2 -->
     	<?php if ( $this->countModules( 'maincontent_2_1' ) || $this->countModules( 'maincontent_2_2' ) 
                || $this->countModules( 'maincontent_2_3' ) || $this->countModules( 'maincontent_2_4' ) 
                || $this->countModules( 'maincontent_2_5' ) || $this->countModules( 'maincontent_2_6' ))  : ?>
                <section>
                <div class="row columnWidth_<?php echo $maincontent2ModuleCount ?>">
                    <?php if ($this->countModules( 'maincontent_2_1' )) : ?>
                        <jdoc:include type="modules" name="maincontent_2_1" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'maincontent_2_2' )) : ?>
                        <jdoc:include type="modules" name="maincontent_2_2" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'maincontent_2_3' )) : ?>
                        <jdoc:include type="modules" name="maincontent_2_3" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'maincontent_2_4' )) : ?>
                        <jdoc:include type="modules" name="maincontent_2_4" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'maincontent_2_5' )) : ?>
                        <jdoc:include type="modules" name="maincontent_2_5" style="xhtml" />
                    <?php endif; ?>
                    
                    <?php if ($this->countModules( 'maincontent_2_6' )) : ?>
                        <jdoc:include type="modules" name="maincontent_2_6" style="xhtml" />
                    <?php endif; ?>
                </div>
            </section>
   	<?php endif; ?>
            <!-- END ROW MAINCONTENT_2 -->
            
            <div class="ct_clearFloatLeft"></div>

        <!-- END MAIN AREA INNER--> 
        </div>
        
       <!-- FOOTER -->
               <footer>
                    <div class="footerShadow">
                        <div class="footerDeko"></div>
                    </div>
                    <?php if ($this->countModules( 'footer_1_1' ) || $this->countModules( 'footer_1_2' )
                            || $this->countModules( 'footer_1_3' ) || $this->countModules( 'footer_1_4' ) 
                            || $this->countModules( 'footer_1_5' ) || $this->countModules( 'footer_1_6' ))  : ?>
                    <section>
                        <div class="row columnWidth_<?php echo $footerModuleCount ?>">
                            <?php if ($this->countModules( 'footer_1_1' )) : ?>
                                <jdoc:include type="modules" name="footer_1_1" style="xhtml" />
                            <?php endif; ?>
                            
                            <?php if ($this->countModules( 'footer_1_2' )) : ?>
                                <jdoc:include type="modules" name="footer_1_2" style="xhtml" />
                            <?php endif; ?>
                            
                            <?php if ($this->countModules( 'footer_1_3' )) : ?>
                                <jdoc:include type="modules" name="footer_1_3" style="xhtml" />
                            <?php endif; ?>
                            
                            <?php if ($this->countModules( 'footer_1_4' )) : ?>
                                <jdoc:include type="modules" name="footer_1_4" style="xhtml" />
                            <?php endif; ?>
                            
                            <?php if ($this->countModules( 'footer_1_5' )) : ?>
                                <jdoc:include type="modules" name="footer_1_5" style="xhtml" />
                            <?php endif; ?>
                            
                            <?php if ($this->countModules( 'footer_1_6' )) : ?>
                                <jdoc:include type="modules" name="footer_1_6" style="xhtml" />
                            <?php endif; ?>
                        </div>
                    </section>
                    
                    <div class="ct_clearFloatLeft"></div>
                    
                <?php endif; ?>
            </footer>
            <!-- END FOOTER -->
            
            <div class="footerCopyright">
            	<jdoc:include type="modules" name="footer_copyright" style="xhtml" />
            </div>
                    
            <div class="ct_clearFloatLeft"></div>

	<!-- END MAIN AREA -->  

</div>
<!-- END SITE WRAPPER -->   
</div>

</body>
</html>