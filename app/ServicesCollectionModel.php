<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace app;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from #/definitions/ServicesCollectionModel
 */
class ServicesCollectionModel extends ClassStructure {
	/** @var SingleServiceObject[]|array */
	public $objects;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->objects = Schema::arr();
		$properties->objects->items = SingleServiceObject::schema();
		$ownerSchema->setFromRef('#/definitions/ServicesCollectionModel');
	}

	/**
	 * @param SingleServiceObject[]|array $objects
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setObjects($objects)
	{
		$this->objects = $objects;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */
}