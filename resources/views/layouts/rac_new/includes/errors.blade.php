 @if ($errors->has('email'))
    
        <script>
           
        Swal.fire({
        title: 'Error!',
        html: '<p id="swal_message">{{$errors->first('email')}}</p>',
        imageUrl: "{{asset('rac_new/images/logo.png')}}",
       
        imageAlt: 'Custom image',
        confirmButtonColor: "#d73925",
        })
        </script>
                              
@endif


  @if ($errors->has('password'))
    
        <script>
           
        Swal.fire({
        title: 'Error!',
        html: '<p id="swal_message">{{$errors->first('password')}}</p>',
        imageUrl: "{{asset('rac_new/images/logo.png')}}",
       
        imageAlt: 'Custom image',
        confirmButtonColor: "#d73925",
        })
        </script>
                              
@endif