<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScenarioController extends Controller
{   

    public function getEmailContent()
    {
        return view('scenario.tabs.email_tab');
    }

    public function getInteractionContent()
    {
        return view('scenario.tabs.interaction_tab');
    }

    public function getWebpushContent()
    {
        return view('scenario.tabs.webpush_tab');
    }

    public function getSurveyContent()
    {
        return view('scenario.tabs.survey_tab');
    }


     // This method will handle GET /campaigns requests
    public function scenario()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('scenario/scenario');
    }



    


}
