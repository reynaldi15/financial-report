@extends('component.app')
@section('title', 'Home')
@section('content')
<div class="h-screen pb-14 bg-right bg-cover" style="background-image:url('{{ asset('assets/bg.svg') }}');">
  @include('component.navbar')
      <!--Main-->
      <div class="container pt-24 md:pt-48 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
          <h1 class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Record Finances Without Worrying About Forgetting!</h1>
          <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Manage your daily finances, monitor expenses, and achieve financial goals faster!.</p>
        
          <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">Make Your Report:</p>
          <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
            {{-- <a href="{{ route('login') }}"> --}}
            <a href="/login">
              <button class="h-12 px-6 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition duration-300 ease-in-out bounce-top-icons">
                  Start
              </button>
          </a>
        </div>
    
        </div>
        
        <!--Right Col-->
        <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
          <img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom" src="{{ asset('assets/devices.svg') }}">
      </div>
      
        <!--Footer-->
        <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
          <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; FRM 2023</a>
        </div>
        
      </div>  
    </div>
@endsection

