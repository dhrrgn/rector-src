<?php

declare(strict_types=1);

namespace Rector\DeadCode\Rector;

use PhpParser\Node;
use Rector\Core\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class RemoveElseRector extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        // TODO: Implement getRuleDefinition() method.
    }

    public function getNodeTypes(): array
    {
        return [Node\Stmt\If_::class];
        // TODO: Implement getNodeTypes() method.
    }

    /**
     * @param Node\Stmt\If_ $node
     */
    public function refactor(Node $node)
    {
        if (! $node->else instanceof Node\Stmt\Else_) {
            return null;
        }
        if ($node->else->stmts === [] || $node->else->stmts === null) {
            $node->else = null;
            return $node;
        }

        return null;
    }
}
