<?php

namespace App\Http\Controllers;

use App\Reports\Report;

class ReportsController extends Controller
{
    private $report;

    public function __construct(Report $report)
    {
        $this->report = $report;
    }

    public function download()
    {
        return $this->report->build();
    }
}