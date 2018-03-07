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
	 * @param $title
	 * @return ThemeContainer
	 */
	public static function init ( $title ): BaseContainer {
		return parent::init('theme_options', $title);
	}
}
