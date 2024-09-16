<?php

namespace Mak\Example\Swagger\Schemas;

/**
 * @OA\Schema(
 *     title="Example",
 *     description="Example schema",
 *     @OA\Xml(
 *         name="Example"
 *     )
 * )
 */
class ExampleSchema
{
    /**
     * @OA\Property(example=1)
     *
     * @var integer
     */
    protected $id;

    /**
     * @OA\Property(maxLength=255, example="Дверь в дверь")
     *
     * @var string
     */
    protected $name;
}
