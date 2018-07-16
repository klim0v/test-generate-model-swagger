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
 * Built from #/definitions/SingleLocation
 */
class SingleLocation extends ClassStructure {
	/** @var int */
	public $id;

	/** @var string */
	public $title;

	/** @var string */
	public $address;

	/** @var string */
	public $information;

	/** @var string */
	public $presentationLink;

	/** @var PresentationModel[]|array */
	public $presentationLinks;

	/** @var CoordinatesModel */
	public $coordinates;

	/**
	 * @param Properties|static $properties
	 * @param Schema $ownerSchema
	 */
	public static function setUpProperties($properties, Schema $ownerSchema)
	{
		$properties->id = Schema::integer();
		$properties->title = Schema::string();
		$properties->address = Schema::string();
		$properties->information = Schema::string();
		$properties->presentationLink = Schema::string();
		$properties->presentationLinks = Schema::arr();
		$properties->presentationLinks->items = PresentationModel::schema();
		$properties->coordinates = CoordinatesModel::schema();
		$ownerSchema->setFromRef('#/definitions/SingleLocation');
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
	 * @param string $address
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setAddress($address)
	{
		$this->address = $address;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $information
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setInformation($information)
	{
		$this->information = $information;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param string $presentationLink
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setPresentationLink($presentationLink)
	{
		$this->presentationLink = $presentationLink;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param PresentationModel[]|array $presentationLinks
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setPresentationLinks($presentationLinks)
	{
		$this->presentationLinks = $presentationLinks;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */

	/**
	 * @param CoordinatesModel $coordinates
	 * @return $this
	 * @codeCoverageIgnoreStart
	 */
	public function setCoordinates(CoordinatesModel $coordinates)
	{
		$this->coordinates = $coordinates;
		return $this;
	}
	/** @codeCoverageIgnoreEnd */
}