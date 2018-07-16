<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace app;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Root extends ClassStructure {
	/** @var MainPageResponse */
	public $child;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->child = MainPageResponse::schema();
	}

	/**
	 * @param MainPageResponse $child
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setChild(MainPageResponse $child)
	{
		$this->child = $child;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */
}