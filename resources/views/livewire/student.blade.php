<div>
  <input type="text"  wire:model="search"> <div style="color:green"> Green {{$search}}  </div>
  Sa scriu ceva aici <-- din stundent.blade
   @if(session()->has("message"))

    <span class="alert text-danger  alert-danger">{{session()->get('message')}} </span>
    @endif


    @include('livewire.studentmodal')



    <table class="table table-striped table-bordered table-hover table-reponsive">


      @forelse($students as $student)
      <tr>
        <td>{{$student->id}} loop_iteration {{$loop->iteration}} loop_index{{$loop->index}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->course}}</td>
        <td>
        
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editStudentModal"  wire:click="editUser({{$student->id}})">
            Edit student
          </button>
        </td>
      </tr>
      @empty
      <tr>
        <td>No records</td>
      </tr>
      @endforelse

    </table>

    {{$students->links()}}

</div>

@section('scripts')
<script>
  window.addEventListener("close-modal", event => {
    $('#studentModal').modal('hide');
    $('#editStudentModal').modal('hide');
  });
</script>
@endsection('scripts')