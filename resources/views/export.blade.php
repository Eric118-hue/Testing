@extends('layouts.app')

@section('content')
        <h1 class="text-center">Export</h1>

        <div class="container mt-5">
            <form action="{{ route('exportUld') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <button class="btn btn-primary mt-2">Upload Uld</button>
            </form>
        </div>
@endsection