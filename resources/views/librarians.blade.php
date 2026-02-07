@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.librarians')
@endsection
@section('content')
    <style>
        .pdf-like-content h2 {
            font-family: 'Helvetica', sans-serif;
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }

        .pdf-like-content h3 {
            font-family: 'Helvetica', sans-serif;
            font-size: 20px;
            color: #444;
            font-weight: bold;
        }

        .pdf-like-content p,
        .pdf-like-content li {
            font-family: 'Times New Roman', serif;
            font-size: 16px;
            color: #555;
        }

        .pdf-like-content .table thead th {
            background-color: #e9ecef;
            color: #495057;
        }

        .table-bg {
            background-color: rgb(0 183 255 / 15%) !important;
        }

        p,
        ul li {
            text-align: justify;
        }

        h1,
        h2,
        h3,
        h4,
        p,
        ul li {
            font-size: 12px !important;
        }
    </style>
    <div class="bg-white mt-3 pdf-like-content">
        <div class="m-2 p-2">
            <h2 id="content-access-and-indexing">Content Access and Indexing
            </h2>
            <p>TerraVeritas works closely with academic institutions, indexing services, and external partners to ensure our
                content is widely discoverable and easily accessible. If you are interested in accessing our publications,
                indexing our content, or setting up a deposit feed, our Indexing Team is ready to assist and explore
                tailored solutions with you.
            </p>
            <h2 id="full-text-downloads">Full-Text Downloads
            </h2>
            <p>The full text of all TerraVeritas articles is conveniently available via sFTP. New content is added monthly,
                ensuring timely access to the latest research. For access details, please reach out to our Indexing Team.
            </p>
            <h2 id="crossref-integration">Crossref Integration
            </h2>
            <p>All newly published TerraVeritas metadata is promptly deposited to Crossref, typically within 48 hours of
                publication, helping ensure accurate citation, discoverability, and DOI registration for every article.
            </p>

        </div>
    </div>
@endsection