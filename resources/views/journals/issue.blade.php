@extends('layouts.journal')
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h2 class="mb-3">Special Issues</h2>
            <p class="mb-3">
                Accounting and Auditing publishes Special Issues to create collections of papers on specific topics, with
                the aim of building a community of authors and readers to discuss the latest research and develop new ideas
                and research directions. Special Issues are led by Guest Editors, who are experts on the topic and all
                Special Issue submissions follow MDPI's standard editorial process. The journal’s Editor-in-Chief and/or
                designated Editorial Board Member will oversee Guest Editor appointments and Special Issue proposals,
                checking their content for relevance and ensuring the suitability of the material for the journal. The
                papers published in a Special Issue will be collected and displayed on a dedicated page of the journal’s
                website. Further information on MDPI's Special Issue policies and Guest Editor responsibilities can be found
                here. For any inquiries related to a Special Issue, please contact the Editorial Office.
            </p>

            <div class="row mb-3">

                <div class="col-lg-4">
                    <label for="">Search by Title/Keyword</label>
                    <input type="text" placeholder="search..." class="form-control">
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4 mt-4"><button type="button" class="btn btn-outline-dark w-100">Go</button></div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-4">
                    <label for="">Order results</label>
                    <select name="" id="" class="form-select">
                        <option value="">Submission Deadline</option>
                        <option value="">2</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="">Display</label>
                    <select name="" id="" class="form-select">
                        <option value="">Open Special Issue</option>
                        <option value="">2</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="">Results Per Page</label>
                    <select name="" id="" class="form-select">
                        <option value="">50</option>
                        <option value="">2</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="mt-4">
                <div class="mb-3">
                    <h4><a class="text-decoration-none text-dark" href="">Rethinking ESG and CSR: Advancing
                            Transparency and Integrity in Corporate Governance</a></h4>
                    <div class="d-flex">
                        <span class="me-2">edited by</span>
                        <span class="me-2">
                            <img src="https://dummyimage.com/30x30/cccccc/000000.png&text=40x40" alt="Profile"
                                class="rounded-circle img-fluid" style="object-fit:cover;">
                        </span>
                        <span class="me-2 fw-medium"><a class="text-decoration-none text-dark" href="">Ioannis
                                Passas</a></span>
                    </div>
                    <span>Keywords: ESG reporting standards; corporate social responsibility (CSR); transparency in
                        corporate governance; sustainability; auditing and assurance; ethical leadership; risk management;
                        ESG Controversies; financial performance; corporate integrity</span>
                </div>
                <hr>

                <div class="mb-3">
                    <h4><a class="text-decoration-none text-dark" href="">Rethinking ESG and CSR: Advancing
                            Transparency and Integrity in Corporate Governance</a></h4>
                    <div class="d-flex">
                        <span class="me-2">edited by</span>
                        <span class="me-2">
                            <img src="https://dummyimage.com/30x30/cccccc/000000.png&text=40x40" alt="Profile"
                                class="rounded-circle img-fluid" style="object-fit:cover;">
                        </span>
                        <span class="me-2 fw-medium"><a class="text-decoration-none text-dark" href="">Ioannis
                                Passas</a></span>
                    </div>
                    <span>Keywords: ESG reporting standards; corporate social responsibility (CSR); transparency in
                        corporate governance; sustainability; auditing and assurance; ethical leadership; risk management;
                        ESG Controversies; financial performance; corporate integrity</span>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
