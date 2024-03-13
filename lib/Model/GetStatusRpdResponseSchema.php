<?php
/**
 * GetStatusRpdResponseSchema
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
 * GetStatusRpdResponseSchema Class Doc Comment
 *
 * @category Class
 * @description Reverse penny drop verification successful
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetStatusRpdResponseSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetStatusRpdResponseSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank_account' => 'string',
        'ifsc' => 'string',
        'upi' => 'string',
        'name_at_bank' => 'string',
        'verification_id' => 'string',
        'ref_id' => 'string',
        'utr' => 'string',
        'status' => 'string',
        'name_match_score' => 'string',
        'name_match_result' => 'string',
        'added_on' => 'string',
        'processed_on' => 'string',
        'penny_collected_on' => 'string',
        'reversal_status' => 'string',
        'account_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bank_account' => null,
        'ifsc' => null,
        'upi' => null,
        'name_at_bank' => null,
        'verification_id' => null,
        'ref_id' => null,
        'utr' => null,
        'status' => null,
        'name_match_score' => null,
        'name_match_result' => null,
        'added_on' => null,
        'processed_on' => null,
        'penny_collected_on' => null,
        'reversal_status' => null,
        'account_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'bank_account' => false,
		'ifsc' => false,
		'upi' => false,
		'name_at_bank' => false,
		'verification_id' => false,
		'ref_id' => false,
		'utr' => false,
		'status' => false,
		'name_match_score' => false,
		'name_match_result' => false,
		'added_on' => false,
		'processed_on' => false,
		'penny_collected_on' => false,
		'reversal_status' => false,
		'account_type' => false
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
        'bank_account' => 'bank_account',
        'ifsc' => 'ifsc',
        'upi' => 'upi',
        'name_at_bank' => 'name_at_bank',
        'verification_id' => 'verification_id',
        'ref_id' => 'ref_id',
        'utr' => 'utr',
        'status' => 'status',
        'name_match_score' => 'name_match_score',
        'name_match_result' => 'name_match_result',
        'added_on' => 'added_on',
        'processed_on' => 'processed_on',
        'penny_collected_on' => 'penny_collected_on',
        'reversal_status' => 'reversal_status',
        'account_type' => 'account_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_account' => 'setBankAccount',
        'ifsc' => 'setIfsc',
        'upi' => 'setUpi',
        'name_at_bank' => 'setNameAtBank',
        'verification_id' => 'setVerificationId',
        'ref_id' => 'setRefId',
        'utr' => 'setUtr',
        'status' => 'setStatus',
        'name_match_score' => 'setNameMatchScore',
        'name_match_result' => 'setNameMatchResult',
        'added_on' => 'setAddedOn',
        'processed_on' => 'setProcessedOn',
        'penny_collected_on' => 'setPennyCollectedOn',
        'reversal_status' => 'setReversalStatus',
        'account_type' => 'setAccountType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_account' => 'getBankAccount',
        'ifsc' => 'getIfsc',
        'upi' => 'getUpi',
        'name_at_bank' => 'getNameAtBank',
        'verification_id' => 'getVerificationId',
        'ref_id' => 'getRefId',
        'utr' => 'getUtr',
        'status' => 'getStatus',
        'name_match_score' => 'getNameMatchScore',
        'name_match_result' => 'getNameMatchResult',
        'added_on' => 'getAddedOn',
        'processed_on' => 'getProcessedOn',
        'penny_collected_on' => 'getPennyCollectedOn',
        'reversal_status' => 'getReversalStatus',
        'account_type' => 'getAccountType'
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
        $this->setIfExists('bank_account', $data ?? [], null);
        $this->setIfExists('ifsc', $data ?? [], null);
        $this->setIfExists('upi', $data ?? [], null);
        $this->setIfExists('name_at_bank', $data ?? [], null);
        $this->setIfExists('verification_id', $data ?? [], null);
        $this->setIfExists('ref_id', $data ?? [], null);
        $this->setIfExists('utr', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('name_match_score', $data ?? [], null);
        $this->setIfExists('name_match_result', $data ?? [], null);
        $this->setIfExists('added_on', $data ?? [], null);
        $this->setIfExists('processed_on', $data ?? [], null);
        $this->setIfExists('penny_collected_on', $data ?? [], null);
        $this->setIfExists('reversal_status', $data ?? [], null);
        $this->setIfExists('account_type', $data ?? [], null);
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
     * Gets bank_account
     *
     * @return string|null
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param string|null $bank_account It displays the bank account number of the individual.
     *
     * @return self
     */
    public function setBankAccount($bank_account)
    {
        if (is_null($bank_account)) {
            throw new \InvalidArgumentException('non-nullable bank_account cannot be null');
        }
        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets ifsc
     *
     * @return string|null
     */
    public function getIfsc()
    {
        return $this->container['ifsc'];
    }

    /**
     * Sets ifsc
     *
     * @param string|null $ifsc It displays the IFSC information of the individual's bank account.
     *
     * @return self
     */
    public function setIfsc($ifsc)
    {
        if (is_null($ifsc)) {
            throw new \InvalidArgumentException('non-nullable ifsc cannot be null');
        }
        $this->container['ifsc'] = $ifsc;

        return $this;
    }

    /**
     * Gets upi
     *
     * @return string|null
     */
    public function getUpi()
    {
        return $this->container['upi'];
    }

    /**
     * Sets upi
     *
     * @param string|null $upi It displays the UPI VPA information of the individual.
     *
     * @return self
     */
    public function setUpi($upi)
    {
        if (is_null($upi)) {
            throw new \InvalidArgumentException('non-nullable upi cannot be null');
        }
        $this->container['upi'] = $upi;

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
     * @param string|null $name_at_bank It displays the name of the individual registered in the bank records.
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
     * @param string|null $verification_id It displays the unique ID created by you to identify the verifiation request.
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
     * Gets ref_id
     *
     * @return string|null
     */
    public function getRefId()
    {
        return $this->container['ref_id'];
    }

    /**
     * Sets ref_id
     *
     * @param string|null $ref_id It displays the unique ID created by Cashfree Payments for reference purposes.
     *
     * @return self
     */
    public function setRefId($ref_id)
    {
        if (is_null($ref_id)) {
            throw new \InvalidArgumentException('non-nullable ref_id cannot be null');
        }
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets utr
     *
     * @return string|null
     */
    public function getUtr()
    {
        return $this->container['utr'];
    }

    /**
     * Sets utr
     *
     * @param string|null $utr It displays the unique transaction reference (UTR) number created by the bank to identify the transaction.
     *
     * @return self
     */
    public function setUtr($utr)
    {
        if (is_null($utr)) {
            throw new \InvalidArgumentException('non-nullable utr cannot be null');
        }
        $this->container['utr'] = $utr;

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
     * Gets name_match_score
     *
     * @return string|null
     */
    public function getNameMatchScore()
    {
        return $this->container['name_match_score'];
    }

    /**
     * Sets name_match_score
     *
     * @param string|null $name_match_score It displays the score of the name match verification.
     *
     * @return self
     */
    public function setNameMatchScore($name_match_score)
    {
        if (is_null($name_match_score)) {
            throw new \InvalidArgumentException('non-nullable name_match_score cannot be null');
        }
        $this->container['name_match_score'] = $name_match_score;

        return $this;
    }

    /**
     * Gets name_match_result
     *
     * @return string|null
     */
    public function getNameMatchResult()
    {
        return $this->container['name_match_result'];
    }

    /**
     * Sets name_match_result
     *
     * @param string|null $name_match_result It displays the result of the name match verification.
     *
     * @return self
     */
    public function setNameMatchResult($name_match_result)
    {
        if (is_null($name_match_result)) {
            throw new \InvalidArgumentException('non-nullable name_match_result cannot be null');
        }
        $this->container['name_match_result'] = $name_match_result;

        return $this;
    }

    /**
     * Gets added_on
     *
     * @return string|null
     */
    public function getAddedOn()
    {
        return $this->container['added_on'];
    }

    /**
     * Sets added_on
     *
     * @param string|null $added_on It displays the date and time of when the request was added.
     *
     * @return self
     */
    public function setAddedOn($added_on)
    {
        if (is_null($added_on)) {
            throw new \InvalidArgumentException('non-nullable added_on cannot be null');
        }
        $this->container['added_on'] = $added_on;

        return $this;
    }

    /**
     * Gets processed_on
     *
     * @return string|null
     */
    public function getProcessedOn()
    {
        return $this->container['processed_on'];
    }

    /**
     * Sets processed_on
     *
     * @param string|null $processed_on It displays the date and time of when the request was processed.
     *
     * @return self
     */
    public function setProcessedOn($processed_on)
    {
        if (is_null($processed_on)) {
            throw new \InvalidArgumentException('non-nullable processed_on cannot be null');
        }
        $this->container['processed_on'] = $processed_on;

        return $this;
    }

    /**
     * Gets penny_collected_on
     *
     * @return string|null
     */
    public function getPennyCollectedOn()
    {
        return $this->container['penny_collected_on'];
    }

    /**
     * Sets penny_collected_on
     *
     * @param string|null $penny_collected_on It displays the date and time of when the 1 rupee was collected.
     *
     * @return self
     */
    public function setPennyCollectedOn($penny_collected_on)
    {
        if (is_null($penny_collected_on)) {
            throw new \InvalidArgumentException('non-nullable penny_collected_on cannot be null');
        }
        $this->container['penny_collected_on'] = $penny_collected_on;

        return $this;
    }

    /**
     * Gets reversal_status
     *
     * @return string|null
     */
    public function getReversalStatus()
    {
        return $this->container['reversal_status'];
    }

    /**
     * Sets reversal_status
     *
     * @param string|null $reversal_status It displays the status of the rupee reversal.
     *
     * @return self
     */
    public function setReversalStatus($reversal_status)
    {
        if (is_null($reversal_status)) {
            throw new \InvalidArgumentException('non-nullable reversal_status cannot be null');
        }
        $this->container['reversal_status'] = $reversal_status;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type It displays the type of account.
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        if (is_null($account_type)) {
            throw new \InvalidArgumentException('non-nullable account_type cannot be null');
        }
        $this->container['account_type'] = $account_type;

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

