@extends('layouts.app')
      @section('content')
       <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing section-bg wow fadeInUp">

            <div class="container">

                <header class="section-header mb-4">
                    <strong style="text-align: center;"> 
                        <h3>This is our pricing for our different services. Please contact us directly for a formal price quotation.</h3>
                    </strong> 
                    
                </header>   

                <div class="row flex-items-xs-middle flex-items-xs-center">
                    <!-- Manuscript Proofreading  -->
                    <div class="col-xs-12 col-lg-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">$</span>200</h3>
                            </div>
                            <div class="card-block">
                                <h4 style="size:22px;color: darkred;font-weight: bold;" class="card-title">
                                    Manuscript proofreading
                                </h4>
                                <p class="p-3" style="size:18px; text-align: justify;font-size: 16px;color: black;"> No matter the length of your manuscript, <br>we have a standard price .</p>
                

                            </div>
                        </div>
                    </div>

                    <!-- Technical review  -->
                    <div class="col-xs-12 col-lg-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">$</span>300</h3>
                            </div>
                            <div class="card-block">
                                <h4 style="size:22px;color: darkred;font-weight: bold;" class="card-title">
                                    Technical review
                                </h4>
                                <p class="p-3" style="size:18px; text-align: justify;font-size: 16px;color: black;"> No matter the length of your manuscript,<br> we have a standard price .</p>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Plagiarism Check  -->
                    <div class="col-xs-12 col-lg-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h3><span class="currency">$</span>100</h3>
                            </div>
                            <div class="card-block">
                                <h4 style="size:22px; color: darkred;font-weight: bold;">
                                    Plagiarism Check
                                </h4>
                                <p class="p-3" style="size:18px; text-align: justify;font-size: 16px;color: black;"> No matter the length of your manuscript, <br>we have a standard price .</p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Full manuscript writing  -->
                    <div style="padding-top: 10px;" class="col-xs-12 col-lg-4 mb-3">
                        <div class=" card ">
                            <div class="card-header ">
                                <h3><span class="currency ">$</span>**</h3>
                            </div>
                            <div class="card-block ">
                                <h4  style="size:22px; color: darkred;font-weight: bold;">
                                    Full manuscript writing
                                </h4>
                                <p class="p-3" style="size:18px; text-align: justify;font-size: 16px;color: black;"> Please contact us to get a quotation.<br> Price depends on the target journal, <br>data analysis requested, complexity <br>of the study, etc.</p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Bioinformatic data analysis  -->
                    <div style="padding-top: 10px;" class="col-xs-12 col-lg-4 mb-3">
                        <div class="card ">
                            <div class="card-header ">
                                <h3><span class="currency ">$</span>**</h3>
                            </div>
                            <div class="card-block ">
                                <h4 style="size:22px; color: darkred;font-weight: bold;">
                                    Bioinformatic data analysis
                                </h4>
                                <p class="p-3" style="size:18px; text-align: justify;font-size: 16px;color: black;"> Please contact us to get a quotation. <br>Price depends on the data analysis<br> requested, complexity of the<br> datasets, etc.</p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Journal recommendation-submission  -->
                    <div style="padding-top: 10px;" class="col-xs-12 col-lg-4 mb-3">
                        <div class="card ">
                            <div class="card-header ">
                                <h3><span class="currency ">$</span>200</h3>
                            </div>
                            <div class="card-block ">
                                
                                <h4  style="size:22px; color: darkred;font-weight: bold;">
                                    Journal recommendation-submission
                                </h4>
                               <p class="p-3" style="size:18px; text-align: justify;font-size: 16px;color: black;"> it includes up to 5 journals suggestion,<br> cover letter drafting , manuscript <br>formatting and submission .</p>
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

       @endsection