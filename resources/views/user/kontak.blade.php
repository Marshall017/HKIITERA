@extends('layouts.app')

@section('content')

        <h1 style="text-align: center">Contact Information</h1><br>

        <div class="container">
            <div class="contact__wrapper shadow-lg mt-n9">
                <div class="row no-gutters">
                    <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                        <h3 class="color--white mb-5">Get in Touch</h3>
            
                        <ul class="contact-info__list list-style--none position-relative z-index-101">
                            <li class="mb-4 pl-4">
                                <span class="position-absolute"><i class="bi bi-envelope-open"></i></span> <a href="hki@itera.ac.id" style="color: white">hki@itera.ac.id</a>
                            </li>
                            <li class="mb-4 pl-4">
                                <span class="position-absolute"><i class="fas fa-phone"></i></span> +62 858-1950-9716
                            </li>
                            <li class="mb-4 pl-4">
                                <span class="position-absolute"><i class="bi bi-alarm"></i></span> Senin - Jum'at: 8.00 - 16.00 WIB
                            </li>
                            <li class="mb-4 pl-4">
                                <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span> Gedung C Institut Teknologi Sumatera
                                <br> J8R7+JG8, Way Huwi, Kec. Jati Agung, Kabupaten Lampung Selatan, 
                                <br> Lampung 35365 Indonesia
                            </li>
                        </ul>
                    </div>
            
                    <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                        <form action="#" class="contact-form form-validate" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="required-field" for="firstName">Name</label>
                                        <input type="text" class="form-control" id="Name" name="Name" placeholder="Your name">
                                    </div>
                                </div>
            
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="lastName">Subject</label>
                                        <input type="text" class="form-control" id="Subject" name="Subject" placeholder="Subject">
                                    </div>
                                </div>
            
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label class="required-field" for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
            
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
            
                                <div class="col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label class="required-field" for="message">How can we help?</label>
                                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Hi there, I would like to....."></textarea>
                                    </div>
                                </div>
            
                                <div class="col-sm-12 mb-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
            
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form Wrapper -->
            
                </div>
            </div>
        </div>
<br><br><br><br><br>
@endsection
