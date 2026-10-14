@extends('admin.layout')

@section('title', 'مقاله جدید')
@section('subtitle', 'ساخت مقاله تازه برای بلاگ')

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

        <form method="POST" action="{{ route('admin.article.store') }}" class="space-y-5">
            @csrf

            <div>
                <label class="text-sm font-bold text-slate-700 block mb-1.5">عنوان مقاله</label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="مثلا: آموزش Middleware در لاراول" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition">
            </div>

            <div>
                <label class="text-sm font-bold text-slate-700 block mb-1.5">توضیحات</label>
                <textarea name="description" rows="6" placeholder="متن مقاله را اینجا بنویسید..." class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition leading-7">{{ old('description') }}</textarea>
            </div>

            <div class="flex items-center gap-2 pt-2">
                <button type="submit" class="px-6 py-3 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-sm font-bold transition shadow-lg shadow-indigo-500/20">ذخیره مقاله</button>
                <a href="{{ route('admin.article.store') }}" class="px-6 py-3 rounded-xl border text-sm hover:bg-slate-50 transition">انصراف</a>
            </div>
        </form>

    </div>
@endsection
