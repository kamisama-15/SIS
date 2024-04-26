<div class="content-wrapper">
   <div class="content py-3">
      <div class="card shadow rounded-0">
         <div class="card-body">
            <div class="card-container container p-5" id="card-container">
               <h3 class="text-center text-bold">SOUTHERN MINDANAO INSTITUTE OF TECHNOLOGY, INC.</h3>
               <p class="text-center my-0">National Highway, Brgy. Buenaflor</p>
               <p class="text-center my-0">City of Tacurong, Sultan Kudarat</p>
               <p class="text-center my-0">Email add:smit.inc85@gmail.com</p>
               <p class="text-center my-0 ">Telefax No. (064) 200-3549</p>
               <div class="col-10 mb-5 offset-1 border border-dark"></div>
               <h3 class="text-center  mb-5">BASIC EDUCATION DEPARTMENT</h3>
               <h3 class="text-center text-bold mb-5">CERTIFICATE OF GOOD MORAL CHARACTER</h3>
               <h4 class="offset-2 mb-5">TO WHOM IT MAY CONCERN:</h4>
               <div class="offset-1 mb-5">
                  <p class="mb-0 text-lg"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;This is to certify that <u class="mx-1 px-2 text-bold" contenteditable="true">Sanjo Maniro</u>
                     <strong>LRN:</strong> <u class="mx-1 px-2 text-bold" contenteditable="true">123456789012</u>has completed the requirements as<u class="mx-1 px-2" contenteditable="true">Grade 10</u> of the K+12 Basic Education Curriculum prescribed by the Department of Education at Southern Mindanao Institute of Technology, Inc., Tacurong City, School Year 2022 – 2023.
                  </p>
               </div>
               <p class="offset-1 text-lg mb-5">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; This is to certify that he/she possesses a good moral character. This certification is being issued upon his/her request for whatever legal purpose it may serve his/her best</p>
               <p class="offset-1 text-lg mb-5"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Given this <u class="mx-1 px-2" style="width: 200px; border-bottom: 1px solid black;" contenteditable="true"></u>
                  day of <u class="mx-1 px-2" style="width: 200px; border-bottom: 1px solid black;" contenteditable="true"></u>, <span contenteditable="true" style="width:200px">2023</span>
                  <strong>at Southern Mindanao Institute of Technology, Inc.</strong>, Tacurong City, Sultan Kudarat
               </p>
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 ">
                        <div class="float-right mt-3 mb-5 mr-5 pr-5 ">
                           <strong class="text-lg">CRISLIE S. SUBALDO, LPT, MAT</strong>
                           <div class="text-center">
                              <p class="text-lg mb-0">Principal</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="d-flex align-items-start">
                        <div class="ml-2">
                           <strong class="text-sm">Not valid</strong>
                           <div class="text-center">
                              <p class="text-sm mb-0">w/out school seal</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <button class="btn btn-primary" onclick="printGoodMoral()"> <i class="fa fa-print mr-2"></i>Print Certificate</button>
         </div>
      </div>
   </div>
</div>

<script>
   function printGoodMoral() {
      var initialStyles = {};
   
      var elementsToHide = document.querySelectorAll('body > :not(#card-container)');
      elementsToHide.forEach(function(element) {
         initialStyles[element] = {
            display: element.style.display,
            width: element.style.width,
            height: element.style.height
         };
         element.style.display = 'none';
         element.style.width = '';
         element.style.height = '';
      });
   
      var originalContent = document.getElementById('card-container').cloneNode(true);
      var temporaryContainer = document.createElement('div');
      temporaryContainer.appendChild(originalContent);
   
      document.body.appendChild(temporaryContainer);
   
   var scale = 0.71; 
   var style = document.createElement('style');
   style.textContent = '@page { size: auto; margin: 0mm; transform: scale(' + scale + '); }';
   temporaryContainer.appendChild(style);
   
   window.print();
   
   temporaryContainer.remove();
   
   elementsToHide.forEach(function(element) {
   element.style.display = initialStyles[element].display;
   element.style.width = initialStyles[element].width;
   element.style.height = initialStyles[element].height;
   });
   }
</script>

<?php include APPPATH . "views/templates/footer.php"; ?>