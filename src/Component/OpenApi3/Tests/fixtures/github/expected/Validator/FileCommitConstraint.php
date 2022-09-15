<?php

namespace Github\Validator;

class FileCommitConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('content' => new \Symfony\Component\Validator\Constraints\Optional(array(new \ContentTreeEntriesItemLinksConstraint(array()), new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.')))), 'commit' => new \Symfony\Component\Validator\Constraints\Optional(array(new \FileCommitCommitAuthorConstraint(array()), new \FileCommitCommitCommitterConstraint(array()), new \FileCommitCommitTreeConstraint(array()), new \FileCommitCommitVerificationConstraint(array()), new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.'))))), 'allowExtraFields' => false)));
    }
}