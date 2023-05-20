<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Todos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if($message = Session::get('success'))
            <div class="error">{{ $message }}</div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table>
                        <thead>
                            <th>Task</th>
                            <th>Desc</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @if($todos)
                            @foreach($todos as $key=>$todo)
                            <tr>
                                <td>{{ $todo->task_title }}</td>
                                <td>{{ $todo->task_title }}</td>
                                <td><img src="{{ asset('storage/images/') }}/{{ $todo->task_photo }}" width="120px" ></td>
                                <td></td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
