<?php
declare(strict_types=1);

namespace Flowpack\ContentTransfer\Command;

/*
 * This file is part of the Flowpack.ContentTransfer package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Cli\CommandController;

class ContentCommandController extends CommandController
{

    /**
     * @var array
     */
    protected $settings;

    /**
     * @param string $filename
     * @param string $targetNodePath
     */
    public function importXmlCommand(string $filename, string $targetNodePath)
    {

    }

    /**
     * @param string|null $source
     */
    public function importSourceCommand(string $source = null)
    {

    }

    /**
     * @param string $nodePath
     * @param string $filename
     * @param bool $tidy
     * @param string|null $nodeTypeFilter
     */
    public function exportCommand(string $nodePath, string $filename, bool $tidy = true, string $nodeTypeFilter = null)
    {

    }
}
