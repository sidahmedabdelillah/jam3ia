<x-app-layout>



    <div class="container flex justify-center mx-auto mt-12">
        <div class="flex flex-col">
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                اضافة تلميذ
                </button>
            <div class="w-full">
                <div class=" border-b border-gray-200 shadow">
                    <table class="divide-y divide-gray-300" id="dataTable">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    الاسم
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    اللقب
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    تاريخ الميلاد
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    الولي
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    معلومات
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    حذف
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-500">
                            @foreach ($students as $student)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-center text-gray-500">
                                        {{ $student->first_name }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-900">
                                            {{ $student->family_name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="text-sm text-gray-500">{{ $student->birth_day }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-center text-gray-500">
                                        {{ $student->parent }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="{{ route('student_profile', ['id' => $student->id]) }}"
                                            class=" text-sm text-blue-600 bg-blue-200 rounded-full">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                </path>
                                            </svg>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <button onClick="deleteStudent({{ $student->id }})"
                                            class="text-sm text-red-400 bg-red-200 rounded-full">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    "oLanguage": {
                        "sSearch": "بحث",
                        "sZeroRecords": "لا يوجد",
                        "sInfo": "",
                        "sInfoFiltered": "",
                        "sSearch": ""
                    }
                });

            });

            const deleteStudent = (id) => {
                axios.delete(`/student/${id}`)
            }
        </script>
    </x-slot>
</x-app-layout>
