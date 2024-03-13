<?php
/**
 * CinResponseSchema
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
 * CinResponseSchema Class Doc Comment
 *
 * @category Class
 * @description Success response for retrieving CIN information
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CinResponseSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CinResponseSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'verification_id' => 'string',
        'reference_id' => 'int',
        'status' => 'string',
        'cin' => 'string',
        'company_name' => 'string',
        'registration_number' => 'float',
        'incorporation_date' => 'string',
        'cin_status' => 'string',
        'email' => 'string',
        'incorporation_country' => 'string',
        'director_details' => '\Cashfree\Model\CinResponseSchemaDirectorDetailsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'verification_id' => null,
        'reference_id' => null,
        'status' => null,
        'cin' => null,
        'company_name' => null,
        'registration_number' => null,
        'incorporation_date' => null,
        'cin_status' => null,
        'email' => null,
        'incorporation_country' => null,
        'director_details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'verification_id' => false,
		'reference_id' => false,
		'status' => false,
		'cin' => false,
		'company_name' => false,
		'registration_number' => false,
		'incorporation_date' => false,
		'cin_status' => false,
		'email' => false,
		'incorporation_country' => false,
		'director_details' => false
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
        'verification_id' => 'verification_id',
        'reference_id' => 'reference_id',
        'status' => 'status',
        'cin' => 'cin',
        'company_name' => 'company_name',
        'registration_number' => 'registration_number',
        'incorporation_date' => 'incorporation_date',
        'cin_status' => 'cin_status',
        'email' => 'email',
        'incorporation_country' => 'incorporation_country',
        'director_details' => 'director_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'verification_id' => 'setVerificationId',
        'reference_id' => 'setReferenceId',
        'status' => 'setStatus',
        'cin' => 'setCin',
        'company_name' => 'setCompanyName',
        'registration_number' => 'setRegistrationNumber',
        'incorporation_date' => 'setIncorporationDate',
        'cin_status' => 'setCinStatus',
        'email' => 'setEmail',
        'incorporation_country' => 'setIncorporationCountry',
        'director_details' => 'setDirectorDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'verification_id' => 'getVerificationId',
        'reference_id' => 'getReferenceId',
        'status' => 'getStatus',
        'cin' => 'getCin',
        'company_name' => 'getCompanyName',
        'registration_number' => 'getRegistrationNumber',
        'incorporation_date' => 'getIncorporationDate',
        'cin_status' => 'getCinStatus',
        'email' => 'getEmail',
        'incorporation_country' => 'getIncorporationCountry',
        'director_details' => 'getDirectorDetails'
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
        $this->setIfExists('verification_id', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('cin', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('registration_number', $data ?? [], null);
        $this->setIfExists('incorporation_date', $data ?? [], null);
        $this->setIfExists('cin_status', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('incorporation_country', $data ?? [], null);
        $this->setIfExists('director_details', $data ?? [], null);
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
     * Gets verification_id
     *
     * @return string|null
     */
    public function getVerificationId()
    {
        return $this->container['verification_id'];
    }

    /**
     * Sets verification_id
     *
     * @param string|null $verification_id It displays the unique ID you created to identify the API request.
     *
     * @return self
     */
    public function setVerificationId($verification_id)
    {
        if (is_null($verification_id)) {
            throw new \InvalidArgumentException('non-nullable verification_id cannot be null');
        }
        $this->container['verification_id'] = $verification_id;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return int|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param int|null $reference_id It displays the unique ID created by Cashfree Payments for reference purposes.
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        if (is_null($reference_id)) {
            throw new \InvalidArgumentException('non-nullable reference_id cannot be null');
        }
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status It displays the status of the CIN information
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets cin
     *
     * @return string|null
     */
    public function getCin()
    {
        return $this->container['cin'];
    }

    /**
     * Sets cin
     *
     * @param string|null $cin It displays the entered CIN information.
     *
     * @return self
     */
    public function setCin($cin)
    {
        if (is_null($cin)) {
            throw new \InvalidArgumentException('non-nullable cin cannot be null');
        }
        $this->container['cin'] = $cin;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name It displays the name of the company registered under the Ministry of Corporate Affaris.
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            throw new \InvalidArgumentException('non-nullable company_name cannot be null');
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets registration_number
     *
     * @return float|null
     */
    public function getRegistrationNumber()
    {
        return $this->container['registration_number'];
    }

    /**
     * Sets registration_number
     *
     * @param float|null $registration_number It displays the registration number of the company.
     *
     * @return self
     */
    public function setRegistrationNumber($registration_number)
    {
        if (is_null($registration_number)) {
            throw new \InvalidArgumentException('non-nullable registration_number cannot be null');
        }
        $this->container['registration_number'] = $registration_number;

        return $this;
    }

    /**
     * Gets incorporation_date
     *
     * @return string|null
     */
    public function getIncorporationDate()
    {
        return $this->container['incorporation_date'];
    }

    /**
     * Sets incorporation_date
     *
     * @param string|null $incorporation_date It displays the date of incorporation of the company.
     *
     * @return self
     */
    public function setIncorporationDate($incorporation_date)
    {
        if (is_null($incorporation_date)) {
            throw new \InvalidArgumentException('non-nullable incorporation_date cannot be null');
        }
        $this->container['incorporation_date'] = $incorporation_date;

        return $this;
    }

    /**
     * Gets cin_status
     *
     * @return string|null
     */
    public function getCinStatus()
    {
        return $this->container['cin_status'];
    }

    /**
     * Sets cin_status
     *
     * @param string|null $cin_status It displays the granular level status of the CIN information.
     *
     * @return self
     */
    public function setCinStatus($cin_status)
    {
        if (is_null($cin_status)) {
            throw new \InvalidArgumentException('non-nullable cin_status cannot be null');
        }
        $this->container['cin_status'] = $cin_status;

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
     * @param string|null $email It displays the email ID of the company registered under the Ministry of Company Affairs.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets incorporation_country
     *
     * @return string|null
     */
    public function getIncorporationCountry()
    {
        return $this->container['incorporation_country'];
    }

    /**
     * Sets incorporation_country
     *
     * @param string|null $incorporation_country It displays the name of the country where the company is located.
     *
     * @return self
     */
    public function setIncorporationCountry($incorporation_country)
    {
        if (is_null($incorporation_country)) {
            throw new \InvalidArgumentException('non-nullable incorporation_country cannot be null');
        }
        $this->container['incorporation_country'] = $incorporation_country;

        return $this;
    }

    /**
     * Gets director_details
     *
     * @return \Cashfree\Model\CinResponseSchemaDirectorDetailsInner[]|null
     */
    public function getDirectorDetails()
    {
        return $this->container['director_details'];
    }

    /**
     * Sets director_details
     *
     * @param \Cashfree\Model\CinResponseSchemaDirectorDetailsInner[]|null $director_details director_details
     *
     * @return self
     */
    public function setDirectorDetails($director_details)
    {
        if (is_null($director_details)) {
            throw new \InvalidArgumentException('non-nullable director_details cannot be null');
        }
        $this->container['director_details'] = $director_details;

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


