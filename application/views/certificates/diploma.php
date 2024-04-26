<style type='text/css'>
   /*body, html {
   margin: 0;
   padding: 0;
   }*/
   #card-container:{
      background-color: white;
   }
   .card-body {
   color: black;
   display: table;
   font-family: Georgia, serif;
   font-size: 24px;
   text-align: center;
   display: flex;
   justify-content: center;
   align-items: center;
   }
   .container {
   border: 10px solid black;
   height: 730px;
   display: table-cell;
   vertical-align: middle;
   }
   .logo {
   color: black;
   }
   .marquee {
   color: tan;
   font-size: 48px;
   margin: 20px;
   }
   .assignment {
   margin: 20px;
   }
   .person {
   border-bottom: 2px solid black;
   font-size: 32px;
   font-style: italic;
   margin: 20px auto;
   width: 400px;
   }
   .reason {
   margin: 20px;
   }
   .text-one{
   font-size: 15px;
   font-weight: bolder;
   }
   .text-two{
   font-size: 10px;
   }
   .text-school{
   font-weight: bolder;
   }
   .text-lrn-detail{
   font-size: 15px;
   }
   .reason .row {
   display: flex;
   justify-content: center; /* Center the content horizontally */
   align-items: center; /* Center the content vertically */
   }
   .reason .col {
   flex: 1; /* Equal width columns */
   }
   .ribbon {
   position: relative;
   margin: 20px auto 0; /* Adjusted margin to push the ribbon to the bottom */
   padding: 10px 40px;
   text-align: center;
   background-color: #E2DFD2; /* Changed to a light #E2DFD2ish color */
   color: black; /* Changed text color to a slightly darker shade */
   border-radius: 8px; /* Border radius to round the corners */
   z-index: 2; /* Ensure the ribbon is above pseudo-elements */
   }
   .ribbon::before,
   .ribbon::after {
   content: '';
   width: 80px;
   height: 100%;
   background-color: #E2DFD2; /* Changed to a light #E2DFD2ish color */
   color: #888888; /* Changed text color to a slightly darker shade */
   position: absolute;
   z-index: 1; /* Set a lower z-index to ensure it's behind the ribbon */
   top: -20px; /* Moved the pseudo-elements to the top */
   border-radius: 8px; /* Border radius to round the corners */
   /* Clip ribbon end shape */
   clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 25% 50%);
   /* Draw and position the folded ribbon bit */
   background-image: linear-gradient(45deg, transparent 48%, #E2DFD2 48%), linear-gradient(-45deg, transparent 48%, #E2DFD2 48%); /* Added border to the sideways triangle */
   background-size: 20px 20px;
   background-repeat: no-repeat;
   background-position: bottom right, bottom left; /* Adjusted position for both triangles */
   }
   .ribbon::before {
   left: -60px;
   }
   .ribbon::after {
   right: -60px;
   transform: scaleX(-1); /* Flip horizontally */
   }
   .ribbon-container {
   max-width: 300px; /* Adjust the max-width as needed */
   margin: 20px auto; /* Center the container horizontally and provide spacing */
   }
</style>
<div class="content-wrapper">
   <div class="content py-3">
      <div class="card shadow rounded-0">
         <div class="card-body">
            <div class="card-container container" id="card-container">
                <div style="display: flex; justify-content: space-between;">
                    <img clas src="<?php echo base_url()?>assets/uploads/smit.png" style="left:100px; position:absolute;width:100px;height:100px; top:50px">
                    <img  src="<?php echo base_url()?>assets/uploads/deped.png" style="right:100px; position:absolute; width:100px;height:100px; top:50px">
                </div>
               <div class="logo">
                  <h5 class="text-one my-0 mt-2">Republika ng Pilipinas</h5>
                  <h5 class="text-two my-0">Repubic of the Philippines</h5>
                  <h5 class="text-one my-0">Kagawaran ng Edukasyon</h5>
                  <h5 class="text-two">Departmen of Education</h5>
                  <h4 class="text-one my-0">REHIYON XII</h4>
                  <h6 class="text-two">Region XII</h6>
                  <h4 class="text-one my-0">SANGAY NG LUNGSOD NG TACURONG </h4>
                  <h6 class="text-two my-0">City Schools Division of Tacurong</h6>
                  <h3 class="text-school">Southern Mindanao Institute of Technology, Inc.</h3>
                  <h4 class="text-two my-0">NATIONAL HIGHWAY, BARANGAY BUENAFLOR</h4>
                  <h4 class="text-two my-0">CITY OF TACURONG</h4>
               </div>
               
               <div class="assignment">
                  <h5>Pinatunayan nito na si</h5>
                  <h6 class="text-two">This is to certifies that</h6>
               </div>
               <div  class="person">
                  <h3 contenteditable="true">Kamisama Gaming</h3>
               </div>
               <h5 class="text-one"><span style="color:blue; font-weight:bold;">Learner Reference Number</span> (LRN)-<span contenteditable="true"></span></h5>
               <h5 class="text-lrn-detail my-0">ay kasiya-siyang nakatupad sa mga kinakailangan sa pagtatapos ng <span contenteditable="true" style="font-weight:bolder;">Senior High School</span></h5>
               <h5 class="text-two">has satisfactory completed the requirements for graduation in <span contenteditable="true">Senior High School</span></h5>
               <div class="reason my-0">
                  <div class="row my-0 align-items-center offset-4">
                     <div class="col text-center">
                        <div class="tvl text-one"><u class="mx-1 px-2" style="width: 200px; border-bottom: 1px solid black;" contenteditable="true"></u> </div>
                        <div class="tvl text-one"><u class="mx-1 px-2" style="width: 200px; border-bottom: 1px solid black;" contenteditable="true"></u></div>
                     </div>
                     <div class="col text-left ">
                        <div class="track text-one">
                           <bold class="" >STRAND</bold>
                        </div>
                        <div class="track text-one">
                           <bold class="" >TRACK</bold>
                        </div>
                     </div>
                  </div>
               </div>
               <h5 class="text-lrn-detail my-0">na itinakda para sa  <span contenteditable="true" style="font-weight:bolder;">Mataas na Paaralan ng Kagawaran ng Edukasyon</span>, kaya pinagkalooban siya nitong</h5>
               <h5 class="text-two">prescribed for Secondary School of the <span contenteditable="true">Department of Education</span> and is therefore awareded this</h5>
               <div class="ribbon-container my-0">
                  <span class="text-one my-0">Katibayan</span>
                  <h1 class="ribbon text-one my-0">Diploma</h1>
               </div>
               <h5 class="text-lrn-detail my-0">Nilagdan sa Lungsod Tacurong, Pilipians nitong ikaw- <span contenteditable="true">26</span> ng <span contenteditable="true">Marso 2019</span>.</h5>
               <h5 class="text-two my-0">Signed in the City of Tacurong on the<span contenteditable="true">26</span> day  of <span contenteditable="true">Marso 2019</span>.</h5>

               <div class="row">
                     <div class="col-md-12 ">
                        <div class="float-left mt-3 mb-5 mr-5 pr-5 ">
                           <u class="text-one">CRISLIE S. SUBALDO, LPT, MAT</u>
                           <div class="text-center">
                              <p class="text-one mb-0">Principal</p>
                           </div>
                        </div>
                        <div class="float-right mt-3 mb-5 ">
                           <u class="text-one">FEDERICO S. SENERES, JR.</u>
                           <div class="text-center">
                              <p class="text-one mb-0">President</p>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <div class="float-left ml-3 mb-3">
            <button class="btn btn-primary" onclick="printDiploma()"> <i class="fa fa-print mr-2"></i>Print Certificate</button>
         </div>
      </div>
      
   </div>
</div>
<?php include APPPATH . "views/templates/footer.php"; ?>
<script>
 function printDiploma() {
    var cardBody = document.querySelector('.card-body'); // Select the element with the card-body class

    if (cardBody) {
        var initialDisplay = cardBody.style.display; // Save the initial display style
        cardBody.style.display = 'block'; // Ensure the card-body is visible for printing

        var elementsToHide = document.querySelectorAll('body > :not(.card-body)');
        elementsToHide.forEach(function(element) {
            element.style.display = 'none'; // Hide all elements outside the card-body
        });

        // Create a temporary container and clone the card-body content
        var temporaryContainer = document.createElement('div');
        temporaryContainer.appendChild(cardBody.cloneNode(true));

        document.body.appendChild(temporaryContainer);

        // Apply print-specific styles
        var style = document.createElement('style');
        style.textContent = '@page { size: landscape; margin: 0mm; }'; // Landscape orientation for printing
        temporaryContainer.appendChild(style);

        // Trigger print
        window.print();

        // Clean up
        temporaryContainer.remove();

        // Restore initial display styles
        elementsToHide.forEach(function(element) {
            element.style.display = ''; // Restore original display style
        });
        cardBody.style.display = initialDisplay; // Restore original display style for card-body
    } else {
        console.error('Card-body element not found.');
    }
}

</script>

