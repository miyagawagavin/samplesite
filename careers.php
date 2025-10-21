<?php
include './assets/src/header.php'

?>
<head>   <link rel="stylesheet" href="./assets/src/style.css"></head>
    <div class="centered-accordion info-section">
        <h1 class="text-center mb-4">Job Openings</h1>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed accordion-button" type="button" data-toggle="collapse"
                            href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Software Developer
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body accordion-content">
                        <strong>Description:</strong><br>
                        Opportunity to work in a collaborative, entrepreneurial, and results-driven environment.
                        Exposure to the intricacies of trading and financial markets, enhancing your industry knowledge.
                        Flexibility in work location and schedule, enabling a healthy work-life balance. Salary: $129K. <br><br>


                        <strong>Qualifications:</strong>
                        <ul>
                            <li>Bachelor's degree in Computer Science, Software Engineering, or a related field
                                (Master's
                                preferred).</li>
                            <li>Proficiency in C++, Julia, or Python.</li>
                            <li>Familiarity with financial markets, trading concepts, and electronic trading platforms
                                is a plus.</li>
                            <li>Excellent problem-solving skills and the ability to work collaboratively in a team
                                environment.</li>
                            <li>Previous experience in a trading or financial services environment is desirable but not
                                mandatory.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed accordion-button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Algorithmic Trader
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body accordion-content">
                        <strong>Description:</strong><br>
                        We are seeking experienced candidates with outstanding track records and strong academic
                        credentials to join our team. These portfolio managers will be responsible for building +
                        running high-sharpe algorithmic strategies on our world-class technology platform.<br>
                        <strong>Qualifications:</strong>
                        <ul>
                            <li>Have an exceptional track record trading on any asset class.</li>
                            <li>Possess a degree from a top tier institution in a quantitative field, such as
                                Mathematics, Computer Science, Physics, etc.</li>
                            <li>Have intermediate to strong programming skills (acquired academically or through
                                hands-on experience).</li>
                            <li>Have superior critical thinking and analytical skills, combined with creativity, innate
                                curiosity, and attention to detail.</li>
                            <li>Possess a relentless drive to succeed, supplemented by a strong work ethic.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed accordion-button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Quant Researcher
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body accordion-content">
                        <strong>Description:</strong><br>
                        As a Quant Researcher, you'll collaborate with traders and developers to implement, backtest,
                        deploy trading algorithms and models using statistical techniques, machine learning, and data
                        analysis.<br>
                        <strong>Qualifications:</strong>
                        <ul>
                            <li>Advanced degree in Mathematics, Statistics, Physics, Computer Science, or a related
                                quantitative field.</li>
                            <li>Proficiency in programming languages such as Python, R, or Julia for data analysis,
                                modelling, and algorithm development.</li>
                            <li>Excellent programing solving and communication skills.</li>
                            <li>Have superior critical thinking and analytical skills, combined with creativity, innate
                                curiosity, and attention to detail.</li>
                            <li>Demonstrated ability to work in a team-oriented, fast-paced environment.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container info-section">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 offset-7">
                            <div class="card" style="width: 30rem; height: 150px;">
                                <div class="card-body">
                                    <h5 class="card-title">Interested? Email us!</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <div>
                                            <a href="mailto:jobs@sharadacm.com"><i class="fas fa-envelope"></i> Apply
                                                Here</a>
                                        </div>
                                    </h6>
                                    <p class="card-text">Email us at <a href="mailto:jobs@sharadacm.com">jobs@sharadacm.com</a> with your name, position(s)
                                        of interest, and resume to submit your application!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include './assets/src/footer.php'

?>