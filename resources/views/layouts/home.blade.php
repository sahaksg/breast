<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    
     <link href="{{ asset('css/app.css') }}" rel="stylesheet"> {{--bootstrap css --}}
    <link href="{{ asset('css/newstyle.css') }}" rel="stylesheet"> {{--my css --}}
    <title>{{config('app.name', 'Breast')}}</title>
    
</head>
<body style="height: 120vh">
    @include('incs.navbar')
    @include('incs.sidebar')
    
    <div class="col py-3" 
    style='background: url({{asset('img/hero-women.png')}}),url({{asset('img/pink.jpg')}}); '>
    {{-- <img src='{{asset('img/hero-women.png')}}' alt ='hero women'/> --}}

        

       

        
    </div>
    <!-- Main Col END -->

</div>
 @include('incs.footer')   
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
{{-- <script src="{{ asset('js/bootstrap.js') }}"></script> --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
     
         <script>
      $(window).scroll(function () {
        $("nav").toggleClass("scrolled", $(this).scrollTop() > 50);
        $("img").toggleClass("scrolled", $(this).scrollTop() > 50);
        $(".badge").toggleClass("scrolled", $(this).scrollTop() > 50);
      });
    </script>
 
</body>
</html>