<?php
/**
 * UpiMobileResponseSchema
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
 * UpiMobileResponseSchema Class Doc Comment
 *
 * @category Class
 * @description Success response
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpiMobileResponseSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpiMobileResponseSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference_id' => 'int',
        'status' => 'string',
        'account_status' => 'string',
        'verification_id' => 'string',
        'mobile_number' => 'string',
        'vpa' => 'string',
        'name_at_bank' => 'string',
        'additional_vpas' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference_id' => null,
        'status' => null,
        'account_status' => null,
        'verification_id' => null,
        'mobile_number' => null,
        'vpa' => null,
        'name_at_bank' => null,
        'additional_vpas' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'reference_id' => false,
		'status' => false,
		'account_status' => false,
		'verification_id' => false,
		'mobile_number' => false,
		'vpa' => false,
		'name_at_bank' => false,
		'additional_vpas' => false
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
        'reference_id' => 'reference_id',
        'status' => 'status',
        'account_status' => 'account_status',
        'verification_id' => 'verification_id',
        'mobile_number' => 'mobile_number',
        'vpa' => 'vpa',
        'name_at_bank' => 'name_at_bank',
        'additional_vpas' => 'additional_vpas'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_id' => 'setReferenceId',
        'status' => 'setStatus',
        'account_status' => 'setAccountStatus',
        'verification_id' => 'setVerificationId',
        'mobile_number' => 'setMobileNumber',
        'vpa' => 'setVpa',
        'name_at_bank' => 'setNameAtBank',
        'additional_vpas' => 'setAdditionalVpas'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_id' => 'getReferenceId',
        'status' => 'getStatus',
        'account_status' => 'getAccountStatus',
        'verification_id' => 'getVerificationId',
        'mobile_number' => 'getMobileNumber',
        'vpa' => 'getVpa',
        'name_at_bank' => 'getNameAtBank',
        'additional_vpas' => 'getAdditionalVpas'
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
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('account_status', $data ?? [], null);
        $this->setIfExists('verification_id', $data ?? [], null);
        $this->setIfExists('mobile_number', $data ?? [], null);
        $this->setIfExists('vpa', $data ?? [], null);
        $this->setIfExists('name_at_bank', $data ?? [], null);
        $this->setIfExists('additional_vpas', $data ?? [], null);
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
     * @param string|null $status It displays the status of the API request.
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
     * Gets account_status
     *
     * @return string|null
     */
    public function getAccountStatus()
    {
        return $this->container['account_status'];
    }

    /**
     * Sets account_status
     *
     * @param string|null $account_status It displays the status of the UPI VPA information.
     *
     * @return self
     */
    public function setAccountStatus($account_status)
    {
        if (is_null($account_status)) {
            throw new \InvalidArgumentException('non-nullable account_status cannot be null');
        }
        $this->container['account_status'] = $account_status;

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
     * Gets mobile_number
     *
     * @return string|null
     */
    public function getMobileNumber()
    {
        return $this->container['mobile_number'];
    }

    /**
     * Sets mobile_number
     *
     * @param string|null $mobile_number It displays the mobile number of the account holder.
     *
     * @return self
     */
    public function setMobileNumber($mobile_number)
    {
        if (is_null($mobile_number)) {
            throw new \InvalidArgumentException('non-nullable mobile_number cannot be null');
        }
        $this->container['mobile_number'] = $mobile_number;

        return $this;
    }

    /**
     * Gets vpa
     *
     * @return string|null
     */
    public function getVpa()
    {
        return $this->container['vpa'];
    }

    /**
     * Sets vpa
     *
     * @param string|null $vpa It displays the UPI VPA associated with the entered mobile number. If no primary UPI VPA is associated, tis field will be null.
     *
     * @return self
     */
    public function setVpa($vpa)
    {
        if (is_null($vpa)) {
            throw new \InvalidArgumentException('non-nullable vpa cannot be null');
        }
        $this->container['vpa'] = $vpa;

        return $this;
    }

    /**
     * Gets name_at_bank
     *
     * @return string|null
     */
    public function getNameAtBank()
    {
        return $this->container['name_at_bank'];
    }

    /**
     * Sets name_at_bank
     *
     * @param string|null $name_at_bank It displays the name of the account holder as registered in the bank. If no primary UPI VPA is associated, this field will be null.
     *
     * @return self
     */
    public function setNameAtBank($name_at_bank)
    {
        if (is_null($name_at_bank)) {
            throw new \InvalidArgumentException('non-nullable name_at_bank cannot be null');
        }
        $this->container['name_at_bank'] = $name_at_bank;

        return $this;
    }

    /**
     * Gets additional_vpas
     *
     * @return string[]|null
     */
    public function getAdditionalVpas()
    {
        return $this->container['additional_vpas'];
    }

    /**
     * Sets additional_vpas
     *
     * @param string[]|null $additional_vpas It displays the list of additional UPI VPA associated with the mobile number. If no other UPI VPA is linked with the mobile number, this will be an empty array [].
     *
     * @return self
     */
    public function setAdditionalVpas($additional_vpas)
    {
        if (is_null($additional_vpas)) {
            throw new \InvalidArgumentException('non-nullable additional_vpas cannot be null');
        }
        $this->container['additional_vpas'] = $additional_vpas;

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


