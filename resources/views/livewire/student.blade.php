<div>
   
   <div>
    Sa scriu ceva aici
    <form wire:submit.prevent="saveStudent" action="#" method="post">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" wire:model="name" class="form-control">
            @error('name')<span class="alert alert-danger">{{$message}} </span> @enderror
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" wire:model="email" class="form-control">
            @error('email')<span class="alert alert-danger">{{$message}} </span> @enderror
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input type="text" wire:model="course" class="form-control">
            @error('course')<span class="alert alert-danger">{{$message}} </span> @enderror
        </div>




        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" wire:click="test()">Save changes</button>
        </div>
    </form>


</div>

</div>