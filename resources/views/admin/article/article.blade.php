@extends('admin.layout')

@section('title', 'مقالات')
@section('subtitle', 'مدیریت مقالات')

@section('actions')
    <a href="{{ route('admin.article.create') }}" class="text-sm px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-medium shadow-lg shadow-indigo-500/20">+ مقاله جدید</a>
@endsection

@section('content')
    <!-- Filters -->
    <div class="bg-white rounded-2xl border shadow-sm p-4 mb-4 flex flex-col sm:flex-row gap-3">
        <div class="relative flex-1">
            <form method="GET" action="{{ route('admin.article.index') }}">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="جستجوی عنوان مقاله..." class="w-full rounded-xl border border-slate-200 pr-10 pl-4 py-2.5 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500">
                <span class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">⌕</span>
            </form>
        </div>
        <p class="text-xs text-slate-500 self-center whitespace-nowrap">مجموع: {{ $articles->total() }} مقاله</p>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl border shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm min-w-[640px]">
                <thead>
                <tr class="bg-slate-50/80 text-slate-500 text-xs">
                    <th class="text-right font-medium px-5 py-4" style="width:50px">#</th>
                    <th class="text-right font-medium px-5 py-4">مقاله</th>
                    <th class="text-right font-medium px-5 py-4">تاریخ ساخت</th>
                    <th class="text-left font-medium px-5 py-4">عملیات</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                @forelse($articles as $article)
                    <tr class="hover:bg-slate-50/60 transition">
                        <td class="px-5 py-4 text-slate-400">{{ $article->id }}</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-xl bg-indigo-50 text-indigo-600 grid place-items-center text-lg shrink-0">📝</div>
                                <div class="min-w-0">
                                    <p class="font-bold truncate max-w-[320px]">{{ $article->title }}</p>
                                    <p class="text-xs text-slate-500 truncate max-w-[320px]">{{ \Illuminate\Support\Str::limit($article->description, 80) }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-4 text-xs text-slate-500 whitespace-nowrap">{{ $article->created_at->diffForHumans() }}</td>
                        <td class="px-5 py-4">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.article.edit', $article) }}" class="text-xs px-3 py-1.5 rounded-lg border hover:bg-slate-50">ویرایش</a>
                                <form method="POST" action="{{ route('admin.article.destroy', $article) }}" onsubmit="return confirm('حذف شود؟')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-xs px-3 py-1.5 rounded-lg border border-red-100 text-red-600 hover:bg-red-50">حذف</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-5 py-12 text-center text-slate-400 text-sm">هنوز مقاله‌ای ثبت نشده است.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        @if($articles->hasPages())
            <div class="px-5 py-4 border-t">
                {{ $articles->links() }}
            </div>
        @endif
    </div>
@endsection
