<?php
/**
 * Form
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
 * The version of the OpenAPI document: 1.0.1
 * Contact: contact@staatic.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
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
 * Form Class Doc Comment
 *
 * @category Class
 * @package  Staatic\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Form implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Form';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'response_type' => 'string',
        'redirect_url' => 'string',
        'honeypot_field' => 'string',
        'recaptcha_secret' => 'string',
        'endpoint' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'num_submissions' => 'array<string,int>',
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
        'name' => null,
        'response_type' => null,
        'redirect_url' => 'url',
        'honeypot_field' => null,
        'recaptcha_secret' => null,
        'endpoint' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'num_submissions' => null,
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
        'name' => false,
        'response_type' => false,
        'redirect_url' => false,
        'honeypot_field' => true,
        'recaptcha_secret' => true,
        'endpoint' => false,
        'created_at' => false,
        'updated_at' => false,
        'num_submissions' => false,
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
        'name' => 'name',
        'response_type' => 'response_type',
        'redirect_url' => 'redirect_url',
        'honeypot_field' => 'honeypot_field',
        'recaptcha_secret' => 'recaptcha_secret',
        'endpoint' => 'endpoint',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'num_submissions' => 'num_submissions',
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
        'name' => 'setName',
        'response_type' => 'setResponseType',
        'redirect_url' => 'setRedirectUrl',
        'honeypot_field' => 'setHoneypotField',
        'recaptcha_secret' => 'setRecaptchaSecret',
        'endpoint' => 'setEndpoint',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'num_submissions' => 'setNumSubmissions',
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
        'name' => 'getName',
        'response_type' => 'getResponseType',
        'redirect_url' => 'getRedirectUrl',
        'honeypot_field' => 'getHoneypotField',
        'recaptcha_secret' => 'getRecaptchaSecret',
        'endpoint' => 'getEndpoint',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'num_submissions' => 'getNumSubmissions',
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

    public const RESPONSE_TYPE_REDIRECT = 'redirect';
    public const RESPONSE_TYPE_THANK_YOU_PAGE = 'thank_you_page';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResponseTypeAllowableValues()
    {
        return [
            self::RESPONSE_TYPE_REDIRECT,
            self::RESPONSE_TYPE_THANK_YOU_PAGE,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('response_type', $data ?? [], null);
        $this->setIfExists('redirect_url', $data ?? [], null);
        $this->setIfExists('honeypot_field', $data ?? [], null);
        $this->setIfExists('recaptcha_secret', $data ?? [], null);
        $this->setIfExists('endpoint', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('num_submissions', $data ?? [], null);
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

        $allowedValues = $this->getResponseTypeAllowableValues();
        if (!is_null($this->container['response_type']) && !in_array($this->container['response_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'response_type', must be one of '%s'",
                $this->container['response_type'],
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
     * Gets response_type
     *
     * @return string|null
     */
    public function getResponseType()
    {
        return $this->container['response_type'];
    }

    /**
     * Sets response_type
     *
     * @param string|null $response_type response_type
     *
     * @return self
     */
    public function setResponseType($response_type)
    {
        if (is_null($response_type)) {
            throw new \InvalidArgumentException('non-nullable response_type cannot be null');
        }
        $allowedValues = $this->getResponseTypeAllowableValues();
        if (!in_array($response_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'response_type', must be one of '%s'",
                    $response_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['response_type'] = $response_type;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url redirect_url
     *
     * @return self
     */
    public function setRedirectUrl($redirect_url)
    {
        if (is_null($redirect_url)) {
            throw new \InvalidArgumentException('non-nullable redirect_url cannot be null');
        }
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets honeypot_field
     *
     * @return string|null
     */
    public function getHoneypotField()
    {
        return $this->container['honeypot_field'];
    }

    /**
     * Sets honeypot_field
     *
     * @param string|null $honeypot_field honeypot_field
     *
     * @return self
     */
    public function setHoneypotField($honeypot_field)
    {
        if (is_null($honeypot_field)) {
            array_push($this->openAPINullablesSetToNull, 'honeypot_field');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('honeypot_field', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['honeypot_field'] = $honeypot_field;

        return $this;
    }

    /**
     * Gets recaptcha_secret
     *
     * @return string|null
     */
    public function getRecaptchaSecret()
    {
        return $this->container['recaptcha_secret'];
    }

    /**
     * Sets recaptcha_secret
     *
     * @param string|null $recaptcha_secret recaptcha_secret
     *
     * @return self
     */
    public function setRecaptchaSecret($recaptcha_secret)
    {
        if (is_null($recaptcha_secret)) {
            array_push($this->openAPINullablesSetToNull, 'recaptcha_secret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recaptcha_secret', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['recaptcha_secret'] = $recaptcha_secret;

        return $this;
    }

    /**
     * Gets endpoint
     *
     * @return string|null
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     *
     * @param string|null $endpoint endpoint
     *
     * @return self
     */
    public function setEndpoint($endpoint)
    {
        if (is_null($endpoint)) {
            throw new \InvalidArgumentException('non-nullable endpoint cannot be null');
        }
        $this->container['endpoint'] = $endpoint;

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
     * Gets num_submissions
     *
     * @return array<string,int>|null
     */
    public function getNumSubmissions()
    {
        return $this->container['num_submissions'];
    }

    /**
     * Sets num_submissions
     *
     * @param array<string,int>|null $num_submissions num_submissions
     *
     * @return self
     */
    public function setNumSubmissions($num_submissions)
    {
        if (is_null($num_submissions)) {
            throw new \InvalidArgumentException('non-nullable num_submissions cannot be null');
        }
        $this->container['num_submissions'] = $num_submissions;

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


