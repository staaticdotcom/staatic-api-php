<?php
/**
 * SearchIndex
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Staatic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Staatic API documentation
 *
 * This is the Staatic API. You can find out more about Staatic at [https://staatic.com](https://staatic.com).
 *
 * The version of the OpenAPI document: 0.3.1
 * Contact: contact@staatic.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Staatic\Api\Model;

use \ArrayAccess;
use \Staatic\Api\ObjectSerializer;

/**
 * SearchIndex Class Doc Comment
 *
 * @category Class
 * @package  Staatic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SearchIndex implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchIndex';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'searchable_attributes' => 'string[]',
        'retrievable_attributes' => 'string[]',
        'unretrievable_attributes' => 'string[]',
        'records_per_page' => 'int',
        'pagination_limit' => 'int',
        'highlightable_attributes' => 'string[]',
        'highlight_prefix_tag' => 'string',
        'highlight_postfix_tag' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'site_id' => 'string',
        'site_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'searchable_attributes' => null,
        'retrievable_attributes' => null,
        'unretrievable_attributes' => null,
        'records_per_page' => null,
        'pagination_limit' => null,
        'highlightable_attributes' => null,
        'highlight_prefix_tag' => null,
        'highlight_postfix_tag' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'site_id' => 'ulid',
        'site_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'searchable_attributes' => false,
        'retrievable_attributes' => false,
        'unretrievable_attributes' => false,
        'records_per_page' => false,
        'pagination_limit' => false,
        'highlightable_attributes' => false,
        'highlight_prefix_tag' => false,
        'highlight_postfix_tag' => false,
        'created_at' => false,
        'updated_at' => false,
        'site_id' => false,
        'site_name' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'searchable_attributes' => 'searchable_attributes',
        'retrievable_attributes' => 'retrievable_attributes',
        'unretrievable_attributes' => 'unretrievable_attributes',
        'records_per_page' => 'records_per_page',
        'pagination_limit' => 'pagination_limit',
        'highlightable_attributes' => 'highlightable_attributes',
        'highlight_prefix_tag' => 'highlight_prefix_tag',
        'highlight_postfix_tag' => 'highlight_postfix_tag',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'site_id' => 'site_id',
        'site_name' => 'site_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'searchable_attributes' => 'setSearchableAttributes',
        'retrievable_attributes' => 'setRetrievableAttributes',
        'unretrievable_attributes' => 'setUnretrievableAttributes',
        'records_per_page' => 'setRecordsPerPage',
        'pagination_limit' => 'setPaginationLimit',
        'highlightable_attributes' => 'setHighlightableAttributes',
        'highlight_prefix_tag' => 'setHighlightPrefixTag',
        'highlight_postfix_tag' => 'setHighlightPostfixTag',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'site_id' => 'setSiteId',
        'site_name' => 'setSiteName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'searchable_attributes' => 'getSearchableAttributes',
        'retrievable_attributes' => 'getRetrievableAttributes',
        'unretrievable_attributes' => 'getUnretrievableAttributes',
        'records_per_page' => 'getRecordsPerPage',
        'pagination_limit' => 'getPaginationLimit',
        'highlightable_attributes' => 'getHighlightableAttributes',
        'highlight_prefix_tag' => 'getHighlightPrefixTag',
        'highlight_postfix_tag' => 'getHighlightPostfixTag',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'site_id' => 'getSiteId',
        'site_name' => 'getSiteName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('searchable_attributes', $data ?? [], null);
        $this->setIfExists('retrievable_attributes', $data ?? [], null);
        $this->setIfExists('unretrievable_attributes', $data ?? [], null);
        $this->setIfExists('records_per_page', $data ?? [], null);
        $this->setIfExists('pagination_limit', $data ?? [], null);
        $this->setIfExists('highlightable_attributes', $data ?? [], null);
        $this->setIfExists('highlight_prefix_tag', $data ?? [], null);
        $this->setIfExists('highlight_postfix_tag', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('site_id', $data ?? [], null);
        $this->setIfExists('site_name', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets searchable_attributes
     *
     * @return string[]|null
     */
    public function getSearchableAttributes()
    {
        return $this->container['searchable_attributes'];
    }

    /**
     * Sets searchable_attributes
     *
     * @param string[]|null $searchable_attributes searchable_attributes
     *
     * @return self
     */
    public function setSearchableAttributes($searchable_attributes)
    {
        if (is_null($searchable_attributes)) {
            throw new \InvalidArgumentException('non-nullable searchable_attributes cannot be null');
        }
        $this->container['searchable_attributes'] = $searchable_attributes;

        return $this;
    }

    /**
     * Gets retrievable_attributes
     *
     * @return string[]|null
     */
    public function getRetrievableAttributes()
    {
        return $this->container['retrievable_attributes'];
    }

    /**
     * Sets retrievable_attributes
     *
     * @param string[]|null $retrievable_attributes retrievable_attributes
     *
     * @return self
     */
    public function setRetrievableAttributes($retrievable_attributes)
    {
        if (is_null($retrievable_attributes)) {
            throw new \InvalidArgumentException('non-nullable retrievable_attributes cannot be null');
        }
        $this->container['retrievable_attributes'] = $retrievable_attributes;

        return $this;
    }

    /**
     * Gets unretrievable_attributes
     *
     * @return string[]|null
     */
    public function getUnretrievableAttributes()
    {
        return $this->container['unretrievable_attributes'];
    }

    /**
     * Sets unretrievable_attributes
     *
     * @param string[]|null $unretrievable_attributes unretrievable_attributes
     *
     * @return self
     */
    public function setUnretrievableAttributes($unretrievable_attributes)
    {
        if (is_null($unretrievable_attributes)) {
            throw new \InvalidArgumentException('non-nullable unretrievable_attributes cannot be null');
        }
        $this->container['unretrievable_attributes'] = $unretrievable_attributes;

        return $this;
    }

    /**
     * Gets records_per_page
     *
     * @return int|null
     */
    public function getRecordsPerPage()
    {
        return $this->container['records_per_page'];
    }

    /**
     * Sets records_per_page
     *
     * @param int|null $records_per_page records_per_page
     *
     * @return self
     */
    public function setRecordsPerPage($records_per_page)
    {
        if (is_null($records_per_page)) {
            throw new \InvalidArgumentException('non-nullable records_per_page cannot be null');
        }
        $this->container['records_per_page'] = $records_per_page;

        return $this;
    }

    /**
     * Gets pagination_limit
     *
     * @return int|null
     */
    public function getPaginationLimit()
    {
        return $this->container['pagination_limit'];
    }

    /**
     * Sets pagination_limit
     *
     * @param int|null $pagination_limit pagination_limit
     *
     * @return self
     */
    public function setPaginationLimit($pagination_limit)
    {
        if (is_null($pagination_limit)) {
            throw new \InvalidArgumentException('non-nullable pagination_limit cannot be null');
        }
        $this->container['pagination_limit'] = $pagination_limit;

        return $this;
    }

    /**
     * Gets highlightable_attributes
     *
     * @return string[]|null
     */
    public function getHighlightableAttributes()
    {
        return $this->container['highlightable_attributes'];
    }

    /**
     * Sets highlightable_attributes
     *
     * @param string[]|null $highlightable_attributes highlightable_attributes
     *
     * @return self
     */
    public function setHighlightableAttributes($highlightable_attributes)
    {
        if (is_null($highlightable_attributes)) {
            throw new \InvalidArgumentException('non-nullable highlightable_attributes cannot be null');
        }
        $this->container['highlightable_attributes'] = $highlightable_attributes;

        return $this;
    }

    /**
     * Gets highlight_prefix_tag
     *
     * @return string|null
     */
    public function getHighlightPrefixTag()
    {
        return $this->container['highlight_prefix_tag'];
    }

    /**
     * Sets highlight_prefix_tag
     *
     * @param string|null $highlight_prefix_tag highlight_prefix_tag
     *
     * @return self
     */
    public function setHighlightPrefixTag($highlight_prefix_tag)
    {
        if (is_null($highlight_prefix_tag)) {
            throw new \InvalidArgumentException('non-nullable highlight_prefix_tag cannot be null');
        }
        $this->container['highlight_prefix_tag'] = $highlight_prefix_tag;

        return $this;
    }

    /**
     * Gets highlight_postfix_tag
     *
     * @return string|null
     */
    public function getHighlightPostfixTag()
    {
        return $this->container['highlight_postfix_tag'];
    }

    /**
     * Sets highlight_postfix_tag
     *
     * @param string|null $highlight_postfix_tag highlight_postfix_tag
     *
     * @return self
     */
    public function setHighlightPostfixTag($highlight_postfix_tag)
    {
        if (is_null($highlight_postfix_tag)) {
            throw new \InvalidArgumentException('non-nullable highlight_postfix_tag cannot be null');
        }
        $this->container['highlight_postfix_tag'] = $highlight_postfix_tag;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets site_id
     *
     * @return string|null
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     *
     * @param string|null $site_id site_id
     *
     * @return self
     */
    public function setSiteId($site_id)
    {
        if (is_null($site_id)) {
            throw new \InvalidArgumentException('non-nullable site_id cannot be null');
        }
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets site_name
     *
     * @return string|null
     */
    public function getSiteName()
    {
        return $this->container['site_name'];
    }

    /**
     * Sets site_name
     *
     * @param string|null $site_name site_name
     *
     * @return self
     */
    public function setSiteName($site_name)
    {
        if (is_null($site_name)) {
            throw new \InvalidArgumentException('non-nullable site_name cannot be null');
        }
        $this->container['site_name'] = $site_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


