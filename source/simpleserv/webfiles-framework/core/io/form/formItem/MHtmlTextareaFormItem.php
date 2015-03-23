<?php

namespace \simpleserv\webfiles-framework\core\io\form\formItem;

/**
 * 
 * @author semo
 *
 */
class MHtmlTextareaFormItem extends MAbstractFormItem {

	public function init() {
		$this->code = 	"<div style=\"margin-top:4px; width: 600px;\">";
		if ( ! empty($this->localizedName) ) {
			$this->code .= $this->localizedName;
		} else {
			$this->code .= $this->name;
		}
		$this->code .= "<br />" .
				"<textarea
									type=\"text\"
									name=\"" . $this->name . "\"
									style=\"width: 200px;\"
									dojoType=\"dijit.Editor\"
									data-dojo-props=\"extraPlugins:['foreColor','hiliteColor','|','createLink','insertImage','fullscreen','viewsource','newpage']\">" . $this->value . "</textarea>" .
										"</div>";
	}


}