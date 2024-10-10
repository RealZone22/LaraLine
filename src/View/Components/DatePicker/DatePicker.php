<?php

namespace RealZone22\LaraLine\View\Components\DatePicker;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class DatePicker extends Component
{
    public $uuid;

    public $days;

    public $firstDay;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $year = 0,
        public int $month = 1,

        public bool $sundayStart = false,
    ) {
        if (empty($this->year)) {
            $this->year = now()->year;
        }

        $this->days = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
        $this->firstDay = date('D', mktime(0, 0, 0, $this->month, 1, $this->year));

        $this->uuid = 'laraline-datepicker-'.Str::uuid();
    }

    public function getMonthName()
    {
        return trans('laraline::messages.months.'.strtolower(date('F', mktime(0, 0, 0, $this->month, 10))));
    }

    public function getClickAction()
    {
        return $this->attributes->whereStartsWith('wire:click')->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laraline::components.datepicker.datepicker');
    }
}
