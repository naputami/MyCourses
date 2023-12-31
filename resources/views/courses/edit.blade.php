@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Course</h1>
    <form method="post" action="{{ route('course.update', $course->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="course_date" class="form-label">Course Date</label>
          <input type="date" class="form-control" id="course_date" name="course_date" value="{{ $course->course_date}}">
        </div>
        <div class="mb-3">
            <label for="student_id" class="form-label">Student</label>
            <select class="form-select" aria-label="select subject" name="student_id" id="student_id">
              <option selected>Select student</option>
              @foreach ($students as $student )
                    @if ($student->id == $course->student_id)
                        <option selected value="{{ $student->id }}">{{$student->name}}</option>
                    @endif
                  <option value="{{ $student->id }}">{{ $student->name }}</option>
              @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="subject_id" class="form-label">Subject:</label>
            <select class="form-select" aria-label="select subject" name="subject_id" id="subject_name">
                @foreach ($subjects as $subject )
                    @if ($subject->id == $course->subject_id)
                        <option selected value="{{ $subject->id }}">{{$subject->name}}</option>
                    @endif
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="subject_teacher_id" class="form-label">Teacher:</label>
            <select class="form-select" aria-label="select subject teacher" name="subject_teacher_id" id="subject_teacher">
                @foreach ($subject_teachers as $subject_teacher)
                @if ($subject_teacher->subject_id == $course->subject_id)
                    @if ($subject_teacher->teacher_id == $course->teacher_id)
                    <option selected value="{{ $subject_teacher->subject_teacher_id }}">{{$subject_teacher->teacher_name}}</option>
                    @endif
                    <option value="{{ $subject_teacher->subject_teacher_id }}">{{$subject_teacher->teacher_name}}</option>
                @endif
                    
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#subject_name').on('change', function () {
                var subject_id = this.value;
                $("#subject_teacher").html('');
                $.ajax({
                    url: "{{ route('fetchTeacher') }}",
                    type: "POST",
                    data: {
                        subject_id: subject_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#subject_teacher').html('<option selected>Select teacher</option>');
                        $.each(result.teachers, function (key, value) {
                            $("#subject_teacher").append('<option value="' + value
                                .subject_teacher_id + '">' + value.teacher_name + '</option>');
                        });
                    },
                    error: function(error) {
                    console.log(error);
                  }
                });
            });
  
</script>
@endpush