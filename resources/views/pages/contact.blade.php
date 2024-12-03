@extends('pages.app')
@section('title','contact')


@section('content')
    <div class="container">
        <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
            <form class="form" method="POST" novalidate action="{{ url('send-message') }}">
                @csrf
                <x-success/>
                <div class="form-items">
                    <div class="mb-3">
                        <label class="form-label required-label" for="name">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="subject">subject</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" class="form-control" id="subject" required>
                        @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="message">message</label>
                        <textarea class="form-control" minlength="10" name="content" id="message" required></textarea>
                        {{ old('content') }}
                        @error('content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
@endsection
