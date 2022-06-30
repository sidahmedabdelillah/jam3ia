<x-app-layout>


    <div class="py-12">

        <div class=" grid grid-cols-profile px-28">
            <div class="mr-6 flex-1">
                <div class="">
                    <img class="w-20 h-20 rounded-full"
                        src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png?w=740" alt="Rounded avatar">
                </div>
                <h1 class="font-bold text-xl">
                    {{ $student->family_name . ' ' . $student->first_name }}
                </h1>
                <ul class="mt-2 text-gray-400">
                    <li class="flex items-center text-sm font-medium">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" id="location-marker"
                            class="mr-2 w-4 h-4 text-cool-gray-800 dark:text-cool-gray-200 group-hover:text-purple-600 group-focus:text-purple-600 dark:group-hover:text-purple-50 dark:group-focus:text-purple-50">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>

                        {{ $student->commun->name . ' ' . $student->commun->wilaya->name }}
                    </li>
                    <li class="flex items-center text-sm font-medium">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" id="globe"
                            class="mr-2 w-4 h-4 text-cool-gray-800 dark:text-cool-gray-200 group-hover:text-purple-600 group-focus:text-purple-600 dark:group-hover:text-purple-50 dark:group-focus:text-purple-50">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        {{ $student->age() }} ans
                    </li>
                    <li class="flex items-center text-sm font-medium">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" id="library"
                            class="mr-2 w-4 h-4 text-cool-gray-800 dark:text-cool-gray-200 group-hover:text-purple-600 group-focus:text-purple-600 dark:group-hover:text-purple-50 dark:group-focus:text-purple-50">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                        </svg>
                        {{ $student->scolaire }}
                    </li>
                    <li class="flex items-center text-sm font-medium">
                        <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        {{ $student->sex }}
                    </li>

                    <li class="flex items-center text-sm font-medium">
                        <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                            </path>
                        </svg>
                        {{ $student->email }}
                    </li>
                </ul>

                <div>
                    <div class="mt-5 ">
                        <h4 class="text-gray-400 text-sm">
                            المشرف التربوي
                        </h4>
                        <div>
                            Bentegar Sid Ahmed
                        </div>

                        <h4 class="text-gray-400 text-sm">
                            العنوان
                        </h4>
                        <div>
                            {{ $student->address }}
                        </div>

                        <h4 class="text-gray-400 text-sm mt-2">
                            اسم و لقب الولي
                        </h4>

                        <div>
                            {{ $student->parent }}
                        </div>

                        <h4 class="text-gray-400 text-sm mt-2">
                            ايميل الولي
                        </h4>
                        <div>
                            {{ $student->parent_email }}
                        </div>

                        <h4 class="text-gray-400 text-sm mt-2">
                            رقم هاتف الولي
                        </h4>
                        <div>
                            {{ $student->num_parent }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-2">
                <h5 class="text-gray-400 font-semibold text-xl mt-4">
                    الوصف
                </h5>
                <article class="prose lg:prose-xl">
                    {!! Illuminate\Support\Str::markdown($student->discription) !!}
                </article>

                <div class="grid grid-cols-2">
                    <div>
                        <dt class="text-gray-400 font-semibold text-sm mt-4">
                            المدرسة
                        </dt>
                        <dd>
                            Djamel eddine el afghani
                        </dd>
                    </div>

                    <div>
                        <dt class="text-gray-400 font-semibold text-sm mt-4">
                            تاريخ و مكان الازدياد
                        </dt>
                        <dd>
                            {{ $student->birth_day }}
                        </dd>
                    </div>

                    <div>
                        <dt class="text-gray-400 font-semibold text-sm mt-4">
                            مقدار حفظ القرآن
                        </dt>
                        <dd>
                            {{ $student->quran }}
                        </dd>
                    </div>

                    <div>
                        <dt class="text-gray-400 font-semibold text-sm mt-4">
                            مقدار حفظ السنة
                        </dt>
                        <dd>
                            {{ $student->sonna }}
                        </dd>
                    </div>

                    <div>
                        <dt class="text-gray-400 font-semibold text-sm mt-4">
                            الهوايات
                        </dt>
                        <ul class="list-disc pl-6 ">
                            @foreach($hobies as $hoby)
                                @if($hoby != '')
                                    <li>
                                        {{ $hoby }}
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                    <div>
                        <dt class="text-gray-400 font-semibold text-sm mt-4">
                            المهارات التي يمتلكها الطفل
                        </dt>
                        <ul class="list-disc pl-6 ">
                            @foreach($skills as $skill)
                                @if($skill != '')
                                    <li>
                                        {{ $skill }}
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-span-2 mt-2">
                        <dt class="text-gray-400 font-semibold text-sm mt-4">
                            الحالة الصحية للطفل
                        </dt>
                        <article class="prose lg:prose-xl">
                            {!! Illuminate\Support\Str::markdown($student->health) !!}
                        </article>
                    </div>

                    <a href="{{ route('edit_student', ['id' => $student->id]) }}"
                        class="submit col-span-2 mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">تعديل</a>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
