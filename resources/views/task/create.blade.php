<x-app-web-layout>
    <x-slot name="title">
        Add Tasks
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif

                <div class="card mb-3">
                    <div class="card-header">
                        <h4>Add Tasks
                            <a href="{{ url('tasks') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form id="task_form" action="{{ url('tasks') }}" method="POST"> 
                            @csrf
                            @method('POST')
                        
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" />
                                {{-- @error('title') <span class="text-danger">{{ $message }}</span> @enderror --}}
                            </div>
                        
                            <div class="dropdown mb-3">
                                <label for="category_id">Select Category</label>
                                <select name="category_id" class="form-control mt-1" id="category_id">
                                    <option value="">--Select Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                {{-- @error('description') <span class="text-danger">{{ $message }}</span> @enderror --}}
                            </div>
                        
                            <div class="mb-3">
                                <label for="due_date">Due Date</label>
                                <input type="date" id="due_date" name="due_date" value="{{ old('due_date') }}" class="form-control">
                            </div>
                        
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button> 
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <!-- Link to the custom validation file -->
    <script src="{{ asset('js/createTask.js') }}"></script>

</x-app-web-layout>

