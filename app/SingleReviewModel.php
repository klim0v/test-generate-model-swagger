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
 * Built from #/definitions/SingleReviewModel
 */
class SingleReviewModel extends ClassStructure {
	/** @var int */
	public $id;

	/** @var ImageModel */
	public $image;

	/** @var string */
	public $reviewerTitle;

	/** @var string */
	public $companyTitle;

	/** @var string */
	public $reviewText;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->id = Schema::integer();
		$properties->image = ImageModel::schema();
		$properties->reviewerTitle = Schema::string();
		$properties->companyTitle = Schema::string();
		$properties->reviewText = Schema::string();
		$ownerSchema->setFromRef('#/definitions/SingleReviewModel');
	}

	/**
	 * @param int $id
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
	 * @param string $reviewerTitle
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setReviewerTitle($reviewerTitle)
	{
		$this->reviewerTitle = $reviewerTitle;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $companyTitle
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setCompanyTitle($companyTitle)
	{
		$this->companyTitle = $companyTitle;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $reviewText
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setReviewText($reviewText)
	{
		$this->reviewText = $reviewText;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */
}