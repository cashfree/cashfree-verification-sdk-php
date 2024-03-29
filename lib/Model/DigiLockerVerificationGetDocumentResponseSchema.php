<?php
/**
 * DigiLockerVerificationGetDocumentResponseSchema
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
 * DigiLockerVerificationGetDocumentResponseSchema Class Doc Comment
 *
 * @category Class
 * @description Success response for Get DigiLocker Document API
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DigiLockerVerificationGetDocumentResponseSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DigiLockerVerificationGetDocumentResponseSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'care_of' => 'string',
        'dob' => 'string',
        'gender' => 'string',
        'name' => 'string',
        'photo_link' => 'string',
        'reference_id' => 'int',
        'split_address' => '\Cashfree\Model\DigiLockerVerificationGetDocumentResponseSchemaSplitAddress',
        'uid' => 'string',
        'verification_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'care_of' => null,
        'dob' => null,
        'gender' => null,
        'name' => null,
        'photo_link' => null,
        'reference_id' => null,
        'split_address' => null,
        'uid' => null,
        'verification_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'care_of' => false,
		'dob' => false,
		'gender' => false,
		'name' => false,
		'photo_link' => false,
		'reference_id' => false,
		'split_address' => false,
		'uid' => false,
		'verification_id' => false
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
        'care_of' => 'care_of',
        'dob' => 'dob',
        'gender' => 'gender',
        'name' => 'name',
        'photo_link' => 'photo_link',
        'reference_id' => 'reference_id',
        'split_address' => 'split_address',
        'uid' => 'uid',
        'verification_id' => 'verification_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'care_of' => 'setCareOf',
        'dob' => 'setDob',
        'gender' => 'setGender',
        'name' => 'setName',
        'photo_link' => 'setPhotoLink',
        'reference_id' => 'setReferenceId',
        'split_address' => 'setSplitAddress',
        'uid' => 'setUid',
        'verification_id' => 'setVerificationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'care_of' => 'getCareOf',
        'dob' => 'getDob',
        'gender' => 'getGender',
        'name' => 'getName',
        'photo_link' => 'getPhotoLink',
        'reference_id' => 'getReferenceId',
        'split_address' => 'getSplitAddress',
        'uid' => 'getUid',
        'verification_id' => 'getVerificationId'
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
        $this->setIfExists('care_of', $data ?? [], null);
        $this->setIfExists('dob', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('photo_link', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('split_address', $data ?? [], null);
        $this->setIfExists('uid', $data ?? [], null);
        $this->setIfExists('verification_id', $data ?? [], null);
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
     * Gets care_of
     *
     * @return string|null
     */
    public function getCareOf()
    {
        return $this->container['care_of'];
    }

    /**
     * Sets care_of
     *
     * @param string|null $care_of It displays the name of the parent or guardian.
     *
     * @return self
     */
    public function setCareOf($care_of)
    {
        if (is_null($care_of)) {
            throw new \InvalidArgumentException('non-nullable care_of cannot be null');
        }
        $this->container['care_of'] = $care_of;

        return $this;
    }

    /**
     * Gets dob
     *
     * @return string|null
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     *
     * @param string|null $dob It displays the date of birth of the individual.
     *
     * @return self
     */
    public function setDob($dob)
    {
        if (is_null($dob)) {
            throw new \InvalidArgumentException('non-nullable dob cannot be null');
        }
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender It displays the gender of the individual.
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

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
     * @param string|null $name It displays the name of the individual.
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
     * Gets photo_link
     *
     * @return string|null
     */
    public function getPhotoLink()
    {
        return $this->container['photo_link'];
    }

    /**
     * Sets photo_link
     *
     * @param string|null $photo_link It displays the link to the photo of the individual present in the document.
     *
     * @return self
     */
    public function setPhotoLink($photo_link)
    {
        if (is_null($photo_link)) {
            throw new \InvalidArgumentException('non-nullable photo_link cannot be null');
        }
        $this->container['photo_link'] = $photo_link;

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
     * Gets split_address
     *
     * @return \Cashfree\Model\DigiLockerVerificationGetDocumentResponseSchemaSplitAddress|null
     */
    public function getSplitAddress()
    {
        return $this->container['split_address'];
    }

    /**
     * Sets split_address
     *
     * @param \Cashfree\Model\DigiLockerVerificationGetDocumentResponseSchemaSplitAddress|null $split_address split_address
     *
     * @return self
     */
    public function setSplitAddress($split_address)
    {
        if (is_null($split_address)) {
            throw new \InvalidArgumentException('non-nullable split_address cannot be null');
        }
        $this->container['split_address'] = $split_address;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return string|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string|null $uid It displays the unique number assigned to the individual when applying for the aadhaar card.]
     *
     * @return self
     */
    public function setUid($uid)
    {
        if (is_null($uid)) {
            throw new \InvalidArgumentException('non-nullable uid cannot be null');
        }
        $this->container['uid'] = $uid;

        return $this;
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
     * @param string|null $verification_id It displays the unique ID you created to identify the verification request.
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


