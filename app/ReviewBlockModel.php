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
 * Built from #/definitions/ReviewBlockModel
 */
class ReviewBlockModel extends ClassStructure {
	/** @var SingleReviewModel[]|array */
	public $objects;

	/** @var string */
	public $buttonText;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->objects = Schema::arr();
		$properties->objects->items = SingleReviewModel::schema();
		$properties->buttonText = Schema::string();
		$ownerSchema->setFromRef('#/definitions/ReviewBlockModel');
	}

	/**
	 * @param SingleReviewModel[]|array $objects
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setObjects($objects)
	{
		$this->objects = $objects;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $buttonText
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setButtonText($buttonText)
	{
		$this->buttonText = $buttonText;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */
}