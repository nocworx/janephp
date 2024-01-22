<?php

namespace Jane\Component\OpenApi2\Guesser;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\JsonSchema\Model\BodyParameter;
use Jane\Component\OpenApi2\JsonSchema\Model\FormDataParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\HeaderParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\PathParameterSubSchema;
use Jane\Component\OpenApi2\JsonSchema\Model\QueryParameterSubSchema;
use Jane\Component\OpenApiCommon\Guesser\GuessClass as BaseGuessClass;

class GuessClass extends BaseGuessClass
{
    public function resolveParameter(Reference $parameter)
    {
        $result = $parameter;

        return $parameter->resolve(function ($value) use ($result) {
            if (\array_key_exists('in', $value)) {
                switch ($value['in']) {
                    case 'body':
                        return $this->denormalizer->denormalize($value, BodyParameter::class, 'json', [
                            'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                        ]);
                    case 'header':
                        return $this->denormalizer->denormalize($value, HeaderParameterSubSchema::class, 'json', [
                            'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                        ]);
                    case 'formData':
                        return $this->denormalizer->denormalize($value, FormDataParameterSubSchema::class, 'json', [
                            'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                        ]);
                    case 'query':
                        return $this->denormalizer->denormalize($value, QueryParameterSubSchema::class, 'json', [
                            'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                        ]);
                    case 'path':
                        return $this->denormalizer->denormalize($value, PathParameterSubSchema::class, 'json', [
                            'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                        ]);
                }
            }

            return $value;
        });
    }
}