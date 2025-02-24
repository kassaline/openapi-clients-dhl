<?php
/**
 * BankAccount
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
 * BankAccount Class Doc Comment
 *
 * @category Class
 * @description Bank account data used for CoD (Cash on Delivery).
 * @package  OpenAPI\Client\Dhl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BankAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountHolder' => 'string',
        'bankName' => 'string',
        'iban' => 'string',
        'bic' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountHolder' => null,
        'bankName' => null,
        'iban' => null,
        'bic' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'accountHolder' => false,
        'bankName' => false,
        'iban' => false,
        'bic' => false
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
        'accountHolder' => 'accountHolder',
        'bankName' => 'bankName',
        'iban' => 'iban',
        'bic' => 'bic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountHolder' => 'setAccountHolder',
        'bankName' => 'setBankName',
        'iban' => 'setIban',
        'bic' => 'setBic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountHolder' => 'getAccountHolder',
        'bankName' => 'getBankName',
        'iban' => 'getIban',
        'bic' => 'getBic'
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
        $this->setIfExists('accountHolder', $data ?? [], null);
        $this->setIfExists('bankName', $data ?? [], null);
        $this->setIfExists('iban', $data ?? [], null);
        $this->setIfExists('bic', $data ?? [], null);
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

        if ($this->container['accountHolder'] === null) {
            $invalidProperties[] = "'accountHolder' can't be null";
        }
        if ((mb_strlen($this->container['accountHolder']) > 80)) {
            $invalidProperties[] = "invalid value for 'accountHolder', the character length must be smaller than or equal to 80.";
        }

        if ((mb_strlen($this->container['accountHolder']) < 0)) {
            $invalidProperties[] = "invalid value for 'accountHolder', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['bankName']) && (mb_strlen($this->container['bankName']) > 80)) {
            $invalidProperties[] = "invalid value for 'bankName', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['bankName']) && (mb_strlen($this->container['bankName']) < 0)) {
            $invalidProperties[] = "invalid value for 'bankName', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['iban'] === null) {
            $invalidProperties[] = "'iban' can't be null";
        }
        if (!preg_match("/[A-Z]{2,2}[0-9]{2,2}[a-zA-Z0-9]{1,30}/", $this->container['iban'])) {
            $invalidProperties[] = "invalid value for 'iban', must be conform to the pattern /[A-Z]{2,2}[0-9]{2,2}[a-zA-Z0-9]{1,30}/.";
        }

        if (!is_null($this->container['bic']) && !preg_match("/[a-zA-Z0-9]{8,11}/", $this->container['bic'])) {
            $invalidProperties[] = "invalid value for 'bic', must be conform to the pattern /[a-zA-Z0-9]{8,11}/.";
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
     * Gets accountHolder
     *
     * @return string
     */
    public function getAccountHolder()
    {
        return $this->container['accountHolder'];
    }

    /**
     * Sets accountHolder
     *
     * @param string $accountHolder accountHolder
     *
     * @return self
     */
    public function setAccountHolder($accountHolder)
    {
        if (is_null($accountHolder)) {
            throw new \InvalidArgumentException('non-nullable accountHolder cannot be null');
        }
        if ((mb_strlen($accountHolder) > 80)) {
            throw new \InvalidArgumentException('invalid length for $accountHolder when calling BankAccount., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($accountHolder) < 0)) {
            throw new \InvalidArgumentException('invalid length for $accountHolder when calling BankAccount., must be bigger than or equal to 0.');
        }

        $this->container['accountHolder'] = $accountHolder;

        return $this;
    }

    /**
     * Gets bankName
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bankName'];
    }

    /**
     * Sets bankName
     *
     * @param string|null $bankName bankName
     *
     * @return self
     */
    public function setBankName($bankName)
    {
        if (is_null($bankName)) {
            throw new \InvalidArgumentException('non-nullable bankName cannot be null');
        }
        if ((mb_strlen($bankName) > 80)) {
            throw new \InvalidArgumentException('invalid length for $bankName when calling BankAccount., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($bankName) < 0)) {
            throw new \InvalidArgumentException('invalid length for $bankName when calling BankAccount., must be bigger than or equal to 0.');
        }

        $this->container['bankName'] = $bankName;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban iban
     *
     * @return self
     */
    public function setIban($iban)
    {
        if (is_null($iban)) {
            throw new \InvalidArgumentException('non-nullable iban cannot be null');
        }

        if ((!preg_match("/[A-Z]{2,2}[0-9]{2,2}[a-zA-Z0-9]{1,30}/", ObjectSerializer::toString($iban)))) {
            throw new \InvalidArgumentException("invalid value for \$iban when calling BankAccount., must conform to the pattern /[A-Z]{2,2}[0-9]{2,2}[a-zA-Z0-9]{1,30}/.");
        }

        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string|null
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string|null $bic bic
     *
     * @return self
     */
    public function setBic($bic)
    {
        if (is_null($bic)) {
            throw new \InvalidArgumentException('non-nullable bic cannot be null');
        }

        if ((!preg_match("/[a-zA-Z0-9]{8,11}/", ObjectSerializer::toString($bic)))) {
            throw new \InvalidArgumentException("invalid value for \$bic when calling BankAccount., must conform to the pattern /[a-zA-Z0-9]{8,11}/.");
        }

        $this->container['bic'] = $bic;

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


