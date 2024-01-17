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
class FullRepositoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Github\Model\FullRepository';
    }
    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Github\Model\FullRepository';
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
        $object = new \Github\Model\FullRepository();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\FullRepositoryConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('full_name', $data)) {
            $object->setFullName($data['full_name']);
            unset($data['full_name']);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\Model\FullRepositoryOwner', 'json', $context));
            unset($data['owner']);
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('private', $data)) {
            $object->setPrivate($data['private']);
            unset($data['private']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('fork', $data)) {
            $object->setFork($data['fork']);
            unset($data['fork']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('archive_url', $data)) {
            $object->setArchiveUrl($data['archive_url']);
            unset($data['archive_url']);
        }
        if (\array_key_exists('assignees_url', $data)) {
            $object->setAssigneesUrl($data['assignees_url']);
            unset($data['assignees_url']);
        }
        if (\array_key_exists('blobs_url', $data)) {
            $object->setBlobsUrl($data['blobs_url']);
            unset($data['blobs_url']);
        }
        if (\array_key_exists('branches_url', $data)) {
            $object->setBranchesUrl($data['branches_url']);
            unset($data['branches_url']);
        }
        if (\array_key_exists('collaborators_url', $data)) {
            $object->setCollaboratorsUrl($data['collaborators_url']);
            unset($data['collaborators_url']);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
            unset($data['comments_url']);
        }
        if (\array_key_exists('commits_url', $data)) {
            $object->setCommitsUrl($data['commits_url']);
            unset($data['commits_url']);
        }
        if (\array_key_exists('compare_url', $data)) {
            $object->setCompareUrl($data['compare_url']);
            unset($data['compare_url']);
        }
        if (\array_key_exists('contents_url', $data)) {
            $object->setContentsUrl($data['contents_url']);
            unset($data['contents_url']);
        }
        if (\array_key_exists('contributors_url', $data)) {
            $object->setContributorsUrl($data['contributors_url']);
            unset($data['contributors_url']);
        }
        if (\array_key_exists('deployments_url', $data)) {
            $object->setDeploymentsUrl($data['deployments_url']);
            unset($data['deployments_url']);
        }
        if (\array_key_exists('downloads_url', $data)) {
            $object->setDownloadsUrl($data['downloads_url']);
            unset($data['downloads_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
            unset($data['events_url']);
        }
        if (\array_key_exists('forks_url', $data)) {
            $object->setForksUrl($data['forks_url']);
            unset($data['forks_url']);
        }
        if (\array_key_exists('git_commits_url', $data)) {
            $object->setGitCommitsUrl($data['git_commits_url']);
            unset($data['git_commits_url']);
        }
        if (\array_key_exists('git_refs_url', $data)) {
            $object->setGitRefsUrl($data['git_refs_url']);
            unset($data['git_refs_url']);
        }
        if (\array_key_exists('git_tags_url', $data)) {
            $object->setGitTagsUrl($data['git_tags_url']);
            unset($data['git_tags_url']);
        }
        if (\array_key_exists('git_url', $data)) {
            $object->setGitUrl($data['git_url']);
            unset($data['git_url']);
        }
        if (\array_key_exists('issue_comment_url', $data)) {
            $object->setIssueCommentUrl($data['issue_comment_url']);
            unset($data['issue_comment_url']);
        }
        if (\array_key_exists('issue_events_url', $data)) {
            $object->setIssueEventsUrl($data['issue_events_url']);
            unset($data['issue_events_url']);
        }
        if (\array_key_exists('issues_url', $data)) {
            $object->setIssuesUrl($data['issues_url']);
            unset($data['issues_url']);
        }
        if (\array_key_exists('keys_url', $data)) {
            $object->setKeysUrl($data['keys_url']);
            unset($data['keys_url']);
        }
        if (\array_key_exists('labels_url', $data)) {
            $object->setLabelsUrl($data['labels_url']);
            unset($data['labels_url']);
        }
        if (\array_key_exists('languages_url', $data)) {
            $object->setLanguagesUrl($data['languages_url']);
            unset($data['languages_url']);
        }
        if (\array_key_exists('merges_url', $data)) {
            $object->setMergesUrl($data['merges_url']);
            unset($data['merges_url']);
        }
        if (\array_key_exists('milestones_url', $data)) {
            $object->setMilestonesUrl($data['milestones_url']);
            unset($data['milestones_url']);
        }
        if (\array_key_exists('notifications_url', $data)) {
            $object->setNotificationsUrl($data['notifications_url']);
            unset($data['notifications_url']);
        }
        if (\array_key_exists('pulls_url', $data)) {
            $object->setPullsUrl($data['pulls_url']);
            unset($data['pulls_url']);
        }
        if (\array_key_exists('releases_url', $data)) {
            $object->setReleasesUrl($data['releases_url']);
            unset($data['releases_url']);
        }
        if (\array_key_exists('ssh_url', $data)) {
            $object->setSshUrl($data['ssh_url']);
            unset($data['ssh_url']);
        }
        if (\array_key_exists('stargazers_url', $data)) {
            $object->setStargazersUrl($data['stargazers_url']);
            unset($data['stargazers_url']);
        }
        if (\array_key_exists('statuses_url', $data)) {
            $object->setStatusesUrl($data['statuses_url']);
            unset($data['statuses_url']);
        }
        if (\array_key_exists('subscribers_url', $data)) {
            $object->setSubscribersUrl($data['subscribers_url']);
            unset($data['subscribers_url']);
        }
        if (\array_key_exists('subscription_url', $data)) {
            $object->setSubscriptionUrl($data['subscription_url']);
            unset($data['subscription_url']);
        }
        if (\array_key_exists('tags_url', $data)) {
            $object->setTagsUrl($data['tags_url']);
            unset($data['tags_url']);
        }
        if (\array_key_exists('teams_url', $data)) {
            $object->setTeamsUrl($data['teams_url']);
            unset($data['teams_url']);
        }
        if (\array_key_exists('trees_url', $data)) {
            $object->setTreesUrl($data['trees_url']);
            unset($data['trees_url']);
        }
        if (\array_key_exists('clone_url', $data)) {
            $object->setCloneUrl($data['clone_url']);
            unset($data['clone_url']);
        }
        if (\array_key_exists('mirror_url', $data) && $data['mirror_url'] !== null) {
            $object->setMirrorUrl($data['mirror_url']);
            unset($data['mirror_url']);
        }
        elseif (\array_key_exists('mirror_url', $data) && $data['mirror_url'] === null) {
            $object->setMirrorUrl(null);
        }
        if (\array_key_exists('hooks_url', $data)) {
            $object->setHooksUrl($data['hooks_url']);
            unset($data['hooks_url']);
        }
        if (\array_key_exists('svn_url', $data)) {
            $object->setSvnUrl($data['svn_url']);
            unset($data['svn_url']);
        }
        if (\array_key_exists('homepage', $data) && $data['homepage'] !== null) {
            $object->setHomepage($data['homepage']);
            unset($data['homepage']);
        }
        elseif (\array_key_exists('homepage', $data) && $data['homepage'] === null) {
            $object->setHomepage(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('forks_count', $data)) {
            $object->setForksCount($data['forks_count']);
            unset($data['forks_count']);
        }
        if (\array_key_exists('stargazers_count', $data)) {
            $object->setStargazersCount($data['stargazers_count']);
            unset($data['stargazers_count']);
        }
        if (\array_key_exists('watchers_count', $data)) {
            $object->setWatchersCount($data['watchers_count']);
            unset($data['watchers_count']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        if (\array_key_exists('default_branch', $data)) {
            $object->setDefaultBranch($data['default_branch']);
            unset($data['default_branch']);
        }
        if (\array_key_exists('open_issues_count', $data)) {
            $object->setOpenIssuesCount($data['open_issues_count']);
            unset($data['open_issues_count']);
        }
        if (\array_key_exists('is_template', $data)) {
            $object->setIsTemplate($data['is_template']);
            unset($data['is_template']);
        }
        if (\array_key_exists('topics', $data)) {
            $values = [];
            foreach ($data['topics'] as $value) {
                $values[] = $value;
            }
            $object->setTopics($values);
            unset($data['topics']);
        }
        if (\array_key_exists('has_issues', $data)) {
            $object->setHasIssues($data['has_issues']);
            unset($data['has_issues']);
        }
        if (\array_key_exists('has_projects', $data)) {
            $object->setHasProjects($data['has_projects']);
            unset($data['has_projects']);
        }
        if (\array_key_exists('has_wiki', $data)) {
            $object->setHasWiki($data['has_wiki']);
            unset($data['has_wiki']);
        }
        if (\array_key_exists('has_pages', $data)) {
            $object->setHasPages($data['has_pages']);
            unset($data['has_pages']);
        }
        if (\array_key_exists('has_downloads', $data)) {
            $object->setHasDownloads($data['has_downloads']);
            unset($data['has_downloads']);
        }
        if (\array_key_exists('archived', $data)) {
            $object->setArchived($data['archived']);
            unset($data['archived']);
        }
        if (\array_key_exists('disabled', $data)) {
            $object->setDisabled($data['disabled']);
            unset($data['disabled']);
        }
        if (\array_key_exists('visibility', $data)) {
            $object->setVisibility($data['visibility']);
            unset($data['visibility']);
        }
        if (\array_key_exists('pushed_at', $data)) {
            $object->setPushedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['pushed_at']));
            unset($data['pushed_at']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\Model\FullRepositoryPermissions', 'json', $context));
            unset($data['permissions']);
        }
        if (\array_key_exists('allow_rebase_merge', $data)) {
            $object->setAllowRebaseMerge($data['allow_rebase_merge']);
            unset($data['allow_rebase_merge']);
        }
        if (\array_key_exists('template_repository', $data) && $data['template_repository'] !== null) {
            $object->setTemplateRepository($this->denormalizer->denormalize($data['template_repository'], 'Github\Model\FullRepositoryTemplateRepository', 'json', $context));
            unset($data['template_repository']);
        }
        elseif (\array_key_exists('template_repository', $data) && $data['template_repository'] === null) {
            $object->setTemplateRepository(null);
        }
        if (\array_key_exists('temp_clone_token', $data) && $data['temp_clone_token'] !== null) {
            $object->setTempCloneToken($data['temp_clone_token']);
            unset($data['temp_clone_token']);
        }
        elseif (\array_key_exists('temp_clone_token', $data) && $data['temp_clone_token'] === null) {
            $object->setTempCloneToken(null);
        }
        if (\array_key_exists('allow_squash_merge', $data)) {
            $object->setAllowSquashMerge($data['allow_squash_merge']);
            unset($data['allow_squash_merge']);
        }
        if (\array_key_exists('delete_branch_on_merge', $data)) {
            $object->setDeleteBranchOnMerge($data['delete_branch_on_merge']);
            unset($data['delete_branch_on_merge']);
        }
        if (\array_key_exists('allow_merge_commit', $data)) {
            $object->setAllowMergeCommit($data['allow_merge_commit']);
            unset($data['allow_merge_commit']);
        }
        if (\array_key_exists('subscribers_count', $data)) {
            $object->setSubscribersCount($data['subscribers_count']);
            unset($data['subscribers_count']);
        }
        if (\array_key_exists('network_count', $data)) {
            $object->setNetworkCount($data['network_count']);
            unset($data['network_count']);
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($this->denormalizer->denormalize($data['license'], 'Github\Model\FullRepositoryLicense', 'json', $context));
            unset($data['license']);
        }
        elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
        }
        if (\array_key_exists('organization', $data) && $data['organization'] !== null) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], 'Github\Model\FullRepositoryOrganization', 'json', $context));
            unset($data['organization']);
        }
        elseif (\array_key_exists('organization', $data) && $data['organization'] === null) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('parent', $data)) {
            $object->setParent($this->denormalizer->denormalize($data['parent'], 'Github\Model\Repository', 'json', $context));
            unset($data['parent']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($this->denormalizer->denormalize($data['source'], 'Github\Model\Repository', 'json', $context));
            unset($data['source']);
        }
        if (\array_key_exists('forks', $data)) {
            $object->setForks($data['forks']);
            unset($data['forks']);
        }
        if (\array_key_exists('master_branch', $data)) {
            $object->setMasterBranch($data['master_branch']);
            unset($data['master_branch']);
        }
        if (\array_key_exists('open_issues', $data)) {
            $object->setOpenIssues($data['open_issues']);
            unset($data['open_issues']);
        }
        if (\array_key_exists('watchers', $data)) {
            $object->setWatchers($data['watchers']);
            unset($data['watchers']);
        }
        if (\array_key_exists('anonymous_access_enabled', $data)) {
            $object->setAnonymousAccessEnabled($data['anonymous_access_enabled']);
            unset($data['anonymous_access_enabled']);
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
        $data['id'] = $object->getId();
        $data['node_id'] = $object->getNodeId();
        $data['name'] = $object->getName();
        $data['full_name'] = $object->getFullName();
        $data['owner'] = ($object->getOwner() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getOwner(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        $data['private'] = $object->getPrivate();
        $data['html_url'] = $object->getHtmlUrl();
        $data['description'] = $object->getDescription();
        $data['fork'] = $object->getFork();
        $data['url'] = $object->getUrl();
        $data['archive_url'] = $object->getArchiveUrl();
        $data['assignees_url'] = $object->getAssigneesUrl();
        $data['blobs_url'] = $object->getBlobsUrl();
        $data['branches_url'] = $object->getBranchesUrl();
        $data['collaborators_url'] = $object->getCollaboratorsUrl();
        $data['comments_url'] = $object->getCommentsUrl();
        $data['commits_url'] = $object->getCommitsUrl();
        $data['compare_url'] = $object->getCompareUrl();
        $data['contents_url'] = $object->getContentsUrl();
        $data['contributors_url'] = $object->getContributorsUrl();
        $data['deployments_url'] = $object->getDeploymentsUrl();
        $data['downloads_url'] = $object->getDownloadsUrl();
        $data['events_url'] = $object->getEventsUrl();
        $data['forks_url'] = $object->getForksUrl();
        $data['git_commits_url'] = $object->getGitCommitsUrl();
        $data['git_refs_url'] = $object->getGitRefsUrl();
        $data['git_tags_url'] = $object->getGitTagsUrl();
        $data['git_url'] = $object->getGitUrl();
        $data['issue_comment_url'] = $object->getIssueCommentUrl();
        $data['issue_events_url'] = $object->getIssueEventsUrl();
        $data['issues_url'] = $object->getIssuesUrl();
        $data['keys_url'] = $object->getKeysUrl();
        $data['labels_url'] = $object->getLabelsUrl();
        $data['languages_url'] = $object->getLanguagesUrl();
        $data['merges_url'] = $object->getMergesUrl();
        $data['milestones_url'] = $object->getMilestonesUrl();
        $data['notifications_url'] = $object->getNotificationsUrl();
        $data['pulls_url'] = $object->getPullsUrl();
        $data['releases_url'] = $object->getReleasesUrl();
        $data['ssh_url'] = $object->getSshUrl();
        $data['stargazers_url'] = $object->getStargazersUrl();
        $data['statuses_url'] = $object->getStatusesUrl();
        $data['subscribers_url'] = $object->getSubscribersUrl();
        $data['subscription_url'] = $object->getSubscriptionUrl();
        $data['tags_url'] = $object->getTagsUrl();
        $data['teams_url'] = $object->getTeamsUrl();
        $data['trees_url'] = $object->getTreesUrl();
        $data['clone_url'] = $object->getCloneUrl();
        $data['mirror_url'] = $object->getMirrorUrl();
        $data['hooks_url'] = $object->getHooksUrl();
        $data['svn_url'] = $object->getSvnUrl();
        $data['homepage'] = $object->getHomepage();
        $data['language'] = $object->getLanguage();
        $data['forks_count'] = $object->getForksCount();
        $data['stargazers_count'] = $object->getStargazersCount();
        $data['watchers_count'] = $object->getWatchersCount();
        $data['size'] = $object->getSize();
        $data['default_branch'] = $object->getDefaultBranch();
        $data['open_issues_count'] = $object->getOpenIssuesCount();
        if ($object->isInitialized('isTemplate') && null !== $object->getIsTemplate()) {
            $data['is_template'] = $object->getIsTemplate();
        }
        if ($object->isInitialized('topics') && null !== $object->getTopics()) {
            $values = [];
            foreach ($object->getTopics() as $value) {
                $values[] = $value;
            }
            $data['topics'] = $values;
        }
        $data['has_issues'] = $object->getHasIssues();
        $data['has_projects'] = $object->getHasProjects();
        $data['has_wiki'] = $object->getHasWiki();
        $data['has_pages'] = $object->getHasPages();
        $data['has_downloads'] = $object->getHasDownloads();
        $data['archived'] = $object->getArchived();
        $data['disabled'] = $object->getDisabled();
        if ($object->isInitialized('visibility') && null !== $object->getVisibility()) {
            $data['visibility'] = $object->getVisibility();
        }
        $data['pushed_at'] = $object->getPushedAt()->format('Y-m-d\TH:i:sP');
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
            $data['permissions'] = ($object->getPermissions() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getPermissions(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('allowRebaseMerge') && null !== $object->getAllowRebaseMerge()) {
            $data['allow_rebase_merge'] = $object->getAllowRebaseMerge();
        }
        if ($object->isInitialized('templateRepository') && null !== $object->getTemplateRepository()) {
            $data['template_repository'] = ($object->getTemplateRepository() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getTemplateRepository(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('tempCloneToken') && null !== $object->getTempCloneToken()) {
            $data['temp_clone_token'] = $object->getTempCloneToken();
        }
        if ($object->isInitialized('allowSquashMerge') && null !== $object->getAllowSquashMerge()) {
            $data['allow_squash_merge'] = $object->getAllowSquashMerge();
        }
        if ($object->isInitialized('deleteBranchOnMerge') && null !== $object->getDeleteBranchOnMerge()) {
            $data['delete_branch_on_merge'] = $object->getDeleteBranchOnMerge();
        }
        if ($object->isInitialized('allowMergeCommit') && null !== $object->getAllowMergeCommit()) {
            $data['allow_merge_commit'] = $object->getAllowMergeCommit();
        }
        $data['subscribers_count'] = $object->getSubscribersCount();
        $data['network_count'] = $object->getNetworkCount();
        $data['license'] = ($object->getLicense() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getLicense(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
            $data['organization'] = ($object->getOrganization() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getOrganization(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('parent') && null !== $object->getParent()) {
            $data['parent'] = ($object->getParent() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getParent(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = ($object->getSource() == null) ? null : new \ArrayObject($this->normalizer->normalize($object->getSource(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        $data['forks'] = $object->getForks();
        if ($object->isInitialized('masterBranch') && null !== $object->getMasterBranch()) {
            $data['master_branch'] = $object->getMasterBranch();
        }
        $data['open_issues'] = $object->getOpenIssues();
        $data['watchers'] = $object->getWatchers();
        if ($object->isInitialized('anonymousAccessEnabled') && null !== $object->getAnonymousAccessEnabled()) {
            $data['anonymous_access_enabled'] = $object->getAnonymousAccessEnabled();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\FullRepositoryConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return ['Github\Model\FullRepository' => false];
    }
}