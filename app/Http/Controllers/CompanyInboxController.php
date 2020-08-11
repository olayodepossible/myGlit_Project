<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyInboxController extends Controller
{
    public function showCompanyInbox(){
        return view('company.companyInbox');
    }
}
