 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body style='background-color:grey' >
     @include('layouts/app')
     
  <form class='container' action="contact" method='post'>
     <div class='form-group'>
     <h1>contact us</h1>
     <input type="type" class='form-control' name='email' placeholder='Enter your email please'><br/>
     <textarea type="text" class='form-control' name='message' placeholder='Write message please'></textarea><br/>
     <button type='submit' class='btn btn-primary'>send message</button>
     @csrf
     </div>
  </form>
     
 </body>
 </html>