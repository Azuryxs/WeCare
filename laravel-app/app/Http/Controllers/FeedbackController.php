<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::with('user')->get();
        return view('feedback.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        Feedback::create($request->all());
        return redirect()->route('feedback.index')->with('success', 'Feedback berhasil dikirim.');
    }

    public function edit($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('feedback.edit', compact('feedback'));
    }

    public function update(Request $request, $id)
    {
        $feedback = Feedback::findOrFail($id);

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        $feedback->update($request->all());
        return redirect()->route('feedback.index')->with('success', 'Feedback berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Feedback::findOrFail($id)->delete();
        return redirect()->route('feedback.index')->with('success', 'Feedback berhasil dihapus.');
    }
}
