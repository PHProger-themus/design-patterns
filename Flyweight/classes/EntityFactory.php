<?php

namespace classes;

class EntityFactory
{

    private array $object_types;

    public function __construct(array $object_types)
    {
        foreach ($object_types as $object_type) {
            $this->object_types["$object_type[1]_$object_type[0]"] = new EntityType($object_type[0], $object_type[1]);
        }
    }

    public function getObjectType(int $static_param1, string $static_param2)
    {
        $key = "{$static_param2}_$static_param1";
        if (!isset($this->object_types[$key])) {
            echo "$key doesn't exist, creating... <br />";
            $this->object_types[$key] = new EntityType($static_param1, $static_param2);
        }
        return $this->object_types[$key];
    }

}