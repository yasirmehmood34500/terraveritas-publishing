@extends('layouts.main')
@push('style')
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .support-section {
            margin-bottom: 35px;
        }

        .support-section h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.8em;
        }

        .support-section h3 {
            color: #34495e;
            margin-top: 25px;
            margin-bottom: 15px;
            font-size: 1.4em;
        }

        .support-section p {
            margin-bottom: 15px;
            text-align: justify;
        }

        .support-section ul {
            margin-left: 25px;
            margin-bottom: 15px;
        }

        .support-section li {
            margin-bottom: 8px;
        }

        .intro-card {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            border-left: 4px solid #3498db;
        }

        .intro-card h3 {
            color: #2c3e50;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .feature-item {
            margin-bottom: 25px;
            padding-left: 10px;
        }

        .feature-item h4 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 1.1em;
        }

        .feature-item p {
            margin-bottom: 10px;
        }

        .checkmark {
            color: #27ae60;
            font-size: 1.2em;
            margin-right: 5px;
        }

        .highlight-box {
            background-color: #e8f4f8;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
@endpush
@section('left-bar')
    @include('includes.left-bars.editorial-support')
@endsection
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <div class="support-section">
                <h2 class="mb-3">Editorial Support</h2>
                <div class="intro-card">
                    <h3>For Authors</h3>
                    <p>Our strong reputation for delivering high-quality services attracts leading researchers from around
                        the world. We provide outstanding production support and equip authors with effective tools to
                        amplify the reach and impact of their work.</p>
                </div>

                <div class="intro-card">
                    <h3>For Editors</h3>
                    <p>Editors consistently rate their experience with TerraVeritas Publishing as <em>good</em> to
                        <em>excellent</em>. We foster collaborative partnerships and provide expert guidance throughout the
                        editorial process.
                    </p>
                </div>

                <div class="intro-card">
                    <h3>For Societies</h3>
                    <p>At TerraVeritas Publishing, we are deeply committed to society publishing. Our partnerships are
                        rooted in a strong understanding of each society's mission, and we offer strategic support to ensure
                        they stay at the forefront of publishing innovations. Societies benefit from our well-established
                        relationships with vendors and access to the latest industry developments.</p>
                </div>
            </div>

            <div class="support-section">
                <h2>Journal Development & Editorial Support</h2>

                <h3>Strategic Journal Growth</h3>

                <p>Our expert publishing team works closely with editors to enhance journal visibility, usage, and impact.
                    We support development efforts through:</p>

                <ul>
                    <li>Thematic calls for papers</li>
                    <li>Campaigns for special issues and key content</li>
                    <li>Integrated digital outreach via social media and virtual collections</li>
                </ul>

                <p>We rely on detailed reporting and evidence-based strategies to guide every aspect of journal development.
                </p>
            </div>

            <div class="support-section">
                <h2>Robust Editorial Support for Societies</h2>

                <div class="feature-item">
                    <h4><span class="checkmark">✅</span> Online Manuscript Submission & Peer Review System</h4>
                    <p>Our widely used submission system reduces administrative workload, sends automated reviewer
                        reminders, and includes customizable reporting tools. The system is tailored to each journal's
                        workflow and backed by a dedicated in-house support team.</p>
                </div>

                <div class="feature-item">
                    <h4><span class="checkmark">✅</span> Citation Metrics & Impact Factor Growth</h4>
                    <p>We provide editorial teams with actionable citation data to inform strategic decisions. We also
                        manage applications for inclusion in indexing and abstracting services such as DOAJ, SCOPUS, and
                        ESCI.</p>
                </div>

                <div class="feature-item">
                    <h4><span class="checkmark">✅</span> Comprehensive Reporting</h4>
                    <p>Receive detailed reports including:</p>
                    <ul>
                        <li>Usage statistics</li>
                        <li>Citation and competitor analysis</li>
                        <li>Author satisfaction and feedback</li>
                    </ul>
                    <p>These insights support continuous editorial improvement.</p>
                </div>

                <div class="feature-item">
                    <h4><span class="checkmark">✅</span> Global Marketing & Outreach</h4>
                    <p>Our international sales and marketing efforts help broaden your journal's reach, attracting global
                        submissions and expanding readership.</p>
                </div>

                <div class="feature-item">
                    <h4><span class="checkmark">✅</span> Increased Online Visibility</h4>
                    <p>We deliver journals via a high-quality online platform that ensures seamless access and maximized
                        discoverability.</p>
                </div>

                <div class="feature-item">
                    <h4><span class="checkmark">✅</span> Editorial Independence</h4>
                    <p>We fully respect and uphold the editorial independence of each journal we publish.</p>
                </div>

                <div class="feature-item">
                    <h4><span class="checkmark">✅</span> Rights & Permissions</h4>
                    <p>Our legal team manages copyright, permissions, and provides guidance on intellectual property and
                        plagiarism issues.</p>
                </div>

                <div class="feature-item">
                    <h4><span class="checkmark">✅</span> Commitment to Publishing Ethics</h4>
                    <p>As a member and supporter of the Committee on Publication Ethics (COPE), we adhere to the highest
                        standards of integrity. Our dedicated Ethics and Quality Committee ensures all partners benefit from
                        industry-leading ethical practices and expert support.</p>
                </div>
            </div>

        </div>
    </div>
@endsection
