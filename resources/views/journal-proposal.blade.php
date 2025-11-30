@extends('layouts.main')

@section('left-bar')
    @include('includes.left-bars.index')
@endsection

@section('content')
<div class="bg-white mt-3">
    <div class="m-2 p-2">
        <h1>Journal Proposal</h1>
        <p>TerraVeritas Publishing welcomes proposals for new journals. Please complete the form below to submit your proposal.</p>

        <ul class="nav nav-tabs" id="proposalTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="new-journal-tab" data-bs-toggle="tab" href="#new-journal" role="tab" aria-controls="new-journal" aria-selected="true">New Journal</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="existing-journal-tab" data-bs-toggle="tab" href="#existing-journal" role="tab" aria-controls="existing-journal" aria-selected="false">Existing Journal</a>
            </li>
        </ul>

        <form action="#" method="post" class="mt-3">
            <div class="tab-content" id="proposalTabsContent">
                <div class="tab-pane fade show active" id="new-journal" role="tabpanel" aria-labelledby="new-journal-tab">
                    <h2 class="mt-4">New Journal Information</h2>
                    <div class="form-group">
                        <label for="proposed_title">Proposed Journal Title*</label>
                        <input type="text" id="proposed_title" name="proposed_title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="potential_eic">Potential Editor-in-Chief*</label>
                        <input type="text" id="potential_eic" name="potential_eic" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="aims_scope">Aims & Scope*</label>
                        <textarea id="aims_scope" name="aims_scope" class="form-control" required placeholder="Please briefly describe the main topic and areas this journal intends to cover, and types of submissions you expect to receive."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="research_hotspots">How can you determine the theme of a new journal?</label>
                        <textarea id="research_hotspots" name="research_hotspots" class="form-control" placeholder="Assess research hotspots/academic frontiers; Assess pioneers in the field/key research directions of universities; Determine whether TerraVeritas has already established a journal in the field."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="other_info">Any other relevant information</label>
                        <textarea id="other_info" name="other_info" class="form-control"></textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="existing-journal" role="tabpanel" aria-labelledby="existing-journal-tab">
                    <h2 class="mt-4">Existing Journal Information (if proposing to transfer an existing journal)</h2>
                    <div class="note">
                        Fill this section if you are proposing to transfer an existing journal to TerraVeritas.
                    </div>
                    <div class="form-group">
                        <label for="existing_journal_title">Existing Journal Title</label>
                        <input type="text" id="existing_journal_title" name="existing_journal_title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="existing_eic">Editor-in-Chief</label>
                        <input type="text" id="existing_eic" name="existing_eic" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="existing_aims_scope">Aims & Scope</label>
                        <textarea id="existing_aims_scope" name="existing_aims_scope" class="form-control" placeholder="Please briefly describe the main topic and areas this journal covers."></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="existing_website">Website</label>
                                <input type="text" id="existing_website" name="existing_website" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="existing_issn">ISSN</label>
                                <input type="text" id="existing_issn" name="existing_issn" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="current_publisher">Current Publisher</label>
                                <input type="text" id="current_publisher" name="current_publisher" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="journal_owner">Owner of the journal</label>
                                <input type="text" id="journal_owner" name="journal_owner" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="affiliated_society">Affiliated learned society / association (if applicable)</label>
                        <input type="text" id="affiliated_society" name="affiliated_society" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="publishing_model">Current Publishing Model*</label>
                                <select id="publishing_model" name="publishing_model" class="form-control">
                                    <option value="">Select One</option>
                                    <option value="subscription">Subscription</option>
                                    <option value="hybrid">Hybrid</option>
                                    <option value="open_access">Open Access</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="current_volume">Current Volume</label>
                                <input type="text" id="current_volume" name="current_volume" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="publishing_frequency">Publishing Frequency</label>
                        <select id="publishing_frequency" name="publishing_frequency" class="form-control">
                            <option value="">Select One</option>
                            <option value="biannual">Biannual</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="monthly">Monthly</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
            </div>

            <h2 class="mt-4">Personal Information</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">First Name*</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_name">Last Name*</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="affiliation">Affiliation*</label>
                        <input type="text" id="affiliation" name="affiliation" class="form-control" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit Proposal</button>
        </form>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function(){
        $('#proposalTabs a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    });
</script>
@endpush