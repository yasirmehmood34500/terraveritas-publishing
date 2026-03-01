@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.policy')
    @if (request()->route('abbr'))
        @include('includes.journal.left-bar')
    @endif
@endsection
@section('content')
    <div class="bg-white mt-3 pdf-like-content">
        <div class="m-2 p-2">
            <h2 id="research-ethics">1. Research Ethics Policy</h2>
            <h3 id="research-involving-plants">Research Involving Plants:</h3>
            <p>Experimental research involving plants, whether they are cultivated or wild, must adhere to institutional,
                national, or international guidelines. Authors are advised to adhere to the <a href="https://www.cbd.int/"
                    target="_blank">Convention on Biological Diversity</a> and the <a href="https://cites.org/eng"
                    target="_blank">Convention on the Trade in Endangered Species of Wild Fauna and Flora</a>.</p>
            <p>Every submitted manuscript should include genetic information and specify the origin of the plant material.
                For studies focusing on rare and non-model plants (excluding common model plants like Arabidopsis thaliana,
                Nicotiana benthamiana, Oryza sativa, etc.), voucher specimens must be placed in an accessible herbarium or
                museum. These vouchers may be requested by future researchers to confirm the identity of the materials used,
                especially if there are taxonomic changes in the future. They should include collection site details (GPS
                coordinates), collection date, and documentation of the part(s) utilized in the study, if applicable.</p>
            <p><strong>Ethical Statement:</strong> Psidium guajava trees were used in this study. Pear-shaped fruit with
                pink flesh (FrP) and Pear-shaped fruit with white flesh (FrW) cultivars selected from orchard (name of farm,
                city, country) were kindly provided by Dr. XX (name of institute, city, country).</p>

            <h3 id="research-involving-animals">Research Involving Animals</h3>
            <p>The well-being of animals involved in research must be upheld. When presenting findings from experiments
                involving animals, authors are required to specify adherence to international, national, and/or
                institutional protocols for animal care and use. Authors are expected to adhere to the widely accepted
                principles known as the <a href="https://www.nc3rs.org.uk/the-3rs" target="_blank">3Rs</a> and provide
                detailed information on housing, care, and pain management in their manuscripts. Additional guidance can be
                found in documents such as the <a href="https://www.gov.uk/guidance/animal-welfare" target="_blank">Code of
                    Practice for the Housing and Care of Animals Used in Scientific Procedures</a>, <a
                    href="https://www.aalas.org/" target="_blank">American Association for Laboratory Animal Science</a> or
                <a href="https://www.eara.eu/" target="_blank">European Animal Research Association</a>.
            </p>
            <p>Additionally, confirmation of approval from a research ethics committee within the conducting institution or
                practice should be provided (if such a committee exists). Authors should furnish the name of the ethics
                committee and the corresponding permit number.</p>
            <p>For studies involving animals, the following statement should precede the References section:</p>
            <ul>
                <li><strong>Ethical approval:</strong> "All relevant international, national, and/or institutional
                    guidelines for animal care and use were observed".</li>
                <li>Where applicable (if a committee exists): "All procedures carried out in studies involving animals
                    adhered to the ethical standards of the conducting institution or practice. (Please include the name of
                    the committee + permit number)".</li>
            </ul>

            <h3 id="research-involving-humans">Research Involving Humans</h3>
            <p>When documenting research involving human participants, authors are obligated to disclose that the studies
                have received approval from the relevant institutional and/or national research ethics committee and have
                been conducted in accordance with the ethical principles outlined in the <a
                    href="https://www.wma.net/policies-post/wma-declaration-of-helsinki-ethical-principles-for-medical-research-involving-human-subjects/"
                    target="_blank">1964 Declaration of Helsinki</a> and its subsequent revisions or similar ethical
                standards. If there is uncertainty regarding adherence to the 1964 Helsinki Declaration or equivalent
                standards, authors must elucidate the rationale behind their approach and provide evidence that the
                independent ethics committee or institutional review board has explicitly sanctioned any questionable
                aspects of the study.</p>
            <p>In cases where a study has been exempted from requiring ethics approval, this exemption should be clearly
                delineated in the manuscript, including the identity of the ethics committee granting the exemption and the
                reasons for it. Regardless of the circumstance, authors are required to specify the name of the ethics
                committee and the corresponding reference number when applicable.</p>
            <p>The following statements should precede the References section of the manuscript:</p>
            <ul>
                <li><strong>Ethical approval:</strong> "All procedures conducted in studies involving human participants
                    were conducted in accordance with the ethical standards set forth by the institutional and/or national
                    research committee (including the name of the committee + reference number) and in compliance with the
                    1964 Helsinki Declaration and its subsequent revisions or similar ethical standards."</li>
                <li><strong>Ethical approval for retrospective studies:</strong> Although retrospective studies utilize
                    pre-existing data or biological material (for which formal consent may be unnecessary or difficult to
                    obtain), ethical approval may still be mandated based on the laws and national ethical guidelines of the
                    respective country. Authors are advised to verify with their institution to ensure compliance with the
                    specific requirements of their country.</li>
            </ul>
            <p>The editorial team will carefully review all ethical statements. Manuscripts that do not have a suitable
                ethical statement will be sent back to the authors and will not be considered until an appropriate and clear
                statement is added.</p>

            <h3 id="written-informed-consent">Written Informed Consent</h3>
            <p><strong>Consent to participate/publish:</strong> For all research involving human subjects, freely given,
                informed consent to participate in the study or publish data in a journal article must be obtained from
                participants (or their parent or legal guardian in the case of children under 16) or authors and a statement
                to this effect should appear in the manuscript.</p>
            <p>The sample statements of consent to participate may be ‘Informed consent was obtained from all individual
                participants included in the study' or ‘Informed consent was obtained from parents/legal
                guardians/patients". Similarly, the sample statements of consent to publish may be “The authors affirm that
                research participants provided informed consent for publication of the images in Figure(s) A and B” or “The
                participants signed informed consent regarding publishing their data and photographs".</p>

            <h3 id="sex-and-gender-in-research">Sex and Gender in Research</h3>
            <p>Authors must include sex and gender considerations where relevant and follow the <a
                    href="https://ease.org.uk/communities/gender-policy-committee-gpc/sager-guidelines/"
                    target="_blank">SAGER guidelines</a>. It is important for authors to differentiate between the terms sex
                (biological attribute) and gender (influenced by social and cultural contexts) accurately to prevent
                confusion. Clear indication of the relevant sex(es) should be provided in article titles and/or abstracts.
                Authors should outline in the background whether sex and/or gender differences might be anticipated, detail
                how these factors were addressed in the study design, present disaggregated data by sex and/or gender when
                suitable and discuss corresponding findings. In cases where a sex and/or gender analysis was not conducted,
                authors should explain the rationale in the discussion section. The authors must review the complete
                guidelines prior to submission.</p>

            <h3 id="borders-and-territories">Borders and Territories</h3>
            <p>Authors must consider borders and territories when describing their research or in author or editor
                correspondence, and all territorial disputes should be respected. The editorial team will work to resolve
                any dispute or complaint that is acceptable to all parties involved. Editors stay neutral regarding
                jurisdictional claims in published maps and institutional affiliations.</p>

            <h2 id="publication-ethics">2. Publication Ethics</h2>
            <p>The authors must follow the code of conduct and guidelines of the <a href="https://publicationethics.org/"
                    target="_blank">Committee on Publication Ethics (COPE)</a> when misconduct is suspected or alleged. The
                following issues are highlighted.</p>
            <ul>
                <li><strong>Originality and plagiarism:</strong> The authors should ensure that their work is original, and
                    if the authors have used the work and/or words of others, then this must be appropriately cited or
                    quoted.</li>
                <li>Please note that we use the <a href="https://www.turnitin.com/" target="_blank">Turnitin</a> to screen
                    manuscripts for plagiarism/similarity risks. By submitting the manuscript to the journal, the authors
                    agree to any originality checks the manuscript may undergo during peer-review and production and
                    processes.</li>
                <li><strong>Data access and retention:</strong> Authors may be asked to provide raw data in connection with
                    a paper for editorial review and should be prepared to provide public access to such data.</li>
                <li><strong>Multiple, redundant, or concurrent publication:</strong> An author should not publish
                    manuscripts describing essentially the same research in more than one journal or primary publication.
                </li>
            </ul>
            <p>Where author or peer reviewer misconduct is identified, a due process will be followed to investigate the
                issue, giving those involved a right to appeal in a formal way. The publisher and editor(s) will deal with
                the allegations of research misconduct according to COPE guidelines.</p>

            <h2 id="ai-policy">3. Artificial Intelligence Use Policy</h2>
            <p>Authors should follow <a href="https://publicationethics.org/cope-position-statements/ai-author"
                    target="_blank">COPE guidelines</a> and disclose in their manuscript the use of Al and Al-assisted
                technologies in the writing process by following the instructions below. A statement will appear in the
                published work. Please note that authors are ultimately responsible and accountable for the contents of the
                work.</p>
            <p><strong>Disclosure instructions:</strong> Authors must disclose the use of generative Al and Al-assisted
                technologies in the writing process by adding a statement at the end of their manuscript in the core
                manuscript file before the References list. The statement should be placed in a new section entitled
                'Declaration of Generative Al and Al-assisted technologies in the writing process'.</p>
            <p><strong>Statement:</strong> "During the preparation of this work the author(s) used [Name Tool /Service] to
                [Reason]. After using this tool/service, the author(s) reviewed and edited the content as needed and take(s)
                full responsibility for the content of the publication”. However, this declaration does not apply to the use
                of basic tools for checking grammar, spelling, references etc. If there is nothing to disclose, there is no
                need to add a statement.</p>

            <h2 id="citation-policy">4. Citation Policy:</h2>
            <ul>
                <li>Authors should ensure that where material is taken from other sources (including their own published
                    writing), the source is clearly cited and that where appropriate permission is obtained.
                    <ol>
                        <li>Authors should not engage in excessive self-citation of their own work.</li>
                        <li>Authors should not copy references from other publications if they have not read the cited work.
                        </li>
                        <li>Authors should not preferentially cite their own or their friends', peers', or institution's
                            publications.</li>
                        <li>Authors should not cite advertisements or advertorial material.</li>
                    </ol>
                </li>
                <li>In accordance with COPE guidelines, we expect that “original wording taken directly from publications by
                    other researchers should appear in quotation marks with the appropriate citations". This condition also
                    applies to an author's own work. COPE have produced a discussion document on <a
                        href="https://publicationethics.org/citation-manipulation-discussion-document"
                        target="_blank">citation manipulation</a> with recommendations for best practice.</li>
            </ul>

            <h2 id="corrections-retractions">5. Corrections and Retractions Policy</h2>
            <ul>
                <li>A clear policy regarding corrections and retractions is defined which differentiate among Addendum,
                    Erratum, Corrections, Retractions (or Partial Retractions), and Comments.</li>
                <li><strong>Addendum:</strong> If crucial results (e.g., additional affiliation, clarify some aspect of
                    methods/analysis, etc.) were unintentionally omitted from the original publication, the original article
                    can be amended through an Addendum. The Addendum will be published, with article numbers added, in the
                    current issue of the journal. A hyperlink to the Addendum will also be added to the original
                    publication, but the original paper does not need to be updated.</li>
                <li><strong>Erratum:</strong> Errata should be published for scientifically relevant formatting changes, or
                    changes to authorship if the author or contributor list is incorrect when a deserving author has been
                    omitted or somebody who does not meet authorship criteria has been included. Scientifically relevant
                    formatting issues that require an Erratum might include missing or unclear figures, or errors introduced
                    during proofreading (e.g., missing text). Minor errors that do not affect readability or meaning (e.g.,
                    spelling or grammatical errors) do not qualify for an Erratum. All authors should proofread the final
                    version carefully.</li>
                <li><strong>Corrections:</strong> Corrections should be submitted for any scientifically relevant errors in
                    published articles. 1) Any changes may be evaluated by the academic editors. 2) Any changes after
                    publication that affect the scientific interpretation (e.g., changes to a misleading portion of an
                    otherwise reliable publication, an error in a figure, error in data that does not affect conclusions, or
                    addition of missing details about a method) are announced using a Correction. This is a separate
                    publication that links to the original paper, which is updated. A note will also be added to the Article
                    Versions Notes and to the abstract page, which tells the readers that an updated version was uploaded.
                </li>
                <li><strong>Retractions:</strong> Sometimes an article needs to be completely removed from the body of
                    research literature. This could be due to inadvertent errors made during the research process, gross
                    ethical breaches, fabrication of data, large amounts of plagiarism, or other reasons. Such articles
                    threaten the integrity of scientific records and need to be retracted. SIA follows the recommendations
                    of the <a href="https://publicationethics.org/retraction-guidelines" target="_blank">Committee on
                        Publication Ethics (COPE)</a> for retraction. Potential Retractions are thoroughly investigated by
                    the Editorial Office with the support of the Editorial Board and final approval by the Editor-in-Chief.
                    Other people and institutions will be consulted as necessary, including university authorities, or
                    experts in the field. If a Retraction is published, the original publication is amended with a
                    "RETRACTED” watermark, but will still be available on the journal's website for future reference.
                    However, retracted articles should not be cited and used for further research, as they cannot be relied
                    upon. Retractions are published using the same authorship and affiliation as the article being
                    retracted, with page numbers added, as a separate item in the current issue of the journal. That way, so
                    that after the issue is released, the Retraction can be marked within the indexing databases. Partial
                    Retractions might be published in cases where results are only partially wrong. A paper will only be
                    completely removed in very exceptional circumstances, where leaving it online would constitute an
                    illegal act or be likely to lead to significant harm. Expression of Concern for complex, inconclusive,
                    or prolonged situations, an Expression of Concern may be published. If investigations into alleged or
                    suspected research misconduct have not yet been completed or prove to be inconclusive, an editor or
                    journal may wish to publish an Expression of Concern, detailing the points of concern and what actions,
                    if any, are in progress.</li>
            </ul>

            <h2 id="archiving-policy">6. Archiving Policy</h2>
            <p>The Editorial office is committed to the permanent availability and preservation of scholarly research with
                <a href="https://archive.org/" target="_blank">INTERNET ARCHIVE</a>. Moreover, the Editorial office allows
                self-archiving of accepted and published papers through open access policy. Authors retain the copyright of
                their work and can archive pre-print and post-print or publisher's version/PDF to personal or institutional
                repositories or libraries without requiring permission from the journal or publisher.
            </p>

            <h2 id="repository-policy">7. Repository Policy</h2>
            <p>We support authors in letting people know about the work that they have published through Open Access under a
                <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">CC-BY</a> license. The Editorial
                Office also shares a <a href="https://www.doi.org/" target="_blank">DOI-Link</a> to the final published
                version as it always securely directs people to the correct page even if the website URL changes. Authors
                are recommended to use their <a href="https://orcid.org/" target="_blank">ORCID</a> when submitting an
                article for consideration or acquire an ORCID via the submission process.
            </p>

            <h2 id="advertising-policy">8. Advertising Policy</h2>
            <ul>
                <li>The editorial decisions are independent of advertisements and sponsored publications. The decision to
                    publish a manuscript does not depend upon monetary or commercial interests.</li>
                <li>The advertisement should clearly describe the product or service being offered and it should clearly
                    identify the sponsor or manufacturer.</li>
                <li>The author should ensure that the advertisement complies with the rules and regulations of marketing and
                    sales of the product being advertised.</li>
                <li>The articles promoting injurious or hazardous products will not be accepted.</li>
                <li>Any article advertising a product that is considered inappropriate by the standards of the journal will
                    be declined.</li>
                <li>Articles advertising any product will not be accepted.</li>
            </ul>

            <h2 id="marketing-policy">9. Marketing Policy</h2>
            <p>To ensure that all communications representing the journal are of high quality, consistent and accurate,
                conform to policy approved by the <a href="https://societyfia.org/" target="_blank">Society for Innovative
                    Agriculture (SIA)</a> and adhere to style and standards guidelines, it is the policy that all
                communications be reviewed and approved by the Editorial office.</p>

            <h2 id="plagiarism-policy">10. Plagiarism Policy</h2>
            <p>The journal uses plagiarism detection software <a href="https://www.turnitin.com/"
                    target="_blank">Turnitin</a> to screen the submissions. If plagiarism is identified, the <a
                    href="https://publicationethics.org/resources/flowcharts" target="_blank">COPE guidelines on
                    plagiarism</a> are followed. The journal also follows Higher Education Commission, Pakistan plagiarism
                guidelines.</p>

            <h2 id="authorship-issues">11. Authorship Issues or Disputes Policy</h2>
            <p>In the case of an authorship dispute during peer review or after acceptance and publication, the Editorial
                office will not be able to investigate or adjudicate. Authors will be asked to resolve the dispute
                themselves. If they are unable, the Editorial office reserves the right to withdraw manuscript from the
                editorial process or in case of a published paper, raise the issue with the authors' institution(s) and
                abide by its guidelines.</p>

            <h2 id="copyright-license">12. Copyright and License Term <img
                    src="https://mirrors.creativecommons.org/presskit/buttons/88x31/png/by.png" alt="CC BY"
                    style="height: 31px; width: 88px;"></h2>
            <p>We publish Open Access articles under the <a href="https://creativecommons.org/licenses/by/4.0/"
                    target="_blank">Creative Commons Attribution License</a>. Authors of open access articles published in
                this journal retain the copyright of their articles and are free to reproduce and disseminate their work.
            </p>

            <h2 id="open-access">13. Open Access / Copyright <img
                    src="https://mirrors.creativecommons.org/presskit/buttons/88x31/png/by.png"
                    style="height: 31px; width: 88px;" alt="open access"></h2>
            <p>Articles published in Research Journals of TerraVeritas Publishing are Open-Access distributed under the
                terms and conditions of the Creative Commons Attribution <a
                    href="http://creativecommons.org/licenses/by/4.0/" target="_blank">License</a> (CC BY). The copyright is
                retained by the
                author(s). Copyright to the design, format, logo and other aspects of this publication is claimed by the
                journal.
            </p>

            <h2 id="author-name-change">14. Author Name Change Policy</h2>
            <p>Changes in authorship, including the addition of authors, the removal of authors, or the reordering of
                authors, must comply with our authorship criteria. In case of any change of authorship, the corresponding
                author has the responsibility of obtaining the consent of all authors.</p>

            <h3>What kind of changes are covered by this policy?</h3>
            <ul>
                <li>Any request for the change to authorship, after an article has been accepted, may be rejected if clear
                    reasons and evidence of author contribution are not provided. If a change of authorship is necessary
                    after the article has been published, this will be addressed by publishing a correction.</li>
                <li>Some authors might wish to change their name on published articles. In such cases, Editorial office will
                    update and republish the article.</li>
            </ul>

            <h3>How will changes be displayed?</h3>
            <p>Editorial office is aware that name changes can be sensitive and/or private in nature, for a variety of
                reasons that may include alignment with gender identity, marriage, divorce, or religious conversion.
                Therefore, to protect author identity, an Erratum will not be published, and co-authors will not be notified
                of any change unless the author explicitly chooses to include a public notice alongside the name change
                request. The article DOI will remain the same. The PDF and the XML of the article will be changed, and the
                updated metadata will be re-delivered to indexing agencies and third parties; however, Editorial office
                cannot guarantee changes on other platforms or databases. Similarly, the Editorial office is unable to
                update citations to articles in which a name change has occurred.</p>
            <h3>How to request a change?</h3>
            <p>To request a name change, please fill out the form below with your request, the DOls of the manuscript(s) in
                question, and confirmation as to whether or not you permit the Editorial office to contact the co-authors to
                inform them of the change. The completed form will be sent to a dedicated inbox, which is accessed and
                managed by an employee. The author will receive proof of the changes and asks to review and approve them
                before publication.</p>
            <table class="form-table">
                <tr>
                    <td>Previously Published Name*</td>
                    <td><input type="text" name="previous_name" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Name update</td>
                    <td><input type="text" name="name_update" class="form-control"></td>
                </tr>
                <tr>
                    <td>Pronoun update</td>
                    <td><input type="text" name="pronoun_update" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email contact*</td>
                    <td><input type="email" name="email_contact" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Article DOI*</td>
                    <td><input type="text" name="article_doi" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Would you like to inform your co-authors on your behalf?<br>(selecting "No" ensures complete
                        privacy)</td>
                    <td>
                        <input type="radio" id="inform_coauthors_yes" name="inform_coauthors" value="yes">
                        <label for="inform_coauthors_yes">Yes</label>
                        <input type="radio" id="inform_coauthors_no" name="inform_coauthors" value="no" checked>
                        <label for="inform_coauthors_no">No</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" class="btn btn-primary mt-3">Send Request</button></td>
                </tr>
            </table>
        </div>
    </div>
@endsection