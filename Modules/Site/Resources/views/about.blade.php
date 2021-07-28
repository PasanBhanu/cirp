@extends('site::layouts.master')
@section('style')
      <style>
        @media only screen and (max-width: 600px) {
          .slider-container {
            padding-top: 80px !important;
            padding-bottom: 0px;
          }
        }

        .topics{
          font-size: 25px;
          font-weight: 600;
          color: #000000;
               }

        .topics-02{
          font-size: 19px;
          font-weight: 550;
          color: #000000;
               }
        .text-head{
          text-align: left;
          font-weight: bold;
          padding-left:10px;

        }
      </style>

      <link rel="stylesheet" href="{{static_asset('theme/css/about-us.css')}}" />
@endsection
@section('content')

      <div role="main" class="main">


      
      <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
          <div
            id="revolutionSlider"
            class="slider rev_slider"
            data-version="5.4.8"
            data-plugin-revolution-slider
            data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], }"
          >
            <ul>
              <li data-transition="fade">
                <img
                  src="{{static_asset('theme/video/22.png')}}"
                  alt=""
                  data-bgposition="center center"
                  data-bgfit="cover"
                  data-bgrepeat="no-repeat"
                  class="rev-slidebg"
                />
                <h1 style="color:#fff; text-align:center; padding-top:500px; z-index:10"></h1>
                <div
                  class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                  data-frames='[{"delay":100,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                  data-x="center"
                  data-y="center"
                  data-fontsize="['50','50','50','90']"
                  data-lineheight="['55','55','55','95']"
                  style=" text-shadow: 3px 3px 3px  #000000;"
                >
                  
                </div>
              </li>
            </ul>
            
          </div>
          
        </div>

        <!---------------------------------Bread cumbs----------------------------->
        <div class="container" style="padding-top: 20px">
          <ul style="padding: 0px 15px">
            <p>
              <a href="{{url('/')}}" style="text-decoration: none;"
                >Home &nbsp;&nbsp;<i class="fas fa-angle-right"></i
              ></a>
              <a href="#" style="text-decoration: none;"
                >&nbsp;&nbsp;About us</a
              >
            </p>
          </ul>
        </div>
        <!---------------------------------------------------->

        <div style="background-image: url(public/theme/img/fingerprint.png); background-size: cover; background-position: center;">
          <!----------------------------------------------------------------------->

          <div class="container" style="padding-top: 30px">
          <h1 class="text-head">About us</h1>
            <div class="row pt-2 mb-4">
              <div class="col-lg-3">
                <aside class="sidebar" style="padding-bottom: 50px">
                      
                  <div class="overview-nav">
                  
                    <div class="over-nav-wrapper">
                    
                      <button
                        class="tablinks active-tab"
                        onclick="openCity(event, 'tab1')"
                        id="defaultOpen"
                      >
                        Who We are and What we do
                      </button>
                      <button
                        class="tablinks"
                        onclick="openCity(event, 'tab2')"
                      >
                        Our History
                      </button>
                      <!-- <button
                        class="tablinks"
                        onclick="openCity(event, 'tab3')"
                      >
                        Our Values
                      </button> -->
                      <!-- <button
                        class="tablinks"
                        onclick="openCity(event, 'tab4')"
                      >
                        Governance
                      </button> -->
                      <!-- <button
                        class="tablinks"
                        onclick="openCity(event, 'tab5')"
                      >
                        Policies and Procedures
                      </button> -->
                      <!-- <button
                        class="tablinks"
                        onclick="openCity(event, 'tab6')"
                      >
                        CIIHE Group
                      </button> -->
                      <button
                        class="tablinks"
                        onclick="openCity(event, 'tab7')"
                      >
                        Coat of Arms
                      </button>
                    </div>
                  </div>
                  
                </aside>
              </div>

              <div class="col-lg-9">
                <div id="tab1" class="tabcontent">
                  <div class="product-nav-des">
                    <div class="product-nav-ded-wrapper">
                      <p class="topics">CIRP – Who We are and What We do</p>
                      <p style="text-align:justify">
                        We are a forward thinking, change-making institution with a proud tradition of commitment to academic excellence and research that reflects creativity and unconstrained thinking. Our journey from a very humble beginning in 2010 up to date is a rapid progression in terms of quality and quantity where we were able to challenge the standard growth curve of an organization, owing to the dedication and commitment of both staff and students. </br></br>

                        Within a decade we have become the leader of psychology education in South Asia and during the process have pioneered many initiatives that has contributed to the growth and development of the field of psychology and it’s popularity in Sri Lanka and the region.</br></br>

                        We take pride in having produced many hundreds of professionals in the discipline who have directly contributed to capacity building in the field. Our students are appraised by the employers for being above the standard in terms of employability, knowledge and skills, professional and ethical standards and commitment. Recognition we have received for academic excellence and the brand image we have created for being the pioneer and leader in the industry is our biggest return on investment. </br></br>

                        We are a major force in psychology in Sri Lanka and the region and our contribution extends not only to the academic and research fields but also to school system, corporate sector and government. Our efforts have directly resulted in policy change in government, establishment of professional bodies and trend setting in corporate sector. </br></br>


                        We have initiated many “Firsts” in the field in our part of the world and true to our watchword “ Ed Lucem” (Towards Light) we will continue to do so to enlighten the community and improve their quality of life. </br></br>

                        We work in collaboration with many leading international universities, Local and international accreditation bodies to deliver world class higher education to our students, maintaining and further improving quality standards. </br></br>

                        We are housed at one of the biggest city campuses in Sri Lanka, in the heart of Colombo where close to a thousand of students, both Sri Lankan & international studying from foundation to masters degrees study supported by one of the biggest faculties in the region. </br></br>

                        In 2018, CIRP became a faculty under Colombo International Institute of Higher Education (CIIHE) as a part of restructuring of the organization to initiate our path to become a university. Currently CIRP is an independently managed entity, a member of the CIIHE higher education group.</br>
                      </p>
                    </div>
                  </div>
                </div>

                <div id="tab2" class="tabcontent">
                  <div class="product-nav-des">
                    <div class="product-nav-ded-wrapper">
                    <p class="topics">Our History</p>
                      <div class="accordion" id="accordion">
                        <div class="card card-default">
                          <div class="card-header">
                            <h4 class="card-title m-0">
                              <a
                                class="accordion-toggle"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapse1One"
                              >
                                2010

                                <i
                                  class="icon-plus icons"
                                  style="float: right;"
                                ></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse1One" class="collapse show">
                            <div class="card-body">
                              <p class="topics-02">Incorporation of CIRP</p>
                              <p style="text-align:justify">
                                CIRP was established in 2010 with the goal of developing the areas of teaching, researching and practicing psychology in Sri Lanka in order to grow and establish the discipline of psychology and related applied areas that would eventually contribute to capacity building in the field.</br></br>

                                Founded by Dr.Darshan Perera and Mr.Suchira Surendranath, CIRP’s first teaching & learning facility was housed at a De Vos avenue, Colombo 04. 
                              </p style="text-align:justify">
                              <p class="topics-02">Launching Diploma Programs and Introducing & Facilitating Schools to deliver Psychology as a subject</p>
                              <p style="text-align:justify">
                                Institute first offered a Higher National Diploma (HND) in Psychology and Several other diplomas in Child, Business & Forensic Psychology.</br></br>

                                During this time CIRP also offered teaching for Secondary school students studying Psychology in CIE and Edexcel curriculum. In line with their goal to popularize the field of psychology, CIRP facilitated many leading international and private schools in Colombo to deliver psychology as a subject by providing lecturers from the institute. This resulted in the subject of psychology becoming popular among school children that contributed to the rapid increase in the number of students and parents considering psychology as a higher education option in the years to come. 
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="card card-default">
                          <div class="card-header">
                            <h4 class="card-title m-0">
                              <a
                                class="accordion-toggle"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapse1Three"
                              >
                                2011
                                <i
                                  class="icon-plus icons"
                                  style="float: right;"
                                ></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse1Three" class="collapse">
                            <div class="card-body">
                              <p class="topics-02">Academic Partnership with University of Hertfordshire UK</p>
                              <p style="text-align:justify">
                                First academic partnership of CIRP was established with University of Hertfordshire UK. As a part of this articulation agreement students completing the HND is psychology were able to transfer to University of Hertfordshire to complete their Bachelor’s degree in Psychology.</br>

                              </p>
                              <p class="topics-02">Registration with Tertiary & Vocational Education Commission (TVEC) of Sri Lanka </p>
                              <p style="text-align:justify">
                                TVEC is the Sri Lankan government regulatory body for tertiary education qualifications awarded by institutions that are not under the preview of the University Grants commission of Sri Lanka.  CIRP was first recognized by TVEC in 2011 and has maintained its registration following periodic renewals of the registration up to date.</br>

                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="card card-default">
                          <div class="card-header">
                            <h4 class="card-title m-0">
                              <a
                                class="accordion-toggle"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapse1four"
                              >
                                2012
                                <i
                                  class="icon-plus icons"
                                  style="float: right;"
                                ></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse1four" class="collapse">
                            <div class="card-body">
                              <p class="topics-02">Academic Partnership with Coventry University UK</p>
                              <p style="text-align:justify">
                                CIRP entered in to an autonomous franchisee partnership with Coventry University UK and became a delivery partner for several psychology programs awarded by the university. As a result Coventry University was the main academic partner of CIRP from 2012 to 2018. In 2018 both CIRP and CU decided to end their franchisee partnership due to the differences in the strategic development plans of the two organizations in 2018, however the progression articulation that allows CIRP students to transfer to Coventry University UK is maintained up to date. </br>

                              </p>
                              <p class="topics-02">Dr.Janet Levally appointed at the First Dean of CIRP (2012 -2013 & 2014-2015)</p>
                              <p style="text-align:justify">
                                Dr.Janet Levally a senior American academic and a psychologist was appointed as the first dean of CIRP in 2012. She earned her Ph.D. in East-West Psychology (California Institute of Integral Studies, San Francisco) and her MA in Sociology (University of California, Riverside) with strong emphasis in research methodology. Dr. Le Valley has both extensive formal training and years of practical experience in early Childhood Education, Martial Arts, Counseling Hypnotherapy, Complementary Medical Hypnosis. She served two terms as the dean of CIRP, first from 2011 – 2012 and then from 2014 – 2015.</br>
                                 
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="card card-default">
                          <div class="card-header">
                            <h4 class="card-title m-0">
                              <a
                                class="accordion-toggle"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapse1five"
                              >
                                2013
                                <i
                                  class="icon-plus icons"
                                  style="float: right;"
                                ></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse1five" class="collapse">
                            <div class="card-body">
                              <p class="topics-02">Launch of the first ever internationally recognized Master’s degrees in Psychology in Sri Lanka</p>
                              <p style="text-align:justify">
                                In line with CIRP’s commitment to capacity build in the field of Psychology in Sri Lanka, CIRP launched the island’s first internationally recognized postgraduate qualifications in Psychology under their collaboration with Coventry University UK. MSc Psychology and MSc Applied Psychology program are the first two postgraduate qualifications awarded by an international University that could be completed in Sri Lanka. This paved way for many Sri Lankans who couldn’t travel abroad to qualify themselves to obtain a postgraduate qualification in Psychology. CIRP was granted the opportunity to deliver the entire program in Sri Lanka after a through validation process that evaluated the resources, academic staff and the policies matched to the QAA benchmarks of UK higher education.</br>

                              </p>
                              <p class="topics-02">First Graduation Ceremony of CIRP</p>
                              <p style="text-align:justify">
                                CIRP held its first graduation ceremony in 2014 and was held at the Bandaranaike Memorial International Conference Hall (BMICH). First two batches of HND and Diploma students graduated in this inaugural convocation, where the chief guest was First Lady of Sri Lanka, Mrs. Shiranthi Rajapaksa. Other special invitees included Hon. Mahinda Yapa Abeywardane, MP and Minister, H.E. Mohamad Shihab, Maldivian High Commissioner for Sri Lanka and Dr.David Ashall representing Coventry University. </br>
                                
                              </p>

                              <p class="topics-02">Dr.Lionel Mandy - Dean (2013 – 2014)</p>
                              <p style="text-align:justify">
                                Dr. Lionel Mandy held the position of Dean of CIRP from 2013 – 2014.</br></br>

                                Dr Lionel Mandy is an internationally recognized scholar with a sound academic record in English Literature (BA), Afro-American Studies (MA), Social Work (MSW), Business Administration (MBA), Law (JD), Clinical Psychology (PsyD), and Metaphysics (BSc., MSc., Ph.D.). He is an emeritus lecturer from the Departments of Africana Studies and Psychology at California State University, Long Beach.</br>

                              </p>
                              <p class="topics-02">Moving to Melbourne Avenue Campus</p>
                              <p style="text-align:justify">
                                CIRP moved to it’s Melbourne Avenue campus in 2013 from its first location in De Vos avenue in 2013. Melbourne Avenue campus was housed at a colonial time building built in 1900 and was appreciated by many for it’s architectural beauty and its location next to the beach. This provided CIRP with more class rooms and office spaces as well as more spaces for students.</br></br>

                                As a result of the increasing student population CIRP acquired another location during this time to house more class rooms and spaces for student activities in McCleod Place. Both Melbourne Avenue and McCleod Place facilities were used by CIRP until 2015 when all the facilities were brought under one roof in the new campus on Galle road, Colombo 04. 


                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="card card-default">
                          <div class="card-header">
                            <h4 class="card-title m-0">
                              <a
                                class="accordion-toggle"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapse1six"
                              >
                                2014

                                <i
                                  class="icon-plus icons"
                                  style="float: right;"
                                ></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse1six" class="collapse">
                            <div class="card-body">
                              <p class="topics-02">Launch of the First British BSc (Hons) Psychology Program in the country</p>
                              <p style="text-align:justify">
                                CIRP in collaboration with Coventry University launched the first British Bachelor’s degree in Psychology that could be completed in Sri Lanka in 2014. As a result Sri Lankan students were provided the opportunity of completing a BSc (Hons) degree in psychology studying in Sri Lanka. This paved the way for many Sri Lankan students who did not have the opportunity of travelling abroad to achieve their dream of obtaining a degree in Psychology. This is a turning point in the history of psychology education in Sri Lanka and directly contributed to making the field becoming more popular as a study option for Sri Lanka students of all socio-economic layers.</br></br>

                              </p>
                              <p class="topics-02">Initiation of International Conference on Applied Psychology (ICAP) Sri Lanka</p>
                              <p style="text-align:justify">
                                CIRP was committed to developing research in the field of psychology from it’s early years. As a part of it’s path to research excellence, CIRP launched it’s own international research conference, ICAP Sri Lanka in 2014. Aim of this initiative was to provide a platform for Sri Lankan as well as regional scholars, academics and researchers to share knowledge and expertise, network for the development of the field and to inspire students and young academics towards research. Since 2014, ICAP Sri Lanka is held annually up to date.</br></br>

                                
                              </p>
                               <p class="topics-02" >Dr. Thulitha Wickrama – Dean of Postgraduate Studies (2014-2015)</p>
                              <p style="text-align:justify">
                                Dr. Thulitha Wickrama was appointed as the Dean of Postgraduate studies in 2014.</br></br>

                                
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="card card-default">
                          <div class="card-header">
                            <h4 class="card-title m-0">
                              <a
                                class="accordion-toggle"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapse1seven"
                              >
                                2015
                                <i
                                  class="icon-plus icons"
                                  style="float: right;"
                                ></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse1seven" class="collapse">
                            <div class="card-body">
                              <p class="topics-02">Launch of Diploma of Higher Education of Psychology</p>
                              <p style="text-align:justify">
                                CIRP restructured it’s academic framework in 2015 and the HND in Psychology program was re-launched as the Diploma of Higher Education (DHEP) in Psychology. Curriculum was developed by CIRP and was validated by Coventry University as a level 5 qualification under British qualification framework.</br>

                              </p>
                              <p class="topics-02">Application for BPS accreditation</p>
                              <p style="text-align:justify">
                                Along with the introduction of the CU validated DHE, both CIRP and CU applied for British Psychological Society (BPS) accreditation for the complete three year program. Initial application process was followed by a visit of BPS delegation headed by the President of BPS. This project was initiated by Dr. Darshan Perera from CIRP and Dr.Helen Poole from CU. However with Dr.Helen Poole leaving CU, the project lost momentum and was finally abandoned. If this project was successful CIRP would have become the first non-British university to deliver a BPS accredited degree.</br>

                              </p>
                              <p class="topics-02">Opening of CIRP Life (Therapeutic & Counseling) Centre</p>
                              <p style="text-align:justify">
                                CIRP opened it’s own therapeutic and counseling center with the aim of providing a supervised training center for it’s clinical and counseling students as well as to provide therapeutic services to the community. Housed at a separate location to ensure the confidentiality of the clients, CIRP Life Centre provides counseling, psychotherapy and assessment services. Therapeutic services are provided by CIRP faculty members who are qualified psychologists and visiting psychologists and therapists while most of the administration positions are handled by the interning students.  Centre was first at St. Joseph Lane (2013-2015) then at Bethesda Place (2015-2018) & St. Alban’s Road (2019) and moved back to Bethesda Place in 2020 where it functions up to date. Over the yeas CIRP Life Centre has contributed actively to CIRP’s goal of capacity building by providing training  in counseling & psychotherapy to hundreds and hundreds of students.</br>

                              </p>
                              <p class="topics-02">Dr. Ranjith Batuwanthudawe – Academic Dean (2015 – To Date)</p>
                              <p style="text-align:justify">
                                Dr.Ranjith Batuwanthudawe was appointed the Academic Dean of CIRP in 2015. Dr. Batuwanthudawe is an expert and a leading researcher in the fields of Health promotion, Disease prevention, Health education, Health policy and Community medicine. He has held many senior positions in WHO and Director level appointments in the Ministry of Health in Sri Lanka. He joined CIRP in 2015 as the Academic Dean and is holding the position up to date.</br>

                              </p>
                              <p class="topics-02">Opening of Sea Side campus</p>
                              <p style="text-align:justify">
                                In order to accommodate the increasing student and staff population and to provide more resources to students, departments of CIRP functioning in two different locations were brought under one roof at the Sea Side Campus on Galle Road Colombo o4. A modern building with 7 levels and state of the art infrastructure, CIRP Sea Side campus is one of the largest city campuses in Colombo.</br></br>

                                CIRP has added few more spaces since the opening of the Seas Side campus but it still remains the main facility of CIRP.

                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="card card-default">
                          <div class="card-header">
                            <h4 class="card-title m-0">
                              <a
                                class="accordion-toggle"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapse1eight"
                              >
                                2016
                                <i
                                  class="icon-plus icons"
                                  style="float: right;"
                                ></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse1eight" class="collapse">
                            <div class="card-body">
                              <p class="topics-02">Launch of MSc in Business & Organizational Psychology</p>
                              <p style="text-align:justify">
                                CIRP launched the MSc in Business & Organizational Psychology program in 2016 with the intention of initiating the field of business psychology in the country. By this time Sri Lanka had no practicing business psychologists and corporate sector hardly used psychological applications in organizations. Introduction of this program and students completing this qualification joining the corporate sector resulted in many organizations recognizing the importance of psychological application at workplace. This initiative was proven a success when alumni of this program established the Association of Business Psychology Sri Lanka, (ABPSL) ensuring the continuous growth of the field in the country.</br>

                              </p>
                              
                            </div>
                          </div>
                        </div>
                        <div class="card card-default">
                          <div class="card-header">
                            <h4 class="card-title m-0">
                              <a
                                class="accordion-toggle"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapse1nine"
                              >
                                2017
                                <i
                                  class="icon-plus icons"
                                  style="float: right;"
                                ></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse1nine" class="collapse">
                            <div class="card-body">
                              <p class="topics-02">Sri Lanka tour of Prof.Marting Seligman</p>
                              <p style="text-align:justify">
                                CIRP organized the Sri Lanka tour of Prof.Marting Seligman as a part of the ICAP Sri Lanka 2017 conference. Arranging one of the top psychologists and a legend in the field to visit Sri Lanka was done with the intention of inspiring the younger generations of psychologists in the region and to attract the attention of the media and governments in the region towards the field of psychology.</br></br>

                                Seligman is credited as the father of Positive Psychology and its efforts to scientifically explore human potential. His theory of learned helplessness is popular among scientific and clinical psychologists. A Review of General Psychology survey, published in 2002, ranked Seligman as the 31st most cited psychologist of the 20th century.</br></br>

                                Seligman is the Zellerbach Family Professor of Psychology in the University of Pennsylvania's Department of Psychology. He was previously the Director of the Clinical Training Program in the department, and earlier taught at Cornell University. He is the director of the university's Positive Psychology Center. Seligman was elected President of the American Psychological Association for 1998.</br>

                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="card card-default">
                          <div class="card-header">
                            <h4 class="card-title m-0">
                              <a
                                class="accordion-toggle"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapse1ten"
                              >
                                2018

                                <i
                                  class="icon-plus icons"
                                  style="float: right;"
                                ></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse1ten" class="collapse">
                            <div class="card-body">
                              <p class="topics-02">Initiating Business Psychology Association of Sri Lanka</p>
                              <p style="text-align:justify">
                                CIRP initiated and facilitated the inauguration of the Business Psychology Association of Sri Lanka in 2018. Through this pioneering act CIRP was able to empower the professionals in an emerging fields to organize themselves to work together in establishing professional and ethical standards of the profession, strengthen networks for peer support and initiate the aspects of policy making to become a regulatory body in the future. Though the initiation was facilitated by CIRP, BPASL is an independent professional body governed by a board of trustees, elected by the members.</br>

                              </p>
                              <p class="topics-02">First Employee Assistance Center (EAC) in Sri Lanka</p>
                              <p style="text-align:justify">

                                CIRP in collaboration with Sri Lankan Air Lines established Sri Lanka’s first Employee Assistance Centre at Bandaranaike International Airport Premises to provide psychological support for the staff of the air line. Sri Lankan Airlines, the national carrier of Sri Lanka is one of the largest corporate organizations in the country. Though few organizations had appointed internal psychologists to support their staff members, Sri Lanka did not have the experience of an EAC established according to professional standards before this initiative. Soon many other corporates followed the trend and CIRP achieved it’s goal on setting trends that contribute to the growth of the field.</br>
                              </p>
                              <p class="topics-02">Academic Partnership with University of Northampton UK</p>
                              <p style="text-align:justify">
                                From 2018, University of Northampton UK became the main academic partner of CIRP. Initial MOU between the two organizations was signed by Dr.Darshan Perera, Head of CIRP and Dr.Helen Poole, the Dean of Faculty of Health & Society of University of Northampton in August 2018 at CIRP Sea Side Campus. MOU paved the way to develop the collaboration to deliver the BSc (Hons) Psychology programs as well as several postgraduate qualifications in the years to come.</br>

                              </p>
                              <p class="topics-02">Introduction of combined degrees</p>
                              <p style="text-align:justify">

                                CIRP introduced combined degrees in Psychology in Sri Lanka for the first time when the institute launched undergraduate programs in Psychology and Business/ Marketing/ HRM/Sports Science/ Child Care/ Counseling and Criminology. This provided opportunity for students to gain employable skills in these areas of applied psychology during their undergraduate degree itself.</br>
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="card card-default">
                          <div class="card-header">
                            <h4 class="card-title m-0">
                              <a
                                class="accordion-toggle"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapse1eleven"
                              >
                                2019
                                <i
                                  class="icon-plus icons"
                                  style="float: right;"
                                ></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse1eleven" class="collapse">
                            <div class="card-body">
                              <p class="topics-02">Opening of Student accommodation</p>
                              <p style="text-align:justify">
                                CIRP opened it’s student accommodation in 2019. Located 200m from the Sea Side campus in Bethesda Place, facility includes both single and shared room types. Rooms provide all modern facilities and comfort and meets the international standards in student accommodation. Sri Lanka as well as international students of CIRP have made use of this facility since 2019.</br>

                              </p>
                              <p class="topics-02">Prof. David Winter – Director of Postgraduate Studies (2019 – To Date)</p>
                              <p style="text-align:justify">
                                Prof. David Winter, one of UK’s prominent psychologists and a very senior academic and a researcher in Psychology was appointed as the Director of Postgraduate Studies in the latter part of 2019.</br></br>

                              After studying psychology and clinical psychology at the Universities of Durham, and Newcastle upon Tyne, He spent most of his working life practicing as a clinical psychologist and personal construct psychotherapist in the English National Health Service, where he headed clinical psychology services for over 35 years. He was a Programme Director for the Doctorate in Clinical Psychology at the University of Hertfordshire, and currently Professor Emeritus in Clinical Psychology.</br>

                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="card card-default">
                          <div class="card-header">
                            <h4 class="card-title m-0">
                              <a
                                class="accordion-toggle"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#collapse1twelve"
                              >
                                2020
                                <i
                                  class="icon-plus icons"
                                  style="float: right;"
                                ></i>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse1twelve" class="collapse">
                            <div class="card-body">
                              <p class="topics-02">Dr. Thulitha Wickrama – Head of Research (2020 – To Date)</p>
                              <p style="text-align:justify">
                                Dr.Thulitha Wickrama was appointed as the Head of Research of CIRP in 2020.</br>

                              </p>
                              <p class="topics-02">Becoming a Member of ICUDDR & ISSUP</p>
                              <p style="text-align:justify">
                                CIRP was granted membership to ICUDDR (International Consortium of University for Drug Demand Reduction) and  approved status as an education provider. This provided the opportunity for CIRP to deliver Universal Drug Treatment Curriculum and the Universal Drug Prevention Curriculum from beginner to advanced levels. Furthermore CIRP also gained the institutional membership of International Society of Substance Use Professionals (ISSUP).</br>
                                 
                              </p>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>

                <div id="tab3" class="tabcontent">
                  <div class="product-nav-des">
                    <div class="product-nav-ded-wrapper">
                     
                    </div>
                  </div>
                </div>
                <div id="tab4" class="tabcontent">
                  <div class="product-nav-des">
                    <!-- <div class="product-nav-ded-wrapper">
                      <h3>Reviews</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sit facere commodi aspernatur ut quam possimus,
                        asperiores, optio quasi necessitatibus reprehenderit
                        modi consectetur qui nulla perferendis soluta dolores
                        magnam. Ullam laudantium nisi facilis, dignissimos
                        consectetur numquam quidem quasi obcaecati fugit vel
                        beatae eaque rerum, architecto iusto eum pariatur non
                        nam eius reiciendis sequi sint. Obcaecati amet eius
                        ipsam fugiat recusandae alias labore ad distinctio
                        voluptatibus molestiae quod est dolore harum fugit
                        assumenda perferendis perspiciatis placeat, officiis
                        soluta nihil dicta eos ut!
                      </p>
                    </div> -->
                  </div>
                </div>
                <div id="tab5" class="tabcontent">
                  <div class="product-nav-des">
                    <!-- <div class="product-nav-ded-wrapper">
                      <h3>Reviews</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sit facere commodi aspernatur ut quam possimus,
                        asperiores, optio quasi necessitatibus reprehenderit
                        modi consectetur qui nulla perferendis soluta dolores
                        magnam. Ullam laudantium nisi facilis, dignissimos
                        consectetur numquam quidem quasi obcaecati fugit vel
                        beatae eaque rerum, architecto iusto eum pariatur non
                        nam eius reiciendis sequi sint. Obcaecati amet eius
                        ipsam fugiat recusandae alias labore ad distinctio
                        voluptatibus molestiae quod est dolore harum fugit
                        assumenda perferendis perspiciatis placeat, officiis
                        soluta nihil dicta eos ut!
                      </p>
                    </div> -->
                  </div>
                </div>

                <div id="tab6" class="tabcontent">
                  <div class="product-nav-des">
                    <!-- <div class="product-nav-ded-wrapper">
                      <h3>Reviews</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sit facere commodi aspernatur ut quam possimus,
                        asperiores, optio quasi necessitatibus reprehenderit
                        modi consectetur qui nulla perferendis soluta dolores
                        magnam. Ullam laudantium nisi facilis, dignissimos
                        consectetur numquam quidem quasi obcaecati fugit vel
                        beatae eaque rerum, architecto iusto eum pariatur non
                        nam eius reiciendis sequi sint. Obcaecati amet eius
                        ipsam fugiat recusandae alias labore ad distinctio
                        voluptatibus molestiae quod est dolore harum fugit
                        assumenda perferendis perspiciatis placeat, officiis
                        soluta nihil dicta eos ut!
                      </p>
                    </div> -->
                  </div>
                </div>
                <div id="tab7" class="tabcontent">
                  <div class="product-nav-des">
                    <div class="product-nav-ded-wrapper">
                    
                      <p class="topics">Coat of Arms</p>
                     
                      <p style="text-align: center;">
        <img src="{{static_asset('theme/img/logos/CIRP Logo - Copy2.png')}}"/>
      </p>

                      <p>
                      
                        Our Coat of Arms embodies the prestige and traditions of CIRP and represents the values that the organization was founded upon and therefore the values that should govern every aspect of organizations and its activities.

                    
                        <table width="100%" class="table table-borderless" border="0">
                            <tr>
                              <td width="20%">Motto</td>
                              <td colspan="2" width="30%">"Ad Lucem" (Towards the light)</td> 
                             
                            </tr>
                            <tr>
                              <td width="20%">Colors</td>
                              <td width="30%">Blue</td> 
                              <td width="50%">: Truth</td>
                            </tr>
                            <tr>
                              <td width="20%">&nbsp;</td>
                              <td width="30%">Gold</td> 
                              <td width="50%">: Elevation of the mind</td>
                            </tr>
                             <tr>
                              <td width="20%">&nbsp;</td>
                              <td width="30%">Red</td> 
                              <td width="50%">: Magnanimity</td>
                            </tr>
                            <tr>
                              <td width="20%">Symbolism</td>
                              <td width="30%">Crown</td> 
                              <td width="50%">: Royal authority</td>
                            </tr>
                            <tr>
                              <td width="20%">&nbsp;</td>
                              <td width="30%">Headdress</td> 
                              <td width="50%">: Knowledge</td>
                            </tr>
                            <tr>
                              <td width="20%">&nbsp;</td>
                              <td width="30%">Knight's Helmet</td> 
                              <td width="50%">: Wisdom
                              </td>
                            </tr>
                            <tr>
                              <td width="20%">&nbsp;</td>
                              <td width="30%">Leaves</td> 
                              <td width="50%">: Strong relationship
                              </td>
                            </tr>
                            <tr>
                              <td width="20%">&nbsp;</td>
                              <td width="30%">Platform</td> 
                              <td width="50%">: Represents the ten virtues of body (to protect life, to practice generosity, keep pure morality), speech (to the the truth, to reconcile, to speak in a quite and gentle way, to have a sensible speech), mind (to be content, to be altruistic, to have faith in the right views)
                              </td>
                            </tr>
                             <tr>
                              <td width="20%">&nbsp;</td>
                              <td width="30%">Roundel</td> 
                              <td width="50%">: The circle of arrows is the universal symbol for chaos, representing the environment.<br /><br />
                                The design within the circle witch forms the Greek letterpsi represents spsychology, aiding in decoding and understanding the environment.<br /><br />
                                Left side of the roundel represented in black and white mirrors the left hemisphere of the observer's brain, the logical side, and the right side represents the creative hemisphere, with the symbol equally touching both sides.<br />
                              </td>
                            </tr>
                            <tr>
                              <td width="20%">&nbsp;</td>
                              <td width="30%">Tassels</td> 
                              <td width="50%">:The tie that binds diverse opinions together
                              </td>
                            </tr>
                             <tr>
                              <td width="20%">&nbsp;</td>
                              <td width="30%">Unicorns</td> 
                              <td width="50%">: Virtue
                              </td>
                            </tr>
                        </table>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script>
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(
            " active-tab",
            ""
          );
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active-tab";
      }
      document.getElementById("defaultOpen").click();
    </script>


@endsection