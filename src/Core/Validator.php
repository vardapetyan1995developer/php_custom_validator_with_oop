<?php

namespace Core;

use Exceptions\UndefinedRuleException;
use Rules\Interfaces\RuleInterface;

class Validator
{
    use ErrorsBag;

    /**
     * Given rules
     * @var array
     */
    protected array $rules = [];

    /**
     * Given attributes
     * @var array
     */
    protected array $attributes = [];

    /**
     * @param array $rules
     * @return $this
     */
    public function setRules(array $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

    /**
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function handle(): self
    {
        foreach ($this->attributes as $attribute => $input)
        {
            $rules = $this->rules[$attribute];

            foreach ($rules as $rule)
            {
                /**@var RuleInterface $rule*/
                if(! $rule instanceof RuleInterface)
                {
                    throw new UndefinedRuleException('Given rule must be instance of ' . RuleInterface::class);
                }
            }
        }

        return $this;
    }
}