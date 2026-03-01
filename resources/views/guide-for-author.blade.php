@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.guide-for-author')
    @if (request()->route('abbr'))
        @include('includes.journal.left-bar')
    @endif
@endsection
@section('content')
    <style>
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
            <h2 id="submission-checklist">Submission Checklist</h2>
            <p>Please:</p>
            <ol>
                <li>Read the Aims & Scope to gain an overview and assess if your manuscript is suitable for this journal.
                </li>
                <li>Use the Microsoft Word template to prepare your manuscript.</li>
                <li>Make sure that issues about publication ethics, research ethics, copyright, authorship, figure formats,
                    data and references format have been appropriately considered.</li>
                <li>Ensure that all authors have approved the content of the submitted manuscript.</li>
            </ol>

            <h2 id="journal-publishing-schedule">1. Journal Publishing Schedule</h2>
            <p>The research journals published under TerraVeritas Publishing are English-language, peer-reviewed scholarly
                journals issued either biannually or quarterly. Each journal follows a consistent publication cycle, with
                issues released in the first month of each half-year or quarter, depending on its frequency. This schedule
                ensures the timely dissemination of high-quality research to the global academic community.</p>

            <h2 id="manuscript-submission">2. Manuscript Submission</h2>
            <h3>Types of Papers/Articles</h3>
            <p><strong>Original Articles:</strong> Original articles must present scientific results that are essentially
                new and should be structured according to the guidelines given below.</p>
            <p><strong>Review Papers:</strong> Review papers should be comprehensive, fully referenced expositions of
                subjects of general interest, including background information and detailed critical analyses of current
                work in the field and its significance, often with figures and drawings. They should be designed to serve as
                source materials.</p>
            <p><strong>Perspectives Articles:</strong> Perspectives articles provide a brief perspective on recent
                developments in relevant fields. Note that these should not be full reviews, which should instead be
                submitted as Review Papers.</p>
            <p><strong>Methods Papers:</strong> We welcome papers describing new or improved methods. Please note that
                methods that are highly specialized and useful only for a relatively small group of researchers will not be
                considered with priority. We aim for papers that are of broader interest. The paper can be presented in a
                protocol-style or narrative method-style.</p>
            <p><strong>Opinion Papers:</strong> This category allows researchers to present a new synthesis of the field,
                future projections, or discussions and speculations that go beyond the level of a standard Review Paper.
                These are opinionated narratives that help the research field forward.</p>

            <h3>Submission Process</h3>
            <p>Manuscripts should be submitted online at <a href="#">Paper Submission System</a>. The submitting
                author, who is generally the corresponding author, is responsible for the manuscript during the submission
                and peer-review process. The submitting author must ensure that all eligible co-authors have been included
                in the author list and that they have all read and approved the submitted version of the manuscript. To
                submit your manuscript, register and login to the submission portal. Once you have registered, click here to
                go to the submission form. Authors are encouraged to use Microsoft Word (font Times new Roman, size 12) to
                prepare their manuscript.</p>

            <h3>Submission declaration and verification</h3>
            <p>Submission of an article implies that the work described has not been published previously, that it is not
                under consideration for publication elsewhere, that its publication is approved by all authors, and that, if
                accepted, it will not be published elsewhere in the same form, in English or in any other language,
                including electronically without the written consent of the copyright-holder. To verify originality,
                articles will be checked by the originality detection service Turnitin or other.</p>

            <h3>Reviewer Suggestions</h3>
            <p>During the submission process, authors will suggest three potential reviewers with the appropriate expertise
                and contact information (name, official e-mail, and affiliation) to review the manuscript. The editors will
                not necessarily approach these referees. The proposed referees should neither be current collaborators of
                the authors nor have published with any of the authors of the manuscript within the last five years.
                Proposed reviewers should be from different institutions to the authors. Authors may suggest reviewers from
                among the authors that they frequently cite in their papers.</p>

            <h2 id="editorial-procedure">3. Editorial Procedure and Peer-Review</h2>
            <p>The Editor-in Chief and Managing Editor are responsible for ensuring that all manuscripts meet the academic
                standards fit for publication and are published in a timely fashion. The editors oversee each article's
                individual progress through the journal's submission system and are responsible for liaising with authors,
                reviewers, and Editorial office.</p>
            <img src="{{ asset('assets/imgs/editorial-procedure.png') }}" alt="Editorial Procedure" class="img-fluid">

            <h3>Initial Checks</h3>
            <p>All submitted manuscripts received by the Editorial Office are checked by a professional in-house staff to
                determine whether the manuscripts are properly prepared and follow the ethical policies of the journal.
                Manuscripts that are not properly prepared are returned to the authors for revision and resubmission. The
                manuscripts that do not fit the journal's scope or do not meet the standards of the journal or
                scientifically insignificant are rejected before peer-review by the Managing Editor.</p>

            <h3>Peer Review</h3>
            <p>Once a manuscript passes the initial checks, it is assigned to at least two independent outside experts for
                peer-review by a Subject Editor. Potential reviewers suggested by the authors may also be considered.
                However, the reviewers should not have published with any of the authors during the past five years and
                should not currently work or collaborate with any of the institutions of the authors of the submitted
                manuscript. Peer review comments are confidential and are only disclosed with the corresponding author
                keeping the anonymity of the reviewer. If a revision is invited, the corresponding author submits the
                revised manuscript, and the final decision is taken by the relevant Subject Editor based on the information
                gained through the peer-review process.</p>

            <h3>Editors and Editorial Staff as Authors</h3>
            <p>Editorial staff/editors shall remove themselves from the decision-making process of their own academic work
                submitted to the journal. Submissions authored by editorial staff/editors will be assigned to at least two
                independent outside reviewers by another subject editor who do not have a Conflict of Interest with the
                author and similarly the decision shall be made by the same subject editor. In such cases, the review
                process must be made as transparent and rigorous as possible. Every effort shall be made to minimize any
                bias in the review process by having another subject editor handle the peer review procedure independently.
                Further, it is suggested that the subject editor send the article out for review without any author names
                and affiliations on it.</p>

            <h3>Editorial Decision</h3>
            <p>The Subject Editor will communicate the decision, which will be one of the following:</p>
            <ul>
                <li><em><strong>Accept after Minor Revisions:</strong></em> The paper is in principle accepted after
                    revision based on the reviewer's comments. Authors are given 7 days for minor revisions.</li>
                <li><em><strong>Reconsider after Major Revisions:</strong></em> The acceptance of the manuscript would
                    depend on the revisions. The author needs to provide a point-by-point response of the reviewer's
                    comments. Usually, only one round of major revisions is allowed. Authors are asked to resubmit the
                    revised paper within a suitable time frame, and the revised version is returned to the reviewer for
                    further comments.</li>
                <li><em><strong>Reject:</strong></em> The article has serious flaws, and/or makes no significant
                    contribution. No offer of resubmission to the journal is provided.</li>
            </ul>

            <h3>Manuscript withdrawal</h3>
            <p>It is possible that authors may wish to withdraw their manuscript after submission to the journal. Possible
                reasons could include major technical error, or the desire to submit the results to a different journal. In
                all such cases, manuscripts can of course be withdrawn at the author's discretion.</p>

            <h3>Author Appeals</h3>
            <p>Authors may appeal a rejection by sending an e-mail to the Editorial Office of the journal. The appeal must
                provide detailed justification, including point-by-point responses to the reviewer's comments. The Managing
                Editor of the journal will forward the manuscript and related information (including the identities of the
                referees) to the Editor-in-Chief or Editorial Board member to give an advisory recommendation on the
                manuscript and may recommend acceptance, further peer-review, or uphold the original rejection decision. A
                reject decision at this stage is final and cannot be reversed.</p>

            <h3>Production and Publication</h3>
            <p>Once accepted, the manuscript will undergo professional copy-editing, English editing, proofreading by the
                authors, final corrections, pagination, and publication on the journal website.</p>

            <h2 id="manuscript-preparation">4. Manuscript Preparation</h2>
            <p>The responsibility for the preparation of a paper according to the layout and style of the journal lies with
                the author(s). The research papers, not according to the format of the journal, will not be accepted. <a
                    href="#">Sample Paper</a></p>

            <h3>General Considerations:</h3>
            <ul>
                <li><strong>Research manuscripts</strong> should comprise:
                    <ol>
                        <li><strong>Front matter:</strong> Title, Author list, Affiliations, Abstract, Keywords, Short title
                        </li>
                        <li><strong>Research manuscript sections:</strong> Introduction, Materials and Methods, Results,
                            Discussion, Conclusions.</li>
                        <li><strong>Back matter:</strong> Acknowledgments, Author Contributions, Conflicts of Interest,
                            References.</li>
                    </ol>
                </li>
                <li>Review manuscripts should comprise the front matter, literature review sections and the back matter. It
                    is not necessary to follow the remaining structure.</li>
                <li>Acronyms/Abbreviations/Initialisms should be defined the first time they appear in each of three
                    sections: the abstract; the main text; the first figure or table.</li>
                <li>SI Units (International System of Units) should be used.</li>
                <li>Accession numbers of RNA, DNA and protein sequences used in the manuscript should be provided in the
                    Materials and Methods section.</li>
                <li><strong>Equations:</strong> If you are using Microsoft Word, please use either the Equation Editor or
                    the MathType add-on. Equations should be editable and not appear in image format.</li>
            </ul>

            <h3>Front Matter:</h3>
            <p>These sections should appear in all manuscript types.</p>
            <ul>
                <li><strong>Title:</strong> The title of manuscript should be concise, specific, and relevant. It should
                    identify if the study reports trial data or is a systematic review.</li>
                <li><strong>Author's and Affiliations:</strong> Authors' full names must be provided along with complete
                    address including city, zip code, state/province, and country. At least one author should be designated
                    as the corresponding author with email address.</li>
                <li><strong>Abstract:</strong> The abstract should be about 200 words maximum, in a single paragraph,
                    following the structured abstract style without headings: Background, Methods, Results, Conclusion.</li>
                <li><strong>Keywords:</strong> Five to eight pertinent keywords need to be added after the abstract,
                    specific to the article.</li>
            </ul>

            <h3>Research Manuscript Sections:</h3>
            <ul>
                <li><strong>Introduction:</strong> Should briefly place the study in a broad context and highlight its
                    significance and hypotheses.</li>
                <li><strong>Materials and Methods:</strong> Describe with sufficient detail to allow replication; cite
                    established methods and specify equipment/software.</li>
                <li><strong>Results:</strong> Provide concise, precise description and interpretation of findings.</li>
                <li><strong>Discussion:</strong> Interpret findings in context of existing literature, address limitations,
                    and propose future research directions.</li>
                <li><strong>Conclusions:</strong> Summarize the main conclusions in one or two paragraphs.</li>
            </ul>

            <h3>Back Matter:</h3>
            <ul>
                <li><strong>Acknowledgments:</strong> Acknowledge support not covered by contributions or funding (e.g.,
                    technical support).</li>
                <li><strong>Funding:</strong> Disclose all funding sources. State "no external funding" or list funder and
                    grant number.</li>
                <li><strong>Author Contributions:</strong> Use CRediT taxonomy terms (e.g., Conceptualization, Methodology,
                    Writing). Contributions should be clear and concise.</li>
                <li><strong>Conflicts of Interest:</strong> Declare any potential conflicts or state "The authors declare no
                    conflict of interest."</li>
            </ul>

            <h3>Sample Statements</h3>
            <ul>
                <li><strong>Acknowledgement:</strong> The authors acknowledge Higher Education Commission for funding
                    (NRPU-8781) and Dr. M.A. Khan for chemical analysis.</li>
                <li><strong>CRediT author statement:</strong> M.A. Ahsen, S.A. Naqvi, M.J. Jaskani designed and ran
                    experiments; M. Waseem, I.A. Khan, K. Hussnain drafted; K. Mehmood, M.M. Khan finalized the draft.</li>
                <li><strong>Conflict of interest:</strong> The authors declare no conflict of interest.</li>
                <li><strong>Ethical statement:</strong> This article does not contain any studies requiring ethics committee
                    approval.</li>
                <li><strong>Availability of data and material:</strong> Available upon request from the corresponding
                    author.</li>
                <li><strong>Consent to participate:</strong> All participants consented for this research study.</li>
                <li><strong>Informed consent:</strong> Participants signed consent for publishing data and photographs.</li>
                <li><strong>Consent for publication:</strong> All authors consented to publish this research in journal.
                </li>
                <li><strong>SDGs addressed:</strong> No poverty, Zero hunger, Good health and well-being, etc.</li>
                <li><strong>Policy referred:</strong> Agricultural, Food, Rural development, Sustainable agriculture, Food
                    security, etc.</li>
                <li><strong>Publisher's note:</strong> All claims are solely those of the authors and do not represent the
                    views of their institutions or the publisher.</li>
            </ul>

            <h2 id="citation-style">Citation and Reference Style</h2>
            <h3>In-text Citations:</h3>
            <ol>
                <li>APA in-text citations consist of the author's last name and publication year, e.g. (Jaskani, 2022). When
                    citing a specific part of a source, also include a page number or range, for example (Jaskani, 2022, p.
                    72) or (John, 2019, pp. 5–14).</li>
                <li>The in-text citation can be placed in parentheses or naturally integrated into a sentence.
                    <ul>
                        <li><strong>Parenthetical:</strong> There is a correlation between fertilizer dose and growth of
                            citrus trees (Jaskani, 2022) OR Triploid citrus trees produce seedless fruits (Jaskani & Khan,
                            2018; Naqvi et al., 2021).</li>
                        <li><strong>Narrative:</strong> Jaskani (2022) found a correlation between fertilizer dose and
                            growth of citrus trees OR Jaskani and Khan (2018) reported that triploid citrus trees produce
                            seedless fruits.</li>
                    </ul>
                </li>
                <li>If a work has two authors, separate their names with an ampersand (&) in a parenthetical citation or
                    “and” in a narrative citation. If there are three or more authors, only include the first author's last
                    name followed by "et al.", meaning "and others".</li>
                <li>Group authors known by their abbreviations (e.g., FAO) are written in full the first time and are
                    abbreviated in subsequent citations.</li>
                <li>If the author of a source is unknown, try to determine if there is an organization or government
                    responsible for creating the content. If so, include its name in the in-text citation (and reference
                    entry). e.g. (Tesla, 2020), FAO, 2024), (WHO, 2025).</li>
                <li>If a statement is supported by multiple sources, the in-text citations can be combined in one
                    parenthesis. Order the sources alphabetically and separate them with a semicolon. Where citing multiple
                    works from the same author, list the years of publication separated by a comma. e.g. (Fred, 2010; Jude,
                    2005; Simon, 2012, 2018).</li>
            </ol>

            <p>The following table shows the basic in-text citation styles:</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="table-bg">Author type</th>
                        <th class="table-bg">Parenthetical citation</th>
                        <th class="table-bg">Narrative citation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-bg">One author</td>
                        <td>(Asim, 2020)</td>
                        <td>Asim (2020)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Two authors</td>
                        <td>(Yasir & Khan, 2020)</td>
                        <td>Yasir and Khan (2020)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Three or more authors</td>
                        <td>(Robinson et al., 2020)</td>
                        <td>Robinson et al. (2020)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">The Same Author and year</td>
                        <td>(Esen, 2019a)<br>(Esen, 2019b)<br>(Esen, 2019a,b)</td>
                        <td>Esen (2019a)<br>Esen (2019b)<br>Esen (2019a,b)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Different authors with the same last name</td>
                        <td>(S. Khan, 2018)<br>(I. A. Khan, 2018)</td>
                        <td>S. Khan (2018)<br>I. A. Khan (2018)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Citing multiple works</td>
                        <td>(Ahmad et al., 2019; Meyer, 2015; Wang & Deng, 2014) or<br>(FAO, 2018, 2020, 2021)</td>
                        <td>Ahmad et al. (2019), Meyer (2015), and Wang and Deng (2014) or<br>FAO (2018, 2020, 2021)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Personal Communication</td>
                        <td>(J. W. Cameron, personal communication, February 12, 1979)</td>
                        <td>J. W. Cameron (personal communication, February 12, 1979)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Abbreviated group author</td>
                        <td>(National Institute of Mental Health [NIMH], 2020)<br>(NIMH, 2020)</td>
                        <td>National Institute of Mental Health (NIMH, 2020)<br>NIMH (2020)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Without abbreviation group author</td>
                        <td>(Stanford University, 2021)</td>
                        <td>Stanford University (2021)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">No author</td>
                        <td>(FAO, 2020)</td>
                        <td>FAO (2020)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">No date</td>
                        <td>(Soost, n.d.)</td>
                        <td>Soost (n.d.)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">No page number</td>
                        <td>(Esen, 2020, Chapter 2), (Swingle, 2015, para. 5), (Miller, 2022, Table 3)</td>
                        <td>Esen (2020, Chapter 2), Swingle (2015, para. 5), Miller (2022, Table 3)</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Websites and software</td>
                        <td>Scribbr (www.scribbr.com)</td>
                        <td>SPSS (version 25)</td>
                    </tr>
                </tbody>
            </table>

            <h3>References</h3>
            <ol>
                <li>Although the reference format differs depending on the type of source (e.g., a book, webpage, or video),
                    they’re built from the same four components i.e. author, date, title and source.</li>
                <li>In an APA reference, the author’s name is inverted: start with the last name, followed by a comma and
                    the initials, separated by a period and space.</li>
                <li>Treat infixes, such as “Van” or “De”, as part of the last name. Don’t include personal titles such as
                    Ph.D. or Dr. but do include suffixes. e.g. Smith, T. H. J., Van der Molen, R., Brown, A. T. W., Jr. and
                    Lee, B.-K.</li>
                <li>Separate the names of multiple authors with commas. Before the last author’s name, you should also
                    insert an ampersand (&). e.g. Asim, W., & Kelley, P. D. OR Asim, W., Kelley, P. D., & Wang, M.</li>
                <li>A reference entry may contain up to 20 authors. If there are more than 20, list the first 19 authors,
                    followed by an ellipsis (. . .) and the last author’s name. e.g. Miller, T. C., Brown, M. J., Wilson, G.
                    L., Evans, B. B., Kelly, R. S., Turner, S. T., Lewis, F., Nelson, T. P., Cox, G., Harris, H. L., Martin,
                    P., Gonzalez, W. L., Hughes, W., Carter, D., Campbell, C., Baker, A. B., Flores, T., Gray, W. E., Green,
                    G., . . . Lee, L. H.</li>
                <li>When an organization or group is listed as the author of a source (e.g., a report or brochure), list the
                    name in full—don’t use abbreviations. If multiple organizations or groups are responsible for creating
                    the work, include them all in the reference entry. Do not use commas to separate two group authors. e.g.
                    Centers for Disease Control and Prevention (not CDC) OR Microsoft & Apple</li>
                <li>If contributors have a different role than “author” (i.e. Editor), a description of their role is
                    sometimes (but not always) included in parentheses. e.g. Author: Last name, A. A. OR Editor: Last name,
                    A. A. (Ed.). Note: Abbreviate the editor role to “Ed.” (one editor) or “Eds.” (multiple editors). The
                    “date” component appears after the “author” component [e.g. (2020), (2020, January), (2020, January 15),
                    (1997–1999)]. Use the following guidelines to determine the publication date:
                    <ul>
                        <li>For books, always take the copyright date.</li>
                        <li>For journal articles, take the year in which the volume was published.</li>
                        <li>For web pages, you may use the “Last updated” date if it applies to the content you’re citing.
                            Don’t take the copyright date from the footer of a website.</li>
                    </ul>
                </li>
                <li>Only provide the retrieval date (i.e., the date you consulted the information) if work is designed to
                    change overtime. Examples include Online dictionary entries or Dashboards with statistics (FAOstat). The
                    retrieval date appears after the source title and before the URL. Write the word “Retrieved” followed by
                    the month, day, and year.</li>
                <li>When citing multiple works from the same author, published in the same year, you need to add a lowercase
                    letter after the year to distinguish between them. e.g. Raza, J. (2014a) or Raza, J. (2014b).</li>
                <li>Works that can be accessed online usually have a URL or DOI (digital object identifier). A DOI is often
                    used for scientific publications and books, while URL is more common for other online publications. Use
                    the following guidelines:</li>
                <li>If available, always add a DOI
                    <ul>
                        <li>A DOI is preferred over a URL (because it never changes)</li>
                        <li>Include the protocol (http:// or https://) for both DOIs and URLs</li>
                        <li>Do not add a period after the DOI or URL</li>
                    </ul>
                </li>
            </ol>

            <b>Journal article</b>
            <p>Shafqat, W., Jaskani, M. J., Maqbool, R., Chattha, W. S., Ali, Z., Naqvi, S. A., Haider, M. S., Khan, I. A.,
                & Vincent, C. I. (2021). Heat shock protein and aquaporin expression enhance water conserving behavior of
                citrus under water deficits and high temperature conditions. Environmental and Experimental Botany, 54,
                104270. doi.org/10.1016/j.envexpbot.2020.104270</p>
            <b>Same author, same date</b>
            <p>Esen, A., & Soost, R. K. (1971a). Unexpected triploids in Citrus: their origin, identification, and possible
                use. Journal of Heredity, 62(6), 329-333. doi.org/10.1093/oxfordjournals.jhered.a108186</p>
            <p>Esen, A., & Soost, R. K. (1971b). Tetraploid progenies from 2x × 4x crosses of Citrus and their origin.
                Journal of the American Society for Horticultural Science, 97(3), 410-414. 10.21273/JASHS.97.3.410</p>
            <b>Books</b>
            <p>Brady, N. C., & Weil, R. R. (2016). The nature and properties of soils (15th ed.). Pearson United States.</p>
            <p>Faiz, S., Ashraf, U., Attia, K. A., & Amir, R. M. (Eds.). (2025). Climate smart agriculture for future food
                security. Springer Singapore.</p>
            <p>Food and Agriculture Organization (FAO). (2024). World Food and Agriculture – Statistical Yearbook 2024. FAO
                Rome.</p>
            <b>Chapter in an edited book</b>
            <p>Naqvi, S. A., Waseem, M., Naqvi, T. A., Jaskani, M. J., & Khan, I. A. (2023). Diversity, conservation, and
                utilization of date palm germplasm. In J. M. Al-Khayri, S. M. Jain, D. V. Johnson & R. R. Kreuger (Eds.),
                Date palm (pp. 65-89). CAB International.</p>
            <b>Online newspaper article</b>
            <p>Popkin, G. (2020, August 12). Global warming could unlock carbon from tropical soil. The New York Times.
                https://www.nytimes.com/2020/08/12/climate/tropical-soils-climate-change.html</p>
            <b>Webpage (changing over time)</b>
            <ul>
                <li>Food and Agriculture Organization of the United Nations. (2025, June 10). Global information and early
                    warning system on food and agriculture (GIEWS). FAO. Retrieved October 7, 2025, from
                    https://www.fao.org/giews/en/</li>
                <li>Pakistan Bureau of Statistics. (2025). Agriculture statistics of Pakistan. Government of Pakistan.
                    Retrieved October 7, 2025, from https://www.pbs.gov.pk/content/agriculture-statistics</li>
                <li>United States Department of Agriculture. (2025, September). Crop progress report. USDA. Retrieved
                    October 7, 2025, from https://www.nass.usda.gov/Publications/National_Crop_Progress/</li>
                <li>World Bank. (2025). Agriculture and rural development data. World Bank. Retrieved October 7, 2025, from
                    https://data.worldbank.org/topic/agriculture-and-rural-development</li>
            </ul>
            <b>YouTube video (platform)</b>
            <ul>
                <li>CIMMYT. (2025, March 10). Climate-smart wheat farming techniques in South Asia [Video]. YouTube.
                    https://www.youtube.com/watch?v=efgh9101</li>
                <li>Food and Agriculture Organization of the United Nations. (2024, November 12). How digital innovation is
                    transforming agriculture [Video]. YouTube. https://www.youtube.com/watch?v=abcd1234</li>
                <li>United States Department of Agriculture. (2023, August 3). Sustainable farming practices for the future
                    [Video]. YouTube. https://www.youtube.com/watch?v=wxyz5678</li>
                <li>World Bank. (2024, September 22). Empowering smallholder farmers through digital tools [Video]. YouTube.
                    https://www.youtube.com/watch?v=hijk1122</li>
            </ul>
            <b>Blog post (website)</b>
            <ul>
                <li>Iqbal, S. (2023, August 18). 5 ways Al is reshaping modern agriculture. AgriTech Insights.
                    https://agritechinsights.com/ai-in-agriculture</li>
                <li>Khan, M. A. (2024, December 2). Why regenerative agriculture matters for Pakistan's future. AgriToday
                    Blog. https://agritoday.pk/regenerative-agriculture-pakistan</li>
                <li>International Fund for Agricultural Development. (2024, May 12). Digital tools empowering farmers across
                    Asia [Blog post]. IFAD. https://www.ifad.org/en/blogs/digital-agriculture</li>
            </ul>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="table-bg" colspan="4">Abbreviations in APA references</th>
                    </tr>
                    <tr>
                        <th class="table-bg">Words</th>
                        <th class="table-bg">Abbreviation</th>
                        <th class="table-bg">Words</th>
                        <th class="table-bg">Abbreviation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-bg">Revised edition</td>
                        <td>Rev. ed.</td>
                        <td class="table-bg">Page(s)</td>
                        <td>p. / pp.</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Second edition</td>
                        <td>2nd ed.</td>
                        <td class="table-bg">Paragraph</td>
                        <td>para.</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Editor(s)</td>
                        <td>Ed. / Eds.</td>
                        <td class="table-bg">Volume(s)</td>
                        <td>Vol. / Vols.</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Translator(s)</td>
                        <td>Trans.</td>
                        <td class="table-bg">(Issue) number</td>
                        <td>No.</td>
                    </tr>
                    <tr>
                        <td class="table-bg">Narrator(s)</td>
                        <td>Narr. / Narrs.</td>
                        <td class="table-bg">Supplement</td>
                        <td>Suppl.</td>
                    </tr>
                    <tr>
                        <td class="table-bg">No date</td>
                        <td>n.d.</td>
                        <td class="table-bg"></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <h2 id="tables-figures">Tables and Figures:</h2>
            <ul>
                <li>File for Figures and Schemes must be provided during submission in a single zip archive and at a
                    sufficiently high resolution (minimum 1000 pixels width/height, or a resolution of 300 dpi or higher).
                    Common formats are accepted; however, TIFF, JPEG, EPS and PDF are preferred.</li>
                <li>All Figures and Tables should be inserted into the main text close to their first citation and must be
                    numbered following their number (Arabic numerals) of appearance (Figure 1, Table 1, etc.).</li>
                <li>All Figures and Tables should have a short explanatory title and caption. The same data may not be
                    presented in tabular and graphical form.</li>
                <li>All table columns should have an explanatory heading. To facilitate the copy-editing of larger tables,
                    smaller fonts may be used, but no less than 8 pt. in size. Authors should use the Table option of
                    Microsoft Word to create tables.</li>
            </ul>
            <h2 id="revenue-sources">5. Revenue Source</h2>
            <p>This is a self-financed Open Access journal, not supported by any agency or government. Article printing
                charges are the only source of income. These resources support operating expense, including copyediting,
                typesetting, long-term archiving, and journal management.</p>
            <h2 id="article-printing-charges">6. Article Processing Charges</h2>
            <p>All articles are published in full Open Access. There are no processing charges for submitted articles. To
                provide free access to readers, and to cover the costs of peer review, copyediting, typesetting, long-term
                archiving, and journal management, an article printing charges (APC) of PKR 25,000 (national) and US$ 200
                (international) applies to papers accepted after peer review. The Article Printing Charges (APC) are based
                on reduced rates for authors of low- and middle-income countries.</p>
            <p>We consider individual waiver requests for articles on a case-by-case basis, and they may be granted in cases
                of lack of funds. To apply for a waiver, please request during the submission process. A decision on the
                waiver will normally be made within three working days. Requests made during the review process or after
                acceptance will not be considered.</p>
        </div>
    </div>
@endsection