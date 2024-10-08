<?php

namespace App\Enums;

enum MenuStatus: string
{
    case DRAFT = 'draft';
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';

    public static function options(): array
    {
        return [
            self::DRAFT->value => __('Draft'),
            self::ACTIVE->value => __('Active'),
            self::INACTIVE->value => __('Inactive'),
        ];
    }

    public function getText(): string
    {
        return self::options()[$this->value];
    }
}
