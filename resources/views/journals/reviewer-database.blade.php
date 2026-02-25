@extends('layouts.journal')
@section('content')
    <div class="bg-white mt-3">
        <!-- Articles -->
        <div class="m-2 p-2">
            <h2 class="mb-3">Reviewer Database</h2>

            <div class="row mb-4">
                <div class="col-lg-12">
                    <p class="text-muted">A comprehensive database of reviewers contributing to the {{ $journal->name }}.</p>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Email</th>
                            <th>Official URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reviewers as $reviewer)
                            <tr>
                                <td>{{ $reviewer->name }}</td>
                                <td>{{ $reviewer->department ?? 'N/A' }}</td>
                                <td>
                                    @if($reviewer->email)
                                        <a href="mailto:{{ $reviewer->email }}" class="text-decoration-none">{{ $reviewer->email }}</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>
                                    @if($reviewer->official_url)
                                        <a href="{{ $reviewer->official_url }}" target="_blank" class="text-decoration-none">View Profile</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No reviewers found in the database.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
