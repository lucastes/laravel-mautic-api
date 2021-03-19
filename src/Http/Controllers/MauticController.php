<?php

namespace Triibo\Mautic\Http\Controllers;

use App\Http\Controllers\Controller;
use Triibo\Mautic\Models\MauticConsumer;
use Triibo\Mautic\Facades\Mautic;

class MauticController extends Controller
{

    /**
     * Setup Applicaion.
     */
    public function initiateApplication()
    {
        $consumer = MauticConsumer::count();

        if ($consumer == 0)
        {
            Mautic::connection('main');
        }
        else
        {
            echo '<h1>Mautic App Already Register</h1>';
        }
    }
}
