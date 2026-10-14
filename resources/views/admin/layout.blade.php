<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'داشبورد') | پنل مدیریت</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { vazir: ['Vazirmatn','sans-serif'] },
                    colors: {
                        dark: { 950:'#020617', 900:'#0f172a', 800:'#1e293b' },
                        brand: { 500:'#6366f1', 600:'#4f46e5', 700:'#4338ca' }
                    },
                    boxShadow: { soft: '0 8px 30px -12px rgba(0,0,0,.15)' }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css">
    <style>body{font-family:'Vazirmatn',sans-serif;background:#f1f5f9}</style>
</head>
<body class="font-vazir text-slate-800">

<div class="min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-72 shrink-0 bg-dark-900 text-white hidden lg:flex flex-col min-h-screen sticky top-0 h-screen">
        <div class="p-6 flex items-center gap-3 border-b border-white/10">
            <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-brand-500 to-purple-600 grid place-items-center font-black text-xl">م</div>
            <div>
                <div class="font-bold">مکتب‌خونه</div>
                <div class="text-xs text-slate-400">پنل مدیریت دوره لاراول</div>
            </div>
        </div>

        <nav class="flex-1 p-4 space-y-1 text-sm overflow-y-auto">
            <p class="text-[11px] text-slate-500 px-3 py-2">منوی اصلی</p>

            <a href="{{ route('admin.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.index') ? 'bg-brand-600 text-white' : 'text-slate-300 hover:bg-white/10' }}">
                <span>◉</span> داشبورد
            </a>
            <a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.users.index') ? 'bg-brand-600 text-white' : 'text-slate-300 hover:bg-white/10' }}">
                <span>◍</span> کاربران
            </a>
            <a href="{{ route('admin.role') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.role') ? 'bg-brand-600 text-white' : 'text-slate-300 hover:bg-white/10' }}">
                <span>⬣</span> نقش‌ها
            </a>
            <a href="{{ route('admin.article.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.article.index') ? 'bg-brand-600 text-white' : 'text-slate-300 hover:bg-white/10' }}">
                <span>✎</span> مقالات
            </a>

            <p class="text-[11px] text-slate-500 px-3 pt-5 pb-2">عمومی</p>
            <a href="/" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-white/10">
                <span>◎</span> مشاهده سایت
            </a>
            <a href="{{ route('login') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-red-300 hover:bg-red-500/10">
                <span>⎋</span> خروج
            </a>
        </nav>

        <div class="p-4 border-t border-white/10">
            <div class="bg-white/5 rounded-2xl p-3 flex items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=Modir&background=6366f1&color=fff" class="w-10 h-10 rounded-full" alt="admin">
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-bold truncate">مدیر سایت</p>
                    <p class="text-xs text-slate-400">admin</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Mobile sidebar simplified -->
    <div class="lg:hidden fixed bottom-0 inset-x-0 z-30 bg-dark-900 text-white flex justify-around py-3 text-xs border-t border-white/10">
        <a href="{{ route('admin.index') }}">داشبورد</a>
        <a href="{{ route('admin.users.index') }}">کاربران</a>
        <a href="{{ route('admin.role') }}">نقش‌ها</a>
        <a href="{{ route('admin.article.index') }}">مقالات</a>
    </div>

    <!-- Main -->
    <div class="flex-1 min-w-0 flex flex-col pb-16 lg:pb-0">
        <header class="bg-white/90 backdrop-blur sticky top-0 z-20 border-b px-6 py-4 flex items-center gap-4">
            <div>
                <h1 class="font-extrabold text-lg">@yield('title', 'داشبورد')</h1>
                <p class="text-xs text-slate-500">@yield('subtitle', 'مدیریت سیستم')</p>
            </div>
            <div class="mr-auto flex items-center gap-2">
                @yield('actions')
            </div>
        </header>

        <main class="p-6 max-w-6xl w-full mx-auto">
            @if(session('success'))
                <div class="mb-4 bg-green-50 border border-green-200 text-green-700 text-sm rounded-2xl px-4 py-3">{{ session('success') }}</div>
            @endif

            @yield('content')
        </main>
    </div>

</div>

</body>
</html>
