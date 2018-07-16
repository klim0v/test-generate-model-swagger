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
 * Built from #/definitions/SingleServiceObject
 */
class SingleServiceObject extends ClassStructure {
	/** @var string */
	public $id;

	/** @var string */
	public $title;

	/** @var ImageModel */
	public $image;

	/** @var string */
	public $text;

	/** @var string */
	public $buttonText;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->id = Schema::string();
		$properties->title = Schema::string();
		$properties->image = ImageModel::schema();
		$properties->text = Schema::string();
		$properties->buttonText = Schema::string();
		$ownerSchema->setFromRef('#/definitions/SingleServiceObject');
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
}