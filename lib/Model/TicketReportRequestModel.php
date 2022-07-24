<?php
/**
 * TicketReportRequestModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PARAGON PAYMENT SOLUTIONS REST API
 *
 * <h2>Paragon Processing Platform</h2><p>This document is to provide a detailed description of how a developer or software solution provider can integrate with the Paragon Processing Platform (Paragon Platform).  <br>The Paragon Platform is for developers who wish to use Paragon's processing services within their software applications.  The Paragon Platform can stand alone as a web-based storefront with (or without) attached card readers or may be used in combination with point-of-sale (POS) and order entry applications.<br>The Paragon Platform accepts payments in many forms, including check, credit, debit, gift, loyalty and EBT cards. Payments may be taken online, over the telephone, from a mobile phone and at physical store locations. In addition to handling large volumes of payment transactions, the Paragon Platform manages and settles batches, protects sensitive card information, administers billing contracts and produces operational and analytical reports. </p><br><h2>Application Programming Interfaces (APIs)</h2><img src=\"../../Media/Images/Paragon_API_Communication.png\" alt=\"\" width=\"624\" height=\"242\"> <p>With our API, software systems and devices communicate with the Paragon Platform by exchanging messages.  <ol> <li>Client Application formulates a message and transmits the request to the Paragon Platform.</li> <li>The Paragon Platform translates the request and relays it to the Payment Processing Network.</li> <li>The Payment Processing Network processes the request and returns a response to the Paragon Platform.</li> <li>The Paragon Platform translates the response and relays it to the Client Application.</li></ol></p><br><h2>The Path to Integration </h2><img src=\"../../Media/Images/Paragon_Path_To_Integration.png\" alt=\"\" width=\"624\" height=\"258\"> <p><br><h3>Step 1: Open a Test Account </h3><p>Visit https://developer.paragonsolutions.com/testaccount to register for a free test account. Once registered you have instant access to your test account credentials and all the documentation you need to get started.  Head over to the library and make sure to check out all of our API's to learn about the Paragon Processing Platform transaction requests and responses.</p><br><h3>Step 2: Code & Certify</h3><p>Once in the Paragon Development portal, begin your certification or have an experienced Paragon integration specialist guide you through the testing process.  Once coding and testing are completed submit your request for certification.   Our team will then perform a detailed review of your integration to make sure your integration meets all your business requirements for success. </p><br><h3>Step 3: Go Live!</h3><p>After final review and testing your software solution is ready to begin taking live payments!  We know, an integration that is easy sounds too good to be true.  Don't take our word for it, start your integration today! </p><p><h3>Developer Notes</h3><ul><li>Install your development platform according to its product documentation.</li><li>Read through all the steps before you get started. We recommend reviewing the rest of this guide to familiarize yourself with the Paragon Processing Platform's terms, capabilities, web services and operations.</li></ul></p></p>
 *
 * The version of the OpenAPI document: 2.0
 * Contact: isvsupport@paragonsolutions.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DCarbone\ParagonSolutionsPHPSDK\Model;

use \ArrayAccess;
use \DCarbone\ParagonSolutionsPHPSDK\ObjectSerializer;

/**
 * TicketReportRequestModel Class Doc Comment
 *
 * @category Class
 * @package  DCarbone\ParagonSolutionsPHPSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TicketReportRequestModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TicketReportRequestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_date' => 'string',
        'end_date' => 'string',
        'terminal_key' => 'string',
        'terminal_id' => 'string',
        'terminal_serial_number' => 'string',
        'ticket_status' => 'string',
        'recent_10' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'start_date' => null,
        'end_date' => null,
        'terminal_key' => null,
        'terminal_id' => null,
        'terminal_serial_number' => null,
        'ticket_status' => null,
        'recent_10' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'terminal_key' => 'terminal_key',
        'terminal_id' => 'terminal_id',
        'terminal_serial_number' => 'terminal_serial_number',
        'ticket_status' => 'ticket_status',
        'recent_10' => 'recent_10'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'terminal_key' => 'setTerminalKey',
        'terminal_id' => 'setTerminalId',
        'terminal_serial_number' => 'setTerminalSerialNumber',
        'ticket_status' => 'setTicketStatus',
        'recent_10' => 'setRecent10'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'terminal_key' => 'getTerminalKey',
        'terminal_id' => 'getTerminalId',
        'terminal_serial_number' => 'getTerminalSerialNumber',
        'ticket_status' => 'getTicketStatus',
        'recent_10' => 'getRecent10'
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

    public const TICKET_STATUS_NOTSET = 'NOTSET';
    public const TICKET_STATUS_OPEN = 'OPEN';
    public const TICKET_STATUS_INPROCESS = 'INPROCESS';
    public const TICKET_STATUS_COMPLETE = 'COMPLETE';
    public const TICKET_STATUS_ERROR = 'ERROR';
    public const TICKET_STATUS_CANCELLED = 'CANCELLED';
    public const TICKET_STATUS_REVERSED = 'REVERSED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTicketStatusAllowableValues()
    {
        return [
            self::TICKET_STATUS_NOTSET,
            self::TICKET_STATUS_OPEN,
            self::TICKET_STATUS_INPROCESS,
            self::TICKET_STATUS_COMPLETE,
            self::TICKET_STATUS_ERROR,
            self::TICKET_STATUS_CANCELLED,
            self::TICKET_STATUS_REVERSED,
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
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['terminal_key'] = $data['terminal_key'] ?? null;
        $this->container['terminal_id'] = $data['terminal_id'] ?? null;
        $this->container['terminal_serial_number'] = $data['terminal_serial_number'] ?? null;
        $this->container['ticket_status'] = $data['ticket_status'] ?? null;
        $this->container['recent_10'] = $data['recent_10'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['start_date']) && (mb_strlen($this->container['start_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'start_date', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['end_date']) && (mb_strlen($this->container['end_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'end_date', the character length must be smaller than or equal to 10.";
        }

        $allowedValues = $this->getTicketStatusAllowableValues();
        if (!is_null($this->container['ticket_status']) && !in_array($this->container['ticket_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ticket_status', must be one of '%s'",
                $this->container['ticket_status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['ticket_status']) && (mb_strlen($this->container['ticket_status']) > 10)) {
            $invalidProperties[] = "invalid value for 'ticket_status', the character length must be smaller than or equal to 10.";
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
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date Filter by start date where ticket_create_date &gt;= start_date  Format: YYYY-MM-DD
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (!is_null($start_date) && (mb_strlen($start_date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $start_date when calling TicketReportRequestModel., must be smaller than or equal to 10.');
        }

        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (!is_null($end_date) && (mb_strlen($end_date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $end_date when calling TicketReportRequestModel., must be smaller than or equal to 10.');
        }

        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets terminal_key
     *
     * @return string|null
     */
    public function getTerminalKey()
    {
        return $this->container['terminal_key'];
    }

    /**
     * Sets terminal_key
     *
     * @param string|null $terminal_key Filter by Terminal Key  Note: Unique identifier for the terminal assigned by the merchant
     *
     * @return self
     */
    public function setTerminalKey($terminal_key)
    {
        $this->container['terminal_key'] = $terminal_key;

        return $this;
    }

    /**
     * Gets terminal_id
     *
     * @return string|null
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     *
     * @param string|null $terminal_id Filter by Terminal ID  Note: Unique identifier for the terminal assigned by the merchant
     *
     * @return self
     */
    public function setTerminalId($terminal_id)
    {
        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    /**
     * Gets terminal_serial_number
     *
     * @return string|null
     */
    public function getTerminalSerialNumber()
    {
        return $this->container['terminal_serial_number'];
    }

    /**
     * Sets terminal_serial_number
     *
     * @param string|null $terminal_serial_number Filter by terminal serial number
     *
     * @return self
     */
    public function setTerminalSerialNumber($terminal_serial_number)
    {
        $this->container['terminal_serial_number'] = $terminal_serial_number;

        return $this;
    }

    /**
     * Gets ticket_status
     *
     * @return string|null
     */
    public function getTicketStatus()
    {
        return $this->container['ticket_status'];
    }

    /**
     * Sets ticket_status
     *
     * @param string|null $ticket_status Filter by ticket status. Valid values are 1, 2, 3, 4 (1=Open, 2=Complete, 3=Error, 4=Cancelled)
     *
     * @return self
     */
    public function setTicketStatus($ticket_status)
    {
        $allowedValues = $this->getTicketStatusAllowableValues();
        if (!is_null($ticket_status) && !in_array($ticket_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ticket_status', must be one of '%s'",
                    $ticket_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($ticket_status) && (mb_strlen($ticket_status) > 10)) {
            throw new \InvalidArgumentException('invalid length for $ticket_status when calling TicketReportRequestModel., must be smaller than or equal to 10.');
        }

        $this->container['ticket_status'] = $ticket_status;

        return $this;
    }

    /**
     * Gets recent_10
     *
     * @return string|null
     */
    public function getRecent10()
    {
        return $this->container['recent_10'];
    }

    /**
     * Sets recent_10
     *
     * @param string|null $recent_10 Filter by recent 10 tickets (overrides date and top filters)
     *
     * @return self
     */
    public function setRecent10($recent_10)
    {
        $this->container['recent_10'] = $recent_10;

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

