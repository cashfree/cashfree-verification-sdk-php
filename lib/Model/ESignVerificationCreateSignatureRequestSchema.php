<?php
/**
 * ESignVerificationCreateSignatureRequestSchema
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
 * ESignVerificationCreateSignatureRequestSchema Class Doc Comment
 *
 * @category Class
 * @description Find the request parameters to add the details of the document and signer(s)
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ESignVerificationCreateSignatureRequestSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ESignVerificationCreateSignatureRequestSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'verification_id' => 'string',
        'document_id' => 'int',
        'notification_modes' => 'string[]',
        'auth_type' => 'string',
        'expiry_in_days' => 'string',
        'signers' => '\Cashfree\Model\ESignVerificationCreateSignatureRequestSchemaSignersInner[]',
        'redirect_url' => 'string'
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
        'document_id' => null,
        'notification_modes' => null,
        'auth_type' => null,
        'expiry_in_days' => null,
        'signers' => null,
        'redirect_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'verification_id' => false,
		'document_id' => false,
		'notification_modes' => false,
		'auth_type' => false,
		'expiry_in_days' => false,
		'signers' => false,
		'redirect_url' => false
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
        'document_id' => 'document_id',
        'notification_modes' => 'notification_modes',
        'auth_type' => 'auth_type',
        'expiry_in_days' => 'expiry_in_days',
        'signers' => 'signers',
        'redirect_url' => 'redirect_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'verification_id' => 'setVerificationId',
        'document_id' => 'setDocumentId',
        'notification_modes' => 'setNotificationModes',
        'auth_type' => 'setAuthType',
        'expiry_in_days' => 'setExpiryInDays',
        'signers' => 'setSigners',
        'redirect_url' => 'setRedirectUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'verification_id' => 'getVerificationId',
        'document_id' => 'getDocumentId',
        'notification_modes' => 'getNotificationModes',
        'auth_type' => 'getAuthType',
        'expiry_in_days' => 'getExpiryInDays',
        'signers' => 'getSigners',
        'redirect_url' => 'getRedirectUrl'
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

    public const NOTIFICATION_MODES_EMAIL = 'email';
    public const NOTIFICATION_MODES_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';
    public const AUTH_TYPE_AADHAAR = 'AADHAAR';
    public const AUTH_TYPE_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNotificationModesAllowableValues()
    {
        return [
            self::NOTIFICATION_MODES_EMAIL,
            self::NOTIFICATION_MODES_UNKNOWN_DEFAULT_OPEN_API,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_AADHAAR,
            self::AUTH_TYPE_UNKNOWN_DEFAULT_OPEN_API,
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('verification_id', $data ?? [], 'ABC00123');
        $this->setIfExists('document_id', $data ?? [], 36);
        $this->setIfExists('notification_modes', $data ?? [], null);
        $this->setIfExists('auth_type', $data ?? [], null);
        $this->setIfExists('expiry_in_days', $data ?? [], '2');
        $this->setIfExists('signers', $data ?? [], null);
        $this->setIfExists('redirect_url', $data ?? [], 'REDIRECT_PAGE_URL');
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

        if ($this->container['verification_id'] === null) {
            $invalidProperties[] = "'verification_id' can't be null";
        }
        if ($this->container['document_id'] === null) {
            $invalidProperties[] = "'document_id' can't be null";
        }
        if ($this->container['notification_modes'] === null) {
            $invalidProperties[] = "'notification_modes' can't be null";
        }
        if ($this->container['auth_type'] === null) {
            $invalidProperties[] = "'auth_type' can't be null";
        }
        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($this->container['auth_type']) && !in_array($this->container['auth_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auth_type', must be one of '%s'",
                $this->container['auth_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['expiry_in_days'] === null) {
            $invalidProperties[] = "'expiry_in_days' can't be null";
        }
        if ($this->container['signers'] === null) {
            $invalidProperties[] = "'signers' can't be null";
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
     * Gets verification_id
     *
     * @return string
     */
    public function getVerificationId()
    {
        return $this->container['verification_id'];
    }

    /**
     * Sets verification_id
     *
     * @param string $verification_id It is the unique ID you create to identify the verification request. The maximum character limit is 50. Only alphanumeric, period (.), hyphen (-), and underscore ( _ ) are allowed.
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
     * Gets document_id
     *
     * @return int
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param int $document_id It is the unique ID received in the Upload Document for E-Sign API response.
     *
     * @return self
     */
    public function setDocumentId($document_id)
    {
        if (is_null($document_id)) {
            throw new \InvalidArgumentException('non-nullable document_id cannot be null');
        }
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets notification_modes
     *
     * @return string[]
     */
    public function getNotificationModes()
    {
        return $this->container['notification_modes'];
    }

    /**
     * Sets notification_modes
     *
     * @param string[] $notification_modes It is how you want to notify the signee about the e-sign details.
     *
     * @return self
     */
    public function setNotificationModes($notification_modes)
    {
        if (is_null($notification_modes)) {
            throw new \InvalidArgumentException('non-nullable notification_modes cannot be null');
        }
        $allowedValues = $this->getNotificationModesAllowableValues();
        if (array_diff($notification_modes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'notification_modes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['notification_modes'] = $notification_modes;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param string $auth_type It is the type of authentication to be used for signature.
     *
     * @return self
     */
    public function setAuthType($auth_type)
    {
        if (is_null($auth_type)) {
            throw new \InvalidArgumentException('non-nullable auth_type cannot be null');
        }
        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!in_array($auth_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auth_type', must be one of '%s'",
                    $auth_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets expiry_in_days
     *
     * @return string
     */
    public function getExpiryInDays()
    {
        return $this->container['expiry_in_days'];
    }

    /**
     * Sets expiry_in_days
     *
     * @param string $expiry_in_days It is the expiry of the signing link for each signer in days. The maximum allowed time is 15 days.
     *
     * @return self
     */
    public function setExpiryInDays($expiry_in_days)
    {
        if (is_null($expiry_in_days)) {
            throw new \InvalidArgumentException('non-nullable expiry_in_days cannot be null');
        }
        $this->container['expiry_in_days'] = $expiry_in_days;

        return $this;
    }

    /**
     * Gets signers
     *
     * @return \Cashfree\Model\ESignVerificationCreateSignatureRequestSchemaSignersInner[]
     */
    public function getSigners()
    {
        return $this->container['signers'];
    }

    /**
     * Sets signers
     *
     * @param \Cashfree\Model\ESignVerificationCreateSignatureRequestSchemaSignersInner[] $signers It should contain the details of the signer(s).
     *
     * @return self
     */
    public function setSigners($signers)
    {
        if (is_null($signers)) {
            throw new \InvalidArgumentException('non-nullable signers cannot be null');
        }
        $this->container['signers'] = $signers;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url It is the URL that you need to provide that takes the user to after completing the e-sign journey. It will contain the verification_id that can be used to get the status of the verification.
     *
     * @return self
     */
    public function setRedirectUrl($redirect_url)
    {
        if (is_null($redirect_url)) {
            throw new \InvalidArgumentException('non-nullable redirect_url cannot be null');
        }
        $this->container['redirect_url'] = $redirect_url;

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


