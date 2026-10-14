@extends('admin.layout')

@section('title', 'مقالات')
@section('subtitle', 'مدیریت مقالات و وضعیت انتشار آن‌ها')

@section('actions')
    <a href="#" class="text-sm px-4 py-2 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-medium shadow-lg shadow-indigo-500/20">+ مقاله جدید</a>
@endsection

@section('content')
    <!-- Filters -->
    <div class="bg-white rounded-2xl border shadow-sm p-4 mb-4 flex flex-col sm:flex-row gap-3">
        <div class="relative flex-1">
            <input type="text" placeholder="جستجوی عنوان مقاله..." class="w-full rounded-xl border border-slate-200 pr-10 pl-4 py-2.5 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500">
            <span class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">⌕</span>
        </div>
        <div class="flex gap-2">
            <select class="rounded-xl border border-slate-200 px-4 py-2.5 text-sm outline-none focus:border-brand-500 bg-white">
                <option value="">همه وضعیت‌ها</option>
                <option value="published">منتشر شده</option>
                <option value="draft">پیش‌نویس</option>
                <option value="pending">در انتظار تایید</option>
            </select>
            <select class="rounded-xl border border-slate-200 px-4 py-2.5 text-sm outline-none focus:border-brand-500 bg-white">
                <option value="">همه نویسنده‌ها</option>
                <option>علی رضایی</option>
                <option>سارا محمدی</option>
                <option>رضا کریمی</option>
            </select>
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl border shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm min-w-[760px]">
                <thead>
                <tr class="bg-slate-50/80 text-slate-500 text-xs">
                    <th class="text-right font-medium px-5 py-4">مقاله</th>
                    <th class="text-right font-medium px-5 py-4">نویسنده</th>
                    <th class="text-right font-medium px-5 py-4">وضعیت</th>
                    <th class="text-right font-medium px-5 py-4">بازدید</th>
                    <th class="text-right font-medium px-5 py-4">تاریخ</th>
                    <th class="text-left font-medium px-5 py-4">عملیات</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-indigo-50 text-indigo-600 grid place-items-center text-lg shrink-0">📝</div>
                            <div class="min-w-0">
                                <p class="font-bold truncate max-w-[260px]">آموزش Middleware در لاراول</p>
                                <p class="text-xs text-slate-500">دسته: لاراول • ۸ دقیقه مطالعه</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-2">
                            <img src="https://ui-avatars.com/api/?name=A+R&background=4f46e5&color=fff" class="w-7 h-7 rounded-full" alt="">
                            <span class="text-xs">علی رضایی</span>
                        </div>
                    </td>
                    <td class="px-5 py-4"><span class="text-[11px] px-2.5 py-1 rounded-full bg-green-50 text-green-700 border border-green-100 font-bold">منتشر شده</span></td>
                    <td class="px-5 py-4 font-bold">1,240</td>
                    <td class="px-5 py-4 text-xs text-slate-500">۲ ساعت پیش</td>
                    <td class="px-5 py-4">
                        <div class="flex justify-end gap-2">
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border hover:bg-slate-50">ویرایش</a>
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border border-red-100 text-red-600 hover:bg-red-50">حذف</a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-amber-50 text-amber-600 grid place-items-center text-lg shrink-0">📝</div>
                            <div class="min-w-0">
                                <p class="font-bold truncate max-w-[260px]">مدیریت نقش با spatie permission</p>
                                <p class="text-xs text-slate-500">دسته: امنیت • ۱۲ دقیقه مطالعه</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-2">
                            <img src="https://ui-avatars.com/api/?name=S+M&background=0ea5e9&color=fff" class="w-7 h-7 rounded-full" alt="">
                            <span class="text-xs">سارا محمدی</span>
                        </div>
                    </td>
                    <td class="px-5 py-4"><span class="text-[11px] px-2.5 py-1 rounded-full bg-amber-50 text-amber-700 border border-amber-100 font-bold">پیش‌نویس</span></td>
                    <td class="px-5 py-4 font-bold">—</td>
                    <td class="px-5 py-4 text-xs text-slate-500">دیروز</td>
                    <td class="px-5 py-4">
                        <div class="flex justify-end gap-2">
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg bg-green-600 text-white hover:bg-green-700">انتشار</a>
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border hover:bg-slate-50">ویرایش</a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-sky-50 text-sky-600 grid place-items-center text-lg shrink-0">📝</div>
                            <div class="min-w-0">
                                <p class="font-bold truncate max-w-[260px]">آشنایی با Policy ها در لاراول</p>
                                <p class="text-xs text-slate-500">دسته: لاراول • ۶ دقیقه مطالعه</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-2">
                            <img src="https://ui-avatars.com/api/?name=R+K&background=10b981&color=fff" class="w-7 h-7 rounded-full" alt="">
                            <span class="text-xs">رضا کریمی</span>
                        </div>
                    </td>
                    <td class="px-5 py-4"><span class="text-[11px] px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 border border-blue-100 font-bold">در انتظار تایید</span></td>
                    <td class="px-5 py-4 font-bold">—</td>
                    <td class="px-5 py-4 text-xs text-slate-500">۳ روز پیش</td>
                    <td class="px-5 py-4">
                        <div class="flex justify-end gap-2">
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg bg-green-600 text-white hover:bg-green-700">تایید</a>
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border border-red-100 text-red-600 hover:bg-red-50">رد</a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-xl bg-purple-50 text-purple-600 grid place-items-center text-lg shrink-0">📝</div>
                            <div class="min-w-0">
                                <p class="font-bold truncate max-w-[260px]">کش کردن دسترسی‌ها در spatie</p>
                                <p class="text-xs text-slate-500">دسته: بهینه‌سازی • ۵ دقیقه مطالعه</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-2">
                            <img src="https://ui-avatars.com/api/?name=M+A&background=f59e0b&color=fff" class="w-7 h-7 rounded-full" alt="">
                            <span class="text-xs">مریم احمدی</span>
                        </div>
                    </td>
                    <td class="px-5 py-4"><span class="text-[11px] px-2.5 py-1 rounded-full bg-green-50 text-green-700 border border-green-100 font-bold">منتشر شده</span></td>
                    <td class="px-5 py-4 font-bold">860</td>
                    <td class="px-5 py-4 text-xs text-slate-500">۱ هفته پیش</td>
                    <td class="px-5 py-4">
                        <div class="flex justify-end gap-2">
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border hover:bg-slate-50">ویرایش</a>
                            <a href="#" class="text-xs px-3 py-1.5 rounded-lg border border-red-100 text-red-600 hover:bg-red-50">حذف</a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="px-5 py-4 border-t flex items-center justify-between text-xs text-slate-500">
            <p>نمایش 4 از 86 مقاله</p>
            <div class="flex gap-1.5">
                <a href="#" class="w-8 h-8 grid place-items-center rounded-lg border hover:bg-slate-50">‹</a>
                <a href="#" class="w-8 h-8 grid place-items-center rounded-lg bg-dark-900 text-white">1</a>
                <a href="#" class="w-8 h-8 grid place-items-center rounded-lg border hover:bg-slate-50">2</a>
                <a href="#" class="w-8 h-8 grid place-items-center rounded-lg border hover:bg-slate-50">›</a>
            </div>
        </div>
    </div>
@endsection
