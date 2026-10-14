@extends('admin.layout')

@section('title', 'داشبورد')
@section('subtitle', 'نمای کلی وضعیت سایت')

@section('actions')
    <a href="{{ route('admin.article') }}" class="text-sm px-4 py-2 rounded-xl bg-dark-900 text-white hover:bg-dark-800">+ مقاله جدید</a>
@endsection

@section('content')
    <!-- Stats -->
    <div class="grid grid-cols-2 xl:grid-cols-4 gap-4 mb-6">
        <div class="bg-white rounded-2xl p-5 border shadow-sm">
            <div class="w-10 h-10 rounded-xl bg-indigo-50 text-indigo-600 grid place-items-center text-lg mb-3">◍</div>
            <p class="text-xs text-slate-500">کل کاربران</p>
            <p class="text-2xl font-black mt-1">248</p>
            <p class="text-xs text-green-600 mt-1">↑ 12٪ این ماه</p>
        </div>
        <div class="bg-white rounded-2xl p-5 border shadow-sm">
            <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 grid place-items-center text-lg mb-3">✎</div>
            <p class="text-xs text-slate-500">کل مقالات</p>
            <p class="text-2xl font-black mt-1">86</p>
            <p class="text-xs text-green-600 mt-1">↑ 4٪ این ماه</p>
        </div>
        <div class="bg-dark-900 text-white rounded-2xl p-5 shadow-sm">
            <div class="w-10 h-10 rounded-xl bg-white/10 grid place-items-center text-lg mb-3">⬣</div>
            <p class="text-xs text-slate-400">نقش‌ها</p>
            <p class="text-2xl font-black mt-1">3</p>
            <p class="text-xs text-slate-400 mt-1">admin ، editor ، author</p>
        </div>
        <div class="bg-gradient-to-br from-brand-500 to-purple-600 text-white rounded-2xl p-5 shadow-sm">
            <div class="w-10 h-10 rounded-xl bg-white/20 grid place-items-center text-lg mb-3">⬔</div>
            <p class="text-xs text-white/80">دسترسی‌ها</p>
            <p class="text-2xl font-black mt-1">8</p>
            <p class="text-xs text-white/80 mt-1">permissions فعال</p>
        </div>
    </div>

    <div class="grid lg:grid-cols-3 gap-4">
        <!-- Latest articles -->
        <div class="lg:col-span-2 bg-white rounded-2xl border shadow-sm p-5">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-bold">آخرین مقالات</h3>
                <a href="{{ route('admin.article') }}" class="text-xs text-brand-600 font-medium">مشاهده همه</a>
            </div>
            <div class="space-y-3 text-sm">
                <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 grid place-items-center shrink-0">📝</div>
                    <div class="flex-1 min-w-0">
                        <p class="font-bold truncate">آموزش Middleware در لاراول</p>
                        <p class="text-xs text-slate-500">علی رضایی • 2 ساعت پیش</p>
                    </div>
                    <span class="text-[11px] px-2.5 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">منتشر شده</span>
                </div>
                <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 grid place-items-center shrink-0">📝</div>
                    <div class="flex-1 min-w-0">
                        <p class="font-bold truncate">مدیریت نقش با spatie</p>
                        <p class="text-xs text-slate-500">سارا محمدی • دیروز</p>
                    </div>
                    <span class="text-[11px] px-2.5 py-1 rounded-full bg-amber-50 text-amber-700 border border-amber-100">پیش‌نویس</span>
                </div>
                <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 grid place-items-center shrink-0">📝</div>
                    <div class="flex-1 min-w-0">
                        <p class="font-bold truncate">آشنایی با Policy ها</p>
                        <p class="text-xs text-slate-500">علی رضایی • 3 روز پیش</p>
                    </div>
                    <span class="text-[11px] px-2.5 py-1 rounded-full bg-green-50 text-green-700 border border-green-100">منتشر شده</span>
                </div>
            </div>
        </div>

        <!-- Roles overview -->
        <div class="bg-white rounded-2xl border shadow-sm p-5">
            <h3 class="font-bold mb-4">نقش‌ها و دسترسی‌ها</h3>
            <div class="space-y-3 text-sm">
                <div class="rounded-2xl border p-4">
                    <div class="flex items-center justify-between">
                        <span class="font-bold">admin</span>
                        <span class="text-[11px] px-2 py-0.5 rounded-full bg-red-50 text-red-600">2 کاربر</span>
                    </div>
                    <div class="mt-2 h-2 rounded-full bg-slate-100 overflow-hidden">
                        <div class="h-full w-full bg-gradient-to-l from-red-500 to-orange-400 rounded-full"></div>
                    </div>
                    <p class="text-xs text-slate-500 mt-2">دسترسی کامل</p>
                </div>
                <div class="rounded-2xl border p-4">
                    <div class="flex items-center justify-between">
                        <span class="font-bold">editor</span>
                        <span class="text-[11px] px-2 py-0.5 rounded-full bg-indigo-50 text-indigo-600">5 کاربر</span>
                    </div>
                    <div class="mt-2 h-2 rounded-full bg-slate-100 overflow-hidden">
                        <div class="h-full w-3/4 bg-gradient-to-l from-brand-600 to-purple-500 rounded-full"></div>
                    </div>
                    <p class="text-xs text-slate-500 mt-2">ویرایش و انتشار مقاله</p>
                </div>
                <div class="rounded-2xl border p-4">
                    <div class="flex items-center justify-between">
                        <span class="font-bold">author</span>
                        <span class="text-[11px] px-2 py-0.5 rounded-full bg-slate-100 text-slate-600">24 کاربر</span>
                    </div>
                    <div class="mt-2 h-2 rounded-full bg-slate-100 overflow-hidden">
                        <div class="h-full w-1/3 bg-slate-400 rounded-full"></div>
                    </div>
                    <p class="text-xs text-slate-500 mt-2">فقط مقاله خودش</p>
                </div>
                <a href="{{ route('admin.role') }}" class="block text-center text-sm py-2.5 rounded-xl border hover:bg-slate-50 transition">مدیریت نقش‌ها</a>
            </div>
        </div>
    </div>
@endsection
