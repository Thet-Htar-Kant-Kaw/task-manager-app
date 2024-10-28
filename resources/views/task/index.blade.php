@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
<x-app-web-layout>
    <x-slot name="title">
        Tasks
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <div class="card mb-4">
        <div class="card-header">
            <h4>{{ auth()->user()->name }}'s Tasks 
                <a href="{{ url('tasks/create') }}" class="btn btn-outline-dark float-end"><i class="bi bi-plus-circle-fill"></i> Add Task</a>
            </h4>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Due date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Due date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->category->name }}</td>
                            <td>{{ $task->due_date }}</td>
                            <td>
                                <a href="{{ url('tasks/'.$task->id.'') }}" class="btn btn-outline-info m-2"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ url('tasks/'.$task->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this task?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger mx-1"><i class="bi bi-trash3"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                                    
                </tbody>
            </table>
        </div>
    </div>

    {{-- <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tasks
                            <a href="{{ url('tasks/create') }}" class="btn btn-primary float-end">Add Task</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Due date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->id }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>{{ $task->category_id }}</td>
                                        <td>{{ $task->due_date }}</td>
                                        <td>
                                            <a href="{{ url('tasks/'.$task->id.'') }}" class="btn btn-success mx-2">Edit</a>
                                            <form action="{{ url('tasks/'.$task->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this task?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mx-1">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

</x-app-web-layout>

