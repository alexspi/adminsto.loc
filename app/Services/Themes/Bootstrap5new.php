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
use PowerComponents\LivewirePowerGrid\Themes\Components\Row;
use PowerComponents\LivewirePowerGrid\Themes\Components\Table;
use PowerComponents\LivewirePowerGrid\Themes\Components\Toggleable;
use PowerComponents\LivewirePowerGrid\Themes\ThemeBase;
use PowerComponents\LivewirePowerGrid\Themes\Theme;

class Bootstrap5new extends ThemeBase
{
    public string $name = 'bootstrap5';

    public static function paginationTheme(): string
    {
        return 'bootstrap';
    }

    public function table(): Table
    {
        return Theme::table('table table-bordered table-hover table-striped table-checkable table-highlight-head mb-2')
            ->thead('')
            ->tr('')
            ->th('', ';min-width: 30px;padding-left: 10px;font-size: 0.7rem;color: #6b6a6a;padding-top: 8px;padding-bottom: 8px;')
            ->tbody('')
            ->tdBody('', 'vertical-align: middle; line-height: normal;')
            ->tdBodyTotalColumns('', 'font-size: 0.875rem; line-height: 1.25rem; --tw-text-opacity: 1; color: rgb(76 79 82 / var(--tw-text-opacity)); padding-left: 0.5rem; padding-right: 0.5rem; padding-top: 0.5rem; padding-bottom: 0.5rem;')
            ->tdBody('', 'vertical-align: middle; line-height: normal;');
    }

    public function cols(): Cols
    {
        return Theme::cols()
            ->div('')
            ->clearFilter('', 'color: #c30707; cursor:pointer; float: right;');
    }

    public function rows(): Row
    {
        return Theme::row()
            ->span('d-flex justify-content-between');
    }

    public function footer(): Footer
    {
        return Theme::footer()
            ->view($this->root() . '.footer')
            ->select('');
    }

    public function actions(): Actions
    {
        return Theme::actions()
            ->tdBody('text-center')
            ->rowsBtn('');
    }

    public static function styles(): string
    {
        return 'bootstrap';
    }

    public function toggleable(): Toggleable
    {
        return Theme::toggleable()
            ->view($this->root() . '.toggleable');
    }

    public function editable(): Editable
    {
        return Theme::editable()
            ->view($this->root() . '.editable')
            ->span('d-flex justify-content-between')
            ->button('width: 100%;text-align: left;border: 0;padding: 4px;background: none')
            ->input('form-control shadow-none');
    }

    public function clickToCopy(): ClickToCopy
    {
        return Theme::clickToCopy()
            ->span('d-flex justify-content-between');
    }

    public function checkbox(): Checkbox
    {
        return Theme::checkbox()
            ->th('', 'font-size: 1rem !important;text-align:center')
            ->div('form-check')
            ->label('form-check-label')
            ->input('form-check-input shadow-none');
    }

    public function filterBoolean(): FilterBoolean
    {
        return Theme::filterBoolean()
            ->input('form-control shadow-none')
            ->relativeDiv('d-none')
            ->divNotInline('')
            ->divInline('');
    }

    public function filterDatePicker(): FilterDatePicker
    {
        return Theme::filterDatePicker()
            ->input('form-control shadow-none')
            ->divNotInline('')
            ->divInline('');
    }

    public function filterMultiSelect(): FilterMultiSelect
    {
        return Theme::filterMultiSelect()
            ->view($this->root() . '.multi-select')
            ->input('shadow-none')
            ->divNotInline('')
            ->divInline('');
    }

    public function filterNumber(): FilterNumber
    {
        return Theme::filterNumber()
            ->input('form-control shadow-none')
            ->divNotInline('')
            ->divInline('');
    }

    public function filterSelect(): FilterSelect
    {
        return Theme::filterSelect()
            ->input('form-control shadow-none')
            ->relativeDiv('d-none')
            ->divNotInline('')
            ->divInline('');
    }

    public function filterInputText(): FilterInputText
    {
        return Theme::filterInputText()
            ->select('form-control mb-1 shadow-none', 'd-none')
            ->input('form-control shadow-none')
            ->divNotInline('')
            ->divInline('');
    }
}
