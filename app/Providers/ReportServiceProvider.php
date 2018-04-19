<?php

namespace App\Providers;

use App\Reports\Report;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class ReportServiceProvider extends ServiceProvider
{
    protected $availableReports = ['CsvReport', 'XmlReport', 'HtmlReport'];

    public function register()
    {
        $this->app->call([$this, 'registerService']);
    }

    protected function registerService(Request $request)
    {
//        $selected = studly_case($request->get('user_selection'));


//        $service = (in_array($selected, $this->availableServices))
//            // if user selection is OK, then bind it
//            ? $selected
//            // otherwise fallback to the default implementation
//            : 'DefaultService';

        $this->app->bind(Report::class, );
    }
}