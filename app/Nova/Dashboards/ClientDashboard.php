<?php

namespace App\Nova\Dashboards;

use Laravel\Nova\Dashboard;
use FreshCMS\TeamLeaderCard\TeamLeaderCard;

class ClientDashboard extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new TeamLeaderCard,
        ];
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'client-dashboard';
    }
}
