<?php
/**
 * AadhaarOcrResponseSchema
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
 * AadhaarOcrResponseSchema Class Doc Comment
 *
 * @category Class
 * @description Success response for Aadhaar Verification via OCR
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AadhaarOcrResponseSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AadhaarOcrResponseSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'yob' => 'string',
        'father' => 'string',
        'gender' => 'string',
        'uid' => 'string',
        'state' => 'string',
        'pincode' => 'string',
        'address' => 'string',
        'valid' => 'bool',
        'status' => 'string',
        'reference_id' => 'string',
        'verification_id' => 'string',
        'confidence_score' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'yob' => null,
        'father' => null,
        'gender' => null,
        'uid' => null,
        'state' => null,
        'pincode' => null,
        'address' => null,
        'valid' => null,
        'status' => null,
        'reference_id' => null,
        'verification_id' => null,
        'confidence_score' => null,
        'message' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'name' => false,
		'yob' => false,
		'father' => false,
		'gender' => false,
		'uid' => false,
		'state' => false,
		'pincode' => false,
		'address' => false,
		'valid' => false,
		'status' => false,
		'reference_id' => false,
		'verification_id' => false,
		'confidence_score' => false,
		'message' => false
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
        'name' => 'name',
        'yob' => 'yob',
        'father' => 'father',
        'gender' => 'gender',
        'uid' => 'uid',
        'state' => 'state',
        'pincode' => 'pincode',
        'address' => 'address',
        'valid' => 'valid',
        'status' => 'status',
        'reference_id' => 'reference_id',
        'verification_id' => 'verification_id',
        'confidence_score' => 'confidence_score',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'yob' => 'setYob',
        'father' => 'setFather',
        'gender' => 'setGender',
        'uid' => 'setUid',
        'state' => 'setState',
        'pincode' => 'setPincode',
        'address' => 'setAddress',
        'valid' => 'setValid',
        'status' => 'setStatus',
        'reference_id' => 'setReferenceId',
        'verification_id' => 'setVerificationId',
        'confidence_score' => 'setConfidenceScore',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'yob' => 'getYob',
        'father' => 'getFather',
        'gender' => 'getGender',
        'uid' => 'getUid',
        'state' => 'getState',
        'pincode' => 'getPincode',
        'address' => 'getAddress',
        'valid' => 'getValid',
        'status' => 'getStatus',
        'reference_id' => 'getReferenceId',
        'verification_id' => 'getVerificationId',
        'confidence_score' => 'getConfidenceScore',
        'message' => 'getMessage'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('yob', $data ?? [], null);
        $this->setIfExists('father', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('uid', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('pincode', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('valid', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('verification_id', $data ?? [], null);
        $this->setIfExists('confidence_score', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
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
     * @param string|null $name It displays the name of the aadhaar card holder.
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
     * Gets yob
     *
     * @return string|null
     */
    public function getYob()
    {
        return $this->container['yob'];
    }

    /**
     * Sets yob
     *
     * @param string|null $yob It displays the year of birth of the aadhaar card holder.
     *
     * @return self
     */
    public function setYob($yob)
    {
        if (is_null($yob)) {
            throw new \InvalidArgumentException('non-nullable yob cannot be null');
        }
        $this->container['yob'] = $yob;

        return $this;
    }

    /**
     * Gets father
     *
     * @return string|null
     */
    public function getFather()
    {
        return $this->container['father'];
    }

    /**
     * Sets father
     *
     * @param string|null $father It displays the father's name of the aadhaar card holder.
     *
     * @return self
     */
    public function setFather($father)
    {
        if (is_null($father)) {
            throw new \InvalidArgumentException('non-nullable father cannot be null');
        }
        $this->container['father'] = $father;

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
     * @param string|null $gender It displays the gender of the aadhaar card holder.
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
     * @param string|null $uid It displays the UID information as present in the aadhaar card.
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
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state It displays the name of the state as present in the aadhaar card.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets pincode
     *
     * @return string|null
     */
    public function getPincode()
    {
        return $this->container['pincode'];
    }

    /**
     * Sets pincode
     *
     * @param string|null $pincode It displays the PIN code information as present in the aadhaar card.
     *
     * @return self
     */
    public function setPincode($pincode)
    {
        if (is_null($pincode)) {
            throw new \InvalidArgumentException('non-nullable pincode cannot be null');
        }
        $this->container['pincode'] = $pincode;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address It displays the address information of the aadhaar card holder.
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets valid
     *
     * @return bool|null
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     *
     * @param bool|null $valid It displays whether the aadhaar card is valid or not.
     *
     * @return self
     */
    public function setValid($valid)
    {
        if (is_null($valid)) {
            throw new \InvalidArgumentException('non-nullable valid cannot be null');
        }
        $this->container['valid'] = $valid;

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
     * @param string|null $status It displays the status of the aadhaar card.
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
     * Gets reference_id
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string|null $reference_id It displays the unique ID created by Cashfree Payments for reference purposes.
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
     * @param string|null $verification_id It displays the unique ID you created to identify this request.
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
     * Gets confidence_score
     *
     * @return string|null
     */
    public function getConfidenceScore()
    {
        return $this->container['confidence_score'];
    }

    /**
     * Sets confidence_score
     *
     * @param string|null $confidence_score It displays the confidence score for this aadhaar card verification request.
     *
     * @return self
     */
    public function setConfidenceScore($confidence_score)
    {
        if (is_null($confidence_score)) {
            throw new \InvalidArgumentException('non-nullable confidence_score cannot be null');
        }
        $this->container['confidence_score'] = $confidence_score;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message It displays details about the success or failure of the API request.
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

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


