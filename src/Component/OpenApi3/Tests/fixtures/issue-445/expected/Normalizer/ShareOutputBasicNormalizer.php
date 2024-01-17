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
class ShareOutputBasicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'PicturePark\API\Model\ShareOutputBasic';
    }
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\API\Model\ShareOutputBasic';
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
        $object = new \PicturePark\API\Model\ShareOutputBasic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contentId', $data)) {
            $object->setContentId($data['contentId']);
            unset($data['contentId']);
        }
        if (\array_key_exists('outputFormatId', $data)) {
            $object->setOutputFormatId($data['outputFormatId']);
            unset($data['outputFormatId']);
        }
        if (\array_key_exists('viewUrl', $data) && $data['viewUrl'] !== null) {
            $object->setViewUrl($data['viewUrl']);
            unset($data['viewUrl']);
        }
        elseif (\array_key_exists('viewUrl', $data) && $data['viewUrl'] === null) {
            $object->setViewUrl(null);
        }
        if (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] !== null) {
            $object->setDownloadUrl($data['downloadUrl']);
            unset($data['downloadUrl']);
        }
        elseif (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] === null) {
            $object->setDownloadUrl(null);
        }
        if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
            $object->setDetail($data['detail']);
            unset($data['detail']);
        }
        elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
            $object->setDetail(null);
        }
        if (\array_key_exists('dynamicRendering', $data)) {
            $object->setDynamicRendering($data['dynamicRendering']);
            unset($data['dynamicRendering']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
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
        $data['contentId'] = $object->getContentId();
        $data['outputFormatId'] = $object->getOutputFormatId();
        if ($object->isInitialized('viewUrl') && null !== $object->getViewUrl()) {
            $data['viewUrl'] = $object->getViewUrl();
        }
        if ($object->isInitialized('downloadUrl') && null !== $object->getDownloadUrl()) {
            $data['downloadUrl'] = $object->getDownloadUrl();
        }
        if ($object->isInitialized('detail') && null !== $object->getDetail()) {
            $data['detail'] = $object->getDetail();
        }
        $data['dynamicRendering'] = $object->getDynamicRendering();
        $data['kind'] = $object->getKind();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return ['PicturePark\API\Model\ShareOutputBasic' => false];
    }
}