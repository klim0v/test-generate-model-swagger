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
 * Built from #/definitions/TrustedModel
 */
class TrustedModel extends ClassStructure {
	/** @var SingleTrustedModel[]|array */
	public $objects;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->objects = Schema::arr();
		$properties->objects->items = SingleTrustedModel::schema();
		$ownerSchema->setFromRef('#/definitions/TrustedModel');
	}

	/**
	 * @param SingleTrustedModel[]|array $objects
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