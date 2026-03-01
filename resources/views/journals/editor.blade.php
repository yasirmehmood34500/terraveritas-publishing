@extends('layouts.journal')
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h1 class="mb-3">Editorial Board</h1>
            {{-- <p class="mb-3">Please note that the order in which the Editors appear on this page is alphabetical, and
                follows the structure of the editorial board presented on the MDPI website under information for editors: <a
                    class="text-decoration-none text-dark" href="">editorial board responsibilities</a>.</p> --}}

            <div class="row">
                <div class="col-lg-6">
                    <h4>Members</h4>
                </div>
                <div class="col-lg-6">
                    <!-- <input type="text" placeholder="search..." class="form-control"> -->
                </div>
            </div>

            @php
                $editorialBoardMembers = collect()
                    ->merge($grouped_members->get('Editor-in-Chief', []))
                    ->merge($grouped_members->get('Managing Editor', []));

                $advisoryCouncilMembers = $grouped_members->get('Advisory Council', []);
                $editorialAdvisoryBoardMembers = $grouped_members->get('Editorial Advisory Board', []);
                $subjectEditorsMembers = $grouped_members->get('Subject Editors', []);
            @endphp

            <div class="mt-4">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="editorialTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="editorial-board-tab" data-bs-toggle="tab"
                            data-bs-target="#editorial-board" type="button" role="tab" aria-controls="editorial-board"
                            aria-selected="true">Editorial Board</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="advisory-council-tab" data-bs-toggle="tab"
                            data-bs-target="#advisory-council" type="button" role="tab" aria-controls="advisory-council"
                            aria-selected="false">Advisory Council</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="editorial-advisory-board-tab" data-bs-toggle="tab"
                            data-bs-target="#editorial-advisory-board" type="button" role="tab"
                            aria-controls="editorial-advisory-board" aria-selected="false">Editorial Advisory Board</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="subject-editors-tab" data-bs-toggle="tab"
                            data-bs-target="#subject-editors" type="button" role="tab" aria-controls="subject-editors"
                            aria-selected="false">Subject Editors</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="coi-tab" data-bs-toggle="tab"
                            data-bs-target="#coi" type="button" role="tab" aria-controls="coi"
                            aria-selected="false">COI</button>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content mt-3" id="editorialTabsContent">
                    <div class="tab-pane fade show active" id="editorial-board" role="tabpanel"
                        aria-labelledby="editorial-board-tab">
                        @include('journals.partials.editor-list', ['members' => $editorialBoardMembers])
                    </div>
                    <div class="tab-pane fade" id="advisory-council" role="tabpanel" aria-labelledby="advisory-council-tab">
                        @include('journals.partials.editor-list', ['members' => $advisoryCouncilMembers])
                    </div>
                    <div class="tab-pane fade" id="editorial-advisory-board" role="tabpanel"
                        aria-labelledby="editorial-advisory-board-tab">
                        @include('journals.partials.editor-list', ['members' => $editorialAdvisoryBoardMembers])
                    </div>
                    <div class="tab-pane fade" id="subject-editors" role="tabpanel" aria-labelledby="subject-editors-tab">
                        @include('journals.partials.editor-list', ['members' => $subjectEditorsMembers])
                    </div>
                    <div class="tab-pane fade" id="coi" role="tabpanel" aria-labelledby="coi-tab">
                        <p>All editors and members of advisory council, editorial advisory board and section editors have no financial relationships or interests to disclose.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection