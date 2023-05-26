 @if (Session::has('message_sent'))
    
        <script>
           
        Swal.fire({
        title: 'Success!',
        html: '<p id="swal_message">Message sent successfully!</p>',
        imageUrl: "{{asset('rac_new/images/logo.png')}}",
       
        imageAlt: 'Custom image',
        confirmButtonColor: "#d73925",
        })
        </script>
                              
@endif


  @if (Session::has('message_not_sent'))
    
        <script>
           
        Swal.fire({
        title: 'Error!',
        html: '<p id="swal_message">Error, Message not sent!</p>',
        imageUrl: "{{asset('rac_new/images/logo.png')}}",
       
        imageAlt: 'Custom image',
        confirmButtonColor: "#d73925",
        })
        </script>
                              
@endif

 @if(Session::has('status'))
    
        <script>
           
        Swal.fire({
        title: 'Success!',
        html: '<p id="swal_message">{{ session('status') }}</p>',
        imageUrl: "{{asset('rac_new/images/logo.png')}}",
       
        imageAlt: 'Custom image',
        confirmButtonColor: "#d73925",
        })
        </script>
                              
@endif