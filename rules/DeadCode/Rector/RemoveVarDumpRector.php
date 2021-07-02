<?php

declare(strict_types=1);

namespace Rector\DeadCode\Rector;

use PhpParser\Node;
use Rector\Core\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class RemoveVarDumpRector extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        // TODO: Implement getRuleDefinition() method.
    }

    public function getNodeTypes(): array
    {
        return [Node\Expr\FuncCall::class];
        // TODO: Implement getNodeTypes() method.
    }

    /**
     * @param Node\Expr\FuncCall $node
     */
    public function refactor(Node $node)
    {
        $this->removeNode($node);
        return null;
    }
}
