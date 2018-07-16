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
 * Built from #/definitions/PresentationModel
 */
class PresentationModel extends ClassStructure {
	/** @var string */
	public $label;

	/** @var string */
	public $href;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->label = Schema::string();
		$properties->href = Schema::string();
		$ownerSchema->setFromRef('#/definitions/PresentationModel');
	}

	/**
	 * @param string $label
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setLabel($label)
	{
		$this->label = $label;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $href
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setHref($href)
	{
		$this->href = $href;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */
}