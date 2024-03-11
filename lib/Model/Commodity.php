<?php
/**
 * Commodity
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Parcel DE Shipping API (Post & Parcel Germany)
 *
 * Note: This is the specification of the DPDHL Group Parcel DE Shipping API for Post & Parcel Germany. This REST web service allows business customers to create shipping labels on demand.
 *
 * The version of the OpenAPI document: 2.1.8
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Dhl\Model;

use ArrayAccess;
use OpenAPI\Client\Dhl\ObjectSerializer;

/**
 * Commodity Class Doc Comment
 *
 * @category Class
 *
 * @description Commodity line item (e.g. a t-shirt) for international shipments which require individual listing of goods. Each good must contain a description of the item, the amount of the item, the net weight of one single item and the value of one single item. If you ship 5 t-shirts, you need to include the weight and value of one single shirt. The correct final weight and value will be calculated automatically. The HS Code and the country of origin are optional.
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class Commodity implements \JsonSerializable, ArrayAccess, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Commodity';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'itemDescription' => 'string',
        'countryOfOrigin' => '\OpenAPI\Client\Dhl\Model\Country',
        'hsCode' => 'string',
        'packagedQuantity' => 'int',
        'itemValue' => '\OpenAPI\Client\Dhl\Model\Value',
        'itemWeight' => '\OpenAPI\Client\Dhl\Model\Weight',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'itemDescription' => null,
        'countryOfOrigin' => null,
        'hsCode' => null,
        'packagedQuantity' => 'int32',
        'itemValue' => null,
        'itemWeight' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'itemDescription' => false,
        'countryOfOrigin' => false,
        'hsCode' => false,
        'packagedQuantity' => false,
        'itemValue' => false,
        'itemWeight' => false,
    ];

    /**
     * If a nullable field gets set to null, insert it here
     *
     * @var bool[]
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
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param  bool[]  $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
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
        'itemDescription' => 'itemDescription',
        'countryOfOrigin' => 'countryOfOrigin',
        'hsCode' => 'hsCode',
        'packagedQuantity' => 'packagedQuantity',
        'itemValue' => 'itemValue',
        'itemWeight' => 'itemWeight',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemDescription' => 'setItemDescription',
        'countryOfOrigin' => 'setCountryOfOrigin',
        'hsCode' => 'setHsCode',
        'packagedQuantity' => 'setPackagedQuantity',
        'itemValue' => 'setItemValue',
        'itemWeight' => 'setItemWeight',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemDescription' => 'getItemDescription',
        'countryOfOrigin' => 'getCountryOfOrigin',
        'hsCode' => 'getHsCode',
        'packagedQuantity' => 'getPackagedQuantity',
        'itemValue' => 'getItemValue',
        'itemWeight' => 'getItemWeight',
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
     * @param  mixed[]  $data  Associated array of property values
     *                         initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('itemDescription', $data ?? [], null);
        $this->setIfExists('countryOfOrigin', $data ?? [], null);
        $this->setIfExists('hsCode', $data ?? [], null);
        $this->setIfExists('packagedQuantity', $data ?? [], null);
        $this->setIfExists('itemValue', $data ?? [], null);
        $this->setIfExists('itemWeight', $data ?? [], null);
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array
     *
     * @param  mixed  $defaultValue
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

        if ($this->container['itemDescription'] === null) {
            $invalidProperties[] = "'itemDescription' can't be null";
        }
        if ((mb_strlen($this->container['itemDescription']) > 256)) {
            $invalidProperties[] = "invalid value for 'itemDescription', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['itemDescription']) < 1)) {
            $invalidProperties[] = "invalid value for 'itemDescription', the character length must be bigger than or equal to 1.";
        }

        if (! is_null($this->container['hsCode']) && (mb_strlen($this->container['hsCode']) > 11)) {
            $invalidProperties[] = "invalid value for 'hsCode', the character length must be smaller than or equal to 11.";
        }

        if (! is_null($this->container['hsCode']) && (mb_strlen($this->container['hsCode']) < 6)) {
            $invalidProperties[] = "invalid value for 'hsCode', the character length must be bigger than or equal to 6.";
        }

        if ($this->container['packagedQuantity'] === null) {
            $invalidProperties[] = "'packagedQuantity' can't be null";
        }
        if ($this->container['itemValue'] === null) {
            $invalidProperties[] = "'itemValue' can't be null";
        }
        if ($this->container['itemWeight'] === null) {
            $invalidProperties[] = "'itemWeight' can't be null";
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
     * Gets itemDescription
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->container['itemDescription'];
    }

    /**
     * Sets itemDescription
     *
     * @param  string  $itemDescription  A text that describes the commodity item. Only the first 50 characters of the description text is printed on the customs declaration form CN23.
     * @return self
     */
    public function setItemDescription($itemDescription)
    {
        if (is_null($itemDescription)) {
            throw new \InvalidArgumentException('non-nullable itemDescription cannot be null');
        }
        if ((mb_strlen($itemDescription) > 256)) {
            throw new \InvalidArgumentException('invalid length for $itemDescription when calling Commodity., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($itemDescription) < 1)) {
            throw new \InvalidArgumentException('invalid length for $itemDescription when calling Commodity., must be bigger than or equal to 1.');
        }

        $this->container['itemDescription'] = $itemDescription;

        return $this;
    }

    /**
     * Gets countryOfOrigin
     *
     * @return \OpenAPI\Client\Dhl\Model\Country|null
     */
    public function getCountryOfOrigin()
    {
        return $this->container['countryOfOrigin'];
    }

    /**
     * Sets countryOfOrigin
     *
     * @param  \OpenAPI\Client\Dhl\Model\Country|null  $countryOfOrigin  countryOfOrigin
     * @return self
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        if (is_null($countryOfOrigin)) {
            throw new \InvalidArgumentException('non-nullable countryOfOrigin cannot be null');
        }
        $this->container['countryOfOrigin'] = $countryOfOrigin;

        return $this;
    }

    /**
     * Gets hsCode
     *
     * @return string|null
     */
    public function getHsCode()
    {
        return $this->container['hsCode'];
    }

    /**
     * Sets hsCode
     *
     * @param  string|null  $hsCode  Harmonized System Code aka Customs tariff number.
     * @return self
     */
    public function setHsCode($hsCode)
    {
        if (is_null($hsCode)) {
            throw new \InvalidArgumentException('non-nullable hsCode cannot be null');
        }
        if ((mb_strlen($hsCode) > 11)) {
            throw new \InvalidArgumentException('invalid length for $hsCode when calling Commodity., must be smaller than or equal to 11.');
        }
        if ((mb_strlen($hsCode) < 6)) {
            throw new \InvalidArgumentException('invalid length for $hsCode when calling Commodity., must be bigger than or equal to 6.');
        }

        $this->container['hsCode'] = $hsCode;

        return $this;
    }

    /**
     * Gets packagedQuantity
     *
     * @return int
     */
    public function getPackagedQuantity()
    {
        return $this->container['packagedQuantity'];
    }

    /**
     * Sets packagedQuantity
     *
     * @param  int  $packagedQuantity  How many items of that type are in the package
     * @return self
     */
    public function setPackagedQuantity($packagedQuantity)
    {
        if (is_null($packagedQuantity)) {
            throw new \InvalidArgumentException('non-nullable packagedQuantity cannot be null');
        }
        $this->container['packagedQuantity'] = $packagedQuantity;

        return $this;
    }

    /**
     * Gets itemValue
     *
     * @return \OpenAPI\Client\Dhl\Model\Value
     */
    public function getItemValue()
    {
        return $this->container['itemValue'];
    }

    /**
     * Sets itemValue
     *
     * @param  \OpenAPI\Client\Dhl\Model\Value  $itemValue  itemValue
     * @return self
     */
    public function setItemValue($itemValue)
    {
        if (is_null($itemValue)) {
            throw new \InvalidArgumentException('non-nullable itemValue cannot be null');
        }
        $this->container['itemValue'] = $itemValue;

        return $this;
    }

    /**
     * Gets itemWeight
     *
     * @return \OpenAPI\Client\Dhl\Model\Weight
     */
    public function getItemWeight()
    {
        return $this->container['itemWeight'];
    }

    /**
     * Sets itemWeight
     *
     * @param  \OpenAPI\Client\Dhl\Model\Weight  $itemWeight  itemWeight
     * @return self
     */
    public function setItemWeight($itemWeight)
    {
        if (is_null($itemWeight)) {
            throw new \InvalidArgumentException('non-nullable itemWeight cannot be null');
        }
        $this->container['itemWeight'] = $itemWeight;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  int  $offset  Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  int  $offset  Offset
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
     * @param  int|null  $offset  Offset
     * @param  mixed  $value  Value to be set
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
     * @param  int  $offset  Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource.
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
