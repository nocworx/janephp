<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BusinessProcessDetailsDataSchemaImportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport';
    }
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport';
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $class, string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('schemaImportResult', $data) && $data['schemaImportResult'] !== null) {
            $object->setSchemaImportResult($data['schemaImportResult']);
            unset($data['schemaImportResult']);
        }
        elseif (\array_key_exists('schemaImportResult', $data) && $data['schemaImportResult'] === null) {
            $object->setSchemaImportResult(null);
        }
        if (\array_key_exists('listItemImportResult', $data) && $data['listItemImportResult'] !== null) {
            $object->setListItemImportResult($data['listItemImportResult']);
            unset($data['listItemImportResult']);
        }
        elseif (\array_key_exists('listItemImportResult', $data) && $data['listItemImportResult'] === null) {
            $object->setListItemImportResult(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        $data['kind'] = $object->getKind();
        if ($object->isInitialized('schemaImportResult') && null !== $object->getSchemaImportResult()) {
            $data['schemaImportResult'] = $object->getSchemaImportResult();
        }
        if ($object->isInitialized('listItemImportResult') && null !== $object->getListItemImportResult()) {
            $data['listItemImportResult'] = $object->getListItemImportResult();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return ['PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport' => false];
    }
}