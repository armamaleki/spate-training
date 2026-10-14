<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // لیست مقالات -> همون صفحه admin/article که ساختی
    public function index()
    {
        $articles = Article::latest()->paginate(10);

        return view('admin.article.article', compact('articles'));
    }

    // فرم ساخت مقاله جدید
    public function create()
    {
        return view('admin.article.create');
    }

    // ذخیره مقاله
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ], [
            'title.required' => 'عنوان الزامی است.',
            'description.required' => 'توضیحات الزامی است.',
        ]);

        Article::create($request->only('title', 'description'));

        return redirect()->route('admin.article.index')
            ->with('success', 'مقاله با موفقیت ساخته شد.');
    }

    // فرم ویرایش
    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    // آپدیت
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $article->update($request->only('title', 'description'));

        return redirect()->route('admin.article.index')
            ->with('success', 'مقاله ویرایش شد.');
    }

    // حذف
    public function destroy(Article $article)
    {
        $article->delete();

        return back()->with('success', 'مقاله حذف شد.');
    }
}
