<?php
/**
 * FormNotification
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
 * FormNotification Class Doc Comment
 *
 * @category Class
 * @package  Staatic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FormNotification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FormNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'type' => 'string',
        'url' => 'string',
        'recipients' => 'string[]',
        'form_template_id' => 'string',
        'form_template_name' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'form_id' => 'string',
        'form_name' => 'string',
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
        'id' => 'ulid',
        'type' => null,
        'url' => 'url',
        'recipients' => 'email',
        'form_template_id' => 'ulid',
        'form_template_name' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'form_id' => 'ulid',
        'form_name' => null,
        'site_id' => 'ulid',
        'site_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'type' => false,
        'url' => false,
        'recipients' => false,
        'form_template_id' => true,
        'form_template_name' => true,
        'created_at' => false,
        'updated_at' => false,
        'form_id' => true,
        'form_name' => true,
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
        'id' => 'id',
        'type' => 'type',
        'url' => 'url',
        'recipients' => 'recipients',
        'form_template_id' => 'form_template_id',
        'form_template_name' => 'form_template_name',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'form_id' => 'form_id',
        'form_name' => 'form_name',
        'site_id' => 'site_id',
        'site_name' => 'site_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'url' => 'setUrl',
        'recipients' => 'setRecipients',
        'form_template_id' => 'setFormTemplateId',
        'form_template_name' => 'setFormTemplateName',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'form_id' => 'setFormId',
        'form_name' => 'setFormName',
        'site_id' => 'setSiteId',
        'site_name' => 'setSiteName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'url' => 'getUrl',
        'recipients' => 'getRecipients',
        'form_template_id' => 'getFormTemplateId',
        'form_template_name' => 'getFormTemplateName',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'form_id' => 'getFormId',
        'form_name' => 'getFormName',
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

    public const TYPE_AUTORESPONSE = 'autoresponse';
    public const TYPE_EMAIL = 'email';
    public const TYPE_WEBHOOK = 'webhook';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_AUTORESPONSE,
            self::TYPE_EMAIL,
            self::TYPE_WEBHOOK,
        ];
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('recipients', $data ?? [], null);
        $this->setIfExists('form_template_id', $data ?? [], null);
        $this->setIfExists('form_template_name', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('form_id', $data ?? [], null);
        $this->setIfExists('form_name', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return string[]|null
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param string[]|null $recipients recipients
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        if (is_null($recipients)) {
            throw new \InvalidArgumentException('non-nullable recipients cannot be null');
        }
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets form_template_id
     *
     * @return string|null
     */
    public function getFormTemplateId()
    {
        return $this->container['form_template_id'];
    }

    /**
     * Sets form_template_id
     *
     * @param string|null $form_template_id form_template_id
     *
     * @return self
     */
    public function setFormTemplateId($form_template_id)
    {
        if (is_null($form_template_id)) {
            array_push($this->openAPINullablesSetToNull, 'form_template_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('form_template_id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['form_template_id'] = $form_template_id;

        return $this;
    }

    /**
     * Gets form_template_name
     *
     * @return string|null
     */
    public function getFormTemplateName()
    {
        return $this->container['form_template_name'];
    }

    /**
     * Sets form_template_name
     *
     * @param string|null $form_template_name form_template_name
     *
     * @return self
     */
    public function setFormTemplateName($form_template_name)
    {
        if (is_null($form_template_name)) {
            array_push($this->openAPINullablesSetToNull, 'form_template_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('form_template_name', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['form_template_name'] = $form_template_name;

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
     * Gets form_id
     *
     * @return string|null
     */
    public function getFormId()
    {
        return $this->container['form_id'];
    }

    /**
     * Sets form_id
     *
     * @param string|null $form_id form_id
     *
     * @return self
     */
    public function setFormId($form_id)
    {
        if (is_null($form_id)) {
            array_push($this->openAPINullablesSetToNull, 'form_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('form_id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['form_id'] = $form_id;

        return $this;
    }

    /**
     * Gets form_name
     *
     * @return string|null
     */
    public function getFormName()
    {
        return $this->container['form_name'];
    }

    /**
     * Sets form_name
     *
     * @param string|null $form_name form_name
     *
     * @return self
     */
    public function setFormName($form_name)
    {
        if (is_null($form_name)) {
            array_push($this->openAPINullablesSetToNull, 'form_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('form_name', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['form_name'] = $form_name;

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

