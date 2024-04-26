<div class="content-wrapper">
   <div class="content py-3">
      <div class="card shadow rounded-0">
         <div class="card-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col">
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <div class="card-body" id="card-container">
                              <div class="row my-0">
                                 <div class="col-12">
                                    <img class="deped" src="<?php echo base_url()?>assets/uploads/deped.png">
                                    <img class="ne" src="<?php echo base_url()?>assets/uploads/ne.png">
                                    <p class="text-center mb-1">Republic of the Philippines</p>
                                    <p class="text-center mb-2">Department of Education</p>
                                    <h5 class="text-center my-0 text-bold fs-5 fs-md-4">Learner's Permanent Academic Record for High School</h5>
                                    <p class="text-center text-super-sm my-1">(Formerly Form 137)</p>
                                 </div>
                              </div>
                              <div class="row my-0  bg-color justify-content-center align-items-center border border-dark">
                                 <h5 class="text-bold text-sm">
                                 LEARNER'S INFORMATION</h6>
                              </div>
                              <div class="row my-0">
                                 <div class="col-12">
                                    <div class="form-group row align-items-center my-0">
                                       <label for="last_name" class="col-form-label text-super-sm">LAST NAME:</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="last_name">
                                       </div>
                                       <label for="first_name" class="col-form-label text-super-sm">FIRST NAME:</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="first_name">
                                       </div>
                                       <label for="name_ext" class="col-form-label text-super-sm">NAME EXTN. (Jr, I, II):</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="name_ext">
                                       </div>
                                       <label for="middle_name" class="col-form-label text-super-sm">MIDDLE NAME:</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="middle_name">
                                       </div>
                                    </div>
                                    <div class="form-group row align-items-center my-0">
                                       <label for="LRN" class="col-form-label text-super-sm">Learner Reference Number (LRN):</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="LRN">
                                       </div>
                                       <label for="birthdate" class="col-form-label text-super-sm">Birthdate (mm/dd/yy):</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="birthdate">
                                       </div>
                                       <label for="sex" class="col-form-label text-super-sm">Sex:</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sex">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row mb-1 my-0">
                                 <div class="col-12 bg-color d-flex justify-content-center align-items-center border border-dark">
                                    <h5 class="text-center text-bold text-sm">ELIGIBILITY FOR JHS  ENROLMENT</h5>
                                 </div>
                              </div>
                              <div class="row border border-dark px-1 pb-1 my-0">
                                 <div class="col-12">
                                    <div class="form-group row align-items-center my-0">
                                       <div class="col-sm-3">
                                          <div class="form-check">
                                             <input type="checkbox" class="form-check-input" id="kpr">
                                             <label class="form-check-label text-super-sm text-bold" for="kpr">Elementary School Completer</label>
                                          </div>
                                       </div>
                                       <label for="school_name" class="col-form-label text-super-sm">General Average:</label>
                                       <div class="col-sm-3">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" id="school_name">
                                       </div>
                                       <label for="school_name" class="col-form-label text-super-sm">Citation (if Any):</label>
                                       <div class="col-sm-3">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" id="school_name">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group row align-items-center my-0">
                                       <label for="school_name" class="col-form-label text-super-sm">Name Elementary of School:</label>
                                       <div class="col-sm-3">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" id="school_name">
                                       </div>
                                       <label for="school_id" class="col-form-label text-super-sm">School ID:</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" id="school_id">
                                       </div>
                                       <label for="school_address" class="col-form-label text-super-sm">Address of School:</label>
                                       <div class="col-sm-3">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" id="school_address">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row border border-dark mb-1">
                                 <div class="row ml-3">
                                    <div class="col-12">
                                       <div class="form-group row align-items-center my-0">
                                          <label for="kinderProgressReport" class="col-form-label text-super-sm">Other Credential Presented</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row ml-5">
                                    <div class="col-12">
                                       <div class="form-group row align-items-center my-0">
                                          <div class="form-check custom-col">
                                             <input type="checkbox" class="form-check-input" id="pept_passer">
                                             <label class="form-check-label text-super-sm text-bold" for="pept_passer">PEPT Passer</label>
                                          </div>
                                          <label for="rating" class="col-form-label text-super-sm">Rating:</label>
                                          <div class="col-sm-2"> 
                                             <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="rating">
                                          </div>
                                          <div  class="form-check col-1" style="width:100px">
                                             <input type="checkbox" class="form-check-input" id="otherschck">
                                             <label   class="form-check-label text-super-sm text-bold" for="others">ALS A & E Passer</label>
                                          </div>
                                          <label for="rating" class="col-form-label text-super-sm">Rating:</label>
                                          <div class="col-sm-1"> 
                                             <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="rating">
                                          </div>
                                          <div class="form-check col-sm-2">
                                             <input type="checkbox" class="form-check-input" id="otherschck">
                                             <label class="form-check-label text-super-sm text-bold" for="others">Others (Please Specify):</label>
                                          </div>
                                          <div class="col-sm-2"> 
                                             <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="others">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="form-group row align-items-center my-0">
                                          <label for="remark" class="col-form-label text-super-sm">Date of Examination/Assessment (mm/dd/yyyy):</label>
                                          <div class="col-sm-2">
                                             <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="remark" placeholder="">
                                          </div>
                                          <label for="address_tc" class="col-form-label text-super-sm">Name and Address of Testing Center:</label>
                                          <div class="col-sm-4"> 
                                             <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="address_tc">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row mb-1">
                                 <div class="col-12 bg-color d-flex justify-content-center align-items-center border border-dark">
                                    <h5 class="text-center text-bold text-sm">
                                    Scholastic Record</h6>
                                 </div>
                              </div>
                              <div class="row justify-content-sm-between" >
                                 <div class="col-12 border border-dark p-2 mb-2">
                                    <div class="container-fluid">
                                       <div class="row">
                                          <div class="row px-2 ">
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_school_name" class="col-form-label text-super-sm">School:</label>
                                                   <div class="col-sm-4 mr-5">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm">School ID:</label>
                                                   <div class="col-sm-4">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_district" class="col-form-label text-super-sm">District:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_district">
                                                   </div>
                                                   <label for="sr_one_division" class="col-form-label text-super-sm">Division:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_division" placeholder="">
                                                   </div>
                                                   <label for="sr_one_region" class="col-form-label text-super-sm">Region:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_region" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_cg" class="col-form-label text-super-sm">Classified as Grade:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_cg">
                                                   </div>
                                                   <label for="sr_one_section" class="col-form-label text-super-sm">Section:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_section" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_year" class="col-form-label text-super-sm">School Year:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_year" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_tc_adviser" class="col-form-label text-super-sm">Name of Adviser Teacher:</label>
                                                   <div class="col-sm-4 ">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_tc_adviser">
                                                   </div>
                                                   <label for="sr_one_signature" class="col-form-label text-super-sm">Signature:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_signature" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <table class="table table-sm table-bordered" style="max-height: 100px; overflow-y: auto;">
                                                <thead>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" rowspan="2">LEARNING AREAS</th>
                                                      <th class="border border-dark text-super-sm" colspan="4">Quarterly</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2" style="width: 50px;">Final Rating</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2">Remarks</th>
                                                   </tr>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm">1</th>
                                                      <th class="border border-dark text-super-sm">2</th>
                                                      <th class="border border-dark text-super-sm">3</th>
                                                      <th class="border border-dark text-super-sm">4</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Mother Tongue:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Filipino:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">English:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Mathematics:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Araling Panlipunan:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">MAPEH:</td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Music:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Arts:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Physical Education:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Health:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Eduk. sa Pagkapapakatao:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">General Average:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                          <div class="col-md-12">
                                             <table class="table table-sm table-bordered">
                                                <thead>
                                                   <tr class="no-padding">
                                                      <th class="border border-dark text-super-sm" class="text-super-sm text-center" rowspan="2">Remidial Classes</th>
                                                      <th class="border border-dark text-super-sm" class="text-center" colspan="4">Conducted to</th>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <th class="border border-dark text-super-sm">Final Rating</th>
                                                      <th class="border border-dark text-super-sm">Remedial Class Mark</th>
                                                      <th class="border border-dark text-super-sm">Recomputed Final</th>
                                                      <th class="border border-dark text-super-sm" width="50px">Remarks</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark"> <input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="text" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark"> <input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="text" class="border-0 w-100"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 border border-dark p-2 mb-2">
                                    <div class="container-fluid">
                                       <div class="row ">
                                          <div class="row px-2 ">
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_school_name" class="col-form-label text-super-sm">School:</label>
                                                   <div class="col-sm-4 mr-5">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm">School ID:</label>
                                                   <div class="col-sm-4">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_district" class="col-form-label text-super-sm">District:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_district">
                                                   </div>
                                                   <label for="sr_one_division" class="col-form-label text-super-sm">Division:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_division" placeholder="">
                                                   </div>
                                                   <label for="sr_one_region" class="col-form-label text-super-sm">Region:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_region" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_cg" class="col-form-label text-super-sm">Classified as Grade:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_cg">
                                                   </div>
                                                   <label for="sr_one_section" class="col-form-label text-super-sm">Section:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_section" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_year" class="col-form-label text-super-sm">School Year:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_year" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_tc_adviser" class="col-form-label text-super-sm">Name of Adviser Teacher:</label>
                                                   <div class="col-sm-4 ">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_tc_adviser">
                                                   </div>
                                                   <label for="sr_one_signature" class="col-form-label text-super-sm">Signature:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_signature" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <table class="table table-sm table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" rowspan="2">LEARNING AREAS</th>
                                                      <th class="border border-dark text-super-sm" colspan="4">Quarterly</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2" style="width: 50px;">Final Rating</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2">Remarks</th>
                                                   </tr>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm">1</th>
                                                      <th class="border border-dark text-super-sm">2</th>
                                                      <th class="border border-dark text-super-sm">3</th>
                                                      <th class="border border-dark text-super-sm">4</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Mother Tongue:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Filipino:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">English:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Mathematics:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Araling Panlipunan:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">MAPEH:</td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Music:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Arts:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Physical Education:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Health:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">Eduk. sa Pagkapapakatao:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark text-super-sm">General Average:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                          <div class="col-md-12">
                                             <table class="table table-sm table-bordered">
                                                <thead>
                                                   <tr class="no-padding">
                                                      <th class="border border-dark text-super-sm"" class="text-super-sm text-center" rowspan="2">Remidial Classes</th>
                                                      <th class="border border-dark text-super-sm"" class="text-center" colspan="4">Conducted to</th>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <th class="border border-dark text-super-sm">Final Rating</th>
                                                      <th class="border border-dark text-super-sm">Remedial Class Mark</th>
                                                      <th class="border border-dark text-super-sm">Recomputed Final</th>
                                                      <th class="border border-dark text-super-sm" width="50px">Remarks</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark" > <input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="text" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark" ><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="text" class="border-0 w-100"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card mt-2 mb-3">
                                 <div class="card-header bg-secondary py-0">
                                    <h6 class="text-center m-0">CERTIFICATION</h6>
                                 </div>
                                 <div class="card-body border border-dark">
                                    <div class="small-text">
                                       <p class="card-text text-center" style="display: flex; align-items: center; font-size: 10px;">
                                          I CERTIFY that this is a true record of 
                                          <span style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span> 
                                          with LRN: 
                                          <span style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span> 
                                          and that he/she is eligible for admission to Grade 
                                          <span class="col-1" style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span> 
                                       </p>
                                       <p class="card-text text-center" style="display: flex; align-items: center; font-size: 10px;">
                                          School Name: 
                                          <span class="col-3" style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span>  
                                          School ID: 
                                          <span class="col-2" style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span>  
                                          Division: 
                                          <span class="col-2" style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span>  
                                          Last School Year Attended: 
                                          <span class="col-1" style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span> 
                                       </p>
                                       <div class="card-text text-center">
                                          <div style="display: flex; justify-content: space-around; align-items: center;">
                                             <div style="display: flex; flex-direction: column; align-items: center;">
                                                <span style="display: inline-block;">
                                                <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                </span>
                                                <p class="card-text m-0" style="font-size: 10px;">Date:</p>
                                             </div>
                                             <div style="display: flex; flex-direction: column; align-items: center;">
                                                <span  style="display: inline-block;">
                                                <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="width: 250px; height: 20px; font-size:10px">
                                                </span>
                                                <p class="card-text m-0" style="font-size: 10px;">Name of Principal/School Head over Printed Name</p>
                                             </div>
                                             <p class="card-text m-0 pt-2" style="font-size: 10px;">(Affix School Seal here)</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12" style="text-align: center;">
                              <div class="col-md-12">
                                 <div class="row">
                                    <button class="btn btn-primary" onclick="printContent()"><i class="fa fa-print"></i> Print</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                           <div class="card-body" id="card-container-two">
                              <div class="row justify-content-sm-between ">
                                 <div class="col-12 border border-dark p-2 mb-2">
                                    <div class="container-fluid">
                                       <div class="row">
                                          <div class="row px-2 ">
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_school_name" class="col-form-label text-super-sm">School:</label>
                                                   <div class="col-sm-4 mr-5">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm">School ID:</label>
                                                   <div class="col-sm-4">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_district" class="col-form-label text-super-sm">District:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_district">
                                                   </div>
                                                   <label for="sr_one_division" class="col-form-label text-super-sm">Division:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_division" placeholder="">
                                                   </div>
                                                   <label for="sr_one_region" class="col-form-label text-super-sm">Region:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_region" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_cg" class="col-form-label text-super-sm">Classified as Grade:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_cg">
                                                   </div>
                                                   <label for="sr_one_section" class="col-form-label text-super-sm">Section:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_section" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_year" class="col-form-label text-super-sm">School Year:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_year" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_tc_adviser" class="col-form-label text-super-sm">Name of Adviser Teacher:</label>
                                                   <div class="col-sm-4 ">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_tc_adviser">
                                                   </div>
                                                   <label for="sr_one_signature" class="col-form-label text-super-sm">Signature:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_signature" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <table class="table table-sm table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" rowspan="2">LEARNING AREAS</th>
                                                      <th class="border border-dark text-super-sm" colspan="4">Quarterly</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2" style="width: 50px;">Final Rating</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2">Remarks</th>
                                                   </tr>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm">1</th>
                                                      <th class="border border-dark text-super-sm">2</th>
                                                      <th class="border border-dark text-super-sm">3</th>
                                                      <th class="border border-dark text-super-sm">4</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Mother Tongue:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Filipino:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">English:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Mathematics:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Araling Panlipunan:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">MAPEH:</td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Music:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Arts:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Physical Education:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Health:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Eduk. sa Pagkapapakatao:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">General Average:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                          <div class="col-md-12">
                                             <table class="table table-sm table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" class="text-super-sm text-center" rowspan="2">Remidial Classes</th>
                                                      <th class="border border-dark text-super-sm" class="text-center" colspan="4">Conducted to</th>
                                                   </tr>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm">Final Rating</th>
                                                      <th class="border border-dark text-super-sm">Remedial Class Mark</th>
                                                      <th class="border border-dark text-super-sm">Recomputed Final</th>
                                                      <th class="border border-dark text-super-sm" width="50px">Remarks</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td class="border border-dark" > <input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="text" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark" > <input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="text" class="border-0 w-100"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 border border-dark p-2 mb-2">
                                    <div class="container-fluid">
                                       <div class="row">
                                          <div class="row px-2 ">
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_school_name" class="col-form-label text-super-sm">School:</label>
                                                   <div class="col-sm-4 mr-5">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm">School ID:</label>
                                                   <div class="col-sm-4">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_district" class="col-form-label text-super-sm">District:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_district">
                                                   </div>
                                                   <label for="sr_one_division" class="col-form-label text-super-sm">Division:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_division" placeholder="">
                                                   </div>
                                                   <label for="sr_one_region" class="col-form-label text-super-sm">Region:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_region" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_cg" class="col-form-label text-super-sm">Classified as Grade:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_cg">
                                                   </div>
                                                   <label for="sr_one_section" class="col-form-label text-super-sm">Section:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_section" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_year" class="col-form-label text-super-sm">School Year:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_year" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_tc_adviser" class="col-form-label text-super-sm">Name of Adviser Teacher:</label>
                                                   <div class="col-sm-4 ">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_tc_adviser">
                                                   </div>
                                                   <label for="sr_one_signature" class="col-form-label text-super-sm">Signature:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_signature" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <table class="table table-sm table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" rowspan="2">LEARNING AREAS</th>
                                                      <th class="border border-dark text-super-sm" colspan="4">Quarterly</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2" style="width: 50px;">Final Rating</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2" >Remarks</th>
                                                   </tr>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm">1</th>
                                                      <th class="border border-dark text-super-sm">2</th>
                                                      <th class="border border-dark text-super-sm">3</th>
                                                      <th class="border border-dark text-super-sm">4</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Mother Tongue:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Filipino:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">English:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Mathematics:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Araling Panlipunan:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">MAPEH:</td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Music:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Arts:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Physical Education:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Health:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Eduk. sa Pagkapapakatao:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">General Average:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                          <div class="col-md-12 d-flex align-items-center" >
                                             <table class="table table-sm table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" class="text-super-sm text-center" rowspan="2">Remidial Classes</th>
                                                      <th class="border border-dark text-super-sm" class="text-center" colspan="4">Conducted to</th>
                                                   </tr>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" >Final Rating</th>
                                                      <th class="border border-dark text-super-sm" >Remedial Class Mark</th>
                                                      <th class="border border-dark text-super-sm">Recomputed Final</th>
                                                      <th class="border border-dark text-super-sm" width="50px">Remarks</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td class="border border-dark" height="10px"> <input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="text" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark"> <input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="text" class="border-0 w-100"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 border border-dark p-2 mb-2">
                                    <div class="container-fluid">
                                       <div class="row">
                                          <div class="row px-2 ">
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_school_name" class="col-form-label text-super-sm">School:</label>
                                                   <div class="col-sm-4 mr-5">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm">School ID:</label>
                                                   <div class="col-sm-4">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_district" class="col-form-label text-super-sm">District:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_district">
                                                   </div>
                                                   <label for="sr_one_division" class="col-form-label text-super-sm">Division:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_division" placeholder="">
                                                   </div>
                                                   <label for="sr_one_region" class="col-form-label text-super-sm">Region:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_region" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_cg" class="col-form-label text-super-sm">Classified as Grade:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_cg">
                                                   </div>
                                                   <label for="sr_one_section" class="col-form-label text-super-sm">Section:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_section" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_year" class="col-form-label text-super-sm">School Year:</label>
                                                   <div class="col-sm-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_year" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0">
                                                   <label for="sr_one_tc_adviser" class="col-form-label text-super-sm">Name of Adviser Teacher:</label>
                                                   <div class="col-sm-4 ">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_tc_adviser">
                                                   </div>
                                                   <label for="sr_one_signature" class="col-form-label text-super-sm">Signature:</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_signature" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <table class="table table-sm table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" rowspan="2">LEARNING AREAS</th>
                                                      <th class="border border-dark text-super-sm" colspan="4">Quarterly</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2" style="width: 50px;">Final Rating</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2" >Remarks</th>
                                                   </tr>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm">1</th>
                                                      <th class="border border-dark text-super-sm">2</th>
                                                      <th class="border border-dark text-super-sm">3</th>
                                                      <th class="border border-dark text-super-sm">4</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Mother Tongue:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Filipino:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">English:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Mathematics:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Araling Panlipunan:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">MAPEH:</td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                      <td class="border border-dark"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Music:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Arts:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Physical Education:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Health:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">Eduk. sa Pagkapapakatao:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark text-super-sm">General Average:</td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="number" class="border-0 w-100"></td>
                                                      <td class="border border-dark"> <input type="number" class="border-0 w-100"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                          <div class="col-md-12 d-flex align-items-center" >
                                             <table class="table table-sm table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" class="text-super-sm text-center" rowspan="2">Remidial Classes</th>
                                                      <th class="border border-dark text-super-sm" class="text-center" colspan="4">Conducted to</th>
                                                   </tr>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" >Final Rating</th>
                                                      <th class="border border-dark text-super-sm" >Remedial Class Mark</th>
                                                      <th class="border border-dark text-super-sm">Recomputed Final</th>
                                                      <th class="border border-dark text-super-sm" width="50px">Remarks</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td class="border border-dark" height="10px"> <input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="text" class="border-0 w-100"></td>
                                                   </tr>
                                                   <tr>
                                                      <td class="border border-dark"> <input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input  type="text" class="border-0 w-100"></td>
                                                      <td class="border border-dark"><input type="text" class="border-0 w-100"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card mt-2 mb-0">
                                 <div class="card-header bg-secondary py-0">
                                    <h6 class="text-center m-0">CERTIFICATION</h6>
                                 </div>
                                 <div class="card-body border border-dark">
                                    <div class="small-text">
                                       <p class="card-text text-center " style="display: flex; align-items: center; font-size: 10px;">
                                          I CERTIFY that this is a true record of 
                                          <span style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span> 
                                          with LRN: 
                                          <span style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span> 
                                          and that he/she is eligible for admission to Grade 
                                          <span class="col-1" style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span> 
                                       </p>
                                       <p class="card-text text-center" style="display: flex; align-items: center; font-size: 10px;">
                                          School Name: 
                                          <span class="col-3" style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span>  
                                          School ID: 
                                          <span class="col-2" style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span>  
                                          Division: 
                                          <span class="col-2" style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span>  
                                          Last School Year Attended: 
                                          <span class="col-1" style="display: inline-block;">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="height: 20px; font-size:10px">
                                          </span> 
                                       </p>
                                       <div class="card-text text-center">
                                          <div style="display: flex; justify-content: space-around; align-items: center;">
                                             <div style="display: flex; flex-direction: column; align-items: center;">
                                                <span style="display: inline-block;">
                                                <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                </span>
                                                <p class="card-text m-0" style="font-size: 10px;">Date:</p>
                                             </div>
                                             <div style="display: flex; flex-direction: column; align-items: center;">
                                                <span  style="display: inline-block;">
                                                <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" style="width: 250px; height: 20px; font-size:10px">
                                                </span>
                                                <p class="card-text m-0" style="font-size: 10px;">Name of Principal/School Head over Printed Name</p>
                                             </div>
                                             <p class="card-text m-0 pt-2" style="font-size: 10px;">(Affix School Seal here)</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12" style="text-align: center;">
                              <div class="col-md-12">
                                 <div class="row">
                                    <button class="btn btn-primary" onclick="printContentTwo()"><i class="fa fa-print"></i> Print</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                     <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Front</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Back</a>
                        </li>
                        
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   function printContent() {
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
<script>
   function printContentTwo() {
   	var initialStyles = {};
   
   	var elementsToHide = document.querySelectorAll('body > :not(#card-container-two)');
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
   
   	var originalContent = document.getElementById('card-container-two').cloneNode(true);
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