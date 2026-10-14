@extends('admin.layout')

@section('title', 'ویرایش مقاله')
@section('subtitle', 'ویرایش: ' . $article->title)

@section('content')
    <div class="bg-white rounded-2xl border shadow-sm p-6 max-w-2xl mx-auto">

        @if($errors->any())
            <div class="mb-4 rounded-xl bg-red-50 border border-red-200 text-red-600 text-sm px-4 py-3 leading-7">
                <ul class="list-disc pr-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.article.update', $article) }}" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="text-sm font-bold text-slate-700 block mb-1.5">عنوان مقاله</label>
                <input type="text" name="title" value="{{ old('title', $article->title) }}" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition">
            </div>

            <div>
                <label class="text-sm font-bold text-slate-700 block mb-1.5">توضیحات</label>
                <textarea name="description" rows="6" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition leading-7">{{ old('description', $article->description) }}</textarea>
            </div>

            <div class="rounded-xl bg-slate-50 border text-xs text-slate-500 px-4 py-3">
                شناسه: {{ $article->id }} | ساخته شده: {{ $article->created_at->diffForHumans() }}
            </div>

            <div class="flex items-center gap-2 pt-2">
                <button type="submit" class="px-6 py-3 rounded-xl bg-dark-900 hover:bg-dark-800 text-white text-sm font-bold transition">ذخیره تغییرات</button>
                <a href="{{ route('admin.article.index') }}" class="px-6 py-3 rounded-xl border text-sm hover:bg-slate-50 transition">انصراف</a>
            </div>
        </form>

    </div>
@endsection
