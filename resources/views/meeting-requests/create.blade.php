
@extends('layouts.user')

@section('title', 'Request a Session')


@section('content')


<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Request One-on-One Session</h3>
    </div>

    <form action="{{ route('meeting-requests.store') }}" method="post" autocomplete="off">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Reason</label>
                <textarea name="reason" rows="6" class="form-control" placeholder="Tell us why do you want to request a session." required></textarea>
            </div>
            @error('reason')
                <div class="validate-error">{{ $message }}</div>
            @enderror
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- /.card-footer-->

    </form>
</div>
<!-- /.card -->

@endsection
