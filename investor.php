<?php include('header.php');?>

<style>
.chatha-investors{
  color: #d41f3d;
}
.container {
  width: 1250px;
  margin: auto;
  margin-top: 50px;
  margin-bottom: 50px;
}

.flex {
  width: 100%;
  display: flex;
  align-items: stretch;
  justify-content: space-between;
}

.flex .parent-section {
  width: 49%;
}

.firstSection{
    order: 1;
}

.secondSection{
    order: 2;
}

.investor-heading {
  font-size: 40px;
}

.gray-child-section {
  width: 100%;
  border: 1px solid rgb(212, 211, 211);
  padding: 20px;
  text-align: left;
  margin-top: 10px;
}

.gray-child-section h1 {
  font-weight: 500;
  margin-left: -4px;
}

.gray-child-section p {
  line-height: 1.3;
  margin: 10px 0px 15px;
}

.gray-child-section a {
  color: #d41f3d;
  text-decoration: none;
  font-size: 20px;
}

.investor-contact-child-section {
  margin-top: 30px;
}

.investor-contact-table {
  margin-top: 10px;
  border: 1px solid rgb(212, 211, 211);
}

.investor-contact-table div {
  width: 100%;
  border-bottom: 1px solid rgb(212, 211, 211);
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 20px;
  padding: 10px;
}

.investor-contact-table div p {
  width: 500px;
}

.investor-contact-table div .investor-tab-name {
  width: 150px;
}

.parent-heading-link {
  color: #d41f3d;
  text-decoration: none;
  font-size: 22px;
  font-weight: 600;
  display: block;
  margin: auto;
  text-align: center;
  margin-bottom: 20px;
}

.years-section {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 20px;
}

.years-section div {
  padding: 10px;
  border-bottom: 2px solid #d41f3d;
  cursor: pointer;
  color: #d41f3d;
  background-color: #fcd0d7;
}

.years-section div p{
    color: #d41f3d;
}

.years-section .active-block p{
    color: white;
}

.years-section .active-block {
  color: white;
  background-color: #d41f3d;
}

#years-content-block {
  width: 100%;
  margin-top: 20px;
}

.year-single-heading-block {
  width: 100%;
  padding: 17px 15px;
  background-color: #fcd0d7;
  border-radius: 5px;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 10px;
  color: #d41f3d;
  font-size: 20px;
  margin-top: 20px;
}

.year-single-heading-block p:first-child {
  font-weight: 800;
  font-size: 25px;
  margin-top: 0.1px;
  color: #b00421;
}

.heading-block-content-section {
  width: 100%;
  padding: 17px 15px;
  border-radius: 0px 0px 5px 5px;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  overflow: hidden;
  transition: max-height 0.3s ease-out, padding 0.3s ease-out;
}

.heading-block-content-section a {
  color: black;
  display: block;
  margin-bottom: 12px;
  text-decoration: none;
  line-height: 1.5;
  position: relative;
}

.heading-block-content-section a::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 1px;
  width: 100%;
  height: 0.5px;
  background-color: #868686;
}

.heading-block-content-section h4{
  font-weight: 800 !important;
  margin-bottom: 10px;
  margin-top: 10px;
}

.heading-block-content-section h4:not(:first-of-type){
    margin-top: 40px;
}

.closeDiv {
  transition: max-height 0.3s ease-out, padding 0.3s ease-out;
  padding: 0px 17px;
  overflow: hidden;
  max-height: 0px;
}

.heading-section-content-link{
  text-transform: capitalize;
}

.closeDiv a{
  color: black !important;
  display: block !important;
  margin-bottom: 12px !important;
  text-decoration: none !important;
}

@media all and (max-width: 1250px){
.container {
  width: 1050px;
  margin: auto;
  margin-top: 50px;
  margin-bottom: 50px;
}
}

@media all and (max-width: 1100px){
.container {
  width: 950px;
  margin: auto;
  margin-top: 50px;
  margin-bottom: 50px;
}
}

@media all and (max-width: 800px){
.container {
  width: 700px;
  margin: auto;
  margin-top: 50px;
  margin-bottom: 50px;
}
.flex {
  width: 100%;
  display: flex;
  align-items: stretch;
  flex-direction: column;
  row-gap: 50px;
  justify-content: space-between;
}
.firstSection{
    order: 2;
}
.secondSection{
    order: 1;
}
.flex .parent-section {
  width: 100%;
}
}

@media all and (max-width: 750px){
.container {
  width: 90vw;
  margin: auto;
  margin-top: 50px;
  margin-bottom: 50px;
}
}
</style>

<div class="container">
      <div class="flex">
        <div class="parent-section firstSection">
          <div class="investor-contact-child-section">
            <h2>Investor Contact</h2>
            <div class="investor-contact-table">
              <div>
                <p class="investor-tab-name">Name:</p>
                <p>Priyanka Oberoi, Company Secretary & Compliance Officer</p>
              </div>
              <div>
                <p class="investor-tab-name">Address:</p>
                <p>
                  Village Chaundheri, P.O. Dappar, Chandigarh- Ambala Highway, Distt- SAS NAGAR, Punjab 140 506
                </p>
              </div>
              <div>
                <p class="investor-tab-name">Telephone:</p>
                <p>+91-98759-70905, +91-1762-506711</p>
              </div>
              <div>
                <p class="investor-tab-name">Email:</p>
                <p>cs@cfpl.net.in</p>
              </div>
            </div>
          </div>
          <div class="investor-contact-child-section">
            <h2>Registrars & Share Transfer Agents</h2>
            <div class="investor-contact-table">
              <div>
                <p class="investor-tab-name">Name:</p>
                <p>Skyline Financial Services Private Limited</p>
              </div>
              <div>
                <p class="investor-tab-name">Address:</p>
                <p>
                  D-153 A, 1st Floor, Okhla Industrial Area, Phase - I ,New Delhi – 110 020, India
                </p>
              </div>
              <div>
                <p class="investor-tab-name">Telephone:</p>
                <p>+91-97187-39908</p>
              </div>
              <div>
                <p class="investor-tab-name">Email:</p>
                <p>contact@skylinerta.com, info@skylinerta.com</p>
              </div>
              <div>
                <p class="investor-tab-name">Website:</p>
                <p>www.skylinerta.com</p>
              </div>
              <div>
                <p class="investor-tab-name">Investor Grievance Id:</p>
                <p>contact@skylinerta.com</p>
              </div>
              <div>
                <p class="investor-tab-name">Contact Person:</p>
                <p>Dinesh, Meenakshi</p>
              </div>
              <div>
                <p class="investor-tab-name">SEBI Registration No:</p>
                <p>INR000003241</p>
              </div>
            </div>
          </div>
        </div>
        <div class="parent-section secondSection">
          <a href="#" class="parent-heading-link"
            >Disclosure Under Regulation 46 of SEBI LODR</a
          >
          <div class="years-section" style="display: none;"></div>
          <div id="years-content-block"></div>
        </div>
      </div>
    </div>
    <script>
      let yearsData = [
        {
          id: "FY2024",
          year_name: "FY2024",
          year_data: [
            {
              main_heading: "Statement of Deviation and Variation",
              data: [
                {
                  link_name: "Statement of Deviation or Variation 30.09.2024",
                  link_url: "/documents/statement_of_deviation_and_variation /Statement of Deviation or Variation 30.09.2024.pdf",
                },
                {
                  link_name: "Statement of Deviation or Variation 31.03.2024",
                  link_url: "/documents/statement_of_deviation_and_variation /Statement of Deviation or Variation 31.03.2024.pdf",
                },
              ],
            },
            {
              main_heading: "Announcements",
              data: [
                {
                    link_name: "Outcome Of Board Meeting -12.11.2024",
                    link_url: "/documents/announcements_in_order/Outcome Of Board Meeting -12.11.2024.pdf"
                },
                {
                    link_name: "Intimation of Board meeting 12.11.2024",
                    link_url: "/documents/announcements_in_order/Intimation of Board meeting 12.11.2024.pdf"
                },
                {
                    link_name: "Regulation 74 OF DP For the Quarter Ended September 30th, 2024",
                    link_url: "/documents/announcements_in_order/Regulation 74 OF DP For the Quarter Ended September 30th, 2024.pdf"
                },
                {
                    link_name: "JV Term Sheet Intimation",
                    link_url: "/documents/announcements_in_order/JV Term Sheet Intimation.pdf"
                },
                {
                    link_name: "Submission Of Revised Annual Report for The Financial Year 2023-24- Regulation 34",
                    link_url: "/documents/announcements_in_order/Submission Of Revised Annual Report for The Financial Year 2023-24- Regulation 34.pdf"
                },
                {
                    link_name: "REG 30 Alteration in MOA",
                    link_url: "/documents/announcements_in_order/REG 30 Alteration in MOA.pdf"
                },
                {
                    link_name: "Proceedings of 27th AGM",
                    link_url: "/documents/announcements_in_order/Proceedings of 27th AGM.pdf"
                },
                {
                    link_name: "SUBMISSION OF ANNUAL REPORT FOR THE FY 2023-2024",
                    link_url: "/documents/announcements_in_order/SUBMISSION OF ANNUAL REPORT FOR THE FY 2023-2024.pdf"
                },
                {
                    link_name: "INTIMATION OF NOTICE OF 27TH AGM FOR THE FY 2023-2024",
                    link_url: "/documents/announcements_in_order/INTIMATION OF NOTICE OF 27TH AGM FOR THE FY 2023-2024.pdf"
                },
                {
                    link_name: "Outcome of Board Meeting held on 31.08.2024",
                    link_url: "/documents/Outcome of Board Meeting held on 31.08.2024.pdf"
                },
                {
                    link_name: "Regulation 74(5) Of The SEBI (Depositories and Participants)",
                    link_url: "/documents/announcements_in_order/Regulation 74(5) Of The SEBI (Depositories and Participants).pdf"
                },
                {
                    link_name: "Regulation 23(9) of SEBI (LODR) Regulations, 2015 for the half year ended March 31st, 2024nd Submission of the Audited Standalone Financial Results for the Half year and year ended March 31st, 2024",
                    link_url: "/documents/announcements_in_order/Regulation 23(9) of SEBI (LODR) Regulations, 2015 for the half year ended March 31st, 2024.pdf"
                },
                {
                    link_name: "Regulation 24 A of SEBI(LODR) Regulations, 2015 for the year ended March 31st, 2024",
                    link_url: "/documents/announcements_in_order/Regulation 24 A of SEBI(LODR) Regulations, 2015 for the year ended March 31st, 2024.pdf"
                },
                {
                    link_name: "Outcome of the Board Meeting and Submission of the Audited Standalone Financial Results for the Half year and year ended March 31st, 2024",
                    link_url: "/documents/announcements_in_order/Outcome of the Board Meeting and Submission of the Audited Standalone Financial Results for the Half year and year ended March 31st, 2024.pdf"
                },
                {
                    link_name: "Notice regarding Meeting of the Board of Directors to approve the Audited Financial Results for the period 31st March, 2024",
                    link_url: "/documents/announcements_in_order/Notice regarding Meeting of the Board of Directors to approve the Audited Financial Results for the period 31st March, 2024.pdf"
                },
                {
                    link_name: "Outcome of the Board Meeting held on 25th April, 2024",
                    link_url: "/documents/announcements_in_order/Outcome of the Board Meeting held on 25th April, 2024.pdf"
                },
                {
                    link_name: "Regulation 74(5) of DP for the Quarter Ended 31st March, 2024",
                    link_url: "/documents/announcements_in_order/Regulation 74(5) of DP for the Quarter Ended 31st March, 2024.pdf"
                },
                {
                    link_name: "Reg. 40 BSE Intimation of Certificate 40(9) & (10) of THE SEBI (LISTING OBLIGATIONS AND DISCLOSURES REQUIREMENTS) REGULATION 2015",
                    link_url: "/documents/announcements_in_order/Reg. 40 BSE Intimation of Certificate 40(9) & (10) of THE SEBI (LISTING OBLIGATIONS AND DISCLOSURES REQUIREMENTS) REGULATION 2015..pdf"
                },
                {
                    link_name: "Regulation 7(3) of LODR for the financial year ended on March 31st, 2024",
                    link_url: "/documents/announcements_in_order/Regulation 7(3) of LODR for the financial year ended on March 31st, 2024.pdf"
                }
              ],
            },
            {
              main_heading: "Closure of Trading Window",
              data: [
                {
                  link_name: "Closuer of Trading Window 30 September, 2024",
                  link_url: "/documents/Closuer of Trading Window 30 September, 2024.pdf",
                },
                {
                  link_name: "Closure of Trading Window 31 March, 2024",
                  link_url: "/documents/Window Closure 31 March 2024.pdf",
                },
              ],
            },
            {
              main_heading: "Corporate Governance Report",
              data: [
                {
                  link_name: "CG Report Non- Applicability Certificate for the quarter ended September 30th, 2024",
                  link_url: "/documents/corporate_governance_report/CG Report Non- Applicability Certificate for the quarter ended September 30th, 2024.pdf",
                },
                {
                  link_name: "CG Report Non- Applicability Certificate for the Quarter ended June 30, 2024",
                  link_url: "/documents/corporate_governance_report/CG Report Non- Applicability Certificate for the Quarter ended June 30, 2024.pdf",
                },
                {
                  link_name: "CG Report Non- Applicability Certificate for the Quarter ended March 31, 2024",
                  link_url: "/documents/corporate_governance_report/CG Report Non- Applicability Certificate for the Quarter ended March 31, 2024.pdf",
                },
              ],
            },
            {
              main_heading: "Analyst/ Investor Meet",
              data: [
                  {
                      link_heading: "Intimation",
                      link_name: "November 08, 2024",
                      link_url: "documents/intimation/November 08, 2024.pdf"
                  },
                  {
                      link_name: "October 26, 2024",
                      link_url: "documents/intimation/October 26, 2024.pdf"
                  },
                  {
                      link_name: "October 21, 2024",
                      link_url: "documents/October 21, 2024.pdf"
                  },
                  {
                      link_name: "October 05, 2024",
                      link_url: "documents/October 05, 2024.pdf"
                  },
                  {
                      link_name: "Postponement of Investor Meeting 09.09.2024",
                      link_url: "documents/intimation/Postponement of Investor Meeting 09.09.2024.pdf"
                  },
                  {
                      link_name: "September 09, 2024",
                      link_url: "documents/September 09, 2024.pdf"
                  },
                  {
                      link_name: "Intimation of Rescheduled Analyst-Investor Meeting - August 08, 2024",
                      link_url: "documents/intimation/Intimation of Rescheduled Analyst-Investor Meeting 08.08.2024.pdf"
                  },
                  {
                      link_name: "August 03, 2024",
                      link_url: "documents/intimation/August 03, 2024.pdf"
                  },
                  {
                      link_name: "July 27, 2024",
                      link_url: "documents/intimation/July 27, 2024.pdf"
                  },
                  {
                      link_name: "July 08, 2024",
                      link_url: "/documents/July 08, 2024.pdf"
                  },
                  {
                      link_name: "April 16, 2024",
                      link_url: "/documents/(April 16, 2024).pdf"
                  },
                  {
                      link_name: "April 04, 2024",
                      link_url: "/documents/(April 04, 2024).pdf"
                  },
                  {
                      link_name: "April 04, 2024",
                      link_url: "/documents/(April 04, 2024.).pdf"
                  },
                  {
                      link_heading: "Outcome",
                      link_name: "Outcome of Plant Visit - 08.11.2024",
                      link_url: "/documents/Outcome of Plant Visit -08.11.2024.pdf"
                  },
                  {
                      link_name: "Outcome of the Plant Visit - 26.10.24",
                      link_url: "/documents/Outcome of the Plant Visit - 26.10.2024.pdf"
                  },
                  {
                      link_name: "Outcome of Transcript of Analyst - Institutional Investor Meeting - 21.10.2024",
                      link_url: "/documents/Outcome of Transcript of Analyst-Institutional Investor Meeting-21.10.2024.pdf"
                  },
                  {
                      link_name: "Outcome- (October 21, 2024)",
                      link_url: "/documents/Outcome- (October 21, 2024).pdf"
                  },
                  {
                      link_name: "Outcome of Transcript of Analyst - Institutional Investor Meeting - 05.10.2024",
                      link_url: "/documents/Outcome of Transcript of Analyst - Institutional Investor Meeting - 05.10.2024.pdf"
                  },
                  {
                      link_name: "Outcome - (October 05, 2024)",
                      link_url: "/documents/Outcome- (October 05, 2024).pdf"
                  },
                  {
                      link_name: "Outcome of Transcript of Analyst - Institutional Investor Meeting - 08.08.2024",
                      link_url: "/documents/Outcome of Transcript of Analyst - Institutional Investor Meeting - 08.08.2024.pdf"
                  },
                  {
                      link_name: "Outcome - (August 08, 2024)",
                      link_url: "/documents/Outcome - (August 08, 2024).pdf"
                  },
                  {
                      link_name: "Outcome of Transcript Analyst Institutional Investor Meeting - (July 27, 2024)",
                      link_url: "/documents/Outcome of Transcript-Analyst-Institutional Investor Meeting -Jul27-2024.pdf"
                  },
                  {
                      link_name: "Outcome - (July 27, 2024)",
                      link_url: "/documents/Outcome-( July 27, 2024).pdf"
                  },
                  {
                      link_name: "Outcome of Transcript of Earning Conference Call - (July 08, 2024)",
                      link_url: "/documents/Outcome of Transcript of Earning Conference Call July 08, 2024.pdf"
                  },
                  {
                      link_name: "Outcome of Conference Call - (July 08, 2024)",
                      link_url: "/documents/Outcome of Conference Call - July 8, 2024.pdf"
                  },
                  {
                      link_name: "Outcome - Transcript - (April 16, 2024)",
                      link_url: "/documents/Outcome- Transcript- 16.04.2024.pdf"
                  },
                  {
                      link_name: "Outcome - (April 16, 2024)",
                      link_url: "/documents/Outcome- 04.04.2024.pdf"
                  },
                  {
                      link_name: "Outcome - Transcript - (April 04, 2024)",
                      link_url: "/documents/Outcome- Transcript- 04.04.2024.pdf"
                  },
                  {
                      link_name: "Outcome - (April 04, 2024)",
                      link_url: "/documents/Outcome- 04.04.2024.pdf"
                  },
                  {
                      link_heading: "Audio/Video Recordings",
                      link_name: "Investor Call - (OCTOBER 21, 2024)",
                      link_url: "/documents/Investor Call - (OCTOBER 21, 2024).mp3"
                  },
                  {
                      link_name: "Investor Call - (October 05, 2024)",
                      link_url: "/documents/Investor Call- (October 05, 2024).mp3"
                  },
                  {
                      link_name: "Investor Call - (August 08, 2024)",
                      link_url: "/documents/Investor Call-(August 08, 2024).mp3"
                  },
                  {
                      link_name: "Investor Call - (July 27, 2024)",
                      link_url: "/documents/Investor Call- July 27, 2024.mp3"
                  },
                  {
                      link_name: "Conference Call - (July 08, 2024)",
                      link_url: "/documents/Conference Call Outcome- July 08, 2024.mp3"
                  },
                  {
                      link_name: "Investor Call - (April 16, 2024)",
                      link_url: "https://drive.google.com/file/d/1VvFUwwywhHLd_cp80yV7O-GQYgNt_wuN/view?usp=sharing"
                  },
                  {
                      link_name: "Investor Call - (April 04, 2024)",
                      link_url: "https://drive.google.com/file/d/15MJ7KajnSXEyBhOQLrrRsdf42s7ciUQP/view"
                  },
                  {
                      link_heading: "Call Transcript",
                      link_name: "Analyst Investor Meeting - (October 21, 2024)",
                      link_url: "/documents/Analyst Investor Meeting - (October 21,2024).pdf"
                  },
                  {
                      link_name: "Analyst Investor Meeting - (October 05, 2024)",
                      link_url: "/documents/Analyst Investor Meeting-(October 05, 2024).pdf"
                  },
                  {
                      link_name: "Analyst Investor Meeting - (August 08, 2024)",
                      link_url: "/documents/Analyst Investor Meeting - (August 08, 2024).pdf"
                  },
                  {
                      link_name: "Analyst Institutional Investor Meeting - (July 27, 2024)",
                      link_url: "/documents/Analyst-Institutional Investor Meeting -Jul27-2024.pdf"
                  },
                  {
                     
                      link_name: "Earnings Conference Call - (July 08, 2024)",
                      link_url: "/documents/Earnings Conference Call-(July-08-2024).pdf"
                  },
                  {
                      link_name: "Transcript - (April 16, 2024)",
                      link_url: "/documents/Transcript - (April 16, 2024).pdf"
                  },
                  {
                      link_name: "Transcript - (April 04, 2024)",
                      link_url: "/documents/Transcript - (April 04, 2024).pdf"
                  }
              ],
            },
            {
              main_heading: "Press Release/ Media Release",
              data: [
                {
                    link_name: "Long Term Partnership Award 2024 presented to Chatha Foods Limited by Jubilant FoodWorks",
                    link_url: "/documents/Long Term Partnership Award 2024 presented to Chatha Foods Limited by Jubilant FoodWorks.pdf"
                },
                {
                    link_name: "Chatha Foods Limited Innovation Team Develops A New Rice Bowl Concept For Quick-Service Restaurants",
                    link_url: "/documents/Chatha Foods Limited Innovation Team Develops A New Rice Bowl Concept For Quick-Service Restaurants.pdf"
                },
                {
                    link_name: "Allana CFL Joint Venture",
                    link_url: "/documents/Allana-CFL-Joint-Venture.pdf"
                },
                {
                    link_name: "Chatha Foods Limited Enters the Sweet & Savory Snack Category",
                    link_url: "/documents/announcements_in_order/Chatha Foods Limited Enters the Sweet & Savory Snack Category.pdf"
                },
                {
                  link_name: "Annoncement Under Regulation 30 LODR Media Release",
                  link_url: "/documents/Press Release (April 25, 2024).pdf",
                },
                {
                  link_name: "Annoncement Under Regulation 30 LODR Press Release.pdf",
                  link_url: "/documents/Press Release.pdf",
                },
              ],
            },
            {
              main_heading: "Financial Results",
              data: [
                  {
                    link_name: "Unaudited Financial Results 30.09.2024",
                    link_url: "/documents/financial_results/UNAUDITED FINANCIAL RESULTS 30.09.2024.pdf",
                  },
                  {
                    link_name: "Financial Results 31.03.2024",
                    link_url: "/documents/financial_results/Financial Results 31.03.2024.pdf",
                  },
                ],
            },
            {
              main_heading: "Notice of General Meetings",
              data: [
                  {
                    link_name: "Notice of AGM 24.09.2024",
                    link_url: "/documents/notice_of_general_meeting/Notice of AGM - 24.09.2024.pdf",
                  },
               ],
            },
            {
              main_heading: "Annual Report and AGM",
              data: [
                  {
                    link_name: "Revised Annual Report for FY 2023-2024",
                    link_url: "/documents/announcements_in_order/Revised Annual Report for FY 2023-2024.pdf"
                  },
                  {
                    link_name: "VOTING RESULTS & SCRUTINIZERS REPORT",
                    link_url: "/documents/annual_reports_and_agm/VOTING RESULTS & SCRUTINIZERS REPORT.pdf",
                  },
                  {
                    link_name: "Annual Report FY 2023-2024",
                    link_url: "/documents/Annual Report FY 2023-2024.pdf",
                  },
               ],
            },
            {
              main_heading: "Annual Return",
              data: [
                  {
                    link_name: "FY 2022 - 2023",
                    link_url: "/documents/annual_returns/FY_2022 - 2023.pdf",
                  },
                  {
                    link_name: "FY 2021 - 2022",
                    link_url: "/documents/annual_returns/FY_2021 - 2022.pdf",
                  },
                  {
                    link_name: "FY 2020 - 2021",
                    link_url: "/documents/annual_returns/FY_2020 - 2021.pdf",
                  },
              ],
            },
            {
              main_heading: "Investors Grievance Report",
              data: [
                {
                  link_name: "REGULATION 13(3) of LODR, 2015 for the Quarter Ended September 30th, 2024",
                  link_url: "/documents/investor_griveances_report/REGULATION 13(3) of LODR, 2015 for the Quarter Ended September 30th, 2024.pdf",
                },
                {
                  link_name: "REGULATION 13(3) of LODR, 2015 for the Quarter Ended June 30th, 2024",
                  link_url: "/documents/investor_griveances_report/REGULATION 13(3) of LODR, 2015 for the Quarter Ended June 30th, 2024.pdf",
                },
                {
                  link_name: "REGULATION 13(3) of LODR, 2015 for the Quarter Ended March 31st, 2024",
                  link_url: "/documents/investor_griveances_report/REGULATION 13(3) of LODR, 2015 for the Quarter Ended March 31st, 2024.pdf",
                },
              ],
            },
            {
              main_heading: "Investor Presentation",
              data: [
                {
                   link_name: "Investor's Presentation - March 2024",
                   link_url: "/documents/investor_presentation/Investor's Presentation - March - 2024.pdf"
                },
                {
                  link_name: "Investor Presentation",
                  link_url: "/documents/investor_presentation/Investor Presentation.pdf",
                },
              ],
            },
            {
              main_heading: "Shareholding Pattern",
              data: [
                {
                  link_name: "Regulation 31(1)(b) of LODR, 2015 for the Quarter Ended September 30th, 2024",
                  link_url: "/documents/shareholding_patterns/Regulation 31(1)(b) of LODR, 2015 for the Quarter Ended September 30th, 2024.pdf",
                },
                {
                  link_name: "Regulation 31(1)(b) of LODR, 2015 for the Quarter Ended March 31st, 2024",
                  link_url: "/documents/shareholding_patterns/Regulation 31(1)(b) of LODR, 2015 for the Quarter Ended March 31st, 2024.pdf",
                },
              ],
            },
            {
              main_heading: "Company Policies",
              data: [
                {
                  link_name: "Policy on Determination And Disclosure Of Materiality Or Events And Information",
                  link_url: "/documents/new_company_policies/Policy on Determination And Disclosure Of Materiality Or Events And Information.pdf",
                },
                {
                  link_name: "Policy for Preservation of Documents",
                  link_url: "/documents/new_company_policies/Policy for Preservation of Documents.pdf",
                },
                {
                  link_name: "CSR Policy",
                  link_url: "/documents/new_company_policies/CSR Policy.pdf",
                },
                {
                  link_name: "Code of conduct to Regulate, Monitor and Report Trading by Designated Persons",
                  link_url: "/documents/new_company_policies/Code of conduct to Regulate, Monitor and Report Trading by Designated Persons.pdf",
                },
                {
                  link_name: "Nonimation and Remuneration Policy",
                  link_url: "/documents/new_company_policies/Nonimation and Remuneration Policy.pdf",
                },
                {
                  link_name: "Code of Practices and Procedures for Fair Disclosure of UPSI",
                  link_url: "/documents/new_company_policies/Code of Practices and Procedures for Fair Disclosure of UPSI.pdf",
                },
                {
                  link_name: "Archival Policy",
                  link_url: "/documents/new_company_policies/Archival Policy.pdf",
                },
              ],
            },
            {
              main_heading: "Composition of Board and committees",
              data: [
                {
                  link_name: "COMPOSITION OF BOARD AND COMMITTEE",
                  link_url: "/documents/composition_of_board_and_committee/COMPOSITION OF BOARD AND COMMITTEE.pdf",
                },
              ],
            },
            {
              main_heading: "Download Forms",
              data: [
                {
                  link_name: "SEBI Mandatory Information by Holders",
                  link_url: "/documents/download_forms/SEBI-Mandatory-Information-by-Holders.pdf",
                },
                {
                  link_name: "Form for registering E-mail Address",
                  link_url: "/documents/download_forms/Form-for-registering-E-mail-Address.pdf",
                },
                {
                  link_name: "Form ISR-1",
                  link_url: "/documents/download_forms/Form-ISR-1.pdf",
                },
                {
                  link_name: "Form ISR-2",
                  link_url: "/documents/download_forms/Form-ISR-2.pdf",
                },
                {
                  link_name: "Form ISR-3",
                  link_url: "/documents/download_forms/Form-ISR-3.pdf",
                },
                {
                  link_name: "Form ISR-4",
                  link_url: "/documents/download_forms/Form-ISR-4.pdf",
                },
                {
                  link_name: "Form SH-13",
                  link_url: "/documents/download_forms/Form-SH-13.pdf",
                },
                {
                  link_name: "Form SH-14",
                  link_url: "/documents/download_forms/Form-SH-14.pdf",
                },
              ],
            },
          ],
        }
        // {
        //   id: "OTHERS",
        //   year_name: "OTHERS",
        //   year_data: [
        //     {
        //       main_heading: "Company Policies",
        //       data: [
        //         {
        //           link_name: "Code of Conduct for Regulating, Monitoring and Reporting of Trades and Prevention of Insider Trading",
        //           link_url: "/documents/company_policies/Code of Conduct for Regulating, Monitoring and Reporting of Trades and Prevention of Insider Trading.pdf",
        //         },
        //         {
        //           link_name: "CODE OF CONDUCT FOR BOARD OF DIRECTORS AND SENIOR MANAGEMENT",
        //           link_url: "/documents/company_policies/CODE OF CONDUCT FOR BOARD OF DIRECTORS AND SENIOR MANAGEMENT.pdf",
        //         },
        //         {
        //           link_name: "NOMINATION AND REMUNERATION POLICY",
        //           link_url: "/documents/others/NOMINATION AND REMUNERATION POLICY.pdf",
        //         },
        //         {
        //           link_name: "FAMILIARIZATION PROGRAM FOR INDEPENDENT DIRECTORS",
        //           link_url: "/documents/company_policies/FAMILIARIZATION PROGRAM FOR INDEPENDENT DIRECTORS.pdf",
        //         },
        //         {
        //           link_name: "Code of Practices and Procedures for Fair Disclosure of Unpublished Price Sensitive Information",
        //           link_url: "/documents/company_policies/Code of Practices and Procedures for Fair Disclosure of Unpublished Price Sensitive Information.pdf",
        //         },                
        //         {
        //           link_name: "CONTENT ARCHIVING POLICY",
        //           link_url: "/documents/company_policies/CONTENT ARCHIVING POLICY.pdf",
        //         },
        //         {
        //           link_name: "POLICY ON PRESERVATION OF DOCUMENTS",
        //           link_url: "/documents/company_policies/POLICY ON PRESERVATION OF DOCUMENTS.pdf",
        //         },
        //         {
        //           link_name: "POLICY ON DISCLOSURE OF MATERIAL EVENTS OR INFORMATION",
        //           link_url: "/documents/company_policies/POLICY ON DISCLOSURE OF MATERIAL EVENTS OR INFORMATION.pdf",
        //         },
        //         {
        //           link_name: "VIGIL MECHANISM POLICY",
        //           link_url: "/documents/company_policies/VIGIL MECHANISM POLICY.pdf",
        //         },
        //         {
        //           link_name: "SUCCESSION POLICY",
        //           link_url: "/documents/company_policies/SUCCESSION POLICY.pdf",
        //         },
        //         {
        //           link_name: "RISK MANAGEMENT PLAN",
        //           link_url: "/documents/company_policies/RISK MANAGEMENT PLAN.pdf",
        //         },
        //         {
        //           link_name: "POLICY FOR PREVENTION OF SEXUAL HARASSMENT",
        //           link_url: "/documents/company_policies/POLICY FOR PREVENTION OF SEXUAL HARASSMENT.pdf",
        //         },
        //         {
        //           link_name: "RELATED PARTY TRANSACTIONS POLICY",
        //           link_url: "/documents/company_policies/RELATED PARTY TRANSACTIONS POLICY.pdf",
        //         },
        //         {
        //           link_name: "Policy for Identification of 'Material' Group Companies",
        //           link_url: "/documents/company_policies/Policy for Identification of 'Material' Group Companies.pdf",
        //         },
        //         {
        //           link_name: "Policy for Identification of 'Material' Litigation",
        //           link_url: "/documents/company_policies/Policy for Identification of 'Material' Litigation.pdf",
        //         },
        //         {
        //           link_name: "Policy for Identification of 'Material' Outstanding Dues to Creditors",
        //           link_url: "/documents/company_policies/Policy for Identification of 'Material' Outstanding Dues to Creditors.pdf",
        //         },
        //         {
        //           link_name: "POLICY FOR DETERMINATION OF LEGITIMATE PURPOSES",
        //           link_url: "/documents/company_policies/POLICY FOR DETERMINATION OF LEGITIMATE PURPOSES.pdf",
        //         },
        //         {
        //           link_name: "POLICY FOR PROCEDURE OF INQUIRY IN CASE OF LEAK OF UNPUBLISHED PRICE SENSITIVE INFORMATION (“UPSI”) OR SUSPECTED LEAK OF UPSI",
        //           link_url: "/documents/company_policies/POLICY FOR PROCEDURE OF INQUIRY IN CASE OF LEAK OF UNPUBLISHED PRICE SENSITIVE INFORMATION (“UPSI”) OR SUSPECTED LEAK OF UPSI.pdf",
        //         },
        //       ],
        //     },
        //     {
        //       main_heading: "Composition of Board and committees",
        //       data: [
        //         {
        //           link_name: "COMPOSITION OF BOARD AND COMMITTEE",
        //           link_url: "/documents/composition_of_board_and_committee/COMPOSITION OF BOARD AND COMMITTEE.pdf",
        //         },
        //       ],
        //     },
        //     {
        //       main_heading: "Download Forms",
        //       data: [
        //         {
        //           link_name: "SEBI Mandatory Information by Holders",
        //           link_url: "/documents/download_forms/SEBI-Mandatory-Information-by-Holders.pdf",
        //         },
        //         {
        //           link_name: "Form for registering E-mail Address",
        //           link_url: "/documents/download_forms/Form-for-registering-E-mail-Address.pdf",
        //         },
        //         {
        //           link_name: "Form ISR-1",
        //           link_url: "/documents/download_forms/Form-ISR-1.pdf",
        //         },
        //         {
        //           link_name: "Form ISR-2",
        //           link_url: "/documents/download_forms/Form-ISR-2.pdf",
        //         },
        //         {
        //           link_name: "Form ISR-3",
        //           link_url: "/documents/download_forms/Form-ISR-3.pdf",
        //         },
        //         {
        //           link_name: "Form ISR-4",
        //           link_url: "/documents/download_forms/Form-ISR-4.pdf",
        //         },
        //         {
        //           link_name: "Form SH-13",
        //           link_url: "/documents/download_forms/Form-SH-13.pdf",
        //         },
        //         {
        //           link_name: "Form SH-14",
        //           link_url: "/documents/download_forms/Form-SH-14.pdf",
        //         },
        //       ],
        //     },
        //   ],
        // },
      ];
      document.addEventListener("DOMContentLoaded", function () {
        let yearSelected;
        let selectedYearData;
        let yearContentBlock = document.getElementById("years-content-block");
        let yearsSection = document.querySelector(".years-section");
        let headingSymbol = document.querySelectorAll("heading-symbol");

        yearsData.map((item, index) => {
          let yearDiv = document.createElement("div");
          yearDiv.id = item.id;

          let yearText = document.createElement("p");
          yearText.textContent = item.year_name;

          yearDiv.appendChild(yearText);
          yearsSection.appendChild(yearDiv);
        });

        selectedYearData = yearsData[0];
        yearContentBlock.innerHTML = "";
        selectedYearData.year_data.forEach((data) => {
          let headingBlock = document.createElement("div");
          headingBlock.classList.add("year-single-heading-block");

          let headingBlockContentSection = document.createElement("div");
          headingBlockContentSection.classList.add(
            "heading-block-content-section"
          );

          headingBlockContentSection.classList.add("closeDiv");

          let headingSymbol = document.createElement("p");
          headingSymbol.classList.add("heading-symbol");
          headingSymbol.textContent = "+";

          headingBlock.addEventListener("click", function () {
            if (headingSymbol.textContent === "+") {
              headingSymbol.textContent = "-";
              headingSymbol.style.marginTop = "-5px";
              headingBlockContentSection.style.maxHeight =
                headingBlockContentSection.scrollHeight + 70 + "px";
              headingBlockContentSection.classList.remove("closeDiv");
            } else {
              headingSymbol.textContent = "+";
              headingSymbol.style.marginTop = "0.1px";
              headingBlockContentSection.classList.add("closeDiv");
              headingBlockContentSection.style.maxHeight = "0";
            }
          });

          let headingText = document.createElement("p");
          headingText.textContent = data.main_heading;

          headingBlock.appendChild(headingSymbol);
          headingBlock.appendChild(headingText);
          yearContentBlock.appendChild(headingBlock);
          yearContentBlock.appendChild(headingBlockContentSection);

          data.data.forEach((item) => {
            let headingSectionBlockHeading = document.createElement("h4");
            let headingSectionContentLink = document.createElement("a");
            headingSectionContentLink.classList.add(
              "heading-section-content-link"
            );
            headingSectionContentLink.textContent = `• ${item.link_name}`;
            headingSectionContentLink.href = item.link_url;
            headingSectionContentLink.target = "_blank";
            if(item.link_heading){
                headingSectionBlockHeading.textContent = item.link_heading;
            }
            else{
                headingSectionBlockHeading.style.display = "none";
            }
            headingBlockContentSection.appendChild(headingSectionBlockHeading);
            headingBlockContentSection.appendChild(headingSectionContentLink);
          });
        });

        let yearsDiv = yearsSection.querySelectorAll("div");
        yearSelected = yearsDiv[0].querySelector("p").textContent;

        yearsDiv[0].classList.add("active-block");

        yearsDiv.forEach((item, index) => {
          item.addEventListener("click", function () {
            yearsDiv.forEach((div) => {
              div.classList.remove("active-block");
            });
            item.classList.add("active-block");
            yearSelected = item.querySelector("p").textContent;
            selectedYearData = yearsData.find(
              (year) => year.year_name === yearSelected
            );
            if (selectedYearData) {
              yearContentBlock.innerHTML = "";
              selectedYearData.year_data.forEach((data) => {
                let headingBlock = document.createElement("div");
                headingBlock.classList.add("year-single-heading-block");

                let headingBlockContentSection = document.createElement("div");
                headingBlockContentSection.classList.add(
                  "heading-block-content-section"
                );

                data.data.forEach((item) => {
                  let headingSectionBlockHeading = document.createElement("h4");
                  let headingSectionContentLink = document.createElement("a");
                  headingSectionContentLink.classList.add(
                    "heading-section-content-link"
                  );
                  headingSectionContentLink.textContent = `• ${item.link_name}`;
                  headingSectionContentLink.href = item.link_url;
                  headingSectionContentLink.target = "_blank";
                  if(item.link_heading){
                    headingSectionBlockHeading.textContent = item.link_heading;
                  }
                  else{
                    headingSectionBlockHeading.style.display = "none";
                  }
                  
                  headingBlockContentSection.appendChild(headingSectionBlockHeading);
                  headingBlockContentSection.appendChild(
                    headingSectionContentLink
                  );
                });

                let headingSymbol = document.createElement("p");
                headingSymbol.classList.add("heading-symbol");
                headingSymbol.textContent = "+";

                headingBlockContentSection.classList.add("closeDiv");

                headingBlock.addEventListener("click", function () {
                  if (headingSymbol.textContent === "+") {
                    headingSymbol.textContent = "-";
                    headingSymbol.style.marginTop = "-5px";
                    headingBlockContentSection.style.maxHeight =
                      headingBlockContentSection.scrollHeight + 70 + "px";
                    headingBlockContentSection.classList.remove("closeDiv");
                  } else {
                    headingSymbol.textContent = "+";
                    headingSymbol.style.marginTop = "0.1px";
                    headingBlockContentSection.classList.add("closeDiv");
                    headingBlockContentSection.style.maxHeight = "0";
                  }
                });

                let headingText = document.createElement("p");
                headingText.textContent = data.main_heading;

                headingBlock.appendChild(headingSymbol);
                headingBlock.appendChild(headingText);
                yearContentBlock.appendChild(headingBlock);
                yearContentBlock.appendChild(headingBlockContentSection);
              });
            }
          });
        });
      });
    </script>

<?php include('footer.php');?>