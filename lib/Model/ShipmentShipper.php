<?php
/**
 * ShipmentShipper
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
 * ShipmentShipper Class Doc Comment
 *
 * @category Class
 * @description Shipper information, including contact information and address. Alternatively, a predefined shipper reference can be used.
 * @package  OpenAPI\Client\Dhl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentShipper implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment_shipper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name1' => 'string',
        'name2' => 'string',
        'name3' => 'string',
        'addressStreet' => 'string',
        'addressHouse' => 'string',
        'postalCode' => 'string',
        'city' => 'string',
        'country' => '\OpenAPI\Client\Dhl\Model\Country',
        'contactName' => 'string',
        'email' => 'string',
        'shipperRef' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name1' => null,
        'name2' => null,
        'name3' => null,
        'addressStreet' => null,
        'addressHouse' => null,
        'postalCode' => null,
        'city' => null,
        'country' => null,
        'contactName' => null,
        'email' => null,
        'shipperRef' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name1' => false,
        'name2' => false,
        'name3' => false,
        'addressStreet' => false,
        'addressHouse' => false,
        'postalCode' => false,
        'city' => false,
        'country' => false,
        'contactName' => false,
        'email' => false,
        'shipperRef' => false
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
        'name1' => 'name1',
        'name2' => 'name2',
        'name3' => 'name3',
        'addressStreet' => 'addressStreet',
        'addressHouse' => 'addressHouse',
        'postalCode' => 'postalCode',
        'city' => 'city',
        'country' => 'country',
        'contactName' => 'contactName',
        'email' => 'email',
        'shipperRef' => 'shipperRef'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name1' => 'setName1',
        'name2' => 'setName2',
        'name3' => 'setName3',
        'addressStreet' => 'setAddressStreet',
        'addressHouse' => 'setAddressHouse',
        'postalCode' => 'setPostalCode',
        'city' => 'setCity',
        'country' => 'setCountry',
        'contactName' => 'setContactName',
        'email' => 'setEmail',
        'shipperRef' => 'setShipperRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name1' => 'getName1',
        'name2' => 'getName2',
        'name3' => 'getName3',
        'addressStreet' => 'getAddressStreet',
        'addressHouse' => 'getAddressHouse',
        'postalCode' => 'getPostalCode',
        'city' => 'getCity',
        'country' => 'getCountry',
        'contactName' => 'getContactName',
        'email' => 'getEmail',
        'shipperRef' => 'getShipperRef'
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
        $this->setIfExists('name1', $data ?? [], null);
        $this->setIfExists('name2', $data ?? [], null);
        $this->setIfExists('name3', $data ?? [], null);
        $this->setIfExists('addressStreet', $data ?? [], null);
        $this->setIfExists('addressHouse', $data ?? [], null);
        $this->setIfExists('postalCode', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('contactName', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('shipperRef', $data ?? [], null);
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

        if ($this->container['name1'] === null) {
            $invalidProperties[] = "'name1' can't be null";
        }
        if ((mb_strlen($this->container['name1']) > 50)) {
            $invalidProperties[] = "invalid value for 'name1', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['name1']) < 1)) {
            $invalidProperties[] = "invalid value for 'name1', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name2']) && (mb_strlen($this->container['name2']) > 50)) {
            $invalidProperties[] = "invalid value for 'name2', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name2']) && (mb_strlen($this->container['name2']) < 1)) {
            $invalidProperties[] = "invalid value for 'name2', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name3']) && (mb_strlen($this->container['name3']) > 50)) {
            $invalidProperties[] = "invalid value for 'name3', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name3']) && (mb_strlen($this->container['name3']) < 1)) {
            $invalidProperties[] = "invalid value for 'name3', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['addressStreet'] === null) {
            $invalidProperties[] = "'addressStreet' can't be null";
        }
        if ((mb_strlen($this->container['addressStreet']) > 50)) {
            $invalidProperties[] = "invalid value for 'addressStreet', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['addressStreet']) < 1)) {
            $invalidProperties[] = "invalid value for 'addressStreet', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['addressHouse']) && (mb_strlen($this->container['addressHouse']) > 10)) {
            $invalidProperties[] = "invalid value for 'addressHouse', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['addressHouse']) && (mb_strlen($this->container['addressHouse']) < 1)) {
            $invalidProperties[] = "invalid value for 'addressHouse', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['postalCode']) && (mb_strlen($this->container['postalCode']) > 10)) {
            $invalidProperties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['postalCode']) && (mb_strlen($this->container['postalCode']) < 3)) {
            $invalidProperties[] = "invalid value for 'postalCode', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['postalCode']) && !preg_match("/^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/", $this->container['postalCode'])) {
            $invalidProperties[] = "invalid value for 'postalCode', must be conform to the pattern /^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 40)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 40.";
        }

        if ((mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if (!is_null($this->container['contactName']) && (mb_strlen($this->container['contactName']) > 80)) {
            $invalidProperties[] = "invalid value for 'contactName', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['contactName']) && (mb_strlen($this->container['contactName']) < 3)) {
            $invalidProperties[] = "invalid value for 'contactName', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 80)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 3)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['shipperRef'] === null) {
            $invalidProperties[] = "'shipperRef' can't be null";
        }
        if ((mb_strlen($this->container['shipperRef']) > 50)) {
            $invalidProperties[] = "invalid value for 'shipperRef', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['shipperRef']) < 0)) {
            $invalidProperties[] = "invalid value for 'shipperRef', the character length must be bigger than or equal to 0.";
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
     * Gets name1
     *
     * @return string
     */
    public function getName1()
    {
        return $this->container['name1'];
    }

    /**
     * Sets name1
     *
     * @param string $name1 Name1. Line 1 of name information
     *
     * @return self
     */
    public function setName1($name1)
    {
        if (is_null($name1)) {
            throw new \InvalidArgumentException('non-nullable name1 cannot be null');
        }
        if ((mb_strlen($name1) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name1 when calling ShipmentShipper., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name1) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name1 when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['name1'] = $name1;

        return $this;
    }

    /**
     * Gets name2
     *
     * @return string|null
     */
    public function getName2()
    {
        return $this->container['name2'];
    }

    /**
     * Sets name2
     *
     * @param string|null $name2 An optional, additional line of name information
     *
     * @return self
     */
    public function setName2($name2)
    {
        if (is_null($name2)) {
            throw new \InvalidArgumentException('non-nullable name2 cannot be null');
        }
        if ((mb_strlen($name2) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name2 when calling ShipmentShipper., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name2) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name2 when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['name2'] = $name2;

        return $this;
    }

    /**
     * Gets name3
     *
     * @return string|null
     */
    public function getName3()
    {
        return $this->container['name3'];
    }

    /**
     * Sets name3
     *
     * @param string|null $name3 An optional, additional line of name information
     *
     * @return self
     */
    public function setName3($name3)
    {
        if (is_null($name3)) {
            throw new \InvalidArgumentException('non-nullable name3 cannot be null');
        }
        if ((mb_strlen($name3) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name3 when calling ShipmentShipper., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name3) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name3 when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['name3'] = $name3;

        return $this;
    }

    /**
     * Gets addressStreet
     *
     * @return string
     */
    public function getAddressStreet()
    {
        return $this->container['addressStreet'];
    }

    /**
     * Sets addressStreet
     *
     * @param string $addressStreet Line 1 of the street address. This is just the street name. Can also include house number.
     *
     * @return self
     */
    public function setAddressStreet($addressStreet)
    {
        if (is_null($addressStreet)) {
            throw new \InvalidArgumentException('non-nullable addressStreet cannot be null');
        }
        if ((mb_strlen($addressStreet) > 50)) {
            throw new \InvalidArgumentException('invalid length for $addressStreet when calling ShipmentShipper., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($addressStreet) < 1)) {
            throw new \InvalidArgumentException('invalid length for $addressStreet when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['addressStreet'] = $addressStreet;

        return $this;
    }

    /**
     * Gets addressHouse
     *
     * @return string|null
     */
    public function getAddressHouse()
    {
        return $this->container['addressHouse'];
    }

    /**
     * Sets addressHouse
     *
     * @param string|null $addressHouse Line 1 of the street address. This is just the house number. Can be added to street name instead.
     *
     * @return self
     */
    public function setAddressHouse($addressHouse)
    {
        if (is_null($addressHouse)) {
            throw new \InvalidArgumentException('non-nullable addressHouse cannot be null');
        }
        if ((mb_strlen($addressHouse) > 10)) {
            throw new \InvalidArgumentException('invalid length for $addressHouse when calling ShipmentShipper., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($addressHouse) < 1)) {
            throw new \InvalidArgumentException('invalid length for $addressHouse when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['addressHouse'] = $addressHouse;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string|null $postalCode Mandatory for all countries but Ireland that use a postal code system.
     *
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        if (is_null($postalCode)) {
            throw new \InvalidArgumentException('non-nullable postalCode cannot be null');
        }
        if ((mb_strlen($postalCode) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling ShipmentShipper., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($postalCode) < 3)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling ShipmentShipper., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/", ObjectSerializer::toString($postalCode)))) {
            throw new \InvalidArgumentException("invalid value for \$postalCode when calling ShipmentShipper., must conform to the pattern /^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/.");
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 40)) {
            throw new \InvalidArgumentException('invalid length for $city when calling ShipmentShipper., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling ShipmentShipper., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \OpenAPI\Client\Dhl\Model\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \OpenAPI\Client\Dhl\Model\Country $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets contactName
     *
     * @return string|null
     */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
     * Sets contactName
     *
     * @param string|null $contactName optional contact name. (this is not the primary name printed on label)
     *
     * @return self
     */
    public function setContactName($contactName)
    {
        if (is_null($contactName)) {
            throw new \InvalidArgumentException('non-nullable contactName cannot be null');
        }
        if ((mb_strlen($contactName) > 80)) {
            throw new \InvalidArgumentException('invalid length for $contactName when calling ShipmentShipper., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($contactName) < 3)) {
            throw new \InvalidArgumentException('invalid length for $contactName when calling ShipmentShipper., must be bigger than or equal to 3.');
        }

        $this->container['contactName'] = $contactName;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Optional contact email address of the shipper
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 80)) {
            throw new \InvalidArgumentException('invalid length for $email when calling ShipmentShipper., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($email) < 3)) {
            throw new \InvalidArgumentException('invalid length for $email when calling ShipmentShipper., must be bigger than or equal to 3.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets shipperRef
     *
     * @return string
     */
    public function getShipperRef()
    {
        return $this->container['shipperRef'];
    }

    /**
     * Sets shipperRef
     *
     * @param string $shipperRef Reference string to the shipper data configured in GKP(GeschÃ¤ftskundenportal - Business Costumer Portal).
     *
     * @return self
     */
    public function setShipperRef($shipperRef)
    {
        if (is_null($shipperRef)) {
            throw new \InvalidArgumentException('non-nullable shipperRef cannot be null');
        }
        if ((mb_strlen($shipperRef) > 50)) {
            throw new \InvalidArgumentException('invalid length for $shipperRef when calling ShipmentShipper., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($shipperRef) < 0)) {
            throw new \InvalidArgumentException('invalid length for $shipperRef when calling ShipmentShipper., must be bigger than or equal to 0.');
        }

        $this->container['shipperRef'] = $shipperRef;

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


