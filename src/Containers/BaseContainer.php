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

abstract class BaseContainer {
	protected $container;

	/**
	 * Container constructor.
	 *
	 * @param string $type  Type container
	 * @param string $title Title
	 */
	public function __construct($type, $title) {
		$this->container = Container::make($type, $title);
		$this->addFields();
	}

	/**
	 * Return container
	 *
	 * @return CrbBaseContainer
	 */
	public function getContainer(): CrbBaseContainer {
		return $this->container;
	}

	/**
	 * Add custom fields
	 * 
	 * @return void
	 */
	abstract protected function addFields();

}