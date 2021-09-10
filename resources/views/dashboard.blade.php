<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ข้อมูลผู้ใช้---> {{Auth::user()->name}}
            <!-- {{ __('Dashboard') }} -->
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชือ</th>
                            <th scope="col">อีเมลล์</th>
                            <th scope="col">วันที่สร้าง</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $row)
                        <tr> 
                            <th></th>
                            <th>{{$row->name}}</th>
                            <th>{{$row->email}}</th>
                            <th>{{$row->created_at}}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
