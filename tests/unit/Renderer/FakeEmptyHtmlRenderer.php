<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Original code based on the CommonMark JS reference parser (https://bitly.com/commonmark-js)
 *  - (c) John MacFarlane
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Tests\Unit\Renderer;

use League\CommonMark\Node\Block\AbstractBlock;
use League\CommonMark\Node\Inline\AbstractInline;
use League\CommonMark\Renderer\NodeRendererInterface;

class FakeEmptyHtmlRenderer implements NodeRendererInterface
{
    /**
     * @param string     $option
     * @param mixed|null $default
     *
     * @return mixed|null
     */
    public function getOption(string $option, $default = null)
    {
        return null;
    }

    /**
     * @param AbstractInline $inline
     *
     * @return string
     */
    public function renderInline(AbstractInline $inline): string
    {
        return '';
    }

    /**
     * @param AbstractInline[] $inlines
     *
     * @return string
     */
    public function renderInlines(iterable $inlines): string
    {
        return '';
    }

    /**
     * @param AbstractBlock $block
     * @param bool          $inTightList
     *
     * @throws \RuntimeException
     *
     * @return string
     */
    public function renderBlock(AbstractBlock $block, bool $inTightList = false): string
    {
        return '';
    }

    /**
     * @param AbstractBlock[] $blocks
     * @param bool            $inTightList
     *
     * @return string
     */
    public function renderBlocks(iterable $blocks, bool $inTightList = false): string
    {
        return '';
    }
}
