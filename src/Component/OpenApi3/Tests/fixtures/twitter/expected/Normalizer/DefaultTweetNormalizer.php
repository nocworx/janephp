<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DefaultTweetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet';
    }
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet';
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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
            unset($data['text']);
        }
        if (\array_key_exists('author_id', $data)) {
            $object->setAuthorId($data['author_id']);
            unset($data['author_id']);
        }
        if (\array_key_exists('in_reply_to_user_id', $data)) {
            $object->setInReplyToUserId($data['in_reply_to_user_id']);
            unset($data['in_reply_to_user_id']);
        }
        if (\array_key_exists('referenced_tweets', $data)) {
            $values = [];
            foreach ($data['referenced_tweets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFieldsReferencedTweetsItem', 'json', $context);
            }
            $object->setReferencedTweets($values);
            unset($data['referenced_tweets']);
        }
        if (\array_key_exists('attachments', $data)) {
            $object->setAttachments($this->denormalizer->denormalize($data['attachments'], 'Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFieldsAttachments', 'json', $context));
            unset($data['attachments']);
        }
        if (\array_key_exists('withheld', $data)) {
            $object->setWithheld($this->denormalizer->denormalize($data['withheld'], 'Jane\Component\OpenApi3\Tests\Expected\Model\TweetWithheld', 'json', $context));
            unset($data['withheld']);
        }
        if (\array_key_exists('geo', $data)) {
            $object->setGeo($this->denormalizer->denormalize($data['geo'], 'Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweetFieldsGeo', 'json', $context));
            unset($data['geo']);
        }
        if (\array_key_exists('entities', $data)) {
            $object->setEntities($this->denormalizer->denormalize($data['entities'], 'Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntities', 'json', $context));
            unset($data['entities']);
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
        if ($object->isInitialized('format') && null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        $data['id'] = $object->getId();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $data['text'] = $object->getText();
        $data['author_id'] = $object->getAuthorId();
        if ($object->isInitialized('inReplyToUserId') && null !== $object->getInReplyToUserId()) {
            $data['in_reply_to_user_id'] = $object->getInReplyToUserId();
        }
        if ($object->isInitialized('referencedTweets') && null !== $object->getReferencedTweets()) {
            $values = [];
            foreach ($object->getReferencedTweets() as $value) {
                $values[] = ($value == null) ? null : new \ArrayObject($this->normalizer->normalize($value, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['referenced_tweets'] = $values;
        }
        if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
            $data['attachments'] = ($object->getAttachments() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getAttachments(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('withheld') && null !== $object->getWithheld()) {
            $data['withheld'] = ($object->getWithheld() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getWithheld(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('geo') && null !== $object->getGeo()) {
            $data['geo'] = ($object->getGeo() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getGeo(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('entities') && null !== $object->getEntities()) {
            $data['entities'] = ($object->getEntities() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getEntities(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return ['Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet' => false];
    }
}