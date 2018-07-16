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
 * Built from #/definitions/BannerObject
 */
class BannerObject extends ClassStructure {
	/** @var string */
	public $id;

	/** @var string */
	public $title;

	/** @var string */
	public $text;

	/** @var string */
	public $buttonText;

	/** @var ImageModel */
	public $image;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->id = Schema::string();
		$properties->title = Schema::string();
		$properties->text = Schema::string();
		$properties->buttonText = Schema::string();
		$properties->image = ImageModel::schema();
		$ownerSchema->setFromRef('#/definitions/BannerObject');
	}

	/**
	 * @param string $id
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

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
	 * @param string $text
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setText($text)
	{
		$this->text = $text;
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