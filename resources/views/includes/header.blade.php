<style>
    .logo-text.modern {
        font-family: 'Poppins', sans-serif;
        color: #002b5c;
        /* Strong navy */
        font-size: 1.2rem;
        font-weight: 600;
        /* text-transform: uppercase; */
        letter-spacing: 1px;
    }
</style>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Left side login/signup -->
            <div class="d-flex align-items-center order-lg-0">
                <a class="navbar-brand d-flex align-items-center text-decoration-none" href="{{ route('index') }}">
                    <img src="{{ asset('assets/imgs/logo-new.jpg') }}" alt="Logo" class="header-logo me-2"
                        style="width: 50px; height: auto;">
                    <span class="logo-text modern">
                        TerraVeritas Publishing
                    </span>
                </a>
            </div>




            <!-- Center menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center order-lg-1" id="navbarMenu">
                <ul class="navbar-nav mb-2 mb-lg-0 text-center">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('journals') }}">Journals</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            For Authors
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"
                                    href="{{ route('guide_for_author') }}#submission-checklist">Submission Checklist</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('guide_for_author') }}#journal-publishing-schedule">Journal
                                    Publishing Schedule</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('guide_for_author') }}#manuscript-submission">Manuscript
                                    Submission</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('guide_for_author') }}#editorial-procedure">Editorial Procedure and
                                    Peer-Review</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('guide_for_author') }}#manuscript-preparation">Manuscript
                                    Preparation</a></li>
                            <li><a class="dropdown-item" href="{{ route('guide_for_author') }}#citation-style">Citation
                                    and Reference Style</a></li>
                            <li><a class="dropdown-item" href="{{ route('guide_for_author') }}#tables-figures">Tables
                                    and Figures</a></li>
                            <li><a class="dropdown-item" href="{{ route('guide_for_author') }}#revenue-sources">Revenue
                                    Sources</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('guide_for_author') }}#article-printing-charges">Article Printing
                                    Charges</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            For Reviewer
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"
                                    href="{{ route('information_for_reviewer') }}#what-is-peer-review">What is peer
                                    review?</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('information_for_reviewer') }}#benefits-of-peer-review">Benefits of
                                    peer review</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('information_for_reviewer') }}#improving-effectiveness">Improving
                                    effectiveness</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('information_for_reviewer') }}#types-of-peer-review">Types of Peer
                                    Review</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('information_for_reviewer') }}#how-to-perform-a-peer-review">How to
                                    perform a peer review</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('information_for_reviewer') }}#becoming-a-reviewer">Becoming a
                                    reviewer</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('information_for_reviewer') }}#recognition-for-reviewers">Recognition
                                    for reviewers</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('information_for_reviewer') }}#reviewer-resources">Reviewer’s
                                    resources</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEditorial" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Editorial
                            Support
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownEditorial">
                            <li><a class="dropdown-item" href="{{ route('editorial_support') }}#for-authors">For
                                    Authors</a></li>
                            <li><a class="dropdown-item" href="{{ route('editorial_support') }}#for-editors">For
                                    Editors</a></li>
                            <li><a class="dropdown-item" href="{{ route('editorial_support') }}#for-societies">For
                                    Societies</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('editorial_support') }}#journal-development">Journal Development</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('editorial_support') }}#editorial-support-societies">Support for
                                    Societies</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPolicy" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Policy
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownPolicy">
                            <li><a class="dropdown-item" href="{{ route('policy') }}#research-ethics">Research Ethics
                                    Policy</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#publication-ethics">Publication
                                    Ethics</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#ai-policy">Artificial
                                    Intelligence Use Policy</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#citation-policy">Citation
                                    Policy</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('policy') }}#corrections-retractions">Corrections and Retractions
                                    Policy</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#archiving-policy">Archiving
                                    Policy</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#repository-policy">Repository
                                    Policy</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#advertising-policy">Advertising
                                    Policy</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#marketing-policy">Marketing
                                    Policy</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#plagiarism-policy">Plagiarism
                                    Policy</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#authorship-issues">Authorship
                                    Issues or Disputes Policy</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#copyright-license">Copyright and
                                    License Term</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#open-access">Open Access /
                                    Copyright</a></li>
                            <li><a class="dropdown-item" href="{{ route('policy') }}#author-name-change">Author Name
                                    Change Policy</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            @if (request()->route('abbr'))
                <!-- Right side logo -->
                <div class="order-lg-2">
                    <a href="https://{{ request()->route('abbr') }}.terraveritaspublishing.com/login"
                        class="btn btn-outline-primary btn-login">Login</a>
                    {{-- <a href="#" class="btn btn-primary btn-signup">Signup</a> --}}
                </div>
            @endif
        </div>
    </nav>
</div>
