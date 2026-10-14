@extends('admin.layout')

@section('title', 'کاربران')
@section('subtitle', 'مدیریت کاربران و نقش‌های آن‌ها')

@section('actions')
    <a href="#" class="text-sm px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-medium shadow-lg shadow-indigo-500/20">+ کاربر جدید</a>
@endsection

@section('content')
    <!-- Filters -->
    <div class="bg-white rounded-2xl border shadow-sm p-4 mb-4 flex flex-col sm:flex-row gap-3">
        <div class="relative flex-1">
            <input type="text" placeholder="جستجوی نام یا ایمیل..." class="w-full rounded-xl border border-slate-200 pr-10 pl-4 py-2.5 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500">
            <span class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">⌕</span>
        </div>
        <div class="flex gap-2">
            <select class="rounded-xl border border-slate-200 px-4 py-2.5 text-sm outline-none focus:border-brand-500 bg-white">
                <option value="">همه نقش‌ها</option>
                <option value="admin">admin</option>
                <option value="editor">editor</option>
                <option value="author">author</option>
            </select>
            <select class="rounded-xl border border-slate-200 px-4 py-2.5 text-sm outline-none focus:border-brand-500 bg-white">
                <option value="">همه وضعیت‌ها</option>
                <option value="active">فعال</option>
                <option value="inactive">غیرفعال</option>
            </select>
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl border shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm min-w-[720px]">
                <thead>
                <tr class="bg-slate-50/80 text-slate-500 text-xs">
                    <th class="text-right font-medium px-5 py-4">کاربر</th>
                    <th class="text-right font-medium px-5 py-4">نقش</th>
                    <th class="text-right font-medium px-5 py-4">تعداد مقاله</th>
                    <th class="text-right font-medium px-5 py-4">وضعیت</th>
                    <th class="text-right font-medium px-5 py-4">عضویت</th>
                    <th class="text-left font-medium px-5 py-4">عملیات</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=A+R&background=4f46e5&color=fff" class="w-10 h-10 rounded-full" alt="">
                            <div>
                                <p class="font-bold">علی رضایی</p>
                                <p class="text-xs text-slate-500" dir="ltr">ali@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4">
                        <span class="text-[11px] px-2.5 py-1 rounded-full bg-red-50 text-red-600 border border-red-100 font-bold">admin</span>
                    </td>
                    <td class="px-5 py-4 font-bold">18</td>
                    <td class="px-5 py-4"><span class="inline-flex items-center gap-1.5 text-xs text-green-600"><span class="w-2 h-2 rounded-full bg-green-500"></span> فعال</span></td>
                    <td class="px-5 py-4 text-xs text-slate-500">۲ ماه پیش</td>
                    <td class="px-5 py-4">
                        <div class="flex justify-end gap-2">
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border hover:bg-slate-50">تغییر نقش</a>
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border border-red-100 text-red-600 hover:bg-red-50">حذف</a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=S+M&background=0ea5e9&color=fff" class="w-10 h-10 rounded-full" alt="">
                            <div>
                                <p class="font-bold">سارا محمدی</p>
                                <p class="text-xs text-slate-500" dir="ltr">sara@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4">
                        <span class="text-[11px] px-2.5 py-1 rounded-full bg-indigo-50 text-indigo-600 border border-indigo-100 font-bold">editor</span>
                    </td>
                    <td class="px-5 py-4 font-bold">24</td>
                    <td class="px-5 py-4"><span class="inline-flex items-center gap-1.5 text-xs text-green-600"><span class="w-2 h-2 rounded-full bg-green-500"></span> فعال</span></td>
                    <td class="px-5 py-4 text-xs text-slate-500">۱ ماه پیش</td>
                    <td class="px-5 py-4">
                        <div class="flex justify-end gap-2">
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border hover:bg-slate-50">تغییر نقش</a>
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border border-red-100 text-red-600 hover:bg-red-50">حذف</a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=R+K&background=10b981&color=fff" class="w-10 h-10 rounded-full" alt="">
                            <div>
                                <p class="font-bold">رضا کریمی</p>
                                <p class="text-xs text-slate-500" dir="ltr">reza@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4">
                        <span class="text-[11px] px-2.5 py-1 rounded-full bg-slate-100 text-slate-600 border font-bold">author</span>
                    </td>
                    <td class="px-5 py-4 font-bold">7</td>
                    <td class="px-5 py-4"><span class="inline-flex items-center gap-1.5 text-xs text-slate-400"><span class="w-2 h-2 rounded-full bg-slate-300"></span> غیرفعال</span></td>
                    <td class="px-5 py-4 text-xs text-slate-500">۳ هفته پیش</td>
                    <td class="px-5 py-4">
                        <div class="flex justify-end gap-2">
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border hover:bg-slate-50">تغییر نقش</a>
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border border-red-100 text-red-600 hover:bg-red-50">حذف</a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=M+A&background=f59e0b&color=fff" class="w-10 h-10 rounded-full" alt="">
                            <div>
                                <p class="font-bold">مریم احمدی</p>
                                <p class="text-xs text-slate-500" dir="ltr">maryam@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4 flex gap-1.5">
                        <span class="text-[11px] px-2.5 py-1 rounded-full bg-indigo-50 text-indigo-600 border border-indigo-100 font-bold">editor</span>
                        <span class="text-[11px] px-2.5 py-1 rounded-full bg-slate-100 text-slate-600 border font-bold">author</span>
                    </td>
                    <td class="px-5 py-4 font-bold">11</td>
                    <td class="px-5 py-4"><span class="inline-flex items-center gap-1.5 text-xs text-green-600"><span class="w-2 h-2 rounded-full bg-green-500"></span> فعال</span></td>
                    <td class="px-5 py-4 text-xs text-slate-500">۵ روز پیش</td>
                    <td class="px-5 py-4">
                        <div class="flex justify-end gap-2">
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border hover:bg-slate-50">تغییر نقش</a>
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border border-red-100 text-red-600 hover:bg-red-50">حذف</a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="px-5 py-4 border-t flex items-center justify-between text-xs text-slate-500">
            <p>نمایش 4 از 248 کاربر</p>
            <div class="flex gap-1.5">
                <a href="#" class="w-8 h-8 grid place-items-center rounded-lg border hover:bg-slate-50">‹</a>
                <a href="#" class="w-8 h-8 grid place-items-center rounded-lg bg-dark-900 text-white">1</a>
                <a href="#" class="w-8 h-8 grid place-items-center rounded-lg border hover:bg-slate-50">2</a>
                <a href="#" class="w-8 h-8 grid place-items-center rounded-lg border hover:bg-slate-50">›</a>
            </div>
        </div>
    </div>
@endsection
