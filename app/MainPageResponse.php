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
 * Built from #/definitions/MainPageResponse
 */
class MainPageResponse extends ClassStructure {
	/** @var BannerCollectionModel */
	public $banner;

	/** @var ServicesCollectionModel */
	public $services;

	/** @var SingleLocation[]|array */
	public $locations;

	/** @var ReviewBlockModel */
	public $reviewBlock;

	/** @var TrustedModel */
	public $trusted;

	/** @var FormTextModel */
	public $formText;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->banner = BannerCollectionModel::schema();
		$properties->services = ServicesCollectionModel::schema();
		$properties->locations = Schema::arr();
		$properties->locations->items = SingleLocation::schema();
		$properties->reviewBlock = ReviewBlockModel::schema();
		$properties->trusted = TrustedModel::schema();
		$properties->formText = FormTextModel::schema();
		$ownerSchema->setFromRef('#/definitions/MainPageResponse');
	}

	/**
	 * @param BannerCollectionModel $banner
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setBanner(BannerCollectionModel $banner)
	{
		$this->banner = $banner;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param ServicesCollectionModel $services
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setServices(ServicesCollectionModel $services)
	{
		$this->services = $services;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param SingleLocation[]|array $locations
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setLocations($locations)
	{
		$this->locations = $locations;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param ReviewBlockModel $reviewBlock
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setReviewBlock(ReviewBlockModel $reviewBlock)
	{
		$this->reviewBlock = $reviewBlock;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param TrustedModel $trusted
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setTrusted(TrustedModel $trusted)
	{
		$this->trusted = $trusted;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param FormTextModel $formText
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setFormText(FormTextModel $formText)
	{
		$this->formText = $formText;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */
}