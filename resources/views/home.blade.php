@extends('layouts.app')

@section('content')
@include('newcourse')
<div class="container mt-4 d-flex justify-content-center table-responsive">
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Course Date</th>
            <th>Teacher name</th>
            <th>Subject name</th>
            <th>Action</th>
        </tr>

        @foreach($data as $item)
            <tr>
                <td>{{ $item->student_name }}</td>
                <td>{{ $item->course_date }}</td>
                <td>{{ $item->teacher_name}}</td>
                <td>{{ $item->subject_name }}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{ route('course.delete', $item->course_id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger show_confirm">Delete</button>
                        </form>
                        <a href="{{route('course.edit', $item->course_id)}}" class="btn btn-warning ms-2">Edit</a>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire({
                    title: "Deleted!",
                    text: "This course has been deleted!",
                    icon: "success"
                    });
                }
                });
})
  
</script>
@endpush
