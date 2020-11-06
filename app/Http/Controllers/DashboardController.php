<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function generateCharts()
    {
        //latest 7 for charts
        $clients = Client::orderBy("created_at", "desc")->take(10)->get(['monthly_fee','created_at','first_name','last_name']);

        $linear_labels = [];
        $pie_labels = [];
        $linear_values = [];

        foreach ($clients as $client) {
            $linear_labels[] = $client->created_at->format('d.m.y');
            $pie_labels[] = mb_substr($client->first_name, 0, 1) . "." . $client->last_name;
            $linear_values[] = $client->monthly_fee;
        }


        return view('dashboard', ['linear_labels' => json_encode($linear_labels), 'pie_labels' => json_encode($pie_labels), 'linear_values' => json_encode($linear_values)]);
    }
}
