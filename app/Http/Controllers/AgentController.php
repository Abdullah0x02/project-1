<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agentdashboard(){
        return view('agent.agent_dashboard');
    }
}
