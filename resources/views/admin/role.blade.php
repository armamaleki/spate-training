@extends('admin.layout')

@section('title', 'نقش‌ها')
@section('subtitle', 'مدیریت نقش‌ها و دسترسی‌های هر نقش')

@section('actions')
    <a href="#" class="text-sm px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-medium shadow-lg shadow-indigo-500/20">+ نقش جدید</a>
@endsection

@section('content')
    <div class="grid lg:grid-cols-3 gap-4">

        <!-- admin role -->
        <div class="bg-white rounded-2xl border shadow-sm p-5 flex flex-col">
            <div class="flex items-start justify-between mb-3">
                <div class="w-11 h-11 rounded-2xl bg-red-50 text-red-500 grid place-items-center text-xl">👑</div>
                <span class="text-[11px] px-2.5 py-1 rounded-full bg-red-50 text-red-600 border border-red-100 font-bold">2 کاربر</span>
            </div>
            <h3 class="font-extrabold text-lg">admin</h3>
            <p class="text-xs text-slate-500 mt-1 mb-4 leading-6">دسترسی کامل به همه بخش‌ها، بدون هیچ محدودیتی.</p>
            <div class="flex flex-wrap gap-1.5 text-[11px] mb-5">
                <span class="px-2.5 py-1 rounded-lg bg-slate-100">create post</span>
                <span class="px-2.5 py-1 rounded-lg bg-slate-100">edit post</span>
                <span class="px-2.5 py-1 rounded-lg bg-slate-100">delete post</span>
                <span class="px-2.5 py-1 rounded-lg bg-slate-100">publish post</span>
                <span class="px-2.5 py-1 rounded-lg bg-brand-600 text-white">+4 بیشتر</span>
            </div>
            <div class="mt-auto flex gap-2">
                <a href="#" class="flex-1 text-center text-sm py-2.5 rounded-xl border hover:bg-slate-50 transition">ویرایش دسترسی‌ها</a>
                <a href="#" class="w-11 grid place-items-center rounded-xl border border-red-100 text-red-500 hover:bg-red-50 transition">✕</a>
            </div>
        </div>

        <!-- editor role -->
        <div class="bg-white rounded-2xl border-2 border-brand-500 shadow-sm p-5 flex flex-col relative">
            <span class="absolute -top-3 right-5 text-[11px] px-3 py-0.5 rounded-full bg-brand-600 text-white font-bold">پیش‌فرض</span>
            <div class="flex items-start justify-between mb-3">
                <div class="w-11 h-11 rounded-2xl bg-indigo-50 text-indigo-600 grid place-items-center text-xl">✎</div>
                <span class="text-[11px] px-2.5 py-1 rounded-full bg-indigo-50 text-indigo-600 border border-indigo-100 font-bold">5 کاربر</span>
            </div>
            <h3 class="font-extrabold text-lg">editor</h3>
            <p class="text-xs text-slate-500 mt-1 mb-4 leading-6">ویرایش و انتشار مقالات همه نویسنده‌ها.</p>
            <div class="flex flex-wrap gap-1.5 text-[11px] mb-5">
                <span class="px-2.5 py-1 rounded-lg bg-slate-100">edit post</span>
                <span class="px-2.5 py-1 rounded-lg bg-slate-100">publish post</span>
                <span class="px-2.5 py-1 rounded-lg bg-slate-100 line-through text-slate-400">delete user</span>
                <span class="px-2.5 py-1 rounded-lg bg-slate-100 line-through text-slate-400">manage roles</span>
            </div>
            <div class="mt-auto flex gap-2">
                <a href="#" class="flex-1 text-center text-sm py-2.5 rounded-xl bg-dark-900 text-white hover:bg-dark-800 transition">ویرایش دسترسی‌ها</a>
                <a href="#" class="w-11 grid place-items-center rounded-xl border border-red-100 text-red-500 hover:bg-red-50 transition">✕</a>
            </div>
        </div>

        <!-- author role -->
        <div class="bg-white rounded-2xl border shadow-sm p-5 flex flex-col">
            <div class="flex items-start justify-between mb-3">
                <div class="w-11 h-11 rounded-2xl bg-slate-100 text-slate-600 grid place-items-center text-xl">📝</div>
                <span class="text-[11px] px-2.5 py-1 rounded-full bg-slate-100 text-slate-600 border font-bold">24 کاربر</span>
            </div>
            <h3 class="font-extrabold text-lg">author</h3>
            <p class="text-xs text-slate-500 mt-1 mb-4 leading-6">فقط ساخت و ویرایش مقالات خودش، بدون انتشار.</p>
            <div class="flex flex-wrap gap-1.5 text-[11px] mb-5">
                <span class="px-2.5 py-1 rounded-lg bg-slate-100">create post</span>
                <span class="px-2.5 py-1 rounded-lg bg-slate-100">edit own post</span>
                <span class="px-2.5 py-1 rounded-lg bg-slate-100 line-through text-slate-400">publish post</span>
                <span class="px-2.5 py-1 rounded-lg bg-slate-100 line-through text-slate-400">delete post</span>
            </div>
            <div class="mt-auto flex gap-2">
                <a href="#" class="flex-1 text-center text-sm py-2.5 rounded-xl border hover:bg-slate-50 transition">ویرایش دسترسی‌ها</a>
                <a href="#" class="w-11 grid place-items-center rounded-xl border border-red-100 text-red-500 hover:bg-red-50 transition">✕</a>
            </div>
        </div>

    </div>

    <!-- All permissions box -->
    <div class="bg-white rounded-2xl border shadow-sm p-5 mt-4">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-bold">همه دسترسی‌ها (permissions)</h3>
            <a href="#" class="text-xs text-brand-600 font-medium">+ دسترسی جدید</a>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-3 text-sm">
            <label class="flex items-center justify-between rounded-xl border px-4 py-3 cursor-pointer hover:border-brand-500 transition">
                <span class="font-mono text-xs" dir="ltr">create post</span>
                <span class="text-[11px] px-2 py-0.5 rounded-full bg-green-50 text-green-700">3 نقش</span>
            </label>
            <label class="flex items-center justify-between rounded-xl border px-4 py-3 cursor-pointer hover:border-brand-500 transition">
                <span class="font-mono text-xs" dir="ltr">edit post</span>
                <span class="text-[11px] px-2 py-0.5 rounded-full bg-green-50 text-green-700">2 نقش</span>
            </label>
            <label class="flex items-center justify-between rounded-xl border px-4 py-3 cursor-pointer hover:border-brand-500 transition">
                <span class="font-mono text-xs" dir="ltr">delete post</span>
                <span class="text-[11px] px-2 py-0.5 rounded-full bg-red-50 text-red-600">1 نقش</span>
            </label>
            <label class="flex items-center justify-between rounded-xl border px-4 py-3 cursor-pointer hover:border-brand-500 transition">
                <span class="font-mono text-xs" dir="ltr">publish post</span>
                <span class="text-[11px] px-2 py-0.5 rounded-full bg-green-50 text-green-700">2 نقش</span>
            </label>
            <label class="flex items-center justify-between rounded-xl border px-4 py-3 cursor-pointer hover:border-brand-500 transition">
                <span class="font-mono text-xs" dir="ltr">create user</span>
                <span class="text-[11px] px-2 py-0.5 rounded-full bg-red-50 text-red-600">1 نقش</span>
            </label>
            <label class="flex items-center justify-between rounded-xl border px-4 py-3 cursor-pointer hover:border-brand-500 transition">
                <span class="font-mono text-xs" dir="ltr">edit user</span>
                <span class="text-[11px] px-2 py-0.5 rounded-full bg-red-50 text-red-600">1 نقش</span>
            </label>
            <label class="flex items-center justify-between rounded-xl border px-4 py-3 cursor-pointer hover:border-brand-500 transition">
                <span class="font-mono text-xs" dir="ltr">delete user</span>
                <span class="text-[11px] px-2 py-0.5 rounded-full bg-red-50 text-red-600">1 نقش</span>
            </label>
            <label class="flex items-center justify-between rounded-xl border px-4 py-3 cursor-pointer hover:border-brand-500 transition">
                <span class="font-mono text-xs" dir="ltr">manage roles</span>
                <span class="text-[11px] px-2 py-0.5 rounded-full bg-red-50 text-red-600">1 نقش</span>
            </label>
        </div>
    </div>
@endsection
