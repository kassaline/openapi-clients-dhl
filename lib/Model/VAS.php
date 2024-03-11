<?php
/**
 * VAS
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
 * VAS Class Doc Comment
 *
 * @category Class
 *
 * @description Value added services. Please note that services are specific to products and geographies and/or may require individual setup and billing numbers. Please test and contact your account representative in case of questions.
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class VAS implements \JsonSerializable, ArrayAccess, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'VAS';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'preferredNeighbour' => 'string',
        'preferredLocation' => 'string',
        'visualCheckOfAge' => 'string',
        'namedPersonOnly' => 'bool',
        'identCheck' => '\OpenAPI\Client\Dhl\Model\VASIdentCheck',
        'signedForByRecipient' => 'bool',
        'endorsement' => 'string',
        'preferredDay' => '\DateTime',
        'noNeighbourDelivery' => 'bool',
        'additionalInsurance' => '\OpenAPI\Client\Dhl\Model\Value',
        'bulkyGoods' => 'bool',
        'cashOnDelivery' => '\OpenAPI\Client\Dhl\Model\VASCashOnDelivery',
        'individualSenderRequirement' => 'string',
        'premium' => 'bool',
        'closestDropPoint' => 'bool',
        'parcelOutletRouting' => 'string',
        'dhlRetoure' => '\OpenAPI\Client\Dhl\Model\VASDhlRetoure',
        'postalDeliveryDutyPaid' => 'bool',
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
        'preferredNeighbour' => null,
        'preferredLocation' => null,
        'visualCheckOfAge' => null,
        'namedPersonOnly' => null,
        'identCheck' => null,
        'signedForByRecipient' => null,
        'endorsement' => null,
        'preferredDay' => 'date',
        'noNeighbourDelivery' => null,
        'additionalInsurance' => null,
        'bulkyGoods' => null,
        'cashOnDelivery' => null,
        'individualSenderRequirement' => null,
        'premium' => null,
        'closestDropPoint' => null,
        'parcelOutletRouting' => null,
        'dhlRetoure' => null,
        'postalDeliveryDutyPaid' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'preferredNeighbour' => false,
        'preferredLocation' => false,
        'visualCheckOfAge' => false,
        'namedPersonOnly' => false,
        'identCheck' => false,
        'signedForByRecipient' => false,
        'endorsement' => false,
        'preferredDay' => false,
        'noNeighbourDelivery' => false,
        'additionalInsurance' => false,
        'bulkyGoods' => false,
        'cashOnDelivery' => false,
        'individualSenderRequirement' => false,
        'premium' => false,
        'closestDropPoint' => false,
        'parcelOutletRouting' => false,
        'dhlRetoure' => false,
        'postalDeliveryDutyPaid' => false,
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
        'preferredNeighbour' => 'preferredNeighbour',
        'preferredLocation' => 'preferredLocation',
        'visualCheckOfAge' => 'visualCheckOfAge',
        'namedPersonOnly' => 'namedPersonOnly',
        'identCheck' => 'identCheck',
        'signedForByRecipient' => 'signedForByRecipient',
        'endorsement' => 'endorsement',
        'preferredDay' => 'preferredDay',
        'noNeighbourDelivery' => 'noNeighbourDelivery',
        'additionalInsurance' => 'additionalInsurance',
        'bulkyGoods' => 'bulkyGoods',
        'cashOnDelivery' => 'cashOnDelivery',
        'individualSenderRequirement' => 'individualSenderRequirement',
        'premium' => 'premium',
        'closestDropPoint' => 'closestDropPoint',
        'parcelOutletRouting' => 'parcelOutletRouting',
        'dhlRetoure' => 'dhlRetoure',
        'postalDeliveryDutyPaid' => 'postalDeliveryDutyPaid',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preferredNeighbour' => 'setPreferredNeighbour',
        'preferredLocation' => 'setPreferredLocation',
        'visualCheckOfAge' => 'setVisualCheckOfAge',
        'namedPersonOnly' => 'setNamedPersonOnly',
        'identCheck' => 'setIdentCheck',
        'signedForByRecipient' => 'setSignedForByRecipient',
        'endorsement' => 'setEndorsement',
        'preferredDay' => 'setPreferredDay',
        'noNeighbourDelivery' => 'setNoNeighbourDelivery',
        'additionalInsurance' => 'setAdditionalInsurance',
        'bulkyGoods' => 'setBulkyGoods',
        'cashOnDelivery' => 'setCashOnDelivery',
        'individualSenderRequirement' => 'setIndividualSenderRequirement',
        'premium' => 'setPremium',
        'closestDropPoint' => 'setClosestDropPoint',
        'parcelOutletRouting' => 'setParcelOutletRouting',
        'dhlRetoure' => 'setDhlRetoure',
        'postalDeliveryDutyPaid' => 'setPostalDeliveryDutyPaid',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preferredNeighbour' => 'getPreferredNeighbour',
        'preferredLocation' => 'getPreferredLocation',
        'visualCheckOfAge' => 'getVisualCheckOfAge',
        'namedPersonOnly' => 'getNamedPersonOnly',
        'identCheck' => 'getIdentCheck',
        'signedForByRecipient' => 'getSignedForByRecipient',
        'endorsement' => 'getEndorsement',
        'preferredDay' => 'getPreferredDay',
        'noNeighbourDelivery' => 'getNoNeighbourDelivery',
        'additionalInsurance' => 'getAdditionalInsurance',
        'bulkyGoods' => 'getBulkyGoods',
        'cashOnDelivery' => 'getCashOnDelivery',
        'individualSenderRequirement' => 'getIndividualSenderRequirement',
        'premium' => 'getPremium',
        'closestDropPoint' => 'getClosestDropPoint',
        'parcelOutletRouting' => 'getParcelOutletRouting',
        'dhlRetoure' => 'getDhlRetoure',
        'postalDeliveryDutyPaid' => 'getPostalDeliveryDutyPaid',
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

    public const VISUAL_CHECK_OF_AGE_A16 = 'A16';

    public const VISUAL_CHECK_OF_AGE_A18 = 'A18';

    public const ENDORSEMENT__RETURN = 'RETURN';

    public const ENDORSEMENT_ABANDON = 'ABANDON';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVisualCheckOfAgeAllowableValues()
    {
        return [
            self::VISUAL_CHECK_OF_AGE_A16,
            self::VISUAL_CHECK_OF_AGE_A18,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEndorsementAllowableValues()
    {
        return [
            self::ENDORSEMENT__RETURN,
            self::ENDORSEMENT_ABANDON,
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
     * @param  mixed[]  $data  Associated array of property values
     *                         initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('preferredNeighbour', $data ?? [], null);
        $this->setIfExists('preferredLocation', $data ?? [], null);
        $this->setIfExists('visualCheckOfAge', $data ?? [], null);
        $this->setIfExists('namedPersonOnly', $data ?? [], null);
        $this->setIfExists('identCheck', $data ?? [], null);
        $this->setIfExists('signedForByRecipient', $data ?? [], null);
        $this->setIfExists('endorsement', $data ?? [], null);
        $this->setIfExists('preferredDay', $data ?? [], null);
        $this->setIfExists('noNeighbourDelivery', $data ?? [], null);
        $this->setIfExists('additionalInsurance', $data ?? [], null);
        $this->setIfExists('bulkyGoods', $data ?? [], null);
        $this->setIfExists('cashOnDelivery', $data ?? [], null);
        $this->setIfExists('individualSenderRequirement', $data ?? [], null);
        $this->setIfExists('premium', $data ?? [], null);
        $this->setIfExists('closestDropPoint', $data ?? [], null);
        $this->setIfExists('parcelOutletRouting', $data ?? [], null);
        $this->setIfExists('dhlRetoure', $data ?? [], null);
        $this->setIfExists('postalDeliveryDutyPaid', $data ?? [], null);
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

        if (! is_null($this->container['preferredNeighbour']) && (mb_strlen($this->container['preferredNeighbour']) > 100)) {
            $invalidProperties[] = "invalid value for 'preferredNeighbour', the character length must be smaller than or equal to 100.";
        }

        if (! is_null($this->container['preferredNeighbour']) && (mb_strlen($this->container['preferredNeighbour']) < 0)) {
            $invalidProperties[] = "invalid value for 'preferredNeighbour', the character length must be bigger than or equal to 0.";
        }

        if (! is_null($this->container['preferredLocation']) && (mb_strlen($this->container['preferredLocation']) > 100)) {
            $invalidProperties[] = "invalid value for 'preferredLocation', the character length must be smaller than or equal to 100.";
        }

        if (! is_null($this->container['preferredLocation']) && (mb_strlen($this->container['preferredLocation']) < 0)) {
            $invalidProperties[] = "invalid value for 'preferredLocation', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getVisualCheckOfAgeAllowableValues();
        if (! is_null($this->container['visualCheckOfAge']) && ! in_array($this->container['visualCheckOfAge'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'visualCheckOfAge', must be one of '%s'",
                $this->container['visualCheckOfAge'],
                implode("', '", $allowedValues)
            );
        }

        if (! is_null($this->container['visualCheckOfAge']) && ! preg_match('/A16|A18/', $this->container['visualCheckOfAge'])) {
            $invalidProperties[] = "invalid value for 'visualCheckOfAge', must be conform to the pattern /A16|A18/.";
        }

        $allowedValues = $this->getEndorsementAllowableValues();
        if (! is_null($this->container['endorsement']) && ! in_array($this->container['endorsement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'endorsement', must be one of '%s'",
                $this->container['endorsement'],
                implode("', '", $allowedValues)
            );
        }

        if (! is_null($this->container['individualSenderRequirement']) && ! preg_match('/[a-zA-Z0-9]{2}/', $this->container['individualSenderRequirement'])) {
            $invalidProperties[] = "invalid value for 'individualSenderRequirement', must be conform to the pattern /[a-zA-Z0-9]{2}/.";
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
     * Gets preferredNeighbour
     *
     * @return string|null
     */
    public function getPreferredNeighbour()
    {
        return $this->container['preferredNeighbour'];
    }

    /**
     * Sets preferredNeighbour
     *
     * @param  string|null  $preferredNeighbour  Preferred neighbour. Can be specified as text.
     * @return self
     */
    public function setPreferredNeighbour($preferredNeighbour)
    {
        if (is_null($preferredNeighbour)) {
            throw new \InvalidArgumentException('non-nullable preferredNeighbour cannot be null');
        }
        if ((mb_strlen($preferredNeighbour) > 100)) {
            throw new \InvalidArgumentException('invalid length for $preferredNeighbour when calling VAS., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($preferredNeighbour) < 0)) {
            throw new \InvalidArgumentException('invalid length for $preferredNeighbour when calling VAS., must be bigger than or equal to 0.');
        }

        $this->container['preferredNeighbour'] = $preferredNeighbour;

        return $this;
    }

    /**
     * Gets preferredLocation
     *
     * @return string|null
     */
    public function getPreferredLocation()
    {
        return $this->container['preferredLocation'];
    }

    /**
     * Sets preferredLocation
     *
     * @param  string|null  $preferredLocation  Preferred location. Can be specified as text.
     * @return self
     */
    public function setPreferredLocation($preferredLocation)
    {
        if (is_null($preferredLocation)) {
            throw new \InvalidArgumentException('non-nullable preferredLocation cannot be null');
        }
        if ((mb_strlen($preferredLocation) > 100)) {
            throw new \InvalidArgumentException('invalid length for $preferredLocation when calling VAS., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($preferredLocation) < 0)) {
            throw new \InvalidArgumentException('invalid length for $preferredLocation when calling VAS., must be bigger than or equal to 0.');
        }

        $this->container['preferredLocation'] = $preferredLocation;

        return $this;
    }

    /**
     * Gets visualCheckOfAge
     *
     * @return string|null
     */
    public function getVisualCheckOfAge()
    {
        return $this->container['visualCheckOfAge'];
    }

    /**
     * Sets visualCheckOfAge
     *
     * @param  string|null  $visualCheckOfAge  if used it will trigger checking the age of recipient
     * @return self
     */
    public function setVisualCheckOfAge($visualCheckOfAge)
    {
        if (is_null($visualCheckOfAge)) {
            throw new \InvalidArgumentException('non-nullable visualCheckOfAge cannot be null');
        }
        $allowedValues = $this->getVisualCheckOfAgeAllowableValues();
        if (! in_array($visualCheckOfAge, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'visualCheckOfAge', must be one of '%s'",
                    $visualCheckOfAge,
                    implode("', '", $allowedValues)
                )
            );
        }

        if ((! preg_match('/A16|A18/', ObjectSerializer::toString($visualCheckOfAge)))) {
            throw new \InvalidArgumentException('invalid value for $visualCheckOfAge when calling VAS., must conform to the pattern /A16|A18/.');
        }

        $this->container['visualCheckOfAge'] = $visualCheckOfAge;

        return $this;
    }

    /**
     * Gets namedPersonOnly
     *
     * @return bool|null
     */
    public function getNamedPersonOnly()
    {
        return $this->container['namedPersonOnly'];
    }

    /**
     * Sets namedPersonOnly
     *
     * @param  bool|null  $namedPersonOnly  Delivery can only be signed for by yourself personally.
     * @return self
     */
    public function setNamedPersonOnly($namedPersonOnly)
    {
        if (is_null($namedPersonOnly)) {
            throw new \InvalidArgumentException('non-nullable namedPersonOnly cannot be null');
        }
        $this->container['namedPersonOnly'] = $namedPersonOnly;

        return $this;
    }

    /**
     * Gets identCheck
     *
     * @return \OpenAPI\Client\Dhl\Model\VASIdentCheck|null
     */
    public function getIdentCheck()
    {
        return $this->container['identCheck'];
    }

    /**
     * Sets identCheck
     *
     * @param  \OpenAPI\Client\Dhl\Model\VASIdentCheck|null  $identCheck  identCheck
     * @return self
     */
    public function setIdentCheck($identCheck)
    {
        if (is_null($identCheck)) {
            throw new \InvalidArgumentException('non-nullable identCheck cannot be null');
        }
        $this->container['identCheck'] = $identCheck;

        return $this;
    }

    /**
     * Gets signedForByRecipient
     *
     * @return bool|null
     */
    public function getSignedForByRecipient()
    {
        return $this->container['signedForByRecipient'];
    }

    /**
     * Sets signedForByRecipient
     *
     * @param  bool|null  $signedForByRecipient  Delivery must be signed for by the recipient and not by DHL staff
     * @return self
     */
    public function setSignedForByRecipient($signedForByRecipient)
    {
        if (is_null($signedForByRecipient)) {
            throw new \InvalidArgumentException('non-nullable signedForByRecipient cannot be null');
        }
        $this->container['signedForByRecipient'] = $signedForByRecipient;

        return $this;
    }

    /**
     * Gets endorsement
     *
     * @return string|null
     */
    public function getEndorsement()
    {
        return $this->container['endorsement'];
    }

    /**
     * Sets endorsement
     *
     * @param  string|null  $endorsement  Instructions and endorsement how to treat international undeliverable shipment. By default, shipments are returned if undeliverable. There are country specific rules whether the shipment is returned immediately or after a grace period.
     * @return self
     */
    public function setEndorsement($endorsement)
    {
        if (is_null($endorsement)) {
            throw new \InvalidArgumentException('non-nullable endorsement cannot be null');
        }
        $allowedValues = $this->getEndorsementAllowableValues();
        if (! in_array($endorsement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'endorsement', must be one of '%s'",
                    $endorsement,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['endorsement'] = $endorsement;

        return $this;
    }

    /**
     * Gets preferredDay
     *
     * @return \DateTime|null
     */
    public function getPreferredDay()
    {
        return $this->container['preferredDay'];
    }

    /**
     * Sets preferredDay
     *
     * @param  \DateTime|null  $preferredDay  Preferred day of delivery in format YYYY-MM-DD. Shipper can request a preferred day of delivery. The preferred day should be between 2 and 6 working days after handover to DHL.
     * @return self
     */
    public function setPreferredDay($preferredDay)
    {
        if (is_null($preferredDay)) {
            throw new \InvalidArgumentException('non-nullable preferredDay cannot be null');
        }
        $this->container['preferredDay'] = $preferredDay;

        return $this;
    }

    /**
     * Gets noNeighbourDelivery
     *
     * @return bool|null
     */
    public function getNoNeighbourDelivery()
    {
        return $this->container['noNeighbourDelivery'];
    }

    /**
     * Sets noNeighbourDelivery
     *
     * @param  bool|null  $noNeighbourDelivery  Delivery can only be signed for by yourself personally or by members of your household.
     * @return self
     */
    public function setNoNeighbourDelivery($noNeighbourDelivery)
    {
        if (is_null($noNeighbourDelivery)) {
            throw new \InvalidArgumentException('non-nullable noNeighbourDelivery cannot be null');
        }
        $this->container['noNeighbourDelivery'] = $noNeighbourDelivery;

        return $this;
    }

    /**
     * Gets additionalInsurance
     *
     * @return \OpenAPI\Client\Dhl\Model\Value|null
     */
    public function getAdditionalInsurance()
    {
        return $this->container['additionalInsurance'];
    }

    /**
     * Sets additionalInsurance
     *
     * @param  \OpenAPI\Client\Dhl\Model\Value|null  $additionalInsurance  additionalInsurance
     * @return self
     */
    public function setAdditionalInsurance($additionalInsurance)
    {
        if (is_null($additionalInsurance)) {
            throw new \InvalidArgumentException('non-nullable additionalInsurance cannot be null');
        }
        $this->container['additionalInsurance'] = $additionalInsurance;

        return $this;
    }

    /**
     * Gets bulkyGoods
     *
     * @return bool|null
     */
    public function getBulkyGoods()
    {
        return $this->container['bulkyGoods'];
    }

    /**
     * Sets bulkyGoods
     *
     * @param  bool|null  $bulkyGoods  Leaving this out is same as setting to false. Sperrgut.
     * @return self
     */
    public function setBulkyGoods($bulkyGoods)
    {
        if (is_null($bulkyGoods)) {
            throw new \InvalidArgumentException('non-nullable bulkyGoods cannot be null');
        }
        $this->container['bulkyGoods'] = $bulkyGoods;

        return $this;
    }

    /**
     * Gets cashOnDelivery
     *
     * @return \OpenAPI\Client\Dhl\Model\VASCashOnDelivery|null
     */
    public function getCashOnDelivery()
    {
        return $this->container['cashOnDelivery'];
    }

    /**
     * Sets cashOnDelivery
     *
     * @param  \OpenAPI\Client\Dhl\Model\VASCashOnDelivery|null  $cashOnDelivery  cashOnDelivery
     * @return self
     */
    public function setCashOnDelivery($cashOnDelivery)
    {
        if (is_null($cashOnDelivery)) {
            throw new \InvalidArgumentException('non-nullable cashOnDelivery cannot be null');
        }
        $this->container['cashOnDelivery'] = $cashOnDelivery;

        return $this;
    }

    /**
     * Gets individualSenderRequirement
     *
     * @return string|null
     */
    public function getIndividualSenderRequirement()
    {
        return $this->container['individualSenderRequirement'];
    }

    /**
     * Sets individualSenderRequirement
     *
     * @param  string|null  $individualSenderRequirement  Special instructions for delivery. 2 character code, possible values agreed in contract.
     * @return self
     */
    public function setIndividualSenderRequirement($individualSenderRequirement)
    {
        if (is_null($individualSenderRequirement)) {
            throw new \InvalidArgumentException('non-nullable individualSenderRequirement cannot be null');
        }

        if ((! preg_match('/[a-zA-Z0-9]{2}/', ObjectSerializer::toString($individualSenderRequirement)))) {
            throw new \InvalidArgumentException('invalid value for $individualSenderRequirement when calling VAS., must conform to the pattern /[a-zA-Z0-9]{2}/.');
        }

        $this->container['individualSenderRequirement'] = $individualSenderRequirement;

        return $this;
    }

    /**
     * Gets premium
     *
     * @return bool|null
     */
    public function getPremium()
    {
        return $this->container['premium'];
    }

    /**
     * Sets premium
     *
     * @param  bool|null  $premium  Choice of premium vs economy parcel. Availability is country dependent and may be manipulated by DHL if choice is not available. Please review the label.
     * @return self
     */
    public function setPremium($premium)
    {
        if (is_null($premium)) {
            throw new \InvalidArgumentException('non-nullable premium cannot be null');
        }
        $this->container['premium'] = $premium;

        return $this;
    }

    /**
     * Gets closestDropPoint
     *
     * @return bool|null
     */
    public function getClosestDropPoint()
    {
        return $this->container['closestDropPoint'];
    }

    /**
     * Sets closestDropPoint
     *
     * @param  bool|null  $closestDropPoint  Closest Droppoint Delivery to the droppoint closest to the address of the recipient of the shipment. For this kind of delivery either the phone number and/or the e-mail address of the receiver is mandatory. For shipments using DHL Paket International it is recommended that you choose one of the three delivery types: Economy, Premium, CDP. Otherwise, the current default for the receiver country will be picked.
     * @return self
     */
    public function setClosestDropPoint($closestDropPoint)
    {
        if (is_null($closestDropPoint)) {
            throw new \InvalidArgumentException('non-nullable closestDropPoint cannot be null');
        }
        $this->container['closestDropPoint'] = $closestDropPoint;

        return $this;
    }

    /**
     * Gets parcelOutletRouting
     *
     * @return string|null
     */
    public function getParcelOutletRouting()
    {
        return $this->container['parcelOutletRouting'];
    }

    /**
     * Sets parcelOutletRouting
     *
     * @param  string|null  $parcelOutletRouting  Undeliverable domestic shipment can be forwarded and held at retail. Notification to email (fallback: consignee email) will be used.
     * @return self
     */
    public function setParcelOutletRouting($parcelOutletRouting)
    {
        if (is_null($parcelOutletRouting)) {
            throw new \InvalidArgumentException('non-nullable parcelOutletRouting cannot be null');
        }
        $this->container['parcelOutletRouting'] = $parcelOutletRouting;

        return $this;
    }

    /**
     * Gets dhlRetoure
     *
     * @return \OpenAPI\Client\Dhl\Model\VASDhlRetoure|null
     */
    public function getDhlRetoure()
    {
        return $this->container['dhlRetoure'];
    }

    /**
     * Sets dhlRetoure
     *
     * @param  \OpenAPI\Client\Dhl\Model\VASDhlRetoure|null  $dhlRetoure  dhlRetoure
     * @return self
     */
    public function setDhlRetoure($dhlRetoure)
    {
        if (is_null($dhlRetoure)) {
            throw new \InvalidArgumentException('non-nullable dhlRetoure cannot be null');
        }
        $this->container['dhlRetoure'] = $dhlRetoure;

        return $this;
    }

    /**
     * Gets postalDeliveryDutyPaid
     *
     * @return bool|null
     */
    public function getPostalDeliveryDutyPaid()
    {
        return $this->container['postalDeliveryDutyPaid'];
    }

    /**
     * Sets postalDeliveryDutyPaid
     *
     * @param  bool|null  $postalDeliveryDutyPaid  All import duties are paid by the shipper.
     * @return self
     */
    public function setPostalDeliveryDutyPaid($postalDeliveryDutyPaid)
    {
        if (is_null($postalDeliveryDutyPaid)) {
            throw new \InvalidArgumentException('non-nullable postalDeliveryDutyPaid cannot be null');
        }
        $this->container['postalDeliveryDutyPaid'] = $postalDeliveryDutyPaid;

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