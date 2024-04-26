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
                              <div class="row mb-2">
                                 <div class="col-12">
                                    <img class="deped" src="<?php echo base_url()?>assets/uploads/deped.png">
                                    <img class="ne" src="<?php echo base_url()?>assets/uploads/ne.png">
                                    <p class="text-center mb-1">REPUBLIC OF THE PHILIPPINES</p>
                                    <p class="text-center mb-2">DEPARTMENT OF EDUCATION</p>
                                    <h5 class="text-center my-0 text-bold fs-5 fs-md-4">SENIOR HIGH SCHOOL PERMANENT RECORD</h5>
                                 </div>
                              </div>
                              <div class="row my-0  bg-color justify-content-center align-items-center ">
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
                                       <div class="col-sm-1">
                                          <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="birthdate">
                                       </div>
                                       <label for="sex" class="col-form-label text-super-sm">Sex:</label>
                                       <div class="col-sm-1">
                                          <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sex">
                                       </div>
                                       <label for="sex" class="col-form-label text-super-sm">Date of SHS Admission (MM/DD/YYYY):</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sex">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row mb-1 my-0">
                                 <div class="col-12 bg-color d-flex justify-content-center align-items-center border border-dark">
                                    <h5 class="text-center text-bold text-sm">ELIGIBILITY FOR SHS  ENROLMENT</h5>
                                 </div>
                              </div>
                              <div class="row border border-dark px-1 pb-1 my-0">
                                 <div class="col-12">
                                    <div class="form-group row align-items-center my-0">
                                       <div class="col-sm-3">
                                          <div class="form-check">
                                             <input type="checkbox" checked class="form-check-input" id="kpr">
                                             <label class="form-check-label text-super-sm text-bold" for="kpr">High School Completer*</label>
                                          </div>
                                       </div>
                                       <label for="school_name" class="col-form-label text-super-sm">Gen. Ave.:</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" id="school_name">
                                       </div>
                                       <div class="col-sm-3">
                                          <div class="form-check">
                                             <input type="checkbox" checked class="form-check-input" id="kpr">
                                             <label class="form-check-label text-super-sm text-bold" for="kpr">Junior High School Completer*</label>
                                          </div>
                                       </div>
                                       <label for="school_name" class="col-form-label text-super-sm">Gen. Ave.:</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" id="school_name">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-group row align-items-center my-0">
                                       <label for="school_name" class="col-form-label text-super-sm">Date of Examination/Assessment (mm/dd/yyyy):</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" id="school_name">
                                       </div>
                                       <label for="school_id" class="col-form-label text-super-sm">Name of School:</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" id="school_id">
                                       </div>
                                       <label for="school_address" class="col-form-label text-super-sm">Address of School:</label>
                                       <div class="col-sm-3">
                                          <input type="text" class="form-control form-control-border form-control-sm form-control-border-dark" id="school_address">
                                       </div>
                                    </div>
                                 </div>
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
                                    <div class="form-group row align-items-center my-0">
                                       <div class="col-sm-6">
                                          <p class="text-super-sm" style="font-size:9px; font-style:italic;">*High School Completers are students who graduated from secondary school under the old curriculum </p>
                                       </div>
                                       <div class="col-sm-6">
                                          <p class="text-super-sm" style="font-size:9px; font-style:italic;">*** ALS A&E -Alternative Learning System Accrediation and Equivalency Test for JHS </p>
                                       </div>
                                    </div>
                                    <div class="form-group row align-items-center my-0">
                                       <div class="col-sm-6">
                                          <p class="text-super-sm" style="font-size:9px; font-style:italic;">**PEPT -Philippine Educational Placement Test for JHS </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row mb-1 mt-2">
                                 <div class="col-12 bg-color d-flex justify-content-center align-items-center ">
                                    <h5 class="text-center text-bold text-sm">
                                    Scholastic Record</h6>
                                 </div>
                              </div>
                              <div class="row justify-content-sm-between" >
                                 <div class="col-12  p-2 mb-2">
                                    <div class="container-fluid">
                                       <div class="row px-2 ">
                                          <div class="col-12">
                                             <div class="form-group row align-items-center my-0">
                                                <label for="sr_one_school_name" class="col-form-label text-super-sm">School:</label>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">School ID:</label>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">GRADE LEVEL:</label>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">SY:</label>
                                                <div class="col-sm-1">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">SEM:</label>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row px-2 ">
                                          <div class="col-12">
                                             <div class="form-group row align-items-center my-0">
                                                <label for="sr_one_school_name" class="col-form-label text-super-sm">TRACK/STRAND:</label>
                                                <div class="col-sm-6">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">SECTION:</label>
                                                <div class="col-sm-4">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <table class="table table-sm table-bordered" style="max-height: 100px; overflow-y: auto;">
                                                <thead>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" rowspan="2" width="120px">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</th>
                                                      <th class="border border-dark text-super-sm text-center" rowspan="2" width="50%">SUBJECTS</th>
                                                      <th class="border border-dark text-super-sm" colspan="2">Quarter</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2" >SEM FINAL GRADE</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2">ACTION TAKEN</th>
                                                   </tr>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" width="70px">1</th>
                                                      <th class="border border-dark text-super-sm" width="70px">2</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td class="border border-dark">
                                                         <select id="subject_category_1" class="border-0 w-100" onchange="populateSubjects('subject_input_container_1', 'subject_category_1')">
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_1" class="border border-dark">
                                                         <select id="subject_title_1" class="border-0 w-100">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_1" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell" class="border border-dark"></td>
                                                      <td id="passFailCell" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2', 'subject_category_2')">
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2" class="border border-dark">
                                                         <select id="subject_title_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2', 'subject_category_2')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_3" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_4" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell2" class="border border-dark"></td>
                                                      <td id="passFailCell2" class="border border-dark"></td>
                                                   </tr>
                                                   <td class="border border-dark">
                                                      <select id="subject_category_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_3', 'subject_category_3')">
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_3" class="border border-dark">
                                                      <select id="subject_title_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_3', 'subject_category_3')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_6" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell3" class="border border-dark"></td>
                                                   <td id="passFailCell3" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_4', 'subject_category_4')">
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_4" class="border border-dark">
                                                         <select id="subject_title_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_4', 'subject_category_4')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_7" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_8" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell4" class="border border-dark"></td>
                                                      <td id="passFailCell4" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_5" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5', 'subject_category_5')">
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_5" class="border border-dark">
                                                         <select id="subject_title_5" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5', 'subject_category_5')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_9" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_10" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell5" class="border border-dark"></td>
                                                      <td id="passFailCell5" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_6" class="border-0 w-100" onchange="populateSubjects('subject_input_container_6', 'subject_category_6')">
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_6" class="border border-dark">
                                                         <select id="subject_title_6" class="border-0 w-100" onchange="populateSubjects('subject_input_container_6', 'subject_category_6')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_11" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_12" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell6" class="border border-dark"></td>
                                                      <td id="passFailCell6" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_7" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7', 'subject_category_7')">
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_7" class="border border-dark">
                                                         <select id="subject_title_7" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7', 'subject_category_7')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_13" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_14" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell7" class="border border-dark"></td>
                                                      <td id="passFailCell7" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_8" class="border-0 w-100" onchange="populateSubjects('subject_input_container_8', 'subject_category_8')">
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_8" class="border border-dark">
                                                         <select id="subject_title_8" class="border-0 w-100" onchange="populateSubjects('subject_input_container_8', 'subject_category_8')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_15" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_16" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell8" class="border border-dark"></td>
                                                      <td id="passFailCell8" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_9" class="border-0 w-100" onchange="populateSubjects('subject_input_container_9', 'subject_category_9')">
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_9" class="border border-dark">
                                                         <select id="subject_title_9" class="border-0 w-100" onchange="populateSubjects('subject_input_container_9', 'subject_category_9')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_17" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_18" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell9" class="border border-dark"></td>
                                                      <td id="passFailCell9" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_10" class="border-0 w-100" onchange="populateSubjects('subject_input_container_10', 'subject_category_10')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_10" class="border border-dark">
                                                         <select id="subject_title_10" class="border-0 w-100" onchange="populateSubjects('subject_input_container_10', 'subject_category_10')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_19" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_20" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell10" class="border border-dark"></td>
                                                      <td id="passFailCell10" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_11" class="border-0 w-100" onchange="populateSubjects('subject_input_container_11', 'subject_category_11')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_11" class="border border-dark">
                                                         <select id="subject_title_11" class="border-0 w-100" onchange="populateSubjects('subject_input_container_11', 'subject_category_11')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_21" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_22" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell11" class="border border-dark"></td>
                                                      <td id="passFailCell11" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_12" class="border-0 w-100" onchange="populateSubjects('subject_input_container_12', 'subject_category_12')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_12" class="border border-dark">
                                                         <select id="subject_title_12" class="border-0 w-100" onchange="populateSubjects('subject_input_container_12', 'subject_category_12')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_23" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_24" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell12" class="border border-dark"></td>
                                                      <td id="passFailCell12" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td colspan="4" class="border border-dark text-bold" style="text-align: right; background-color:lightgray;">General Average:</td>
                                                      <td id="totalAverageCell" class="border border-dark"></td>
                                                      <td id="totalPassFailCell" class="border border-dark"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="row px-2 ">
                                                <div class="col-12">
                                                   <div class="form-group row align-items-center my-0 py-0 ">
                                                      <label for="sr_one_school_name" class="col-form-label text-super-sm">Remarks:</label>
                                                      <div class="col-sm-11">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" value="PROMOTED TO GRADE 11 SECOND SEMESTER" id="sr_one_school_name">
                                                      </div>
                                                   </div>
                                                   <div class="form-group row align-items-center my-0 ">
                                                      <label for="sr_one_school_id" class="col-form-label text-super-sm">Prepared by:</label>
                                                      <div class="col-auto">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                      </div>
                                                      <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">Certified True and Correct:</label>
                                                      <div class="col-auto">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                      </div>
                                                      <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">Date Checked (MM/DD/YYYY):</label>
                                                      <div class="col-auto">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row px-2 ">
                                                <div class="col-12 d-flex justify-content-between">
                                                   <div style="display: flex; flex-direction: column; align-items: center;">
                                                      <span style="display: inline-block;">
                                                      <input value="QUENNE ANNE B. DAANOY, LPT" type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                      </span>
                                                      <p class="card-text m-0 text-super-sm" >Signature of Adviser over Printed Name:</p>
                                                   </div>
                                                   <div style="display: flex; flex-direction: column; align-items: center;">
                                                      <span style="display: inline-block;">
                                                      <input value="JO-ANN S. BACHILLER, LPT/RECORDS OFFICER/ LIS Coordinator" type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                      </span>
                                                      <p class="card-text m-0 text-super-sm" >Signature of Authorized Person over Printed Name, Designation</p>
                                                   </div>
                                                   <div style="display: flex; flex-direction: column; align-items: center;">
                                                      <span style="display: inline-block;">
                                                      <input type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                      </span>
                                                      <p class="card-text m-0 text-super-sm" ></p>
                                                   </div>
                                                </div>
                                                <div class="form-group col-12 d-flex align-items-center my-0 ">
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm">REMEDIAL CLASSES 		Conducted from (MM/DD/YYYY):</label>
                                                   <div class="col-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">to (MM/DD/YYYY):</label>
                                                   <div class="col-auto">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">SCHOOL:</label>
                                                   <div class="col-1">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">SCHOOL ID:</label>
                                                   <div class="col-1">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- Remedial classses -->
                                             <div class="row">
                                                <div class="col-md-12 my-0">
                                                   <table class="table table-sm table-bordere my-0" style="max-height: 100px; overflow-y: auto;">
                                                      <thead>
                                                         <tr>
                                                            <th class="border border-dark text-super-sm"  width="120px">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</th>
                                                            <th class="border border-dark text-super-sm text-center"  width="50%">SUBJECTS</th>
                                                            <th class="border border-dark text-super-sm"  >SEM FINAL GRADE</th>
                                                            <th class="border border-dark text-super-sm">REMEDIAL CLASS MARK</th>
                                                            <th class="border border-dark text-super-sm">RECOMPUTED FINAL GRADE</th>
                                                            <th class="border border-dark text-super-sm" >ACTION TAKEN</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td class="border border-dark">
                                                               <select id="subject_category_3_1" class="border-0 w-100" onchange="populateSubjects('subject_input_container_3_1', 'subject_category_3_1')">
                                                                  <option></option>
                                                                  <option value="CORE">CORE</option>
                                                                  <option value="APPLIED">APPLIED</option>
                                                                  <option value="SPECIALIZED">SPECIALIZED</option>
                                                                  <option value="OTHER">OTHER SUBJECTS</option>
                                                               </select>
                                                            </td>
                                                            <td id="subject_input_container_3_1" class="border border-dark">
                                                               <select id="subject_title_3_1" class="border-0 w-100">
                                                                  <?php foreach ($shs_subjs as $shs_subj): ?>
                                                                  <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_1_3" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_2_3" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td id="averageCell_3" class="border border-dark"></td>
                                                            <td id="passFailCell_3" class="border border-dark"></td>
                                                         </tr>
                                                         <tr class="no-padding">
                                                            <td class="border border-dark">
                                                               <select id="subject_category_3_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_3_2', 'subject_category_3_2')">
                                                                  <option></option>
                                                                  <option value="CORE">CORE</option>
                                                                  <option value="APPLIED">APPLIED</option>
                                                                  <option value="SPECIALIZED">SPECIALIZED</option>
                                                                  <option value="OTHER">OTHER SUBJECTS</option>
                                                               </select>
                                                            </td>
                                                            <td id="subject_input_container_3_2" class="border border-dark">
                                                               <select id="subject_title_3_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_3_2', 'subject_category_3_2')">
                                                                  <?php foreach ($shs_subjs as $shs_subj): ?>
                                                                  <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_3_3" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_4_3" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td id="averageCell2_3" class="border border-dark"></td>
                                                            <td id="passFailCell2_3" class="border border-dark"></td>
                                                         </tr>
                                                         <td class="border border-dark">
                                                            <select id="subject_category_3_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_3_3', 'subject_category_3_3')">
                                                               <option></option>
                                                               <option value="CORE">CORE</option>
                                                               <option value="APPLIED">APPLIED</option>
                                                               <option value="SPECIALIZED">SPECIALIZED</option>
                                                               <option value="OTHER">OTHER SUBJECTS</option>
                                                            </select>
                                                         </td>
                                                         <td id="subject_input_container_3_3" class="border border-dark">
                                                            <select id="subject_title_3_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_3_3', 'subject_category_3_3')">
                                                               <?php foreach ($shs_subjs as $shs_subj): ?>
                                                               <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_5_3" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_6_3" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td id="averageCell3_3" class="border border-dark"></td>
                                                         <td id="passFailCell3_3" class="border border-dark"></td>
                                                         </tr>
                                                         <tr class="no-padding">
                                                            <td class="border border-dark">
                                                               <select id="subject_category_3_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_3_4', 'subject_category_3_4')">
                                                                  <option></option>
                                                                  <option value="CORE">CORE</option>
                                                                  <option value="APPLIED">APPLIED</option>
                                                                  <option value="SPECIALIZED">SPECIALIZED</option>
                                                                  <option value="OTHER">OTHER SUBJECTS</option>
                                                               </select>
                                                            </td>
                                                            <td id="subject_input_container_3_4" class="border border-dark">
                                                               <select id="subject_title_3_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_3_4', 'subject_category_3_4')">
                                                                  <?php foreach ($shs_subjs as $shs_subj): ?>
                                                                  <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_7_3" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_8_3" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td id="averageCell4_3" class="border border-dark"></td>
                                                            <td id="passFailCell4_3" class="border border-dark"></td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <div class="col-md-12">
                                                      <div class="form-group row align-items-center my-0">
                                                         <label for="sr_one_school_name" class="col-form-label text-super-sm">Name of Teacher/Adviser:</label>
                                                         <div class="col-sm-5 mr-4">
                                                            <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                         </div>
                                                         <label for="sr_one_school_id" class="col-form-label text-super-sm">Signature:</label>
                                                         <div class="col-sm-4">
                                                            <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12  p-2 mb-2">
                                    <div class="container-fluid">
                                       <div class="row px-2 ">
                                          <div class="col-12">
                                             <div class="form-group row align-items-center my-0">
                                                <label for="sr_one_school_name" class="col-form-label text-super-sm">School:</label>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">School ID:</label>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">GRADE LEVEL:</label>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">SY:</label>
                                                <div class="col-sm-1">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">SEM:</label>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row px-2 ">
                                          <div class="col-12">
                                             <div class="form-group row align-items-center my-0">
                                                <label for="sr_one_school_name" class="col-form-label text-super-sm">TRACK/STRAND:</label>
                                                <div class="col-sm-6">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">SECTION:</label>
                                                <div class="col-sm-4">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <table class="table table-sm table-bordered" style="max-height: 100px; overflow-y: auto;">
                                                <thead>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" rowspan="2" width="120px">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</th>
                                                      <th class="border border-dark text-super-sm text-center" rowspan="2" width="50%">SUBJECTS</th>
                                                      <th class="border border-dark text-super-sm" colspan="2">Quarter</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2" >SEM FINAL GRADE</th>
                                                      <th class="border border-dark text-super-sm" rowspan="2">ACTION TAKEN</th>
                                                   </tr>
                                                   <tr>
                                                      <th class="border border-dark text-super-sm" width="70px">1</th>
                                                      <th class="border border-dark text-super-sm" width="70px">2</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2_1" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_1', 'subject_category_2_1')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2_1" class="border border-dark">
                                                         <select id="subject_title_2_1" class="border-0 w-100">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_1_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_2_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell_2" class="border border-dark"></td>
                                                      <td id="passFailCell_2" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_2', 'subject_category_2_2')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2_2" class="border border-dark">
                                                         <select id="subject_title_2_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_2', 'subject_category_2_2')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_3_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_4_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell2_2" class="border border-dark"></td>
                                                      <td id="passFailCell2_2" class="border border-dark"></td>
                                                   </tr>
                                                   <td class="border border-dark">
                                                      <select id="subject_category_2_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_3', 'subject_category_2_3')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_2_3" class="border border-dark">
                                                      <select id="subject_title_2_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_3', 'subject_category_2_3')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_5_2" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_6_2" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell3_2" class="border border-dark"></td>
                                                   <td id="passFailCell3_2" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_4', 'subject_category_2_4')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2_4" class="border border-dark">
                                                         <select id="subject_title_2_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_4', 'subject_category_2_4')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_7_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_8_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell4_2" class="border border-dark"></td>
                                                      <td id="passFailCell4_2" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2_5" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_5', 'subject_category_2_5')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2_5" class="border border-dark">
                                                         <select id="subject_title_2_5" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_5', 'subject_category_2_5')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_9_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_10_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell5_2" class="border border-dark"></td>
                                                      <td id="passFailCell5_2" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2_6" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_6', 'subject_category_2_6')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2_6" class="border border-dark">
                                                         <select id="subject_title_2_6" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_6', 'subject_category_2_6')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_11_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_12_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell6_2" class="border border-dark"></td>
                                                      <td id="passFailCell6_2" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2_7" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_7', 'subject_category_2_7')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2_7" class="border border-dark">
                                                         <select id="subject_title_2_7" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_7', 'subject_category_2_7')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_13_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_14_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell7_2" class="border border-dark"></td>
                                                      <td id="passFailCell7_2" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2_8" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_8', 'subject_category_2_8')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2_8" class="border border-dark">
                                                         <select id="subject_title_2_8" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_8', 'subject_category_2_8')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_15_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_16_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell8_2" class="border border-dark"></td>
                                                      <td id="passFailCell8_2" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2_9" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_9', 'subject_category_2_9')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2_9" class="border border-dark">
                                                         <select id="subject_title_2_9" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_9', 'subject_category_2_9')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_17_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_18_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell9_2" class="border border-dark"></td>
                                                      <td id="passFailCell9_2" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2_10" class="border-0 w-2_100" onchange="populateSubjects('subject_input_container_2_10', 'subject_category_2_10')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2_10" class="border border-dark">
                                                         <select id="subject_title_2_10" class="border-0 w-2_100" onchange="populateSubjects('subject_input_container_2_10', 'subject_category_2_10')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_19_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_20_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell10_2" class="border border-dark"></td>
                                                      <td id="passFailCell10_2" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2_11" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_11', 'subject_category_2_11')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2_11" class="border border-dark">
                                                         <select id="subject_title_2_11" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_11', 'subject_category_2_11')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_21_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_22_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell11_2" class="border border-dark"></td>
                                                      <td id="passFailCell11_2" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td class="border border-dark">
                                                         <select id="subject_category_2_12" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_12', 'subject_category_2_12')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_2_12" class="border border-dark">
                                                         <select id="subject_title_2_12" class="border-0 w-100" onchange="populateSubjects('subject_input_container_2_12', 'subject_category_2_12')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_23_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_24_2" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell12_2" class="border border-dark"></td>
                                                      <td id="passFailCell12_2" class="border border-dark"></td>
                                                   </tr>
                                                   <tr class="no-padding">
                                                      <td colspan="4" class="border border-dark text-bold" style="text-align: right; background-color:lightgray;">General Average:</td>
                                                      <td id="totalAverageCell_2" class="border border-dark"></td>
                                                      <td id="totalPassFailCell_2" class="border border-dark"></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="row px-2 ">
                                                <div class="col-12">
                                                   <div class="form-group row align-items-center my-0 py-0 ">
                                                      <label for="sr_one_school_name" class="col-form-label text-super-sm">Remarks:</label>
                                                      <div class="col-sm-11">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" value="PROMOTED TO GRADE 11 SECOND SEMESTER" id="sr_one_school_name">
                                                      </div>
                                                   </div>
                                                   <div class="form-group row align-items-center my-0 ">
                                                      <label for="sr_one_school_id" class="col-form-label text-super-sm">Prepared by:</label>
                                                      <div class="col-auto">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                      </div>
                                                      <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">Certified True and Correct:</label>
                                                      <div class="col-auto">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                      </div>
                                                      <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">Date Checked (MM/DD/YYYY):</label>
                                                      <div class="col-auto">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row px-2 ">
                                                <div class="col-12 d-flex justify-content-between">
                                                   <div style="display: flex; flex-direction: column; align-items: center;">
                                                      <span style="display: inline-block;">
                                                      <input value="QUENNE ANNE B. DAANOY, LPT" type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                      </span>
                                                      <p class="card-text m-0 text-super-sm" >Signature of Adviser over Printed Name:</p>
                                                   </div>
                                                   <div style="display: flex; flex-direction: column; align-items: center;">
                                                      <span style="display: inline-block;">
                                                      <input value="JO-ANN S. BACHILLER, LPT/RECORDS OFFICER/ LIS Coordinator" type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                      </span>
                                                      <p class="card-text m-0 text-super-sm" >Signature of Authorized Person over Printed Name, Designation</p>
                                                   </div>
                                                   <div style="display: flex; flex-direction: column; align-items: center;">
                                                      <span style="display: inline-block;">
                                                      <input type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                      </span>
                                                      <p class="card-text m-0 text-super-sm" ></p>
                                                   </div>
                                                </div>
                                                <div class="form-group col-12 d-flex align-items-center my-0 ">
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm">REMEDIAL CLASSES 		Conducted from (MM/DD/YYYY):</label>
                                                   <div class="col-2">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">to (MM/DD/YYYY):</label>
                                                   <div class="col-auto">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">SCHOOL:</label>
                                                   <div class="col-1">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">SCHOOL ID:</label>
                                                   <div class="col-1">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- remedial classes -->
                                             <div class="row my-0">
                                                <div class="col-md-12 my-0">
                                                   <table class="table table-sm table-bordered my-0" style="max-height: 100px; overflow-y: auto;">
                                                      <thead>
                                                         <tr>
                                                            <th class="border border-dark text-super-sm"  width="120px">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</th>
                                                            <th class="border border-dark text-super-sm text-center"  width="50%">SUBJECTS</th>
                                                            <th class="border border-dark text-super-sm"  >SEM FINAL GRADE</th>
                                                            <th class="border border-dark text-super-sm">REMEDIAL CLASS MARK</th>
                                                            <th class="border border-dark text-super-sm">RECOMPUTED FINAL GRADE</th>
                                                            <th class="border border-dark text-super-sm" >ACTION TAKEN</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td class="border border-dark">
                                                               <select id="subject_category_4_1" class="border-0 w-100" onchange="populateSubjects('subject_input_container_4_1', 'subject_category_4_1')">
                                                                  <option></option>
                                                                  <option value="CORE">CORE</option>
                                                                  <option value="APPLIED">APPLIED</option>
                                                                  <option value="SPECIALIZED">SPECIALIZED</option>
                                                                  <option value="OTHER">OTHER SUBJECTS</option>
                                                               </select>
                                                            </td>
                                                            <td id="subject_input_container_4_1" class="border border-dark">
                                                               <select id="subject_title_4_1" class="border-0 w-100">
                                                                  <?php foreach ($shs_subjs as $shs_subj): ?>
                                                                  <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_1_4" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_2_4" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td id="averageCell_4" class="border border-dark"></td>
                                                            <td id="passFailCell_4" class="border border-dark"></td>
                                                         </tr>
                                                         <tr class="no-padding">
                                                            <td class="border border-dark">
                                                               <select id="subject_category_4_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_4_2', 'subject_category_4_2')">
                                                                  <option></option>
                                                                  <option value="CORE">CORE</option>
                                                                  <option value="APPLIED">APPLIED</option>
                                                                  <option value="SPECIALIZED">SPECIALIZED</option>
                                                                  <option value="OTHER">OTHER SUBJECTS</option>
                                                               </select>
                                                            </td>
                                                            <td id="subject_input_container_4_2" class="border border-dark">
                                                               <select id="subject_title_4_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_4_2', 'subject_category_4_2')">
                                                                  <?php foreach ($shs_subjs as $shs_subj): ?>
                                                                  <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_3_4" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_4_4" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td id="averageCell2_4" class="border border-dark"></td>
                                                            <td id="passFailCell2_4" class="border border-dark"></td>
                                                         </tr>
                                                         <td class="border border-dark">
                                                            <select id="subject_category_4_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_4_3', 'subject_category_4_3')">
                                                               <option></option>
                                                               <option value="CORE">CORE</option>
                                                               <option value="APPLIED">APPLIED</option>
                                                               <option value="SPECIALIZED">SPECIALIZED</option>
                                                               <option value="OTHER">OTHER SUBJECTS</option>
                                                            </select>
                                                         </td>
                                                         <td id="subject_input_container_4_3" class="border border-dark">
                                                            <select id="subject_title_4_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_4_3', 'subject_category_4_3')">
                                                               <?php foreach ($shs_subjs as $shs_subj): ?>
                                                               <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_5_4" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_6_4" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td id="averageCell3_4" class="border border-dark"></td>
                                                         <td id="passFailCell3_4" class="border border-dark"></td>
                                                         </tr>
                                                         <tr class="no-padding">
                                                            <td class="border border-dark">
                                                               <select id="subject_category_4_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_4_4', 'subject_category_4_4')">
                                                                  <option></option>
                                                                  <option value="CORE">CORE</option>
                                                                  <option value="APPLIED">APPLIED</option>
                                                                  <option value="SPECIALIZED">SPECIALIZED</option>
                                                                  <option value="OTHER">OTHER SUBJECTS</option>
                                                               </select>
                                                            </td>
                                                            <td id="subject_input_container_4_4" class="border border-dark">
                                                               <select id="subject_title_4_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_4_4', 'subject_category_4_4')">
                                                                  <?php foreach ($shs_subjs as $shs_subj): ?>
                                                                  <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_7_4" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td class="border border-dark">
                                                               <select id="select_8_4" class="border-0 w-100">
                                                                  <option></option>
                                                                  <?php foreach ($shs_grds as $shs_grd): ?>
                                                                  <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                                  <?php endforeach; ?>
                                                               </select>
                                                            </td>
                                                            <td id="averageCell4_4" class="border border-dark"></td>
                                                            <td id="passFailCell4_4" class="border border-dark"></td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <div class="col-md-12">
                                                      <div class="form-group row align-items-center my-0">
                                                         <label for="sr_one_school_name" class="col-form-label text-super-sm">Name of Teacher/Adviser:</label>
                                                         <div class="col-sm-5 mr-4">
                                                            <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                         </div>
                                                         <label for="sr_one_school_id" class="col-form-label text-super-sm">Signature:</label>
                                                         <div class="col-sm-4">
                                                            <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
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
                              <div class="col-12  p-2 mb-2">
                                 <div class="container-fluid">
                                    <div class="row px-2 ">
                                       <div class="col-12">
                                          <div class="form-group row align-items-center my-0">
                                             <label for="sr_one_school_name" class="col-form-label text-super-sm">School:</label>
                                             <div class="col-sm-2">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                             </div>
                                             <label for="sr_one_school_id" class="col-form-label text-super-sm">School ID:</label>
                                             <div class="col-sm-2">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                             </div>
                                             <label for="sr_one_school_id" class="col-form-label text-super-sm">GRADE LEVEL:</label>
                                             <div class="col-sm-2">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                             </div>
                                             <label for="sr_one_school_id" class="col-form-label text-super-sm">SY:</label>
                                             <div class="col-sm-1">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                             </div>
                                             <label for="sr_one_school_id" class="col-form-label text-super-sm">SEM:</label>
                                             <div class="col-sm-2">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row px-2 ">
                                       <div class="col-12">
                                          <div class="form-group row align-items-center my-0">
                                             <label for="sr_one_school_name" class="col-form-label text-super-sm">TRACK/STRAND:</label>
                                             <div class="col-sm-6">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                             </div>
                                             <label for="sr_one_school_id" class="col-form-label text-super-sm">SECTION:</label>
                                             <div class="col-sm-4">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <table class="table table-sm table-bordered" style="max-height: 100px; overflow-y: auto;">
                                             <thead>
                                                <tr>
                                                   <th class="border border-dark text-super-sm" rowspan="2" width="120px">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</th>
                                                   <th class="border border-dark text-super-sm text-center" rowspan="2" width="50%">SUBJECTS</th>
                                                   <th class="border border-dark text-super-sm" colspan="2">Quarter</th>
                                                   <th class="border border-dark text-super-sm" rowspan="2" >SEM FINAL GRADE</th>
                                                   <th class="border border-dark text-super-sm" rowspan="2">ACTION TAKEN</th>
                                                </tr>
                                                <tr>
                                                   <th class="border border-dark text-super-sm" width="70px">1</th>
                                                   <th class="border border-dark text-super-sm" width="70px">2</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td class="border border-dark">
                                                      <select id="subject_category_5_1" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_1', 'subject_category_5_1')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_5_1" class="border border-dark">
                                                      <select id="subject_title_5_1" class="border-0 w-100">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_1_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_2_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell_5" class="border border-dark"></td>
                                                   <td id="passFailCell_5" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_5_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_2', 'subject_category_5_2')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_5_2" class="border border-dark">
                                                      <select id="subject_title_5_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_2', 'subject_category_5_2')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_3_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_4_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell2_5" class="border border-dark"></td>
                                                   <td id="passFailCell2_5" class="border border-dark"></td>
                                                </tr>
                                                <td class="border border-dark">
                                                   <select id="subject_category_5_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_3', 'subject_category_5_3')">
                                                      <option></option>
                                                      <option value="CORE">CORE</option>
                                                      <option value="APPLIED">APPLIED</option>
                                                      <option value="SPECIALIZED">SPECIALIZED</option>
                                                      <option value="OTHER">OTHER SUBJECTS</option>
                                                   </select>
                                                </td>
                                                <td id="subject_input_container_5_3" class="border border-dark">
                                                   <select id="subject_title_5_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_3', 'subject_category_5_3')">
                                                      <?php foreach ($shs_subjs as $shs_subj): ?>
                                                      <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                      <?php endforeach; ?>
                                                   </select>
                                                </td>
                                                <td class="border border-dark">
                                                   <select id="select_5_5" class="border-0 w-100">
                                                      <option></option>
                                                      <?php foreach ($shs_grds as $shs_grd): ?>
                                                      <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                      <?php endforeach; ?>
                                                   </select>
                                                </td>
                                                <td class="border border-dark">
                                                   <select id="select_6_5" class="border-0 w-100">
                                                      <option></option>
                                                      <?php foreach ($shs_grds as $shs_grd): ?>
                                                      <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                      <?php endforeach; ?>
                                                   </select>
                                                </td>
                                                <td id="averageCell3_5" class="border border-dark"></td>
                                                <td id="passFailCell3_5" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_5_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_4', 'subject_category_5_4')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_5_4" class="border border-dark">
                                                      <select id="subject_title_5_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_4', 'subject_category_5_4')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_7_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_8_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell4_5" class="border border-dark"></td>
                                                   <td id="passFailCell4_5" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_5_5" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_5', 'subject_category_5_5')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_5_5" class="border border-dark">
                                                      <select id="subject_title_5_5" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_5', 'subject_category_5_5')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_9_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_10_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell5_5" class="border border-dark"></td>
                                                   <td id="passFailCell5_5" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_5_6" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_6', 'subject_category_5_6')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_5_6" class="border border-dark">
                                                      <select id="subject_title_5_6" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_6', 'subject_category_5_6')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_11_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_12_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell6_5" class="border border-dark"></td>
                                                   <td id="passFailCell6_5" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_5_7" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_7', 'subject_category_5_7')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_5_7" class="border border-dark">
                                                      <select id="subject_title_5_7" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_7', 'subject_category_5_7')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_13_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_14_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell7_5" class="border border-dark"></td>
                                                   <td id="passFailCell7_5" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_5_8" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_8', 'subject_category_5_8')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_5_8" class="border border-dark">
                                                      <select id="subject_title_5_8" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_8', 'subject_category_5_8')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_15_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_16_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell8_5" class="border border-dark"></td>
                                                   <td id="passFailCell8_5" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_5_9" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_9', 'subject_category_5_9')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_5_9" class="border border-dark">
                                                      <select id="subject_title_5_9" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_9', 'subject_category_5_9')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_17_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_18_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell9_5" class="border border-dark"></td>
                                                   <td id="passFailCell9_5" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_5_10" class="border-0 w-2_100" onchange="populateSubjects('subject_input_container_5_10', 'subject_category_5_10')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_5_10" class="border border-dark">
                                                      <select id="subject_title_5_10" class="border-0 w-2_100" onchange="populateSubjects('subject_input_container_5_10', 'subject_category_5_10')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_19_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_20_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell10_5" class="border border-dark"></td>
                                                   <td id="passFailCell10_5" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_5_11" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_11', 'subject_category_5_11')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_5_11" class="border border-dark">
                                                      <select id="subject_title_5_11" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_11', 'subject_category_5_11')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_21_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_22_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell11_5" class="border border-dark"></td>
                                                   <td id="passFailCell11_5" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_5_12" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_12', 'subject_category_5_12')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_5_12" class="border border-dark">
                                                      <select id="subject_title_5_12" class="border-0 w-100" onchange="populateSubjects('subject_input_container_5_12', 'subject_category_5_12')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_23_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_24_5" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell12_5" class="border border-dark"></td>
                                                   <td id="passFailCell12_5" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td colspan="4" class="border border-dark text-bold" style="text-align: right; background-color:lightgray;">General Average:</td>
                                                   <td id="totalAverageCell_5" class="border border-dark"></td>
                                                   <td id="totalPassFailCell_5" class="border border-dark"></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="row px-2 ">
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0 py-0 ">
                                                   <label for="sr_one_school_name" class="col-form-label text-super-sm">Remarks:</label>
                                                   <div class="col-sm-11">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" value="PROMOTED TO GRADE 11 SECOND SEMESTER" id="sr_one_school_name">
                                                   </div>
                                                </div>
                                                <div class="form-group row align-items-center my-0 ">
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm">Prepared by:</label>
                                                   <div class="col-auto">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">Certified True and Correct:</label>
                                                   <div class="col-auto">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">Date Checked (MM/DD/YYYY):</label>
                                                   <div class="col-auto">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row px-2 ">
                                             <div class="col-12 d-flex justify-content-between">
                                                <div style="display: flex; flex-direction: column; align-items: center;">
                                                   <span style="display: inline-block;">
                                                   <input value="QUENNE ANNE B. DAANOY, LPT" type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                   </span>
                                                   <p class="card-text m-0 text-super-sm" >Signature of Adviser over Printed Name:</p>
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center;">
                                                   <span style="display: inline-block;">
                                                   <input value="JO-ANN S. BACHILLER, LPT/RECORDS OFFICER/ LIS Coordinator" type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                   </span>
                                                   <p class="card-text m-0 text-super-sm" >Signature of Authorized Person over Printed Name, Designation</p>
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center;">
                                                   <span style="display: inline-block;">
                                                   <input type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                   </span>
                                                   <p class="card-text m-0 text-super-sm" ></p>
                                                </div>
                                             </div>
                                             <div class="form-group col-12 d-flex align-items-center my-0 ">
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">REMEDIAL CLASSES 		Conducted from (MM/DD/YYYY):</label>
                                                <div class="col-2">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">to (MM/DD/YYYY):</label>
                                                <div class="col-auto">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">SCHOOL:</label>
                                                <div class="col-1">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">SCHOOL ID:</label>
                                                <div class="col-1">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                             </div>
                                          </div>
                                          <!-- remedial classes -->
                                          <div class="row my-0">
                                             <div class="col-md-12 my-0">
                                                <table class="table table-sm table-bordered my-0" style="max-height: 100px; overflow-y: auto;">
                                                   <thead>
                                                      <tr>
                                                         <th class="border border-dark text-super-sm"  width="120px">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</th>
                                                         <th class="border border-dark text-super-sm text-center"  width="50%">SUBJECTS</th>
                                                         <th class="border border-dark text-super-sm"  >SEM FINAL GRADE</th>
                                                         <th class="border border-dark text-super-sm">REMEDIAL CLASS MARK</th>
                                                         <th class="border border-dark text-super-sm">RECOMPUTED FINAL GRADE</th>
                                                         <th class="border border-dark text-super-sm" >ACTION TAKEN</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td class="border border-dark">
                                                            <select id="subject_category_6_1" class="border-0 w-100" onchange="populateSubjects('subject_input_container_6_1', 'subject_category_6_1')">
                                                               <option></option>
                                                               <option value="CORE">CORE</option>
                                                               <option value="APPLIED">APPLIED</option>
                                                               <option value="SPECIALIZED">SPECIALIZED</option>
                                                               <option value="OTHER">OTHER SUBJECTS</option>
                                                            </select>
                                                         </td>
                                                         <td id="subject_input_container_6_1" class="border border-dark">
                                                            <select id="subject_title_6_1" class="border-0 w-100">
                                                               <?php foreach ($shs_subjs as $shs_subj): ?>
                                                               <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_1_6" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_2_6" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td id="averageCell_6" class="border border-dark"></td>
                                                         <td id="passFailCell_6" class="border border-dark"></td>
                                                      </tr>
                                                      <tr class="no-padding">
                                                         <td class="border border-dark">
                                                            <select id="subject_category_6_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_6_2', 'subject_category_6_2')">
                                                               <option></option>
                                                               <option value="CORE">CORE</option>
                                                               <option value="APPLIED">APPLIED</option>
                                                               <option value="SPECIALIZED">SPECIALIZED</option>
                                                               <option value="OTHER">OTHER SUBJECTS</option>
                                                            </select>
                                                         </td>
                                                         <td id="subject_input_container_6_2" class="border border-dark">
                                                            <select id="subject_title_6_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_6_2', 'subject_category_6_2')">
                                                               <?php foreach ($shs_subjs as $shs_subj): ?>
                                                               <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_3_6" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_4_6" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td id="averageCell2_6" class="border border-dark"></td>
                                                         <td id="passFailCell2_6" class="border border-dark"></td>
                                                      </tr>
                                                      <td class="border border-dark">
                                                         <select id="subject_category_6_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_6_3', 'subject_category_6_3')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_6_3" class="border border-dark">
                                                         <select id="subject_title_6_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_6_3', 'subject_category_6_3')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_5_6" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_6_6" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell3_6" class="border border-dark"></td>
                                                      <td id="passFailCell3_6" class="border border-dark"></td>
                                                      </tr>
                                                      <tr class="no-padding">
                                                         <td class="border border-dark">
                                                            <select id="subject_category_6_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_6_4', 'subject_category_6_4')">
                                                               <option></option>
                                                               <option value="CORE">CORE</option>
                                                               <option value="APPLIED">APPLIED</option>
                                                               <option value="SPECIALIZED">SPECIALIZED</option>
                                                               <option value="OTHER">OTHER SUBJECTS</option>
                                                            </select>
                                                         </td>
                                                         <td id="subject_input_container_6_4" class="border border-dark">
                                                            <select id="subject_title_6_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_6_4', 'subject_category_6_4')">
                                                               <?php foreach ($shs_subjs as $shs_subj): ?>
                                                               <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_7_6" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_8_6" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td id="averageCell4_6" class="border border-dark"></td>
                                                         <td id="passFailCell4_6" class="border border-dark"></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                                <div class="col-md-12">
                                                   <div class="form-group row align-items-center my-0">
                                                      <label for="sr_one_school_name" class="col-form-label text-super-sm">Name of Teacher/Adviser:</label>
                                                      <div class="col-sm-5 mr-4">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                      </div>
                                                      <label for="sr_one_school_id" class="col-form-label text-super-sm">Signature:</label>
                                                      <div class="col-sm-4">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12  p-2 mb-2">
                                 <div class="container-fluid">
                                    <div class="row px-2 ">
                                       <div class="col-12">
                                          <div class="form-group row align-items-center my-0">
                                             <label for="sr_one_school_name" class="col-form-label text-super-sm">School:</label>
                                             <div class="col-sm-2">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                             </div>
                                             <label for="sr_one_school_id" class="col-form-label text-super-sm">School ID:</label>
                                             <div class="col-sm-2">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                             </div>
                                             <label for="sr_one_school_id" class="col-form-label text-super-sm">GRADE LEVEL:</label>
                                             <div class="col-sm-2">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                             </div>
                                             <label for="sr_one_school_id" class="col-form-label text-super-sm">SY:</label>
                                             <div class="col-sm-1">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                             </div>
                                             <label for="sr_one_school_id" class="col-form-label text-super-sm">SEM:</label>
                                             <div class="col-sm-2">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row px-2 ">
                                       <div class="col-12">
                                          <div class="form-group row align-items-center my-0">
                                             <label for="sr_one_school_name" class="col-form-label text-super-sm">TRACK/STRAND:</label>
                                             <div class="col-sm-6">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                             </div>
                                             <label for="sr_one_school_id" class="col-form-label text-super-sm">SECTION:</label>
                                             <div class="col-sm-4">
                                                <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <table class="table table-sm table-bordered" style="max-height: 100px; overflow-y: auto;">
                                             <thead>
                                                <tr>
                                                   <th class="border border-dark text-super-sm" rowspan="2" width="120px">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</th>
                                                   <th class="border border-dark text-super-sm text-center" rowspan="2" width="50%">SUBJECTS</th>
                                                   <th class="border border-dark text-super-sm" colspan="2">Quarter</th>
                                                   <th class="border border-dark text-super-sm" rowspan="2" >SEM FINAL GRADE</th>
                                                   <th class="border border-dark text-super-sm" rowspan="2">ACTION TAKEN</th>
                                                </tr>
                                                <tr>
                                                   <th class="border border-dark text-super-sm" width="70px">1</th>
                                                   <th class="border border-dark text-super-sm" width="70px">2</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td class="border border-dark">
                                                      <select id="subject_category_7_1" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_1', 'subject_category_7_1')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_7_1" class="border border-dark">
                                                      <select id="subject_title_7_1" class="border-0 w-100">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_1_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_2_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell_7" class="border border-dark"></td>
                                                   <td id="passFailCell_7" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_7_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_2', 'subject_category_7_2')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_7_2" class="border border-dark">
                                                      <select id="subject_title_7_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_2', 'subject_category_7_2')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_3_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_4_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell2_7" class="border border-dark"></td>
                                                   <td id="passFailCell2_7" class="border border-dark"></td>
                                                </tr>
                                                <td class="border border-dark">
                                                   <select id="subject_category_7_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_3', 'subject_category_7_3')">
                                                      <option></option>
                                                      <option value="CORE">CORE</option>
                                                      <option value="APPLIED">APPLIED</option>
                                                      <option value="SPECIALIZED">SPECIALIZED</option>
                                                      <option value="OTHER">OTHER SUBJECTS</option>
                                                   </select>
                                                </td>
                                                <td id="subject_input_container_7_3" class="border border-dark">
                                                   <select id="subject_title_7_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_3', 'subject_category_7_3')">
                                                      <?php foreach ($shs_subjs as $shs_subj): ?>
                                                      <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                      <?php endforeach; ?>
                                                   </select>
                                                </td>
                                                <td class="border border-dark">
                                                   <select id="select_5_7" class="border-0 w-100">
                                                      <option></option>
                                                      <?php foreach ($shs_grds as $shs_grd): ?>
                                                      <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                      <?php endforeach; ?>
                                                   </select>
                                                </td>
                                                <td class="border border-dark">
                                                   <select id="select_6_7" class="border-0 w-100">
                                                      <option></option>
                                                      <?php foreach ($shs_grds as $shs_grd): ?>
                                                      <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                      <?php endforeach; ?>
                                                   </select>
                                                </td>
                                                <td id="averageCell3_7" class="border border-dark"></td>
                                                <td id="passFailCell3_7" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_7_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_4', 'subject_category_7_4')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_7_4" class="border border-dark">
                                                      <select id="subject_title_7_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_4', 'subject_category_7_4')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_7_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_8_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell4_7" class="border border-dark"></td>
                                                   <td id="passFailCell4_7" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_7_5" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_5', 'subject_category_7_5')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_7_5" class="border border-dark">
                                                      <select id="subject_title_7_5" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_5', 'subject_category_7_5')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_9_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_10_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell5_7" class="border border-dark"></td>
                                                   <td id="passFailCell5_7" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_7_6" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_6', 'subject_category_7_6')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_7_6" class="border border-dark">
                                                      <select id="subject_title_7_6" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_6', 'subject_category_7_6')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_11_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_12_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell6_7" class="border border-dark"></td>
                                                   <td id="passFailCell6_7" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_7_7" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_7', 'subject_category_7_7')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_7_7" class="border border-dark">
                                                      <select id="subject_title_7_7" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_7', 'subject_category_7_7')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_13_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_14_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell7_7" class="border border-dark"></td>
                                                   <td id="passFailCell7_7" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_7_8" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_8', 'subject_category_7_8')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_7_8" class="border border-dark">
                                                      <select id="subject_title_7_8" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_8', 'subject_category_7_8')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_15_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_16_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell8_7" class="border border-dark"></td>
                                                   <td id="passFailCell8_7" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_7_9" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_9', 'subject_category_7_9')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_7_9" class="border border-dark">
                                                      <select id="subject_title_7_9" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_9', 'subject_category_7_9')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_17_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_18_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell9_7" class="border border-dark"></td>
                                                   <td id="passFailCell9_7" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_7_10" class="border-0 w-2_100" onchange="populateSubjects('subject_input_container_7_10', 'subject_category_7_10')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_7_10" class="border border-dark">
                                                      <select id="subject_title_7_10" class="border-0 w-2_100" onchange="populateSubjects('subject_input_container_7_10', 'subject_category_7_10')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_19_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_20_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell10_7" class="border border-dark"></td>
                                                   <td id="passFailCell10_7" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_7_11" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_11', 'subject_category_7_11')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_7_11" class="border border-dark">
                                                      <select id="subject_title_7_11" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_11', 'subject_category_7_11')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_21_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_22_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell11_7" class="border border-dark"></td>
                                                   <td id="passFailCell11_7" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td class="border border-dark">
                                                      <select id="subject_category_7_12" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_12', 'subject_category_7_12')">
                                                         <option></option>
                                                         <option value="CORE">CORE</option>
                                                         <option value="APPLIED">APPLIED</option>
                                                         <option value="SPECIALIZED">SPECIALIZED</option>
                                                         <option value="OTHER">OTHER SUBJECTS</option>
                                                      </select>
                                                   </td>
                                                   <td id="subject_input_container_7_12" class="border border-dark">
                                                      <select id="subject_title_7_12" class="border-0 w-100" onchange="populateSubjects('subject_input_container_7_12', 'subject_category_7_12')">
                                                         <?php foreach ($shs_subjs as $shs_subj): ?>
                                                         <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_23_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td class="border border-dark">
                                                      <select id="select_24_7" class="border-0 w-100">
                                                         <option></option>
                                                         <?php foreach ($shs_grds as $shs_grd): ?>
                                                         <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                         <?php endforeach; ?>
                                                      </select>
                                                   </td>
                                                   <td id="averageCell12_7" class="border border-dark"></td>
                                                   <td id="passFailCell12_7" class="border border-dark"></td>
                                                </tr>
                                                <tr class="no-padding">
                                                   <td colspan="4" class="border border-dark text-bold" style="text-align: right; background-color:lightgray;">General Average:</td>
                                                   <td id="totalAverageCell_7" class="border border-dark"></td>
                                                   <td id="totalPassFailCell_7" class="border border-dark"></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="row px-2 ">
                                             <div class="col-12">
                                                <div class="form-group row align-items-center my-0 py-0 ">
                                                   <label for="sr_one_school_name" class="col-form-label text-super-sm">Remarks:</label>
                                                   <div class="col-sm-11">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" value="PROMOTED TO GRADE 11 SECOND SEMESTER" id="sr_one_school_name">
                                                   </div>
                                                </div>
                                                <div class="form-group row align-items-center my-0 ">
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm">Prepared by:</label>
                                                   <div class="col-auto">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">Certified True and Correct:</label>
                                                   <div class="col-auto">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                   <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">Date Checked (MM/DD/YYYY):</label>
                                                   <div class="col-auto">
                                                      <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row px-2 ">
                                             <div class="col-12 d-flex justify-content-between">
                                                <div style="display: flex; flex-direction: column; align-items: center;">
                                                   <span style="display: inline-block;">
                                                   <input value="QUENNE ANNE B. DAANOY, LPT" type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                   </span>
                                                   <p class="card-text m-0 text-super-sm" >Signature of Adviser over Printed Name:</p>
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center;">
                                                   <span style="display: inline-block;">
                                                   <input value="JO-ANN S. BACHILLER, LPT/RECORDS OFFICER/ LIS Coordinator" type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                   </span>
                                                   <p class="card-text m-0 text-super-sm" >Signature of Authorized Person over Printed Name, Designation</p>
                                                </div>
                                                <div style="display: flex; flex-direction: column; align-items: center;">
                                                   <span style="display: inline-block;">
                                                   <input type="text" class=" text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                   </span>
                                                   <p class="card-text m-0 text-super-sm" ></p>
                                                </div>
                                             </div>
                                             <div class="form-group col-12 d-flex align-items-center my-0 ">
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm">REMEDIAL CLASSES 		Conducted from (MM/DD/YYYY):</label>
                                                <div class="col-2">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">to (MM/DD/YYYY):</label>
                                                <div class="col-auto">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">SCHOOL:</label>
                                                <div class="col-1">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                                <label for="sr_one_school_id" class="col-form-label text-super-sm ml-2">SCHOOL ID:</label>
                                                <div class="col-1">
                                                   <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                </div>
                                             </div>
                                          </div>
                                          <!-- remedial classes -->
                                          <div class="row my-0">
                                             <div class="col-md-12 my-0">
                                                <table class="table table-sm table-bordered my-0" style="max-height: 100px; overflow-y: auto;">
                                                   <thead>
                                                      <tr>
                                                         <th class="border border-dark text-super-sm"  width="120px">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</th>
                                                         <th class="border border-dark text-super-sm text-center"  width="50%">SUBJECTS</th>
                                                         <th class="border border-dark text-super-sm"  >SEM FINAL GRADE</th>
                                                         <th class="border border-dark text-super-sm">REMEDIAL CLASS MARK</th>
                                                         <th class="border border-dark text-super-sm">RECOMPUTED FINAL GRADE</th>
                                                         <th class="border border-dark text-super-sm" >ACTION TAKEN</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td class="border border-dark">
                                                            <select id="subject_category_8_1" class="border-0 w-100" onchange="populateSubjects('subject_input_container_8_1', 'subject_category_8_1')">
                                                               <option></option>
                                                               <option value="CORE">CORE</option>
                                                               <option value="APPLIED">APPLIED</option>
                                                               <option value="SPECIALIZED">SPECIALIZED</option>
                                                               <option value="OTHER">OTHER SUBJECTS</option>
                                                            </select>
                                                         </td>
                                                         <td id="subject_input_container_8_1" class="border border-dark">
                                                            <select id="subject_title_8_1" class="border-0 w-100">
                                                               <?php foreach ($shs_subjs as $shs_subj): ?>
                                                               <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_1_8" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_2_8" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td id="averageCell_8" class="border border-dark"></td>
                                                         <td id="passFailCell_8" class="border border-dark"></td>
                                                      </tr>
                                                      <tr class="no-padding">
                                                         <td class="border border-dark">
                                                            <select id="subject_category_8_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_8_2', 'subject_category_8_2')">
                                                               <option></option>
                                                               <option value="CORE">CORE</option>
                                                               <option value="APPLIED">APPLIED</option>
                                                               <option value="SPECIALIZED">SPECIALIZED</option>
                                                               <option value="OTHER">OTHER SUBJECTS</option>
                                                            </select>
                                                         </td>
                                                         <td id="subject_input_container_8_2" class="border border-dark">
                                                            <select id="subject_title_8_2" class="border-0 w-100" onchange="populateSubjects('subject_input_container_8_2', 'subject_category_8_2')">
                                                               <?php foreach ($shs_subjs as $shs_subj): ?>
                                                               <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_3_8" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_4_8" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td id="averageCell2_8" class="border border-dark"></td>
                                                         <td id="passFailCell2_8" class="border border-dark"></td>
                                                      </tr>
                                                      <td class="border border-dark">
                                                         <select id="subject_category_8_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_8_3', 'subject_category_8_3')">
                                                            <option></option>
                                                            <option value="CORE">CORE</option>
                                                            <option value="APPLIED">APPLIED</option>
                                                            <option value="SPECIALIZED">SPECIALIZED</option>
                                                            <option value="OTHER">OTHER SUBJECTS</option>
                                                         </select>
                                                      </td>
                                                      <td id="subject_input_container_8_3" class="border border-dark">
                                                         <select id="subject_title_8_3" class="border-0 w-100" onchange="populateSubjects('subject_input_container_8_3', 'subject_category_8_3')">
                                                            <?php foreach ($shs_subjs as $shs_subj): ?>
                                                            <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_5_8" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td class="border border-dark">
                                                         <select id="select_6_8" class="border-0 w-100">
                                                            <option></option>
                                                            <?php foreach ($shs_grds as $shs_grd): ?>
                                                            <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                      </td>
                                                      <td id="averageCell3_8" class="border border-dark"></td>
                                                      <td id="passFailCell3_8" class="border border-dark"></td>
                                                      </tr>
                                                      <tr class="no-padding">
                                                         <td class="border border-dark">
                                                            <select id="subject_category_8_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_8_4', 'subject_category_8_4')">
                                                               <option></option>
                                                               <option value="CORE">CORE</option>
                                                               <option value="APPLIED">APPLIED</option>
                                                               <option value="SPECIALIZED">SPECIALIZED</option>
                                                               <option value="OTHER">OTHER SUBJECTS</option>
                                                            </select>
                                                         </td>
                                                         <td id="subject_input_container_8_4" class="border border-dark">
                                                            <select id="subject_title_8_4" class="border-0 w-100" onchange="populateSubjects('subject_input_container_8_4', 'subject_category_8_4')">
                                                               <?php foreach ($shs_subjs as $shs_subj): ?>
                                                               <option class="<?php echo $shs_subj->shs_subj_type; ?>" value="<?php echo $shs_subj->shs_subj_title; ?>"><?php echo $shs_subj->shs_subj_title; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_7_8" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td class="border border-dark">
                                                            <select id="select_8_8" class="border-0 w-100">
                                                               <option></option>
                                                               <?php foreach ($shs_grds as $shs_grd): ?>
                                                               <option class="<?php echo $shs_grd->shs_grd_num; ?>" value="<?php echo $shs_grd->shs_grd_num; ?>"><?php echo $shs_grd->shs_grd_num; ?></option>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </td>
                                                         <td id="averageCell4_8" class="border border-dark"></td>
                                                         <td id="passFailCell4_8" class="border border-dark"></td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                                <div class="col-md-12">
                                                   <div class="form-group row align-items-center my-0">
                                                      <label for="sr_one_school_name" class="col-form-label text-super-sm">Name of Teacher/Adviser:</label>
                                                      <div class="col-sm-5 mr-4">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                      </div>
                                                      <label for="sr_one_school_id" class="col-form-label text-super-sm">Signature:</label>
                                                      <div class="col-sm-4">
                                                         <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- empty div border -->
                                                <div class="col-12 bg-color p-1">
                                                </div>
                                                <div class="row px-2 ">
                                                   <div class="col-12">
                                                      <div class="form-group row align-items-center my-0">
                                                         <label for="sr_one_school_name" class="col-form-label text-super-sm">Track/Strand Accomplished:</label>
                                                         <div class="col-sm-6 mr-5">
                                                            <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                         </div>
                                                         <label for="sr_one_school_id  ml-5" class="col-form-label text-super-sm">SHS General Average:</label>
                                                         <div class="col-sm-2">
                                                            <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row px-2 ">
                                                   <div class="col-12">
                                                      <div class="form-group row align-items-center my-0">
                                                         <label for="sr_one_school_name" class="col-form-label text-super-sm">Awards/Honors Received:</label>
                                                         <div class="col-sm-6 mr-5">
                                                            <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_name">
                                                         </div>
                                                         <label for="sr_one_school_id  ml-5" class="col-form-label text-super-sm">Date of SHS Graduation (MM/DD/YYYY):</label>
                                                         <div class="col-sm-2">
                                                            <input type="text" class="form-control form-input-height form-control-border form-control-sm form-control-border-dark" id="sr_one_school_id" placeholder="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-6">
                                                      <div class="row">
                                                         <h6 class="text-left font-weight-bold text-super-sm my-0 mt-2">Certified by:</h6>
                                                         <div style="display: flex; justify-content: space-around;">
                                                            <div style="display: flex; flex-direction: column; align-items: center; margin-right:10px;">
                                                               <span style="display: inline-block;">
                                                               <input  type="text" class="text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                               </span>
                                                               <p class="card-text m-0 text-super-sm">Signature of School Head over Printed Name:</p>
                                                            </div>
                                                            <div style="display: flex; flex-direction: column; align-items: center;">
                                                               <span style="display: inline-block;">
                                                               <input type="text" class="text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; font-size:10px">
                                                               </span>
                                                               <p class="card-text m-0 text-super-sm">Date</p>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <div class="row mt-2 border border-dark p-2	">
                                                            <h6 class="text-super-sm my-0 text-bold">Note:</h6>
                                                            <p class="text-super-sm">"This permanent record or a photocopy of this permanent record that bears the seal of the school and the original signature in ink of the School Head shall be considered valid for all legal purposes. Any erasure or alteration made on this copy should be validated by the School Head.
                                                               If the student transfers to another school, the originating school should produce one (1) certified true copy of this permanent record for safekeeping. The receiving school shall continue filling up the original form.
                                                               Upon graduation, the school from which the student graduated should keep the original form and produce one (1) certified true copy for the Division Office."									
                                                            </p>
                                                         </div>
                                                         <h6 class="text-super-sm my-0 text-bold">Remarks:</h6>
                                                         <p class="text-super-sm">(Please indicate the purpose for which this permanent record will be used)</p>
                                                         <h6 class="text-super-sm my-0 text-bold">
                                                            Copy of this record is set to:
                                                            <input class="col-6 no-border" style="border:0" type="text" value="A.S BERNARDO NATIONAL HIGH SCHOOL">
                                                         </h6>
                                                         <label class="text-super-sm">Date Issued (MM/DD/YYYY)</label>
                                                         <input class="text-super-sm" type="date" id="dateInput" style="border: 0;">
                                                      </div>
                                                   </div>
                                                   <div class="col-5 ml-1 border-left border-dark">
                                                      <div class=" p-3">
                                                         <h6 class="text-super-sm my-0 text-bold">Place School Seal:</h6>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
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
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                           <div class="card-body" id="card-container-three">
                              <h6 class="text-bold my-0">ANNEX: LIST OF SUBJECT TAKEN</h6>
                              <P class=" my-0">Please check the subjects passed by the student</P>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="oralCommunication">
                                 <label class="form-check-label" for="oralCommunication">Oral Communication</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="readingAndWriting">
                                 <label class="form-check-label" for="readingAndWriting">Reading and Writing</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="komunikasyonAtPananaliksikSaWikaAtKulturan">
                                 <label class="form-check-label" for="komunikasyonAtPananaliksikSaWikaAtKulturan">Komunikasyon at Pananaliksik sa Wika at Kulturan</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="pagbasaAtPagsusuriNgIba'tIbangTekstoTungo">
                                 <label class="form-check-label" for="pagbasaAtPagsusuriNgIba'tIbangTekstoTungo">Pagbasa at Pagsusuri ng Iba't Ibang Teksto Tungo</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="twentyFirstCenturyLiteratureFromThePhilippinesAndTheContemporaryPhilippineArtsFromTheRegions">
                                 <label class="form-check-label" for="twentyFirstCenturyLiteratureFromThePhilippinesAndTheContemporaryPhilippineArtsFromTheRegions">21st Century Literature from the Philippines and the Contemporary Philippine Arts from the Regions</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="mediaAndInformationLiteracy">
                                 <label class="form-check-label" for="mediaAndInformationLiteracy">Media and Information Literacy</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="generalMathematics">
                                 <label class="form-check-label" for="generalMathematics">General Mathematics</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="statisticsAndProbability">
                                 <label class="form-check-label" for="statisticsAndProbability">Statistics and Probability</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="earthAndLifeScience">
                                 <label class="form-check-label" for="earthAndLifeScience">Earth and Life Science*</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Physical Science*</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Personal Development/Pansariling Kaunlaran</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Understanding Culture, Society and Politics</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Introduction to the Philosophy of the Human Person/Pambungad sa Pilosopiya ng Tao</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Physical Education and Health(spread out in 4 semesters)</label>
                              </div>
                              <h6><u>*STEM students will take these instead</u></h6>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Earth Science </label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Disaster Readiness and Risk Reduction</label>
                              </div>
                              <h6><u>Subject substituition, if any</u></h6>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input type="text" class="text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input type="text" class="text-center form-control form-control-border form-control-sm form-control-border-dark" style="width: 200px; height: 20px; ">
                                 </span>
                              </div>
                              <h6 class="text-bold mt-3">Applied Sujects</h6>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">English for Academic and Professional Purposes</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Practical Research 1</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Practical Research 2</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Filipino sa Piling Larang </label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Empowerment Techonologies</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Entrepreneurship</label>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <label class="form-check-label" for="physicalScience">Inquiries,Investigation and Immersion</label>
                              </div>
                              <h6 class="text-bold mt-3">SPECIALIZED SUBJECTS (Please write the list of subjects below)</h6>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input value="Housekeeping" type="text" class=" form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input value="Disciplines and Ideas in the Social Sciences					
                                    " type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input value="Creative Writing/Malikhaing Pagsusulat					
                                    " type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input value="Food and Beverages Servicing					
                                    " type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input value="Creative Non Fiction: The Literary Essay					
                                    " type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input value="" type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input value="" type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input value="Discipline and Ideas in the Social Science					
                                    " type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input value="Creative Writing/ Maikling Pagsulat					
                                    " type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input value="Disciplines and Ideas in the Social Sciences					
                                    " type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <h6 class="text-bold mt-3">OTHER SUBJECTS (Please write the list of the subjects below)</h6>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input  type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input  type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                              <div class="form-check subject">
                                 <input type="checkbox" class="form-check-input" id="physicalScience">
                                 <input type="text" class="form-control form-control-border  form-control-border-dark" style="width: 400px; height: 20px; ">
                                 </span>
                              </div>
                           </div>
                            <div class="col-12" style="text-align: center;">
                              <div class="col-md-12">
                                 <div class="row">
                                    <button class="btn btn-primary" onclick="printContentThree()"><i class="fa fa-print"></i> Print</button>
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
                        <li class="nav-item">
                           <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Annex</a>
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
   function setSelectedOptionForPrinting(selectId) {
       var selectElement = document.getElementById(selectId);
       if (selectElement) {
           var selectedIndex = selectElement.selectedIndex;
           if (selectedIndex !== -1) {
               var selectedOption = selectElement.options[selectedIndex];
               selectedOption.setAttribute('selected', 'selected');
           }
       }
   }
   
   function printContent() {
       var selectElements = document.getElementsByTagName('select');
       Array.from(selectElements).forEach(function(select) {
           setSelectedOptionForPrinting(select.id);
       });
   
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
   window.onload = function() {
      for (var i = 1; i <= 12; i++) {
          var containerId = "subject_input_container_" + i;
          var categoryId = "subject_category_" + i;
          populateSubjects(containerId, categoryId);
      }
   };
   
   function populateSubjects(containerId, categoryId) {
      var categorySelect = document.getElementById(categoryId);
      var subjectContainer = document.getElementById(containerId);
      var category = categorySelect.value;
   
      subjectContainer.innerHTML = "";
   
      if (category === "OTHER") {
          var input = document.createElement("input");
          input.type = "text";
          input.className = "border-0 w-100";
          input.placeholder = "Enter other subject";
          subjectContainer.appendChild(input);
      } else {
          var subjectSelect = document.createElement("select");
          subjectSelect.id = containerId + "_select"; 
          subjectSelect.className = "border-0 w-100";
          subjectSelect.innerHTML = "<option></option>";
          <?php foreach ($shs_subjs as $shs_subj): ?>
              if (category === "<?php echo $shs_subj->shs_subj_type; ?>") {
                  var option = document.createElement("option");
                  option.value = "<?php echo $shs_subj->shs_subj_title; ?>";
                  option.text = "<?php echo $shs_subj->shs_subj_title; ?>";
                  subjectSelect.appendChild(option);
              }
          <?php endforeach; ?> 
          subjectContainer.appendChild(subjectSelect);
      }
   }
</script>
<script>
   window.onload = function() {
      for (var i = 1; i <= 12; i++) {
          var containerId = "subject_input_container_" + i;
          var categoryId = "subject_category_" + i;
          populateSubjects(containerId, categoryId);
          
          containerId = "subject_input_container_2_" + i; 
          categoryId = "subject_category_2_" + i; 
          populateSubjects(containerId, categoryId);
      }
   };
   
   function populateSubjects(containerId, categoryId) {
      var categorySelect = document.getElementById(categoryId);
      var subjectContainer = document.getElementById(containerId);
      var category = categorySelect.value;
   
      subjectContainer.innerHTML = "";
   
      if (category === "OTHER") {
          var input = document.createElement("input");
          input.type = "text";
          input.className = "border-0 w-100";
          input.placeholder = "Enter other subject";
          subjectContainer.appendChild(input);
      } else {
          var subjectSelect = document.createElement("select");
          subjectSelect.id = containerId + "_select"; 
          subjectSelect.className = "border-0 w-100";
          subjectSelect.innerHTML = "<option></option>";
          <?php foreach ($shs_subjs as $shs_subj): ?>
              if (category === "<?php echo $shs_subj->shs_subj_type; ?>") {
                  var option = document.createElement("option");
                  option.value = "<?php echo $shs_subj->shs_subj_title; ?>";
                  option.text = "<?php echo $shs_subj->shs_subj_title; ?>";
                  subjectSelect.appendChild(option);
              }
          <?php endforeach; ?> 
          subjectContainer.appendChild(subjectSelect);
      }
   }
</script>
<script>
   window.onload = function() {
    for (var i = 1; i <= 12; i++) {
        var containerId = "subject_input_container_" + i;
        var categoryId = "subject_category_" + i;
        populateSubjects(containerId, categoryId);
        
        containerId = "subject_input_container_2_" + i; 
        categoryId = "subject_category_2_" + i; 
        populateSubjects(containerId, categoryId);
   
        containerId = "subject_input_container_5_" + i; 
        categoryId = "subject_category_5_" + i; 
        populateSubjects(containerId, categoryId);
   
        containerId = "subject_input_container_7_" + i; 
        categoryId = "subject_category_7_" + i; 
        populateSubjects(containerId, categoryId);
    }
   
    for (var i = 1; i <= 4; i++) {
        var containerId = "subject_input_container_3_" + i;
        var categoryId = "subject_category_3_" + i;
        populateSubjects(containerId, categoryId);
   
        var containerId = "subject_input_container_4_" + i;
        var categoryId = "subject_category_4_" + i;
        populateSubjects(containerId, categoryId);
   
        var containerId = "subject_input_container_6_" + i;
        var categoryId = "subject_category_6_" + i;
        populateSubjects(containerId, categoryId);
        
        var containerId = "subject_input_container_8_" + i;
        var categoryId = "subject_category_8_" + i;
        populateSubjects(containerId, categoryId);
    }
   };
   
   function populateSubjects(containerId, categoryId) {
    var categorySelect = document.getElementById(categoryId);
    var subjectContainer = document.getElementById(containerId);
    var category = categorySelect.value;
   
    subjectContainer.innerHTML = "";
   
    if (category === "OTHER") {
        var input = document.createElement("input");
        input.type = "text";
        input.className = "border-0 w-100";
        input.placeholder = "Enter other subject";
        subjectContainer.appendChild(input);
    } else {
        var subjectSelect = document.createElement("select");
        subjectSelect.id = containerId + "_select"; 
        subjectSelect.className = "border-0 w-100";
        subjectSelect.innerHTML = "<option></option>";
        <?php foreach ($shs_subjs as $shs_subj): ?>
            if (category === "<?php echo $shs_subj->shs_subj_type; ?>") {
                var option = document.createElement("option");
                option.value = "<?php echo $shs_subj->shs_subj_title; ?>";
                option.text = "<?php echo $shs_subj->shs_subj_title; ?>";
                subjectSelect.appendChild(option);
            }
        <?php endforeach; ?> 
        subjectContainer.appendChild(subjectSelect);
    }
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
<script>
   function printContentThree() {
   	var initialStyles = {};
   
   	var elementsToHide = document.querySelectorAll('body > :not(#card-container-three)');
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
   
   	var originalContent = document.getElementById('card-container-three').cloneNode(true);
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
   function calculateAverageAndPassFail(select1, select2, averageCell, passFailCell) {
       const value1 = parseInt(select1.value);
       const value2 = parseInt(select2.value);
       const average = Math.round((value1 + value2) / 2); 
       averageCell.textContent = average;
       passFailCell.textContent = (average >= 75) ? 'Passed' : 'Failed';
       calculateTotalAverage();
   }
   
   function addEventListenerAndCalculate(select1, select2, averageCell, passFailCell) {
       select1.addEventListener('change', () => {
           calculateAverageAndPassFail(select1, select2, averageCell, passFailCell);
       });
       select2.addEventListener('change', () => {
           calculateAverageAndPassFail(select1, select2, averageCell, passFailCell);
       });
   }
   
   const averageCells = [
       document.getElementById('averageCell'),
       document.getElementById('averageCell2'),
       document.getElementById('averageCell3'),
       document.getElementById('averageCell4'),
       document.getElementById('averageCell5'),
       document.getElementById('averageCell6'),
       document.getElementById('averageCell7'),
       document.getElementById('averageCell8'),
       document.getElementById('averageCell9'),
       document.getElementById('averageCell10'),
       document.getElementById('averageCell11'),
       document.getElementById('averageCell12')
   ];
   
   function calculateTotalAverage() {
       let total = 0;
       let validCount = 0; 
       averageCells.forEach(cell => {
           const content = cell.textContent.trim(); 
           const value = parseInt(content);
           if (!isNaN(value)) { 
               total += value;
               validCount++;
           }
       });
       const totalAverage = Math.round(total / validCount);
       document.getElementById('totalAverageCell').textContent = totalAverage;
       const totalPassFailCell = document.getElementById('totalPassFailCell');
       totalPassFailCell.textContent = (totalAverage >= 75) ? 'Passed' : 'Failed';
   }
   
   addEventListenerAndCalculate(document.getElementById('select_1'), document.getElementById('select_2'), document.getElementById('averageCell'), document.getElementById('passFailCell'));
   addEventListenerAndCalculate(document.getElementById('select_3'), document.getElementById('select_4'), document.getElementById('averageCell2'), document.getElementById('passFailCell2'));
   addEventListenerAndCalculate(document.getElementById('select_5'), document.getElementById('select_6'), document.getElementById('averageCell3'), document.getElementById('passFailCell3'));
   addEventListenerAndCalculate(document.getElementById('select_7'), document.getElementById('select_8'), document.getElementById('averageCell4'), document.getElementById('passFailCell4'));
   addEventListenerAndCalculate(document.getElementById('select_9'), document.getElementById('select_10'), document.getElementById('averageCell5'), document.getElementById('passFailCell5'));
   addEventListenerAndCalculate(document.getElementById('select_11'), document.getElementById('select_12'), document.getElementById('averageCell6'), document.getElementById('passFailCell6'));
   addEventListenerAndCalculate(document.getElementById('select_13'), document.getElementById('select_14'), document.getElementById('averageCell7'), document.getElementById('passFailCell7'));
   addEventListenerAndCalculate(document.getElementById('select_15'), document.getElementById('select_16'), document.getElementById('averageCell8'), document.getElementById('passFailCell8'));
   addEventListenerAndCalculate(document.getElementById('select_17'), document.getElementById('select_18'), document.getElementById('averageCell9'), document.getElementById('passFailCell9'));
   addEventListenerAndCalculate(document.getElementById('select_19'), document.getElementById('select_20'), document.getElementById('averageCell10'), document.getElementById('passFailCell10'));
   addEventListenerAndCalculate(document.getElementById('select_21'), document.getElementById('select_22'), document.getElementById('averageCell11'), document.getElementById('passFailCell11'));
   addEventListenerAndCalculate(document.getElementById('select_23'), document.getElementById('select_24'), document.getElementById('averageCell12'), document.getElementById('passFailCell12'));
</script>
<script>
   function calculateAverageAndPassFail2(select1, select2, averageCell, passFailCell) {
       const value1 = parseInt(select1.value);
       const value2 = parseInt(select2.value);
       const average = Math.round((value1 + value2) / 2); 
       averageCell.textContent = average;
       passFailCell.textContent = (average >= 75) ? 'Passed' : 'Failed';
       calculateTotalAverage2();
   }
   
   function addEventListenerAndCalculate2(select1, select2, averageCell, passFailCell) {
       select1.addEventListener('change', () => {
           calculateAverageAndPassFail2(select1, select2, averageCell, passFailCell);
       });
       select2.addEventListener('change', () => {
           calculateAverageAndPassFail2(select1, select2, averageCell, passFailCell);
       });
   }
   
   const averageCells2 = [
       document.getElementById('averageCell_2'),
       document.getElementById('averageCell2_2'),
       document.getElementById('averageCell3_2'),
       document.getElementById('averageCell4_2'),
       document.getElementById('averageCell5_2'),
       document.getElementById('averageCell6_2'),
       document.getElementById('averageCell7_2'),
       document.getElementById('averageCell8_2'),
       document.getElementById('averageCell9_2'),
       document.getElementById('averageCell10_2'),
       document.getElementById('averageCell11_2'),
       document.getElementById('averageCell12_2')
   ];
   
   function calculateTotalAverage2() {
       let total = 0;
       let validCount = 0; 
       averageCells2.forEach(cell => {
           const content = cell.textContent.trim(); 
           const value = parseInt(content);
           if (!isNaN(value)) { 
               total += value;
               validCount++;
           }
       });
       const totalAverage = Math.round(total / validCount);
       document.getElementById('totalAverageCell_2').textContent = totalAverage;
       const totalPassFailCell = document.getElementById('totalPassFailCell_2');
       totalPassFailCell.textContent = (totalAverage >= 75) ? 'Passed' : 'Failed';
   }
   
   addEventListenerAndCalculate2(document.getElementById('select_1_2'), document.getElementById('select_2_2'), document.getElementById('averageCell_2'), document.getElementById('passFailCell_2'));
   addEventListenerAndCalculate2(document.getElementById('select_3_2'), document.getElementById('select_4_2'), document.getElementById('averageCell2_2'), document.getElementById('passFailCell2_2'));
   addEventListenerAndCalculate2(document.getElementById('select_5_2'), document.getElementById('select_6_2'), document.getElementById('averageCell3_2'), document.getElementById('passFailCell3_2'));
   addEventListenerAndCalculate2(document.getElementById('select_7_2'), document.getElementById('select_8_2'), document.getElementById('averageCell4_2'), document.getElementById('passFailCell4_2'));
   addEventListenerAndCalculate2(document.getElementById('select_9_2'), document.getElementById('select_10_2'), document.getElementById('averageCell5_2'), document.getElementById('passFailCell5_2'));
   addEventListenerAndCalculate2(document.getElementById('select_11_2'), document.getElementById('select_12_2'), document.getElementById('averageCell6_2'), document.getElementById('passFailCell6_2'));
   addEventListenerAndCalculate2(document.getElementById('select_13_2'), document.getElementById('select_14_2'), document.getElementById('averageCell7_2'), document.getElementById('passFailCell7_2'));
   addEventListenerAndCalculate2(document.getElementById('select_15_2'), document.getElementById('select_16_2'), document.getElementById('averageCell8_2'), document.getElementById('passFailCell8_2'));
   addEventListenerAndCalculate2(document.getElementById('select_17_2'), document.getElementById('select_18_2'), document.getElementById('averageCell9_2'), document.getElementById('passFailCell9_2'));
   addEventListenerAndCalculate2(document.getElementById('select_19_2'), document.getElementById('select_20_2'), document.getElementById('averageCell10_2'), document.getElementById('passFailCell10_2'));
   addEventListenerAndCalculate2(document.getElementById('select_21_2'), document.getElementById('select_22_2'), document.getElementById('averageCell11_2'), document.getElementById('passFailCell11_2'));
   addEventListenerAndCalculate2(document.getElementById('select_23_2'), document.getElementById('select_24_2'), document.getElementById('averageCell12_2'), document.getElementById('passFailCell12_2'));
</script>
<script>
   function calculateAverageAndPassFail3(select1, select2, averageCell, passFailCell) {
       const value1 = parseInt(select1.value);
       const value2 = parseInt(select2.value);
       const average = Math.round((value1 + value2) / 2);
       averageCell.textContent = average;
       passFailCell.textContent = (average >= 75) ? 'Passed' : 'Failed';
       calculateTotalAverage3();
   }
   
   function addEventListenerAndCalculate3(select1, select2, averageCell, passFailCell) {
       select1.addEventListener('change', () => {
           calculateAverageAndPassFail3(select1, select2, averageCell, passFailCell);
       });
       select2.addEventListener('change', () => {
           calculateAverageAndPassFail3(select1, select2, averageCell, passFailCell);
       });
   }
   
   const averageCells3 = [
       document.getElementById('averageCell_3'),
       document.getElementById('averageCell2_3'),
       document.getElementById('averageCell3_3'),
       document.getElementById('averageCell4_3')
   ];
   
   function calculateTotalAverage3() {
       let total = 0;
       let validCount = 0;
       averageCells3.forEach(cell => {
           const content = cell.textContent.trim();
           const value = parseInt(content);
           if (!isNaN(value)) {
               total += value;
               validCount++;
           }
       });
       const totalAverage = Math.round(total / validCount);
       document.getElementById('totalAverageCell_3').textContent = totalAverage;
       const totalPassFailCell = document.getElementById('totalPassFailCell_3');
       totalPassFailCell.textContent = (totalAverage >= 75) ? 'Passed' : 'Failed';
   }
   
   addEventListenerAndCalculate3(document.getElementById('select_1_3'), document.getElementById('select_2_3'), document.getElementById('averageCell_3'), document.getElementById('passFailCell_3'));
   addEventListenerAndCalculate3(document.getElementById('select_3_3'), document.getElementById('select_4_3'), document.getElementById('averageCell2_3'), document.getElementById('passFailCell2_3'));
   addEventListenerAndCalculate3(document.getElementById('select_5_3'), document.getElementById('select_6_3'), document.getElementById('averageCell3_3'), document.getElementById('passFailCell3_3'));
   addEventListenerAndCalculate3(document.getElementById('select_7_3'), document.getElementById('select_8_3'), document.getElementById('averageCell4_3'), document.getElementById('passFailCell4_3'));
</script>
<script>
   function calculateAverageAndPassFail4(select1, select2, averageCell, passFailCell) {
       const value1 = parseInt(select1.value);
       const value2 = parseInt(select2.value);
       const average = Math.round((value1 + value2) / 2);
       averageCell.textContent = average;
       passFailCell.textContent = (average >= 75) ? 'Passed' : 'Failed';
       calculateTotalAverage4();
   }
   
   function addEventListenerAndCalculate4(select1, select2, averageCell, passFailCell) {
       select1.addEventListener('change', () => {
           calculateAverageAndPassFail4(select1, select2, averageCell, passFailCell);
       });
       select2.addEventListener('change', () => {
           calculateAverageAndPassFail4(select1, select2, averageCell, passFailCell);
       });
   }
   
   const averageCells4 = [
       document.getElementById('averageCell_4'),
       document.getElementById('averageCell2_4'),
       document.getElementById('averageCell3_4'),
       document.getElementById('averageCell4_4')
   ];
   
   function calculateTotalAverage4() {
       let total = 0;
       let validCount = 0;
       averageCells4.forEach(cell => {
           const content = cell.textContent.trim();
           const value = parseInt(content);
           if (!isNaN(value)) {
               total += value;
               validCount++;
           }
       });
       const totalAverage = Math.round(total / validCount);
       document.getElementById('totalAverageCell_4').textContent = totalAverage;
       const totalPassFailCell = document.getElementById('totalPassFailCell_4');
       totalPassFailCell.textContent = (totalAverage >= 75) ? 'Passed' : 'Failed';
   }
   
   addEventListenerAndCalculate4(document.getElementById('select_1_4'), document.getElementById('select_2_4'), document.getElementById('averageCell_4'), document.getElementById('passFailCell_4'));
   addEventListenerAndCalculate4(document.getElementById('select_3_4'), document.getElementById('select_4_4'), document.getElementById('averageCell2_4'), document.getElementById('passFailCell2_4'));
   addEventListenerAndCalculate4(document.getElementById('select_5_4'), document.getElementById('select_6_4'), document.getElementById('averageCell3_4'), document.getElementById('passFailCell3_4'));
   addEventListenerAndCalculate4(document.getElementById('select_7_4'), document.getElementById('select_8_4'), document.getElementById('averageCell4_4'), document.getElementById('passFailCell4_4'));
</script>
<script>
   function calculateAverageAndPassFail5(select1, select2, averageCell, passFailCell) {
       const value1 = parseInt(select1.value);
       const value2 = parseInt(select2.value);
       const average = Math.round((value1 + value2) / 2); 
       averageCell.textContent = average;
       passFailCell.textContent = (average >= 75) ? 'Passed' : 'Failed';
       calculateTotalAverage5();
   }
   
   function addEventListenerAndCalculate5(select1, select2, averageCell, passFailCell) {
       select1.addEventListener('change', () => {
           calculateAverageAndPassFail5(select1, select2, averageCell, passFailCell);
       });
       select2.addEventListener('change', () => {
           calculateAverageAndPassFail5(select1, select2, averageCell, passFailCell);
       });
   }
   
   const averageCells5 = [
       document.getElementById('averageCell_5'),
       document.getElementById('averageCell2_5'),
       document.getElementById('averageCell3_5'),
       document.getElementById('averageCell4_5'),
       document.getElementById('averageCell5_5'),
       document.getElementById('averageCell6_5'),
       document.getElementById('averageCell7_5'),
       document.getElementById('averageCell8_5'),
       document.getElementById('averageCell9_5'),
       document.getElementById('averageCell10_5'),
       document.getElementById('averageCell11_5'),
       document.getElementById('averageCell12_5')
   ];
   
   function calculateTotalAverage5() {
       let total = 0;
       let validCount = 0; 
       averageCells5.forEach(cell => {
           const content = cell.textContent.trim(); 
           const value = parseInt(content);
           if (!isNaN(value)) { 
               total += value;
               validCount++;
           }
       });
       const totalAverage = Math.round(total / validCount);
       document.getElementById('totalAverageCell_5').textContent = totalAverage;
       const totalPassFailCell = document.getElementById('totalPassFailCell_5');
       totalPassFailCell.textContent = (totalAverage >= 75) ? 'Passed' : 'Failed';
   }
   
   addEventListenerAndCalculate5(document.getElementById('select_1_5'), document.getElementById('select_2_5'), document.getElementById('averageCell_5'), document.getElementById('passFailCell_5'));
   addEventListenerAndCalculate5(document.getElementById('select_3_5'), document.getElementById('select_4_5'), document.getElementById('averageCell2_5'), document.getElementById('passFailCell2_5'));
   addEventListenerAndCalculate5(document.getElementById('select_5_5'), document.getElementById('select_6_5'), document.getElementById('averageCell3_5'), document.getElementById('passFailCell3_5'));
   addEventListenerAndCalculate5(document.getElementById('select_7_5'), document.getElementById('select_8_5'), document.getElementById('averageCell4_5'), document.getElementById('passFailCell4_5'));
   addEventListenerAndCalculate5(document.getElementById('select_9_5'), document.getElementById('select_10_5'), document.getElementById('averageCell5_5'), document.getElementById('passFailCell5_5'));
   addEventListenerAndCalculate5(document.getElementById('select_11_5'), document.getElementById('select_12_5'), document.getElementById('averageCell6_5'), document.getElementById('passFailCell6_5'));
   addEventListenerAndCalculate5(document.getElementById('select_13_5'), document.getElementById('select_14_5'), document.getElementById('averageCell7_5'), document.getElementById('passFailCell7_5'));
   addEventListenerAndCalculate5(document.getElementById('select_15_5'), document.getElementById('select_16_5'), document.getElementById('averageCell8_5'), document.getElementById('passFailCell8_5'));
   addEventListenerAndCalculate5(document.getElementById('select_17_5'), document.getElementById('select_18_5'), document.getElementById('averageCell9_5'), document.getElementById('passFailCell9_5'));
   addEventListenerAndCalculate5(document.getElementById('select_19_5'), document.getElementById('select_20_5'), document.getElementById('averageCell10_5'), document.getElementById('passFailCell10_5'));
   addEventListenerAndCalculate5(document.getElementById('select_21_5'), document.getElementById('select_22_5'), document.getElementById('averageCell11_5'), document.getElementById('passFailCell11_5'));
   addEventListenerAndCalculate5(document.getElementById('select_23_5'), document.getElementById('select_24_5'), document.getElementById('averageCell12_5'), document.getElementById('passFailCell12_5'));
</script>
<script>
   function calculateAverageAndPassFail6(select1, select2, averageCell, passFailCell) {
       const value1 = parseInt(select1.value);
       const value2 = parseInt(select2.value);
       const average = Math.round((value1 + value2) / 2);
       averageCell.textContent = average;
       passFailCell.textContent = (average >= 75) ? 'Passed' : 'Failed';
       calculateTotalAverage6();
   }
   
   function addEventListenerAndCalculate6(select1, select2, averageCell, passFailCell) {
       select1.addEventListener('change', () => {
           calculateAverageAndPassFail6(select1, select2, averageCell, passFailCell);
       });
       select2.addEventListener('change', () => {
           calculateAverageAndPassFail6(select1, select2, averageCell, passFailCell);
       });
   }
   
   const averageCells6 = [
       document.getElementById('averageCell_6'),
       document.getElementById('averageCell2_6'),
       document.getElementById('averageCell3_6'),
       document.getElementById('averageCell4_6')
   ];
   
   function calculateTotalAverage6() {
       let total = 0;
       let validCount = 0;
       averageCells6.forEach(cell => {
           const content = cell.textContent.trim();
           const value = parseInt(content);
           if (!isNaN(value)) {
               total += value;
               validCount++;
           }
       });
       const totalAverage = Math.round(total / validCount);
       document.getElementById('totalAverageCell_6').textContent = totalAverage;
       const totalPassFailCell = document.getElementById('totalPassFailCell_6');
       totalPassFailCell.textContent = (totalAverage >= 75) ? 'Passed' : 'Failed';
   }
   
   addEventListenerAndCalculate6(document.getElementById('select_1_6'), document.getElementById('select_2_6'), document.getElementById('averageCell_6'), document.getElementById('passFailCell_6'));
   addEventListenerAndCalculate6(document.getElementById('select_3_6'), document.getElementById('select_4_6'), document.getElementById('averageCell2_6'), document.getElementById('passFailCell2_6'));
   addEventListenerAndCalculate6(document.getElementById('select_5_6'), document.getElementById('select_6_6'), document.getElementById('averageCell3_6'), document.getElementById('passFailCell3_6'));
   addEventListenerAndCalculate6(document.getElementById('select_7_6'), document.getElementById('select_8_6'), document.getElementById('averageCell4_6'), document.getElementById('passFailCell4_6'));
</script>
<script>
   function calculateAverageAndPassFail7(select1, select2, averageCell, passFailCell) {
       const value1 = parseInt(select1.value);
       const value2 = parseInt(select2.value);
       const average = Math.round((value1 + value2) / 2); 
       averageCell.textContent = average;
       passFailCell.textContent = (average >= 75) ? 'Passed' : 'Failed';
       calculateTotalAverage7();
   }
   
   function addEventListenerAndCalculate7(select1, select2, averageCell, passFailCell) {
       select1.addEventListener('change', () => {
           calculateAverageAndPassFail7(select1, select2, averageCell, passFailCell);
       });
       select2.addEventListener('change', () => {
           calculateAverageAndPassFail7(select1, select2, averageCell, passFailCell);
       });
   }
   
   const averageCells7 = [
       document.getElementById('averageCell_7'),
       document.getElementById('averageCell2_7'),
       document.getElementById('averageCell3_7'),
       document.getElementById('averageCell4_7'),
       document.getElementById('averageCell5_7'),
       document.getElementById('averageCell6_7'),
       document.getElementById('averageCell7_7'),
       document.getElementById('averageCell8_7'),
       document.getElementById('averageCell9_7'),
       document.getElementById('averageCell10_7'),
       document.getElementById('averageCell11_7'),
       document.getElementById('averageCell12_7')
   ];
   
   function calculateTotalAverage7() {
       let total = 0;
       let validCount = 0; 
       averageCells7.forEach(cell => {
           const content = cell.textContent.trim(); 
           const value = parseInt(content);
           if (!isNaN(value)) { 
               total += value;
               validCount++;
           }
       });
       const totalAverage = Math.round(total / validCount);
       document.getElementById('totalAverageCell_7').textContent = totalAverage;
       const totalPassFailCell = document.getElementById('totalPassFailCell_7');
       totalPassFailCell.textContent = (totalAverage >= 75) ? 'Passed' : 'Failed';
   }
   
   addEventListenerAndCalculate7(document.getElementById('select_1_7'), document.getElementById('select_2_7'), document.getElementById('averageCell_7'), document.getElementById('passFailCell_7'));
   addEventListenerAndCalculate7(document.getElementById('select_3_7'), document.getElementById('select_4_7'), document.getElementById('averageCell2_7'), document.getElementById('passFailCell2_7'));
   addEventListenerAndCalculate7(document.getElementById('select_5_7'), document.getElementById('select_6_7'), document.getElementById('averageCell3_7'), document.getElementById('passFailCell3_7'));
   addEventListenerAndCalculate7(document.getElementById('select_7_7'), document.getElementById('select_8_7'), document.getElementById('averageCell4_7'), document.getElementById('passFailCell4_7'));
   addEventListenerAndCalculate7(document.getElementById('select_9_7'), document.getElementById('select_10_7'), document.getElementById('averageCell5_7'), document.getElementById('passFailCell5_7'));
   addEventListenerAndCalculate7(document.getElementById('select_11_7'), document.getElementById('select_12_7'), document.getElementById('averageCell6_7'), document.getElementById('passFailCell6_7'));
   addEventListenerAndCalculate7(document.getElementById('select_13_7'), document.getElementById('select_14_7'), document.getElementById('averageCell7_7'), document.getElementById('passFailCell7_7'));
   addEventListenerAndCalculate7(document.getElementById('select_15_7'), document.getElementById('select_16_7'), document.getElementById('averageCell8_7'), document.getElementById('passFailCell8_7'));
   addEventListenerAndCalculate7(document.getElementById('select_17_7'), document.getElementById('select_18_7'), document.getElementById('averageCell9_7'), document.getElementById('passFailCell9_7'));
   addEventListenerAndCalculate7(document.getElementById('select_19_7'), document.getElementById('select_20_7'), document.getElementById('averageCell10_7'), document.getElementById('passFailCell10_7'));
   addEventListenerAndCalculate7(document.getElementById('select_21_7'), document.getElementById('select_22_7'), document.getElementById('averageCell11_7'), document.getElementById('passFailCell11_7'));
   addEventListenerAndCalculate7(document.getElementById('select_23_7'), document.getElementById('select_24_7'), document.getElementById('averageCell12_7'), document.getElementById('passFailCell12_7'));
</script>
<script>
   function calculateAverageAndPassFail8(select1, select2, averageCell, passFailCell) {
       const value1 = parseInt(select1.value);
       const value2 = parseInt(select2.value);
       const average = Math.round((value1 + value2) / 2);
       averageCell.textContent = average;
       passFailCell.textContent = (average >= 75) ? 'Passed' : 'Failed';
       calculateTotalAverage8();
   }
   
   function addEventListenerAndCalculate8(select1, select2, averageCell, passFailCell) {
       select1.addEventListener('change', () => {
           calculateAverageAndPassFail8(select1, select2, averageCell, passFailCell);
       });
       select2.addEventListener('change', () => {
           calculateAverageAndPassFail8(select1, select2, averageCell, passFailCell);
       });
   }
   
   const averageCells8 = [
       document.getElementById('averageCell_8'),
       document.getElementById('averageCell2_8'),
       document.getElementById('averageCell3_8'),
       document.getElementById('averageCell4_8')
   ];
   
   function calculateTotalAverage8() {
       let total = 0;
       let validCount = 0;
       averageCells8.forEach(cell => {
           const content = cell.textContent.trim();
           const value = parseInt(content);
           if (!isNaN(value)) {
               total += value;
               validCount++;
           }
       });
       const totalAverage = Math.round(total / validCount);
       document.getElementById('totalAverageCell_8').textContent = totalAverage;
       const totalPassFailCell = document.getElementById('totalPassFailCell_8');
       totalPassFailCell.textContent = (totalAverage >= 75) ? 'Passed' : 'Failed';
   }
   
   addEventListenerAndCalculate8(document.getElementById('select_1_8'), document.getElementById('select_2_8'), document.getElementById('averageCell_8'), document.getElementById('passFailCell_8'));
   addEventListenerAndCalculate8(document.getElementById('select_3_8'), document.getElementById('select_4_8'), document.getElementById('averageCell2_8'), document.getElementById('passFailCell2_8'));
   addEventListenerAndCalculate8(document.getElementById('select_5_8'), document.getElementById('select_6_8'), document.getElementById('averageCell3_8'), document.getElementById('passFailCell3_8'));
   addEventListenerAndCalculate8(document.getElementById('select_7_8'), document.getElementById('select_8_8'), document.getElementById('averageCell4_8'), document.getElementById('passFailCell4_8'));
</script>
<script>
   var currentDate = new Date().toISOString().split('T')[0];
   
   document.getElementById('dateInput').value = currentDate;
</script>
<?php include APPPATH . "views/templates/footer.php"; ?>