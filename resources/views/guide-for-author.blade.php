@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.guide-for-author')
@endsection
@section('content')
    <div class="bg-white mt-3">
        <div class="m-2 p-2">
            <h2 id="submission-checklist">Submission Checklist</h2>
            <p>Please:</p>
            <ul>
                <li>Read the Aims & Scope to gain an overview and assess if your manuscript is suitable for this journal.</li>
                <li>Use the Microsoft Word template to prepare your manuscript.</li>
                <li>Make sure that issues about publication ethics, research ethics, copyright, authorship, figure formats, data and references format have been appropriately considered.</li>
                <li>Ensure that all authors have approved the content of the submitted manuscript.</li>
            </ul>

            <h2 id="research-publication-ethics">Research and Publication Ethics</h2>
            <h3>A) RESEARCH ETHICS</h3>
            <h4>Research Involving Plants:</h4>
            <p>Experimental research involving plants, whether they are cultivated or wild, must adhere to institutional, national, or international guidelines. Authors are advised to adhere to the Convention on Biological Diversity and the Convention on the Trade in Endangered Species of Wild Fauna and Flora.</p>
            <p>Every submitted manuscript should include genetic information and specify the origin of the plant material. For studies focusing on rare and non-model plants (excluding common model plants like Arabidopsis thaliana, Nicotiana benthamiana, Oryza sativa, etc.), voucher specimens must be placed in an accessible herbarium or museum. These vouchers may be requested by future researchers to confirm the identity of the materials used, especially if there are taxonomic changes in the future. They should include collection site details (GPS coordinates), collection date, and documentation of the part(s) utilized in the study, if applicable.</p>
            <p><strong>Ethical Statement:</strong> Psidium guajava trees were used in this study. Pear-shaped fruit with pink flesh (FrP) and Pear-shaped fruit with white flesh (FrW) cultivars selected from orchard (name of farm, city, country) were kindly provided by Dr. XX (name of institute, city, country).</p>

            <h4>Research Involving Animals</h4>
            <p>The well-being of animals involved in research must be upheld. When presenting findings from experiments involving animals, authors are required to specify adherence to international, national, and/or institutional protocols for animal care and use. Authors are expected to adhere to the widely accepted principles known as the 3Rs and provide detailed information on housing, care, and pain management in their manuscripts. Additional guidance can be found in documents such as the Code of Practice for the Housing and Care of Animals Used in Scientific Procedures, American Association for Laboratory Animal Science or European Animal Research Association.</p>
            <p>Additionally, confirmation of approval from a research ethics committee within the conducting institution or practice should be provided (if such a committee exists). Authors should furnish the name of the ethics committee and the corresponding permit number.</p>
            <p>For studies involving animals, the following statement should precede the References section:</p>
            <p><strong>Ethical approval:</strong> "All relevant international, national, and/or institutional guidelines for animal care and use were observed".</p>
            <p>Where applicable (if a committee exists): "All procedures carried out in studies involving animals adhered to the ethical standards of the conducting institution or practice. (Please include the name of the committee + permit number)".</p>

            <h4>Research Involving Humans:</h4>
            <p>When documenting research involving human participants, authors are obligated to disclose that the studies have received approval from the relevant institutional and/or national research ethics committee and have been conducted in accordance with the ethical principles outlined in the 1964 Declaration of Helsinki and its subsequent revisions or similar ethical standards. If there is uncertainty regarding adherence to the 1964 Helsinki Declaration or equivalent standards, authors must elucidate the rationale behind their approach and provide evidence that the independent ethics committee or institutional review board has explicitly sanctioned any questionable aspects of the study.</p>
            <p>In cases where a study has been exempted from requiring ethics approval, this exemption should be clearly delineated in the manuscript, including the identity of the ethics committee granting the exemption and the reasons for it. Regardless of the circumstance, authors are required to specify the name of the ethics committee and the corresponding reference number when applicable.</p>
            <p>The following statements should precede the References section of the manuscript:</p>
            <p><strong>Ethical approval:</strong> "All procedures conducted in studies involving human participants were conducted in accordance with the ethical standards set forth by the institutional and/or national research committee (including the name of the committee + reference number) and in compliance with the 1964 Helsinki Declaration and its subsequent revisions or similar ethical standards."</p>
            <p><strong>Ethical approval for retrospective studies:</strong> Although retrospective studies utilize pre-existing data or biological material (for which formal consent may be unnecessary or difficult to obtain), ethical approval may still be mandated based on the laws and national ethical guidelines of the respective country. Authors are advised to verify with their institution to ensure compliance with the specific requirements of their country.</p>
            <p>The editorial team will carefully review all ethical statements. Manuscripts that do not have a suitable ethical statement will be sent back to the authors and will not be considered until an appropriate and clear statement is added.</p>

            <h4>Sex and Gender in Research</h4>
            <p>Authors must include sex and gender considerations where relevant and follow the SAGER guidelines. It is important for authors to differentiate between the terms sex (biological attribute) and gender (influenced by social and cultural contexts) accurately to prevent confusion. Clear indication of the relevant sex(es) should be provided in article titles and/or abstracts. Authors should outline in the background whether sex and/or gender differences might be anticipated, detail how these factors were addressed in the study design, present disaggregated data by sex and/or gender when suitable and discuss corresponding findings. In cases where a sex and/or gender analysis was not conducted, authors should explain the rationale in the discussion section. The authors must review the complete guidelines prior to submission.</p>

            <h4>Borders and Territories</h4>
            <p>Authors must consider borders and territories when describing their research or in author or editor correspondence, and all territorial disputes should be respected. The editorial team will work to resolve any dispute or complaint that is acceptable to all parties involved. Editors stay neutral regarding jurisdictional claims in published maps and institutional affiliations.</p>

            <h3>B) Publication Ethics</h3>
            <p>The authors must follow the code of conduct and guidelines of the Committee on Publication Ethics (COPE) when misconduct is suspected or alleged. The following issues are highlighted.</p>
            <p><strong>Originality and plagiarism:</strong> The authors should ensure that their work is original, and if the authors have used the work and/or words of others, then this must be appropriately cited or quoted.</p>
            <p>Please note that we use the Turnitin to screen manuscripts for plagiarism/similarity risks. By submitting the manuscript to the journal, the authors agree to any originality checks the manuscript may undergo during peer-review and production and processes.</p>
            <p><strong>Data access and retention:</strong> Authors may be asked to provide raw data in connection with a paper for editorial review and should be prepared to provide public access to such data.</p>
            <p><strong>Multiple, redundant, or concurrent publication:</strong> An author should not publish manuscripts describing essentially the same research in more than one journal or primary publication.</p>
            <p>Where author or peer reviewer misconduct is identified, a due process will be followed to investigate the issue, giving those involved a right to appeal in a formal way. The publisher and editor(s) will deal with the allegations of research misconduct according to COPE guidelines.</p>

            <h4>Citations:</h4>
            <ul>
                <li>Authors should ensure that where material is taken from other sources (including their own published writing), the source is clearly cited and that where appropriate permission is obtained.</li>
                <li>Authors should not engage in excessive self-citation of their own work.</li>
                <li>Authors should not copy references from other publications if they have not read the cited work.</li>
                <li>Authors should not preferentially cite their own or their friends’, peers’, or institution’s publications.</li>
                <li>Authors should not cite advertisements or advertorial material.</li>
                <li>In accordance with COPE guidelines, we expect that “original wording taken directly from publications by other researchers should appear in quotation marks with the appropriate citations”. This condition also applies to an author’s own work. COPE have produced a discussion document on citation manipulation with recommendations for best practice.</li>
            </ul>

            <h2 id="manuscript-preparation">2. Manuscript Preparation</h2>
            <p>The responsibility for the preparation of a paper according to the layout and style of the journal lies with the author(s). The research papers, not according to the format of the journal, will not be accepted. <a href="#">Sample Paper</a></p>
            <h3>General Considerations:</h3>
            <p>Research manuscripts should comprise:</p>
            <ul>
                <li><strong>Front matter:</strong> Title, Author list, Affiliations, Abstract, Keywords, Short title</li>
                <li><strong>Research manuscript sections:</strong> Introduction, Materials and Methods, Results, Discussion, Conclusions.</li>
                <li><strong>Back matter:</strong> Acknowledgments, Author Contributions, Conflicts of Interest, References.</li>
            </ul>
            <p>Review manuscripts should comprise the front matter, literature review sections and the back matter. It is not necessary to follow the remaining structure.</p>
            <ul>
                <li>Acronyms/Abbreviations/Initialisms should be defined the first time they appear in each of three sections: the abstract; the main text; the first figure or table. When defined for the first time, the acronym/abbreviation/initialism should be added in parentheses after the written-out form.</li>
                <li>SI Units (International System of Units) should be used.</li>
                <li>Accession numbers of RNA, DNA and protein sequences used in the manuscript should be provided in the Materials and Methods section.</li>
                <li><strong>Equations:</strong> If you are using Microsoft Word, please use either the Equation Editor or the MathType add-on. Equations should be editable by the editorial office and not appear in a picture format.</li>
            </ul>

            <h3>Front Matter:</h3>
            <p>These sections should appear in all manuscript types.</p>
            <ul>
                <li><strong>Title:</strong> The title of manuscript should be concise, specific, and relevant. It should identify if the study reports trial data or is a systematic review. When species, gene or protein names are included, the abbreviated name rather than full name should be used.</li>
                <li><strong>Author’s and Affiliations:</strong> Authors' full names must be provided. Author(s) complete address information including city, zip code, state/province, and country must be written. At least one author should be designated as the corresponding author, and their email address and other details included at the end of the affiliation section. After acceptance, updates to author names or affiliations may not be permitted.</li>
                <li><strong>Abstract:</strong> The abstract should be a total of about 200 words maximum. The abstract should be a single paragraph and should follow the style of structured abstracts, but without headings: 1) Background: Place the question addressed in a broad context and highlight the purpose of the study; 2) Methods: Briefly describe the main methods or treatments applied. 3) Results: Summarize the article's main findings; and 4) Conclusion: Indicate the main conclusions or interpretations. The abstract should be an objective representation of the article: it must not contain results which are not presented and substantiated in the main text and should not exaggerate the main conclusions.</li>
                <li><strong>Keywords:</strong> Five to eight pertinent keywords need to be added after the abstract. We recommend that the keywords are specific to the article, yet reasonably common within the subject discipline.</li>
            </ul>

            <h3>Research Manuscript Sections:</h3>
            <ul>
                <li><strong>Introduction:</strong> The introduction should briefly place the study in a broad context and highlight why it is important. It should define the purpose of the work and its significance, including specific hypotheses being tested. The current state of the research field should be reviewed carefully, and key publications cited. Please highlight controversial and diverging hypotheses when necessary. Finally, briefly mention the main aim of the work. Keep the introduction comprehensible to scientists working outside the topic of the paper.</li>
                <li><strong>Materials and Methods:</strong> They should be described with sufficient detail to allow others to replicate and build on published results. New methods and protocols should be described in detail while well-established methods can be briefly described and appropriately cited. Give the name and version of any equipment/software used.</li>
                <li><strong>Results:</strong> Provide a concise and precise description of the experimental results, their interpretation as well as the experimental conclusions that can be drawn.</li>
                <li><strong>Discussion:</strong> Authors should discuss the results and how they can be interpreted in perspective of previous studies and of the working hypotheses. The findings and their implications should be discussed in the broadest context possible, and limitations of the work highlighted. Future research directions may also be mentioned. This section may be combined with Results.</li>
                <li><strong>Conclusions:</strong> This section is mandatory, with one or two paragraphs to end the main text.</li>
            </ul>

            <h3>Back Matter:</h3>
            <ul>
                <li><strong>Acknowledgments:</strong> In this section you can acknowledge any support given which is not covered by the author’s contribution or funding sections. This may include administrative and technical support, or donations in kind (e.g., materials used for experiments).</li>
                <li><strong>Funding:</strong> All sources of funding for the study should be disclosed. Clearly indicate grants that you have received in support of your research work and if you received funds to cover publication costs. Note that some funders will not refund article printing charges (APC) if the funder and grant number are not clearly and correctly identified in the paper. Please add: “This research received no external funding” or “This research was funded by [name of funder] grant number [xxx]” and “The APC was funded by [xxx]” in this section.</li>
                <li><strong>CRediT Author Statement:</strong> Each author is expected to have made substantial contributions to the conception or design of the work; or the acquisition, analysis, or interpretation of data; or the creation of new software used in the work; or have drafted the work or substantively revised it; AND has approved the submitted version (and version substantially edited by journal staff that involves the author’s contribution to the study); AND agrees to be personally accountable for the author’s own contributions and for ensuring that questions related to the accuracy or integrity of any part of the work, even ones in which the author was not personally involved, are appropriately investigated, resolved, and documented in the literature. Please turn to the CRediT taxonomy for the term explanation. For research articles with several authors, a short paragraph specifying their individual contributions must be provided.</li>
                <li><strong>Conflict of Interest:</strong> Authors must identify and declare any personal circumstances or interest that may be perceived as influencing the representation or interpretation of reported research results. Any role of the funding sponsors in the choice of research project; design of the study; in the collection, analyses, or interpretation of data; in the writing of the manuscript; or in the decision to publish the results must be declared in this section. Any projects funded by industry must pay special attention to the full declaration of funder involvement. For more details, please see Conflict of Interest.</li>
            </ul>

            <h3>Sample Statements</h3>
            <ul>
                <li><strong>Acknowledgement:</strong> The authors wish to acknowledge PCSIR Laboratories, Islamabad, for chemical analyses OR The authors thank Professor I.A. Khan for critical review and suggestions to improve this manuscript.</li>
                <li><strong>CRediT author statement:</strong> M. Qasim conceived the idea, designed the study and supervised research project; W. Li co-supervised research study and performed data analysis; A.A. Ghorab assisted in layout of experiment and field data collection; A.G. Kumar contributed in the framing and executing the research idea and assisted in design layout; S.A. Naqvi assisted in data collection, laboratory work and proofreading; A.D. John reviewed and edited the manuscript. <br> M.A. Ahsen, S.A. Naqvi, M.J. Jaskani designed and ran experiments; M. Waseem, I.A. Khan, K. Hussnain drafted; K. Mehmood, M.M. Khan finalized the draft.</li>
                <li><strong>Funding:</strong> The authors acknowledge Higher Education Commission, Pakistan for funding (Project No. NRPU-8781) OR This research was supported, in part, by Plant Research Laboratories, Pakistan for the micropropagation experiment.</li>
                <li><strong>Conflict of interest:</strong> The authors declare no conflict of interest OR The sponsors had no role in the design, execution, interpretation, or publishing this study.</li>
                <li><strong>Ethical statement:</strong> This article does not contain any studies requiring ethics committee approval.</li>
                <li><strong>Availability of data and material:</strong> Data is available upon request to the corresponding author.</li>
                <li><strong>Consent to participate:</strong> All participants consented for this research study.</li>
                <li><strong>Informed consent:</strong> Participants signed consent for publishing data and photographs.</li>
                <li><strong>Consent for publication:</strong> All authors consented to publish this research in this journal.</li>
                <li><strong>SDGs addressed:</strong> No poverty, Zero hunger, Good health and well-being, etc.</li>
                <li><strong>Policy referred:</strong> Sustainable agriculture, Dairy sector, Food security, Rural development, Food and Nutrition, Economic growth, climate change, GHG emission etc.</li>
                <li><strong>Publisher’s note:</strong> All claims are solely those of the authors and do not represent the views of their institutions or the publisher.</li>
            </ul>

            <h2 id="citation-style">Citation and Reference Style</h2>
            <h3>In-text Citations:</h3>
            <p>APA in-text citations consist of the author’s last name and publication year, e.g. (Jaskani, 2022). When citing a specific part of a source, also include a page number or range, for example (Jaskani, 2022, p. 72) or (John, 2019, pp. 5–14).</p>
            <p>The in-text citation can be placed in parentheses or naturally integrated into a sentence.</p>
            <ul>
                <li><strong>Parenthetical:</strong> There is a correlation between fertilizer dose and growth of citrus trees (Jaskani, 2022) OR Triploid citrus trees produce seedless fruits (Jaskani & Khan, 2018; Naqvi et al., 2021).</li>
                <li><strong>Narrative:</strong> Jaskani (2022) found a correlation between fertilizer dose and growth of citrus trees OR Jaskani and Khan (2018) reported that triploid citrus trees produce seedless fruits.</li>
            </ul>
            <p>If a work has two authors, separate their names with an ampersand (&) in a parenthetical citation or “and” in a narrative citation. If there are three or more authors, only include the first author’s last name followed by “et al.”, meaning “and others”.</p>
            <p>Group authors known by their abbreviations (e.g., FAO) are written in full the first time and are abbreviated in subsequent citations.</p>
            <p>If the author of a source is unknown, try to determine if there is an organization or government responsible for creating the content. If so, include its name in the in-text citation (and reference entry). e.g. (Tesla, 2020), FAO, 2024), (WHO, 2025).</p>
            <p>If a statement is supported by multiple sources, the in-text citations can be combined in one parenthesis. Order the sources alphabetically and separate them with a semicolon. Where citing multiple works from the same author, list the years of publication separated by a comma. e.g. (Fred, 2010; Jude, 2005; Simon, 2012, 2018).</p>
            <p>The following table shows the basic in-text citation styles:</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Author type</th>
                        <th>Parenthetical citation</th>
                        <th>Narrative citation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>One author</td>
                        <td>(Asim, 2020)</td>
                        <td>Asim (2020)</td>
                    </tr>
                    <tr>
                        <td>Two authors</td>
                        <td>(Yasir & Khan, 2020)</td>
                        <td>Yasir and Khan (2020)</td>
                    </tr>
                    <tr>
                        <td>Three or more authors</td>
                        <td>(Robinson et al., 2020)</td>
                        <td>Robinson et al. (2020)</td>
                    </tr>
                    <tr>
                        <td>The Same Author and year</td>
                        <td>(Esen, 2019a)<br>(Esen, 2019b)<br>(Esen, 2019a,b)</td>
                        <td>Esen (2019a)<br>Esen (2019b)<br>Esen (2019a,b)</td>
                    </tr>
                    <tr>
                        <td>Different authors with the same last name</td>
                        <td>(S. Khan, 2018)<br>(I. A. Khan, 2018)</td>
                        <td>S. Khan (2018)<br>I. A. Khan (2018)</td>
                    </tr>
                    <tr>
                        <td>Citing multiple works</td>
                        <td>(Ahmad et al., 2019; Meyer, 2015; Wang & Deng, 2014) or<br>(FAO, 2018, 2020, 2021)</td>
                        <td>Ahmad et al. (2019), Meyer (2015), and Wang and Deng (2014) or<br>FAO (2018, 2020, 2021)</td>
                    </tr>
                    <tr>
                        <td>Personal Communication</td>
                        <td>(J. W. Cameron, personal communication, February 12, 1979)</td>
                        <td>J. W. Cameron (personal communication, February 12, 1979)</td>
                    </tr>
                    <tr>
                        <td>Abbreviated group author</td>
                        <td>(National Institute of Mental Health [NIMH], 2020)<br>(NIMH, 2020)</td>
                        <td>National Institute of Mental Health (NIMH, 2020)<br>NIMH (2020)</td>
                    </tr>
                    <tr>
                        <td>Without abbreviation group author</td>
                        <td>(Stanford University, 2021)</td>
                        <td>Stanford University (2021)</td>
                    </tr>
                    <tr>
                        <td>No author</td>
                        <td>(FAO, 2020)</td>
                        <td>FAO (2020)</td>
                    </tr>
                    <tr>
                        <td>No date</td>
                        <td>(Soost, n.d.)</td>
                        <td>Soost (n.d.)</td>
                    </tr>
                    <tr>
                        <td>No page number</td>
                        <td>(Esen, 2020, Chapter 2), (Swingle, 2015, para. 5), (Miller, 2022, Table 3)</td>
                        <td>Esen (2020, Chapter 2), Swingle (2015, para. 5), Miller (2022, Table 3)</td>
                    </tr>
                    <tr>
                        <td>Websites and software</td>
                        <td>Scribbr (www.scribbr.com)<br>SPSS (version 25)</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <h3>References</h3>
            <p>Although the reference format differs depending on the type of source (e.g., a book, webpage, or video), they’re built from the same four components i.e. author, date, title and source.</p>
            <ul>
                <li>In an APA reference, the author’s name is inverted: start with the last name, followed by a comma and the initials, separated by a period and space.</li>
                <li>Treat infixes, such as “Van” or “De”, as part of the last name. Don’t include personal titles such as Ph.D. or Dr. but do include suffixes. e.g. Smith, T. H. J., Van der Molen, R., Brown, A. T. W., Jr. and Lee, B.-K.</li>
                <li>Separate the names of multiple authors with commas. Before the last author’s name, you should also insert an ampersand (&). e.g. Asim, W., & Kelley, P. D. OR Asim, W., Kelley, P. D., & Wang, M.</li>
                <li>A reference entry may contain up to 20 authors. If there are more than 20, list the first 19 authors, followed by an ellipsis (. . .) and the last author’s name. e.g. Miller, T. C., Brown, M. J., Wilson, G. L., Evans, B. B., Kelly, R. S., Turner, S. T., Lewis, F., Nelson, T. P., Cox, G., Harris, H. L., Martin, P., Gonzalez, W. L., Hughes, W., Carter, D., Campbell, C., Baker, A. B., Flores, T., Gray, W. E., Green, G., . . . Lee, L. H.</li>
                <li>When an organization or group is listed as the author of a source (e.g., a report or brochure), list the name in full—don’t use abbreviations. If multiple organizations or groups are responsible for creating the work, include them all in the reference entry. Do not use commas to separate two group authors. e.g. Centers for Disease Control and Prevention (not CDC) OR Microsoft & Apple</li>
                <li>If contributors have a different role than “author” (i.e. Editor), a description of their role is sometimes (but not always) included in parentheses. e.g. Author: Last name, A. A. OR Editor: Last name, A. A. (Ed.). Note: Abbreviate the editor role to “Ed.” (one editor) or “Eds.” (multiple editors). The “date” component appears after the “author” component [e.g. (2020), (2020, January), (2020, January 15), (1997–1999)]. Use the following guidelines to determine the publication date:
                    <ul>
                        <li>For books, always take the copyright date.</li>
                        <li>For journal articles, take the year in which the volume was published.</li>
                        <li>For web pages, you may use the “Last updated” date if it applies to the content you’re citing. Don’t take the copyright date from the footer of a website.</li>
                    </ul>
                </li>
                <li>Only provide the retrieval date (i.e., the date you consulted the information) if work is designed to change overtime. Examples include Online dictionary entries or Dashboards with statistics (FAOstat). The retrieval date appears after the source title and before the URL. Write the word “Retrieved” followed by the month, day, and year.</li>
                <li>When citing multiple works from the same author, published in the same year, you need to add a lowercase letter after the year to distinguish between them. e.g. Raza, J. (2014a) or Raza, J. (2014b).</li>
                <li>Works that can be accessed online usually have a URL or DOI (digital object identifier). A DOI is often used for scientific publications and books, while URL is more common for other online publications. Use the following guidelines:
                    <ul>
                        <li>If available, always add a DOI</li>
                        <li>A DOI is preferred over a URL (because it never changes)</li>
                        <li>Include the protocol (http:// or https://) for both DOIs and URLs</li>
                        <li>Do not add a period after the DOI or URL</li>
                    </ul>
                </li>
            </ul>

            <h4>Journal article</h4>
            <p>Shafqat, W., Jaskani, M. J., Maqbool, R., Chattha, W. S., Ali, Z., Naqvi, S. A., Haider, M. S., Khan, I. A., & Vincent, C. I. (2021). Heat shock protein and aquaporin expression enhance water conserving behavior of citrus under water deficits and high temperature conditions. Environmental and Experimental Botany, 54, 104270. doi.org/10.1016/j.envexpbot.2020.104270</p>
            <h4>Same author, same date</h4>
            <p>Esen, A., & Soost, R. K. (1971a). Unexpected triploids in Citrus: their origin, identification, and possible use. Journal of Heredity, 62(6), 329-333. doi.org/10.1093/oxfordjournals.jhered.a108186</p>
            <p>Esen, A., & Soost, R. K. (1971b). Tetraploid progenies from 2x × 4x crosses of Citrus and their origin. Journal of the American Society for Horticultural Science, 97(3), 410-414. 10.21273/JASHS.97.3.410</p>
            <h4>Books</h4>
            <p>Brady, N. C., & Weil, R. R. (2016). The nature and properties of soils (15th ed.). Pearson United States.</p>
            <p>Faiz, S., Ashraf, U., Attia, K. A., & Amir, R. M. (Eds.). (2025). Climate smart agriculture for future food security. Springer Singapore.</p>
            <p>Food and Agriculture Organization (FAO). (2024). World Food and Agriculture – Statistical Yearbook 2024. FAO Rome.</p>
            <h4>Chapter in an edited book</h4>
            <p>Naqvi, S. A., Waseem, M., Naqvi, T. A., Jaskani, M. J., & Khan, I. A. (2023). Diversity, conservation, and utilization of date palm germplasm. In J. M. Al-Khayri, S. M. Jain, D. V. Johnson & R. R. Kreuger (Eds.), Date palm (pp. 65-89). CAB International.</p>
            <h4>Online newspaper article</h4>
            <p>Popkin, G. (2020, August 12). Global warming could unlock carbon from tropical soil. The New York Times. https://www.nytimes.com/2020/08/12/climate/tropical-soils-climate-change.html</p>
            <h4>Webpage (changing over time)</h4>
            <p>Food and Agriculture Organization of the United Nations. (2025, June 10). Global information and early warning system on food and agriculture (GIEWS). FAO. Retrieved October 7, 2025, from https://www.fao.org/giews/en/</p>
            <p>Pakistan Bureau of Statistics. (2025). Agriculture statistics of Pakistan. Government of Pakistan. Retrieved October 7, 2025, from https://www.pbs.gov.pk/content/agriculture-statistics</p>
            <p>United States Department of Agriculture. (2025, September). Crop progress report. USDA. Retrieved October 7, 2025, from https://www.nass.usda.gov/Publications/National_Crop_Progress/</p>
            <p>World Bank. (2025). Agriculture and rural development data. World Bank. Retrieved October 7, 2025, from https://data.worldbank.org/topic/agriculture-and-rural-development</p>
            <h4>YouTube video (platform)</h4>
            <p>CIMMYT. (2025, March 10). Climate-smart wheat farming techniques in South Asia [Video]. YouTube. https://www.youtube.com/watch?v=efgh9101</p>
            <p>Food and Agriculture Organization of the United Nations. (2024, November 12). How digital innovation is transforming agriculture [Video]. YouTube. https://www.youtube.com/watch?v=abcd1234</p>
            <p>United States Department of Agriculture. (2023, August 3). Sustainable farming practices for the future [Video]. YouTube. https://www.youtube.com/watch?v=wxyz5678</p>
            <p>World Bank. (2024, September 22). Empowering smallholder farmers through digital tools [Video]. YouTube. https://www.youtube.com/watch?v=hijk1122</p>
            <h4>Blog post (website)</h4>
            <p>Iqbal, S. (2023, August 18). 5 ways AI is reshaping modern agriculture. AgriTech Insights. https://agritechinsights.com/ai-in-agriculture</p>
            <p>Khan, M. A. (2024, December 2). Why regenerative agriculture matters for Pakistan’s future. AgriToday Blog. https://agritoday.pk/regenerative-agriculture-pakistan</p>
            <p>International Fund for Agricultural Development. (2024, May 12). Digital tools empowering farmers across Asia [Blog post]. IFAD. https://www.ifad.org/en/blogs/digital-agriculture</p>

            <h3>Abbreviations in APA references</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Words</th>
                        <th>Abbreviation</th>
                        <th>Words</th>
                        <th>Abbreviation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Revised edition</td>
                        <td>Rev. ed.</td>
                        <td>Page(s)</td>
                        <td>p. / pp.</td>
                    </tr>
                    <tr>
                        <td>Second edition</td>
                        <td>2nd ed.</td>
                        <td>Paragraph</td>
                        <td>para.</td>
                    </tr>
                    <tr>
                        <td>Editor(s)</td>
                        <td>Ed. / Eds.</td>
                        <td>Volume(s)</td>
                        <td>Vol. / Vols.</td>
                    </tr>
                    <tr>
                        <td>Translator(s)</td>
                        <td>Trans.</td>
                        <td>(Issue) number</td>
                        <td>No.</td>
                    </tr>
                    <tr>
                        <td>Narrator(s)</td>
                        <td>Narr. / Narrs.</td>
                        <td>Supplement</td>
                        <td>Suppl.</td>
                    </tr>
                    <tr>
                        <td>No date</td>
                        <td>n.d.</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <h2 id="tables-figures">Tables and Figures:</h2>
            <ul>
                <li>File for Figures and Schemes must be provided during submission in a single zip archive and at a sufficiently high resolution (minimum 1000 pixels width/height, or a resolution of 300 dpi or higher). Common formats are accepted; however, TIFF, JPEG, EPS and PDF are preferred.</li>
                <li>All Figures and Tables should be inserted into the main text close to their first citation and must be numbered following their number (Arabic numerals) of appearance (Figure 1, Table 1, etc.).</li>
                <li>All Figures and Tables should have a short explanatory title and caption. The same data may not be presented in tabular and graphical form.</li>
                <li>All table columns should have an explanatory heading. To facilitate the copy-editing of larger tables, smaller fonts may be used, but no less than 8 pt. in size. Authors should use the Table option of Microsoft Word to create tables.</li>
            </ul>

            <h2 id="manuscript-submission">3. Manuscript Submission</h2>
            <h3>Types of Papers/Articles</h3>
            <ul>
                <li><strong>Original Articles:</strong> Original articles must present scientific results that are essentially new and should be structured according to the guidelines given below.</li>
                <li><strong>Review Papers:</strong> Review papers should be comprehensive, fully referenced expositions of subjects of general interest, including background information and detailed critical analyses of current work in the field and its significance, often with figures and drawings. They should be designed to serve as source materials.</li>
                <li><strong>Perspectives Articles:</strong> Perspectives articles provide a brief perspective on recent developments in relevant fields. Note that these should not be full reviews, which should instead be submitted as Review Papers.</li>
                <li><strong>Methods Papers:</strong> We welcome papers describing new or improved methods. Please note that methods that are highly specialized and useful only for a relatively small group of researchers will not be considered with priority. We aim for papers that are of broader interest. The paper can be presented in a protocol-style or narrative method-style.</li>
                <li><strong>Opinion Papers:</strong> This category allows researchers to present a new synthesis of the field, future projections, or discussions and speculations that go beyond the level of a standard Review Paper. These are opinionated narratives that help the research field forward.</li>
            </ul>

            <h3>Submission Process</h3>
            <p>Manuscripts should be submitted online at <a href="#">Paper Submission System</a>. The submitting author, who is generally the corresponding author, is responsible for the manuscript during the submission and peer-review process. The submitting author must ensure that all eligible co-authors have been included in the author list and that they have all read and approved the submitted version of the manuscript. To submit your manuscript, register and login to the submission portal. Once you have registered, click here to go to the submission form. Authors are encouraged to use Microsoft Word (font Times new Roman, size 12) to prepare their manuscript.</p>

            <h3>Submission declaration and verification</h3>
            <p>Submission of an article implies that the work described has not been published previously, that it is not under consideration for publication elsewhere, that its publication is approved by all authors, and that, if accepted, it will not be published elsewhere in the same form, in English or in any other language, including electronically without the written consent of the copyright-holder. To verify originality, articles will be checked by the originality detection service Turnitin or other.</p>

            <h3>Suggestions for reviewer</h3>
            <p>During the submission process, authors will suggest three potential reviewers with the appropriate expertise and contact information (name, official e-mail, and affiliation) to review the manuscript. The editors will not necessarily approach these referees. The proposed referees should neither be current collaborators of the authors nor have published with any of the authors of the manuscript within the last five years. Proposed reviewers should be from different institutions to the authors. Authors may suggest reviewers from among the authors that they frequently cite in their papers.</p>

            <h2 id="revenue-sources">4. Revenue Sources</h2>
            <p>This is a self-financed Open Access journal, not supported by any agency or government. Article printing charges are the only source of income. These resources support operating expense, including copyediting, typesetting, long-term archiving, and journal management.</p>

            <h2 id="printing-charges">5. Article Printing Charges</h2>
            <p>All articles are published in full Open Access. There are no processing charges for submitted articles. To provide free access to readers, and to cover the costs of peer review, copyediting, typesetting, long-term archiving, and journal management, an article printing charges (APC) of PKR 25,000 (national) and US$ 200 (international) applies to papers accepted after peer review. The Article Printing Charges (APC) are based on reduced rates for authors of low- and middle-income countries.</p>
            <p>We consider individual waiver requests for articles on a case-by-case basis, and they may be granted in cases of lack of funds. To apply for a waiver, please request during the submission process. A decision on the waiver will normally be made within three working days. Requests made during the review process or after acceptance will not be considered.</p>
        </div>
    </div>
@endsection
