<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class ServerVariable extends \ArrayObject
{
    /**
     * 
     *
     * @var string[]|null
     */
    protected $enum;
    /**
     * 
     *
     * @var string|null
     */
    protected $default;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getEnum(): ?array
    {
        return $this->enum;
    }
    /**
     * 
     *
     * @param string[]|null $enum
     *
     * @return self
     */
    public function setEnum(?array $enum): self
    {
        $this->enum = $enum;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }
    /**
     * 
     *
     * @param string|null $default
     *
     * @return self
     */
    public function setDefault(?string $default): self
    {
        $this->default = $default;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
}