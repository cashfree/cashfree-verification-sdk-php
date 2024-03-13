<?php
/**
 * DigiLockerVerificationGetDocumentResponseSchemaSplitAddress
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
 * DigiLockerVerificationGetDocumentResponseSchemaSplitAddress Class Doc Comment
 *
 * @category Class
 * @description It contains the address information in individual components.
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DigiLockerVerificationGetDocumentResponseSchemaSplitAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DigiLockerVerificationGetDocumentResponseSchema_split_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'dist' => 'string',
        'house' => 'string',
        'landmark' => 'string',
        'pincode' => 'string',
        'po' => 'string',
        'state' => 'string',
        'street' => 'string',
        'subdist' => 'string',
        'vtc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country' => null,
        'dist' => null,
        'house' => null,
        'landmark' => null,
        'pincode' => null,
        'po' => null,
        'state' => null,
        'street' => null,
        'subdist' => null,
        'vtc' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'country' => false,
		'dist' => false,
		'house' => false,
		'landmark' => false,
		'pincode' => false,
		'po' => false,
		'state' => false,
		'street' => false,
		'subdist' => false,
		'vtc' => false
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
        'country' => 'country',
        'dist' => 'dist',
        'house' => 'house',
        'landmark' => 'landmark',
        'pincode' => 'pincode',
        'po' => 'po',
        'state' => 'state',
        'street' => 'street',
        'subdist' => 'subdist',
        'vtc' => 'vtc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'dist' => 'setDist',
        'house' => 'setHouse',
        'landmark' => 'setLandmark',
        'pincode' => 'setPincode',
        'po' => 'setPo',
        'state' => 'setState',
        'street' => 'setStreet',
        'subdist' => 'setSubdist',
        'vtc' => 'setVtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'dist' => 'getDist',
        'house' => 'getHouse',
        'landmark' => 'getLandmark',
        'pincode' => 'getPincode',
        'po' => 'getPo',
        'state' => 'getState',
        'street' => 'getStreet',
        'subdist' => 'getSubdist',
        'vtc' => 'getVtc'
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
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('dist', $data ?? [], null);
        $this->setIfExists('house', $data ?? [], null);
        $this->setIfExists('landmark', $data ?? [], null);
        $this->setIfExists('pincode', $data ?? [], null);
        $this->setIfExists('po', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('subdist', $data ?? [], null);
        $this->setIfExists('vtc', $data ?? [], null);
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
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country It displays the name of the country as present in the document.
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
     * Gets dist
     *
     * @return string|null
     */
    public function getDist()
    {
        return $this->container['dist'];
    }

    /**
     * Sets dist
     *
     * @param string|null $dist It displays the name of the district as present in the document.
     *
     * @return self
     */
    public function setDist($dist)
    {
        if (is_null($dist)) {
            throw new \InvalidArgumentException('non-nullable dist cannot be null');
        }
        $this->container['dist'] = $dist;

        return $this;
    }

    /**
     * Gets house
     *
     * @return string|null
     */
    public function getHouse()
    {
        return $this->container['house'];
    }

    /**
     * Sets house
     *
     * @param string|null $house It displays the name of the house as present in the document.
     *
     * @return self
     */
    public function setHouse($house)
    {
        if (is_null($house)) {
            throw new \InvalidArgumentException('non-nullable house cannot be null');
        }
        $this->container['house'] = $house;

        return $this;
    }

    /**
     * Gets landmark
     *
     * @return string|null
     */
    public function getLandmark()
    {
        return $this->container['landmark'];
    }

    /**
     * Sets landmark
     *
     * @param string|null $landmark It displays the name of the landmark as present in the document.
     *
     * @return self
     */
    public function setLandmark($landmark)
    {
        if (is_null($landmark)) {
            throw new \InvalidArgumentException('non-nullable landmark cannot be null');
        }
        $this->container['landmark'] = $landmark;

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
     * @param string|null $pincode It displays the PIN code as present in the document.
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
     * Gets po
     *
     * @return string|null
     */
    public function getPo()
    {
        return $this->container['po'];
    }

    /**
     * Sets po
     *
     * @param string|null $po It displays the name of the post office as present in the document.
     *
     * @return self
     */
    public function setPo($po)
    {
        if (is_null($po)) {
            throw new \InvalidArgumentException('non-nullable po cannot be null');
        }
        $this->container['po'] = $po;

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
     * @param string|null $state It displays the name of the state as present in the document.
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
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street It displays the name of the street as present in the document.
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets subdist
     *
     * @return string|null
     */
    public function getSubdist()
    {
        return $this->container['subdist'];
    }

    /**
     * Sets subdist
     *
     * @param string|null $subdist It displays the name of the sub district as present in the document.
     *
     * @return self
     */
    public function setSubdist($subdist)
    {
        if (is_null($subdist)) {
            throw new \InvalidArgumentException('non-nullable subdist cannot be null');
        }
        $this->container['subdist'] = $subdist;

        return $this;
    }

    /**
     * Gets vtc
     *
     * @return string|null
     */
    public function getVtc()
    {
        return $this->container['vtc'];
    }

    /**
     * Sets vtc
     *
     * @param string|null $vtc It displays the name of the VTC (village, town, city) as present in the address.
     *
     * @return self
     */
    public function setVtc($vtc)
    {
        if (is_null($vtc)) {
            throw new \InvalidArgumentException('non-nullable vtc cannot be null');
        }
        $this->container['vtc'] = $vtc;

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


