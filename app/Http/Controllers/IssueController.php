<?php

namespace App\Http\Controllers;

use App\Issue;

class IssueController extends Controller
{
    public function index()
    {
        $search = request('search', null);
        if (request()->has('search')) {
            $issues = Issue::whereRaw("MATCH(search) AGAINST(? IN BOOLEAN MODE)", array($search))
                ->orWhere('search', 'like', "%{$search}%")
                ->paginate();
        } else {
            $issues = Issue::paginate();
        }

        return view('issues.index', compact('issues', 'search'));
    }
}
