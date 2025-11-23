@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.information-for-reviewer')
    @if (request()->route('abbr'))
        @include('includes.journal.left-bar')
    @endif
@endsection
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h2 class="mb-3">Information for Reviewer</h2>

            <h2 id="what-is-peer-review">What is peer review?</h2>
            <p>Peer review is the process where experts from a specific field or discipline evaluate the quality of a peer’s
                research to assess the validity, quality and often the originality of articles for publication. It is the
                foundation for safeguarding the quality and integrity of scholarly research.</p>

            <h2 id="benefits-of-peer-review">Benefits of peer review</h2>
            <ul>
                <li><strong>Enhances quality:</strong> It improves the overall quality of research by providing authors with
                    constructive feedback and suggestions for revision.</li>
                <li><strong>Identifies errors:</strong> Peer reviewers may identify inaccuracies, methodological issues and
                    gaps in reasoning.</li>
                <li><strong>Facilitates collaboration:</strong> Peer review fosters connections between authors and
                    reviewers, potentially leading to collaborations and further research opportunities.</li>
            </ul>
            <p>The peer review process isn’t perfect as the peer review as a human activity. Despite peer review, some
                articles still contain inaccuracies, and many rejected papers find publication elsewhere.</p>

            <h2 id="improving-effectiveness">Improving effectiveness</h2>
            <p>The efficiency of the review process could be improved as:</p>
            <ul>
                <li>Providing training and best practice guidance to peer reviewers</li>
                <li>Improving recognition of the contribution made by reviewers</li>
                <li>Innovating transferable peer review systems to reduce the repeat reviewing</li>
            </ul>

            <h2 id="types-of-peer-review">Types of Peer Review</h2>
            <ul>
                <li><strong>Single anonymized:</strong> Reviewer identity is not made visible to author, author identity is
                    visible to reviewer, reviewer and author identity is visible to (decision-making) editor.</li>
                <li><strong>Double anonymized:</strong> Reviewer identity is not made visible to author, author identity is
                    not made visible to reviewer, reviewer and author identity is visible to (decision-making) editor.</li>
                <li><strong>Triple anonymized:</strong> Reviewer identity is not made visible to author, author identity is
                    not made visible to reviewer, reviewer and author identity is not made visible to (decision-making)
                    editor.</li>
                <li><strong>Open Peer review:</strong> Reviewer identity is visible to author, author identity is visible to
                    reviewer, reviewer and author identity is visible to (decision-making) editor.</li>
                <li><strong>Transparent Peer review:</strong> Review report is posted with the published article. Reviewers
                    can choose if they want to share their identity.</li>
                <li><strong>Collaborative:</strong> Two or more reviewers work together to submit a unified report. <br> OR
                    <br> The author revises manuscripts under the supervision of one or more reviewers.</li>
                <li><strong>Post publication:</strong> Review solicited or unsolicited, of a published paper. Does not
                    exclude other forms of peer review.</li>
            </ul>

            <h2 id="how-to-perform-a-peer-review">How to perform a peer review?</h2>

            <h3 id="invitation-to-review">1. Invitation to Review</h3>
            <p>Submitted manuscripts are evaluated by a minimum of two experts, who may be volunteer reviewers or those
                recommended by the academic editor during the initial assessment. Reviewers are tasked with assessing the
                manuscript's quality and offering a recommendation to the external editor regarding whether the manuscript
                should be accepted, revised, or rejected.</p>
            <p>We kindly ask invited reviewers to:</p>
            <ul>
                <li>accept or decline any invitations as soon as possible (based on the manuscript title and abstract;</li>
                <li>suggest alternative reviewers if they have declined the invitation.</li>
            </ul>

            <h3 id="potential-conflicts-of-interest">2. Potential Conflicts of Interest</h3>
            <p>We ask reviewers to disclose any potential conflicts of interest and to contact the journal's Editorial
                Office if they are uncertain whether something constitutes a conflict. Possible conflicts of interest
                include (but are not limited to):</p>
            <ul>
                <li>The reviewer is affiliated with the same institution as one of the authors;</li>
                <li>The reviewer has been a co-author, collaborator, joint grant holder, or has had any other academic
                    relationship with any of the authors within the past three years;</li>
                <li>The reviewer has a close personal relationship, rivalry, or hostility toward any of the authors;</li>
                <li>The reviewer stands to gain or lose financially from the publication of the paper;</li>
                <li>The reviewer has any other non-financial conflicts of interest (such as political, personal, religious,
                    ideological, academic, intellectual, or commercial) with any of the authors.</li>
            </ul>
            <p>Reviewers should disclose any conflicts of interest that may be perceived as bias for or against the paper or
                authors.</p>
            <p>Reviewers are also recommended to read the <a
                    href="https://publicationethics.org/sites/default/files/ethical-guidelines-peer-reviewers-cope.pdf">Ethical
                    Guidelines For Peer Reviewers</a> by the Committee on Publication Ethics (COPE).</p>

            <h3 id="declaration-of-confidentiality">3. Declaration of Confidentiality</h3>
            <p>SIA journals follow a double-blind peer review process. Reviewers are required to maintain confidentiality
                regarding the manuscript's content, until the article is published. They should also ensure their identity
                remains anonymous to the authors, both in their feedback and in any metadata associated with reports
                submitted in Microsoft Word or PDF format. If a reviewer wishes to delegate the review to a colleague, they
                must notify the Editorial Office.</p>

            <h3 id="review-reports">4. Review Reports</h3>
            <p>The review report must be written in English. Below are some general guidelines to consider when preparing
                your review report:</p>
            <ul>
                <li>Read the entire article and any supplementary material, paying close attention to figures, tables, data,
                    and methods.</li>
                <li>Your report should provide a detailed, section-by-section critique for the article.</li>
                <li>Ensure that your comments are thorough, so the authors can properly understand and address the points
                    you raise.</li>
                <li>Reviewers must not recommend citing their own work, that of close colleagues, any other author, or the
                    journal in the manuscript under review.</li>
                <li>Maintain a neutral tone and focus on offering constructive feedback that will help the authors enhance
                    their work.</li>
                <li>Reviewers should refrain from using AI tools to assist in preparing the review report. Reviewers are
                    solely responsible for the content of their reports, and using such tools may breach confidentiality,
                    proprietary, and data privacy rights. Limited use, such as for grammar, structure, spelling,
                    punctuation, and formatting checks, is acceptable, but should be disclosed when submitting the review.
                </li>
            </ul>
            <p>Review reports should include the following:</p>
            <ul>
                <li><strong>A summary (one short paragraph)</strong> outlining the paper's aim, main contributions, and
                    strengths.</li>
                <li><strong>General concept comments</strong>, including:
                    <ul>
                        <li>Article: Highlighting areas of weakness, testability of the hypothesis, methodological issues,
                            missing controls, etc.</li>
                        <li>Review: Commenting on the completeness of the review topic, relevance, knowledge gaps
                            identified, appropriateness of references, etc.</li>
                    </ul>
                </li>
                <li><strong>Specific comments</strong> referencing line numbers, tables, or figures that point out
                    inaccuracies or unclear sections in the text. These should focus on the scientific content, not
                    spelling, formatting, or language issues.</li>
            </ul>

            <h3 id="rating-the-manuscript">5. Rating the Manuscript</h3>
            <p>During the manuscript evaluation, please assess the following aspects:</p>
            <ul>
                <li><strong>Novelty:</strong> Is the research question original and clearly defined? Do the results
                    contribute to advancing current knowledge?</li>
                <li><strong>Scope:</strong> Does the manuscript align with the journal's scope*?</li>
                <li><strong>Significance:</strong> Are the results interpreted appropriately? Are they meaningful? Are all
                    conclusions justified and supported by the data? Are hypotheses clearly identified as such?</li>
                <li><strong>Quality:</strong> Is the article well-written? Are the data and analyses presented clearly and
                    appropriately? Are the results presented to the highest standards?</li>
                <li><strong>Scientific Soundness:</strong> Is the study designed and executed correctly? Are the analyses
                    performed at the highest technical standards? Is the data strong enough to support conclusions? Are the
                    methods, tools, software, and reagents described in enough detail for another researcher to replicate
                    the study? Is the raw data available and accurate (where applicable)?</li>
                <li><strong>Interest to the Readers:</strong> Are the conclusions relevant and engaging for the journal’s
                    audience? Will the paper appeal to a broad readership, or is it of interest only to a specific group?
                </li>
                <li><strong>Overall Merit:</strong> Does publishing this work provide overall value? Does it advance
                    existing knowledge? Do the authors tackle an important, longstanding question with thoughtful
                    experiments? Do the authors present a negative result that challenges a valid scientific hypothesis?
                </li>
            </ul>
            <p>Note: If the reviewer identifies any scientific misconduct, fraud, plagiarism, or other unethical behavior
                related to the manuscript, they should report these concerns to the in-house editor immediately.</p>

            <h3 id="overall-recommendation">6. Overall Recommendation</h3>
            <p>Please provide an overall recommendation for the next stage of the manuscript process, as follows:</p>
            <ul>
                <li><strong>Accept in Present Form:</strong> The manuscript can be accepted without any further changes.
                </li>
                <li><strong>Accept after Minor Revisions:</strong> The manuscript can be accepted after minor revisions
                    based on the reviewer’s feedback. Authors will have seven days to make the revisions.</li>
                <li><strong>Reconsider after Major Revisions:</strong> Acceptance of the manuscript depends on the
                    revisions. The author must provide a point-by-point response or a rebuttal if they cannot address some
                    of the reviewer’s comments. Typically, up to two rounds of major revisions are allowed. Authors will be
                    given fifteen days to resubmit the revised manuscript, which will be returned to the reviewer for
                    further comments.</li>
                <li><strong>Reject:</strong> The manuscript contains significant flaws, lacks originality, and may be
                    rejected with no opportunity for resubmission.</li>
            </ul>
            <p>Please note that your recommendation is visible only to the journal editors, not the authors. Decisions
                regarding revisions, acceptance, or rejection must be clearly justified.</p>

            <h2 id="becoming-a-reviewer">Becoming a reviewer</h2>
            <p>Getting involved in the peer review process can be a highly rewarding experience that can also improve your
                own research and help to further your career.</p>
            <h3 id="who-can-become-a-reviewer">Who can become a reviewer?</h3>
            <p>Anyone with expertise in the article's research field can be a reviewer – no matter your career stage.
                Editors may request assessments of specific aspects, even if the overall topic isn't your specialty. You
                need enough knowledge to evaluate the manuscript and provide constructive feedback.</p>
            <h3 id="become-a-reviewer">Become a reviewer</h3>
            <p>There are many ways to become a peer reviewer for a journal, including:</p>
            <ul>
                <li><strong>Expressing interest:</strong> Reach out to journal editors to inquire about becoming a reviewer.
                    Include an up-to-date curriculum vitae listing your research areas of expertise.</li>
                <li><strong>Recommendation by a peer:</strong> Ask a colleague who already reviews for a journal to
                    recommend you.</li>
                <li><strong>Networking:</strong> Connect with editors and other subject experts at academic conferences and
                    workshops.</li>
                <li><strong>Joining professional associations:</strong> Membership in relevant organizations can provide
                    opportunities for reviewing and networking.</li>
                <li><strong>Working for senior researchers:</strong> Senior researchers may delegate peer review duties to
                    you.</li>
                <li><strong>Formal peer review mentorship:</strong> Some journals provide formal programs providing
                    mentorship from experienced peer reviewers or facilitate collaborative peer review, where multiple
                    reviewers submit a unified report.</li>
            </ul>

            <h2 id="recognition-for-reviewers">Recognition for reviewers</h2>
            <p>A reviewer’s input to the editorial process is invaluable, and as publishers, we seek to recognize the
                efforts of reviewers. Here are five ways to get recognition when you peer review for a journal published by
                Society for Innovative Agriculture (SIA).</p>
            <h3 id="build-your-reviewer-profile">Build your reviewer profile with Web of Science</h3>
            <p>Web of Science Reviewer Recognition Services credits reviewers for their work, allowing you to record,
                verify, and showcase your contributions even if reviews are anonymous or manuscripts are unpublished. <a
                    href="https://clarivate.com/academia-government/scientific-and-academic-research/publisher-solutions/web-of-science-reviewer-recognition-service/">(https://clarivate.com/academia-government/scientific-and-academic-research/publisher-solutions/web-of-science-reviewer-recognition-service/)</a>
            </p>
            <p>Simply opt-in via the questionnaire when reviewing for participating SIA journals. Once completed, your
                review details automatically transfer to your profile.</p>
            <p>We protect reviewers’ anonymity and adhere to journal policies. Typically, only the review year and journal
                title are visible on profiles, keeping comments confidential unless both the journal and reviewer consent.
            </p>

            <h3 id="add-to-orcid">Add your peer review activity to your ORCID profile</h3>
            <p>You can opt-in to have Web of Science Reviewer Recognition Services automatically export your review history
                to your ORCID profile. Once set up, every verified review added to your Web of Science record will
                automatically be exported to your ORCID profile with a link back to the record on Web of Science. Web of
                Science transmits this data securely and makes sure not to compromise reviewer anonymity or infringe on
                journal policies. <a
                    href="https://support.orcid.org/hc/en-us/articles/360006971333-Peer-Reviews">(https://support.orcid.org/hc/en-us/articles/360006971333-Peer-Reviews)</a>
            </p>

            <h3 id="give-credit">Give credit to anyone who helps you with your review</h3>
            <p>The Web of Science Reviewer Recognition service allows reviewers to share credit for their reviews. Choose
                “agree with co-reviewer” if you plan to work on this review with another researcher or if you want to give
                credit to a student who will help with the review. Once a review is added to the Web of Science Reviewer
                Recognition service, the reviewer can add collaborators via the review’s “Progress” page. <a
                    href="https://publons.freshdesk.com/support/solutions/articles/12000089395-how-can-i-invite-my-review-collaborators">(https://publons.freshdesk.com/support/solutions/articles/12000089395-how-can-i-invite-my-review-collaborators)</a>
            </p>

            <h3 id="get-certificate">Get your Reviewer Recognition Certificate</h3>
            <p>Our journals annually provide personalized certificates recognizing your peer review contributions. Contact
                your chosen journal for more information.</p>

            <h2 id="reviewer-resources">Reviewer’s resources</h2>
            <ul>
                <li><a href="https://publicationethics.org/resources">COPE’s Ethics toolkit</a></li>
                <li><a href="https://publicationethics.org/sites/default/files/ethical-guidelines-peer-reviewers-cope.pdf">Ethical
                        guidelines for peer reviewers | COPE (PDF)</a></li>
                <li><a
                        href="https://publicationethics.org/resources/guidelines/what-consider-when-asked-peer-review-cope-guidance">What
                        to consider when asked to peer review: COPE guidance</a></li>
                <li><a href="https://sspnet.org/publications/news/industry-news/transparent-peer-review-what-weve-learned/">Transparent
                        Peer Review: What We’ve Learned</a></li>
                <li><a
                        href="https://www.wiley.com/en-us/network/researchers/being-a-peer-reviewer/a-guide-to-becoming-a-peer-reviewer">A
                        guide to becoming a peer reviewer | Editor Resources</a></li>
                <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5698254/">How to be a good reviewer: A
                        step‐by‐step guide for approaching peer review of a scientific manuscript - PMC</a></li>
                <li><a href="https://gatesopenresearch.org/for-reviewers/guidelines">Guidelines For Article Reviewers |
                        Gates Open Research</a></li>
            </ul>
        </div>
    </div>
@endsection
