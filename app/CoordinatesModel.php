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
 * Built from #/definitions/CoordinatesModel
 */
class CoordinatesModel extends ClassStructure {
	/** @var float */
	public $lat;

	/** @var float */
	public $lng;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->lat = Schema::number();
		$properties->lat->format = "double";
		$properties->lng = Schema::number();
		$properties->lng->format = "double";
		$ownerSchema->setFromRef('#/definitions/CoordinatesModel');
	}

	/**
	 * @param float $lat
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setLat($lat)
	{
		$this->lat = $lat;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param float $lng
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setLng($lng)
	{
		$this->lng = $lng;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */
}