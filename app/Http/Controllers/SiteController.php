<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }
      public function visa()
    {
        return view('visa');
    }
          public function businessVisa()
    {
        return view('business-visa');
    }
           public function studentVisa()
    {
        return view('student-visa');
    }
            public function jobseekerVisa()
    {
        return view('jobseeker-visa');
    }
            public function touristVisa()
    {
        return view('tourist-visa');
    }
            public function familyVisa()
    {
        return view('family-visa');
    }
            public function transitVisa()
    {
        return view('transit-visa');
    }
            public function migrateVisa()
    {
        return view('migrate-visa');
    }
            public function consularClosings()
    {
        return view('consular-closings');
    }
            public function diplomaticVisa()
    {
        return view('diplomatic-visa');
    }
        public function country()
    {
        return view('country');
    }
        public function australia()
    {
        return view('australia');
    }
        public function unitedStates()
    {
        return view('united-states');
    }
        public function unitedKingdom()
    {
        return view('united-kingdom');
    }
        public function canada()
    {
        return view('canada');
    }
        public function singapore()
    {
        return view('singapore');
    }
        public function newZealand()
    {
        return view('new-zealand');
    }
          public function services()
    {
        return view('services');
    }
          public function faq()
    {
        return view('faq');
    }
          public function login()
    {
        return view('login');
    }
          public function register()
    {
        return view('register');
    }
          public function forgotPassword()
    {
        return view('forgot-password');
    }
   
          public function terms()
    {
        return view('terms');
    }
          public function privacyPolicy()
    {
        return view('privacy');
    }
         public function about()
    {
        return view('about');
    }
         public function contact()
    {
        return view('contact');
    }
  
   
}
