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
class BusinessProcessDetailsDataBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'PicturePark\API\Model\BusinessProcessDetailsDataBase';
    }
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\API\Model\BusinessProcessDetailsDataBase';
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $class, string $format = null, array $context = []): mixed
    {
        if (array_key_exists('kind', $data) and 'BusinessProcessDetailsDataBatchResponse' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\BusinessProcessDetailsDataBatchResponse', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'BusinessProcessDetailsDataSchemaImport' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\BusinessProcessDetailsDataSchemaImport', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'BusinessProcessDetailsDataCdnPurge' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\BusinessProcessDetailsDataCdnPurge', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'BusinessProcessDetailsDataContentImport' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\BusinessProcessDetailsDataContentImport', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessProcessDetailsDataBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getKind() and 'BusinessProcessDetailsDataBatchResponse' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'BusinessProcessDetailsDataSchemaImport' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'BusinessProcessDetailsDataCdnPurge' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'BusinessProcessDetailsDataContentImport' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        $data['kind'] = $object->getKind();
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return ['PicturePark\API\Model\BusinessProcessDetailsDataBase' => false];
    }
}