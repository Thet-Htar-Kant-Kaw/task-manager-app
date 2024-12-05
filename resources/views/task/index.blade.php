@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
<x-app-web-layout>
    <x-slot name="title">
        Tasks
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <div class="card mb-4">
        <div class="card-header">
            <select name="filter" class="mt-1" id="task-filter">
                <option value="all">Show All</option>
                <option value="active">Show Active</option>
            </select>
            <a href="{{ url('tasks/create') }}" class="btn btn-outline-dark float-end"><i class="bi bi-plus-circle-fill"></i> Add Task</a>
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
                                {{-- <form action="{{ url('tasks/'.$task->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this task?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger mx-1"><i class="bi bi-trash3"></i></button>
                                </form> --}}

                                <form action="{{ url('tasks/'.$task->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this task?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-warning mx-1"><i class="bi bi-trash3"></i></button>
                                </form>

                                <form action="{{ url('tasks/'.$task->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to permanently delete this task?');">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="force" value="1" >
                                    <button type="submit" class="btn btn-outline-danger mx-1"><i class="bi bi-trash3"></i></button>
                                </form>

                                <!-- Delete Confirmation Modal -->
                                {{-- <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
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
                                                <form action="{{ url('tasks/'.$task->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </td>
                        </tr>
                    @endforeach
                                    
                </tbody>
            </table>
        </div>
    </div>

        <!-- Bootstrap 5 JS (Required for Modal Functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</x-app-web-layout>

