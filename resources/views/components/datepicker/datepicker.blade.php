<div
    class="w-80 flex flex-col bg-white border shadow-lg rounded-xl overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
    <div class="p-3 space-y-0.5">
        <div class="flex justify-center items-center gap-x-3 mx-1.5 pb-3">
            <div class="col-span-3 flex justify-center items-center gap-x-1">
                <div class="relative">
                    <span class="text-gray-800 dark:text-neutral-200 font-semibold">{{ $getMonthName() }}</span>
                </div>

                <span class="text-gray-800 dark:text-neutral-200">/</span>

                <div class="relative">
                    <span class="text-gray-800 dark:text-neutral-200 font-semibold">{{ $year }}</span>
                </div>
            </div>
        </div>

        <div class="flex pb-1.5">
            @if($sundayStart)
                <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
          {{ trans('laraline::messages.weekdays.sun') }}
        </span>
            @endif
            <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
      {{ trans('laraline::messages.weekdays.mon') }}
    </span>
            <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
      {{ trans('laraline::messages.weekdays.tue') }}
    </span>
            <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
      {{ trans('laraline::messages.weekdays.wed') }}
    </span>
            <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
      {{ trans('laraline::messages.weekdays.thu') }}
    </span>
            <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
      {{ trans('laraline::messages.weekdays.fri') }}
    </span>
            <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
      {{ trans('laraline::messages.weekdays.sat') }}
    </span>
            @if(!$sundayStart)
                <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
          {{ trans('laraline::messages.weekdays.sun') }}
        </span>
            @endif
        </div>

        <div x-data="{ selectedDay: null }" class="flex flex-wrap" wire:key="{{ $uuid }}">
            @php
                $daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                $firstDayIndex = array_search($firstDay, $daysOfWeek);
                $emptyCells = $firstDayIndex;
            @endphp

            @for($i = 1; $i < $emptyCells; $i++)
                <div
                    class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full dark:text-neutral-200"></div>
            @endfor

            @for($i = 1; $i <= $days; $i++)
                <div>
                    <input type="button" value="{{ $i }}"
                           @click="selectedDay = {{ $i }}"
                           :class="selectedDay === {{ $i }} ? 'bg-blue-600 text-white' : 'text-gray-800 dark:text-neutral-200 hover:text-blue-600'"
                        {{ $attributes->whereDoesntStartWith('wire:click')->class('cursor-pointer m-px size-10 flex justify-center items-center border border-transparent text-sm rounded-full hover:border-blue-600 disabled:opacity-50 disabled:pointer-events-none') }}
                        @if($getClickAction())
                            wire:click="{{ $getClickAction() }}({{ $i }})"
                        @endif
                        {{ $attributes }}>
                </div>
            @endfor
        </div>
    </div>
</div>
