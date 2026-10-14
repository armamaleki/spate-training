<?php

namespace Database\Seeders;

use App\Http\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'آموزش Middleware در لاراول',
                'description' => 'در این مقاله یاد می‌گیریم Middleware چیست و چطور درخواست‌ها را قبل از رسیدن به کنترلر مدیریت کنیم.',
            ],
            [
                'title' => 'آشنایی با پکیج spatie permission',
                'description' => 'معرفی کامل نقش‌ها و دسترسی‌ها در لاراول با پکیج spatie و تفاوت Role با Permission.',
            ],
            [
                'title' => 'اعتبارسنجی فرم‌ها با Request Validation',
                'description' => 'یاد می‌گیریم چطور ورودی‌های کاربر را تمیز و امن اعتبارسنجی کنیم.',
            ],
            [
                'title' => 'ساخت پنل مدیریت با Blade و Tailwind',
                'description' => 'ساخت یک پنل مدیریت ساده و راست‌چین با Blade و Tailwind برای پروژه بلاگ.',
            ],
        ];

        foreach ($articles as $data) {
            Article::firstOrCreate(['title' => $data['title']], $data);
        }
    }
}
