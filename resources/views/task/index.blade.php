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
                                <!-- Delete Button -->
                                <form id="deleteForm" action="{{ url('tasks/'.$task->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-outline-danger mx-1" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                                    
                </tbody>
            </table>
        </div>
    </div>

        <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this task?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <!-- Confirm Delete Button -->
                    <button type="button" class="btn btn-danger" onclick="document.getElementById('deleteForm').submit();">Delete</button>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>

