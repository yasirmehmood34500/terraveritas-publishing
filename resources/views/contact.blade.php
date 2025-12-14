@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Contact Us</h1>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contact_send') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"
                    value="{{ old('first_name') }}">

                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror"
                    value="{{ old('last_name') }}">

                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}">

                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror"
                    value="{{ old('subject') }}">

                @error('subject')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label>Message</label>
                <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="4">{{ old('message') }}</textarea>

                @error('message')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection
