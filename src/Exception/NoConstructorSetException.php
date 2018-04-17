<?php

namespace AutoMapperPlus\Exception;

use AutoMapperPlus\Configuration\MappingInterface;

/**
 * Class NoConstructorSetException
 *
 * @package AutoMapperPlus\Exception
 */
class NoConstructorSetException extends \Exception
{
    /**
     * @param MappingInterface $mapping
     * @return NoConstructorSetException
     */
    public static function fromMapping(MappingInterface $mapping)
    {
        $message = sprintf(
            'No custom constructor set for the mapping %s -> %s. Check using hasCustomConstructor() first.',
            $mapping->getSourceClassName(),
            $mapping->getDestinationClassName()
        );

        return new static($message);
    }
}
