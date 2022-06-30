<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommunesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('communes')->delete();
        
        \DB::table('communes')->insert(array (
            0 => 
            array (
                'id' => 2,
                'code_postal' => 101,
                'name' => 'أدرار',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'code_postal' => 102,
                'name' => 'تامست',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'code_postal' => 103,
                'name' => 'شروين',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'code_postal' => 104,
                'name' => 'رقان',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'code_postal' => 105,
                'name' => 'إن زغمير',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'code_postal' => 106,
                'name' => 'تيت',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'code_postal' => 107,
                'name' => 'قصر قدور',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'code_postal' => 108,
                'name' => 'تسابيت',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'code_postal' => 109,
                'name' => 'تيميمون',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'code_postal' => 110,
                'name' => 'أولادالسعيد',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'code_postal' => 111,
                'name' => 'زاوية كنتة',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'code_postal' => 112,
                'name' => 'أولف',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'code_postal' => 113,
                'name' => 'تيمقتن',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'code_postal' => 114,
                'name' => 'تامنطيط',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'code_postal' => 115,
                'name' => 'فنوغيل',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'code_postal' => 116,
                'name' => 'تينركوك',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'code_postal' => 117,
                'name' => 'دلدول',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'code_postal' => 118,
                'name' => 'سالي',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'code_postal' => 119,
                'name' => 'أقبلي',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'code_postal' => 120,
                'name' => 'المطارفة',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'code_postal' => 121,
                'name' => 'أولاد أحمد تيمي',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'code_postal' => 122,
                'name' => 'بودة',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'code_postal' => 123,
                'name' => 'أوقروت',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'code_postal' => 124,
                'name' => 'طالمين',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'code_postal' => 125,
                'name' => 'برج باجي مختار',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'code_postal' => 126,
                'name' => 'السبع',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'code_postal' => 127,
                'name' => 'أولاد عيسى',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'code_postal' => 128,
                'name' => 'تيمياوين',
                'wilaya_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'code_postal' => 201,
                'name' => 'الشلف',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'code_postal' => 202,
                'name' => 'تنس',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 32,
                'code_postal' => 203,
                'name' => 'بنايرية',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 33,
                'code_postal' => 204,
                'name' => 'الكريمية',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 34,
                'code_postal' => 205,
                'name' => 'تاجنة',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 35,
                'code_postal' => 206,
                'name' => 'تاوقريت',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 36,
                'code_postal' => 207,
                'name' => 'بني حوات',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 37,
                'code_postal' => 208,
                'name' => 'صبحة',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 38,
                'code_postal' => 209,
                'name' => 'حرشون',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 39,
                'code_postal' => 210,
                'name' => 'أولاد فارس',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 40,
                'code_postal' => 211,
                'name' => 'سيدي عكاشة',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'code_postal' => 212,
                'name' => 'بوقادير',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 42,
                'code_postal' => 213,
                'name' => 'بني راشد',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 43,
                'code_postal' => 214,
                'name' => 'تلعصة',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 44,
                'code_postal' => 215,
                'name' => 'الهرنافة',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 45,
                'code_postal' => 216,
                'name' => 'وادي قوسين',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 46,
                'code_postal' => 217,
                'name' => 'الظهرة',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 47,
                'code_postal' => 218,
                'name' => 'أولاد عباس',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 48,
                'code_postal' => 219,
                'name' => 'السنجاس',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 49,
                'code_postal' => 220,
                'name' => 'الزبوجة',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 50,
                'code_postal' => 221,
                'name' => 'وادي سلي',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 51,
                'code_postal' => 222,
                'name' => 'أبو الحسن',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 52,
                'code_postal' => 223,
                'name' => 'المرسى',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 53,
                'code_postal' => 224,
                'name' => 'الشطية',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 54,
                'code_postal' => 225,
                'name' => 'سيدي عبد الرحمن',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 55,
                'code_postal' => 226,
                'name' => 'مصدق',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 56,
                'code_postal' => 227,
                'name' => 'الحجاج',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 57,
                'code_postal' => 228,
                'name' => 'الابيض مجاجة',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 58,
                'code_postal' => 229,
                'name' => 'وادي الفضة',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 59,
                'code_postal' => 230,
                'name' => 'أولاد بن عبد القادر',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 60,
                'code_postal' => 231,
                'name' => 'بوزغاية',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 61,
                'code_postal' => 232,
                'name' => 'عين مران',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 62,
                'code_postal' => 233,
                'name' => 'أم الدروع',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 63,
                'code_postal' => 234,
                'name' => 'بريرة',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 64,
                'code_postal' => 235,
                'name' => 'بني بوعتاب',
                'wilaya_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 65,
                'code_postal' => 301,
                'name' => 'الاغواط',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 66,
                'code_postal' => 302,
                'name' => 'قصر الحيران',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 67,
                'code_postal' => 303,
                'name' => 'بناصر بن شهرة',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 68,
                'code_postal' => 304,
                'name' => 'سيدي مخلوف',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 69,
                'code_postal' => 305,
                'name' => 'حاسي دلاعة',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 70,
                'code_postal' => 306,
                'name' => 'حاسي الرمل',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 71,
                'code_postal' => 307,
                'name' => 'عين ماضي',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 72,
                'code_postal' => 308,
                'name' => 'تاجموت',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 73,
                'code_postal' => 309,
                'name' => 'الخنق',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 74,
                'code_postal' => 310,
                'name' => 'قلتة سيدي سعد',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 75,
                'code_postal' => 311,
                'name' => 'عين سيدي علي',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 76,
                'code_postal' => 312,
                'name' => 'البيضاء',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 77,
                'code_postal' => 313,
                'name' => 'بريدة',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 78,
                'code_postal' => 314,
                'name' => 'الغيشة',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 79,
                'code_postal' => 315,
                'name' => 'الحاج المشري',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 80,
                'code_postal' => 316,
                'name' => 'سبقاق',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 81,
                'code_postal' => 317,
                'name' => 'تاويالة',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 82,
                'code_postal' => 318,
                'name' => 'تاجرونة',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 83,
                'code_postal' => 319,
                'name' => 'افلو',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 84,
                'code_postal' => 320,
                'name' => 'العسافية',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 85,
                'code_postal' => 321,
                'name' => 'واد مرة',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 86,
                'code_postal' => 322,
                'name' => 'واد مزي',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 87,
                'code_postal' => 323,
                'name' => 'الحويطة',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 88,
                'code_postal' => 324,
                'name' => 'سيدي بوزيد',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 89,
                'code_postal' => 386,
                'name' => 'مخليف لزرق',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 90,
                'code_postal' => 387,
                'name' => 'الاغواط الارباع',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 91,
                'code_postal' => 388,
                'name' => 'اولاد سيدي عطاتالله',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 92,
                'code_postal' => 389,
                'name' => 'مخليف الجرب',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 93,
                'code_postal' => 390,
                'name' => 'اولاد صالح',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 94,
                'code_postal' => 391,
                'name' => 'اولاد علي',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 95,
                'code_postal' => 392,
                'name' => 'اولاد بن شاعة',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 96,
                'code_postal' => 393,
                'name' => 'اولاد ذياب',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 97,
                'code_postal' => 394,
                'name' => 'معامرة',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 98,
                'code_postal' => 395,
                'name' => 'اولاد زيان',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 99,
                'code_postal' => 396,
                'name' => 'اولاد سيدي سليمان',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 100,
                'code_postal' => 397,
                'name' => 'عبابدة صفران',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 101,
                'code_postal' => 398,
                'name' => 'سكاسكة',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 102,
                'code_postal' => 399,
                'name' => 'حجاج',
                'wilaya_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 103,
                'code_postal' => 401,
                'name' => 'أم البواقي',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 104,
                'code_postal' => 402,
                'name' => 'عين البيضات',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 105,
                'code_postal' => 403,
                'name' => 'عين مليلة',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 106,
                'code_postal' => 404,
                'name' => 'بحير الشقي',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 107,
                'code_postal' => 405,
                'name' => 'العامرية',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 108,
                'code_postal' => 406,
                'name' => 'سيقوس',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 109,
                'code_postal' => 407,
                'name' => 'البلالة',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 110,
                'code_postal' => 408,
                'name' => 'عين بابوش',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 111,
                'code_postal' => 409,
                'name' => 'بريش',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 112,
                'code_postal' => 410,
                'name' => 'أولاد حملة',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 113,
                'code_postal' => 411,
                'name' => 'الضلعة',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 114,
                'code_postal' => 412,
                'name' => 'عين كرشة',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 115,
                'code_postal' => 413,
                'name' => 'هنشير تومغاني',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 116,
                'code_postal' => 414,
                'name' => 'الجازية',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 117,
                'code_postal' => 415,
                'name' => 'عين الديس',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 118,
                'code_postal' => 416,
                'name' => 'فكيرينة',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 119,
                'code_postal' => 417,
                'name' => 'سوق نعمان',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 120,
                'code_postal' => 418,
                'name' => 'الزرق',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 121,
                'code_postal' => 419,
                'name' => 'الفجوج بوغرارة سعودي',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 122,
                'code_postal' => 420,
                'name' => 'أولاد زاوي',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 123,
                'code_postal' => 421,
                'name' => 'بئر الشهدات',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 124,
                'code_postal' => 422,
                'name' => 'قصر الصباحي',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 125,
                'code_postal' => 423,
                'name' => 'وادي نيني',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 126,
                'code_postal' => 424,
                'name' => 'مسكيانة',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 127,
                'code_postal' => 425,
                'name' => 'عين فكرون',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 128,
                'code_postal' => 426,
                'name' => 'الراحية',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 129,
                'code_postal' => 427,
                'name' => 'عين الزيتون',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 130,
                'code_postal' => 428,
                'name' => 'أولاد قاسم',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 131,
                'code_postal' => 429,
                'name' => 'الحرملية',
                'wilaya_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 132,
                'code_postal' => 501,
                'name' => 'باتنة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 133,
                'code_postal' => 502,
                'name' => 'غسيرة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 134,
                'code_postal' => 503,
                'name' => 'معافة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 135,
                'code_postal' => 504,
                'name' => 'مروانة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 136,
                'code_postal' => 505,
                'name' => 'سريانة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 137,
                'code_postal' => 506,
                'name' => 'منعة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 138,
                'code_postal' => 507,
                'name' => 'المعذر',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 139,
                'code_postal' => 508,
                'name' => 'تازولت',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 140,
                'code_postal' => 509,
                'name' => 'نقاوس',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 141,
                'code_postal' => 510,
                'name' => 'قيقبة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 142,
                'code_postal' => 511,
                'name' => 'إينوغيسن',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 143,
                'code_postal' => 512,
                'name' => 'عيون العصافير',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 144,
                'code_postal' => 513,
                'name' => 'جرمة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 145,
                'code_postal' => 514,
                'name' => 'بيطام',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 146,
                'code_postal' => 515,
                'name' => 'المتكوك',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 147,
                'code_postal' => 516,
                'name' => 'أريس',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 148,
                'code_postal' => 517,
                'name' => 'كيمل',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 149,
                'code_postal' => 518,
                'name' => 'تيلاطو',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 150,
                'code_postal' => 519,
                'name' => 'عين جاسر',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 151,
                'code_postal' => 520,
                'name' => 'أولاد سالم',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 152,
                'code_postal' => 521,
                'name' => 'تغرغار',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 153,
                'code_postal' => 522,
                'name' => 'عين ياقوت',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 154,
                'code_postal' => 523,
                'name' => 'فسديس',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 155,
                'code_postal' => 524,
                'name' => 'سفيان',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 156,
                'code_postal' => 525,
                'name' => 'الرحبات',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 157,
                'code_postal' => 526,
                'name' => 'تغانمين',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 158,
                'code_postal' => 527,
                'name' => 'لمسان',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 159,
                'code_postal' => 528,
                'name' => 'قصر بلزمة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 160,
                'code_postal' => 529,
                'name' => 'سقانة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 161,
                'code_postal' => 530,
                'name' => 'أشمول',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 162,
                'code_postal' => 531,
                'name' => 'فم الطوب',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 163,
                'code_postal' => 532,
                'name' => 'بني فضالة الحقانية',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 164,
                'code_postal' => 533,
                'name' => 'وادي المات',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 165,
                'code_postal' => 534,
                'name' => 'تالغمت',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 166,
                'code_postal' => 535,
                'name' => 'بوزينة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 167,
                'code_postal' => 536,
                'name' => 'شمرة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 168,
                'code_postal' => 537,
                'name' => 'وادي الشعبة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 169,
                'code_postal' => 538,
                'name' => 'تاكسلانة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 170,
                'code_postal' => 539,
                'name' => 'القصبات',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 171,
                'code_postal' => 540,
                'name' => 'أولاد عوف',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 172,
                'code_postal' => 541,
                'name' => 'بومقر',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 173,
                'code_postal' => 542,
                'name' => 'بريكة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 174,
                'code_postal' => 543,
                'name' => 'الجزار',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 175,
                'code_postal' => 544,
                'name' => 'تكوت',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 176,
                'code_postal' => 545,
                'name' => 'عين التوتة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 177,
                'code_postal' => 546,
                'name' => 'حيدوسة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 178,
                'code_postal' => 547,
                'name' => 'ثنية العابد',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 179,
                'code_postal' => 548,
                'name' => 'وادي الطاقة',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 180,
                'code_postal' => 549,
                'name' => 'أولاد فاضل',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 181,
                'code_postal' => 550,
                'name' => 'تيمقاد',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 182,
                'code_postal' => 551,
                'name' => 'رأس العيون',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 183,
                'code_postal' => 552,
                'name' => 'النوادر',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 184,
                'code_postal' => 553,
                'name' => 'أولاد سي سليمان',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 185,
                'code_postal' => 554,
                'name' => 'زانة البيضات',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 186,
                'code_postal' => 555,
                'name' => 'مدوكال',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 187,
                'code_postal' => 556,
                'name' => 'أولاد عمار',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 188,
                'code_postal' => 557,
                'name' => 'الحاسي',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 189,
                'code_postal' => 558,
                'name' => 'لازرو',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 190,
                'code_postal' => 559,
                'name' => 'بومية',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 191,
                'code_postal' => 560,
                'name' => 'بوالحيلات',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 192,
                'code_postal' => 561,
                'name' => 'لرباع',
                'wilaya_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 193,
                'code_postal' => 601,
                'name' => 'بجاية',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 194,
                'code_postal' => 602,
                'name' => 'أميزور',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 195,
                'code_postal' => 603,
                'name' => 'فرعون',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 196,
                'code_postal' => 604,
                'name' => 'تاوريرت إغيل',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 197,
                'code_postal' => 605,
                'name' => 'شلاطة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 198,
                'code_postal' => 606,
                'name' => 'تامقرة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 199,
                'code_postal' => 607,
                'name' => 'تيمزريت',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 200,
                'code_postal' => 608,
                'name' => 'سوق الاثنين',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 201,
                'code_postal' => 609,
                'name' => 'سيدي السعيد',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 202,
                'code_postal' => 610,
                'name' => 'تينبذار',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 203,
                'code_postal' => 611,
                'name' => 'تيشي',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 204,
                'code_postal' => 612,
                'name' => 'سمعون',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 205,
                'code_postal' => 613,
                'name' => 'كنديرة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 206,
                'code_postal' => 614,
                'name' => 'تيفرة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 207,
                'code_postal' => 615,
                'name' => 'إغرم',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 208,
                'code_postal' => 616,
                'name' => 'آمالو',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 209,
                'code_postal' => 617,
                'name' => 'إغيل علي',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 210,
                'code_postal' => 618,
                'name' => 'فلاين الماثن',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 211,
                'code_postal' => 619,
                'name' => 'توجة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 212,
                'code_postal' => 620,
                'name' => 'درقينة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 213,
                'code_postal' => 621,
                'name' => 'سيدي عياد',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 214,
                'code_postal' => 622,
                'name' => 'أوقاس',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 215,
                'code_postal' => 623,
                'name' => 'بني جليل',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 216,
                'code_postal' => 624,
                'name' => 'أدكار',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 217,
                'code_postal' => 625,
                'name' => 'أقبو',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 218,
                'code_postal' => 626,
                'name' => 'صدوق',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 219,
                'code_postal' => 627,
                'name' => 'تزمالت',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 220,
                'code_postal' => 628,
                'name' => 'آيت رزين',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 221,
                'code_postal' => 629,
                'name' => 'شميني',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 222,
                'code_postal' => 630,
                'name' => 'السوق أوفلا',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 223,
                'code_postal' => 631,
                'name' => 'تاسكريوت',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 224,
                'code_postal' => 632,
                'name' => 'طيبان',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 225,
                'code_postal' => 633,
                'name' => 'تالة حمزة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 226,
                'code_postal' => 634,
                'name' => 'برباشة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 227,
                'code_postal' => 635,
                'name' => 'بني كسيلة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 228,
                'code_postal' => 636,
                'name' => 'أوزلاقن',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 229,
                'code_postal' => 637,
                'name' => 'بوحمزة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 230,
                'code_postal' => 638,
                'name' => 'بني مليكش',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 231,
                'code_postal' => 639,
                'name' => 'سيدي عيش',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 232,
                'code_postal' => 640,
                'name' => 'القصر',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 233,
                'code_postal' => 641,
                'name' => 'مالبو',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 234,
                'code_postal' => 642,
                'name' => 'أكفادو',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 235,
                'code_postal' => 643,
                'name' => 'لفلاي',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 236,
                'code_postal' => 644,
                'name' => 'خراطة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 237,
                'code_postal' => 645,
                'name' => 'ذراع القايد',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 238,
                'code_postal' => 646,
                'name' => 'تامريجت',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 239,
                'code_postal' => 647,
                'name' => 'آيت إسماعيل',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 240,
                'code_postal' => 648,
                'name' => 'بوخليفة',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 241,
                'code_postal' => 649,
                'name' => 'تيزي بربر',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 242,
                'code_postal' => 650,
                'name' => 'بني معوش',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 243,
                'code_postal' => 651,
                'name' => 'وادي غير',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 244,
                'code_postal' => 652,
                'name' => 'بوجليل',
                'wilaya_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 245,
                'code_postal' => 701,
                'name' => 'بسكرة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 246,
                'code_postal' => 702,
                'name' => 'أوماش',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 247,
                'code_postal' => 703,
                'name' => 'البرانس',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 248,
                'code_postal' => 704,
                'name' => 'شتمة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 249,
                'code_postal' => 705,
                'name' => 'أولاد جلال',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 250,
                'code_postal' => 706,
                'name' => 'رأس الميعاد',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 251,
                'code_postal' => 707,
                'name' => 'اولاد حركات',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 252,
                'code_postal' => 708,
                'name' => 'سيدي خالد',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 253,
                'code_postal' => 709,
                'name' => 'الدوسن',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 254,
                'code_postal' => 710,
                'name' => 'الشعيبة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 255,
                'code_postal' => 711,
                'name' => 'سيدي عقبة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 256,
                'code_postal' => 712,
                'name' => 'مشونش',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 257,
                'code_postal' => 713,
                'name' => 'الحوش',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 258,
                'code_postal' => 714,
                'name' => 'عين الناقة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 259,
                'code_postal' => 715,
                'name' => 'زريبة الوادي',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 260,
                'code_postal' => 716,
                'name' => 'الفيض',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 261,
                'code_postal' => 717,
                'name' => 'القنطرة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 262,
                'code_postal' => 718,
                'name' => 'عين زعطوط',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 263,
                'code_postal' => 719,
                'name' => 'الوطاية',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 264,
                'code_postal' => 720,
                'name' => 'جمورة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 265,
                'code_postal' => 721,
                'name' => 'طولقة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 266,
                'code_postal' => 722,
                'name' => 'لوات',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 267,
                'code_postal' => 723,
                'name' => 'لشانة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 268,
                'code_postal' => 724,
                'name' => 'أورلال',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 269,
                'code_postal' => 725,
                'name' => 'مليلي',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 270,
                'code_postal' => 726,
                'name' => 'فوغالة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 271,
                'code_postal' => 727,
                'name' => 'برج بن عزوز',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 272,
                'code_postal' => 728,
                'name' => 'المزيرعة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 273,
                'code_postal' => 729,
                'name' => 'بوشقرون',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 274,
                'code_postal' => 730,
                'name' => 'مخادمة',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 275,
                'code_postal' => 731,
                'name' => 'الغروس',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 276,
                'code_postal' => 732,
                'name' => 'الحاجب',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 277,
                'code_postal' => 733,
                'name' => 'خنقة سيدي ناجي',
                'wilaya_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 278,
                'code_postal' => 801,
                'name' => 'بشار',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 279,
                'code_postal' => 802,
                'name' => 'عرق فراج',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 280,
                'code_postal' => 803,
                'name' => 'أولاد خضير',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 281,
                'code_postal' => 804,
                'name' => 'مريجة',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 282,
                'code_postal' => 805,
                'name' => 'تمودي',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 283,
                'code_postal' => 806,
                'name' => 'الأحمر',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 284,
                'code_postal' => 807,
                'name' => 'بني عباس',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 285,
                'code_postal' => 808,
                'name' => 'بني يخلف',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 286,
                'code_postal' => 809,
                'name' => 'مشروع هواري بومدين',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 287,
                'code_postal' => 810,
                'name' => 'قنادسة',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 288,
                'code_postal' => 811,
                'name' => 'إيقلي',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 289,
                'code_postal' => 812,
                'name' => 'تبلبالة',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 290,
                'code_postal' => 813,
                'name' => 'تاغيت',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 291,
                'code_postal' => 814,
                'name' => 'الوطات',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 292,
                'code_postal' => 815,
                'name' => 'بوقايس',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 293,
                'code_postal' => 816,
                'name' => 'موغل',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 294,
                'code_postal' => 817,
                'name' => 'العبادلة',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 295,
                'code_postal' => 818,
                'name' => 'كرزاز',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 296,
                'code_postal' => 819,
                'name' => 'قصابي',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 297,
                'code_postal' => 820,
                'name' => 'تامترت',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 298,
                'code_postal' => 821,
                'name' => 'بني ونيف',
                'wilaya_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 299,
                'code_postal' => 901,
                'name' => 'البليدة',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 300,
                'code_postal' => 902,
                'name' => 'الشبلي',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 301,
                'code_postal' => 903,
                'name' => 'بوعينان',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 302,
                'code_postal' => 904,
                'name' => 'وادي العلايق',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 303,
                'code_postal' => 1634,
                'name' => 'تسالة المرجة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 304,
                'code_postal' => 1635,
                'name' => 'أولاد شبل',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 305,
                'code_postal' => 905,
                'name' => 'أولاد يعيش',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 306,
                'code_postal' => 906,
                'name' => 'الشريعة',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 307,
                'code_postal' => 1636,
                'name' => 'بئر توتة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 308,
                'code_postal' => 907,
                'name' => 'العفرون',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 309,
                'code_postal' => 908,
                'name' => 'الشفة',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 310,
                'code_postal' => 909,
                'name' => 'حمام ملوان',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 311,
                'code_postal' => 910,
                'name' => 'بن خليل',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 312,
                'code_postal' => 911,
                'name' => 'الصومعة',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 313,
                'code_postal' => 1637,
                'name' => 'سيدي موسى',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 314,
                'code_postal' => 912,
                'name' => 'موزاية',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 315,
                'code_postal' => 913,
                'name' => 'سوحان',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 316,
                'code_postal' => 914,
                'name' => 'مفتاح',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 317,
                'code_postal' => 915,
                'name' => 'أولاد سلامة',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 318,
                'code_postal' => 916,
                'name' => 'بوفاريك',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 319,
                'code_postal' => 917,
                'name' => 'الأربعات',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 320,
                'code_postal' => 918,
                'name' => 'وادي جر',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 321,
                'code_postal' => 919,
                'name' => 'بني تامو',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 322,
                'code_postal' => 920,
                'name' => 'بوعرفة',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 323,
                'code_postal' => 921,
                'name' => 'بني مراد',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 324,
                'code_postal' => 922,
                'name' => 'بوقرة',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 325,
                'code_postal' => 923,
                'name' => 'قرواو',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 326,
                'code_postal' => 924,
                'name' => 'عين الرمانة',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 327,
                'code_postal' => 925,
                'name' => 'جبابرة',
                'wilaya_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 328,
                'code_postal' => 1001,
                'name' => 'البويرة',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 329,
                'code_postal' => 1002,
                'name' => 'الأسنام',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 330,
                'code_postal' => 1003,
                'name' => 'قرومة',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 331,
                'code_postal' => 1004,
                'name' => 'سوق الخميس',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 332,
                'code_postal' => 1005,
                'name' => 'القادرية',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 333,
                'code_postal' => 1006,
                'name' => 'حنيف',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 334,
                'code_postal' => 1007,
                'name' => 'ديرة',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 335,
                'code_postal' => 1008,
                'name' => 'آيت لعزيز',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 336,
                'code_postal' => 1009,
                'name' => 'تاغزوت',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 337,
                'code_postal' => 1010,
                'name' => 'روراوة',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 338,
                'code_postal' => 1011,
                'name' => 'مزدور',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 339,
                'code_postal' => 1012,
                'name' => 'الحيزر',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 340,
                'code_postal' => 1013,
                'name' => 'الأخضرية',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 341,
                'code_postal' => 1014,
                'name' => 'معلة',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 342,
                'code_postal' => 1015,
                'name' => 'الهاشمية',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 343,
                'code_postal' => 1016,
                'name' => 'عمر',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 344,
                'code_postal' => 1017,
                'name' => 'الشرفات',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 345,
                'code_postal' => 1018,
                'name' => 'برج أوخريص',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 346,
                'code_postal' => 1019,
                'name' => 'العجيبة',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 347,
                'code_postal' => 1020,
                'name' => 'الحاكمية',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 348,
                'code_postal' => 1021,
                'name' => 'الخبوزية',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 349,
                'code_postal' => 1022,
                'name' => 'أهل القصر',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 350,
                'code_postal' => 1023,
                'name' => 'بودربالة',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 351,
                'code_postal' => 1024,
                'name' => 'زبربر',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 352,
                'code_postal' => 1025,
                'name' => 'عين الحجر',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 353,
                'code_postal' => 1026,
                'name' => 'جباحية',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 354,
                'code_postal' => 1027,
                'name' => 'اغبالو',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 355,
                'code_postal' => 1028,
                'name' => 'تاقديت',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 356,
                'code_postal' => 1029,
                'name' => 'عين الترك',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 357,
                'code_postal' => 1030,
                'name' => 'الصهاريج',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 358,
                'code_postal' => 1031,
                'name' => 'الدشمية',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 359,
                'code_postal' => 1032,
                'name' => 'ريدان',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 360,
                'code_postal' => 1033,
                'name' => 'بشلول',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 361,
                'code_postal' => 1034,
                'name' => 'بوكرم',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 362,
                'code_postal' => 1035,
                'name' => 'عين بسام',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 363,
                'code_postal' => 1036,
                'name' => 'بئر غبالو',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 364,
                'code_postal' => 1037,
                'name' => 'مشداله',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 365,
                'code_postal' => 1038,
                'name' => 'سور الغزلان',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 366,
                'code_postal' => 1039,
                'name' => 'المعمورة',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 367,
                'code_postal' => 1040,
                'name' => 'أولاد راشد',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 368,
                'code_postal' => 1041,
                'name' => 'عين العلوي',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 369,
                'code_postal' => 1042,
                'name' => 'الحجرة الزرقاء',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 370,
                'code_postal' => 1043,
                'name' => 'تاوريرت',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 371,
                'code_postal' => 1044,
                'name' => 'المقراني',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 372,
                'code_postal' => 1045,
                'name' => 'وادي البردي',
                'wilaya_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 373,
                'code_postal' => 1101,
                'name' => 'تامنغست',
                'wilaya_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 374,
                'code_postal' => 1102,
                'name' => 'أباليسا',
                'wilaya_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 375,
                'code_postal' => 1103,
                'name' => 'ان غار',
                'wilaya_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 376,
                'code_postal' => 1104,
                'name' => 'ان قزام',
                'wilaya_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 377,
                'code_postal' => 1105,
                'name' => 'أدلس',
                'wilaya_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 378,
                'code_postal' => 1106,
                'name' => 'تازروق',
                'wilaya_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 379,
                'code_postal' => 1107,
                'name' => 'تين زواتين',
                'wilaya_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 380,
                'code_postal' => 1108,
                'name' => 'ان صالح',
                'wilaya_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 381,
                'code_postal' => 1109,
                'name' => 'ان امقل',
                'wilaya_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 382,
                'code_postal' => 1110,
                'name' => 'فقرات الزاوية',
                'wilaya_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 383,
                'code_postal' => 1201,
                'name' => 'تبسة',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 384,
                'code_postal' => 1202,
                'name' => 'بئر العاتر',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 385,
                'code_postal' => 1203,
                'name' => 'الشريعة',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 386,
                'code_postal' => 1204,
                'name' => 'سطح قنطيس',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 387,
                'code_postal' => 1205,
                'name' => 'العوينات',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 388,
                'code_postal' => 1206,
                'name' => 'الحويجبات',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 389,
                'code_postal' => 1207,
                'name' => 'صفصاف الوسرة',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 390,
                'code_postal' => 1208,
                'name' => 'الحمامات',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 391,
                'code_postal' => 1209,
                'name' => 'نقرين',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 392,
                'code_postal' => 1210,
                'name' => 'بئر المقدم',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 393,
                'code_postal' => 1211,
                'name' => 'الكويف',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 394,
                'code_postal' => 1212,
                'name' => 'مرسط',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 395,
                'code_postal' => 1213,
                'name' => 'العقلة',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 396,
                'code_postal' => 1214,
                'name' => 'بئرالذهب',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 397,
                'code_postal' => 1215,
                'name' => 'العقلة المالحة',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 398,
                'code_postal' => 1216,
                'name' => 'قوريقر',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 399,
                'code_postal' => 1217,
                'name' => 'بكارية',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 400,
                'code_postal' => 1218,
                'name' => 'بوخضرة',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 401,
                'code_postal' => 1219,
                'name' => 'الونزة',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 402,
                'code_postal' => 1220,
                'name' => 'الماتالأبيض',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 403,
                'code_postal' => 1221,
                'name' => 'ام علي',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 404,
                'code_postal' => 1222,
                'name' => 'ثليجان',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 405,
                'code_postal' => 1223,
                'name' => 'عين الزرقات',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 406,
                'code_postal' => 1224,
                'name' => 'المريج',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 407,
                'code_postal' => 1225,
                'name' => 'بولحاف الدين',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 408,
                'code_postal' => 1226,
                'name' => 'بجن',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 409,
                'code_postal' => 1227,
                'name' => 'المزرعة',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 410,
                'code_postal' => 1228,
                'name' => 'فركان',
                'wilaya_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 411,
                'code_postal' => 1301,
                'name' => 'تلمسان',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 412,
                'code_postal' => 1302,
                'name' => 'بني مستر',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 413,
                'code_postal' => 1303,
                'name' => 'عين تالوت',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 414,
                'code_postal' => 1304,
                'name' => 'الرمشي',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 415,
                'code_postal' => 1305,
                'name' => 'الفحول',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 416,
                'code_postal' => 1306,
                'name' => 'صبرة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 417,
                'code_postal' => 1307,
                'name' => 'الغزوات',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 418,
                'code_postal' => 1308,
                'name' => 'السواني',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 419,
                'code_postal' => 1309,
                'name' => 'جبالة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 420,
                'code_postal' => 1310,
                'name' => 'القور',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 421,
                'code_postal' => 1311,
                'name' => 'وادي الشولي',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 422,
                'code_postal' => 1312,
                'name' => 'عين فزة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 423,
                'code_postal' => 1313,
                'name' => 'أولاد ميمون',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 424,
                'code_postal' => 1314,
                'name' => 'عمير',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 425,
                'code_postal' => 1315,
                'name' => 'عين يوسف',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 426,
                'code_postal' => 1316,
                'name' => 'زناتة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 427,
                'code_postal' => 1317,
                'name' => 'بني سنوس',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 428,
                'code_postal' => 1318,
                'name' => 'باب العسة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 429,
                'code_postal' => 1319,
                'name' => 'دار يغمراسن',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 430,
                'code_postal' => 1320,
                'name' => 'فلاوسن',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 431,
                'code_postal' => 1321,
                'name' => 'العزايل',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 432,
                'code_postal' => 1322,
                'name' => 'السبعة شيوخ',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 433,
                'code_postal' => 1323,
                'name' => 'تيرني بني هديل',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 434,
                'code_postal' => 1324,
                'name' => 'ابن سكران',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 435,
                'code_postal' => 1325,
                'name' => 'عين نحالة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 436,
                'code_postal' => 1326,
                'name' => 'الحناية',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 437,
                'code_postal' => 1327,
                'name' => 'مغنية',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 438,
                'code_postal' => 1328,
                'name' => 'حمام بوغرارة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 439,
                'code_postal' => 1329,
                'name' => 'السواحلية',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 440,
                'code_postal' => 1330,
                'name' => 'مسيردة الفواقة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 441,
                'code_postal' => 1331,
                'name' => 'عين فتاح',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 442,
                'code_postal' => 1332,
                'name' => 'العريشة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 443,
                'code_postal' => 1333,
                'name' => 'سوق الثلاثات',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 444,
                'code_postal' => 1334,
                'name' => 'سيدي عبداللي',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 445,
                'code_postal' => 1335,
                'name' => 'سبدو',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 446,
                'code_postal' => 1336,
                'name' => 'بني وارسوس',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 447,
                'code_postal' => 1337,
                'name' => 'سيدي مجاهد',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 448,
                'code_postal' => 1338,
                'name' => 'بني بوسعيد',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 449,
                'code_postal' => 1339,
                'name' => 'مرسى بن مهيدي',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 450,
                'code_postal' => 1340,
                'name' => 'ندرومة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 451,
                'code_postal' => 1341,
                'name' => 'سيدي الجيلالي',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 452,
                'code_postal' => 1342,
                'name' => 'بني بهدل',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 453,
                'code_postal' => 1343,
                'name' => 'البويهي',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 454,
                'code_postal' => 1344,
                'name' => 'حنين',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 455,
                'code_postal' => 1345,
                'name' => 'تيانت',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 456,
                'code_postal' => 1346,
                'name' => 'أولاد رياح',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 457,
                'code_postal' => 1347,
                'name' => 'بوحلو',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 458,
                'code_postal' => 1348,
                'name' => 'بني راشد',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 459,
                'code_postal' => 1349,
                'name' => 'عين الغرابة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 460,
                'code_postal' => 1350,
                'name' => 'شتوان',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 461,
                'code_postal' => 1351,
                'name' => 'منصورة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 462,
                'code_postal' => 1352,
                'name' => 'بني صميل',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 463,
                'code_postal' => 1353,
                'name' => 'العين الكبيرة',
                'wilaya_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 464,
                'code_postal' => 1401,
                'name' => 'تيارت',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 465,
                'code_postal' => 1402,
                'name' => 'مدروسة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 466,
                'code_postal' => 1403,
                'name' => 'عين بوشقيف',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 467,
                'code_postal' => 1404,
                'name' => 'سيدي علي ملال',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 468,
                'code_postal' => 1405,
                'name' => 'عين زاريت',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 469,
                'code_postal' => 1406,
                'name' => 'عين الذهب',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 470,
                'code_postal' => 1407,
                'name' => 'سيدي بختي',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 471,
                'code_postal' => 1408,
                'name' => 'مديرسة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 472,
                'code_postal' => 1409,
                'name' => 'زمالة الأمير عبد الق',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 473,
                'code_postal' => 1410,
                'name' => 'مادنة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 474,
                'code_postal' => 1411,
                'name' => 'السبت',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 475,
                'code_postal' => 1412,
                'name' => 'ملاكو',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 476,
                'code_postal' => 1413,
                'name' => 'دحموني',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 477,
                'code_postal' => 1414,
                'name' => 'رحوية',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 478,
                'code_postal' => 1415,
                'name' => 'مهدية',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 479,
                'code_postal' => 1416,
                'name' => 'السوقر',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 480,
                'code_postal' => 1417,
                'name' => 'سي عبد الغاني',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 481,
                'code_postal' => 1418,
                'name' => 'عين الحديد',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 482,
                'code_postal' => 1419,
                'name' => 'جبيلت الرصفات',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 483,
                'code_postal' => 1420,
                'name' => 'النعيمة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 484,
                'code_postal' => 1421,
                'name' => 'مغيلة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 485,
                'code_postal' => 1422,
                'name' => 'قرطوفة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 486,
                'code_postal' => 1423,
                'name' => 'سيدي الحسني',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 487,
                'code_postal' => 1424,
                'name' => 'جيلالي بن عمار',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 488,
                'code_postal' => 1425,
                'name' => 'سبعين',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 489,
                'code_postal' => 1426,
                'name' => 'توسنينة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 490,
                'code_postal' => 1427,
                'name' => 'فرندة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 491,
                'code_postal' => 1428,
                'name' => 'عين كرمس',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 492,
                'code_postal' => 1429,
                'name' => 'قصر الشلالة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 493,
                'code_postal' => 1430,
                'name' => 'الرشايقة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 494,
                'code_postal' => 1431,
                'name' => 'الناظورة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 495,
                'code_postal' => 1432,
                'name' => 'تاقدمت',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 496,
                'code_postal' => 1433,
                'name' => 'وادي ليلي',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 497,
                'code_postal' => 1434,
                'name' => 'مشروع الصفا',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 498,
                'code_postal' => 1435,
                'name' => 'الحمادية',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 499,
                'code_postal' => 1436,
                'name' => 'شحيمة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 500,
                'code_postal' => 1437,
                'name' => 'تخمارت',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 501,
                'code_postal' => 1438,
                'name' => 'أولاد جراد',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('communes')->insert(array (
            0 => 
            array (
                'id' => 502,
                'code_postal' => 1439,
                'name' => 'سرغين',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 503,
                'code_postal' => 1440,
                'name' => 'بوقرة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 504,
                'code_postal' => 1441,
                'name' => 'الفايجة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 505,
                'code_postal' => 1442,
                'name' => 'تيدة',
                'wilaya_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 506,
                'code_postal' => 1501,
                'name' => 'تيزي وزو',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 507,
                'code_postal' => 1502,
                'name' => 'عين الحمام',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 508,
                'code_postal' => 1503,
                'name' => 'اقبيل',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 509,
                'code_postal' => 1504,
                'name' => 'فريحة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 510,
                'code_postal' => 1505,
                'name' => 'الصوامع',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 511,
                'code_postal' => 1506,
                'name' => 'مشطراس',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 512,
                'code_postal' => 1507,
                'name' => 'ارجن',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 513,
                'code_postal' => 1508,
                'name' => 'تيميزارت',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 514,
                'code_postal' => 1509,
                'name' => 'ماكودة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 515,
                'code_postal' => 1510,
                'name' => 'ذراع الميزان',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 516,
                'code_postal' => 1511,
                'name' => 'تيزي غنيف',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 517,
                'code_postal' => 1512,
                'name' => 'بونوح',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 518,
                'code_postal' => 1513,
                'name' => 'آيت شفعة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 519,
                'code_postal' => 1514,
                'name' => 'فريقات',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 520,
                'code_postal' => 1515,
                'name' => 'بني عيسى',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 521,
                'code_postal' => 1516,
                'name' => 'بني زمنزر',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 522,
                'code_postal' => 1517,
                'name' => 'ايفرحونن',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 523,
                'code_postal' => 1518,
                'name' => 'عزازقة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 524,
                'code_postal' => 1519,
                'name' => 'ايلولة امالو',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 525,
                'code_postal' => 1520,
                'name' => 'يعكورن',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 526,
                'code_postal' => 1521,
                'name' => 'الأربعات نايت ايرثن',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 527,
                'code_postal' => 1522,
                'name' => 'تيزي راشد',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 528,
                'code_postal' => 1523,
                'name' => 'زكري',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 529,
                'code_postal' => 1524,
                'name' => 'واقنون',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 530,
                'code_postal' => 1525,
                'name' => 'عين الزاوية',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 531,
                'code_postal' => 1526,
                'name' => 'مكيرة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 532,
                'code_postal' => 1527,
                'name' => 'آيت يحي',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 533,
                'code_postal' => 1528,
                'name' => 'آيت محمود',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 534,
                'code_postal' => 1529,
                'name' => 'المعاتقة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 535,
                'code_postal' => 1530,
                'name' => 'آيت بومهدي',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 536,
                'code_postal' => 1531,
                'name' => 'أبي يوسف',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 537,
                'code_postal' => 1532,
                'name' => 'بني دوالة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 538,
                'code_postal' => 1533,
                'name' => 'أليلتين',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 539,
                'code_postal' => 1534,
                'name' => 'بوزغن',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 540,
                'code_postal' => 1535,
                'name' => 'آيت قواشة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 541,
                'code_postal' => 1536,
                'name' => 'واضية',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 542,
                'code_postal' => 1537,
                'name' => 'أزفون',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 543,
                'code_postal' => 1538,
                'name' => 'تيقزيرت',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 544,
                'code_postal' => 1539,
                'name' => 'جبل عيسى ميمون',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 545,
                'code_postal' => 1540,
                'name' => 'بوغني',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 546,
                'code_postal' => 1541,
                'name' => 'إيفيغات',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 547,
                'code_postal' => 1542,
                'name' => 'آيت اومالو',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 548,
                'code_postal' => 1543,
                'name' => 'تيرمتين',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 549,
                'code_postal' => 1544,
                'name' => 'أقرو',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 550,
                'code_postal' => 1545,
                'name' => 'ياطفان',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 551,
                'code_postal' => 1546,
                'name' => 'بني زيكي',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 552,
                'code_postal' => 1547,
                'name' => 'ذراع بن خدة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 553,
                'code_postal' => 1548,
                'name' => 'واسيف',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 554,
                'code_postal' => 1549,
                'name' => 'أجر',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 555,
                'code_postal' => 1550,
                'name' => 'مقلة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 556,
                'code_postal' => 1551,
                'name' => 'تيزي نثلاثة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 557,
                'code_postal' => 1552,
                'name' => 'بني يني',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 558,
                'code_postal' => 1553,
                'name' => 'اغريب',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 559,
                'code_postal' => 1554,
                'name' => 'افليسن',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 560,
                'code_postal' => 1555,
                'name' => 'بوجيمة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 561,
                'code_postal' => 1556,
                'name' => 'وادي قصاري',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 562,
                'code_postal' => 1557,
                'name' => 'سوق الاثنين',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 563,
                'code_postal' => 1558,
                'name' => 'آيت خليلي',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 564,
                'code_postal' => 1559,
                'name' => 'سيدي نعمان',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 565,
                'code_postal' => 1560,
                'name' => 'ابودرارن',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 566,
                'code_postal' => 1561,
                'name' => 'اقني قغران',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 567,
                'code_postal' => 1562,
                'name' => 'مزرانة',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 568,
                'code_postal' => 1563,
                'name' => 'امسوحال',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 569,
                'code_postal' => 1564,
                'name' => 'تادمايت',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 570,
                'code_postal' => 1565,
                'name' => 'آيت بوعد',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 571,
                'code_postal' => 1566,
                'name' => 'أسي يوسف',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 572,
                'code_postal' => 1567,
                'name' => 'أيت تودرت',
                'wilaya_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 573,
                'code_postal' => 1601,
                'name' => 'الجزائر الوسطى',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 574,
                'code_postal' => 1602,
                'name' => 'سيدي امحمد',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 575,
                'code_postal' => 1603,
                'name' => 'المدنية',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 576,
                'code_postal' => 1604,
                'name' => 'بلوزداد',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 577,
                'code_postal' => 1605,
                'name' => 'باب الوادي',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 578,
                'code_postal' => 1606,
                'name' => 'بولوغين',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 579,
                'code_postal' => 1607,
                'name' => 'القصبة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 580,
                'code_postal' => 1608,
                'name' => 'وادي قريش',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 581,
                'code_postal' => 1609,
                'name' => 'بئر مراد رايس',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 582,
                'code_postal' => 1610,
                'name' => 'الأبيار',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 583,
                'code_postal' => 1611,
                'name' => 'بوزريعة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 584,
                'code_postal' => 1612,
                'name' => 'بئر خادم',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 585,
                'code_postal' => 1613,
                'name' => 'الحراش',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 586,
                'code_postal' => 1614,
                'name' => 'براقي',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 587,
                'code_postal' => 1615,
                'name' => 'وادي السمار',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 588,
                'code_postal' => 1616,
                'name' => 'بوروبة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 589,
                'code_postal' => 1617,
                'name' => 'حسين داي',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 590,
                'code_postal' => 1618,
                'name' => 'القبة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 591,
                'code_postal' => 1619,
                'name' => 'باش جراح',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 592,
                'code_postal' => 1620,
                'name' => 'الدار البيضاء',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 593,
                'code_postal' => 1621,
                'name' => 'باب الزوار',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 594,
                'code_postal' => 1622,
                'name' => 'بن عكنون',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 595,
                'code_postal' => 1623,
                'name' => 'دالي إبراهيم',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 596,
                'code_postal' => 1624,
                'name' => 'الحمامات',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 597,
                'code_postal' => 1625,
                'name' => 'رايس حميدو',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 598,
                'code_postal' => 1626,
                'name' => 'جسر قسنطينة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 599,
                'code_postal' => 1627,
                'name' => 'المرادية',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 600,
                'code_postal' => 1628,
                'name' => 'حيدرة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 601,
                'code_postal' => 1629,
                'name' => 'المحمدية',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 602,
                'code_postal' => 1630,
                'name' => 'برج الكيفان',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 603,
                'code_postal' => 1631,
                'name' => 'المغارية',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 604,
                'code_postal' => 1632,
                'name' => 'بني مسوس',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 605,
                'code_postal' => 1633,
                'name' => 'الكاليتوس',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 606,
                'code_postal' => 1700,
                'name' => 'الجلفة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 607,
                'code_postal' => 1701,
                'name' => 'الجلفة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 608,
                'code_postal' => 1702,
                'name' => 'مجبارة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 609,
                'code_postal' => 1703,
                'name' => 'القديد',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 610,
                'code_postal' => 1704,
                'name' => 'حاسي بحبح',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 611,
                'code_postal' => 1705,
                'name' => 'عين معبد',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 612,
                'code_postal' => 1706,
                'name' => 'سد رحال',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 613,
                'code_postal' => 1707,
                'name' => 'فيض البطمة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 614,
                'code_postal' => 1708,
                'name' => 'بيرين',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 615,
                'code_postal' => 1709,
                'name' => 'بويرة الاحداب',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 616,
                'code_postal' => 1710,
                'name' => 'زكار',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 617,
                'code_postal' => 1711,
                'name' => 'الخميس',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 618,
                'code_postal' => 1712,
                'name' => 'سيدي بايزيد',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 619,
                'code_postal' => 1713,
                'name' => 'مليليحة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 620,
                'code_postal' => 1714,
                'name' => 'الادريسية',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 621,
                'code_postal' => 1715,
                'name' => 'دويس',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 622,
                'code_postal' => 1716,
                'name' => 'حاسي العش',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 623,
                'code_postal' => 1717,
                'name' => 'مسعد',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 624,
                'code_postal' => 1718,
                'name' => 'قطارة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 625,
                'code_postal' => 1719,
                'name' => 'سيدي لعجال',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 626,
                'code_postal' => 1720,
                'name' => 'حد الصحاري',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 627,
                'code_postal' => 1721,
                'name' => 'قرنيني',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 628,
                'code_postal' => 1722,
                'name' => 'سلمانة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 629,
                'code_postal' => 1723,
                'name' => 'عين الشهدات',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 630,
                'code_postal' => 1724,
                'name' => 'ام لعظام',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 631,
                'code_postal' => 1725,
                'name' => 'دار الشيوخ',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 632,
                'code_postal' => 1726,
                'name' => 'الشارف',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 633,
                'code_postal' => 1727,
                'name' => 'بن يعقوب',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 634,
                'code_postal' => 1728,
                'name' => 'زعفران',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 635,
                'code_postal' => 1729,
                'name' => 'دلدول',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 636,
                'code_postal' => 1730,
                'name' => 'عين الابل',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 637,
                'code_postal' => 1731,
                'name' => 'عين وسارة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 638,
                'code_postal' => 1732,
                'name' => 'بنهار',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 639,
                'code_postal' => 1733,
                'name' => 'حاسي فدول',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 640,
                'code_postal' => 1734,
                'name' => 'عمورة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 641,
                'code_postal' => 1735,
                'name' => 'عين فقة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 642,
                'code_postal' => 1736,
                'name' => 'تعظميت',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 643,
                'code_postal' => 1790,
                'name' => 'اولاد خناثة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 644,
                'code_postal' => 1791,
                'name' => 'اولاد يحي بن سالم',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 645,
                'code_postal' => 1792,
                'name' => 'اولاد عيسى بن علي',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 646,
                'code_postal' => 1793,
                'name' => 'اولاد ام الأخوة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 647,
                'code_postal' => 1794,
                'name' => 'اولاد رقاد الغرابة',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 648,
                'code_postal' => 1795,
                'name' => 'زمزاش',
                'wilaya_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 649,
                'code_postal' => 1801,
                'name' => 'جيجل',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 650,
                'code_postal' => 1802,
                'name' => 'أراقن',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 651,
                'code_postal' => 1803,
                'name' => 'العوانة',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 652,
                'code_postal' => 1804,
                'name' => 'زيامة منصورية',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 653,
                'code_postal' => 1805,
                'name' => 'الطاهير',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 654,
                'code_postal' => 1806,
                'name' => 'الأمير عبد القادر',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 655,
                'code_postal' => 1807,
                'name' => 'الشقفة',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 656,
                'code_postal' => 1808,
                'name' => 'الشحنة',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 657,
                'code_postal' => 1809,
                'name' => 'الميلية',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 658,
                'code_postal' => 1810,
                'name' => 'سيدي معروف',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 659,
                'code_postal' => 1811,
                'name' => 'السطارة',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 660,
                'code_postal' => 1812,
                'name' => 'العنصر',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 661,
                'code_postal' => 1813,
                'name' => 'سيدي عبد العزيز',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 662,
                'code_postal' => 1814,
                'name' => 'قاوس',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 663,
                'code_postal' => 1815,
                'name' => 'غبالة',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 664,
                'code_postal' => 1816,
                'name' => 'بوراوي بلهادف',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 665,
                'code_postal' => 1817,
                'name' => 'جيملة',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 666,
                'code_postal' => 1818,
                'name' => 'سلمى بن زياد',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 667,
                'code_postal' => 1819,
                'name' => 'بوسيف اولاد عسكر',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 668,
                'code_postal' => 1820,
                'name' => 'القنار نوشفي',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 669,
                'code_postal' => 1821,
                'name' => 'اولاد يحي خدروش',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 670,
                'code_postal' => 1822,
                'name' => 'بوذريعة بن ياجيس',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 671,
                'code_postal' => 1823,
                'name' => 'خير وادي عجول',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 672,
                'code_postal' => 1824,
                'name' => 'تاكسنة',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 673,
                'code_postal' => 1825,
                'name' => 'الجمعة بني حبيبي',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 674,
                'code_postal' => 1826,
                'name' => 'برج الطاهر',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 675,
                'code_postal' => 1827,
                'name' => 'أولاد رابح',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 676,
                'code_postal' => 1828,
                'name' => 'وجانة',
                'wilaya_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 677,
                'code_postal' => 1901,
                'name' => 'سطيف',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 678,
                'code_postal' => 1902,
                'name' => 'العين الكبيرة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 679,
                'code_postal' => 1903,
                'name' => 'بني عزيز',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 680,
                'code_postal' => 1904,
                'name' => 'أولاد سي أحمد',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 681,
                'code_postal' => 1905,
                'name' => 'بوطالب',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 682,
                'code_postal' => 1906,
                'name' => 'عين الروي',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 683,
                'code_postal' => 1907,
                'name' => 'ذراع قبلة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 684,
                'code_postal' => 1908,
                'name' => 'بئر العرش',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 685,
                'code_postal' => 1909,
                'name' => 'بني شبانة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 686,
                'code_postal' => 1910,
                'name' => 'أولاد تبان',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 687,
                'code_postal' => 1911,
                'name' => 'الحامة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 688,
                'code_postal' => 1912,
                'name' => 'معاوية',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 689,
                'code_postal' => 1913,
                'name' => 'عين لقراج',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 690,
                'code_postal' => 1914,
                'name' => 'عين عباسة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 691,
                'code_postal' => 1915,
                'name' => 'الدهامشة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 692,
                'code_postal' => 1916,
                'name' => 'بابور',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 693,
                'code_postal' => 1917,
                'name' => 'قجال',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 694,
                'code_postal' => 1918,
                'name' => 'عين الحجر',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 695,
                'code_postal' => 1919,
                'name' => 'بوسلام',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 696,
                'code_postal' => 1920,
                'name' => 'العلمة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 697,
                'code_postal' => 1921,
                'name' => 'جميلة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 698,
                'code_postal' => 1922,
                'name' => 'بني ورتيلان',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 699,
                'code_postal' => 1923,
                'name' => 'الرصفة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 700,
                'code_postal' => 1924,
                'name' => 'أولاد عدوان',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 701,
                'code_postal' => 1925,
                'name' => 'بلعة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 702,
                'code_postal' => 1926,
                'name' => 'عين ارنات',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 703,
                'code_postal' => 1927,
                'name' => 'عموشة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 704,
                'code_postal' => 1928,
                'name' => 'عين ولمان',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 705,
                'code_postal' => 1929,
                'name' => 'بيضات برج',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 706,
                'code_postal' => 1930,
                'name' => 'بوعنداس',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 707,
                'code_postal' => 1931,
                'name' => 'بازر الصخرة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 708,
                'code_postal' => 1932,
                'name' => 'حمام السخنة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 709,
                'code_postal' => 1933,
                'name' => 'مزلوق',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 710,
                'code_postal' => 1934,
                'name' => 'بئر حدادة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 711,
                'code_postal' => 1935,
                'name' => 'سرج الغول',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 712,
                'code_postal' => 1936,
                'name' => 'حربيل',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 713,
                'code_postal' => 1937,
                'name' => 'الوريسية',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 714,
                'code_postal' => 1938,
                'name' => 'تيزي نبشار',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 715,
                'code_postal' => 1939,
                'name' => 'صالح باي',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 716,
                'code_postal' => 1940,
                'name' => 'عين ازال',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 717,
                'code_postal' => 1941,
                'name' => 'قنزات',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 718,
                'code_postal' => 1942,
                'name' => 'تالة إيفاسن',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 719,
                'code_postal' => 1943,
                'name' => 'بوقاعة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 720,
                'code_postal' => 1944,
                'name' => 'بني فودة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 721,
                'code_postal' => 1945,
                'name' => 'تاشودة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 722,
                'code_postal' => 1946,
                'name' => 'بني موحلي',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 723,
                'code_postal' => 1947,
                'name' => 'أولادصابر',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 724,
                'code_postal' => 1948,
                'name' => 'قلال',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 725,
                'code_postal' => 1949,
                'name' => 'عين السبت',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 726,
                'code_postal' => 1950,
                'name' => 'حمام قرقور',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 727,
                'code_postal' => 1951,
                'name' => 'آيت نوال مزادة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 728,
                'code_postal' => 1952,
                'name' => 'قصر الابطال',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 729,
                'code_postal' => 1953,
                'name' => 'بني حسين',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 730,
                'code_postal' => 1954,
                'name' => 'آيت تيزي',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 731,
                'code_postal' => 1955,
                'name' => 'ماوكلان',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 732,
                'code_postal' => 1956,
                'name' => 'القلتة الزرقات',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 733,
                'code_postal' => 1957,
                'name' => 'وادي البارد',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 734,
                'code_postal' => 1958,
                'name' => 'الطاية',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 735,
                'code_postal' => 1959,
                'name' => 'الولجة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 736,
                'code_postal' => 1960,
                'name' => 'التلة',
                'wilaya_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 737,
                'code_postal' => 2001,
                'name' => 'سعيدة',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 738,
                'code_postal' => 2002,
                'name' => 'دوي ثابت',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 739,
                'code_postal' => 2003,
                'name' => 'عين الحجر',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 740,
                'code_postal' => 2004,
                'name' => 'أولا خالد',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 741,
                'code_postal' => 2005,
                'name' => 'مولاي العربي',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 742,
                'code_postal' => 2006,
                'name' => 'يوب',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 743,
                'code_postal' => 2007,
                'name' => 'حنات',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 744,
                'code_postal' => 2008,
                'name' => 'سيدي عمار',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 745,
                'code_postal' => 2009,
                'name' => 'سيدي بوبكر',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 746,
                'code_postal' => 2010,
                'name' => 'الحساسنة',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 747,
                'code_postal' => 2011,
                'name' => 'المعمورة',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 748,
                'code_postal' => 2012,
                'name' => 'سيدي أحمد',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 749,
                'code_postal' => 2013,
                'name' => 'عين السخونة',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 750,
                'code_postal' => 2014,
                'name' => 'أولاد إبراهيم',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 751,
                'code_postal' => 2015,
                'name' => 'تيرسين',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 752,
                'code_postal' => 2016,
                'name' => 'عين السلطان',
                'wilaya_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 753,
                'code_postal' => 2101,
                'name' => 'سكيكدة',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 754,
                'code_postal' => 2102,
                'name' => 'عين زويت',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 755,
                'code_postal' => 2103,
                'name' => 'الحدائق',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 756,
                'code_postal' => 2104,
                'name' => 'عزابة',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 757,
                'code_postal' => 2105,
                'name' => 'جندل سعدي محمد',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 758,
                'code_postal' => 2106,
                'name' => 'عين شرشار',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 759,
                'code_postal' => 2107,
                'name' => 'بكوش الاخضر',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 760,
                'code_postal' => 2108,
                'name' => 'بن عزوز',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 761,
                'code_postal' => 2109,
                'name' => 'السبت',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 762,
                'code_postal' => 2110,
                'name' => 'القل',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 763,
                'code_postal' => 2111,
                'name' => 'بني زيد',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 764,
                'code_postal' => 2112,
                'name' => 'الكركرة',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 765,
                'code_postal' => 2113,
                'name' => 'أولاد عطية',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 766,
                'code_postal' => 2114,
                'name' => 'وادي الزهور',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 767,
                'code_postal' => 2115,
                'name' => 'الزيتونة',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 768,
                'code_postal' => 2116,
                'name' => 'الحروش',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 769,
                'code_postal' => 2117,
                'name' => 'زردازة',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 770,
                'code_postal' => 2118,
                'name' => 'أولاد حبابة',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 771,
                'code_postal' => 2119,
                'name' => 'سيدي مزغيش',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 772,
                'code_postal' => 2120,
                'name' => 'مجاز الدشيش',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 773,
                'code_postal' => 2121,
                'name' => 'بني ولبان',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 774,
                'code_postal' => 2122,
                'name' => 'عين بوزيان',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 775,
                'code_postal' => 2123,
                'name' => 'رمضان جمال',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 776,
                'code_postal' => 2124,
                'name' => 'بني بشير',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 777,
                'code_postal' => 2125,
                'name' => 'صالح بوالشعور',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 778,
                'code_postal' => 2126,
                'name' => 'تمالوس',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 779,
                'code_postal' => 2127,
                'name' => 'عين قشرة',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 780,
                'code_postal' => 2128,
                'name' => 'أم الطوب',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 781,
                'code_postal' => 2129,
                'name' => 'بين الويدان',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 782,
                'code_postal' => 2130,
                'name' => 'فلفيلة',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 783,
                'code_postal' => 2131,
                'name' => 'الشرائع',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 784,
                'code_postal' => 2132,
                'name' => 'قنواع',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 785,
                'code_postal' => 2133,
                'name' => 'الغدير',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 786,
                'code_postal' => 2134,
                'name' => 'بوشطاطة',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 787,
                'code_postal' => 2135,
                'name' => 'الولجة بولبلوط',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 788,
                'code_postal' => 2136,
                'name' => 'خنق مايون',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 789,
                'code_postal' => 2137,
                'name' => 'حمادي كرومة',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 790,
                'code_postal' => 2138,
                'name' => 'المرسى',
                'wilaya_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 791,
                'code_postal' => 2201,
                'name' => 'سيدي بلعباس',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 792,
                'code_postal' => 2202,
                'name' => 'تسالة',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 793,
                'code_postal' => 2203,
                'name' => 'سيدي إبراهيم',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 794,
                'code_postal' => 2204,
                'name' => 'مصطفى بن إبراهيم',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 795,
                'code_postal' => 2205,
                'name' => 'تلاغ',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 796,
                'code_postal' => 2206,
                'name' => 'مزوارو',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 797,
                'code_postal' => 2207,
                'name' => 'بوخنيفيس',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 798,
                'code_postal' => 2208,
                'name' => 'سيدي علي بوسيدي',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 799,
                'code_postal' => 2209,
                'name' => 'بدر الدين المقراني',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 800,
                'code_postal' => 2210,
                'name' => 'مرحوم',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 801,
                'code_postal' => 2211,
                'name' => 'تافيسور',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 802,
                'code_postal' => 2212,
                'name' => 'امرناس',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 803,
                'code_postal' => 2213,
                'name' => 'تلموني',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 804,
                'code_postal' => 2214,
                'name' => 'سيدي لحسن',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 805,
                'code_postal' => 2215,
                'name' => 'عين الثريد',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 806,
                'code_postal' => 2216,
                'name' => 'مقدرة',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 807,
                'code_postal' => 2217,
                'name' => 'تنيرة',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 808,
                'code_postal' => 2218,
                'name' => 'مولاي سليسن',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 809,
                'code_postal' => 2219,
                'name' => 'الحصيبة',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 810,
                'code_postal' => 2220,
                'name' => 'حاسي زهانة',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 811,
                'code_postal' => 2221,
                'name' => 'طابية',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 812,
                'code_postal' => 2222,
                'name' => 'مرين',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 813,
                'code_postal' => 2223,
                'name' => 'راس المات',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 814,
                'code_postal' => 2224,
                'name' => 'عين تندمين',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 815,
                'code_postal' => 2225,
                'name' => 'عين قادة',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 816,
                'code_postal' => 2226,
                'name' => 'مسيد',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 817,
                'code_postal' => 2227,
                'name' => 'سيدي خالد',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 818,
                'code_postal' => 2228,
                'name' => 'عين البرد',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 819,
                'code_postal' => 2229,
                'name' => 'الزفيزف',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 820,
                'code_postal' => 2230,
                'name' => 'عين عدان',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 821,
                'code_postal' => 2231,
                'name' => 'وادي توريرة',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 822,
                'code_postal' => 2232,
                'name' => 'الضاية',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 823,
                'code_postal' => 2233,
                'name' => 'زروالة',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 824,
                'code_postal' => 2234,
                'name' => 'لمطار',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 825,
                'code_postal' => 2235,
                'name' => 'سيدي شعيب',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 826,
                'code_postal' => 2236,
                'name' => 'سيدي دحو الزاير',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 827,
                'code_postal' => 2237,
                'name' => 'وادي السبع',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 828,
                'code_postal' => 2238,
                'name' => 'بوجبع البرج',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 829,
                'code_postal' => 2239,
                'name' => 'سحالة ثاورة',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 830,
                'code_postal' => 2240,
                'name' => 'سيدي يعقوب',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 831,
                'code_postal' => 2241,
                'name' => 'سيدي حمادوش',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 832,
                'code_postal' => 2242,
                'name' => 'بلعربي',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 833,
                'code_postal' => 2243,
                'name' => 'وادي سفيون',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 834,
                'code_postal' => 2244,
                'name' => 'تغليمت',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 835,
                'code_postal' => 2245,
                'name' => 'ابن باديس',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 836,
                'code_postal' => 2246,
                'name' => 'سيدي علي بن يوب',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 837,
                'code_postal' => 2247,
                'name' => 'شتوان بليلة',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 838,
                'code_postal' => 2248,
                'name' => 'بئر الحمام',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 839,
                'code_postal' => 2249,
                'name' => 'تاودموت',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 840,
                'code_postal' => 2250,
                'name' => 'رجم دموش',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 841,
                'code_postal' => 2251,
                'name' => 'بن عشيبة شيلة',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 842,
                'code_postal' => 2252,
                'name' => 'حاسي دحو',
                'wilaya_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 843,
                'code_postal' => 2301,
                'name' => 'عنابة',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 844,
                'code_postal' => 2302,
                'name' => 'برحال',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 845,
                'code_postal' => 2303,
                'name' => 'الحجار',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 846,
                'code_postal' => 2304,
                'name' => 'العلمة',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 847,
                'code_postal' => 2305,
                'name' => 'البوني',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 848,
                'code_postal' => 2306,
                'name' => 'وادي العنب',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 849,
                'code_postal' => 2307,
                'name' => 'الشرفات',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 850,
                'code_postal' => 2308,
                'name' => 'سرايدي',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 851,
                'code_postal' => 2309,
                'name' => 'العين الباردة',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 852,
                'code_postal' => 2310,
                'name' => 'شطايبي',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 853,
                'code_postal' => 2311,
                'name' => 'سيد عامر',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 854,
                'code_postal' => 2312,
                'name' => 'التريعات',
                'wilaya_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 855,
                'code_postal' => 2401,
                'name' => 'قالمة',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 856,
                'code_postal' => 2402,
                'name' => 'نشماية',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 857,
                'code_postal' => 2403,
                'name' => 'بوعاطي محمد',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 858,
                'code_postal' => 2404,
                'name' => 'وادي الزناتي',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 859,
                'code_postal' => 2405,
                'name' => 'تاملوكة',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 860,
                'code_postal' => 2406,
                'name' => 'وادي فراغا',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 861,
                'code_postal' => 2407,
                'name' => 'عين صندل',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 862,
                'code_postal' => 2408,
                'name' => 'رأس العقبة',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 863,
                'code_postal' => 2409,
                'name' => 'الدهوارة',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 864,
                'code_postal' => 2410,
                'name' => 'بلخير',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 865,
                'code_postal' => 2411,
                'name' => 'بن جراح',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 866,
                'code_postal' => 2412,
                'name' => 'بوحمدان',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 867,
                'code_postal' => 2413,
                'name' => 'عين مخلوف',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 868,
                'code_postal' => 2414,
                'name' => 'عين بيضات',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 869,
                'code_postal' => 2415,
                'name' => 'خزارة',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 870,
                'code_postal' => 2416,
                'name' => 'بني مزلين',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 871,
                'code_postal' => 2417,
                'name' => 'بوحشانة',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 872,
                'code_postal' => 2418,
                'name' => 'قلعة بوصبع',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 873,
                'code_postal' => 2419,
                'name' => 'حمام دباغ',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 874,
                'code_postal' => 2420,
                'name' => 'الفجوج',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 875,
                'code_postal' => 2421,
                'name' => 'برج الصباط',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 876,
                'code_postal' => 2422,
                'name' => 'حمام النبايل',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 877,
                'code_postal' => 2423,
                'name' => 'عين العربي',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 878,
                'code_postal' => 2424,
                'name' => 'مجاز عمار',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 879,
                'code_postal' => 2425,
                'name' => 'بوشقوف',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 880,
                'code_postal' => 2426,
                'name' => 'هيليو بوليس',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 881,
                'code_postal' => 2427,
                'name' => 'عين الحساينية',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 882,
                'code_postal' => 2428,
                'name' => 'الركنية',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 883,
                'code_postal' => 2429,
                'name' => 'سلاوة عنوية',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 884,
                'code_postal' => 2430,
                'name' => 'مجار الصفات',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 885,
                'code_postal' => 2431,
                'name' => 'بومهرة احمد',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 886,
                'code_postal' => 2432,
                'name' => 'عين رقادة',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 887,
                'code_postal' => 2433,
                'name' => 'وادي الشحم',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 888,
                'code_postal' => 2434,
                'name' => 'جبالة الخميسي',
                'wilaya_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 889,
                'code_postal' => 2501,
                'name' => 'قسنطينة',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 890,
                'code_postal' => 2502,
                'name' => 'حامة بوزيان',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 891,
                'code_postal' => 2503,
                'name' => 'الهرية',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 892,
                'code_postal' => 2504,
                'name' => 'زيغود يوسف',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 893,
                'code_postal' => 2505,
                'name' => 'ديدوش مراد',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 894,
                'code_postal' => 2506,
                'name' => 'الخروب',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 895,
                'code_postal' => 2507,
                'name' => 'عين عبيد',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 896,
                'code_postal' => 2508,
                'name' => 'بني حميدان',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 897,
                'code_postal' => 2509,
                'name' => 'أولاد رحمون',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 898,
                'code_postal' => 2510,
                'name' => 'عين السمارة',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 899,
                'code_postal' => 2511,
                'name' => 'عين الكرمة',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 900,
                'code_postal' => 2512,
                'name' => 'ابن زياد',
                'wilaya_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 901,
                'code_postal' => 2601,
                'name' => 'المدية',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 902,
                'code_postal' => 2602,
                'name' => 'وزرة',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 903,
                'code_postal' => 2603,
                'name' => 'أولاد معرف',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 904,
                'code_postal' => 2604,
                'name' => 'عين بوسيف',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 905,
                'code_postal' => 2605,
                'name' => 'العيساوية',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 906,
                'code_postal' => 2606,
                'name' => 'أولاد دايد',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 907,
                'code_postal' => 2607,
                'name' => 'العمرية',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 908,
                'code_postal' => 2608,
                'name' => 'دراق',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 909,
                'code_postal' => 2609,
                'name' => 'القلب الكبير',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 910,
                'code_postal' => 2610,
                'name' => 'بوعيش',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 911,
                'code_postal' => 2611,
                'name' => 'مزغنة',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 912,
                'code_postal' => 2612,
                'name' => 'أولاد إبراهيم',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 913,
                'code_postal' => 2613,
                'name' => 'دميات',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 914,
                'code_postal' => 2614,
                'name' => 'سيدي زيان',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 915,
                'code_postal' => 2615,
                'name' => 'تمسقيدة',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 916,
                'code_postal' => 2616,
                'name' => 'الحمدانية',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 917,
                'code_postal' => 2617,
                'name' => 'الكاف الاخضر',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 918,
                'code_postal' => 2618,
                'name' => 'شلالة العذاورة',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 919,
                'code_postal' => 2619,
                'name' => 'بوسكن',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 920,
                'code_postal' => 2620,
                'name' => 'الربعية',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 921,
                'code_postal' => 2621,
                'name' => 'بوشراحيل',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 922,
                'code_postal' => 2622,
                'name' => 'أولاد هلال',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 923,
                'code_postal' => 2623,
                'name' => 'تفراوت',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 924,
                'code_postal' => 2624,
                'name' => 'بعطة',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 925,
                'code_postal' => 2625,
                'name' => 'بوغار',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 926,
                'code_postal' => 2626,
                'name' => 'سيدي نعمان',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 927,
                'code_postal' => 2627,
                'name' => 'أولاد بوعشرة',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 928,
                'code_postal' => 2628,
                'name' => 'سيدي زهار',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 929,
                'code_postal' => 2629,
                'name' => 'وادي حربيل',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 930,
                'code_postal' => 2630,
                'name' => 'بن شكاو',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 931,
                'code_postal' => 2631,
                'name' => 'سيدي دامد',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 932,
                'code_postal' => 2632,
                'name' => 'عزيز',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 933,
                'code_postal' => 2633,
                'name' => 'السواقي',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 934,
                'code_postal' => 2634,
                'name' => 'الزبيرية',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 935,
                'code_postal' => 2635,
                'name' => 'قصر البخاري',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 936,
                'code_postal' => 2636,
                'name' => 'العزيزية',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 937,
                'code_postal' => 2637,
                'name' => 'جواب',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 938,
                'code_postal' => 2638,
                'name' => 'الشهبونية',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 939,
                'code_postal' => 2639,
                'name' => 'مغراوة',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 940,
                'code_postal' => 2640,
                'name' => 'شنيقل',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 941,
                'code_postal' => 2641,
                'name' => 'عين القصير',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 942,
                'code_postal' => 2642,
                'name' => 'أم الجليل',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 943,
                'code_postal' => 2643,
                'name' => 'عوامري',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 944,
                'code_postal' => 2644,
                'name' => 'سي المحجوب',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 945,
                'code_postal' => 2645,
                'name' => 'ثلاثة دوائر',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 946,
                'code_postal' => 2646,
                'name' => 'بني سليمان',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 947,
                'code_postal' => 2647,
                'name' => 'البرواقية',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 948,
                'code_postal' => 2648,
                'name' => 'سغوان',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 949,
                'code_postal' => 2649,
                'name' => 'مفتاح',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 950,
                'code_postal' => 2650,
                'name' => 'ميهوب',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 951,
                'code_postal' => 2651,
                'name' => 'بوغزول',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 952,
                'code_postal' => 2652,
                'name' => 'تابلاط',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 953,
                'code_postal' => 2653,
                'name' => 'الحوضان',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 954,
                'code_postal' => 2654,
                'name' => 'ذراع السمار',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 955,
                'code_postal' => 2655,
                'name' => 'سيدي الربيع',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 956,
                'code_postal' => 2656,
                'name' => 'بئر بن عابد',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 957,
                'code_postal' => 2657,
                'name' => 'العوينات',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 958,
                'code_postal' => 2658,
                'name' => 'أولاد عنتر',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 959,
                'code_postal' => 2659,
                'name' => 'بوعيشون',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 960,
                'code_postal' => 2660,
                'name' => 'حناشة',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 961,
                'code_postal' => 2661,
                'name' => 'سدراية',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 962,
                'code_postal' => 2662,
                'name' => 'مجبر',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 963,
                'code_postal' => 2663,
                'name' => 'خمس جوامع',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 964,
                'code_postal' => 2664,
                'name' => 'السانق',
                'wilaya_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 965,
                'code_postal' => 2701,
                'name' => 'مستغانم',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 966,
                'code_postal' => 2702,
                'name' => 'صيادة',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 967,
                'code_postal' => 2703,
                'name' => 'فرناكة',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 968,
                'code_postal' => 2704,
                'name' => 'ستيدية',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 969,
                'code_postal' => 2705,
                'name' => 'عين نويسي',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 970,
                'code_postal' => 2706,
                'name' => 'حاسي ماماش',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 971,
                'code_postal' => 2707,
                'name' => 'عين تادلس',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 972,
                'code_postal' => 2708,
                'name' => 'الصور',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 973,
                'code_postal' => 2709,
                'name' => 'واد الخير',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 974,
                'code_postal' => 2710,
                'name' => 'سيدي بلعطار',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 975,
                'code_postal' => 2711,
                'name' => 'خير الدين',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 976,
                'code_postal' => 2712,
                'name' => 'سيد علي',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 977,
                'code_postal' => 2713,
                'name' => 'عبدالمالك رمضان',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 978,
                'code_postal' => 2714,
                'name' => 'حجاج',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 979,
                'code_postal' => 2715,
                'name' => 'نكمارية',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 980,
                'code_postal' => 2716,
                'name' => 'سيدي لخضر',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 981,
                'code_postal' => 2717,
                'name' => 'عشعاشة',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 982,
                'code_postal' => 2718,
                'name' => 'خضرة',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 983,
                'code_postal' => 2719,
                'name' => 'بوقيراط',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 984,
                'code_postal' => 2720,
                'name' => 'سيرات',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 985,
                'code_postal' => 2721,
                'name' => 'عين سيدي الشريف',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 986,
                'code_postal' => 2722,
                'name' => 'ماسرة',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 987,
                'code_postal' => 2723,
                'name' => 'منصورة',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 988,
                'code_postal' => 2724,
                'name' => 'السوافلية',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 989,
                'code_postal' => 2725,
                'name' => 'أولاد بوغالم',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 990,
                'code_postal' => 2726,
                'name' => 'أولاد مع اللّه',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 991,
                'code_postal' => 2727,
                'name' => 'مزغران',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 992,
                'code_postal' => 2728,
                'name' => 'عين بودينار',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 993,
                'code_postal' => 2729,
                'name' => 'تزقايت',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 994,
                'code_postal' => 2730,
                'name' => 'الصفصاف',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 995,
                'code_postal' => 2731,
                'name' => 'الطواهرية',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 996,
                'code_postal' => 2732,
                'name' => 'الحسيان',
                'wilaya_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 997,
                'code_postal' => 2801,
                'name' => 'المسيلة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 998,
                'code_postal' => 2802,
                'name' => 'المعاضيد',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 999,
                'code_postal' => 2803,
                'name' => 'حمام الضلعة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1000,
                'code_postal' => 2804,
                'name' => 'أولاد دراج',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1001,
                'code_postal' => 2805,
                'name' => 'تارمونت',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('communes')->insert(array (
            0 => 
            array (
                'id' => 1002,
                'code_postal' => 2806,
                'name' => 'المطارفة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1003,
                'code_postal' => 2807,
                'name' => 'خبانة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1004,
                'code_postal' => 2808,
                'name' => 'مصيف',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1005,
                'code_postal' => 2809,
                'name' => 'شلال',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1006,
                'code_postal' => 2810,
                'name' => 'اولاد ماضي',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1007,
                'code_postal' => 2811,
                'name' => 'مقرة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1008,
                'code_postal' => 2812,
                'name' => 'برهوم',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1009,
                'code_postal' => 2813,
                'name' => 'عين خضرات',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1010,
                'code_postal' => 2814,
                'name' => 'أولاد عدي قبالة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1011,
                'code_postal' => 2815,
                'name' => 'بلعايبة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1012,
                'code_postal' => 2816,
                'name' => 'سيدي عيسى',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1013,
                'code_postal' => 2817,
                'name' => 'عين الحجل',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1014,
                'code_postal' => 2818,
                'name' => 'سيدي هجرس',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1015,
                'code_postal' => 2819,
                'name' => 'ونوغة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1016,
                'code_postal' => 2820,
                'name' => 'بوسعادة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1017,
                'code_postal' => 2821,
                'name' => 'أولاد سيدي إبراهيم',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1018,
                'code_postal' => 2822,
                'name' => 'سيدي عامر',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1019,
                'code_postal' => 2823,
                'name' => 'تامسة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1020,
                'code_postal' => 2824,
                'name' => 'إبن سرور',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1021,
                'code_postal' => 2825,
                'name' => 'أولاد سليمان',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1022,
                'code_postal' => 2826,
                'name' => 'الخوامد',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1023,
                'code_postal' => 2827,
                'name' => 'الهامل',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1024,
                'code_postal' => 2828,
                'name' => 'أولاد منصور',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1025,
                'code_postal' => 2829,
                'name' => 'معاريف',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1026,
                'code_postal' => 2830,
                'name' => 'دهاهنة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1027,
                'code_postal' => 2831,
                'name' => 'بوطي السياح',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1028,
                'code_postal' => 2832,
                'name' => 'ختوتي سد الجير',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1029,
                'code_postal' => 2833,
                'name' => 'زرزور',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1030,
                'code_postal' => 2834,
                'name' => 'وادي الشعير',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1031,
                'code_postal' => 2835,
                'name' => 'بن زوح',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1032,
                'code_postal' => 2836,
                'name' => 'بئر الفضة',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1033,
                'code_postal' => 2837,
                'name' => 'عين فارس',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1034,
                'code_postal' => 2838,
                'name' => 'سيدي محمد',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1035,
                'code_postal' => 2839,
                'name' => 'أولاد عطية',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1036,
                'code_postal' => 2840,
                'name' => 'الصوامع',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1037,
                'code_postal' => 2841,
                'name' => 'عين الملح',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1038,
                'code_postal' => 2842,
                'name' => 'مجدل',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1039,
                'code_postal' => 2843,
                'name' => 'سليم',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1040,
                'code_postal' => 2844,
                'name' => 'عين الريش',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1041,
                'code_postal' => 2845,
                'name' => 'بني يلمان',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1042,
                'code_postal' => 2846,
                'name' => 'ولتام',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1043,
                'code_postal' => 2847,
                'name' => 'جبل مسعد',
                'wilaya_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1044,
                'code_postal' => 2901,
                'name' => 'معسكر',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1045,
                'code_postal' => 2902,
                'name' => 'بوحنيفية',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1046,
                'code_postal' => 2903,
                'name' => 'تيزي',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1047,
                'code_postal' => 2904,
                'name' => 'حسين',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1048,
                'code_postal' => 2905,
                'name' => 'ماوسة',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1049,
                'code_postal' => 2906,
                'name' => 'تيغنيف',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1050,
                'code_postal' => 2907,
                'name' => 'الهاشم',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1051,
                'code_postal' => 2908,
                'name' => 'سيدي قادة',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1052,
                'code_postal' => 2909,
                'name' => 'امحاميد',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1053,
                'code_postal' => 2910,
                'name' => 'وادي الابطال',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1054,
                'code_postal' => 2911,
                'name' => 'عين فراح',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1055,
                'code_postal' => 2912,
                'name' => 'غريس',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1056,
                'code_postal' => 2913,
                'name' => 'فروحة',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1057,
                'code_postal' => 2914,
                'name' => 'المطمور',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1058,
                'code_postal' => 2915,
                'name' => 'ماقضنة',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1059,
                'code_postal' => 2916,
                'name' => 'سيدي بوسعيد',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1060,
                'code_postal' => 2917,
                'name' => 'البرج',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1061,
                'code_postal' => 2918,
                'name' => 'عين فكان',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1062,
                'code_postal' => 2919,
                'name' => 'بنيان',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1063,
                'code_postal' => 2920,
                'name' => 'خلوية',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1064,
                'code_postal' => 2921,
                'name' => 'المنور',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1065,
                'code_postal' => 2922,
                'name' => 'وادي تاغية',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1066,
                'code_postal' => 2923,
                'name' => 'عوف',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1067,
                'code_postal' => 2924,
                'name' => 'عين فارس',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1068,
                'code_postal' => 2925,
                'name' => 'عين فرس',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1069,
                'code_postal' => 2926,
                'name' => 'سيق',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1070,
                'code_postal' => 2927,
                'name' => 'عكاز',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1071,
                'code_postal' => 2928,
                'name' => 'العلايمية',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1072,
                'code_postal' => 2929,
                'name' => 'القعدة',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1073,
                'code_postal' => 2930,
                'name' => 'زهانة',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1074,
                'code_postal' => 2931,
                'name' => 'المحمدية',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1075,
                'code_postal' => 2932,
                'name' => 'سيدي عبد المومن',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1076,
                'code_postal' => 2933,
                'name' => 'فراقيق',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1077,
                'code_postal' => 2934,
                'name' => 'الغمري',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1078,
                'code_postal' => 2935,
                'name' => 'سجرارة',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1079,
                'code_postal' => 2936,
                'name' => 'مقطع الدوز',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1080,
                'code_postal' => 2937,
                'name' => 'بوهني',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1081,
                'code_postal' => 2938,
                'name' => 'القطنة',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1082,
                'code_postal' => 2939,
                'name' => 'المأمونية',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1083,
                'code_postal' => 2940,
                'name' => 'القرط',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1084,
                'code_postal' => 2941,
                'name' => 'غريس',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1085,
                'code_postal' => 2942,
                'name' => 'قرجوم',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1086,
                'code_postal' => 2943,
                'name' => 'الشرفات',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1087,
                'code_postal' => 2944,
                'name' => 'رأس عين عميروش',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1088,
                'code_postal' => 2945,
                'name' => 'نسموط',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1089,
                'code_postal' => 2946,
                'name' => 'سيدي عبد الجبار',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1090,
                'code_postal' => 2947,
                'name' => 'السحايلية',
                'wilaya_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1091,
                'code_postal' => 3001,
                'name' => 'ورقلة',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1092,
                'code_postal' => 3002,
                'name' => 'عين البيضات',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1093,
                'code_postal' => 3003,
                'name' => 'نقوسة',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1094,
                'code_postal' => 3004,
                'name' => 'حاسي مسعود',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1095,
                'code_postal' => 3005,
                'name' => 'الرويسات',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1096,
                'code_postal' => 3006,
                'name' => 'بلدية عامر',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1097,
                'code_postal' => 3007,
                'name' => 'تبسبست',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1098,
                'code_postal' => 3008,
                'name' => 'نزلة',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1099,
                'code_postal' => 3009,
                'name' => 'الزاوية العابدية',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1100,
                'code_postal' => 3010,
                'name' => 'سيدي سليمان',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1101,
                'code_postal' => 3011,
                'name' => 'سيدي خويلد',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1102,
                'code_postal' => 3012,
                'name' => 'حاسي بن عبد الله',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1103,
                'code_postal' => 3013,
                'name' => 'توقرت',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1104,
                'code_postal' => 3014,
                'name' => 'الحجيرة',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1105,
                'code_postal' => 3015,
                'name' => 'الطيبات',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1106,
                'code_postal' => 3016,
                'name' => 'تماسين',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1107,
                'code_postal' => 3017,
                'name' => 'ابن ناصر',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1108,
                'code_postal' => 3018,
                'name' => 'المنقر',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1109,
                'code_postal' => 3019,
                'name' => 'المقارين',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1110,
                'code_postal' => 3020,
                'name' => 'العالية',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1111,
                'code_postal' => 3021,
                'name' => 'البرمة',
                'wilaya_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1112,
                'code_postal' => 3101,
                'name' => 'وهران',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1113,
                'code_postal' => 3102,
                'name' => 'قديل',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1114,
                'code_postal' => 3103,
                'name' => 'بئر الجير',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1115,
                'code_postal' => 3104,
                'name' => 'حاسي بونيف',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1116,
                'code_postal' => 3105,
                'name' => 'السانية',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1117,
                'code_postal' => 3106,
                'name' => 'ارزيو',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1118,
                'code_postal' => 3107,
                'name' => 'بطيوة',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1119,
                'code_postal' => 3108,
                'name' => 'مرسى الحجاج',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1120,
                'code_postal' => 3109,
                'name' => 'عين الترك',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1121,
                'code_postal' => 3110,
                'name' => 'العنصر',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1122,
                'code_postal' => 3111,
                'name' => 'وادي تليلات',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1123,
                'code_postal' => 3112,
                'name' => 'طفراوي',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1124,
                'code_postal' => 3113,
                'name' => 'سيدي الشحمي',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1125,
                'code_postal' => 3114,
                'name' => 'بوفاتيس',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1126,
                'code_postal' => 3115,
                'name' => 'المرسى الكبير',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1127,
                'code_postal' => 3116,
                'name' => 'بوصفر',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1128,
                'code_postal' => 3117,
                'name' => 'الكرمة',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1129,
                'code_postal' => 3118,
                'name' => 'البرية',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1130,
                'code_postal' => 3119,
                'name' => 'حاسي بن عقبة',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1131,
                'code_postal' => 3120,
                'name' => 'بن فريحة',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1132,
                'code_postal' => 3121,
                'name' => 'حاسي مفسوخ',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1133,
                'code_postal' => 3122,
                'name' => 'سيدي بن يبقى',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1134,
                'code_postal' => 3123,
                'name' => 'مسرغين',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1135,
                'code_postal' => 3124,
                'name' => 'بوتليليس',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1136,
                'code_postal' => 3125,
                'name' => 'عين الكرمة',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1137,
                'code_postal' => 3126,
                'name' => 'عين البية',
                'wilaya_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1138,
                'code_postal' => 3201,
                'name' => 'البيض',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1139,
                'code_postal' => 3202,
                'name' => 'روقاصة',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1140,
                'code_postal' => 3203,
                'name' => 'ستيتن',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1141,
                'code_postal' => 3204,
                'name' => 'بريزينة',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1142,
                'code_postal' => 3205,
                'name' => 'غسول',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1143,
                'code_postal' => 3206,
                'name' => 'بوعلام',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1144,
                'code_postal' => 3207,
                'name' => 'الابيض سيدي الشيخ',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1145,
                'code_postal' => 3208,
                'name' => 'عين العراك',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1146,
                'code_postal' => 3209,
                'name' => 'عرباوة',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1147,
                'code_postal' => 3210,
                'name' => 'بوقطب',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1148,
                'code_postal' => 3211,
                'name' => 'الخثير',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1149,
                'code_postal' => 3212,
                'name' => 'كاف الاحمر',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1150,
                'code_postal' => 3213,
                'name' => 'بوسمغون',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1151,
                'code_postal' => 3214,
                'name' => 'شلالة',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1152,
                'code_postal' => 3215,
                'name' => 'كراكدة',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1153,
                'code_postal' => 3216,
                'name' => 'البنود',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1154,
                'code_postal' => 3217,
                'name' => 'الشقيق',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1155,
                'code_postal' => 3218,
                'name' => 'سيدي عامر',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1156,
                'code_postal' => 3219,
                'name' => 'المهارة',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1157,
                'code_postal' => 3220,
                'name' => 'توسمولين',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1158,
                'code_postal' => 3221,
                'name' => 'سيدي سليمان',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1159,
                'code_postal' => 3222,
                'name' => 'سيدي تيفور',
                'wilaya_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1160,
                'code_postal' => 3301,
                'name' => 'إليزي',
                'wilaya_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1161,
                'code_postal' => 3302,
                'name' => 'جانت',
                'wilaya_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1162,
                'code_postal' => 3303,
                'name' => 'دبداب',
                'wilaya_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1163,
                'code_postal' => 3304,
                'name' => 'برج عمردريس',
                'wilaya_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1164,
                'code_postal' => 3305,
                'name' => 'برج الحواس',
                'wilaya_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1165,
                'code_postal' => 3306,
                'name' => 'ان اميناس',
                'wilaya_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1166,
                'code_postal' => 3401,
                'name' => 'برج بوعريريج',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1167,
                'code_postal' => 3402,
                'name' => 'راس الوادي',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1168,
                'code_postal' => 3403,
                'name' => 'برج زمورة',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1169,
                'code_postal' => 3404,
                'name' => 'المنصورة',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1170,
                'code_postal' => 3405,
                'name' => 'المهير',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1171,
                'code_postal' => 3406,
                'name' => 'بن داود',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1172,
                'code_postal' => 3407,
                'name' => 'الياشير',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1173,
                'code_postal' => 3408,
                'name' => 'عين تاغروت',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1174,
                'code_postal' => 3409,
                'name' => 'برج غدير',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1175,
                'code_postal' => 3410,
                'name' => 'سيدي مبارك',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1176,
                'code_postal' => 3411,
                'name' => 'الحمادية',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1177,
                'code_postal' => 3412,
                'name' => 'بليمور',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1178,
                'code_postal' => 3413,
                'name' => 'مجانة',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1179,
                'code_postal' => 3414,
                'name' => 'ثنية النصر',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1180,
                'code_postal' => 3415,
                'name' => 'الجعافيرة',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1181,
                'code_postal' => 3416,
                'name' => 'الماين',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1182,
                'code_postal' => 3417,
                'name' => 'اولاد إبراهيم',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1183,
                'code_postal' => 3418,
                'name' => 'اولاد دحمان',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1184,
                'code_postal' => 3419,
                'name' => 'حساوة',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1185,
                'code_postal' => 3420,
                'name' => 'خليل',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1186,
                'code_postal' => 3421,
                'name' => 'تقلعيت',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1187,
                'code_postal' => 3422,
                'name' => 'القصور',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1188,
                'code_postal' => 3423,
                'name' => 'اولاد سيدي إبراهيم',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1189,
                'code_postal' => 3424,
                'name' => 'تفرق',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1190,
                'code_postal' => 3425,
                'name' => 'القلة',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1191,
                'code_postal' => 3426,
                'name' => 'تيكستير',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1192,
                'code_postal' => 3427,
                'name' => 'العش',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1193,
                'code_postal' => 3428,
                'name' => 'العنصر',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1194,
                'code_postal' => 3429,
                'name' => 'تسمرت',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1195,
                'code_postal' => 3430,
                'name' => 'عين تسرت',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1196,
                'code_postal' => 3431,
                'name' => 'بئر قصد علي',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1197,
                'code_postal' => 3432,
                'name' => 'غيلاسة',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1198,
                'code_postal' => 3433,
                'name' => 'الرابطة',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1199,
                'code_postal' => 3434,
                'name' => 'حرازة',
                'wilaya_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1200,
                'code_postal' => 3501,
                'name' => 'بومرداس',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1201,
                'code_postal' => 3502,
                'name' => 'بودواو',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1202,
                'code_postal' => 1638,
                'name' => 'الرويبة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1203,
                'code_postal' => 3503,
                'name' => 'افير',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1204,
                'code_postal' => 3504,
                'name' => 'برج منايل',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1205,
                'code_postal' => 3505,
                'name' => 'بغلية',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1206,
                'code_postal' => 3506,
                'name' => 'سيدي داود',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1207,
                'code_postal' => 3507,
                'name' => 'الناصرية',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1208,
                'code_postal' => 3508,
                'name' => 'جينات',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1209,
                'code_postal' => 3509,
                'name' => 'يسر',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1210,
                'code_postal' => 3510,
                'name' => 'زموري',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1211,
                'code_postal' => 3511,
                'name' => 'سي مصطفى',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1212,
                'code_postal' => 3512,
                'name' => 'تجلبين',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1213,
                'code_postal' => 3513,
                'name' => 'شعبة العامر',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1214,
                'code_postal' => 3514,
                'name' => 'الثنية',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1215,
                'code_postal' => 1640,
                'name' => 'الرغاية',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1216,
                'code_postal' => 1641,
                'name' => 'عين طاية',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1217,
                'code_postal' => 3515,
                'name' => 'تمزريت',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1218,
                'code_postal' => 3516,
                'name' => 'قورصو',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1219,
                'code_postal' => 3517,
                'name' => 'اولاد موسى',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1220,
                'code_postal' => 3518,
                'name' => 'الاربعطاش',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1221,
                'code_postal' => 3519,
                'name' => 'بوزقزة قدارة',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1222,
                'code_postal' => 1642,
                'name' => 'برج البحري',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1223,
                'code_postal' => 1643,
                'name' => 'المرسى',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1224,
                'code_postal' => 3520,
                'name' => 'تورقة',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1225,
                'code_postal' => 3521,
                'name' => 'اولاد عيسى',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1226,
                'code_postal' => 3522,
                'name' => 'بني شود',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1227,
                'code_postal' => 3523,
                'name' => 'دلس',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1228,
                'code_postal' => 3524,
                'name' => 'عمال',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1229,
                'code_postal' => 3525,
                'name' => 'بني عمران',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1230,
                'code_postal' => 3526,
                'name' => 'سوق الاحد',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1231,
                'code_postal' => 3527,
                'name' => 'بدواو البحري',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1232,
                'code_postal' => 3528,
                'name' => 'اولاد هداج',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1233,
                'code_postal' => 1639,
                'name' => 'هراوة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1234,
                'code_postal' => 3529,
                'name' => 'لقاطة',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1235,
                'code_postal' => 3530,
                'name' => 'حمادي',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1236,
                'code_postal' => 3531,
                'name' => 'خميس الخشنة',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1237,
                'code_postal' => 3532,
                'name' => 'الخروبة',
                'wilaya_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1238,
                'code_postal' => 3601,
                'name' => 'الطارف',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1239,
                'code_postal' => 3602,
                'name' => 'بوحجار',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1240,
                'code_postal' => 3603,
                'name' => 'ابن مهيدي',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1241,
                'code_postal' => 3604,
                'name' => 'بوقوس',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1242,
                'code_postal' => 3605,
                'name' => 'القالة',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1243,
                'code_postal' => 3606,
                'name' => 'عين العسل',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1244,
                'code_postal' => 3607,
                'name' => 'العيون',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1245,
                'code_postal' => 3608,
                'name' => 'بوثلجة',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1246,
                'code_postal' => 3609,
                'name' => 'السوارخ',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1247,
                'code_postal' => 3610,
                'name' => 'برحال',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1248,
                'code_postal' => 3611,
                'name' => 'بحيرة الطيور',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1249,
                'code_postal' => 3612,
                'name' => 'الشافية',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1250,
                'code_postal' => 3613,
                'name' => 'الذرعان',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1251,
                'code_postal' => 3614,
                'name' => 'شهاني',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1252,
                'code_postal' => 3615,
                'name' => 'شبايطة مختار',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1253,
                'code_postal' => 3616,
                'name' => 'البسباس',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1254,
                'code_postal' => 3617,
                'name' => 'عصفور',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1255,
                'code_postal' => 3618,
                'name' => 'بني عمار',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1256,
                'code_postal' => 3619,
                'name' => 'زريزر',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1257,
                'code_postal' => 3620,
                'name' => 'الزيتونة',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1258,
                'code_postal' => 3621,
                'name' => 'عين الكرمة',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1259,
                'code_postal' => 3622,
                'name' => 'وادي الزيتون',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1260,
                'code_postal' => 3623,
                'name' => 'حمام بن صالح',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1261,
                'code_postal' => 3624,
                'name' => 'رمل السوق',
                'wilaya_id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1262,
                'code_postal' => 3701,
                'name' => 'تيندوف',
                'wilaya_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1263,
                'code_postal' => 3702,
                'name' => 'ام العسل',
                'wilaya_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1264,
                'code_postal' => 3801,
                'name' => 'تيسمسيلت',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1265,
                'code_postal' => 3802,
                'name' => 'برج بونعامة',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1266,
                'code_postal' => 3803,
                'name' => 'ثنية الحد',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1267,
                'code_postal' => 3804,
                'name' => 'الأزهرية',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1268,
                'code_postal' => 3805,
                'name' => 'بني شعيب',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1269,
                'code_postal' => 3806,
                'name' => 'الأرجم',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1270,
                'code_postal' => 3807,
                'name' => 'ملعب',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1271,
                'code_postal' => 3808,
                'name' => 'سيدي العنتري',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1272,
                'code_postal' => 3809,
                'name' => 'برج الامير عبد القاد',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1273,
                'code_postal' => 3810,
                'name' => 'العيون',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1274,
                'code_postal' => 3811,
                'name' => 'خميستي',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1275,
                'code_postal' => 3812,
                'name' => 'اولاد بسام',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1276,
                'code_postal' => 3813,
                'name' => 'عماري',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1277,
                'code_postal' => 3814,
                'name' => 'وادي الغرقة',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1278,
                'code_postal' => 3815,
                'name' => 'سيدي بوتوشنت',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1279,
                'code_postal' => 3816,
                'name' => 'الأربعات',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1280,
                'code_postal' => 3817,
                'name' => 'المعاصم',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1281,
                'code_postal' => 3818,
                'name' => 'سيدي عابد',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1282,
                'code_postal' => 3819,
                'name' => 'تاملاحت',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1283,
                'code_postal' => 3820,
                'name' => 'سيدي سليمان',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1284,
                'code_postal' => 3821,
                'name' => 'بوقايد',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1285,
                'code_postal' => 3822,
                'name' => 'بني الحسن',
                'wilaya_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1286,
                'code_postal' => 3901,
                'name' => 'الوادي',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1287,
                'code_postal' => 3902,
                'name' => 'رباح',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1288,
                'code_postal' => 3903,
                'name' => 'وادي العلندة',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1289,
                'code_postal' => 3904,
                'name' => 'البياضة',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1290,
                'code_postal' => 3905,
                'name' => 'النخلة',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1291,
                'code_postal' => 3906,
                'name' => 'قمار',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1292,
                'code_postal' => 3907,
                'name' => 'كوينين',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1293,
                'code_postal' => 3908,
                'name' => 'الرقيبة',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1294,
                'code_postal' => 3909,
                'name' => 'حمراية',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1295,
                'code_postal' => 3910,
                'name' => 'تاغزوت',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1296,
                'code_postal' => 3911,
                'name' => 'الدبيلة',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1297,
                'code_postal' => 3912,
                'name' => 'حساني عبد الكريم',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1298,
                'code_postal' => 3913,
                'name' => 'حاسي خليفة',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1299,
                'code_postal' => 3914,
                'name' => 'طالب العربي',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1300,
                'code_postal' => 3915,
                'name' => 'دوار المات',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1301,
                'code_postal' => 3916,
                'name' => 'سيدي عون',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1302,
                'code_postal' => 3917,
                'name' => 'تريفاوي',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1303,
                'code_postal' => 3918,
                'name' => 'المقرن',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1304,
                'code_postal' => 3919,
                'name' => 'بني قشة',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1305,
                'code_postal' => 3920,
                'name' => 'ورماس',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1306,
                'code_postal' => 3921,
                'name' => 'سطيل',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1307,
                'code_postal' => 3922,
                'name' => 'مرارة',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1308,
                'code_postal' => 3923,
                'name' => 'سيدي خليل',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1309,
                'code_postal' => 3924,
                'name' => 'تندلة',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1310,
                'code_postal' => 3925,
                'name' => 'العقلة',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1311,
                'code_postal' => 3926,
                'name' => 'ميه ونسى',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1312,
                'code_postal' => 3927,
                'name' => 'المغير',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1313,
                'code_postal' => 3928,
                'name' => 'جامعة',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1314,
                'code_postal' => 3929,
                'name' => 'أم الطيور',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1315,
                'code_postal' => 3930,
                'name' => 'سيدي عمران',
                'wilaya_id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1316,
                'code_postal' => 4001,
                'name' => 'خنشلة',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1317,
                'code_postal' => 4002,
                'name' => 'متوسطة',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1318,
                'code_postal' => 4003,
                'name' => 'قايس',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1319,
                'code_postal' => 4004,
                'name' => 'بغاي',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1320,
                'code_postal' => 4005,
                'name' => 'الحامة',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1321,
                'code_postal' => 4006,
                'name' => 'عين الطويلة',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1322,
                'code_postal' => 4007,
                'name' => 'تاوزيانت',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1323,
                'code_postal' => 4008,
                'name' => 'بوحمامة',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1324,
                'code_postal' => 4009,
                'name' => 'الولجة',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1325,
                'code_postal' => 4010,
                'name' => 'الريملة',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1326,
                'code_postal' => 4011,
                'name' => 'ششار',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1327,
                'code_postal' => 4012,
                'name' => 'جلال',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1328,
                'code_postal' => 4013,
                'name' => 'ببار',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1329,
                'code_postal' => 4014,
                'name' => 'تامزة',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1330,
                'code_postal' => 4015,
                'name' => 'انسيغة',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1331,
                'code_postal' => 4016,
                'name' => 'أولاد رشاش',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1332,
                'code_postal' => 4017,
                'name' => 'المحمل',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1333,
                'code_postal' => 4018,
                'name' => 'مصارة',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1334,
                'code_postal' => 4019,
                'name' => 'يابوس',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1335,
                'code_postal' => 4020,
                'name' => 'خيران',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1336,
                'code_postal' => 4021,
                'name' => 'شلية',
                'wilaya_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1337,
                'code_postal' => 4101,
                'name' => 'سوق اهراس',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1338,
                'code_postal' => 4102,
                'name' => 'سدراتة',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1339,
                'code_postal' => 4103,
                'name' => 'الحنانشة',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1340,
                'code_postal' => 4104,
                'name' => 'مشروحة',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1341,
                'code_postal' => 4105,
                'name' => 'أولاد ادريس',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1342,
                'code_postal' => 4106,
                'name' => 'تيفاش',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1343,
                'code_postal' => 4107,
                'name' => 'الزعرورية',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1344,
                'code_postal' => 4108,
                'name' => 'تاورة',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1345,
                'code_postal' => 4109,
                'name' => 'الدريعة',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1346,
                'code_postal' => 4110,
                'name' => 'الحدادة',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1347,
                'code_postal' => 4111,
                'name' => 'لخضارة',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1348,
                'code_postal' => 4112,
                'name' => 'المراهنة',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1349,
                'code_postal' => 4113,
                'name' => 'أولاد مومن',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1350,
                'code_postal' => 4114,
                'name' => 'بئر بوحوش',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1351,
                'code_postal' => 4115,
                'name' => 'مداوروش',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1352,
                'code_postal' => 4116,
                'name' => 'أم العظايم',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1353,
                'code_postal' => 4117,
                'name' => 'عين الزانة',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1354,
                'code_postal' => 4118,
                'name' => 'عين السلطان',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1355,
                'code_postal' => 4119,
                'name' => 'ويلان',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1356,
                'code_postal' => 4120,
                'name' => 'سيدي فرج',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1357,
                'code_postal' => 4121,
                'name' => 'سافل الويدان',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1358,
                'code_postal' => 4122,
                'name' => 'الرقوبة',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1359,
                'code_postal' => 4123,
                'name' => 'خميسة',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1360,
                'code_postal' => 4124,
                'name' => 'وادي الكبريت',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1361,
                'code_postal' => 4125,
                'name' => 'ترقالت',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1362,
                'code_postal' => 4126,
                'name' => 'الزوابي',
                'wilaya_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1363,
                'code_postal' => 4201,
                'name' => 'تيبازة',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1364,
                'code_postal' => 4202,
                'name' => 'مناصر',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1365,
                'code_postal' => 4203,
                'name' => 'الارهاط',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1366,
                'code_postal' => 4204,
                'name' => 'دواودة',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1367,
                'code_postal' => 4205,
                'name' => 'بورقيقة',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1368,
                'code_postal' => 4206,
                'name' => 'خميستي',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1369,
                'code_postal' => 1644,
                'name' => 'زرالدة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1370,
                'code_postal' => 1645,
                'name' => 'السحاولة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1371,
                'code_postal' => 1646,
                'name' => 'المحالمة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1372,
                'code_postal' => 4207,
                'name' => 'اغبال',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1373,
                'code_postal' => 1647,
                'name' => 'باباحسن',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1374,
                'code_postal' => 4208,
                'name' => 'حجوط',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1375,
                'code_postal' => 4209,
                'name' => 'سيد عامر',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1376,
                'code_postal' => 4210,
                'name' => 'قوراية',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1377,
                'code_postal' => 4211,
                'name' => 'الناظور',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1378,
                'code_postal' => 4212,
                'name' => 'الشعيبة',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1379,
                'code_postal' => 4213,
                'name' => 'عين تاقورايت',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1380,
                'code_postal' => 1648,
                'name' => 'الدويرة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1381,
                'code_postal' => 1649,
                'name' => 'الدرارية',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1382,
                'code_postal' => 1650,
                'name' => 'الرحمانية',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1383,
                'code_postal' => 1651,
                'name' => 'اولاد فايت',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1384,
                'code_postal' => 4214,
                'name' => 'شرشال',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1385,
                'code_postal' => 4215,
                'name' => 'الداموس',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1386,
                'code_postal' => 4216,
                'name' => 'مراد',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1387,
                'code_postal' => 4217,
                'name' => 'فوكة',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1388,
                'code_postal' => 4218,
                'name' => 'بواسماعيل',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1389,
                'code_postal' => 4219,
                'name' => 'أحمر العين',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1390,
                'code_postal' => 1652,
                'name' => 'الشراقة',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1391,
                'code_postal' => 1653,
                'name' => 'اسطاوالي',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1392,
                'code_postal' => 4220,
                'name' => 'بوهارون',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1393,
                'code_postal' => 1654,
                'name' => 'العاشور',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1394,
                'code_postal' => 4221,
                'name' => 'سيدي غيلاس',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1395,
                'code_postal' => 4222,
                'name' => 'مسلمون',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1396,
                'code_postal' => 4223,
                'name' => 'سيدي راشد',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1397,
                'code_postal' => 4224,
                'name' => 'القليعة',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1398,
                'code_postal' => 4225,
                'name' => 'الحطاطبة',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1399,
                'code_postal' => 1655,
                'name' => 'السويدانية',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1400,
                'code_postal' => 1656,
                'name' => 'الخرايسية',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1401,
                'code_postal' => 1657,
                'name' => 'عين البنيان',
                'wilaya_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1402,
                'code_postal' => 4226,
                'name' => 'سيدي سميان',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1403,
                'code_postal' => 4227,
                'name' => 'بني ميلك',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1404,
                'code_postal' => 4228,
                'name' => 'حجرة النص',
                'wilaya_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1405,
                'code_postal' => 4301,
                'name' => 'ميلة',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1406,
                'code_postal' => 4302,
                'name' => 'فرجيوة',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1407,
                'code_postal' => 4303,
                'name' => 'شلغوم العيد',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1408,
                'code_postal' => 4304,
                'name' => 'واد العثمانية',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1409,
                'code_postal' => 4305,
                'name' => 'عين ملوك',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1410,
                'code_postal' => 4306,
                'name' => 'تلاغمة',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1411,
                'code_postal' => 4307,
                'name' => 'وادي سقان',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1412,
                'code_postal' => 4308,
                'name' => 'تاجنانت',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1413,
                'code_postal' => 4309,
                'name' => 'ابن يحي عبد الرحمان',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1414,
                'code_postal' => 4310,
                'name' => 'وادي النجات',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1415,
                'code_postal' => 4311,
                'name' => 'احمد راشدي',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1416,
                'code_postal' => 4312,
                'name' => 'وادي خلوف',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1417,
                'code_postal' => 4313,
                'name' => 'تيبرقنت',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1418,
                'code_postal' => 4314,
                'name' => 'بوحاتم',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1419,
                'code_postal' => 4315,
                'name' => 'الرواشد',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1420,
                'code_postal' => 4316,
                'name' => 'تسالة المطاعي',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1421,
                'code_postal' => 4317,
                'name' => 'قرارم قوقة',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1422,
                'code_postal' => 4318,
                'name' => 'سيدي مروان',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1423,
                'code_postal' => 4319,
                'name' => 'تسادان حدادة',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1424,
                'code_postal' => 4320,
                'name' => 'دراجي بوصالح',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1425,
                'code_postal' => 4321,
                'name' => 'مينار زرزة',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1426,
                'code_postal' => 4322,
                'name' => 'عميرة اراس',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1427,
                'code_postal' => 4323,
                'name' => 'ترعى باينات',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1428,
                'code_postal' => 4324,
                'name' => 'حمالة',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1429,
                'code_postal' => 4325,
                'name' => 'عين التين',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1430,
                'code_postal' => 4326,
                'name' => 'المشيرة',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1431,
                'code_postal' => 4327,
                'name' => 'سيدي خليفة',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1432,
                'code_postal' => 4328,
                'name' => 'الزرغاية',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1433,
                'code_postal' => 4329,
                'name' => 'العياضي برباس',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1434,
                'code_postal' => 4330,
                'name' => 'عين البيضات حريش',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1435,
                'code_postal' => 4331,
                'name' => 'يحي بن قشة',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1436,
                'code_postal' => 4332,
                'name' => 'الشيقارة',
                'wilaya_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1437,
                'code_postal' => 4401,
                'name' => 'عين الدفلى',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1438,
                'code_postal' => 4402,
                'name' => 'مليانة',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1439,
                'code_postal' => 4403,
                'name' => 'بومدفع',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1440,
                'code_postal' => 4404,
                'name' => 'خميس مليانة',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1441,
                'code_postal' => 4405,
                'name' => 'حمام ريغة',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1442,
                'code_postal' => 4406,
                'name' => 'عريب',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1443,
                'code_postal' => 4407,
                'name' => 'جليدة',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1444,
                'code_postal' => 4408,
                'name' => 'العامرة',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1445,
                'code_postal' => 4409,
                'name' => 'بوراشد',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1446,
                'code_postal' => 4410,
                'name' => 'العطاف',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1447,
                'code_postal' => 4411,
                'name' => 'العبادية',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1448,
                'code_postal' => 4412,
                'name' => 'جندل',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1449,
                'code_postal' => 4413,
                'name' => 'وادي الشرفات',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1450,
                'code_postal' => 4414,
                'name' => 'عين الاشياخ',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1451,
                'code_postal' => 4415,
                'name' => 'وادي جمعة',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1452,
                'code_postal' => 4416,
                'name' => 'روينة',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1453,
                'code_postal' => 4417,
                'name' => 'زدين',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1454,
                'code_postal' => 4418,
                'name' => 'الحسنية',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1455,
                'code_postal' => 4419,
                'name' => 'بئر اولاد خليفة',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1456,
                'code_postal' => 4420,
                'name' => 'عين السلطان',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1457,
                'code_postal' => 4421,
                'name' => 'طارق بن زياد',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1458,
                'code_postal' => 4422,
                'name' => 'برج الامير خالد',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1459,
                'code_postal' => 4423,
                'name' => 'عين الترك',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1460,
                'code_postal' => 4424,
                'name' => 'سيدي الاخضر',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1461,
                'code_postal' => 4425,
                'name' => 'ابن علال',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1462,
                'code_postal' => 4426,
                'name' => 'عين البنيان',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1463,
                'code_postal' => 4427,
                'name' => 'الحسينية',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1464,
                'code_postal' => 4428,
                'name' => 'بربوش',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1465,
                'code_postal' => 4429,
                'name' => 'جمعة اولاد الشيخ',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1466,
                'code_postal' => 4430,
                'name' => 'المختارية',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1467,
                'code_postal' => 4431,
                'name' => 'بطحية',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1468,
                'code_postal' => 4432,
                'name' => 'تشتة زقاغة',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1469,
                'code_postal' => 4433,
                'name' => 'عين بويحي',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1470,
                'code_postal' => 4434,
                'name' => 'الماين',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1471,
                'code_postal' => 4435,
                'name' => 'تبركانين',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1472,
                'code_postal' => 4436,
                'name' => 'بالعاص',
                'wilaya_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1473,
                'code_postal' => 4501,
                'name' => 'النعامة',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1474,
                'code_postal' => 4502,
                'name' => 'مشرية',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1475,
                'code_postal' => 4503,
                'name' => 'عين الصفرات',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1476,
                'code_postal' => 4504,
                'name' => 'تيوت',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1477,
                'code_postal' => 4505,
                'name' => 'سفيسيفة',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1478,
                'code_postal' => 4506,
                'name' => 'مغرار',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1479,
                'code_postal' => 4507,
                'name' => 'عسلة',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1480,
                'code_postal' => 4508,
                'name' => 'جنين بورزق',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1481,
                'code_postal' => 4509,
                'name' => 'عين بن خليل',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1482,
                'code_postal' => 4510,
                'name' => 'مكمن بن عمرو',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1483,
                'code_postal' => 4511,
                'name' => 'قصدير',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1484,
                'code_postal' => 4512,
                'name' => 'البيوض',
                'wilaya_id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1485,
                'code_postal' => 4601,
                'name' => 'عين تموشنت',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1486,
                'code_postal' => 4602,
                'name' => 'شعبة اللحم',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1487,
                'code_postal' => 4603,
                'name' => 'عين الكيحل',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1488,
                'code_postal' => 4604,
                'name' => 'حمام بوحجر',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1489,
                'code_postal' => 4605,
                'name' => 'بوزجار',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1490,
                'code_postal' => 4606,
                'name' => 'وادي برقش',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1491,
                'code_postal' => 4607,
                'name' => 'أغلال',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1492,
                'code_postal' => 4608,
                'name' => 'تارقة',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1493,
                'code_postal' => 4609,
                'name' => 'عين الاربعات',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1494,
                'code_postal' => 4610,
                'name' => 'تامزورة',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1495,
                'code_postal' => 4611,
                'name' => 'شنتوف',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1496,
                'code_postal' => 4612,
                'name' => 'سيدي بن عدة',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1497,
                'code_postal' => 4613,
                'name' => 'عقب الليل',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1498,
                'code_postal' => 4614,
                'name' => 'المالح',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1499,
                'code_postal' => 4615,
                'name' => 'سيدي بومدين',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1500,
                'code_postal' => 4616,
                'name' => 'وادي الصباح',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1501,
                'code_postal' => 4617,
                'name' => 'أولاد بوجمعة',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('communes')->insert(array (
            0 => 
            array (
                'id' => 1502,
                'code_postal' => 4618,
                'name' => 'عين الطلبة',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1503,
                'code_postal' => 4619,
                'name' => 'العامرية',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1504,
                'code_postal' => 4620,
                'name' => 'حاسي الغلة',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1505,
                'code_postal' => 4621,
                'name' => 'الحساسنة',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1506,
                'code_postal' => 4622,
                'name' => 'اولاد كيحل',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1507,
                'code_postal' => 4623,
                'name' => 'بني صاف',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1508,
                'code_postal' => 4624,
                'name' => 'سيدي الصافي',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1509,
                'code_postal' => 4625,
                'name' => 'ولهاصة',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1510,
                'code_postal' => 4626,
                'name' => 'تادمايت',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1511,
                'code_postal' => 4627,
                'name' => 'الأمير عبد القادر',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1512,
                'code_postal' => 4628,
                'name' => 'المساعيد',
                'wilaya_id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1513,
                'code_postal' => 4701,
                'name' => 'غرداية',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1514,
                'code_postal' => 4702,
                'name' => 'المنيعة',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1515,
                'code_postal' => 4703,
                'name' => 'ضاية بن ضحوة',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1516,
                'code_postal' => 4704,
                'name' => 'بريان',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1517,
                'code_postal' => 4705,
                'name' => 'متليلي',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1518,
                'code_postal' => 4706,
                'name' => 'القرارة',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1519,
                'code_postal' => 4707,
                'name' => 'العطف',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1520,
                'code_postal' => 4708,
                'name' => 'زلفانة',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1521,
                'code_postal' => 4709,
                'name' => 'سبسب',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1522,
                'code_postal' => 4710,
                'name' => 'بونورة',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1523,
                'code_postal' => 4711,
                'name' => 'حاسي الفحل',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1524,
                'code_postal' => 4712,
                'name' => 'حاسي القارة',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1525,
                'code_postal' => 4713,
                'name' => 'المنصورة',
                'wilaya_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1526,
                'code_postal' => 4801,
                'name' => 'غليزان',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1527,
                'code_postal' => 4802,
                'name' => 'وادي رهيو',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1528,
                'code_postal' => 4803,
                'name' => 'بلعسل بوزقزة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1529,
                'code_postal' => 4804,
                'name' => 'سيدي سعادة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1530,
                'code_postal' => 4805,
                'name' => 'اولاد عيش',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1531,
                'code_postal' => 4806,
                'name' => 'سيدي لزرق',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1532,
                'code_postal' => 4807,
                'name' => 'الحمادنة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1533,
                'code_postal' => 4808,
                'name' => 'سيدي محمد بن علي',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1534,
                'code_postal' => 4809,
                'name' => 'مديونة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1535,
                'code_postal' => 4810,
                'name' => 'سيدي خطاب',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1536,
                'code_postal' => 4811,
                'name' => 'عمي موسى',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1537,
                'code_postal' => 4812,
                'name' => 'زمورة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1538,
                'code_postal' => 4813,
                'name' => 'بني درقن',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1539,
                'code_postal' => 4814,
                'name' => 'جديوية',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1540,
                'code_postal' => 4815,
                'name' => 'القطار',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1541,
                'code_postal' => 4816,
                'name' => 'الحمري',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1542,
                'code_postal' => 4817,
                'name' => 'المطمر',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1543,
                'code_postal' => 4818,
                'name' => 'سيدي محمد بن عودة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1544,
                'code_postal' => 4819,
                'name' => 'عين طارق',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1545,
                'code_postal' => 4820,
                'name' => 'وادي السلام',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1546,
                'code_postal' => 4821,
                'name' => 'ورزان',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1547,
                'code_postal' => 4822,
                'name' => 'مازونة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1548,
                'code_postal' => 4823,
                'name' => 'القلعة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1549,
                'code_postal' => 4824,
                'name' => 'عين الرحمة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1550,
                'code_postal' => 4825,
                'name' => 'يلل',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1551,
                'code_postal' => 4826,
                'name' => 'وادي الجمعة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1552,
                'code_postal' => 4827,
                'name' => 'الرمكة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1553,
                'code_postal' => 4828,
                'name' => 'منداس',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1554,
                'code_postal' => 4829,
                'name' => 'لحلاف',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1555,
                'code_postal' => 4830,
                'name' => 'بني زنطيس',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1556,
                'code_postal' => 4831,
                'name' => 'سوق الاحد',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1557,
                'code_postal' => 4832,
                'name' => 'دار بن عبدالله',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1558,
                'code_postal' => 4833,
                'name' => 'الحاسي',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1559,
                'code_postal' => 4834,
                'name' => 'حدالشكالة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1560,
                'code_postal' => 4835,
                'name' => 'بن داود',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1561,
                'code_postal' => 4836,
                'name' => 'الولجة',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1562,
                'code_postal' => 4837,
                'name' => 'مرجة سيدي عابد',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1563,
                'code_postal' => 4838,
                'name' => 'أولاد سيدي ميهوب',
                'wilaya_id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}