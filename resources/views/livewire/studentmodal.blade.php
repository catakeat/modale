<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">
    Add student
</button>
<div wire:ignore.self class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="saveStudent">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" wire:model.live="name" class="form-control">
                        @error('name')<span class="alert alert-danger">{{$message}} </span> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" wire:model.live="email" class="form-control">
                        @error('email')<span class="alert alert-danger">{{$message}} </span> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Course</label>
                        <input type="text" wire:model.live="course" class="form-control">
                        @error('course')<span class="alert alert-danger">{{$message}} </span> @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>





<div wire:ignore.self class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="saveEditedStudent">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" wire:model.live="name" class="form-control" value="{{$name}}">
                        @error('name')<span class="alert alert-danger">{{$message}} </span> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" wire:model.live="email" class="form-control"  value="{{$email}}">
                        @error('email')<span class="alert alert-danger">{{$message}} </span> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Course</label>
                        <input type="text" wire:model.live="course" class="form-control"  value="{{$course}}">
                        @error('course')<span class="alert alert-danger">{{$message}} </span> @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>