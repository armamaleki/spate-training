@extends('admin.layout')
@section('title', 'کاربر جدید')
@section('subtitle', 'ساخت کاربر تازه')
@section('content')
    <div class="bg-white rounded-2xl border shadow-sm p-6 max-w-2xl mx-auto">
        @if($errors->any())
            <div class="mb-4 rounded-xl bg-red-50 border border-red-200 text-red-600 text-sm px-4 py-3 leading-7">
                <ul class="list-disc pr-5">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
            </div>
        @endif
        <form method="POST" action="{{ route('admin.users.store') }}" class="space-y-5">
            @csrf
            <div>
                <label class="text-sm font-bold block mb-1.5">نام</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="مثلا: علی رضایی" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500">
            </div>
            <div>
                <label class="text-sm font-bold block mb-1.5">ایمیل</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="example@mail.com" dir="ltr" style="text-align:right" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500">
            </div>
            <div>
                <label class="text-sm font-bold block mb-1.5">رمز عبور</label>
                <input type="password" name="password" placeholder="حداقل 8 کاراکتر" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500">
            </div>
            {{-- TODO SPATIE: اینجا select نقش‌ها رو اضافه کن --}}
            <div class="flex gap-2 pt-2">
                <button type="submit" class="px-6 py-3 rounded-xl bg-brand-600 hover:bg-brand-700 text-white text-sm font-bold shadow-lg shadow-indigo-500/20">ذخیره کاربر</button>
                <a href="{{ route('admin.users.index') }}" class="px-6 py-3 rounded-xl border text-sm hover:bg-slate-50">انصراف</a>
            </div>
        </form>
    </div>
@endsection
