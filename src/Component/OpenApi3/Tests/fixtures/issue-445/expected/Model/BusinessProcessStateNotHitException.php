<?php

namespace PicturePark\API\Model;

class BusinessProcessStateNotHitException
{
    /**
     * 
     *
     * @var string
     */
    protected $traceLevel;
    /**
     * 
     *
     * @var string|null
     */
    protected $traceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $traceJobId;
    /**
     * 
     *
     * @var int
     */
    protected $httpStatusCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $exceptionMessage;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $customerAlias;
    /**
     * 
     *
     * @var string|null
     */
    protected $userId;
    /**
     * 
     *
     * @var string|null
     */
    protected $businessProcessId;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $expected;
    /**
     * 
     *
     * @var string|null
     */
    protected $actual;
    /**
     * 
     *
     * @return string
     */
    public function getTraceLevel() : string
    {
        return $this->traceLevel;
    }
    /**
     * 
     *
     * @param string $traceLevel
     *
     * @return self
     */
    public function setTraceLevel(string $traceLevel) : self
    {
        $this->traceLevel = $traceLevel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTraceId() : ?string
    {
        return $this->traceId;
    }
    /**
     * 
     *
     * @param string|null $traceId
     *
     * @return self
     */
    public function setTraceId(?string $traceId) : self
    {
        $this->traceId = $traceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTraceJobId() : ?string
    {
        return $this->traceJobId;
    }
    /**
     * 
     *
     * @param string|null $traceJobId
     *
     * @return self
     */
    public function setTraceJobId(?string $traceJobId) : self
    {
        $this->traceJobId = $traceJobId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHttpStatusCode() : int
    {
        return $this->httpStatusCode;
    }
    /**
     * 
     *
     * @param int $httpStatusCode
     *
     * @return self
     */
    public function setHttpStatusCode(int $httpStatusCode) : self
    {
        $this->httpStatusCode = $httpStatusCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExceptionMessage() : ?string
    {
        return $this->exceptionMessage;
    }
    /**
     * 
     *
     * @param string|null $exceptionMessage
     *
     * @return self
     */
    public function setExceptionMessage(?string $exceptionMessage) : self
    {
        $this->exceptionMessage = $exceptionMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerId() : ?string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId) : self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomerAlias() : ?string
    {
        return $this->customerAlias;
    }
    /**
     * 
     *
     * @param string|null $customerAlias
     *
     * @return self
     */
    public function setCustomerAlias(?string $customerAlias) : self
    {
        $this->customerAlias = $customerAlias;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserId() : ?string
    {
        return $this->userId;
    }
    /**
     * 
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId) : self
    {
        $this->userId = $userId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBusinessProcessId() : ?string
    {
        return $this->businessProcessId;
    }
    /**
     * 
     *
     * @param string|null $businessProcessId
     *
     * @return self
     */
    public function setBusinessProcessId(?string $businessProcessId) : self
    {
        $this->businessProcessId = $businessProcessId;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getExpected() : ?array
    {
        return $this->expected;
    }
    /**
     * 
     *
     * @param string[]|null $expected
     *
     * @return self
     */
    public function setExpected(?array $expected) : self
    {
        $this->expected = $expected;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getActual() : ?string
    {
        return $this->actual;
    }
    /**
     * 
     *
     * @param string|null $actual
     *
     * @return self
     */
    public function setActual(?string $actual) : self
    {
        $this->actual = $actual;
        return $this;
    }
}