<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if($message = Session::get('success'))
            <div class="error">{{ $message }}</div>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('todos.store') }}" method="POST" enctype = "multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <x-input-label for="task_title">Title</x-input-label>
                            <x-text-input type="text" id="task_title" name="task_title" />
                            @if($errors->has('task_title'))
                                <div class="error">{{ $errors->first('task_title') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <x-input-label for="task_desc">Desc</x-input-label>
                            <x-text-input type="text" name="task_desc" id="task_desc" />
                            @if($errors->has('task_desc'))
                                <div class="error">{{ $errors->first('task_desc') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <x-input-label for="task_photo">Photo</x-input-label>
                            <input type="file" name="task_photo" class="form-control" id="task_photo" value="" />
                            @if($errors->has('task_desc'))
                                <div class="error">{{ $errors->first('task_desc') }}</div>
                            @endif
                        </div>
                        <div>
                            <x-primary-button>
                                {{ __('Submit') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
