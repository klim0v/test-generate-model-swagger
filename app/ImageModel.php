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
 * Built from #/definitions/ImageModel
 */
class ImageModel extends ClassStructure {
	/** @var int */
	public $photoId;

	/** @var string */
	public $photo75;

	/** @var string */
	public $photo130;

	/** @var string */
	public $photo640;

	/** @var string */
	public $photo860;

	/** @var string */
	public $photo1280;

	/** @var string */
	public $photo2560;

	/** @var string */
	public $width;

	/** @var string */
	public $height;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->photoId = Schema::integer();
		$properties->photo75 = Schema::string();
		$properties->photo130 = Schema::string();
		$properties->photo640 = Schema::string();
		$properties->photo860 = Schema::string();
		$properties->photo1280 = Schema::string();
		$properties->photo2560 = Schema::string();
		$properties->width = Schema::string();
		$properties->height = Schema::string();
		$ownerSchema->setFromRef('#/definitions/ImageModel');
	}

	/**
	 * @param int $photoId
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setPhotoId($photoId)
	{
		$this->photoId = $photoId;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $photo75
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setPhoto75($photo75)
	{
		$this->photo75 = $photo75;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $photo130
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setPhoto130($photo130)
	{
		$this->photo130 = $photo130;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $photo640
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setPhoto640($photo640)
	{
		$this->photo640 = $photo640;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $photo860
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setPhoto860($photo860)
	{
		$this->photo860 = $photo860;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $photo1280
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setPhoto1280($photo1280)
	{
		$this->photo1280 = $photo1280;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $photo2560
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setPhoto2560($photo2560)
	{
		$this->photo2560 = $photo2560;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $width
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setWidth($width)
	{
		$this->width = $width;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $height
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setHeight($height)
	{
		$this->height = $height;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */
}