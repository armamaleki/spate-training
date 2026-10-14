@extends('admin.layout')
@section('title', 'ویرایش کاربر')
@section('subtitle', $user->name)
@section('content')
    <div class="bg-white rounded-2xl border shadow-sm p-6 max-w-2xl mx-auto">
        @if($errors->any())
            <div class="mb-4 rounded-xl bg-red-50 border border-red-200 text-red-600 text-sm px-4 py-3 leading-7">
                <ul class="list-disc pr-5">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
            </div>
        @endif
        <form method="POST" action="{{ route('admin.users.update', $user) }}" class="space-y-5">
            @csrf @method('PUT')
            <div>
                <label class="text-sm font-bold block mb-1.5">نام</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500">
            </div>
            <div>
                <label class="text-sm font-bold block mb-1.5">ایمیل</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500">
            </div>
            <div>
                <label class="text-sm font-bold block mb-1.5">رمز جدید (اختیاری - خالی بماند یعنی بدون تغییر)</label>
                <input type="password" name="password" placeholder="••••••••" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500">
            </div>
            {{-- TODO SPATIE: اینجا select نقش‌ها با selected روی نقش‌های فعلی
              @selected($user->hasRole($role->name))
            --}}
            <div class="flex gap-2">
                <button class="px-6 py-3 rounded-xl bg-dark-900 text-white text-sm font-bold">ذخیره تغییرات</button>
                <a href="{{ route('admin.users.index') }}" class="px-6 py-3 rounded-xl border text-sm hover:bg-slate-50">انصراف</a>
            </div>
        </form>
    </div>
@endsection
