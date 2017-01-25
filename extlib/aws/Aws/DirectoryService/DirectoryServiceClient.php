<?php
namespace Aws\DirectoryService;

use Aws\AwsClient;

/**
 * AWS Directory Service client
 *
 * @method \Aws\Result addIpRoutes(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise addIpRoutesAsync(array $args = [])
 * @method \Aws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \Aws\Result cancelSchemaExtension(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise cancelSchemaExtensionAsync(array $args = [])
 * @method \Aws\Result connectDirectory(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise connectDirectoryAsync(array $args = [])
 * @method \Aws\Result createAlias(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createAliasAsync(array $args = [])
 * @method \Aws\Result createComputer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createComputerAsync(array $args = [])
 * @method \Aws\Result createConditionalForwarder(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createConditionalForwarderAsync(array $args = [])
 * @method \Aws\Result createDirectory(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createDirectoryAsync(array $args = [])
 * @method \Aws\Result createMicrosoftAD(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createMicrosoftADAsync(array $args = [])
 * @method \Aws\Result createSnapshot(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \Aws\Result createTrust(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createTrustAsync(array $args = [])
 * @method \Aws\Result deleteConditionalForwarder(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteConditionalForwarderAsync(array $args = [])
 * @method \Aws\Result deleteDirectory(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteDirectoryAsync(array $args = [])
 * @method \Aws\Result deleteSnapshot(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteSnapshotAsync(array $args = [])
 * @method \Aws\Result deleteTrust(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteTrustAsync(array $args = [])
 * @method \Aws\Result deregisterEventTopic(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deregisterEventTopicAsync(array $args = [])
 * @method \Aws\Result describeConditionalForwarders(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeConditionalForwardersAsync(array $args = [])
 * @method \Aws\Result describeDirectories(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeDirectoriesAsync(array $args = [])
 * @method \Aws\Result describeEventTopics(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeEventTopicsAsync(array $args = [])
 * @method \Aws\Result describeSnapshots(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \Aws\Result describeTrusts(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeTrustsAsync(array $args = [])
 * @method \Aws\Result disableRadius(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise disableRadiusAsync(array $args = [])
 * @method \Aws\Result disableSso(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise disableSsoAsync(array $args = [])
 * @method \Aws\Result enableRadius(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise enableRadiusAsync(array $args = [])
 * @method \Aws\Result enableSso(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise enableSsoAsync(array $args = [])
 * @method \Aws\Result getDirectoryLimits(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getDirectoryLimitsAsync(array $args = [])
 * @method \Aws\Result getSnapshotLimits(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getSnapshotLimitsAsync(array $args = [])
 * @method \Aws\Result listIpRoutes(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listIpRoutesAsync(array $args = [])
 * @method \Aws\Result listSchemaExtensions(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listSchemaExtensionsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result registerEventTopic(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise registerEventTopicAsync(array $args = [])
 * @method \Aws\Result removeIpRoutes(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise removeIpRoutesAsync(array $args = [])
 * @method \Aws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \Aws\Result restoreFromSnapshot(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise restoreFromSnapshotAsync(array $args = [])
 * @method \Aws\Result startSchemaExtension(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise startSchemaExtensionAsync(array $args = [])
 * @method \Aws\Result updateConditionalForwarder(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateConditionalForwarderAsync(array $args = [])
 * @method \Aws\Result updateRadius(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateRadiusAsync(array $args = [])
 * @method \Aws\Result verifyTrust(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise verifyTrustAsync(array $args = [])
 */
class DirectoryServiceClient extends AwsClient {}