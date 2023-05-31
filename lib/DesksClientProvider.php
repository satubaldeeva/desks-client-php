<?php

namespace Satubaldeeva\DesksClient;

class DesksClientProvider
{
    /** @var string[] */
    public static $apis = ['\Satubaldeeva\DesksClient\Api\DesksApi', '\Satubaldeeva\DesksClient\Api\ListsApi'];

    /** @var string[] */
    public static $dtos = [
        '\Satubaldeeva\DesksClient\Dto\CreateDeskRequest',
        '\Satubaldeeva\DesksClient\Dto\CreateListRequest',
        '\Satubaldeeva\DesksClient\Dto\Desk',
        '\Satubaldeeva\DesksClient\Dto\DeskElastic',
        '\Satubaldeeva\DesksClient\Dto\DeskResponse',
        '\Satubaldeeva\DesksClient\Dto\ListResponse',
        '\Satubaldeeva\DesksClient\Dto\ModelList',
        '\Satubaldeeva\DesksClient\Dto\PatchDeskRequest',
        '\Satubaldeeva\DesksClient\Dto\PatchListRequest',
        '\Satubaldeeva\DesksClient\Dto\ReplaceDeskRequest',
        '\Satubaldeeva\DesksClient\Dto\ReplaceListRequest',
        '\Satubaldeeva\DesksClient\Dto\SearchDesksRequest',
        '\Satubaldeeva\DesksClient\Dto\SearchDesksRequestFilter',
        '\Satubaldeeva\DesksClient\Dto\SearchDesksRequestPagination',
        '\Satubaldeeva\DesksClient\Dto\SearchDesksRequestSort',
        '\Satubaldeeva\DesksClient\Dto\SearchDesksResponse',
        '\Satubaldeeva\DesksClient\Dto\ModelInterface',
    ];

    /** @var string */
    public static $configuration = '\Satubaldeeva\DesksClient\Configuration';
}
