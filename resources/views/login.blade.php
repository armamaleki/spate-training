<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود | پنل مدیریت</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { vazir: ['Vazirmatn','sans-serif'] },
                    colors: { brand: { 500:'#6366f1', 600:'#4f46e5', 700:'#4338ca' }, dark: { 900:'#0f172a' } }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css">
    <style>body{font-family:'Vazirmatn',sans-serif}</style>
</head>
<body class="font-vazir bg-slate-100 min-h-screen grid place-items-center p-4">

<div class="w-full max-w-4xl bg-white rounded-3xl shadow-2xl overflow-hidden grid md:grid-cols-2">

    <!-- Right: Brand panel -->
    <div class="hidden md:flex flex-col justify-between p-8 bg-dark-900 text-white relative overflow-hidden" style="background: linear-gradient(160deg,#0f172a 0%,#312e81 60%,#4f46e5 100%)">
        <div class="absolute -top-20 -left-20 w-72 h-72 bg-white/10 rounded-full blur-2xl"></div>
        <div class="absolute -bottom-24 -right-10 w-80 h-80 bg-purple-500/30 rounded-full blur-3xl"></div>

        <div class="relative flex items-center gap-3">
            <div class="w-11 h-11 rounded-2xl bg-white/15 backdrop-blur grid place-items-center font-black text-xl border border-white/20">م</div>
            <div>
                <div class="font-bold">مکتب‌خونه</div>
                <div class="text-xs text-white/60">دوره لاراول spatie permission</div>
            </div>
        </div>

        <div class="relative py-8">
            <h2 class="text-2xl font-extrabold leading-9">مدیریت نقش‌ها و<br>سطوح دسترسی</h2>
            <p class="text-sm text-white/60 mt-3 leading-7">وارد پنل شو، کاربرها رو مدیریت کن، نقش بده و دسترسی‌ها رو کنترل کن.</p>
            <div class="mt-6 flex gap-2 text-xs">
                <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/15">admin</span>
                <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/15">editor</span>
                <span class="px-3 py-1.5 rounded-full bg-white/10 border border-white/15">author</span>
            </div>
        </div>

        <p class="relative text-xs text-white/40">طراحی‌شده برای تدریس پکیج spatie</p>
    </div>

    <!-- Left: Form -->
    <div class="p-8 sm:p-10">
        <h1 class="text-xl font-extrabold text-slate-800">ورود به پنل مدیریت</h1>
        <p class="text-sm text-slate-500 mt-1 mb-8">خوش برگشتی! لطفاً وارد حساب کاربری‌ات شو.</p>

        <form method="POST" action="#" class="space-y-5">
            <div>
                <label class="text-sm font-medium text-slate-700 block mb-1.5">ایمیل</label>
                <input type="email" name="email" placeholder="admin@example.com" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition" dir="ltr" style="text-align:right">
            </div>

            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <label class="text-sm font-medium text-slate-700">رمز عبور</label>
                    <a href="#" class="text-xs text-brand-600 hover:text-brand-700">فراموش کردی؟</a>
                </div>
                <input type="password" name="password" placeholder="••••••••" class="w-full rounded-xl border border-slate-200 px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition" dir="ltr" style="text-align:right">
            </div>

            <label class="flex items-center gap-2 text-sm text-slate-600 cursor-pointer">
                <input type="checkbox" name="remember" class="w-4 h-4 rounded accent-[#4f46e5]">
                مرا به خاطر بسپار
            </label>

            <button type="submit" class="w-full py-3.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm transition shadow-lg shadow-indigo-500/30">
                ورود به داشبورد
            </button>
        </form>

        <div class="mt-6 text-center text-xs text-slate-400">
            حساب نداری؟ <a href="#" class="text-brand-600 font-medium">ثبت‌نام کن</a>
        </div>

        <div class="mt-8 rounded-2xl bg-slate-50 border text-xs text-slate-500 p-3 leading-6">
            <span class="font-bold text-slate-700">راهنمای تست:</span>
            ایمیل <span dir="ltr" class="font-mono">admin@example.com</span> و رمز <span dir="ltr" class="font-mono">12345678</span>
        </div>
    </div>

</div>

</body>
</html>
