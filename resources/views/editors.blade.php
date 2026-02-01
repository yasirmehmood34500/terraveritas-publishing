@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.editors')
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

        .pdf-like-content h4 {
            font-family: 'Helvetica', sans-serif;
            font-size: 1.15rem;
            color: #444;
            font-weight: bold;
            margin-top: 1.5rem;
        }

        .pdf-like-content p,
        .pdf-like-content li {
            font-family: 'Times New Roman', serif;
            font-size: 1rem;
            color: #555;
        }

        .pdf-like-content ul {
            padding-left: 20px;
        }
    </style>
    <div class="bg-white mt-3 pdf-like-content">
        <div class="m-2 p-2">
            <h2 class="border-bottom pb-2 mb-4">Editorial Board Responsibilities</h2>

            <h4 id="editor-in-chief">Editor-in-Chief</h4>
            <p>The Editor-in-Chief provides academic leadership and strategic direction for the journal and serves as the
                primary guarantor of its scholarly quality, integrity, and development. The Editor-in-Chief oversees the
                journal's editorial operations to ensure that published content meets internationally recognized standards
                of peer review, research ethics, and academic rigor, in line with the requirements of Scopus and Web of
                Science. The Editor-in-Chief works closely with the Editorial Board and the Editorial Office to ensure
                efficient manuscript handling while maintaining full editorial independence and transparency in
                decision-making.</p>

            <strong>Key Responsibilities</strong>
            <ul>
                <li>Provide scholarly leadership and act as the principal academic representative of the journal, the
                    publisher (TerraVeritas), and open access publishing within the research community.</li>
                <li>Define, review, and refine the journal's aims and scope to ensure scientific relevance, coherence, and
                    alignment with the journal’s objectives.</li>
                <li>Appoint and invite qualified, internationally recognized researchers to serve on the Editorial Board,
                    ensuring disciplinary expertise and geographic diversity.</li>
                <li>Propose and approve topics for Special Issues and thematic collections, ensuring academic relevance and
                    editorial oversight.</li>
                <li>Provide guidance and support to Section Editors, Editorial Board Members, and editorial staff, as
                    needed, while preserving editorial independence.</li>
                <li>Maintain oversight of the peer-review process and take final responsibility for editorial decisions on
                    individual manuscripts following peer review and revision.</li>
                <li>Ensure that peer review is conducted in accordance with TerraVeritas’ peer-review policies, ethical
                    standards, and international best practices (e.g., COPE guidelines).</li>
                <li>Uphold publication ethics, including the handling of conflicts of interest, research misconduct, and
                    appeals.</li>
                <li>Chair the annual Editorial Board meeting and contribute to the strategic evaluation and continuous
                    improvement of the journal.</li>
            </ul>

            <h4 id="managing-editor">Managing Editor</h4>
            <p>The Managing Editor supports the effective operation and strategic development of the journal through close
                coordination with the Editor-in-Chief, the Publishing Manager, and relevant TerraVeritas staff. The Managing
                Editor ensures timely communication, operational continuity, and adherence to established editorial policies
                and publishing standards. Working under the academic leadership of the Editor-in-Chief, the Managing Editor
                ensures efficient and quality of Editorial Board performance.</p>

            <strong>Key Responsibilities</strong>
            <ul>
                <li>Maintain regular and effective communication with the Editor-in-Chief, Publishing Manager, and
                    TerraVeritas editorial teams, responding promptly to requests for support.</li>
                <li>Advise the Editor-in-Chief and Subject Editor(s) on the strategic development, positioning, and
                    long-term sustainability of the journal.</li>
                <li>Provide guidance on the definition, review, and refinement of the journal’s Aims and Scope at both
                    journal and section levels.</li>
                <li>Support and advise Editorial Board Members and editorial staff in the execution of their roles, as
                    required.</li>
                <li>Oversee the editorial workflow for manuscripts within assigned sections, including responsibility for
                    final editorial decisions following peer review and author revisions, in accordance with journal
                    policies.</li>
                <li>Propose and support the development of Special Issues and thematic collections, including the
                    identification and invitation of qualified Guest Editors.</li>
                <li>Identify and invite suitably qualified and internationally recognized researchers to serve on the
                    Editorial Board, ensuring appropriate subject expertise and diversity.</li>
                <li>Act as an academic and professional representative of the journal, TerraVeritas, and open access
                    publishing within the scholarly community.</li>
            </ul>

            <hr class="my-4">

            <h2 id="advisory-board-members">Advisory Board Members</h2>
            <p>Advisory Board Members provide independent, expert guidance to the Editor-in-Chief on the strategic
                development, academic direction, and policy framework of the journal. Their role is consultative in nature
                and supports the maintenance of high scholarly standards, ethical publishing practices, and long-term
                journal sustainability.</p>

            <strong>Key Responsibilities</strong>
            <ul>
                <li>Provide expert assessment and guidance on new manuscript submissions when required, including cases
                    involving potential conflicts of interest or complex editorial considerations.</li>
                <li>Recommend topics for Special Issues and advise on the establishment of new sections to ensure the
                    journal’s continued relevance and disciplinary coverage.</li>
                <li>Contribute feedback on journal policies, editorial procedures, and ethical guidelines to support
                    continuous improvement and alignment with international publishing standards.</li>
                <li>Support the visibility and reputation of the journal by promoting it within academic networks and at
                    relevant scholarly meetings and conferences.</li>
                <li>Participate in Advisory and Editorial Board meetings and contribute to discussions on strategic planning
                    and journal development.</li>
                <li>Assist the Editor-in-Chief, when requested, in the resolution of appeals, complaints, and ethical
                    issues, in accordance with established publication ethics and best-practice guidelines.</li>
            </ul>

            <hr class="my-4">

            <h2 id="subject-editors">Subject Editors</h2>
            <p>Subject Editors are appointed based on their recognized research expertise and are assigned responsibility
                for specific subject areas or categories. They work in collaboration with the Editorial Boards across the
                TerraVeritas journal portfolio to strengthen subject coverage, support topical development, and enhance the
                academic visibility of the journals. Subject Editors contribute to the strategic development of subject
                areas while upholding the journal’s editorial policies, peer-review standards, and ethical guidelines.</p>

            <strong>Key Responsibilities</strong>
            <ul>
                <li>Conduct initial assessments of newly submitted manuscripts within their area of expertise to evaluate
                    suitability, originality, and alignment with the journal’s aims and scope.</li>
                <li>Make editorial recommendations and, where delegated, final editorial decisions on manuscripts following
                    peer review and revision, in accordance with journal policies.</li>
                <li>Lead, edit, or supervise at least one Special Issue or thematic collection during their term, ensuring
                    academic relevance and editorial oversight.</li>
                <li>Support the recruitment of high-quality submissions by engaging established researchers and encouraging
                    early-career scholars to contribute to the journal or participate in topical advisory initiatives.</li>
                <li>Provide constructive input on journal policies, editorial procedures, and strategic development
                    initiatives.</li>
                <li>Promote the journal within professional networks and at relevant academic conferences and events.</li>
                <li>Participate in Editorial Board meetings and contribute to discussions on journal performance, scope
                    development, and long-term strategy.</li>
                <li>Serve as peer reviewers when requested, ensuring fair, timely, and confidential evaluation of
                    manuscripts.</li>
                <li>Contribute to the development of subject-area strategies by proposing new topical initiatives and
                    identifying emerging research trends.</li>
                <li>Collaborate with academic institutions, research centers, and scholarly networks to support the
                    development and promotion of subject-focused topics.</li>
                <li>Identify and invite suitably qualified and internationally recognized researchers to serve as Subject
                    Editors or contributors within the relevant category.</li>
                <li>Invite established and emerging scholars to submit high-quality manuscripts aligned with the journal’s
                    aims and scope.</li>
                <li>Recommend themes, subject areas, and appropriate journals within the TerraVeritas portfolio for the
                    development of topical collections or initiatives.</li>
            </ul>

            <hr class="my-4">

            <h2 id="editorial-staff">Editorial Staff</h2>
            <p>The Editorial Staff support the editorial decision-making process by conducting essential compliance, ethics,
                and research integrity checks to ensure that all submissions meet the journal’s policies and internationally
                accepted publishing standards. These checks are performed in accordance with TerraVeritas guidelines and do
                not interfere with the academic independence of editorial decisions.</p>

            <strong>Key Responsibilities</strong>
            <ul>
                <li>Verify the presence of appropriate ethics committee approvals and permissions for research involving
                    human participants, animals, biological samples, or cell lines, where applicable.</li>
                <li>Screen submissions for plagiarism, redundant or duplicate publication, and confirm that necessary
                    permissions have been obtained for the reuse of copyrighted material, including figures, tables, and
                    images.</li>
                <li>Confirm the registration of clinical trials in recognized public registries and ensure that registration
                    details are appropriately cited within the Materials and Methods section.</li>
                <li>Conduct additional compliance, ethical, and research integrity checks as required under TerraVeritas
                    policies, journal guidelines, and internationally recognized best practices.</li>
                <li>Promote subject-area topics and journal initiatives through academic conferences, professional networks,
                    and relevant scholarly communication channels, including appropriate use of social media.</li>
            </ul>
        </div>
    </div>
@endsection