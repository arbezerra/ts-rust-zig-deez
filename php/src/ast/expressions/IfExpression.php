<?php

require 'vendor/autoload.php';

readonly class IfExpression implements Expression {
    public function __construct(
        public Token $token,
        public Expression $condition,
        public BlockStatement $consequence,
        public ?BlockStatement $alternative
    ) {
    }

    public function __toString(): string {
        $out = "if {$this->condition} {$this->consequence}";

        if (null !== $this->alternative) {
            $out .= " else {$this->alternative}";
        }

        return $out;
    }

    public function expressionNode(): void {
    }

    public function tokenLiteral(): string {
        return 'if';
    }
}
