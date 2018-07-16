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
 * Built from #/definitions/SingleTrustedModel
 */
class SingleTrustedModel extends ClassStructure {
	/** @var string */
	public $title;

	/** @var ImageModel */
	public $image;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->title = Schema::string();
		$properties->image = ImageModel::schema();
		$ownerSchema->setFromRef('#/definitions/SingleTrustedModel');
	}

	/**
	 * @param string $title
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param ImageModel $image
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setImage(ImageModel $image)
	{
		$this->image = $image;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */
}