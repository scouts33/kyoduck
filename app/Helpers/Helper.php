<?php

declare(strict_types=1);


if (!function_exists('makeJson')) {
    function makeJson($message, $status = 200): \Illuminate\Http\JsonResponse
    {
        return response()->json($message, $status, [], 128);
    }
}

if (!function_exists('toDateString')) {
    function toDateTimeString($date)
    {
        $date = $date ?? null;

        if ($date) {
            return $date instanceof \Carbon\Carbon ? $date->toDateTimeString() : \Carbon\Carbon::parse($date)->toDateTimeString();
        } else {
            return null;
        }
    }
}

if (! function_exists('str_singular')) {
    /**
     * Get the singular form of an English word.
     *
     * @param  string  $value
     * @return string
     */
    function str_singular($value)
    {
        return Str::singular($value);
    }
}

if (!function_exists('ChoicePaginate')) {
    function ChoicePaginate($query)
    {
        return request()->has('limit')
            ? $query->paginate(request('limit'))
            : $query->get();
    }
}
