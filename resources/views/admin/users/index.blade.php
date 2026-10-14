@extends('admin.layout')

@section('title', 'کاربران')
@section('subtitle', 'مدیریت کاربران')

@section('actions')
    <a href="{{ route('admin.users.create') }}" class="text-sm px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-medium shadow-lg shadow-indigo-500/20">+ کاربر جدید</a>
@endsection

@section('content')
    <div class="bg-white rounded-2xl border shadow-sm p-4 mb-4 flex flex-col sm:flex-row gap-3">
        <div class="relative flex-1">
            <form method="GET" action="{{ route('admin.users.index') }}">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="جستجوی نام یا ایمیل..." class="w-full rounded-xl border border-slate-200 pr-10 pl-4 py-2.5 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500">
                <span class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">⌕</span>
            </form>
        </div>
        <p class="text-xs text-slate-500 self-center whitespace-nowrap">مجموع: {{ $users->total() }} کاربر</p>
    </div>

    <div class="bg-white rounded-2xl border shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm min-w-[640px]">
                <thead>
                <tr class="bg-slate-50/80 text-slate-500 text-xs">
                    <th class="text-right font-medium px-5 py-4">کاربر</th>
                    <th class="text-right font-medium px-5 py-4">نقش</th>
                    <th class="text-right font-medium px-5 py-4">عضویت</th>
                    <th class="text-left font-medium px-5 py-4">عملیات</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                @forelse($users as $user)
                    <tr class="hover:bg-slate-50/60 transition">
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=4f46e5&color=fff" class="w-10 h-10 rounded-full" alt="">
                                <div>
                                    <p class="font-bold">{{ $user->name }}</p>
                                    <p class="text-xs text-slate-500" dir="ltr">{{ $user->email }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-4">
                            {{-- TODO SPATIE: اینجا نقش‌ها رو نشون بده
                              @foreach($user->getRoleNames() as $role)
                                <span class="badge">{{ $role }}</span>
                              @endforeach
                            --}}
                            <span class="text-[11px] px-2.5 py-1 rounded-full bg-slate-100 text-slate-500 border">بدون نقش</span>
                        </td>
                        <td class="px-5 py-4 text-xs text-slate-500">{{ $user->created_at->diffForHumans() }}</td>
                        <td class="px-5 py-4">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.users.edit', $user) }}" class="text-xs px-3 py-1.5 rounded-lg border hover:bg-slate-50">ویرایش</a>
                                <form method="POST" action="{{ route('admin.users.destroy', $user) }}" onsubmit="return confirm('حذف شود؟')">
                                    @csrf @method('DELETE')
                                    <button class="text-xs px-3 py-1.5 rounded-lg border border-red-100 text-red-600 hover:bg-red-50">حذف</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-5 py-12 text-center text-slate-400 text-sm">کاربری ثبت نشده است.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
        @if($users->hasPages())
            <div class="px-5 py-4 border-t">{{ $users->links() }}</div>
        @endif
    </div>
@endsection
