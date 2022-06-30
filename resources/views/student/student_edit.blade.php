<x-app-layout>


    <div class="py-12">
        <div class=" grid  px-28">
            <h1 class="font-bold text-xl"> تعديل ملف الطفل </h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="">
                <form method="post">
                    @csrf
                    <div class="grid grid-cols-2">


                        {{-- row1 --}}
                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                اللقب
                            </dt>

                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5"
                                value="{{ $student->family_name }}" name="family_name" required>
                        </div>

                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                الاسم
                            </dt>

                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                value="{{ $student->first_name }}" name="first_name" required>
                        </div>

                        {{-- row2 --}}
                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                العنوان
                            </dt>

                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5"
                                value="{{ $student->address }}" name="address" required>
                        </div>

                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                ايميل خاص بالطفل
                            </dt>

                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                value="{{ $student->email }}" name="email" required>
                        </div>

                        {{-- row3 --}}
                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                اسم و لقب الولي
                            </dt>

                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5"
                                value="{{ $student->parent }}" name="parent" required>
                        </div>

                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                رقم هاتف الولي
                            </dt>

                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                value="{{ $student->num_parent }}" name="num_parent" required>
                        </div>

                        {{-- row4 --}}
                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                ايميل الولي
                            </dt>

                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5"
                                value="{{ $student->parent_email }}" name="parent_email" required>
                        </div>

                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                الجنس
                            </dt>

                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option>ذكر</option>
                                <option>انثى</option>
                            </select>
                        </div>

                        <div>

                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                المستوى الدراسي
                            </dt>

                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5"
                                value="{{ $student->scolaire }}" name="scolaire" required>
                        </div>

                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                تاريخ و مكان الازدياد
                            </dt>
                            <div class=" grid grid-cols-profile gap-2">

                                <input dir="ltr" datepicker type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 "
                                    value="{{ $student->birth_day }}" name="birth_day">
                                <div>
                                    <x-commune-select name="commune_id" />
                                </div>
                            </div>
                        </div>

                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                مقدار حفظ القرآن
                            </dt>
                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/5 p-2.5"
                                value="{{ $student->quran }}" name="quran" type="number" required>
                        </div>

                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                مقدار حفظ السنة
                            </dt>
                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                value="{{ $student->sonna }}" name="sonna" required>
                        </div>

                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                الهوايات
                            </dt>
                            <textarea id="discription" rows="4" name="hobies"
                                class="mt-4 block p-2.5 w-4/5  text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">{{ $student->hobies }}</textarea>
                        </div>

                        <div>
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                المهارات التي يمتلكها الطفل
                            </dt>
                            <textarea id="discription" rows="4"
                                class="mt-4 block p-2.5 w-full  text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                name="skills">{{ $student->skills }}</textarea>
                        </div>

                        <div class="col-span-2 mt-2">
                            <dt class="text-gray-400 font-semibold text-sm mt-4">
                                الحالة الصحية للطفل
                            </dt>
                            <textarea id="discription" rows="4"
                                class="mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                name="health">{{ $student->health }}</textarea>
                        </div>
                        <div class="col-span-2 mt-2">

                            <h5 class="text-gray-400 font-semibold text-xl mt-4">
                                Description
                            </h5>
                            <textarea id="discription" rows="4"
                                class="mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                name="discription">{{ $student->discription }}</textarea>
                        </div>
                        <button type=" "
                            class="submit col-span-2 mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
