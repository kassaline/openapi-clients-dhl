<?php
/**
 * ShipmentManifestingRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client\Dhl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Parcel DE Shipping API (Post & Parcel Germany)
 *
 * Note: This is the specification of the DPDHL Group Parcel DE Shipping API for Post & Parcel Germany. This REST web service allows business customers to create shipping labels on demand.
 *
 * The version of the OpenAPI document: 2.1.12
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Dhl\Model;

use \ArrayAccess;
use \OpenAPI\Client\Dhl\ObjectSerializer;

/**
 * ShipmentManifestingRequest Class Doc Comment
 *
 * @category Class
 * @description List of shipments which shall be manifested.
 * @package  OpenAPI\Client\Dhl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentManifestingRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentManifestingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'profile' => 'string',
        'shipmentNumbers' => 'string[]',
        'billingNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'profile' => null,
        'shipmentNumbers' => null,
        'billingNumber' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'profile' => false,
        'shipmentNumbers' => false,
        'billingNumber' => false
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
        'profile' => 'profile',
        'shipmentNumbers' => 'shipmentNumbers',
        'billingNumber' => 'billingNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'profile' => 'setProfile',
        'shipmentNumbers' => 'setShipmentNumbers',
        'billingNumber' => 'setBillingNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'profile' => 'getProfile',
        'shipmentNumbers' => 'getShipmentNumbers',
        'billingNumber' => 'getBillingNumber'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('profile', $data ?? [], null);
        $this->setIfExists('shipmentNumbers', $data ?? [], null);
        $this->setIfExists('billingNumber', $data ?? [], null);
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

        if ($this->container['profile'] === null) {
            $invalidProperties[] = "'profile' can't be null";
        }
        if ((mb_strlen($this->container['profile']) > 35)) {
            $invalidProperties[] = "invalid value for 'profile', the character length must be smaller than or equal to 35.";
        }

        if ((mb_strlen($this->container['profile']) < 0)) {
            $invalidProperties[] = "invalid value for 'profile', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['shipmentNumbers']) && (count($this->container['shipmentNumbers']) > 30)) {
            $invalidProperties[] = "invalid value for 'shipmentNumbers', number of items must be less than or equal to 30.";
        }

        if (!is_null($this->container['shipmentNumbers']) && (count($this->container['shipmentNumbers']) < 1)) {
            $invalidProperties[] = "invalid value for 'shipmentNumbers', number of items must be greater than or equal to 1.";
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
     * Gets profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string $profile profile
     *
     * @return self
     */
    public function setProfile($profile)
    {
        if (is_null($profile)) {
            throw new \InvalidArgumentException('non-nullable profile cannot be null');
        }
        if ((mb_strlen($profile) > 35)) {
            throw new \InvalidArgumentException('invalid length for $profile when calling ShipmentManifestingRequest., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($profile) < 0)) {
            throw new \InvalidArgumentException('invalid length for $profile when calling ShipmentManifestingRequest., must be bigger than or equal to 0.');
        }

        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets shipmentNumbers
     *
     * @return string[]|null
     */
    public function getShipmentNumbers()
    {
        return $this->container['shipmentNumbers'];
    }

    /**
     * Sets shipmentNumbers
     *
     * @param string[]|null $shipmentNumbers List of shipment IDs for manifesting.
     *
     * @return self
     */
    public function setShipmentNumbers($shipmentNumbers)
    {
        if (is_null($shipmentNumbers)) {
            throw new \InvalidArgumentException('non-nullable shipmentNumbers cannot be null');
        }

        if ((count($shipmentNumbers) > 30)) {
            throw new \InvalidArgumentException('invalid value for $shipmentNumbers when calling ShipmentManifestingRequest., number of items must be less than or equal to 30.');
        }
        if ((count($shipmentNumbers) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shipmentNumbers when calling ShipmentManifestingRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['shipmentNumbers'] = $shipmentNumbers;

        return $this;
    }

    /**
     * Gets billingNumber
     *
     * @return string|null
     */
    public function getBillingNumber()
    {
        return $this->container['billingNumber'];
    }

    /**
     * Sets billingNumber
     *
     * @param string|null $billingNumber Customer billingNumber number.
     *
     * @return self
     */
    public function setBillingNumber($billingNumber)
    {
        if (is_null($billingNumber)) {
            throw new \InvalidArgumentException('non-nullable billingNumber cannot be null');
        }
        $this->container['billingNumber'] = $billingNumber;

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


