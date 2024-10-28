<x-app-web-layout>
    <x-slot name="title">
        Edit Tasks
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Edit Task
                            <a href="{{ url('tasks') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('tasks/'.$task->id.'') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $task->title }}" />
                                @error('title') <span class="text-danger">{{ $message }}</span>  @enderror
                            </div>

                            <div class="dropdown mb-3">
                                <label for="exampleFormControlSelect1">Select Category</label>
                                <select name="category_id" class="form-control mt-1" id="exampleFormControlSelect1">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3">{{ $task->description }}</textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span>  @enderror
                            </div>

                            <div class="mb-3">
                                <label for="due_date" class="form-label">Due Date</label>
                                <input type="date" name="due_date" class="form-control" id="due_date" value="{{ $task->due_date }}">
                            </div>
                            
                            {{-- <div class="mb-3">
                                <label>Is Active</label>
                                <input type="checkbox" name="is_active" class="" {{ $task->is_active == true ? 'checked':'' }} />
                                @error('is_active') <span class="text-danger">{{ $message }}</span>  @enderror
                            </div> --}}

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                {{-- form action once this is clicked --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>

