<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Routing\Controller as BaseController;

class StudentController extends Controller
{
    public function index()
    {
        // استرجاع السجلات من قاعدة البيانات
        $records = YourModel::all();

        // عرض السجلات في عرض الفهرس (Index View)
        return view('your.index.view', ['records' => $records]);
    }}
