@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.societies')
@endsection
@section('content')
    <style>
        .pdf-like-content h2 {
            font-family: 'Helvetica', sans-serif;
            font-size: 1.5rem;
            color: #333;
            font-weight: bold;
        }

        .pdf-like-content h3 {
            font-family: 'Helvetica', sans-serif;
            font-size: 1.25rem;
            color: #444;
            font-weight: bold;
        }

        .pdf-like-content p,
        .pdf-like-content li {
            font-family: 'Times New Roman', serif;
            font-size: 1rem;
            color: #555;
        }

        .pdf-like-content .table thead th {
            background-color: #e9ecef;
            color: #495057;
        }

        .table-bg {
            background-color: rgb(0 183 255 / 15%) !important;
        }
    </style>
    <div class="bg-white mt-3 pdf-like-content">
        <div class="m-2 p-2">
            <p>TerraVeritas delivers flexible, end-to-end publishing solutions designed to help societies and journals grow,
                adapt, and succeed in an open-access environment. Whether you are publishing an established journal or
                planning to transition from subscription-based publishing, TerraVeritas provides the expertise and
                infrastructure you need.</p>
            <h2 id="a-true-publishing-partner">A True Publishing Partner</h2>
            <p>We work alongside you as a trusted publishing partner, combining industry experience with hands-on support
                from our editorial and production teams. You stay in full control of editorial decisions and content, while
                we manage the operational complexity behind the scenes.
            </p>
            <h2 id="launch-your-journal-with-confidence">Launch Your Journal with Confidence
            </h2>
            <p>From concept to launch, TerraVeritas helps bring new open-access journals to life. Our experienced editorial
                team handles the technical setup and workflow management, while actively supporting you in attracting your
                first high-quality submissions.
            </p>
            <h2 id="keep-what-yours">Keep What’s Yours
            </h2>
            <p>Your journal remains fully owned by your organization. TerraVeritas manages the publishing process on your
                behalf, offering flexible partnership models tailored to your goals.
            </p>
            <h2 id="seamless-editorial-management">Seamless Editorial Management
            </h2>
            <p>Our professional editorial team manages submissions, coordinates peer review, and oversees post-acceptance
                workflows—ensuring efficiency, quality, and transparency at every stage.
            </p>
            <h2 id="professional-production-quality">Professional Production Quality
            </h2>
            <p>Our in-house production experts transform accepted manuscripts into polished, publication-ready articles. We
                provide copyediting, language editing, XML tagging, and professionally designed PDFs, with full support for
                Word and LaTeX submissions.
            </p>
            <h2 id="global-discoverability">Global Discoverability
            </h2>
            <p>TerraVeritas ensures your content reaches the widest possible audience by registering DOIs through Crossref
                and automatically depositing articles into indexing and abstracting databases where applicable.
            </p>
            <h2 id="marketing-that-builds-impact">Marketing That Builds Impact
            </h2>
            <p>We help amplify your journal’s reach through strategic marketing and promotional activities, including
                conference presence, digital campaigns, newsletters, and targeted stakeholder communications.
            </p>

        </div>
    </div>
@endsection