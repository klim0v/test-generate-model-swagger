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
 * Built from #/definitions/BannerCollectionModel
 */
class BannerCollectionModel extends ClassStructure {
	/** @var BannerObject[]|array */
	public $screens;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->screens = Schema::arr();
		$properties->screens->items = BannerObject::schema();
		$ownerSchema->setFromRef('#/definitions/BannerCollectionModel');
	}

	/**
	 * @param BannerObject[]|array $screens
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setScreens($screens)
	{
		$this->screens = $screens;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */
}