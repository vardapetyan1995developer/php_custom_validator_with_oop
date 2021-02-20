<?php

namespace Core;

class ErrorsBag
{
    /**
     * Errors bag
     * @var array
     */
    protected array $errors = [];

    /**
     * Add error message to the container
     * @param string $attribute
     * @param string $message
     */
    public function addError(string $attribute, string $message): void
    {
        $this->errors[$attribute][] = $message;
    }

    /**
     * Get all errors
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}