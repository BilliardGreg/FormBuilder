<?php


class form_fields {
	
	
	function field_select($array_info) {
		$name = $array_info['name'];
		$id = (isset($array_info['id']) ? $array_info['id'] : $array_info['name']);
		$options = $array_info['options'];
		$selected = (isset($array_info['selected']) ? $array_info['selected'] : '');
		$returnHtml = '<select name="'.$name.'" id="'.$name.'">'."\n" . '<option value="">Please Select</option>' . "\n"; 
		
		foreach ($options as $option) {
			$returnHtml .= '<option value="'.$option.'" '.($selected == $option ? ' selected="selected" ' : '').'>'.$option.'</option>'."\n";
		}
		
		$returnHtml .= '</select>';
	}
		
}


?>