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
                        <form action="{{ url('tasks') }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}" />
                                @error('title') <span class="text-danger">{{ $message }}</span>  @enderror
                            </div>

                            <div class="dropdown mb-3">
                                <label for="exampleFormControlSelect1">Select Category</label>
                                <select name="category_id" class="form-control mt-1" id="exampleFormControlSelect1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span>  @enderror
                            </div>

                            <div class="mb-3">
                                <label for="due_date" class="form-label">Due Date</label>
                                <input type="date" name="due_date" class="form-control" id="due_date" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button> 
                                {{-- form action once this is clicked --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-web-layout>

