<?php 

/*
===============================
Custom menu markup
===============================
*/

class Campfire_Footer_Nav_Walker extends Walker_Nav_Menu {

	function start_el( &$output, $item, $depth = 0, $args = array(), $id=0 ) {
		// Setup variables
		$indent = str_repeat("\t", $depth+2);
		
		// item attributes
		$li_classes = array('footer-menu__item');
		$li_classes = array_merge($li_classes, array_filter($item->classes));
		$class_list = implode(' ', $li_classes);
		
		// link attributes
		$link = $item->url;
		$link_text = $item->title;
		$link_class = 'footer-menu__link';
		$link_class .= ($item->target) ? ' footer-menu__link--external' : '';
		$link_class .= ($item->type === 'custom') ? ' footer-menu__link--custom' : '';
		$link_title = empty($item->attr_title) ? '' : ' title="' . $item->attr_title .'"';
		$link_target = empty($item->target) ? '' : ' target="' . $item->target . '"';
		
		// Output
		$output .= "\n{$indent}\t<li class=\"{$class_list}\">\n{$indent}\t\t";
		$output .= "<a class=\"{$link_class}\" href=\"{$link}\"{$link_title}{$link_target}>{$link_text}";
	}
	
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth+2);
		$output .= "</a>\n{$indent}\t</li>\n";
	}
}
