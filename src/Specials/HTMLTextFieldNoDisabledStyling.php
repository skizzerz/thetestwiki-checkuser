<?php

namespace MediaWiki\CheckUser\Specials;

use HTMLTextField;

class HTMLTextFieldNoDisabledStyling extends HTMLTextField {

	protected function getInputWidget( $params ) {
		// So that the disabled state does not grey out the
		// text input as that does not make sense in this context
		return new TextInputWidgetNoDisabledStyling( $params );
	}
}