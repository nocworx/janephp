<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Test' => 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Normalizer\\TestNormalizer', 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Otherchildtype' => 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Normalizer\\OtherchildtypeNormalizer', 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Childtype' => 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Normalizer\\ChildtypeNormalizer', 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Parenttype' => 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Normalizer\\ParenttypeNormalizer', 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Foo' => 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Normalizer\\FooNormalizer', 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Bar' => 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Normalizer\\BarNormalizer', 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Baz' => 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Normalizer\\BazNormalizer', 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\BazBaz' => 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Normalizer\\BazBazNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}