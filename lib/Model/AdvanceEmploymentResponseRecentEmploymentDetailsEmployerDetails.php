<?php
/**
 * AdvanceEmploymentResponseRecentEmploymentDetailsEmployerDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cashfree Verification API's.
 *
 * Cashfree's Verification APIs provide different types of verification to our merchants.
 *
 * The version of the OpenAPI document: 2023-12-18
 * Contact: developers@cashfree.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cashfree\Model;

use \ArrayAccess;
use \Cashfree\ObjectSerializer;

/**
 * AdvanceEmploymentResponseRecentEmploymentDetailsEmployerDetails Class Doc Comment
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdvanceEmploymentResponseRecentEmploymentDetailsEmployerDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdvanceEmploymentResponse_recent_employment_details_employer_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'establishment_id' => 'string',
        'establishment_name' => 'string',
        'setup_date' => 'string',
        'ownership_type' => 'string',
        'employer_confidence_score' => 'float',
        'employer_name_match' => 'bool',
        'pf_filing_details' => '\Cashfree\Model\AdvanceEmploymentResponseRecentEmploymentDetailsEmployerDetailsPfFilingDetailsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'establishment_id' => null,
        'establishment_name' => null,
        'setup_date' => null,
        'ownership_type' => null,
        'employer_confidence_score' => null,
        'employer_name_match' => null,
        'pf_filing_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'establishment_id' => false,
		'establishment_name' => false,
		'setup_date' => false,
		'ownership_type' => false,
		'employer_confidence_score' => false,
		'employer_name_match' => false,
		'pf_filing_details' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'establishment_id' => 'establishment_id',
        'establishment_name' => 'establishment_name',
        'setup_date' => 'setup_date',
        'ownership_type' => 'ownership_type',
        'employer_confidence_score' => 'employer_confidence_score',
        'employer_name_match' => 'employer_name_match',
        'pf_filing_details' => 'pf_filing_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'establishment_id' => 'setEstablishmentId',
        'establishment_name' => 'setEstablishmentName',
        'setup_date' => 'setSetupDate',
        'ownership_type' => 'setOwnershipType',
        'employer_confidence_score' => 'setEmployerConfidenceScore',
        'employer_name_match' => 'setEmployerNameMatch',
        'pf_filing_details' => 'setPfFilingDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'establishment_id' => 'getEstablishmentId',
        'establishment_name' => 'getEstablishmentName',
        'setup_date' => 'getSetupDate',
        'ownership_type' => 'getOwnershipType',
        'employer_confidence_score' => 'getEmployerConfidenceScore',
        'employer_name_match' => 'getEmployerNameMatch',
        'pf_filing_details' => 'getPfFilingDetails'
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
        $this->setIfExists('establishment_id', $data ?? [], null);
        $this->setIfExists('establishment_name', $data ?? [], null);
        $this->setIfExists('setup_date', $data ?? [], null);
        $this->setIfExists('ownership_type', $data ?? [], null);
        $this->setIfExists('employer_confidence_score', $data ?? [], null);
        $this->setIfExists('employer_name_match', $data ?? [], null);
        $this->setIfExists('pf_filing_details', $data ?? [], null);
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
     * Gets establishment_id
     *
     * @return string|null
     */
    public function getEstablishmentId()
    {
        return $this->container['establishment_id'];
    }

    /**
     * Sets establishment_id
     *
     * @param string|null $establishment_id establishment_id
     *
     * @return self
     */
    public function setEstablishmentId($establishment_id)
    {
        if (is_null($establishment_id)) {
            throw new \InvalidArgumentException('non-nullable establishment_id cannot be null');
        }
        $this->container['establishment_id'] = $establishment_id;

        return $this;
    }

    /**
     * Gets establishment_name
     *
     * @return string|null
     */
    public function getEstablishmentName()
    {
        return $this->container['establishment_name'];
    }

    /**
     * Sets establishment_name
     *
     * @param string|null $establishment_name establishment_name
     *
     * @return self
     */
    public function setEstablishmentName($establishment_name)
    {
        if (is_null($establishment_name)) {
            throw new \InvalidArgumentException('non-nullable establishment_name cannot be null');
        }
        $this->container['establishment_name'] = $establishment_name;

        return $this;
    }

    /**
     * Gets setup_date
     *
     * @return string|null
     */
    public function getSetupDate()
    {
        return $this->container['setup_date'];
    }

    /**
     * Sets setup_date
     *
     * @param string|null $setup_date setup_date
     *
     * @return self
     */
    public function setSetupDate($setup_date)
    {
        if (is_null($setup_date)) {
            throw new \InvalidArgumentException('non-nullable setup_date cannot be null');
        }
        $this->container['setup_date'] = $setup_date;

        return $this;
    }

    /**
     * Gets ownership_type
     *
     * @return string|null
     */
    public function getOwnershipType()
    {
        return $this->container['ownership_type'];
    }

    /**
     * Sets ownership_type
     *
     * @param string|null $ownership_type ownership_type
     *
     * @return self
     */
    public function setOwnershipType($ownership_type)
    {
        if (is_null($ownership_type)) {
            throw new \InvalidArgumentException('non-nullable ownership_type cannot be null');
        }
        $this->container['ownership_type'] = $ownership_type;

        return $this;
    }

    /**
     * Gets employer_confidence_score
     *
     * @return float|null
     */
    public function getEmployerConfidenceScore()
    {
        return $this->container['employer_confidence_score'];
    }

    /**
     * Sets employer_confidence_score
     *
     * @param float|null $employer_confidence_score employer_confidence_score
     *
     * @return self
     */
    public function setEmployerConfidenceScore($employer_confidence_score)
    {
        if (is_null($employer_confidence_score)) {
            throw new \InvalidArgumentException('non-nullable employer_confidence_score cannot be null');
        }
        $this->container['employer_confidence_score'] = $employer_confidence_score;

        return $this;
    }

    /**
     * Gets employer_name_match
     *
     * @return bool|null
     */
    public function getEmployerNameMatch()
    {
        return $this->container['employer_name_match'];
    }

    /**
     * Sets employer_name_match
     *
     * @param bool|null $employer_name_match employer_name_match
     *
     * @return self
     */
    public function setEmployerNameMatch($employer_name_match)
    {
        if (is_null($employer_name_match)) {
            throw new \InvalidArgumentException('non-nullable employer_name_match cannot be null');
        }
        $this->container['employer_name_match'] = $employer_name_match;

        return $this;
    }

    /**
     * Gets pf_filing_details
     *
     * @return \Cashfree\Model\AdvanceEmploymentResponseRecentEmploymentDetailsEmployerDetailsPfFilingDetailsInner[]|null
     */
    public function getPfFilingDetails()
    {
        return $this->container['pf_filing_details'];
    }

    /**
     * Sets pf_filing_details
     *
     * @param \Cashfree\Model\AdvanceEmploymentResponseRecentEmploymentDetailsEmployerDetailsPfFilingDetailsInner[]|null $pf_filing_details pf_filing_details
     *
     * @return self
     */
    public function setPfFilingDetails($pf_filing_details)
    {
        if (is_null($pf_filing_details)) {
            throw new \InvalidArgumentException('non-nullable pf_filing_details cannot be null');
        }
        $this->container['pf_filing_details'] = $pf_filing_details;

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

