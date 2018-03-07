<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 05.03.18
 * Time: 11:19
 */

namespace Sau\WP\Theme\Carbon\Containers;


abstract class ThemeContainer extends BaseContainer {
	/**
	 * Create carbon container with template options
	 *
	 * @param string $title
	 */
	public function __construct(string $title) {
		parent::__construct('theme_options', $title);
	}
}
