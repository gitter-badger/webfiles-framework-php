<?php

namespace simpleserv\webfilesframework\core\codegeneration;

use simpleserv\webfilesframework\MItem;

/**
 * description
 *
 * @author     simpleserv company < info@simpleserv.de >
 * @author     Sebastian Monzel < mail@sebastianmonzel.de >
 * @since      0.1.7
 */
abstract class MAbstractCodeItem extends MItem {
	
	
	public abstract function generateCode();
	
}