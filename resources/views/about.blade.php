@extends('layout')
@include('header')

@section('content')
<div>
    <section id="about" class="d-flex align-items-center">
    <div class='container-fluid nav_bg'>
        <div class='row home_row'>
            <div class='col-12 mx-auto'>
            <div class="row home_row">
                <div class="col-lg-6 order-1 order-lg-1 main_img">
                    <img src="images/we_have.jpg" class="animated about-img" alt="home img" />
                </div>
                <div class="col-md-6 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center align-items-center flex-column about_text">
                    <h1 class="about_heading">Who We are </h1>
                    <p class="">
                    We are a dedicated medical shop and clinic, your comprehensive destination for healthcare and wellness. With experienced medical professionals and a well-stocked pharmacy under one roof, we offer expert consultations and immediate access to medications. Our integrated approach ensures personalized care, convenient prescriptions, and a comfortable environment. We're committed to your health, providing not just services, but a supportive community hub for all your medical needs. At our medical shop and clinic, your well-being is our priority.
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>


    <section id="about" class="d-flex align-items-center">
    <div class='container-fluid nav_bg'>
        <div class='row home_row'>
            <div class='col-12 mx-auto'>
            <div class="row home_row">
                <div class="col-md-6 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center align-items-center flex-column">
                    <h1>What We Do</h1>
                    <p class="">
                                        A medical clinic with an attached medicine store serves as a vital hub for healthcare services and patient wellness. This integrated approach brings together medical expertise and pharmaceutical resources under one roof, creating a convenient and comprehensive healthcare experience for individuals and families.
                                        A medical clinic is a healthcare facility where medical professionals such as doctors, nurses, and specialists provide a range of medical services to diagnose, treat, and manage various health conditions. These clinics are designed to cater to both routine healthcare needs and urgent medical concerns, offering services such as general check-ups, vaccinations, minor surgeries, and consultations for specialized conditions. Patients benefit from the expertise of medical professionals who are equipped to address a wide array of health issues.
                    </p>
                </div>

                <div class="col-lg-6 order-1 order-lg-2 main_img">
                    <img src="images/helth_advice.jpg" class="animated" alt="home img" />
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section id="about" class="d-flex align-items-center">
    <div class='container-fluid nav_bg'>
        <div class='row home_row'>
            <div class='col-12 mx-auto'>
            <div class="row home_row">
                <div class="col-lg-6 order-1 order-lg-2 main_img">
                    <img src="images/patient.jpg" class="animated" alt="home img" />
                </div>
                <div class="col-md-6 pt-lg-0 order-2 order-lg-2 d-flex justify-content-center align-items-center flex-column about_text">
                    <h1>What Patient are Said</h1>
                    <p class="">
                    Patients rave about our medical store & clinic! They applaud our seamless service that combines expert medical care and a well-stocked pharmacy. One patient mentioned, "It's a relief to consult a doctor and pick up my meds in one place." Others praise our attentive pharmacists who offer valuable guidance on medications. A patient's testimonial resonates, "The convenience and personalized attention are unmatched." The clinic's calming atmosphere and efficient operations also garnered positive feedback. "Visiting is a breeze; it feels like a community, not just a clinic," shared a satisfied patient. Patients' words reflect our commitment to comprehensive, caring healthcare.
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section id="about" class="d-flex align-items-center">
    <div class='container-fluid nav_bg'>
        <div class='row home_row'>
            <div class='col-12 mx-auto'>
            <div class="row home_row">
                <div class="col-md-6 pt-lg-0 order-2 order-lg-1 d-flex justify-content-center align-items-center flex-column">
                    <h1>Our Feature plan</h1>
                    <p class="">
                    Introducing our cutting-edge feature plan for the Medical Service Center. Elevating healthcare, our plan offers advanced telemedicine services, connecting patients with specialists globally. Additionally, our AI-driven health assessments provide instant insights. With streamlined electronic health records, patient history is at your fingertips. Wellness workshops and virtual consultations empower proactive health management. Plus, our medication delivery service ensures timely prescriptions. This comprehensive feature plan redefines healthcare accessibility, convenience, and quality, placing your well-being at the forefront. Experience the future of medical services with us. Your health, our priority.
                    </p>
                </div>

                <div class="col-lg-6 order-1 order-lg-2 main_img">
                    <img src="images/featureplan.jpg" class="animated" alt="home img" />
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>

    @include('footer')
    @endsection