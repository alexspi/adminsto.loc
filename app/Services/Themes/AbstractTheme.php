<?php

namespace App\Services\Themes;

use PowerComponents\LivewirePowerGrid\Themes\Components\Actions;
use PowerComponents\LivewirePowerGrid\Themes\Components\Checkbox;
use PowerComponents\LivewirePowerGrid\Themes\Components\ClickToCopy;
use PowerComponents\LivewirePowerGrid\Themes\Components\Cols;
use PowerComponents\LivewirePowerGrid\Themes\Components\Editable;
use PowerComponents\LivewirePowerGrid\Themes\Components\FilterBoolean;
use PowerComponents\LivewirePowerGrid\Themes\Components\FilterDatePicker;
use PowerComponents\LivewirePowerGrid\Themes\Components\FilterInputText;
use PowerComponents\LivewirePowerGrid\Themes\Components\FilterMultiSelect;
use PowerComponents\LivewirePowerGrid\Themes\Components\FilterNumber;
use PowerComponents\LivewirePowerGrid\Themes\Components\FilterSelect;
use PowerComponents\LivewirePowerGrid\Themes\Components\Footer;
use PowerComponents\LivewirePowerGrid\Themes\Components\Layout;
use PowerComponents\LivewirePowerGrid\Themes\Components\Row;
use PowerComponents\LivewirePowerGrid\Themes\Components\Table;
use PowerComponents\LivewirePowerGrid\Themes\Components\Toggleable;

abstract class AbstractTheme
{
    public Table $table;

    public Checkbox $checkbox;

    public Layout $layout;

    public Actions $actions;

    public Editable $editable;

    public ClickToCopy $clickToCopy;

    public Toggleable $toggleable;

    public FilterBoolean $filterBoolean;

    public FilterSelect $filterSelect;

    public FilterDatePicker $filterDatePicker;

    public FilterMultiSelect $filterMultiSelect;

    public FilterNumber $filterNumber;

    public FilterInputText $filterInputText;

    public Footer $footer;

    public Cols $cols;

    public Row $row;

    public static string $paginationTheme;

    public static function paginationTheme(): string
    {
        return self::$paginationTheme;
    }

    public function table(): Table
    {
        return Theme::table('');
    }

    public function checkbox(): Checkbox
    {
        return Theme::checkbox();
    }

    public function footer(): Footer
    {
        return Theme::footer();
    }

    public function editable(): Editable
    {
        return Theme::editable();
    }

    public function clickToCopy(): ClickToCopy
    {
        return Theme::clickToCopy();
    }

    public function cols(): Cols
    {
        return Theme::cols();
    }

    public function row(): Row
    {
        return Theme::row();
    }

    public function actions(): Actions
    {
        return Theme::actions();
    }

    public function layout(): ?Components\Layout
    {
        return Theme::layout();
    }

    public function toggleable(): Toggleable
    {
        return Theme::toggleable();
    }

    public function filterBoolean(): FilterBoolean
    {
        return Theme::filterBoolean();
    }

    public function filterDatePicker(): FilterDatePicker
    {
        return Theme::filterDatePicker();
    }

    public function filterMultiSelect(): FilterMultiSelect
    {
        return Theme::filterMultiSelect();
    }

    public function filterNumber(): FilterNumber
    {
        return Theme::filterNumber();
    }

    public function filterSelect(): FilterSelect
    {
        return Theme::filterSelect();
    }

    public function filterInputText(): FilterInputText
    {
        return Theme::filterInputText();
    }
}
