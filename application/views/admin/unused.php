 // function updateSubjectInput(categoryId, containerId) {
   //     const subjectCategoryDropdown = document.getElementById(categoryId);
   //     const subjectInputContainer = document.getElementById(containerId);
   
   //     const selectedCategory = subjectCategoryDropdown.value;
   //     subjectInputContainer.innerHTML = ''; 
   
   //     const select = document.createElement('select');
   //     select.classList.add('border-0', 'w-100');
   
   //     // Add empty option
   //     const emptyOption = document.createElement('option');
   //     emptyOption.value = '';
   //     emptyOption.textContent = '';
   //     select.appendChild(emptyOption);
   
   //     if (selectedCategory === 'OTHER') {
   //         const input = document.createElement('input');
   //         input.type = 'text';
   //         input.placeholder = 'Enter other subject';
   //         input.classList.add('border-0', 'w-100');
   //         subjectInputContainer.appendChild(input);
   //     } else {
   //         shsSubjs.forEach(subject => {
   //             if (subject.shs_subj_type === selectedCategory) {
   //                 const option = document.createElement('option');
   //                 option.value = subject.shs_subj_title;
   //                 option.textContent = subject.shs_subj_title;
   //                 select.appendChild(option);
   //             }
   //         });
   //         subjectInputContainer.appendChild(select);
   //     }
   // }




   <!-- <script>
   const shsSubjs = <?php echo json_encode($shs_subjs); ?>;
   
   function updateSubjectInput(categoryId, containerId) {
       const subjectCategoryDropdown = document.getElementById(categoryId);
       const subjectInputContainer = document.getElementById(containerId);
   
       const selectedCategory = subjectCategoryDropdown.value;
       subjectInputContainer.innerHTML = '';
   
       const select = document.createElement('select');
       select.classList.add('border-0', 'w-100');
   
       if (categoryId === 'subject_category_10' || categoryId === 'subject_category_11' || categoryId === 'subject_category_12') {
           const emptyOption = document.createElement('option');
           emptyOption.value = '';
           emptyOption.textContent = '';
           select.appendChild(emptyOption);
       }
   
       if (selectedCategory === 'OTHER') {
           const input = document.createElement('input');
           input.type = 'text';
           input.placeholder = 'Enter other subject';
           input.classList.add('border-0', 'w-100');
           subjectInputContainer.appendChild(input);
       } else {
           shsSubjs.forEach(subject => {
               if (subject.shs_subj_type === selectedCategory) {
                   const option = document.createElement('option');
                   option.value = subject.shs_subj_title;
                   option.textContent = subject.shs_subj_title;
                   select.appendChild(option);
               }
           });
           subjectInputContainer.appendChild(select);
       }
   }
   
   document.getElementById('subject_category_1').addEventListener('change', function() {
       updateSubjectInput('subject_category_1', 'subject_input_container_1');
   });
   
   document.getElementById('subject_category_2').addEventListener('change', function() {
       updateSubjectInput('subject_category_2', 'subject_input_container_2');
   });
   document.getElementById('subject_category_3').addEventListener('change', function() {
       updateSubjectInput('subject_category_3', 'subject_input_container_3');
   });
   document.getElementById('subject_category_4').addEventListener('change', function() {
       updateSubjectInput('subject_category_4', 'subject_input_container_4');
   });
   document.getElementById('subject_category_5').addEventListener('change', function() {
       updateSubjectInput('subject_category_5', 'subject_input_container_5');
   });
   document.getElementById('subject_category_6').addEventListener('change', function() {
       updateSubjectInput('subject_category_6', 'subject_input_container_6');
   });
   document.getElementById('subject_category_7').addEventListener('change', function() {
       updateSubjectInput('subject_category_7', 'subject_input_container_7');
   });
   document.getElementById('subject_category_8').addEventListener('change', function() {
       updateSubjectInput('subject_category_8', 'subject_input_container_8');
   });
   document.getElementById('subject_category_9').addEventListener('change', function() {
       updateSubjectInput('subject_category_9', 'subject_input_container_9');
   });
   document.getElementById('subject_category_10').addEventListener('change', function() {
       updateSubjectInput('subject_category_10', 'subject_input_container_10');
   });
   document.getElementById('subject_category_11').addEventListener('change', function() {
       updateSubjectInput('subject_category_11', 'subject_input_container_11');
   });
   document.getElementById('subject_category_12').addEventListener('change', function() {
       updateSubjectInput('subject_category_12', 'subject_input_container_12');
   });
   
   updateSubjectInput('subject_category_1', 'subject_input_container_1');
   updateSubjectInput('subject_category_2', 'subject_input_container_2');
   updateSubjectInput('subject_category_3', 'subject_input_container_3');
   updateSubjectInput('subject_category_4', 'subject_input_container_4');
   updateSubjectInput('subject_category_5', 'subject_input_container_5');
   updateSubjectInput('subject_category_6', 'subject_input_container_6');
   updateSubjectInput('subject_category_7', 'subject_input_container_7');
   updateSubjectInput('subject_category_8', 'subject_input_container_8');
   updateSubjectInput('subject_category_9', 'subject_input_container_9');
   updateSubjectInput('subject_category_10', 'subject_input_container_10');
   updateSubjectInput('subject_category_11', 'subject_input_container_11');
   updateSubjectInput('subject_category_12', 'subject_input_container_12');

   // function updateSubjectInput(categoryId, containerId) {
   //     const subjectCategoryDropdown = document.getElementById(categoryId);
   //     const subjectInputContainer = document.getElementById(containerId);
   
   //     const selectedCategory = subjectCategoryDropdown.value;
   //     subjectInputContainer.innerHTML = ''; 
   
   //     const select = document.createElement('select');
   //     select.classList.add('border-0', 'w-100');
   
   //     // Add empty option
   //     const emptyOption = document.createElement('option');
   //     emptyOption.value = '';
   //     emptyOption.textContent = '';
   //     select.appendChild(emptyOption);
   
   //     if (selectedCategory === 'OTHER') {
   //         const input = document.createElement('input');
   //         input.type = 'text';
   //         input.placeholder = 'Enter other subject';
   //         input.classList.add('border-0', 'w-100');
   //         subjectInputContainer.appendChild(input);
   //     } else {
   //         shsSubjs.forEach(subject => {
   //             if (subject.shs_subj_type === selectedCategory) {
   //                 const option = document.createElement('option');
   //                 option.value = subject.shs_subj_title;
   //                 option.textContent = subject.shs_subj_title;
   //                 select.appendChild(option);
   //             }
   //         });
   //         subjectInputContainer.appendChild(select);
   //     }
   // }
</script> -->