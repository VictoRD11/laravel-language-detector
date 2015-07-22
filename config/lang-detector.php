<?php

use Vluzrmos\LanguageDetector\Support\LangConfigString;

return [
    /*
     * Indicates whenever should autodetect and apply the language of the request.
     */
    'autodetect' => env('LANG_DETECTOR_AUTODETECT', true),

    /*
     * Default driver to use to detect the request language.
     *
     * Available: browser, subdomain, uri.
     */
    'driver' => env('LANG_DETECTOR_DRIVER', 'browser'),

    /*
     * Used on subdomain and uri drivers. That indicates which segment should be used
     * to verify the language.
     */
    'segment' => env('LANG_DETECTOR_SEGMENT', 0),

    /*
     * Languages available on the application.
     */
    'languages' => (new LangConfigString())->toArray(
        env('LANG_DETECTOR_LANGUAGES', ['en'])
    ),
];
