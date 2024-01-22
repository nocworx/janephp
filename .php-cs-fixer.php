<?php

$finder = (new PhpCsFixer\Finder())
    ->exclude('Component/JsonSchema/JsonSchema')
    ->exclude('Component/JsonSchema/Tests/fixtures')
    ->exclude('Component/JsonSchema/Tests/generated')
    ->exclude('Component/OpenApi2/JsonSchema')
    ->exclude('Component/OpenApi2/Tests/fixtures')
    ->exclude('Component/OpenApi2/Tests/client/generated')
    ->exclude('Component/OpenApi3/JsonSchema')
    ->exclude('Component/OpenApi3/Tests/fixtures')
    ->exclude('Component/OpenApi3/Tests/client/generated')
    ->exclude('Bundle/JsonSchemaBundle/Tests/Resources')
    ->exclude('Bundle/OpenApiBundle/Tests/Resources')
    ->exclude('cache')
    ->in(__DIR__ . '/src')
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'yoda_style' => false,
        'native_constant_invocation' => false,
        'no_superfluous_phpdoc_tags' => [
            'remove_inheritdoc' => false,
        ],
        'nullable_type_declaration_for_default_null_value' => false,

        // Can be removed once PHP requirement is upgraded
        'get_class_to_class_keyword' => false,
        'modernize_strpos' => false,
    ])
    ->setFinder($finder)
;