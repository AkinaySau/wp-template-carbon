<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 05.03.18
 * Time: 11:10
 */

namespace Sau\WP\Theme\Carbon\Containers;


use Carbon_Fields\Container;
use Carbon_Fields\Carbon_Fields\Container\Container as CrbBaseContainer;
use Sau\WP\Theme\Carbon\CarbonActions;

abstract class BaseContainer {
	protected $container;

	/**
	 * @param $type
	 * @param $title
	 * @return BaseContainer
	 */
	public static function init ( $type, $title ): BaseContainer {
		$obj = null;
		CarbonActions::carbonFieldsRegisterFields(function () use ( $type, $title, &$obj ) {
			$obj = new static($type, $title);
			return $obj;
		});
		return $obj;
	}

	/**
	 * Container constructor.
	 *
	 * @param string $type  Type container
	 * @param string $title Title
	 */
	final protected function __construct ( $type, $title ) {
		$this->container = Container::make($type, $title);
		$this->addFields();
	}


	/**
	 * Return container
	 *
	 * @return CrbBaseContainer
	 */
	public function getContainer (): CrbBaseContainer {
		return $this->container;
	}

	/**
	 * Add custom fields
	 *
	 * @return void
	 */
	abstract protected function addFields ();

}