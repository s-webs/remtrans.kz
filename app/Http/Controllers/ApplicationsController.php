<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Comment;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function store(Request $request)
    {
        $application = new Application();
        $application->fullname = $request->fullname;
        $application->phone = $request->phone;
        $application->email = $request->email;
        $application->message = $request->message;
        $application->save();

        return redirect()->back()->withSuccess('Ваше сообщение успешно отрпавлено!');
    }

    public function review(Request $request)
    {
        $review = new Comment();
        $review->fullname = $request->fullname;
        $review->company = $request->company;
        $review->position = $request->position;
        $review->email = $request->email;
        $review->comment = $request->comment;
        $review->save();

        return redirect()->back()->withSuccess('Ваш отзыв успешно отрпавлен!');
    }
}
