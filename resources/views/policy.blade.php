@extends('layouts.main')
@push('style')
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .policy-section {
            margin-bottom: 30px;
        }

        .policy-section h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .policy-section h3 {
            color: #34495e;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .policy-section ul {
            margin-left: 20px;
        }

        .policy-section li {
            margin-bottom: 10px;
        }

        .policy-section p {
            margin-bottom: 15px;
        }

        .cc-license {
            display: inline-block;
            vertical-align: middle;
        }

        .form-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .form-table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .form-table td:first-child {
            background-color: #f8f9fa;
            font-weight: bold;
            width: 30%;
        }

        .workflow-diagram {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
@endpush
@section('left-bar')
    @include('includes.left-bars.journals')
@endsection
@section('content')
    <div class="bg-white mt-3">
        <div class="m-2 p-2">
            <div class="policy-section">
                <h2>1. PUBLICATION ETHICS POLICY</h2>

                <p>The authors must follow the code of conduct and guidelines of the <a href="https://publicationethics.org/"
                        target="_blank"><strong>Committee on Publication Ethics (COPE)</strong></a> when misconduct is
                    suspected or alleged. The following issues are highlighted.</p>

                <ul>
                    <li><strong>Originality and plagiarism:</strong> The authors should ensure that their work is original,
                        and if the authors have used the work and/or words of others, then this must be appropriately cited
                        or quoted.<br><br>
                        Please note that we use <a href="https://www.turnitin.com/divisions/research-publication"
                            target="_blank"><strong>Turnitin</strong></a> to screen manuscripts for plagiarism/similarity
                        risks. By submitting the manuscript to the journal, the authors agree to any originality checks the
                        manuscript may undergo during peer-review and production processes.</li>

                    <li><strong>Data access and retention:</strong> Authors may be asked to provide raw data in connection
                        with a paper for editorial review and should be prepared to provide public access to such data.</li>

                    <li><strong>Multiple, redundant, or concurrent publication:</strong> An author should not publish
                        manuscripts describing essentially the same research in more than one journal or primary
                        publication.</li>
                </ul>

                <p>Where author or peer reviewer misconduct is identified, a due process will be followed to investigate the
                    issue, giving those involved a right to appeal in a formal way. The publisher and editor(s) will deal
                    with the allegations of research misconduct according to COPE guidelines.</p>
            </div>

            <div class="policy-section">
                <h2>2. EDITORIAL PROCEDURE AND PEER-REVIEW POLICY</h2>

                <p>The Editor-in-Chief and Managing Editor are responsible for ensuring that all manuscripts meet the
                    academic standards fit for publication and are published in a timely fashion. The editors oversee each
                    article's individual progress through the journal's submission system and are responsible for liaising
                    with authors, reviewers, and Editorial office.</p>

                <div class="workflow-diagram">
                    <!-- Note: Replace with actual workflow diagram image -->
                    <img src="path/to/workflow-diagram.png" alt="Editorial Workflow Diagram"
                        style="max-width: 100%; height: auto;">
                </div>

                <h3>Initial Checks</h3>
                <p>All submitted manuscripts received by the Editorial Office are checked by a professional in-house staff
                    to determine whether the manuscripts are properly prepared and follow the ethical policies of the
                    journal. Manuscripts that are not properly prepared are returned to the authors for revision and
                    resubmission. The manuscripts that do not fit the journal's scope or do not meet the standards of the
                    journal or scientifically insignificant are rejected before peer-review by the Managing Editor.</p>

                <h3>Peer Review</h3>
                <p>Once a manuscript passes the initial checks, it is assigned to at least two independent outside experts
                    for peer-review by a Subject Editor. Potential reviewers suggested by the authors may also be
                    considered. However, the reviewers should not have published with any of the authors during the past
                    five years and should not currently work or collaborate with any of the institutions of the authors of
                    the submitted manuscript. Peer review comments are confidential and are only disclosed with the
                    corresponding author keeping the anonymity of the reviewer.</p>

                <p>If a revision is invited, the corresponding author submits the revised manuscript, and the final decision
                    is taken by the relevant Subject Editor based on the information gained through the peer-review process.
                </p>

                <h3>Editors and Editorial Staff as Authors</h3>
                <p>Editorial staff/editors shall remove themselves from the decision-making process of their own academic
                    work submitted to the journal. Submissions authored by editorial staff/editors will be assigned to at
                    least two independent outside reviewers by another subject editor who do not have a Conflict of Interest
                    with the author and similarly the decision shall be made by the same subject editor. In such cases, the
                    review process must be made as transparent and rigorous as possible. Every effort shall be made to
                    minimize any bias in the review process by having another subject editor handle the peer review
                    procedure independently. Further, it is suggested that the subject editor send the article out for
                    review without any author names and affiliations on it.</p>

                <h3>Editorial Decision</h3>
                <p>The Subject Editor will communicate the decision, which will be one of the following:</p>

                <ul>
                    <li><strong><em>Accept after Minor Revisions:</em></strong><br>
                        The paper is in principle accepted after revision based on the reviewer's comments. Authors are
                        given 7 days for minor revisions.</li>

                    <li><strong><em>Reconsider after Major Revisions:</em></strong><br>
                        The acceptance of the manuscript would depend on the revisions. The author needs to provide a
                        point-by-point response to the reviewer's comments. Usually, only one round of major revisions is
                        allowed. Authors are asked to resubmit the revised paper within a suitable time frame, and the
                        revised version is returned to the reviewer for further comments.</li>

                    <li><strong><em>Reject:</em></strong><br>
                        The article has serious flaws, and/or makes no significant contribution. No offer of resubmission to
                        the journal is provided.</li>
                </ul>

                <h3>Manuscript Withdrawal</h3>
                <p>It is possible that authors may wish to withdraw their manuscript after submission to the journal.
                    Possible reasons could include major technical error, or the desire to submit the results to a different
                    journal. In all such cases, manuscripts can of course be withdrawn at the author's discretion.</p>

                <h3>Author Appeals</h3>
                <p>Authors may appeal a rejection by sending an e-mail to the Editorial Office of the journal. The appeal
                    must provide detailed justification, including point-by-point responses to the reviewer's comments. The
                    Managing Editor of the journal will forward the manuscript and related information (including the
                    identities of the referees) to the Editor-in-Chief or Editorial Board member to give an advisory
                    recommendation on the manuscript and may recommend acceptance, further peer-review, or uphold the
                    original rejection decision. A rejection at this stage is final and cannot be reversed.</p>

                <h3>Production and Publication</h3>
                <p>Once accepted, the manuscript will undergo professional copy-editing, English editing, proofreading by
                    the authors, final corrections, pagination, and publication on the journal website.</p>
            </div>

            <div class="policy-section">
                <h2>3. AI POLICY</h2>

                <p>Authors should follow <a href="https://publicationethics.org/cope-position-statements/ai-author"
                        target="_blank"><strong>COPE guidelines</strong></a> and disclose in their manuscript the use of AI
                    and AI-assisted technologies in the writing process by following the instructions below. A statement
                    will appear in the published work. Please note that authors are ultimately responsible and accountable
                    for the contents of the work.</p>

                <p><strong>Disclosure instructions:</strong> Authors must disclose the use of generative AI and AI-assisted
                    technologies in the writing process by adding a statement at the end of their manuscript in the core
                    manuscript file before the References list. The statement should be placed in a new section entitled
                    'Declaration of Generative AI and AI-assisted technologies in the writing process'.</p>

                <p><strong>Statement:</strong> "During the preparation of this work the author(s) used [Name Tool/Service]
                    to [Reason]. After using this tool/service, the author(s) reviewed and edited the content as needed and
                    take(s) full responsibility for the content of the publication". However, this declaration does not
                    apply to the use of basic tools for checking grammar, spelling, references etc. If there is nothing to
                    disclose, there is no need to add a statement.</p>
            </div>

            <div class="policy-section">
                <h2>4. CORRECTIONS AND RETRACTIONS POLICY</h2>

                <p>A clear policy regarding corrections and retractions is defined which differentiate among Addendum,
                    Erratum, Corrections, Retractions (or Partial Retractions), and Comments.</p>

                <p><strong>Addendum:</strong> If crucial results (e.g., additional affiliation, clarify some aspect of
                    methods/analysis, etc.) were unintentionally omitted from the original publication, the original article
                    can be amended through an Addendum. The Addendum will be published, with article numbers added, in the
                    current issue of the journal. A hyperlink to the Addendum will also be added to the original
                    publication, but the original paper does not need to be updated.</p>

                <p><strong>Erratum:</strong> Errata should be published for scientifically relevant formatting changes, or
                    changes to authorship if the author or contributor list is incorrect when a deserving author has been
                    omitted or somebody who does not meet authorship criteria has been included. Scientifically relevant
                    formatting issues that require an Erratum might include missing or unclear figures, or errors introduced
                    during proofreading (e.g., missing text). Minor errors that do not affect readability or meaning (e.g.,
                    spelling or grammatical errors) do not qualify for an Erratum. All authors should proofread the final
                    version carefully.</p>

                <p><strong>Corrections:</strong> Corrections should be submitted for any scientifically relevant errors in
                    published articles. 1) Any changes may be evaluated by the academic editors. 2) Any changes after
                    publication that affect the scientific interpretation (e.g., changes to a misleading portion of an
                    otherwise reliable publication, an error in a figure, error in data that does not affect conclusions, or
                    addition of missing details about a method) are announced using a Correction. This is a separate
                    publication that links to the original paper, which is updated. A note will also be added to the Article
                    Versions Notes and to the abstract page, which tells the readers that an updated version was uploaded.
                </p>

                <p><strong>Retractions:</strong> Sometimes an article needs to be completely removed from the body of
                    research literature. This could be due to inadvertent errors made during the research process, gross
                    ethical breaches, fabrication of data, large amounts of plagiarism, or other reasons. Such articles
                    threaten the integrity of scientific records and need to be retracted. SIA follows the recommendations
                    of the <a href="https://publicationethics.org/" target="_blank"><strong>Committee on Publication
                            Ethics</strong></a> (COPE) for retraction. Potential Retractions are thoroughly investigated by
                    the Editorial Office with the support of the Editorial Board and final approval by the Editor-in-Chief.
                    Other people and institutions will be consulted as necessary, including university authorities, or
                    experts in the field. If a Retraction is published, the original publication is amended with a "<a
                        href="https://publicationethics.org/retraction-guidelines"
                        target="_blank"><strong>RETRACTED</strong></a>" watermark, but will still be available on the
                    journal's website for future reference. However, retracted articles should not be cited and used for
                    further research, as they cannot be relied upon. Retractions are published using the same authorship and
                    affiliation as the article being retracted, with page numbers added, as a separate item in the current
                    issue of the journal. That way, so that after the issue is released, the Retraction can be marked within
                    the indexing databases. Partial Retractions might be published in cases where results are only partially
                    wrong. A paper will only be completely removed in very exceptional circumstances, where leaving it
                    online would constitute an illegal act or be likely to lead to significant harm. Expression of Concern
                    for complex, inconclusive, or prolonged situations, an Expression of Concern may be published. If
                    investigations into alleged or suspected research misconduct have not yet been completed or prove to be
                    inconclusive, an editor or journal may wish to publish an Expression of Concern, detailing the points of
                    concern and what actions, if any, are in progress.</p>
            </div>

            <div class="policy-section">
                <h2>5. ARCHIVING POLICY</h2>

                <p>The Editorial office is committed to the permanent availability and preservation of scholarly research
                    with <a href="https://archive.org/details/@journal_of_global_innovations_in_agricultural_sciences_jgias"
                        target="_blank"><strong>INTERNET ARCHIVE</strong></a>. Moreover, the Editorial office allows
                    self-archiving of accepted and published papers through open access policy. Authors retain the copyright
                    of their work and can archive pre-print and post-print or publisher's version/PDF to personal or
                    institutional repositories or libraries without requiring permission from the journal or publisher.</p>
            </div>

            <div class="policy-section">
                <h2>6. REPOSITORY POLICY</h2>

                <p>We support authors in letting people know about the work that they have published through Open Access
                    under a <a href="https://creativecommons.org/about/cclicenses"
                        target="_blank"><strong>CC-BY</strong></a> license. The Editorial Office also shares a <a
                        href="https://www.doi.org/" target="_blank"><strong>DOI-Link</strong></a> to the final published
                    version as it always securely directs people to the correct page even if the website URL changes.
                    Authors are recommended to use their <strong>ORCiD</strong> when submitting an article for consideration
                    or acquire an ORCiD via the submission process.</p>
            </div>

            <div class="policy-section">
                <h2>7. ADVERTISING POLICY</h2>

                <ul>
                    <li>The editorial decisions are independent of advertisements and sponsored publications. The decision
                        to publish a manuscript does not depend upon monetary or commercial interests.</li>

                    <li>The advertisement should clearly describe the product or service being offered and it should clearly
                        identify the sponsor or manufacturer.</li>

                    <li>The author should ensure that the advertisement complies with the rules and regulations of marketing
                        and the sales of the product being advertised.</li>

                    <li>The articles promoting injurious or hazardous products will not be accepted.</li>

                    <li>Any article advertising a product that is considered inappropriate by the standards of the journal
                        will be declined.</li>

                    <li>Articles advertising any product will not be accepted.</li>
                </ul>
            </div>

            <div class="policy-section">
                <h2>8. MARKETING POLICY</h2>

                <p>To ensure that all communications representing the journal are of high quality, consistent and accurate,
                    conform to policy approved by the <a href="https://societyfia.org/" target="_blank"><strong>Society for
                            Innovative Agriculture</strong></a> (SIA) and adhere to style and standards guidelines, it is
                    the policy that all communications be reviewed and approved by the Editorial office.</p>
            </div>

            <div class="policy-section">
                <h2>9. PLAGIARISM POLICY</h2>

                <p>The journal uses plagiarism detection software <a href="https://www.turnitin.com/"
                        target="_blank"><strong>Turnitin</strong></a> to screen the submissions. If plagiarism is
                    identified, the <a href="https://publicationethics.org/" target="_blank"><strong>COPE</strong></a>
                    guidelines on plagiarism are followed. The journal also follows Higher Education Commission, Pakistan
                    plagiarism guidelines.</p>
            </div>

            <div class="policy-section">
                <h2>10. AUTHORSHIP ISSUES OR DISPUTES</h2>

                <p>In the case of an authorship dispute during peer review or after acceptance and publication, the
                    Editorial office will not be able to investigate or adjudicate. Authors will be asked to resolve the
                    dispute themselves. If they are unable, the Editorial office reserves the right to withdraw manuscript
                    from the editorial process or in case of a published paper, raise the issue with the authors'
                    institution(s) and abide by its guidelines.</p>
            </div>

            <div class="policy-section">
                <h2>11. COPYRIGHT AND LICENSE TERM <span class="cc-license">🅭🅯</span></h2>

                <p>We publish Open Access articles under the <a href="https://creativecommons.org/about/cclicenses/"
                        target="_blank"><strong>Creative Commons Attribution License.</strong></a> Authors of open access
                    articles published in this journal retain the copyright of their articles and are free to reproduce and
                    disseminate their work.</p>
            </div>

            <div class="policy-section">
                <h2>12. AUTHOR NAME CHANGE POLICY</h2>

                <p>Changes in authorship, including the addition of authors, the removal of authors, or the reordering of
                    authors, must comply with our authorship criteria. In case of any change of authorship, the
                    corresponding author has the responsibility of obtaining the consent of all authors.</p>

                <h3>What kind of changes are covered by this policy?</h3>

                <ul>
                    <li>Any request for the change to authorship, after an article has been accepted, may be rejected if
                        clear reasons and evidence of author contribution are not provided. If a change of authorship is
                        necessary after the article has been published, this will be addressed by publishing a correction.
                    </li>

                    <li>Some authors might wish to change their name on published articles. In such cases, Editorial office
                        will update and republish the article.</li>
                </ul>

                <h3>How will changes be displayed?</h3>

                <p>Editorial offices are aware that name changes can be sensitive and/or private in nature, for a variety of
                    reasons that may include alignment with gender identity, marriage, divorce, or religious conversion.
                    Therefore, to protect author identity, an Erratum will not be published, and co-authors will not be
                    notified of any change unless the author explicitly chooses to include a public notice alongside the
                    name change request. The article DOI will remain the same. The PDF and the XML of the article will be
                    changed, and the updated metadata will be re-delivered to indexing agencies and third parties; however,
                    the Editorial office cannot guarantee changes on other platforms or databases. Similarly, the Editorial
                    office is unable to update citations to articles in which a name change has occurred.</p>

                <h3>How do you request a change?</h3>

                <p>To request a name change, please fill out the form below with your request, the DOIs of the manuscript(s)
                    in question, and confirmation as to whether you permit the Editorial office to contact the co-authors to
                    inform them of the change. The completed form will be sent to a dedicated inbox, which is accessed and
                    managed by an employee. The author will receive proof of the changes and ask to review and approve this
                    before publication.</p>

                <table class="form-table">
                    <tr>
                        <td>Previously Published Name*</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Name update</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Pronoun update</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Email contact*</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Article DOI*</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Would you like to inform your co-authors on your behalf?<br>(selecting "No" ensures complete
                            privacy)</td>
                        <td>Yes &nbsp;&nbsp; No</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
