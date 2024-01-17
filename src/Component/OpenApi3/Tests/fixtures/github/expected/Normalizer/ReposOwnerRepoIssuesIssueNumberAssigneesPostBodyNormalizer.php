<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReposOwnerRepoIssuesIssueNumberAssigneesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesPostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesPostBody';
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
        $object = new \Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesPostBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoIssuesIssueNumberAssigneesPostBodyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assignees', $data)) {
            $values = [];
            foreach ($data['assignees'] as $value) {
                $values[] = $value;
            }
            $object->setAssignees($values);
            unset($data['assignees']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('assignees') && null !== $object->getAssignees()) {
            $values = [];
            foreach ($object->getAssignees() as $value) {
                $values[] = $value;
            }
            $data['assignees'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoIssuesIssueNumberAssigneesPostBodyConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return ['Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesPostBody' => false];
    }
}